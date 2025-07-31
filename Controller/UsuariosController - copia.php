<?php
App::uses('AppController', 'Controller');
/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 * @property PaginatorComponent $Paginator
 */


class UsuariosController extends AppController {
	public $components = array('RequestHandler','Paginator');
	public $helpers = array('Js' => array('Jquery'),'xls');


  
    public $paginate = array(
        'limit' => 2,
        'order' => array(
            'Usuario.id' => 'asc'
        )
    );



	
	public function index() {
		$this->Usuario->recursive = 0;
		$usuarios=$this->paginate();

		if ($this->request->is('requested')) { // Para el funcionamiento del llamado asíncrono
            return $usuarios;
      } else { $this->set('usuarios', $usuarios);
  }
}




	function nuebus() {

        $campos = array("Numero", "Nombres", "Apellidos");
        if(isset($this->data) && !empty($this->data)){
			$con = array(strtolower($campos[$this->data["Usuario"]["Campo"]])." like" => "%".$this->data["Usuario"]["Busqueda"]."%");//array("or" => array("tema like" => "%".$this->data["Actividad"]["Busqueda"]."%", "poblacion like " => "%".$this->data["Actividad"]["Busqueda"]."%","eje like " => "%".$this->data["Actividad"]["Busqueda"]."%","prioridad like " => "%".$this->data["Actividad"]["Busqueda"]."%","comuna_id like " => "%".$this->data["Actividad"]["Busqueda"]."%"));

		} else {
			$con = null;
		}
        $this->Usuario->recursive = 0;
		$paginate = array("fields" => array("id","Numero" , "Nombres", "Apellidos", "Celular","Correo"), "conditions" => $con, "limit" => 5);
		$this->Paginator->settings = $paginate;
		$this->set("Campos", $campos);
		$this->set("l", $this->paginate());
	}



	
	
	
	function viewPdf($id = null){
        if (!$id){
            $this->Session->setFlash('Id inválido para obtener pdf');
            $this->redirect(array('action'=>'index'), null, true);
        }

        Configure::write('debug',0);

        $id = intval($id);
		  
        $property = $this->Usuario->read(null, $id);
		  $this->set('property',$property);
        if (empty($property))
        {
            $this->Session->setFlash('Lo sentimos , no hay ninguna propiedad con el identificador presentado.');
            $this->redirect(array('action'=>'index'), null, true);
        }
        $this->layout = 'pdf';
        $this->render();
   }


   public function create_pdf(){
 
    $usuarios = $this->Usuario->find("all");
 
    $this->set(compact('usuarios'));
 
    $this->layout = '/pdf/default';
 
    $this->render('/Pdf/pdf_usuario');
 
}

public function dinamic_pdf(){
	//$ve = split("&", $r);
	$h = "<h2>".$_GET["Tit"]."</h2><table>";
		foreach($_GET as $i => $v){
			if($i!="Tit"){
				$h.="<tr><th>".$i."</th><td>".$v."</td></tr>";	
			}
			
		}
		$h.="</table>";
	$this->set("html", $h);
	
	$this->layout = '/pdf/default';
 
    $this->render('/Pdf/pdf_usuario');	
}



		function autoCompletado() {
		$this->set('Usuarios', $this->Usuario->find('all', array(
				'conditions' => array(
					'Usuario.nombres LIKE '=> '%'.$this->request->query['term'].'%'
				),
				'fields' => array('id','nombres')
				)));
		$this->layout = 'ajax';
	}
	
	function getData($id = null) {
		$this->Usuario->id = $id;
		if(!$this->Usuario->exists()):
			throw new NotFoundException(__('No existe el curso'));
		endif;
		$this->set('usuario', $this->Usuario->read(null, $id));
		$this->layout = 'ajax';
	}




	

	
	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Usuario np válido'));
		}
		$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
		$this->set('usuario', $this->Usuario->find('first', $options));

	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('Se ha guardado correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se guardo. or favor, verifique e inténtelo de nuevo.'));
			}

		
		}
		$documentos = $this->Usuario->Documento->find('list');
		$days = $this->Usuario->Day->find('list');
		$months = $this->Usuario->Month->find('list');
		$fechas = $this->Usuario->Fecha->find('list');
		$edades = $this->Usuario->Edad->find('list');
		$generos = $this->Usuario->Genero->find('list');
		$groups = $this->Usuario->Group->find('list');
		$anos = $this->Usuario->Ano->find('list');
		$meses = $this->Usuario->Mes->find('list');
		$actividades = $this->Usuario->Actividad->find('list');
		$comunas = $this->Usuario->Comuna->find('list');
		$actividades = $this->Usuario->Actividad->find('list');
		$this->set(compact('documentos', 'days', 'months', 'fechas', 'edades', 'generos', 'groups', 'anos', 'meses', 'actividades', 'comunas', 'actividades'));
     
     	$actividades = $this->Usuario->Actividad->find('list');
		$this->set(compact('actividades'));

	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Usuario no válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('Se ha editado con éxito.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha editado. Por favor, inténtelo de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
			$this->request->data = $this->Usuario->find('first', $options);


		}


		$documentos = $this->Usuario->Documento->find('list');
		$days = $this->Usuario->Day->find('list');
		$months = $this->Usuario->Month->find('list');
		$fechas = $this->Usuario->Fecha->find('list');
		$edades = $this->Usuario->Edad->find('list');
		$generos = $this->Usuario->Genero->find('list');
		$groups = $this->Usuario->Group->find('list');
		$anos = $this->Usuario->Ano->find('list');
		$meses = $this->Usuario->Mes->find('list');
		$actividades = $this->Usuario->Actividad->find('list');
		$comunas = $this->Usuario->Comuna->find('list');
		$actividades = $this->Usuario->Actividad->find('list');
		$this->set(compact('documentos', 'days', 'months', 'fechas', 'edades', 'generos', 'groups', 'anos', 'meses', 'actividades', 'comunas', 'actividades'));

			$actividades = $this->Usuario->Actividad->find('list');
		$this->set(compact('actividades'));
		
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Usuario no válido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Usuario->delete()) {
			$this->Session->setFlash(__('Se ha eliminado correctamente.'));
		} else {
			$this->Session->setFlash(__('No se ha podido eliminar. Por favor, vuelva e inténtelo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	 public function export(){
   	$data = $this->Usuario->find('all');
    $this->set('usuarios', $data);
      

   }

   public function excel (){
       $this->layout='excel';
       $this->Usuario->recursive = 0;
       $this->set('usuarios', $this->Usuario->find("all"));

          
   }
}
