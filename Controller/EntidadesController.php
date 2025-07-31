<?php
App::uses('AppController', 'Controller');
/**
 * Entidades Controller
 *
 * @property Entidad $Entidad
 * @property PaginatorComponent $Paginator
 */
class EntidadesController extends AppController {

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
		$this->Entidad->recursive = 0;
		$this->set('entidades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Entidad->exists($id)) {
			throw new NotFoundException(__('Entidad no válida'));
		}
		$options = array('conditions' => array('Entidad.' . $this->Entidad->primaryKey => $id));
		$this->set('entidad', $this->Entidad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Entidad->create();
			if ($this->Entidad->save($this->request->data)) {
				$this->Session->setFlash(__('La Entidad se ha guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La Entidad no se ha guardado. Por favor, inténtelo nuevamente.'));
			}
		}
		$entidades = $this->Entidad->Entidad->find('list');
		$proyectos = $this->Entidad->Proyecto->find('list');
		$this->set(compact('entidades', 'proyectos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Entidad->exists($id)) {
			throw new NotFoundException(__('Entidad no válida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Entidad->save($this->request->data)) {
				$this->Session->setFlash(__('La Entidad se ha editado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La Entidad no se ha editado. Por favor, inténtelo de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Entidad.' . $this->Entidad->primaryKey => $id));
			$this->request->data = $this->Entidad->find('first', $options);
		}
		$entidades = $this->Entidad->Entidad->find('list');
		$proyectos = $this->Entidad->Proyecto->find('list');
		$this->set(compact('entidades', 'proyectos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Entidad->id = $id;
		if (!$this->Entidad->exists()) {
			throw new NotFoundException(__('Entidad no válida'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Entidad->delete()) {
			$this->Session->setFlash(__('La Entidad se ha eliminado.'));
		} else {
			$this->Session->setFlash(__('La Entidad no se ha eliminado. Por favor, verifique.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
