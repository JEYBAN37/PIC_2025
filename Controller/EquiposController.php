<?php
App::uses('AppController', 'Controller');
/**
 * Equipos Controller
 *
 * @property Equipo $Equipo
 * @property PaginatorComponent $Paginator
 */
class EquiposController extends AppController {

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
		$this->Equipo->recursive = 0;
		$this->set('equipos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Equipo->exists($id)) {
			throw new NotFoundException(__('Equipo no válido'));
		}
		$options = array('conditions' => array('Equipo.' . $this->Equipo->primaryKey => $id));
		$this->set('equipo', $this->Equipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Equipo->create();
			if ($this->Equipo->save($this->request->data)) {
				$this->Session->setFlash(__('El Equipo se ha guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Equipo no se pudo guardar. por favor, Verifique.'));
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
		if (!$this->Equipo->exists($id)) {
			throw new NotFoundException(__('Equipo no válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Equipo->save($this->request->data)) {
				$this->Session->setFlash(__('El Equipo se ha editado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Equipo no se puede editar. Por favor, inténte nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Equipo.' . $this->Equipo->primaryKey => $id));
			$this->request->data = $this->Equipo->find('first', $options);
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
		$this->Equipo->id = $id;
		if (!$this->Equipo->exists()) {
			throw new NotFoundException(__('Equipo no válido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Equipo->delete()) {
			$this->Session->setFlash(__('El Equipo se ha eliminado.'));
		} else {
			$this->Session->setFlash(__('El Equipo no se ha eliminado. Por favor, inténte de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
