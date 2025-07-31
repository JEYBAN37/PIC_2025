<?php
App::uses('AppController', 'Controller');
/**
 * Sectores Controller
 *
 * @property Sector $Sector
 * @property PaginatorComponent $Paginator
 */
class SectoresController extends AppController {

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
		$this->Sector->recursive = 0;
		$this->set('sectores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sector->exists($id)) {
			throw new NotFoundException(__('Sector no válido'));
		}
		$options = array('conditions' => array('Sector.' . $this->Sector->primaryKey => $id));
		$this->set('sector', $this->Sector->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sector->create();
			if ($this->Sector->save($this->request->data)) {
				$this->Session->setFlash(__('Se guardo con éxito.'));
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
		if (!$this->Sector->exists($id)) {
			throw new NotFoundException(__('Sector no válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sector->save($this->request->data)) {
				$this->Session->setFlash(__('Se edito correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha podido editar. Por favor, intentar nuevamente el proceso.'));
			}
		} else {
			$options = array('conditions' => array('Sector.' . $this->Sector->primaryKey => $id));
			$this->request->data = $this->Sector->find('first', $options);
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
		$this->Sector->id = $id;
		if (!$this->Sector->exists()) {
			throw new NotFoundException(__('Sector no válido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sector->delete()) {
			$this->Session->setFlash(__('Se ha eliminado satisfactoriamente.'));
		} else {
			$this->Session->setFlash(__('No se ha podido eliminar. Por favor, inténte nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
