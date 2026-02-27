<?php
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');
/**
 * Infoeventos Controller
 *
 * @property Infoevento $Infoevento
 * @property PaginatorComponent $Paginator
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
class InfoeventosController extends AppController
{

	const ALERT_SUCCESS_CLASS = 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative'; // Puedes cambiar esto por clases Tailwind, por ejemplo: '';
	const ALERT_ERROR_CLASS = 'bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative';
	var $uses = array("Infoevento", "Producto", "Responsable");
	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator');
	/**
	 * index method
	 *
	 * @return void
	 */

	public function beforeFilter()
	{
		parent::beforeFilter();
		// Permitir acceso a métodos JSON sin autenticación
		$this->Auth->allow('getInfoeventos');
	}

	public function index($id = null) {}


	public function editanexo($id = null)
	{
		if (!$this->Infoevento->exists($id)) {
			throw new NotFoundException(__('Invalid infoevento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Infoevento->save($this->request->data)) {
				//$this->Session->setFlash(__('The infoevento has been saved.'));
				//return $this->redirect(array('action' => 'index'));


				$id = $this->Infoevento->id;
				$aux = "view/$id";
				return $this->redirect(array('action' => $aux));
			} else {
				$this->Session->setFlash('El formulario no se ha guardado, por favor verifique la informacion.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Infoevento.' . $this->Infoevento->primaryKey => $id));
			$this->request->data = $this->Infoevento->find('first', $options);
		}
		$ubicaciones = $this->Infoevento->Ubicacion->find('list');
		$productos = $this->Infoevento->Producto->find('list');
		$responsables = $this->Infoevento->Responsable->find('list');
		$this->set(compact('ubicaciones', 'productos', 'responsables'));
	}
	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null)
	{
		if (!$this->Infoevento->exists($id)) {
			throw new NotFoundException(__('Invalid infoevento'));
		}
		$options = array('conditions' => array('Infoevento.' . $this->Infoevento->primaryKey => $id));
		$this->set('infoevento', $this->Infoevento->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Infoevento->create();
			if ($this->Infoevento->save($this->request->data)) {
				//$this->Session->setFlash(__('The infoevento has been saved.'));
				//return $this->redirect(array('action' => 'index'));

				$id = $this->Infoevento->id;
				$aux = "view/$id";
				return $this->redirect(array('action' => $aux));
			} else {
				$this->Session->setFlash('El formulario no se ha guardado, por favor verifique la informacion.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$ubicaciones = $this->cargarUbicacionesSelect();
		$productos = $this->cargarProductosSelect();
		$responsables = $this->Infoevento->Responsable->find('list');
		$this->set(compact('ubicaciones', 'productos', 'responsables'));
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
		if (!$this->Infoevento->exists($id)) {
			throw new NotFoundException(__('Invalid infoevento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Infoevento->save($this->request->data)) {
				//$this->Session->setFlash(__('The infoevento has been saved.'));
				//return $this->redirect(array('action' => 'index'));


				$id = $this->Infoevento->id;
				$aux = "view/$id";
				return $this->redirect(array('action' => $aux));
			} else {
				$this->Session->setFlash('El formulario no se ha guardado, por favor verifique la informacion.', 'default', array('alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Infoevento.' . $this->Infoevento->primaryKey => $id));
			$this->request->data = $this->Infoevento->find('first', $options);
		}
		$idredirect = $id;
		$ubicaciones = $this->cargarUbicacionesSelect();
		$productos = $this->cargarProductosSelect();
		$responsables = $this->Infoevento->Responsable->find('list');

		$this->set(compact('ubicaciones', 'productos', 'responsables', 'idredirect'));
	}


	public function getInfoeventos()
	{
		$this->autoRender = false;
		$this->response->type('json');

		$columns = ['Infoevento.id'];

		$start = $this->request->query('start');
		$length = $this->request->query('length') ? $this->request->query('length') : 10;
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
						$orderBy['Infoevento.id'] = $dir;
						break;
					case 'idactividad':
						// si es virtual o concatenado
						$orderBy['Producto.id'] = $dir;
						break;
					case 'numproducto':
						// si es virtual o concatenado
						$orderBy['Producto.numproductos'] = $dir;
						break;
					case 'prioridad':
						// si es virtual o concatenado
						$orderBy['Producto.nombredim'] = $dir;
						break;

					case 'tarea':
						$orderBy['Producto.tarea'] = $dir;
						break;
					case 'fecha':
						$orderBy['Infoevento.fecha'] = $dir;
						break;
					case 'tema':
						$orderBy['Infoevento.tema'] = $dir;
						break;
					case 'tipo':
						$orderBy['Infoevento.tipo'] = $dir;
						break;
					case 'grupo':
						$orderBy['Infoevento.nombregrupo'] = $dir;
						break;
					case 'responsable':
						$orderBy['Responsable.nombres'] = $dir;
						break;
				}
			}
		}


		$conditions = [];
		if (!empty($search)) {
			$conditions['OR'] = [
				'Infoevento.id LIKE' => "%$search%",
				'Infoevento.fecha LIKE' => "%$search%",
				'Infoevento.tema LIKE' => "%$search%",
				'Infoevento.tipo LIKE' => "%$search%",
				'Infoevento.nombregrupo LIKE' => "%$search%",
				'Responsable.nombres LIKE' => "%$search%",
				'Producto.numproductos LIKE' => "%$search%",
				'Producto.nombredim LIKE' => "%$search%",
				'Producto.tarea LIKE' => "%$search%",
				'Producto.id LIKE' => "%$search%",

			];
		}

		$total = $this->Infoevento->find('count');
		$filtered = $this->Infoevento->find('count', ['conditions' => $conditions]);

		$data = $this->Infoevento->find('all', array(
			'conditions' => $conditions,
			'fields' => array(
				'Infoevento.id',
				'Infoevento.fecha',
				'Infoevento.tema',
				'Infoevento.tipo',
				'Infoevento.nombregrupo'
			),

			'contain' => array(
				'Producto' => array(
					'fields' => array(
						'Producto.id',
						'Producto.nombredim',
						'Producto.numproductos',

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
				'id' => $row['Infoevento']['id'],
				'idactividad' => $row['Producto']['id'],
				'numproducto' => $row['Producto']['numproductos'],
				'prioridad' => $row['Producto']['nombredim'],
				'fecha' => $row['Infoevento']['fecha'],
				'tema' => $row['Infoevento']['tema'],
				'tipo' => $row['Infoevento']['tipo'],
				'grupo' => $row['Infoevento']['nombregrupo'],
				'responsables' => $row['Responsable']['nombres'],



			];
		}


		echo json_encode($result);
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	/*public function delete($id = null) {
		$this->Infoevento->id = $id;
		if (!$this->Infoevento->exists()) {
			throw new NotFoundException(__('Invalid infoevento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Infoevento->delete()) {
			$this->Session->setFlash(__('The infoevento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The infoevento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}*/
}
