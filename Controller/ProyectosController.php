<?php
App::uses('AppController', 'Controller');
/**
 * Proyectos Controller
 *
 * @property Proyecto $Proyecto
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ProyectosController extends AppController {

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
		$this->Proyecto->recursive = 0;
		$this->set('proyectos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Proyecto->exists($id)) {
			throw new NotFoundException(__('Proyecto no válido'));
		}
		$options = array('conditions' => array('Proyecto.' . $this->Proyecto->primaryKey => $id));
		$this->set('proyecto', $this->Proyecto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Proyecto->create();
			if ($this->Proyecto->save($this->request->data)) {
				$this->Session->setFlash(__('Se guardo el registro correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no se ha guardado. Por favor, Vuelva a inténtarlo.'));
			}
		}
		$entidades = $this->Proyecto->Entidad->find('list');
		$poblaciones = $this->Proyecto->Poblacion->find('list');
		$ubicaciones = $this->Proyecto->Ubicacion->find('list');
		$this->set(compact('entidades', 'poblaciones', 'ubicaciones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Proyecto->exists($id)) {
			throw new NotFoundException(__('Proyecto no válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Proyecto->save($this->request->data)) {
				$this->Session->setFlash(__('Se edito correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha podido editar. Por favor, inténte nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Proyecto.' . $this->Proyecto->primaryKey => $id));
			$this->request->data = $this->Proyecto->find('first', $options);
		}
		$entidades = $this->Proyecto->Entidad->find('list');
		$poblaciones = $this->Proyecto->Poblacion->find('list');
		$ubicaciones = $this->Proyecto->Ubicacion->find('list');
		$this->set(compact('entidades', 'poblaciones', 'ubicaciones'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Proyecto->id = $id;
		if (!$this->Proyecto->exists()) {
			throw new NotFoundException(__('Proyecto no válido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Proyecto->delete()) {
			$this->Session->setFlash(__('Se elimino correctamente.'));
		} else {
			$this->Session->setFlash(__('No se ha podido eliminar. Por favor, inténte nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
