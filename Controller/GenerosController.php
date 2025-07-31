<?php
App::uses('AppController', 'Controller');
/**
 * Generos Controller
 *
 * @property Genero $Genero
 * @property PaginatorComponent $Paginator
 */
class GenerosController extends AppController {

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
		$this->Genero->recursive = 0;
		$this->set('generos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Genero->exists($id)) {
			throw new NotFoundException(__('Invalid genero'));
		}
		$options = array('conditions' => array('Genero.' . $this->Genero->primaryKey => $id));
		$this->set('genero', $this->Genero->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Genero->create();
			if ($this->Genero->save($this->request->data)) {
				$this->Session->setFlash(__('The genero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The genero could not be saved. Please, try again.'));
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
		if (!$this->Genero->exists($id)) {
			throw new NotFoundException(__('Invalid genero'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Genero->save($this->request->data)) {
				$this->Session->setFlash(__('The genero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The genero could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Genero.' . $this->Genero->primaryKey => $id));
			$this->request->data = $this->Genero->find('first', $options);
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
		$this->Genero->id = $id;
		if (!$this->Genero->exists()) {
			throw new NotFoundException(__('Invalid genero'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Genero->delete()) {
			$this->Session->setFlash(__('The genero has been deleted.'));
		} else {
			$this->Session->setFlash(__('The genero could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
