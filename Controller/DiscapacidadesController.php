<?php
App::uses('AppController', 'Controller');
/**
 * Discapacidades Controller
 *
 * @property Discapacidad $Discapacidad
 * @property PaginatorComponent $Paginator
 */
class DiscapacidadesController extends AppController {

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
		$this->Discapacidad->recursive = 0;
		$this->set('discapacidades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Discapacidad->exists($id)) {
			throw new NotFoundException(__('Discapacidad no válida'));
		}
		$options = array('conditions' => array('Discapacidad.' . $this->Discapacidad->primaryKey => $id));
		$this->set('discapacidad', $this->Discapacidad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Discapacidad->create();
			if ($this->Discapacidad->save($this->request->data)) {
				$this->Session->setFlash(__('La Discapacidad se ha guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La Discapacidad no se guardo. Por favor, inténtelo nuevamente.'));
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
	public function edit($id = null) {
		if (!$this->Discapacidad->exists($id)) {
			throw new NotFoundException(__('Discapacidad no válida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Discapacidad->save($this->request->data)) {
				$this->Session->setFlash(__('La Discapacidad se ha editado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La Discapacidad no se editado. Por favor, inténtelo de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Discapacidad.' . $this->Discapacidad->primaryKey => $id));
			$this->request->data = $this->Discapacidad->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Discapacidad->id = $id;
		if (!$this->Discapacidad->exists()) {
			throw new NotFoundException(__('Discapacidad no válida'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Discapacidad->delete()) {
			$this->Session->setFlash(__('La Discapacidad se ha eliminado.'));
		} else {
			$this->Session->setFlash(__('La Discapacidad no se ha eliminado. Por favor, inténtelo nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
