<?php
App::uses('AppController', 'Controller');
/**
 * Sociedades Controller
 *
 * @property Sociedad $Sociedad
 * @property PaginatorComponent $Paginator
 */
class SociedadesController extends AppController {

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
		$this->Sociedad->recursive = 0;
		$this->set('sociedades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sociedad->exists($id)) {
			throw new NotFoundException(__('Sociedad no válida'));
		}
		$options = array('conditions' => array('Sociedad.' . $this->Sociedad->primaryKey => $id));
		$this->set('sociedad', $this->Sociedad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sociedad->create();
			if ($this->Sociedad->save($this->request->data)) {
				$this->Session->setFlash(__('Se guardo con éxito.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se guardo. Por favor, inténtelo nuevamente.'));
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
		if (!$this->Sociedad->exists($id)) {
			throw new NotFoundException(__('Sociedad no válida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sociedad->save($this->request->data)) {
				$this->Session->setFlash(__('Se edito correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha editado. Por favor, inténtelo de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Sociedad.' . $this->Sociedad->primaryKey => $id));
			$this->request->data = $this->Sociedad->find('first', $options);
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
		$this->Sociedad->id = $id;
		if (!$this->Sociedad->exists()) {
			throw new NotFoundException(__('Sociedad no válida'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sociedad->delete()) {
			$this->Session->setFlash(__('Se ha eliminado correctamente.'));
		} else {
			$this->Session->setFlash(__('No se ha eliminado. Por favor, inténtelo de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
