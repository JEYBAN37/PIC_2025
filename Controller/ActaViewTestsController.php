<?php
App::uses('AppController', 'Controller');
/**
 * ActaViewTests Controller
 *
 * @property ActaViewTest $ActaViewTest
 * @property PaginatorComponent $Paginator
 */
class ActaViewTestsController extends AppController {

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
		$this->ActaViewTest->recursive = 0;
		$this->set('actaViewTests', $this->Paginator->paginate());
	}

function nuebus() {        
        //$this->Acta->recursive = 0;
      $this->ActaViewTest->recursive = 0;
        
        $paginate = array("fields" => array("id", "tema", "fecha", "nombredim",  "alcancereunion", "activity", "grupo"));
        $this->Paginator->settings = $paginate;
        
        $count = $this->ActaViewTest->find('count');
        $this->Paginator->settings['limit'] = $count;
        
        $this->set("l", $this->paginate());
    }

/**
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActaViewTest->exists($id)) {
			throw new NotFoundException(__('Invalid acta view test'));
		}
		$options = array('conditions' => array('ActaViewTest.' . $this->ActaViewTest->primaryKey => $id));
		$this->set('actaViewTest', $this->ActaViewTest->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActaViewTest->create();
			if ($this->ActaViewTest->save($this->request->data)) {
				$this->Session->setFlash(__('The acta view test has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acta view test could not be saved. Please, try again.'));
			}
		}
		$ubicaciones = $this->ActaViewTest->Ubicacion->find('list');
		$productos = $this->ActaViewTest->Producto->find('list');
		$this->set(compact('ubicaciones', 'productos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ActaViewTest->exists($id)) {
			throw new NotFoundException(__('Invalid acta view test'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ActaViewTest->save($this->request->data)) {
				$this->Session->setFlash(__('The acta view test has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acta view test could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ActaViewTest.' . $this->ActaViewTest->primaryKey => $id));
			$this->request->data = $this->ActaViewTest->find('first', $options);
		}
		$ubicaciones = $this->ActaViewTest->Ubicacion->find('list');
		$productos = $this->ActaViewTest->Producto->find('list');
		$this->set(compact('ubicaciones', 'productos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ActaViewTest->id = $id;
		if (!$this->ActaViewTest->exists()) {
			throw new NotFoundException(__('Invalid acta view test'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ActaViewTest->delete()) {
			$this->Session->setFlash(__('The acta view test has been deleted.'));
		} else {
			$this->Session->setFlash(__('The acta view test could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
