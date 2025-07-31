<?php
App::uses('AppController', 'Controller');
/**
 * UsuariosActividades Controller
 *
 * @property UsuariosActividad $UsuariosActividad
 * @property PaginatorComponent $Paginator
 */
class UsuariosActividadesController extends AppController {

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
		$this->UsuariosActividad->recursive = 0;
		$this->set('usuariosActividades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UsuariosActividad->exists($id)) {
			throw new NotFoundException(__('Invalid usuarios actividad'));
		}
		$options = array('conditions' => array('UsuariosActividad.' . $this->UsuariosActividad->primaryKey => $id));
		$this->set('usuariosActividad', $this->UsuariosActividad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UsuariosActividad->create();
			if ($this->UsuariosActividad->save($this->request->data)) {
				$this->Session->setFlash(__('The usuarios actividad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuarios actividad could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->UsuariosActividad->Usuario->find('list');
		$actividades = $this->UsuariosActividad->Actividad->find('list');
		$this->set(compact('usuarios', 'actividades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UsuariosActividad->exists($id)) {
			throw new NotFoundException(__('Invalid usuarios actividad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UsuariosActividad->save($this->request->data)) {
				$this->Session->setFlash(__('The usuarios actividad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuarios actividad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UsuariosActividad.' . $this->UsuariosActividad->primaryKey => $id));
			$this->request->data = $this->UsuariosActividad->find('first', $options);
		}
		$usuarios = $this->UsuariosActividad->Usuario->find('list');
		$actividades = $this->UsuariosActividad->Actividad->find('list');
		$this->set(compact('usuarios', 'actividades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UsuariosActividad->id = $id;
		if (!$this->UsuariosActividad->exists()) {
			throw new NotFoundException(__('Invalid usuarios actividad'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UsuariosActividad->delete()) {
			$this->Session->setFlash(__('The usuarios actividad has been deleted.'));
		} else {
			$this->Session->setFlash(__('The usuarios actividad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
