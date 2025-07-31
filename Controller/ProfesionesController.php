<?php
App::uses('AppController', 'Controller');
/**
 * Profesiones Controller
 *
 * @property Profesion $Profesion
 * @property PaginatorComponent $Paginator
 */
class ProfesionesController extends AppController {

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
		$this->Profesion->recursive = 0;
		$this->set('profesiones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Profesion->exists($id)) {
			throw new NotFoundException(__('Profesión no válida'));
		}
		$options = array('conditions' => array('Profesion.' . $this->Profesion->primaryKey => $id));
		$this->set('profesion', $this->Profesion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Profesion->create();
			if ($this->Profesion->save($this->request->data)) {
				$this->Session->setFlash(__('Registro guardado correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no se ha guardado. Por favor, inténtelo nuevamente.'));
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
		if (!$this->Profesion->exists($id)) {
			throw new NotFoundException(__('Profesión no válida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Profesion->save($this->request->data)) {
				$this->Session->setFlash(__('Se edito registro con exito.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se realizo edición. Por favor, verifique e inténte nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Profesion.' . $this->Profesion->primaryKey => $id));
			$this->request->data = $this->Profesion->find('first', $options);
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
		$this->Profesion->id = $id;
		if (!$this->Profesion->exists()) {
			throw new NotFoundException(__('Profesion no válida'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Profesion->delete()) {
			$this->Session->setFlash(__('Se elimino correctamente.'));
		} else {
			$this->Session->setFlash(__('No se ha podido eliminar. Por favor, inténte de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
