<?php
App::uses('AppController', 'Controller');
/**
 * ActividadesViewTests Controller
 *
 * @property ActividadesViewTest $ActividadesViewTest
 * @property PaginatorComponent $Paginator
 */
class ActividadesViewTestsController extends AppController {

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
		$this->ActividadesViewTest->recursive = 0;
		$this->set('actividadesViewTests', $this->Paginator->paginate());
	}

	public function nuebus() {
		$this->ActividadesViewTest->recursive = 0;
        
        $paginate = array("fields" => array("id", "tema", "fecha", "nombredim",  "nombres", "activity"));
        $this->Paginator->settings = $paginate;
        
        $count = $this->ActividadesViewTest->find('count');
        $this->Paginator->settings['limit'] = $count;
        
        $this->set("l", $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActividadesViewTest->exists($id)) {
			throw new NotFoundException(__('Invalid actividades view test'));
		}
		$options = array('conditions' => array('ActividadesViewTest.' . $this->ActividadesViewTest->primaryKey => $id));
		$this->set('actividadesViewTest', $this->ActividadesViewTest->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActividadesViewTest->create();
			if ($this->ActividadesViewTest->save($this->request->data)) {
				$this->Session->setFlash(__('The actividades view test has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actividades view test could not be saved. Please, try again.'));
			}
		}
		$responsables = $this->ActividadesViewTest->Responsable->find('list');
		$ubicaciones = $this->ActividadesViewTest->Ubicacion->find('list');
		$productos = $this->ActividadesViewTest->Producto->find('list');
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
		if (!$this->ActividadesViewTest->exists($id)) {
			throw new NotFoundException(__('Invalid actividades view test'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ActividadesViewTest->save($this->request->data)) {
				$this->Session->setFlash(__('The actividades view test has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actividades view test could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ActividadesViewTest.' . $this->ActividadesViewTest->primaryKey => $id));
			$this->request->data = $this->ActividadesViewTest->find('first', $options);
		}
		$responsables = $this->ActividadesViewTest->Responsable->find('list');
		$ubicaciones = $this->ActividadesViewTest->Ubicacion->find('list');
		$productos = $this->ActividadesViewTest->Producto->find('list');
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
		$this->ActividadesViewTest->id = $id;
		if (!$this->ActividadesViewTest->exists()) {
			throw new NotFoundException(__('Invalid actividades view test'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ActividadesViewTest->delete()) {
			$this->Session->setFlash(__('The actividades view test has been deleted.'));
		} else {
			$this->Session->setFlash(__('The actividades view test could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
