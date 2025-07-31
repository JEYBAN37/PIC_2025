<?php
App::uses('AppController', 'Controller');
/**
 * ProactividadesViewTests Controller
 *
 * @property ProactividadesViewTest $ProactividadesViewTest
 * @property PaginatorComponent $Paginator
 */
class ProactividadesViewTestsController extends AppController {

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
		$this->ProactividadesViewTest->recursive = 0;
		$this->set('ProactividadesViewTests', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	

	public function nuebus() {
		$this->ProactividadesViewTest->recursive = 0;
        
       $paginate = array("fields" => array("id","", "proactividad_id", "N_producto","Producto", "Dimension", "tarea", "tema", "comuna_actividad","responsable"));
        $this->Paginator->settings = $paginate;
        
        $count = $this->ProactividadesViewTest->find('count');
        $this->Paginator->settings['limit'] = $count;
        
        $this->set("l", $this->paginate());
	}

	


/**
 * add method
 *
 * @return void
 */
	
	

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	
}
