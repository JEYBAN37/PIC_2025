<?php
App::uses('AppController', 'Controller');
/**
 * Publicos Controller
 *
 * @property Publico $Publico
 * @property PaginatorComponent $Paginator
 */
class PublicosController extends AppController {

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
		$this->Publico->recursive = 0;
		$this->set('publicos', $this->Paginator->paginate());
	}


	function nuebus() {
        $campos = array("Nombre_inst", "Comuna", "Representante");
        if(isset($this->data) && !empty($this->data)){
			$con = array(strtolower($campos[$this->data["Publico"]["Campo"]])." like" => "%".$this->data["Publico"]["Busqueda"]."%");//array("or" => array("tema like" => "%".$this->data["Actividad"]["Busqueda"]."%", "poblacion like " => "%".$this->data["Actividad"]["Busqueda"]."%","eje like " => "%".$this->data["Actividad"]["Busqueda"]."%","prioridad like " => "%".$this->data["Actividad"]["Busqueda"]."%","comuna_id like " => "%".$this->data["Actividad"]["Busqueda"]."%"));

		} else {
			$con = null;
		}
        $this->Publico->recursive = 0;
		$paginate = array("fields" => array("id","Nombre_inst" , "Representante","Comuna_id","Telefono","Correo"), "conditions" => $con, "limit" => 15);
		$this->Paginator->settings = $paginate;
		$this->set("Campos", $campos);
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
		if (!$this->Publico->exists($id)) {
			throw new NotFoundException(__('Publico no válido'));
		}
		$options = array('conditions' => array('Publico.' . $this->Publico->primaryKey => $id));
		$this->set('publico', $this->Publico->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Publico->create();
			if ($this->Publico->save($this->request->data)) {
				$this->Session->setFlash(__('Se ha guardado exitosamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha guardado. Por favor, inténte nuevamente.'));
			}
		}
		$usuarios = $this->Publico->Usuario->find('list');
		$comunas = $this->Publico->Comuna->find('list');
		$this->set(compact('usuarios', 'comunas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Publico->exists($id)) {
			throw new NotFoundException(__('Publico no válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Publico->save($this->request->data)) {
				$this->Session->setFlash(__('Se edito correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha editado. Por favor, nuevamente inténtelo.'));
			}
		} else {
			$options = array('conditions' => array('Publico.' . $this->Publico->primaryKey => $id));
			$this->request->data = $this->Publico->find('first', $options);
		}
		$usuarios = $this->Publico->Usuario->find('list');
		$comunas = $this->Publico->Comuna->find('list');
		$this->set(compact('usuarios', 'comunas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Publico->id = $id;
		if (!$this->Publico->exists()) {
			throw new NotFoundException(__('Publico no válido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Publico->delete()) {
			$this->Session->setFlash(__('Se ha eliminado con éxito.'));
		} else {
			$this->Session->setFlash(__('No se ha eliminado. Por favor, vuelva e inténtelo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function excel (){
       $this->layout='excel';
       $this->Publico->recursive = 0;
       $this->set('publicos', $this->Publico->find("all"));

          
   }
}
