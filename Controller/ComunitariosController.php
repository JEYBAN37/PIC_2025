<?php
App::uses('AppController', 'Controller');
/**
 * Comunitarios Controller
 *
 * @property Comunitario $Comunitario
 * @property PaginatorComponent $Paginator
 */
class ComunitariosController extends AppController {

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
		$this->Comunitario->recursive = 0;
		$this->set('comunitarios', $this->Paginator->paginate());
	}

function nuebus() {
        $campos = array("Nombre_org", "Comuna" , "Representante");
        if(isset($this->data) && !empty($this->data)){
			$con = array(strtolower($campos[$this->data["Comunitario"]["Campo"]])." like" => "%".$this->data["Comunitario"]["Busqueda"]."%");

		} else {
			$con = null;
		}
        $this->Comunitario->recursive = 0;
		$paginate = array("fields" => array("id", "Nombre_org", "Comuna_id", "Representante", "Tel_representante"), "conditions" => $con, "limit" => 15);
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
		if (!$this->Comunitario->exists($id)) {
			throw new NotFoundException(__('Registo no válido'));
		}
		$options = array('conditions' => array('Comunitario.' . $this->Comunitario->primaryKey => $id));
		$this->set('comunitario', $this->Comunitario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Comunitario->create();
			if ($this->Comunitario->save($this->request->data)) {
				$this->Session->setFlash(__('Registro exitoso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Registro no fue guardado'));
			}
		}
		$usuarios = $this->Comunitario->Usuario->find('list');
		$comunas = $this->Comunitario->Comuna->find('list');
		$coberturas = $this->Comunitario->Cobertura->find('list');
		$this->set(compact('usuarios', 'comunas', 'coberturas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Comunitario->exists($id)) {
			throw new NotFoundException(__('Registo no válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Comunitario->save($this->request->data)) {
				$this->Session->setFlash(__('Registro exitoso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Registro no fue guardado, revise los datos.'));
			}
		} else {
			$options = array('conditions' => array('Comunitario.' . $this->Comunitario->primaryKey => $id));
			$this->request->data = $this->Comunitario->find('first', $options);
		}
		$usuarios = $this->Comunitario->Usuario->find('list');
		$comunas = $this->Comunitario->Comuna->find('list');
		$coberturas = $this->Comunitario->Cobertura->find('list');
		$this->set(compact('usuarios', 'comunas', 'coberturas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Comunitario->id = $id;
		if (!$this->Comunitario->exists()) {
			throw new NotFoundException(__('Registro no valido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Comunitario->delete()) {
			$this->Session->setFlash(__('El Registro no fue borrado.'));
		} else {
			$this->Session->setFlash(__('El Registro no fue borrado.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function excel (){
       $this->layout='excel';
       $this->Comunitario->recursive = 0;
       $this->set('comunitarios', $this->Comunitario->find("all"));

          
   }
}
