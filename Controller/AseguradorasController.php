<?php
App::uses('AppController', 'Controller');
/**
 * Aseguradoras Controller
 *
 * @property Aseguradora $Aseguradora
 * @property PaginatorComponent $Paginator
 */
class AseguradorasController extends AppController {

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
		$this->Aseguradora->recursive = 0;
		$this->set('aseguradoras', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Aseguradora->exists($id)) {
			throw new NotFoundException(__('La Aseguradora no es válida.'));
		}
		$options = array('conditions' => array('Aseguradora.' . $this->Aseguradora->primaryKey => $id));
		$this->set('aseguradora', $this->Aseguradora->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Aseguradora->create();
			if ($this->Aseguradora->save($this->request->data)) {
				$this->Session->setFlash(__('La Aseguradora se ha guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La Aseguradora no se pudo guardar. Por favor, inténtelo de nuevo.'));
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
		if (!$this->Aseguradora->exists($id)) {
			throw new NotFoundException(__('La Aseguradora no es válida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Aseguradora->save($this->request->data)) {
				$this->Session->setFlash(__('La Aseguradora se ha editado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La Aseguradora no se pudo editar. Por favor, inténtelo de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Aseguradora.' . $this->Aseguradora->primaryKey => $id));
			$this->request->data = $this->Aseguradora->find('first', $options);
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
		$this->Aseguradora->id = $id;
		if (!$this->Aseguradora->exists()) {
			throw new NotFoundException(__('La Aseguradora no es válida'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Aseguradora->delete()) {
			$this->Session->setFlash(__('La Aseguradora se ha eliminado.'));
		} else {
			$this->Session->setFlash(__('La Aseguradora nose pudo eliminar. Por favor, inténtelo de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
