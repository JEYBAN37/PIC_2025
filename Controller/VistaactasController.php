<?php
App::uses('AppController', 'Controller');
/**
 * Vistaactas Controller
 *
 * @property Vistaacta $Vistaacta
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class VistaactasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Vistaacta->recursive = 0;
		$this->set('vistaactas', $this->Paginator->paginate());
	}

	function nuebus() {        
        $this->Vistaacta->recursive = 0;
        
        $paginate = array("fields" => array("id", "tema", "fecha",  "comuna", "nombredim", "activity", "grupo"));
        $this->Paginator->settings = $paginate;
        
        $count = $this->Vistaacta->find('count');
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
		if (!$this->Vistaacta->exists($id)) {
			throw new NotFoundException(__('Invalid vistaacta'));
		}
		$options = array('conditions' => array('Vistaacta.' . $this->Vistaacta->primaryKey => $id));
		$this->set('vistaacta', $this->Vistaacta->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vistaacta->create();
			if ($this->Vistaacta->save($this->request->data)) {
				$this->Session->setFlash(__('The vistaacta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vistaacta could not be saved. Please, try again.'));
			}
		}
		$ubicaciones = $this->Vistaacta->Ubicacion->find('list');
		$productos = $this->Vistaacta->Producto->find('list');
		$this->set(compact('ubicaciones', 'productos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Vistaacta->exists($id)) {
			throw new NotFoundException(__('Invalid vistaacta'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Vistaacta->save($this->request->data)) {
				$this->Session->setFlash(__('The vistaacta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vistaacta could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Vistaacta.' . $this->Vistaacta->primaryKey => $id));
			$this->request->data = $this->Vistaacta->find('first', $options);
		}
		$ubicaciones = $this->Vistaacta->Ubicacion->find('list');
		$productos = $this->Vistaacta->Producto->find('list');
		$this->set(compact('ubicaciones', 'productos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Vistaacta->id = $id;
		if (!$this->Vistaacta->exists()) {
			throw new NotFoundException(__('Invalid vistaacta'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Vistaacta->delete()) {
			$this->Session->setFlash(__('The vistaacta has been deleted.'));
		} else {
			$this->Session->setFlash(__('The vistaacta could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
