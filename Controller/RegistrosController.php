<?php
App::uses('AppController', 'Controller');
/**
 * Registros Controller
 *
 * @property Registro $Registro
 * @property PaginatorComponent $Paginator
 */
class RegistrosController extends AppController {

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
		$this->Registro->recursive = 0;
		$this->set('registros', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Registro->exists($id)) {
			throw new NotFoundException(__('Registro no válido'));
		}
		$options = array('conditions' => array('Registro.' . $this->Registro->primaryKey => $id));
		$this->set('registro', $this->Registro->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Registro->create();
			if ($this->Registro->save($this->request->data)) {
				$this->Session->setFlash(__('Se ha agrego con éxito.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha guardado. Por favor, inténte nuevamente.'));
			}
		}
		$usuarios = $this->Registro->Usuario->find('list');
		$actividades = $this->Registro->Actividad->find('list');
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
		if (!$this->Registro->exists($id)) {
			throw new NotFoundException(__('Registro no válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Registro->save($this->request->data)) {
				$this->Session->setFlash(__('Edición registrada con éxito.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha editado. Por favor, inténte nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Registro.' . $this->Registro->primaryKey => $id));
			$this->request->data = $this->Registro->find('first', $options);
		}
		$usuarios = $this->Registro->Usuario->find('list');
		$actividades = $this->Registro->Actividad->find('list');
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
		$this->Registro->id = $id;
		if (!$this->Registro->exists()) {
			throw new NotFoundException(__('Registro no válido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Registro->delete()) {
			$this->Session->setFlash(__('Eliminación correctamente.'));
		} else {
			$this->Session->setFlash(__('No se a podido eliminar. Por favor, inténtelo nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
