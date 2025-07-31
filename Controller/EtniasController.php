<?php
App::uses('AppController', 'Controller');
/**
 * Etnias Controller
 *
 * @property Etnia $Etnia
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EtniasController extends AppController {

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
		$this->Etnia->recursive = 0;
		$this->set('etnias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Etnia->exists($id)) {
			throw new NotFoundException(__('Etnia no válida'));
		}
		$options = array('conditions' => array('Etnia.' . $this->Etnia->primaryKey => $id));
		$this->set('etnia', $this->Etnia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Etnia->create();
			if ($this->Etnia->save($this->request->data)) {
				$this->Session->setFlash(__('La Etnia se ha guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La Etnia no se ha guardado. Por favor, inténtelo nuevamente.'));
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
		if (!$this->Etnia->exists($id)) {
			throw new NotFoundException(__('Etnia no válida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Etnia->save($this->request->data)) {
				$this->Session->setFlash(__('La Etnia se ha editado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La Etnia no se ha guardado. Por favor, inténtelo nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Etnia.' . $this->Etnia->primaryKey => $id));
			$this->request->data = $this->Etnia->find('first', $options);
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
		$this->Etnia->id = $id;
		if (!$this->Etnia->exists()) {
			throw new NotFoundException(__('Etnia no vá{ida'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Etnia->delete()) {
			$this->Session->setFlash(__('La Etnia se ha eliminado.'));
		} else {
			$this->Session->setFlash(__('La Etnia no se ha eliminado. Por favor, inténtelo de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
