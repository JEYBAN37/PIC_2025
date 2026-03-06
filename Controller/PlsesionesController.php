<?php

App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');

/**
 * Plsesiones Controller
 *
 * @property Plsesion $Plsesion
 * @property PaginatorComponent $Paginator
 */
class PlsesionesController extends AppController
{

    const ALERT_SUCCESS_CLASS = 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative'; // Puedes cambiar esto por clases Tailwind, por ejemplo: '';
    const ALERT_ERROR_CLASS = 'bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative';

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session', 'RequestHandler');
    var $uses = array("Plsesion", "Responsable", "Producto", "Acta");

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
         $tipoUsuario = isset($_SESSION['Auth']['User']['group_id']) ? $_SESSION['Auth']['User']['group_id'] : '';
       $this->set('tipoUsuario', $tipoUsuario);
    }

    /*public function nuebus()
    {
      $tipoUsuario = isset($_SESSION['Auth']['User']['group_id']) ? $_SESSION['Auth']['User']['group_id'] : '';
       $this->set('tipoUsuario', $tipoUsuario);
  
    }*/

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
        if (!$this->Plsesion->exists($id)) {
            throw new NotFoundException(__('Invalid plsesion'));
        }

        $plsesion = $this->Plsesion->find('first', array(
            'conditions' => array(
                'Plsesion.' . $this->Plsesion->primaryKey => $id
            ),
            'contain' => array(
                'Producto' => array('fields' => array('id', 'producto', 'actividad')),
                'Responsable' => array('fields' => array('id', 'nombres', 'profesion')),
                'Plsmomento' => array('fields' => array('id', 'momento', 'duracion', 'resultado', 'insumo', 'metodologia')),
            )
        ));

        $totalDuracion = array_reduce($plsesion['Plsmomento'], function ($carry, $item) {
            // Asumiendo que la duración está en formato "X minutos"
            $duracion = $this->convertirDuracionAMinutos($item['duracion']);
            return $carry + $duracion;
        }, 0);

        $totalEnSesion = $this->convertirDuracionAMinutos($plsesion['Plsesion']['hora_fin']);
        $totalDuracion = $totalDuracion . ' minutos';

        $this->set(compact('plsesion', 'totalDuracion', 'totalEnSesion'));
    }

    private function convertirDuracionAMinutos($duracion)
    {
        $mapa = array(
            '5 minutos' => 5,
            '10 minutos' => 10,
            '15 minutos' => 15,
            '20 minutos' => 20,
            '25 minutos' => 25,
            '30 minutos' => 30,
            '35 minutos' => 35,
            '40 minutos' => 40,
            '45 minutos' => 45,
            '50 minutos' => 50,
            '55 minutos' => 55,
            'Una Hora' => 60,
            'Una Hora y media' => 90,
            'Dos Horas' => 120,
            'Tres Horas' => 180,
            'Cuatro horas' => 240,
            'Seis horas' => 360,
            'Ocho horas' => 480
        );
        if (isset($mapa[$duracion])) {
            return $mapa[$duracion];
        }
        // Si ya es un número, lo retorna
        if (is_numeric($duracion)) {
            return intval($duracion);
        }
        return 0;
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
		$productos = $this->cargarProductosSelect();
        $this->set(compact('productos'));

        if ($this->request->is('post')) {
            $this->Plsesion->create();
            if ($this->Plsesion->save($this->request->data)) {
                $this->Session->setFlash(__('El Plan de sesion ha sido guardado.'));
                //return $this->redirect(array('action' => 'nuebus'));
                return $this->redirect(array('controller' => 'Plsmomentos', 'action' => 'add?sesion=' . $this->Plsesion->id));
            } else {
                $this->Session->setFlash('El plan de sesión no ha sido guardado. Por favor, trate nuevamente.', 'default', array('class' => self::ALERT_ERROR_CLASS));
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
        if (!$this->Plsesion->exists($id)) {
            throw new NotFoundException(__('Invalid plsesion'));
        }
        if ($this->request->is(array('post', 'put'))) {

            if (empty($this->request->data['Plsesion']['anexo']['name'])) {
                unset($this->request->data['Plsesion']['anexo']); // CakePHP no reemplaza
            } else {
                // Aquí procesar la subida de archivo
                $archivo = $this->request->data['Plsesion']['anexo'];
                $nombreArchivo = time() . '_' . $archivo['name'];
                move_uploaded_file($archivo['tmp_name'], WWW_ROOT . 'uploads' . DS . $nombreArchivo);
                $this->request->data['Plsesion']['anexo'] = $nombreArchivo;
            }

            if ($this->Plsesion->save($this->request->data)) {
                $this->Session->setFlash('El plan de sesión ha sido guardado. agregue momentos al plan de sesión', 'default', array('class' => self::ALERT_SUCCESS_CLASS));
                return $this->redirect(array('controller' => 'Plsesiones', 'action' => 'view', $this->Plsesion->id));
            } else {
                $this->Session->setFlash('El plan de sesión no ha sido guardado. Por favor, trate nuevamente.', 'default', array('class' => self::ALERT_ERROR_CLASS));
            }
        } else {
            $options = array('conditions' => array('Plsesion.' . $this->Plsesion->primaryKey => $id));
            $this->request->data = $this->Plsesion->find('first', $options);
            $this->request->data = $this->tranformData($this->request->data);
        }

        $idResponsable = isset($this->request->data['Plsesion']['responsable_id']) ? $this->request->data['Plsesion']['responsable_id'] : null;
        $responsable = $idResponsable ? $this->Responsable->find('first', [
            'conditions' => ['Responsable.id' => $idResponsable],
            'fields' => ['id', 'nombres']
        ]) : null;
        $productos = $this->cargarProductosSelect();
        $idredirect = $id;
        $this->set(compact('responsable', 'productos', 'idredirect'));
    }

    private function tranformData($data)
    {
        // Ejemplo: viene "2. Hombres,4. Niños y niñas"
        if (!empty($data['Plsesion']['tipoblacion'])) {
            $poblacionStr = $data['Plsesion']['tipoblacion'];
            // Extraer cada palabra/frase hasta la coma
            $tipos = array_map('trim', explode(',', $poblacionStr));
            $data['Plsesion']['tipoblacion'] = $tipos;
        }

        if (!empty($data['Plsesion']['cursovida'])) {
            $cursovidaStr = strtolower($data['Plsesion']['cursovida']);
            // Extraer cada palabra/frase hasta la coma
            $tipos = array_map('trim', explode(',', $cursovidaStr));
            $data['Plsesion']['cursovida'] = $tipos;
        }

        return $data;
    }

    public function editanexo($id = null)
    {
        if (!$this->Plsesion->exists($id)) {
            throw new NotFoundException(__('Invalid plan'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Plsesion->save($this->request->data)) {
                $this->Session->setFlash('El plan de sesión sido guardado.', 'default', array('class' => self::ALERT_SUCCESS_CLASS));
                return $this->redirect(array('action' => 'nuebus'));
            } else {
                $this->Session->setFlash('Los soportes no sido guardado. Por favor, trate nuevamente.', 'default', array('class' => self::ALERT_ERROR_CLASS));
            }
        } else {
            $options = array('conditions' => array('Plsesion.' . $this->Plsesion->primaryKey => $id));
            $this->request->data = $this->Plsesion->find('first', $options);
        }
        $responsables = $this->Plsesion->Responsable->find('list');
        $this->set(compact('responsables'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null)
    {
        $this->Plsesion->id = $id;
        if (!$this->Plsesion->exists()) {
            throw new NotFoundException(__('Invalid plsesion'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Plsesion->delete()) {
            $this->Session->setFlash(__('The plsesion has been deleted.'));
        } else {
            $this->Session->setFlash(__('The plsesion could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'nuebus'));
    }

    public function getNumberSesions($idProducto = null)
    {
        $this->autoRender = false;
        $this->response->type('json');

        $numberSesion = $this->Plsesion->obtenerUltimaSesion($idProducto);
        echo json_encode(['numSesiones' => $numberSesion]);
        exit;
    }

    public function getPlsesiones($idResponsable = null)
    {
        $this->autoRender = false;
        $this->response->type('json');
        $columns = ['Plsesion.id'];

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
                        $orderBy['Plsesion.id'] = $dir;
                        break;
                    case 'fecha':
                        // si es virtual o concatenado
                        $orderBy['Plsesion.fecha'] = $dir;
                        break;
                    case 'tema':
                        $orderBy['Plsesion.tema'] = $dir;
                        break;
                    case 'intension':
                        $orderBy['Plsesion.intension'] = $dir;
                        break;
                    case 'objetivog':
                        $orderBy['Plsesion.objetivog'] = $dir;
                        break;
                    case 'tipoblacion':
                        $orderBy['Plsesion.tipoblacion'] = $dir;
                        break;
                    case 'dimension':
                        $orderBy['Plsesion.dimension'] = $dir;
                        break;
                    case 'proceso':
                        $orderBy['Plsesion.proceso'] = $dir;
                        break;
                    case 'created':
                        $orderBy['Plsesion.created'] = $dir;
                        break;
                }
            }
        }
        $conditions = [];
       


       
                $conditions['OR'] = [
                    'Plsesion.id LIKE' => "%$search%",
                    'Plsesion.fecha LIKE' => "%$search%",
                    'Plsesion.intension LIKE' => "%$search%",
                    'Plsesion.tema LIKE' => "%$search%",
                    'Plsesion.objetivog LIKE' => "%$search%",
                    'Plsesion.tipoblacion LIKE' => "%$search%",
                    'Plsesion.dimension LIKE' => "%$search%",
                    'Plsesion.proceso LIKE' => "%$search%",
                    'Plsesion.created LIKE' => "%$search%",
                ];
            

        $total = $this->Plsesion->find('count');
        $filtered = $this->Plsesion->find('count', ['conditions' => $conditions]);

        $data = $this->Plsesion->find('all', array(
            'conditions' => $conditions,
            'fields' => array(
                'Plsesion.id',
                'Plsesion.fecha',
                'Plsesion.intension',
                'Plsesion.tema',
                'Plsesion.objetivog',
                'Plsesion.tipoblacion',
                'Plsesion.dimension',
                'Plsesion.proceso',
                'Plsesion.created'
            ),
            'contain' => array(
                'Producto' => array(
                    'fields' => array(
                        'Producto.id'
                    )
                )
            ),
            'limit' => $length,
            'offset' => $start,
            'order' => $orderBy,
            'recursive' => -1,
        ));

        $result = [
            "draw" => intval($this->request->query('draw')),
            "recordsTotal" => $total,
            "recordsFiltered" => $filtered,
            "data" => []
        ];



        foreach ($data as $row) {
            $result['data'][] = [
                'id' => $row['Plsesion']['id'],
                'fecha' => $row['Plsesion']['fecha'],
                'intension' => $row['Plsesion']['intension'],
                'tema' => $row['Plsesion']['tema'],
                'objetivog' => $row['Plsesion']['objetivog'],
                'tipoblacion' => $row['Plsesion']['tipoblacion'],
                'dimension' => $row['Plsesion']['dimension'],
                'proceso' => $row['Plsesion']['proceso'],
                'created' => $row['Plsesion']['created']
            ];
        }
        echo json_encode($result);
    }
}
