<?php

App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');

/**

 * Actas Controller

 *

 * @property Acta $Acta
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * 
 * 
 * 

 */

Router::connect(
    '/:controller/:year/:month/:day',
    array('action' => 'index'),
    array(
        'year' => '[12][0-9]{3}',
        'month' => '0[1-9]|1[012]',
        'day' => '0[1-9]|[12][0-9]|3[01]'
    )
);
class ActasController extends AppController
{

    const ALERT_SUCCESS_CLASS = 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative'; // Puedes cambiar esto por clases Tailwind, por ejemplo: '';
    const ALERT_ERROR_CLASS = 'bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative';
    var $uses = array("Acta", "Producto", "Responsable", "Ubicacion");



    /**

     * Components

     *

     * @var array

     */
    public $helpers = array('Html', 'Form');
    public $components = array('Paginator', 'Session', 'RequestHandler');




    /**
     * index method
     * @return void
     */
    public function index()
    {
       
    }

    /**
     * view method
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
		$tipoUsuario = isset($_SESSION['Auth']['User']['group_id']) ? $_SESSION['Auth']['User']['group_id'] : '';

        if (!$this->Acta->exists($id)) {

            throw new NotFoundException(__('Invalid acta'));
        }

        $options = array('conditions' => array('Acta.' . $this->Acta->primaryKey => $id));

        $this->pdfConfig = array(
            'download' => true,
            'filename' => 'acta_' . $id . '.pdf'
        );

        $this->set('acta', $this->Acta->find('first', $options));
        $this->set('tipoUsuario', $tipoUsuario);
    }


    /**
     * add method
     * @return void
     */
    public function add()
    {
        // Obtener el producto más recientemente modificado
        $productos = $this->Acta->cargarProductos();
        $ubicaciones = $this->Acta->Ubicacion->find('list');
        $this->set(compact('productos', 'ubicaciones', 'responsables'));

        if ($this->request->is('post')) {
            $this->Acta->create();

            if ($this->Acta->save($this->request->data)) {
                $id = $this->Acta->id;
                $aux = "view/$id";
                return $this->redirect(array('action' => $aux));
            } else {
                $this->Session->setFlash(
                    'El acta no se ha guardado.  por favor verificar el formulario. Revise nuevamente todos los campos de selección.',
                    'default',
                    array('class' => self::ALERT_ERROR_CLASS)
                );
            }
        }
    }
    /**

     * edit method

     *

     * @throws NotFoundException

     * @param string $id

     * @return void

     */
    public function edit($id = null)
    {

        if (!$this->Acta->exists($id)) {

            throw new NotFoundException(__('Invalid acta'));
        }

        if ($this->request->is(array('post', 'put'))) {

            if (empty($this->request->data['Acta']['anexo']['name'])) {
                unset($this->request->data['Acta']['anexo']); // CakePHP no reemplaza
            } else {
                // Aquí procesar la subida de archivo
                $archivo = $this->request->data['Acta']['anexo'];
                $nombreArchivo = time() . '_' . $archivo['name'];
                move_uploaded_file($archivo['tmp_name'], WWW_ROOT . 'uploads' . DS . $nombreArchivo);
                $this->request->data['Acta']['anexo'] = $nombreArchivo;
            }


            if ($this->Acta->save($this->request->data)) {

                //$this->Session->setFlash(__('The acta has been saved.'));

                $aux = "view/$id";

                return $this->redirect(array('action' => $aux));
            } else {

                $this->Session->setFlash(__('El acta no se ha guardado. Por favor, revise el formulario.', 'defalut', array('class' => self::ALERT_SUCCESS_CLASS)));
            }
        } else {

            $options = array('conditions' => array('Acta.' . $this->Acta->primaryKey => $id));

            $this->request->data = $this->Acta->find('first', $options);
        }

        $productos = $this->Acta->Producto->find('list', array(
            'order' => array('Producto.modified' => 'DESC')
        ));
        $idredirect = $id;
        $ubicaciones = $this->Acta->Ubicacion->find('list');
        $responsables = $this->Acta->Responsable->find('list');
        $this->set(compact('productos', 'ubicaciones', 'responsables' ,'idredirect'));
    }

    public function editanexo($id = null)
    {

        if (!$this->Acta->exists($id)) {

            throw new NotFoundException(__('Invalid acta'));
        }

        if ($this->request->is(array('post', 'put'))) {

            //$name = date("Y_m_d H_i") + $this->request->data;
            //if ($this->Acta->save($name)) {
            if ($this->Acta->save($this->request->data)) {

                //$this->Session->setFlash(__('The acta has been saved.'));

                //return $this->redirect(array('action' => 'nuebus'));

                $id = $this->Acta->id;
                $aux = "view/$id";
                return $this->redirect(array('action' => $aux));
            } else {

                $this->Session->setFlash('El soporte del acta no se ha guardado. Por favor, revise el formulario.', 'default', array('class' => self::ALERT_ERROR_CLASS));
            }
        } else {

            $options = array('conditions' => array('Acta.' . $this->Acta->primaryKey => $id));

            $this->request->data = $this->Acta->find('first', $options);
        }

        $ubicaciones = $this->Acta->Ubicacion->find('list');

        $responsables = $this->Acta->Responsable->find('list');

        $this->set(compact('ubicaciones', 'responsables'));
    }

  

    public function getActas()
	{
		$this->autoRender = false;
		$this->response->type('json');

		$columns = ['Acta.id'];

		$start = $this->request->query('start');
		$length = $this->request->query('length');
		$search = $this->request->query('search')['value'];
		$order = $this->request->query('order');
		$columns = $this->request->query('columns');

		$orderBy = array();
		if (!empty($order)) {
			foreach ($order as $o) {
				$colIndex = intval($o['column']); // índice de la columna
				$colName = $columns[$colIndex]['data']; // nombre definido en JS (columns: [])
				$dir = strtoupper($o['dir']) === 'DESC' ? 'DESC' : 'ASC';

				// Mapear a las columnas reales de la BD
				switch ($colName) {
					case 'id':
						$orderBy['Acta.id'] = $dir;
						break;                                          
					case 'numproducto':
						// si es virtual o concatenado
						$orderBy['Producto.numproductos'] = $dir;
						break;
                    case 'nombredim':
						// si es virtual o concatenado
						$orderBy['Producto.nombredim'] = $dir;
						break;                       
					case 'actividad':
						$orderBy['Producto.actividad'] = $dir;
						break;
                    case 'fecha':
						$orderBy['Acta.fecha'] = $dir;
						break;
                    case 'tema':
						$orderBy['Acta.tema'] = $dir;
						break;
                     case 'alcancereunion':
						$orderBy['Acta.alcancereunion'] = $dir;
						break;
					case 'responsables':
						$orderBy['Responsable.nombres'] = $dir;
						break;
					
				}
			}
		}


		$conditions = [];
		if (!empty($search)) {
			$conditions['OR'] = [
				'Acta.id LIKE' => "%$search%",
				'Producto.actividad LIKE' => "%$search%",
				'Producto.id LIKE' => "%$search%",
				'Acta.tema LIKE' => "%$search%",
				'Responsable.nombres LIKE' => "%$search%"
			];
		}

		$total = $this->Acta->find('count');
		$filtered = $this->Acta->find('count', ['conditions' => $conditions]);

		$data = $this->Acta->find('all', array(
			'conditions' => $conditions,
			'fields' => array(
				'Acta.id',
				//'Acta.totalsesiones',
				'Acta.tema',
				'Acta.fecha',
                'acta.alcancereunion',
				//'(SELECT COUNT(*) FROM actas pr WHERE pr.acta_id = Acta.id) AS numSesiones'
			),
			
            'contain' => array(
                'Producto' => array(
                    'fields' => array(
                        'Producto.id',
                        'Producto.actividad',
                        'Producto.nombredim',
                        'Producto.numproductos'
                    )
                ),
                'Responsable' => array(
                    'fields' => array('Responsable.id', 'Responsable.nombres')
               )
            ),
			'limit' => $length,
			'offset' => $start,
			'order' => $orderBy,
			'recursive' => -1,
		));
        // debug($data);

		$result = [
			"draw" => intval($this->request->query('draw')),
			"recordsTotal" => $total,
			"recordsFiltered" => $filtered,
			"data" => []
		];

		foreach ($data as $row) {
			$result['data'][] = [
				'id' => $row['Acta']['id'],	
                'numproducto' => $row['Producto']['numproductos'],			
				//'nombreproducto' => $row['Producto']['producto'],
                'nombredim' => $row['Producto']['nombredim'],
                'actividad' => $row['Producto']['actividad'],
                'fecha' => $row['Acta']['fecha'],
                'tema' => $row['Acta']['tema'],
                'alcancereunion' => $row['Acta']['alcancereunion'],
                'responsables' => $row['Responsable']['nombres'],

				
				
			];
		}
       
		echo json_encode($result);
	}


    public function delete($id)
    {
       
        $this->Acta->delete($id);

        $this->redirect("index");
    }

   
}
