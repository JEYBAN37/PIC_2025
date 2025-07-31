<?php
App::uses('AppController', 'Controller');
/**
 * Sociales Controller
 *
 * @property Sociale $Sociale
 * @property PaginatorComponent $Paginator
 */
class SocialesController extends AppController {

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
		$this->Sociale->recursive = 0;
		$this->set('sociales', $this->Paginator->paginate());
	}


	function nuebus() {
        $campos = array("Nombre_org", "Comuna", "Representante");
        if(isset($this->data) && !empty($this->data)){
			$con = array(strtolower($campos[$this->data["Sociale"]["Campo"]])." like" => "%".$this->data["Sociale"]["Busqueda"]."%");//array("or" => array("tema like" => "%".$this->data["Actividad"]["Busqueda"]."%", "poblacion like " => "%".$this->data["Actividad"]["Busqueda"]."%","eje like " => "%".$this->data["Actividad"]["Busqueda"]."%","prioridad like " => "%".$this->data["Actividad"]["Busqueda"]."%","comuna_id like " => "%".$this->data["Actividad"]["Busqueda"]."%"));

		} else {
			$con = null;
		}
        $this->Sociale->recursive = 0;
		$paginate = array("fields" => array("id", "Nombre_org", "Comuna_id","Telefono","Correo","Representante"), "conditions" => $con, "limit" => 15);
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
		if (!$this->Sociale->exists($id)) {
			throw new NotFoundException(__('Sociale no válido'));
		}
		$options = array('conditions' => array('Sociale.' . $this->Sociale->primaryKey => $id));
		$this->set('sociale', $this->Sociale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sociale->create();
			if ($this->Sociale->save($this->request->data)) {
				$this->Session->setFlash(__('Se guardo correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha guardado. Por favor, Vuelva a inténtarlo.'));
			}
		}
		$usuarios = $this->Sociale->Usuario->find('list');
		$comunas = $this->Sociale->Comuna->find('list');
		$sociedades = $this->Sociale->Sociedad->find('list');
		$this->set(compact('usuarios', 'comunas', 'sociedades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Sociale->exists($id)) {
			throw new NotFoundException(__('Sociale no válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sociale->save($this->request->data)) {
				$this->Session->setFlash(__('Se ha editado satisfactoriamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo editar. Por favor, inténte nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Sociale.' . $this->Sociale->primaryKey => $id));
			$this->request->data = $this->Sociale->find('first', $options);
		}
		$usuarios = $this->Sociale->Usuario->find('list');
		$comunas = $this->Sociale->Comuna->find('list');
		$sociedades = $this->Sociale->Sociedad->find('list');
		$this->set(compact('usuarios', 'comunas', 'sociedades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Sociale->id = $id;
		if (!$this->Sociale->exists()) {
			throw new NotFoundException(__('Sociale no válido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sociale->delete()) {
			$this->Session->setFlash(__('Se elimino con éxito.'));
		} else {
			$this->Session->setFlash(__('No se ha podido eliminar. por favor, nuevamente inténtelo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function excel (){
       $this->layout='excel';
       $this->Sociale->recursive = 0;
       $this->set('sociales', $this->Sociale->find("all"));         
   }
}
