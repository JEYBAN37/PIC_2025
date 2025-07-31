<?php
App::uses('AppController', 'Controller');
/**
 * PersonasActividades Controller
 *
 * @property PersonasActividad $PersonasActividad
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PersonasActividadesController extends AppController {

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
		$this->PersonasActividad->recursive = 0;
		$this->set('personasActividades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PersonasActividad->exists($id)) {
			throw new NotFoundException(__('Persona Actividad no válida'));
		}
		$options = array('conditions' => array('PersonasActividad.' . $this->PersonasActividad->primaryKey => $id));
		$this->set('personasActividad', $this->PersonasActividad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PersonasActividad->create();
			if ($this->PersonasActividad->save($this->request->data)) {
				$this->Session->setFlash(__('Registro guardado correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha podido guardar. Por favor, Verifique los datos e inténte nuevamente.'));
			}
		}
		$personas = $this->PersonasActividad->Persona->find('list');
		$actividades = $this->PersonasActividad->Actividad->find('list');
		$this->set(compact('personas', 'actividades'));
	}


	function nuebus() {
        $campos = array("Persona_id");
        if(isset($this->data) && !empty($this->data)){
			$con = array(strtolower($campos[$this->data["PersonasActividad"]["Campo"]])." like" => "%".$this->data["PersonasActividad"]["Busqueda"]."%");//array("or" => array("tema like" => "%".$this->data["Actividad"]["Busqueda"]."%", "poblacion like " => "%".$this->data["Actividad"]["Busqueda"]."%","eje like " => "%".$this->data["Actividad"]["Busqueda"]."%","prioridad like " => "%".$this->data["Actividad"]["Busqueda"]."%","comuna_id like " => "%".$this->data["Actividad"]["Busqueda"]."%"));

		} else {
			$con = null;
		}
        $this->PersonasActividad->recursive = 0;
		$paginate = array("fields" => array("id", "persona_id"), "conditions" => $con, "limit" => 30);
		$this->Paginator->settings = $paginate;
		$this->set("Campos", $campos);
		$this->set("l", $this->paginate());
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PersonasActividad->exists($id)) {
			throw new NotFoundException(__('Personas Actividad no válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PersonasActividad->save($this->request->data)) {
				$this->Session->setFlash(__('Fue editada correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se puede editar. Por favor, Vuelva a intentarlo.'));
			}
		} else {
			$options = array('conditions' => array('PersonasActividad.' . $this->PersonasActividad->primaryKey => $id));
			$this->request->data = $this->PersonasActividad->find('first', $options);
		}
		$personas = $this->PersonasActividad->Persona->find('list');
		$actividades = $this->PersonasActividad->Actividad->find('list');
		$this->set(compact('personas', 'actividades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PersonasActividad->id = $id;
		if (!$this->PersonasActividad->exists()) {
			throw new NotFoundException(__('Personas Actividad no válida'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PersonasActividad->delete()) {
			$this->Session->setFlash(__('Exito al eliminar.'));
		} else {
			$this->Session->setFlash(__('No se ha podido eliminar. Por favor, Inténte nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function excel (){
       $this->layout='excel';
       $this->PersonasActividad->recursive = 0;
       $this->set('personasActividades', $this->PersonasActividad->find("all"));

          
   }
}


		
		
	