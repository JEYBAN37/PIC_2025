<?php
App::uses('AppController', 'Controller');
/**
 * Poblaciones Controller
 *
 * @property Poblacion $Poblacion
 * @property PaginatorComponent $Paginator
 */
class PoblacionesController extends AppController {

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
		$this->Poblacion->recursive = 0;
		$this->set('poblaciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Poblacion->exists($id)) {
			throw new NotFoundException(__('Poblacion no válida'));
		}
		$options = array('conditions' => array('Poblacion.' . $this->Poblacion->primaryKey => $id));
		$this->set('poblacion', $this->Poblacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Poblacion->create();
			if ($this->Poblacion->save($this->request->data)) {
				$this->Session->setFlash(__('Se ha guardado correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha guardado. Por favor, inténte nuevamente.'));
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
		if (!$this->Poblacion->exists($id)) {
			throw new NotFoundException(__('Poblacion no válida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Poblacion->save($this->request->data)) {
				$this->Session->setFlash(__('Se ha actualizado correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha podido actualizar. Por favor, verifique e inténte nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Poblacion.' . $this->Poblacion->primaryKey => $id));
			$this->request->data = $this->Poblacion->find('first', $options);
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
		$this->Poblacion->id = $id;
		if (!$this->Poblacion->exists()) {
			throw new NotFoundException(__('Población no válida'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Poblacion->delete()) {
			$this->Session->setFlash(__('Se elimino correctamente.'));
		} else {
			$this->Session->setFlash(__('No se puede eliminar. Por favor, inténte nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
