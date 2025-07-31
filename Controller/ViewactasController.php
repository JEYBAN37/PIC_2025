<?php
App::uses('AppController', 'Controller');
/**
 * Viewactas Controller
 *
 * @property Viewacta $Viewacta
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ViewactasController extends AppController {

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
		$this->Viewacta->recursive = 0;
		$this->set('viewactas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Viewacta->exists($id)) {
			throw new NotFoundException(__('Invalid viewacta'));
		}
		$options = array('conditions' => array('Viewacta.' . $this->Viewacta->primaryKey => $id));
		$this->set('viewacta', $this->Viewacta->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Viewacta->create();
			if ($this->Viewacta->save($this->request->data)) {
				$this->Session->setFlash(__('The viewacta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The viewacta could not be saved. Please, try again.'));
			}
		}
		$ubicaciones = $this->Viewacta->Ubicacion->find('list');
		$productos = $this->Viewacta->Producto->find('list');
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
		if (!$this->Viewacta->exists($id)) {
			throw new NotFoundException(__('Invalid viewacta'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Viewacta->save($this->request->data)) {
				$this->Session->setFlash(__('The viewacta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The viewacta could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Viewacta.' . $this->Viewacta->primaryKey => $id));
			$this->request->data = $this->Viewacta->find('first', $options);
		}
		$ubicaciones = $this->Viewacta->Ubicacion->find('list');
		$productos = $this->Viewacta->Producto->find('list');
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
		$this->Viewacta->id = $id;
		if (!$this->Viewacta->exists()) {
			throw new NotFoundException(__('Invalid viewacta'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Viewacta->delete()) {
			$this->Session->setFlash(__('The viewacta has been deleted.'));
		} else {
			$this->Session->setFlash(__('The viewacta could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
