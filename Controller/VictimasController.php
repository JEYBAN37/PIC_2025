<?php
App::uses('AppController', 'Controller');
/**
 * Victimas Controller
 *
 * @property Victima $Victima
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class VictimasController extends AppController {

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
		$this->Victima->recursive = 0;
		$this->set('victimas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Victima->exists($id)) {
			throw new NotFoundException(__('Victima no válida'));
		}
		$options = array('conditions' => array('Victima.' . $this->Victima->primaryKey => $id));
		$this->set('victima', $this->Victima->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Victima->create();
			if ($this->Victima->save($this->request->data)) {
				$this->Session->setFlash(__('Se guardo con éxito.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha guardado. Por favor, inténtelo nuevamente.'));
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
		if (!$this->Victima->exists($id)) {
			throw new NotFoundException(__('Victima no válida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Victima->save($this->request->data)) {
				$this->Session->setFlash(__('Se ha editado correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha editado. Por favor , vuelva e inténte.'));
			}
		} else {
			$options = array('conditions' => array('Victima.' . $this->Victima->primaryKey => $id));
			$this->request->data = $this->Victima->find('first', $options);
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
		$this->Victima->id = $id;
		if (!$this->Victima->exists()) {
			throw new NotFoundException(__('Victima no válida'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Victima->delete()) {
			$this->Session->setFlash(__('Se elimino correctamente.'));
		} else {
			$this->Session->setFlash(__('No se ha eliminado. Por favor, verifique e inténtelo nuevamente'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
