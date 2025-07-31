<?php
App::uses('AppController', 'Controller');
/**
 * EventosViewTests Controller
 *
 * @property EventosViewTest $EventosViewTest
 * @property PaginatorComponent $Paginator
 */
class EventosViewTestsController extends AppController {

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
		$this->EventosViewTest->recursive = 0;
		$this->set('eventosViewTests', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EventosViewTest->exists($id)) {
			throw new NotFoundException(__('Invalid eventos view test'));
		}
		$options = array('conditions' => array('EventosViewTest.' . $this->EventosViewTest->primaryKey => $id));
		$this->set('eventosViewTest', $this->EventosViewTest->find('first', $options));
	}

	public function nuebus() {
		$this->EventosViewTest->recursive = 0;
        
        $paginate = array("fields" => array("id", "tema", "fecha", "dimensiones", "activity","tarea",  "nombres"));
        $this->Paginator->settings = $paginate;
        
        $count = $this->EventosViewTest->find('count');
        $this->Paginator->settings['limit'] = $count;
        
        $this->set("l", $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EventosViewTest->create();
			if ($this->EventosViewTest->save($this->request->data)) {
				$this->Session->setFlash(__('The eventos view test has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventos view test could not be saved. Please, try again.'));
			}
		}
		$responsables = $this->EventosViewTest->Responsable->find('list');
		$ubicaciones = $this->EventosViewTest->Ubicacion->find('list');
		$productos = $this->EventosViewTest->Producto->find('list');
		$this->set(compact('responsables', 'ubicaciones', 'productos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EventosViewTest->exists($id)) {
			throw new NotFoundException(__('Invalid eventos view test'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EventosViewTest->save($this->request->data)) {
				$this->Session->setFlash(__('The eventos view test has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventos view test could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EventosViewTest.' . $this->EventosViewTest->primaryKey => $id));
			$this->request->data = $this->EventosViewTest->find('first', $options);
		}
		$responsables = $this->EventosViewTest->Responsable->find('list');
		$ubicaciones = $this->EventosViewTest->Ubicacion->find('list');
		$productos = $this->EventosViewTest->Producto->find('list');
		$this->set(compact('responsables', 'ubicaciones', 'productos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EventosViewTest->id = $id;
		if (!$this->EventosViewTest->exists()) {
			throw new NotFoundException(__('Invalid eventos view test'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EventosViewTest->delete()) {
			$this->Session->setFlash(__('The eventos view test has been deleted.'));
		} else {
			$this->Session->setFlash(__('The eventos view test could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
