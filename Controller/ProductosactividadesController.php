<?php
App::uses('AppController', 'Controller');
/**
 * Productosactividades Controller
 *
 * @property Productosactividad $Productosactividad
 * @property PaginatorComponent $Paginator
 */
class ProductosactividadesController extends AppController {

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
		$this->Productosactividad->recursive = 0;
		$this->set('productosactividades', $this->Paginator->paginate());
	}


		public function descargas() {
		$this->Productosactividad->recursive = 0;
		$this->set('productosactividades', $this->Paginator->paginate());
	}
	public function principal() {
		$this->Productosactividad->recursive = 0;
		$this->set('productosactividades', $this->Paginator->paginate());
	}




/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Productosactividad->exists($id)) {
			throw new NotFoundException(__('Invalid productosactividad'));
		}
		$options = array('conditions' => array('Productosactividad.' . $this->Productosactividad->primaryKey => $id));
		$this->set('productosactividad', $this->Productosactividad->find('first', $options));
	}


	public function viewcheck($id = null) {
		if (!$this->Productosactividad->exists($id)) {
			throw new NotFoundException(__('Invalid productosactividad'));
		}
		$options = array('conditions' => array('Productosactividad.' . $this->Productosactividad->primaryKey => $id));
		$this->set('productosactividad', $this->Productosactividad->find('first', $options));
	}


       public function tarearevisada() {
		$this->Productosactividad->recursive = 0;
		$this->set('productosactividades', $this->Paginator->paginate());
	}
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Productosactividad->create();
			if ($this->Productosactividad->save($this->request->data)) {
				//$this->Session->setFlash(__('Registro guardado'));
				//return $this->redirect(array('action' => 'nuebus'));
				  $id = $this->Productosactividad->id; 
                $aux = "view/$id";
                return $this->redirect(array('action' => $aux));	
			} else {
				$this->Session->setFlash(__('El registro no fue guardado. Por favor, trate nuevamente.'));
			}
		}
		$productos = $this->Productosactividad->Producto->find('list');
		$actividades = $this->Productosactividad->Actividad->find('list');
		$actas = $this->Productosactividad->Acta->find('list');
		$responsables = $this->Productosactividad->Responsable->find('list');
		$this->set(compact('productos', 'actividades', 'actas','responsables'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Productosactividad->exists($id)) {
			throw new NotFoundException(__('Invalid productosactividad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Productosactividad->save($this->request->data)) {
				//$this->Session->setFlash(__('Registro guardado'));
				//return $this->redirect(array('action' => 'nuebus'));
				   $id = $this->Productosactividad->id; 
                $aux = "view/$id";
                return $this->redirect(array('action' => $aux));	
			} else {
				$this->Session->setFlash(__('El registro no fue guardado. Por favor, trate nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Productosactividad.' . $this->Productosactividad->primaryKey => $id));
			$this->request->data = $this->Productosactividad->find('first', $options);
		}
		$productos = $this->Productosactividad->Producto->find('list');
		$actividades = $this->Productosactividad->Actividad->find('list');
		$actas = $this->Productosactividad->Acta->find('list');
		$responsables = $this->Productosactividad->Responsable->find('list');
		$this->set(compact('productos', 'actividades', 'actas','responsables'));
	}

	public function adddimpro($id = null) {
		if (!$this->Productosactividad->exists($id)) {
			throw new NotFoundException(__('Invalid productosactividad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Productosactividad->save($this->request->data)) {
				$this->Session->setFlash(__('Registro guardado'));
				return $this->redirect(array('action' => 'principal'));
			} else {
				$this->Session->setFlash(__('El registro no fue guardado. Por favor, trate nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Productosactividad.' . $this->Productosactividad->primaryKey => $id));
			$this->request->data = $this->Productosactividad->find('first', $options);
		}
		$productos = $this->Productosactividad->Producto->find('list');
		$actividades = $this->Productosactividad->Actividad->find('list');
		$actas = $this->Productosactividad->Acta->find('list');
		$responsables = $this->Productosactividad->Responsable->find('list');
		$this->set(compact('productos', 'actividades', 'actas','responsables'));
	}



	/*public function checkanexo($id = null) {  ***** FUNCION PENDIENTE PARA ELIMINAR*****
		if (!$this->Productosactividad->exists($id)) {
			throw new NotFoundException(__('Invalid productosactividad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Productosactividad->save($this->request->data)) {
				$this->Session->setFlash(__('Registro guardado'));
				return $this->redirect(array('action' => 'check'));
			} else {
				$this->Session->setFlash(__('El register_shutdown_function(function)istro no fue guardado. Por favor, trate nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Productosactividad.' . $this->Productosactividad->primaryKey => $id));
			$this->request->data = $this->Productosactividad->find('first', $options);
		}
		$productos = $this->Productosactividad->Producto->find('list');
		$actividades = $this->Productosactividad->Actividad->find('list');
		$actas = $this->Productosactividad->Acta->find('list');
		$responsables = $this->Productosactividad->Responsable->find('list');
		$referentes = $this->Productosactividad->Referente->find('list');
		$this->set(compact('productos', 'actividades', 'actas','responsables','referentes'));
	}*/
     
         public function checkanexos($id = null) {
		if (!$this->Productosactividad->exists($id)) {
			throw new NotFoundException(__('Invalid productosactividad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Productosactividad->save($this->request->data)) {
				$this->Session->setFlash(__('Registro guardado'));
				return $this->redirect(array('action' => 'tarearevisada'));
			} else {
				$this->Session->setFlash(__('El registro no fue guardado. Por favor, trate nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Productosactividad.' . $this->Productosactividad->primaryKey => $id));
			$this->request->data = $this->Productosactividad->find('first', $options);
		}
		$productos = $this->Productosactividad->Producto->find('list');
		$actividades = $this->Productosactividad->Actividad->find('list');
		$actas = $this->Productosactividad->Acta->find('list');
		$responsables = $this->Productosactividad->Responsable->find('list');
		$referentes = $this->Productosactividad->Referente->find('list');
		$this->set(compact('productos', 'actividades', 'actas','responsables','referentes'));
	}


	public function agregatarea($id = null) {
		if (!$this->Productosactividad->exists($id)) {
			throw new NotFoundException(__('Invalid productosactividad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Productosactividad->save($this->request->data)) {
				$this->Session->setFlash(__('Registro guardado'));
				return $this->redirect(array('action' => 'addtask'));
			} else {
				$this->Session->setFlash(__('El registro no fue guardado. Por favor, trate nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Productosactividad.' . $this->Productosactividad->primaryKey => $id));
			$this->request->data = $this->Productosactividad->find('first', $options);
		}
		$productos = $this->Productosactividad->Producto->find('list');
		$actividades = $this->Productosactividad->Actividad->find('list');
		$actas = $this->Productosactividad->Acta->find('list');
		$responsables = $this->Productosactividad->Responsable->find('list');
		$referentes = $this->Productosactividad->Referente->find('list');
		$this->set(compact('productos', 'actividades', 'actas','responsables','referentes'));
	}
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Productosactividad->id = $id;
		if (!$this->Productosactividad->exists()) {
			throw new NotFoundException(__('Invalid productosactividad'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Productosactividad->delete()) {
			$this->Session->setFlash(__('The productosactividad has been deleted.'));
		} else {
			$this->Session->setFlash(__('The productosactividad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	function nuebus() {
        $this->Productosactividad->recursive = 0;
        
        $paginate = array("fields" => array("id","Dim","Pro","Task","Observacionsms","Estado"));
        $this->Paginator->settings = $paginate;
        
        $count = $this->Productosactividad->find('count');
        $this->Paginator->settings['limit'] = $count;
        
        $this->set("l", $this->paginate());        
    }

	/*function nuebus() {
        $campos = array("Dim");
        if(isset($this->data) && !empty($this->data)){

		    $campoFiltro = $this->data["Productosactividad"]["Campo"];
		    $textoFiltro = $this->data["Productosactividad"]["Dim"];

		    $filtroPro = $this->data["Productosactividad"]["Pro"];
		    $filtroEstado = $this->data["Productosactividad"]["Estado"];
		    $filtroTask = $this->data["Productosactividad"]["Task"];

			$con = array(strtolower($campos[$campoFiltro])." like" => "%".$textoFiltro."%");//array("or" => array("tema like" => "%".$this->data["Actividad"]["Busqueda"]."%", "poblacion like " => "%".$this->data["Actividad"]["Busqueda"]."%","eje like " => "%".$this->data["Actividad"]["Busqueda"]."%","prioridad like " => "%".$this->data["Actividad"]["Busqueda"]."%","comuna_id like " => "%".$this->data["Actividad"]["Busqueda"]."%"));
			$pro = "UPPER(pro) like '%" . $filtroPro . "%'";
			$estado = "UPPER(estado) like '%" . $filtroEstado . "%'";
			$task = "UPPER(task) like '%" . $filtroTask . "%'";
			array_push($con, $pro);
			array_push($con, $estado);
			array_push($con, $task);
		} else {
			$con = null;
		}
        $this->Productosactividad->recursive = 0;
		$paginate = array("fields" => array("id","Dim","Pro","Task","Observacionsms","Estado"), "conditions" => $con, "limit" => 30);
		$this->Paginator->settings = $paginate;
		$this->set("Campos", $campos);
		$this->set("l", $this->paginate());

		
	}*/

	function check() {
       $campos = array("Dim");
        if(isset($this->data) && !empty($this->data)){

		    $campoFiltro = $this->data["Productosactividad"]["Campo"];
		    $textoFiltro = $this->data["Productosactividad"]["Dim"];

		    $filtroPro = $this->data["Productosactividad"]["Pro"];
		    $filtroEstado = $this->data["Productosactividad"]["Estado"];
		    $filtroTask = $this->data["Productosactividad"]["Task"];

			$con = array(strtolower($campos[$campoFiltro])." like" => "%".$textoFiltro."%");//array("or" => array("tema like" => "%".$this->data["Actividad"]["Busqueda"]."%", "poblacion like " => "%".$this->data["Actividad"]["Busqueda"]."%","eje like " => "%".$this->data["Actividad"]["Busqueda"]."%","prioridad like " => "%".$this->data["Actividad"]["Busqueda"]."%","comuna_id like " => "%".$this->data["Actividad"]["Busqueda"]."%"));
			$pro = "UPPER(pro) like '%" . $filtroPro . "%'";
			$estado = "UPPER(estado) like '%" . $filtroEstado . "%'";
			$task = "UPPER(task) like '%" . $filtroTask . "%'";
			array_push($con, $pro);
			array_push($con, $estado);
			array_push($con, $task);
		} else {
			$con = null;
		}
        $this->Productosactividad->recursive = 0;
		$paginate = array("fields" => array("id","Dim","Pro","Task","Observacionsms","Estado"), "conditions" => $con, "limit" => 30);
		$this->Paginator->settings = $paginate;
		$this->set("Campos", $campos);
		$this->set("l", $this->paginate());

		 

	}

	function addtask() {
       $campos = array("Dim","Pro","task","Estado","Observacionsms");
        if(isset($this->data) && !empty($this->data)){
			$con = array(strtolower($campos[$this->data["Productosactividad"]["Campo"]])." like" => "%".$this->data["Productosactividad"]["Busqueda"]."%");//array("or" => array("tema like" => "%".$this->data["Actividad"]["Busqueda"]."%", "poblacion like " => "%".$this->data["Actividad"]["Busqueda"]."%","eje like " => "%".$this->data["Actividad"]["Busqueda"]."%","prioridad like " => "%".$this->data["Actividad"]["Busqueda"]."%","comuna_id like " => "%".$this->data["Actividad"]["Busqueda"]."%"));

		} else {
			$con = null;
		}
        $this->Productosactividad->recursive = 0;
		$paginate = array("fields" => array("id","Dim","Pro","task","Observacionsms","Estado",), "conditions" => $con, "limit" => 30);
		$this->Paginator->settings = $paginate;
		$this->set("Campos", $campos);
		$this->set("l", $this->paginate());
		
	}


	public function excel (){
       
        $campos = array("Pro","Dim","Task","Observacionsms","Estado");
       	$this->layout='excel';
       	$this->Productosactividad->recursive = 0;


	    $campoFiltro = $this->data["Productosactividad"]["Campo"];
	    $textoFiltro = $this->data["Productosactividad"]["Dim"];


	    $filtroPro = $this->data["Productosactividad"]["Pro"];
		    $filtroEstado = $this->data["Productosactividad"]["Estado"];
		      $filtroTask = $this->data["Productosactividad"]["Task"];

		$con = array("Dim like '%" . $textoFiltro . "%'");//array("or" => array("tema like" => "%".$this->data["Actividad"]["Busqueda"]."%", "poblacion like " => "%".$this->data["Actividad"]["Busqueda"]."%","eje like " => "%".$this->data["Actividad"]["Busqueda"]."%","prioridad like " => "%".$this->data["Actividad"]["Busqueda"]."%","comuna_id like " => "%".$this->data["Actividad"]["Busqueda"]."%"));
		$pro = "UPPER(pro) like '%" . $filtroPro . "%'";
		$estado = "UPPER(estado) like '%" . $filtroEstado . "%'";
		$task = "UPPER(estado) like '%" . $filtroTask . "%'";
		array_push($con, $pro);
		array_push($con, $estado);
		array_push($con, $task);




       $productosactividades = $this->Productosactividad->find("all", array(
       	'conditions' => $con));
       $this->set('productosactividades', $productosactividades);   
   }
}

