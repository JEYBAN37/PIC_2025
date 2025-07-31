<?php
App::uses('AppController', 'Controller');
/**
 * Grupos Controller
 *
 * @property Grupo $Grupo
 * @property PaginatorComponent $Paginator
 */
class GruposController extends AppController {

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
		$this->Grupo->recursive = 0;
		$this->set('grupos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Grupo->exists($id)) {
			throw new NotFoundException(__('Grupo no válido'));
		}
		$options = array('conditions' => array('Grupo.' . $this->Grupo->primaryKey => $id));
		$this->set('grupo', $this->Grupo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Grupo->create();
			if ($this->Grupo->save($this->request->data)) {
				$this->Session->setFlash(__('Se ha guardado correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha guardado. Por favor, inténtelo de nuevo.'));
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
		if (!$this->Grupo->exists($id)) {
			throw new NotFoundException(__('Grupo no válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Grupo->save($this->request->data)) {
				$this->Session->setFlash(__('El Grupo se ha editado correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha podido editar. Por favor, verifique de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Grupo.' . $this->Grupo->primaryKey => $id));
			$this->request->data = $this->Grupo->find('first', $options);
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
		$this->Grupo->id = $id;
		if (!$this->Grupo->exists()) {
			throw new NotFoundException(__('Grupo no válido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Grupo->delete()) {
			$this->Session->setFlash(__('Se ha borrado correctamente.'));
		} else {
			$this->Session->setFlash(__('No se ha eliminado. Por favor, inténtelo nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
