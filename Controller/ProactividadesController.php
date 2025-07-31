<?php
App::uses('AppController', 'Controller');
/**
 * Proactividades Controller
 *
 * @property Proactividad $Proactividad
 * @property PaginatorComponent $Paginator
 */
class ProactividadesController extends AppController {

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
		$this->Proactividad->recursive = 0;
        
        $count = $this->Proactividad->find('count');
        $this->Paginator->settings['limit'] = $count;
		
        $this->set("proactividades", $this->paginate());
		
	}

function nuebus() {        
        //$this->Acta->recursive = 0;
      $this->Proactividad->recursive = 0;
        
        $paginate = array("fields" => array("id","", "proactividad_id", "N_producto","Producto", "Dimension", "tarea", "tema", "comuna_actividad","responsable"));
        $this->Paginator->settings = $paginate;
        
        $count = $this->Proactividad->find('count');
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
		if (!$this->Proactividad->exists($id)) {
			throw new NotFoundException(__('Invalid proactividad'));
		}
		$options = array('conditions' => array('Proactividad.' . $this->Proactividad->primaryKey => $id));
		$this->set('proactividad', $this->Proactividad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Proactividad->create();
			if ($this->Proactividad->save($this->request->data)) {
				$this->Session->setFlash('La sistematizacion del proceso formativo educativo fue gurdada, asocie las fechas, tematicas relaciondas a la sistematizacion.', 'default',array('class'=>'alert alert-success'));
				return $this->redirect(array('controller' => 'procesoregistros', 'action' => 'add'));
			} else {
				$this->Session->setFlash('No se ha podido guardar, por favor verifique el formulario', 'default', array('class'=>'alert alert-danger'));

			}
		}
		$productos = $this->Proactividad->Producto->find('list');
		$responsables = $this->Proactividad->Responsable->find('list');
		$this->set(compact('productos', 'responsables'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Proactividad->exists($id)) {
			throw new NotFoundException(__('Invalid proactividad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Proactividad->save($this->request->data)) {
				$this->Session->setFlash('La sistematización se ha guardado correctamente','default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La sistematización no se ha guardado.  por favor verificar el formulario. Revise nuevamente todos los campos de selección.','default', array('class'=>'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Proactividad.' . $this->Proactividad->primaryKey => $id));
			$this->request->data = $this->Proactividad->find('first', $options);
		}
		$productos = $this->Proactividad->Producto->find('list');
		$responsables = $this->Proactividad->Responsable->find('list');
		$this->set(compact('productos', 'responsables'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Proactividad->id = $id;
		if (!$this->Proactividad->exists()) {
			throw new NotFoundException(__('Invalid proactividad'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Proactividad->delete()) {
			$this->Session->setFlash(__('The proactividad has been deleted.'));
		} else {
			$this->Session->setFlash(__('The proactividad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
