<?php
App::uses('AppController', 'Controller');
/**
 * Referentes Controller
 *
 * @property Referente $Referente
 * @property PaginatorComponent $Paginator
 */
class ReferentesController extends AppController {

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
		$this->Referente->recursive = 0;
		$this->set('referentes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Referente->exists($id)) {
			throw new NotFoundException(__('Invalid referente'));
		}
		$options = array('conditions' => array('Referente.' . $this->Referente->primaryKey => $id));
		$this->set('referente', $this->Referente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Referente->create();
			if ($this->Referente->save($this->request->data)) {
				$this->Session->setFlash(__('The referente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The referente could not be saved. Please, try again.'));
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
		if (!$this->Referente->exists($id)) {
			throw new NotFoundException(__('Invalid referente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Referente->save($this->request->data)) {
				$this->Session->setFlash(__('The referente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The referente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Referente.' . $this->Referente->primaryKey => $id));
			$this->request->data = $this->Referente->find('first', $options);
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
		$this->Referente->id = $id;
		if (!$this->Referente->exists()) {
			throw new NotFoundException(__('Invalid referente'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Referente->delete()) {
			$this->Session->setFlash(__('The referente has been deleted.'));
		} else {
			$this->Session->setFlash(__('The referente could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
