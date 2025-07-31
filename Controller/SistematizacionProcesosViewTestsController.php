<?php
App::uses('AppController', 'Controller');
/**
 * SistematizacionProcesosViewTests Controller
 *
 * @property SistematizacionProcesosViewTest $SistematizacionProcesosViewTest
 * @property PaginatorComponent $Paginator
 */
class SistematizacionProcesosViewTestsController extends AppController {

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
	public function index() {
		$this->SistematizacionProcesosViewTest->recursive = 0;
		$this->set('sistematizacionProcesosViewTests', $this->Paginator->paginate());
	}

	function nuebus() {        
        //$this->Acta->recursive = 0;
      $this->SistematizacionProcesosViewTest->recursive = 0;
        
        $paginate = array("fields" => array("id","fecha", "proactividad_id", "N_producto","Producto", "Dimension", "tarea", "tema", "objactividad","responsable"));
        $this->Paginator->settings = $paginate;
        
        $count = $this->SistematizacionProcesosViewTest->find('count');
        $this->Paginator->settings['limit'] = $count;
        
        $this->set("l", $this->paginate());
    }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SistematizacionProcesosViewTest->exists($id)) {
			throw new NotFoundException(__('Invalid sistematizacion procesos view test'));
		}
		$options = array('conditions' => array('SistematizacionProcesosViewTest.' . $this->SistematizacionProcesosViewTest->primaryKey => $id));
		$this->set('sistematizacionProcesosViewTest', $this->SistematizacionProcesosViewTest->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SistematizacionProcesosViewTest->create();
			if ($this->SistematizacionProcesosViewTest->save($this->request->data)) {
				$this->Session->setFlash(__('The sistematizacion procesos view test has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sistematizacion procesos view test could not be saved. Please, try again.'));
			}
		}
		$proactividades = $this->SistematizacionProcesosViewTest->Proactividad->find('list');
		$productos = $this->SistematizacionProcesosViewTest->Producto->find('list');
		$ubicaciones = $this->SistematizacionProcesosViewTest->Ubicacion->find('list');
		$responsables = $this->SistematizacionProcesosViewTest->Responsable->find('list');
		$plsesiones = $this->SistematizacionProcesosViewTest->Plsesion->find('list');
		$this->set(compact('proactividades', 'productos', 'ubicaciones', 'responsables', 'plsesiones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SistematizacionProcesosViewTest->exists($id)) {
			throw new NotFoundException(__('Invalid sistematizacion procesos view test'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SistematizacionProcesosViewTest->save($this->request->data)) {
				$this->Session->setFlash(__('The sistematizacion procesos view test has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sistematizacion procesos view test could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SistematizacionProcesosViewTest.' . $this->SistematizacionProcesosViewTest->primaryKey => $id));
			$this->request->data = $this->SistematizacionProcesosViewTest->find('first', $options);
		}
		$proactividades = $this->SistematizacionProcesosViewTest->Proactividad->find('list');
		$productos = $this->SistematizacionProcesosViewTest->Producto->find('list');
		$ubicaciones = $this->SistematizacionProcesosViewTest->Ubicacion->find('list');
		$responsables = $this->SistematizacionProcesosViewTest->Responsable->find('list');
		$plsesiones = $this->SistematizacionProcesosViewTest->Plsesion->find('list');
		$this->set(compact('proactividades', 'productos', 'ubicaciones', 'responsables', 'plsesiones'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SistematizacionProcesosViewTest->id = $id;
		if (!$this->SistematizacionProcesosViewTest->exists()) {
			throw new NotFoundException(__('Invalid sistematizacion procesos view test'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SistematizacionProcesosViewTest->delete()) {
			$this->Session->setFlash(__('The sistematizacion procesos view test has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sistematizacion procesos view test could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
