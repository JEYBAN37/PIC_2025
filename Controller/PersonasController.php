<?php
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');

/**
 * Personas Controller
 *
 * @property Persona $Persona
 * @property PaginatorComponent $Paginator
 */
class PersonasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Persona->recursive = 0;
		$this->set('personas', $this->Paginator->paginate());
	}
	public function index1() {
		$this->Persona->recursive = 0;
		$this->set('personas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

	public function users($id = null) {
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('Persona no válida'));
		}
		$options = array('conditions' => array('Users.' . $this->Persona->primaryKey => $id));
		$this->set('Users', $this->Persona->find('first', $options));
	}

	public function view($id = null) {
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('Persona no válida'));
		}
		$options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
		$this->set('persona', $this->Persona->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
 
 	public function ver() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('Se guardo correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha guardado. Por favor, verifique e inténte de nuevo.'));
			}
		}
		
		//$generos = $this->Persona->Genero->find('list');
		//$preferencias = $this->Persona->Preferencia->find('list');
		//$etnias = $this->Persona->Etnia->find('list');
		$estudios = $this->Persona->Estudio->find('list');
		$poblaciones = $this->Persona->Poblacion->find('list');
		$ubicaciones = $this->Persona->Ubicacion->find('list');
		$aseguradoras = $this->Persona->Aseguradora->find('list');
		$sociedades = $this->Persona->Sociedad->find('list');
		$sectores = $this->Persona->Sector->find('list');
		
		$actividades = $this->Persona->Actividad->find('list');
		$this->set(compact('estudios', 'poblaciones', 'ubicaciones', 'aseguradoras', 'sociedades', 'sectores', 'actividades'));
	}
 
	public function add() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('Se guardo correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha guardado. Por favor, verifique e inténte de nuevo.'));
			}
		}
		//$generos = $this->Persona->Genero->find('list');
		//$preferencias = $this->Persona->Preferencia->find('list');
		//$etnias = $this->Persona->Etnia->find('list');
		$estudios = $this->Persona->Estudio->find('list');
		$poblaciones = $this->Persona->Poblacion->find('list');
		$ubicaciones = $this->Persona->Ubicacion->find('list');
		$aseguradoras = $this->Persona->Aseguradora->find('list');
		$sociedades = $this->Persona->Sociedad->find('list');
		$sectores = $this->Persona->Sector->find('list');
		
		$actividades = $this->Persona->Actividad->find('list');
		$this->set(compact('estudios', 'poblaciones', 'ubicaciones', 'aseguradoras', 'sociedades', 'sectores', 'actividades'));
	}


	public function add1() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('La Persona se guardo exitosamente.'));
				return $this->redirect(array('action' => 'nuebus'));
			} else {
				$this->Session->setFlash(__('No se ha guardado. Por favor, Inténte nuevamente.'));
			}
		}
		$generos = $this->Persona->Genero->find('list');
		$preferencias = $this->Persona->Preferencia->find('list');
		$etnias = $this->Persona->Etnia->find('list');
		$estudios = $this->Persona->Estudio->find('list');
		$poblaciones = $this->Persona->Poblacion->find('list');
		$ubicaciones = $this->Persona->Ubicacion->find('list');
		$aseguradoras = $this->Persona->Aseguradora->find('list');
		$sociedades = $this->Persona->Sociedad->find('list');
		$sectores = $this->Persona->Sector->find('list');
		$actividades = $this->Persona->Actividad->find('list');
		$this->set(compact('generos', 'preferencias', 'etnias', 'estudios', 'poblaciones', 'ubicaciones', 'aseguradoras', 'sociedades', 'sectores', 'actividades'));
	}

	public function add2() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('Se guardo correctamente.'));
				return $this->redirect(array('action' => 'add'));
			} else {
				$this->Session->setFlash(__('El usuario no se guardo. Por favor, inténtelo de nuevo y revise las listas desplegables.'));
			}
		}
		//$generos = $this->Persona->Genero->find('list');
		//$preferencias = $this->Persona->Preferencia->find('list');
		//$etnias = $this->Persona->Etnia->find('list');
		$estudios = $this->Persona->Estudio->find('list');
		$poblaciones = $this->Persona->Poblacion->find('list');
		$ubicaciones = $this->Persona->Ubicacion->find('list');
		$aseguradoras = $this->Persona->Aseguradora->find('list');
		$sociedades = $this->Persona->Sociedad->find('list');
		$sectores = $this->Persona->Sector->find('list');
		$actividades = $this->Persona->Actividad->find('list');
		$this->set(compact( 'estudios', 'poblaciones', 'ubicaciones', 'aseguradoras', 'sociedades', 'sectores', 'actividades'));
	}

	public function add3() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('Se guardo correctamente.'));
				return $this->redirect(array('controller'=>'responsables','action' => 'nuebus'));
			} else {
				$this->Session->setFlash(__('No se ha guardado. Por favor, revise e inténte de nuevo.'));
			}
		}
		$generos = $this->Persona->Genero->find('list');
		$preferencias = $this->Persona->Preferencia->find('list');
		$etnias = $this->Persona->Etnia->find('list');
		$estudios = $this->Persona->Estudio->find('list');
		$poblaciones = $this->Persona->Poblacion->find('list');
		$ubicaciones = $this->Persona->Ubicacion->find('list');
		$aseguradoras = $this->Persona->Aseguradora->find('list');
		$sociedades = $this->Persona->Sociedad->find('list');
		$sectores = $this->Persona->Sector->find('list');
		$actividades = $this->Persona->Actividad->find('list');
		$this->set(compact('generos', 'preferencias', 'etnias', 'estudios', 'poblaciones', 'ubicaciones', 'aseguradoras', 'sociedades', 'sectores', 'actividades'));
	}

	public function add4() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('Se guardo a la persona correctamente'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El usuario no se guardo. Por favor, inténtelo de nuevo y revise las listas desplegables.'));
			}
		}
		$generos = $this->Persona->Genero->find('list');
		$preferencias = $this->Persona->Preferencia->find('list');
		$etnias = $this->Persona->Etnia->find('list');
		$estudios = $this->Persona->Estudio->find('list');
		$poblaciones = $this->Persona->Poblacion->find('list');
		$ubicaciones = $this->Persona->Ubicacion->find('list');
		$aseguradoras = $this->Persona->Aseguradora->find('list');
		$sociedades = $this->Persona->Sociedad->find('list');
		$sectores = $this->Persona->Sector->find('list');
		$actividades = $this->Persona->Actividad->find('list');
		$this->set(compact('generos', 'preferencias', 'etnias', 'estudios', 'poblaciones', 'ubicaciones', 'aseguradoras', 'sociedades', 'sectores', 'actividades'));
	}

	public function add5() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('Se guardo exitosamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha guardado. Por favor, Inténte nuevamente.'));
			}
		}
		$generos = $this->Persona->Genero->find('list');
		$preferencias = $this->Persona->Preferencia->find('list');
		$etnias = $this->Persona->Etnia->find('list');
		$estudios = $this->Persona->Estudio->find('list');
		$poblaciones = $this->Persona->Poblacion->find('list');
		$ubicaciones = $this->Persona->Ubicacion->find('list');
		$aseguradoras = $this->Persona->Aseguradora->find('list');
		$sociedades = $this->Persona->Sociedad->find('list');
		$sectores = $this->Persona->Sector->find('list');
		$actividades = $this->Persona->Actividad->find('list');
		$this->set(compact('generos', 'preferencias', 'etnias', 'estudios', 'poblaciones', 'ubicaciones', 'aseguradoras', 'sociedades', 'sectores', 'actividades'));
	}

	public function add6() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('Se agrego correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha guardado. Por favor, Inténte nuevamente, verifique las lisatas desplegables'));
			}
		}
		$generos = $this->Persona->Genero->find('list');
		$preferencias = $this->Persona->Preferencia->find('list');
		$etnias = $this->Persona->Etnia->find('list');
		$estudios = $this->Persona->Estudio->find('list');
		$poblaciones = $this->Persona->Poblacion->find('list');
		$ubicaciones = $this->Persona->Ubicacion->find('list');
		$aseguradoras = $this->Persona->Aseguradora->find('list');
		$sociedades = $this->Persona->Sociedad->find('list');
		$sectores = $this->Persona->Sector->find('list');
		$actividades = $this->Persona->Actividad->find('list');
		$this->set(compact('generos', 'preferencias', 'etnias', 'estudios', 'poblaciones', 'ubicaciones', 'aseguradoras', 'sociedades', 'sectores', 'actividades'));
	}

	public function add7() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('Se guardo correctamente.'));
				return $this->redirect(array('action' => 'nuebus'));
			} else {
				$this->Session->setFlash(__('No se ha guardado. Por favor, Inténte nuevamente, verifique las lisatas desplegables'));
			}
		}
		//$generos = $this->Persona->Genero->find('list');
		//$preferencias = $this->Persona->Preferencia->find('list');
		//$etnias = $this->Persona->Etnia->find('list');
		$estudios = $this->Persona->Estudio->find('list');
		$poblaciones = $this->Persona->Poblacion->find('list');
		$ubicaciones = $this->Persona->Ubicacion->find('list');
		$aseguradoras = $this->Persona->Aseguradora->find('list');
		$sociedades = $this->Persona->Sociedad->find('list');
		$sectores = $this->Persona->Sector->find('list');
		$actividades = $this->Persona->Actividad->find('list');
		$infoeventos = $this->Persona->Infoevento->find('list');
		$procesoregistros = $this->Persona->Procesoregistro->find('list');
		$actas = $this->Persona->Acta->find('list');

		$this->set(compact( 'estudios', 'poblaciones', 'ubicaciones', 'aseguradoras', 'sociedades', 'sectores', 'actividades','infoeventos','procesoregistros','actas'));
	}

	public function add8() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('Se guardo correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha guardado. Por favor, Inténte nuevamente, verifique las lisatas desplegables'));
			}
		}
		
		$preferencias = $this->Persona->Preferencia->find('list');
		$etnias = $this->Persona->Etnia->find('list');
		$estudios = $this->Persona->Estudio->find('list');
		$poblaciones = $this->Persona->Poblacion->find('list');
		$ubicaciones = $this->Persona->Ubicacion->find('list');
		$aseguradoras = $this->Persona->Aseguradora->find('list');
		$sociedades = $this->Persona->Sociedad->find('list');
		$sectores = $this->Persona->Sector->find('list');
		$actividades = $this->Persona->Actividad->find('list');
		$infoeventos = $this->Persona->Infoevento->find('list');
		$this->set(compact( 'preferencias', 'etnias', 'estudios', 'poblaciones', 'ubicaciones', 'aseguradoras', 'sociedades', 'sectores', 'actividades','infoeventos'));
	}


	public function edit2($id = null) {
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('Usuario no válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('Actualización exitosa.'));
				return $this->redirect(array('action' => 'nuebus'));
			} else {
				$this->Session->setFlash(__('No se ha guardado. Por favor, Inténte nuevamente, verifique las lisatas desplegables'));
			}
		} else {
			$options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
			$this->request->data = $this->Persona->find('first', $options);

		}

		
		//$generos = $this->Persona->Genero->find('list');
		//$preferencias = $this->Persona->Preferencia->find('list');
		//$etnias = $this->Persona->Etnia->find('list');
		$estudios = $this->Persona->Estudio->find('list');
		$poblaciones = $this->Persona->Poblacion->find('list');
		$ubicaciones = $this->Persona->Ubicacion->find('list');
		$aseguradoras = $this->Persona->Aseguradora->find('list');
		$sociedades = $this->Persona->Sociedad->find('list');
		$sectores = $this->Persona->Sector->find('list');
		$actividades = $this->Persona->Actividad->find('list');
		$this->set(compact('estudios', 'poblaciones', 'ubicaciones', 'aseguradoras', 'sociedades', 'sectores', 'actividades'));

		$actividades = $this->Persona->Actividad->find('list');
		$this->set(compact('actividades'));


		
	}	


	
		public function edit8($id = null) {
	if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('Persona no válida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('Actualización exitosa.'));
				return $this->redirect(array('action' => 'nuebus'));
			} else {
				$this->Session->setFlash(__('No se pudo actualizar. Por favor, vuelva a inténtarlo.'));
			}
		} else {
			$options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
			$this->request->data = $this->Persona->find('first', $options);
		}
		//$generos = $this->Persona->Genero->find('list');
		//$preferencias = $this->Persona->Preferencia->find('list');
		//$etnias = $this->Persona->Etnia->find('list');
		$estudios = $this->Persona->Estudio->find('list');
		$poblaciones = $this->Persona->Poblacion->find('list');
		$ubicaciones = $this->Persona->Ubicacion->find('list');
		$aseguradoras = $this->Persona->Aseguradora->find('list');
		$sociedades = $this->Persona->Sociedad->find('list');
		$sectores = $this->Persona->Sector->find('list');
		$actividades = $this->Persona->Actividad->find('list');
		//$actividades = $this->Persona->Actividad->find('list');
		$infoeventos = $this->Persona->Infoevento->find('list');
		$procesoregistros = $this->Persona->Procesoregistro->find('list');

		$actas = $this->Persona->Acta->find('list');

		$this->set(compact('estudios', 'poblaciones', 'ubicaciones', 'aseguradoras', 'sociedades', 'sectores', 'actividades', 'actividades','infoeventos','procesoregistros','actas'));
	}

	

	

	function nuebus() {
            if($this -> _filter () != null){
            if (isset( $this -> params['named']['page'] ) ) {
                 $this -> request -> data = $this -> _filter ();
            }
        }
        $campos = array("Identificacion","Nombres", "Apellidos");
        if(isset($this->data) && !empty($this->data)){
			$con = array(strtolower($campos[$this->data["Persona"]["Campo"]])." like" => "%".$this->data["Persona"]["Busqueda"]."%");//array("or" => array("tema like" => "%".$this->data["Actividad"]["Busqueda"]."%", "poblacion like " => "%".$this->data["Actividad"]["Busqueda"]."%","eje like " => "%".$this->data["Actividad"]["Busqueda"]."%","prioridad like " => "%".$this->data["Actividad"]["Busqueda"]."%","comuna_id like " => "%".$this->data["Actividad"]["Busqueda"]."%"));

		} else {
			$con = null;
		}
        $this->Persona->recursive = 0;
		$paginate = array("fields" => array("id" , "identificacion" , "apellidos" , "nombres", "celular","correo"), "conditions" => $con, "limit" => 30);
		$this->Paginator->settings = $paginate;
		$this->set("Campos", $campos);
		$this->set("l", $this->paginate());
	}

	function check() {
        $campos = array("Identificacion","Nombres", "Apellidos");
        if(isset($this->data) && !empty($this->data)){
			$con = array(strtolower($campos[$this->data["Persona"]["Campo"]])." like" => "%".$this->data["Persona"]["Busqueda"]."%");//array("or" => array("tema like" => "%".$this->data["Actividad"]["Busqueda"]."%", "poblacion like " => "%".$this->data["Actividad"]["Busqueda"]."%","eje like " => "%".$this->data["Actividad"]["Busqueda"]."%","prioridad like " => "%".$this->data["Actividad"]["Busqueda"]."%","comuna_id like " => "%".$this->data["Actividad"]["Busqueda"]."%"));

		} else {
			$con = null;
		}
        $this->Persona->recursive = 0;
		$paginate = array("fields" => array("id" , "identificacion" , "apellidos" , "nombres", "celular","correo"), "conditions" => $con, "limit" => 30);
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
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('Persona invalida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('Se edito correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se actualizo. Por favor, nuevamente inténte.'));
			}
		} else {
			$options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
			$this->request->data = $this->Persona->find('first', $options);
		}
		$generos = $this->Persona->Genero->find('list');
		$preferencias = $this->Persona->Preferencia->find('list');
		$etnias = $this->Persona->Etnia->find('list');
		$estudios = $this->Persona->Estudio->find('list');
		$poblaciones = $this->Persona->Poblacion->find('list');
		$ubicaciones = $this->Persona->Ubicacion->find('list');
		$aseguradoras = $this->Persona->Aseguradora->find('list');
		$sociedades = $this->Persona->Sociedad->find('list');
		$sectores = $this->Persona->Sector->find('list');
		$actividades = $this->Persona->Actividad->find('list');
		$actividades = $this->Persona->Actividad->find('list');
		$this->set(compact('generos', 'preferencias', 'etnias', 'estudios', 'poblaciones', 'ubicaciones', 'aseguradoras', 'sociedades', 'sectores', 'actividades', 'actividades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Persona->id = $id;
		if (!$this->Persona->exists()) {
			throw new NotFoundException(__('Persona no válida'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Persona->delete()) {
			$this->Session->setFlash(__('Se elimino correctamente.'));
		} else {
			$this->Session->setFlash(__('No se ha podido eliminar. Por favor, verifique e inténte nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
