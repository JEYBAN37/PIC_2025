<?php
App::uses('AppController', 'Controller');
/**
 * Productos Controller
 *
 * @property Producto $Producto
 * @property PaginatorComponent $Paginator
 */
class ProductosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	//public $components = array('Paginator');
	public $components = array('Paginator', 'Session', 'RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Producto->recursive = 0;
        
        $count = $this->Producto->find('count');
        $this->Paginator->settings['limit'] = $count;
		
        $this->set("productos", $this->paginate());

		//$this->set('productos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$this->set('producto', $this->Producto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Producto->create();
			if ($this->Producto->save($this->request->data)) {
				$this->Session->setFlash(__('The producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The producto could not be saved. Please, try again.'));
			}
		}
		$actividades = $this->Producto->Actividad->find('list');
		$actas = $this->Producto->Acta->find('list');
		$responsables = $this->Producto->Responsable->find('list');
		$referentes = $this->Producto->Referente->find('list');
		$actividades = $this->Producto->Actividad->find('list');
		$this->set(compact('actividades', 'actas', 'responsables', 'referentes', 'actividades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Producto->save($this->request->data)) {
				$this->Session->setFlash(__('The producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The producto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
			$this->request->data = $this->Producto->find('first', $options);
		}
		
		//$actas = $this->Producto->Acta->find('list');
		$responsables = $this->Producto->Responsable->find('list');
		$referentes = $this->Producto->Referente->find('list');
		//$actividades = $this->Producto->Actividad->find('list');
		$this->set(compact('responsables', 'referentes'));
	}

	public function editanexo($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Producto->save($this->request->data)) {
				$this->Session->setFlash(__('The producto has been saved.'));
				return $this->redirect(array('action' => 'nuebus'));
			} else {
				$this->Session->setFlash(__('The producto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
			$this->request->data = $this->Producto->find('first', $options);
		}
		
		//$actas = $this->Producto->Acta->find('list');
		$responsables = $this->Producto->Responsable->find('list');
		$referentes = $this->Producto->Referente->find('list');
		//$actividades = $this->Producto->Actividad->find('list');
		$this->set(compact('responsables', 'referentes'));
	}

	 function nuebus() {        
        $this->Producto->recursive = 0;
        
        $paginate = array("fields" => array("id","numproductos","dimensiones","activity","tarea","evidencia" ,"modified","estado"));
        $this->Paginator->settings = $paginate;
        
        $count = $this->Producto->find('count');
        $this->Paginator->settings['limit'] = $count;
		
        $this->set("l", $this->paginate());
    }


	public function editpic($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Producto->save($this->request->data)) {
				//$this->Session->setFlash(__('The producto has been saved.'));
				//return $this->redirect(array('action' => 'nuebus'));
				 $aux = "view/$id";

                return $this->redirect(array('action' => $aux));

			} else {
                $this->Session->setFlash('Los soportes no ha sido guardado. Por favor revise los campos y trate nuevamente.', 'default',array('class'=>'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
			$this->request->data = $this->Producto->find('first', $options);
		}
		
		//$actas = $this->Producto->Acta->find('list');
		$responsables = $this->Producto->Responsable->find('list');
		$referentes = $this->Producto->Referente->find('list');
		//$actividades = $this->Producto->Actividad->find('list');
		$this->set(compact('responsables', 'referentes'));
	}

public function smsedit($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Producto->save($this->request->data)) {
				//$this->Session->setFlash(__('The producto has been saved.'));
				//return $this->redirect(array('action' => 'nuebus'));

				 $aux = "view/$id";

                return $this->redirect(array('action' => $aux));
				
			} else {
			 $this->Session->setFlash('Los soportes no ha sido guardado. Por favor revise los campos y trate nuevamente.', 'default',array('class'=>'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
			$this->request->data = $this->Producto->find('first', $options);
		}
		$actividades = $this->Producto->Actividad->find('list');
		$actas = $this->Producto->Acta->find('list');
		$responsables = $this->Producto->Responsable->find('list');
		$referentes = $this->Producto->Referente->find('list');
		$actividades = $this->Producto->Actividad->find('list');
		$this->set(compact('actividades', 'actas', 'responsables', 'referentes', 'actividades'));

		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$this->set('producto', $this->Producto->find('first', $options));



	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Producto->id = $id;
		if (!$this->Producto->exists()) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Producto->delete()) {
			$this->Session->setFlash(__('The producto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The producto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
