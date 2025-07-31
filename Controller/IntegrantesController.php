<?php
App::uses('AppController', 'Controller');
/**
 * Integrantes Controller
 *
 * @property Integrante $Integrante
 * @property PaginatorComponent $Paginator
 */
class IntegrantesController extends AppController {

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
		$this->Integrante->recursive = 0;
		$this->set('integrantes', $this->Paginator->paginate());
	}

	function nuebus() {
        $campos = array("Numero", "Nombres", "Apellidos","Cargo");
        if(isset($this->data) && !empty($this->data)){
			$con = array(strtolower($campos[$this->data["Integrante"]["Campo"]])." like" => "%".$this->data["Integrante"]["Busqueda"]."%");//array("or" => array("tema like" => "%".$this->data["Actividad"]["Busqueda"]."%", "poblacion like " => "%".$this->data["Actividad"]["Busqueda"]."%","eje like " => "%".$this->data["Actividad"]["Busqueda"]."%","prioridad like " => "%".$this->data["Actividad"]["Busqueda"]."%","comuna_id like " => "%".$this->data["Actividad"]["Busqueda"]."%"));

		} else {
			$con = null;
		}
        $this->Integrante->recursive = 0;
		$paginate = array("fields" => array("id", "Numero", "Nombres","Apellidos","Celular", "Telefono", "Correo", "Cargo"), "conditions" => $con, "limit" => 30);
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
		if (!$this->Integrante->exists($id)) {
			throw new NotFoundException(__('Registro no valido'));
		}
		$options = array('conditions' => array('Integrante.' . $this->Integrante->primaryKey => $id));
		$this->set('integrante', $this->Integrante->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Integrante->create();
			if ($this->Integrante->save($this->request->data)) {
				$this->Session->setFlash(__('Registro exitoso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado, intente nuevamente'));
			}
		}
		$documentos = $this->Integrante->Documento->find('list');
		$days = $this->Integrante->Day->find('list');
		$months = $this->Integrante->Month->find('list');
		$fechas = $this->Integrante->Fecha->find('list');
		$generos = $this->Integrante->Genero->find('list');
		$groups = $this->Integrante->Group->find('list');
		$anos = $this->Integrante->Ano->find('list');
		$meses = $this->Integrante->Mes->find('list');
		$this->set(compact('documentos', 'days', 'months', 'fechas', 'generos', 'groups', 'anos', 'meses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Integrante->exists($id)) {
			throw new NotFoundException(__('registro no valido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Integrante->save($this->request->data)) {
				$this->Session->setFlash(__('Registro exitoso'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no pudo ser guardado, intente nuevamente'));
			}
		} else {
			$options = array('conditions' => array('Integrante.' . $this->Integrante->primaryKey => $id));
			$this->request->data = $this->Integrante->find('first', $options);
		}
		$documentos = $this->Integrante->Documento->find('list');
		$days = $this->Integrante->Day->find('list');
		$months = $this->Integrante->Month->find('list');
		$fechas = $this->Integrante->Fecha->find('list');
		$generos = $this->Integrante->Genero->find('list');
		$groups = $this->Integrante->Group->find('list');
		$anos = $this->Integrante->Ano->find('list');
		$meses = $this->Integrante->Mes->find('list');
		$this->set(compact('documentos', 'days', 'months', 'fechas',  'generos', 'groups', 'anos', 'meses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Integrante->id = $id;
		if (!$this->Integrante->exists()) {
			throw new NotFoundException(__('Invalid integrante'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Integrante->delete()) {
			$this->Session->setFlash(__('Registro borrado.'));
		} else {
			$this->Session->setFlash(__('Registo no borrado. verifique nuevamente'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
