<?php
App::uses('AppController', 'Controller');
/**
 * Procesoregistros Controller
 *
 * @property Procesoregistro $Procesoregistro
 * @property PaginatorComponent $Paginator
 */
class ProcesoregistrosController extends AppController {

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
		$this->Procesoregistro->recursive = 0;
		$this->set('procesoregistros', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Procesoregistro->exists($id)) {
			throw new NotFoundException(__('Invalid procesoregistro'));
		}
		$options = array('conditions' => array('Procesoregistro.' . $this->Procesoregistro->primaryKey => $id));
		$this->set('procesoregistro', $this->Procesoregistro->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) /*{
			$this->Procesoregistro->create();
			if ($this->Procesoregistro->save($this->request->data)) {
				$this->Session->setFlash(__('El registro fue almacenado, asocie una nueva sistematizacion de proceso formativo o educativo con la fecha y tematica relacionada.'));
				return $this->redirect(array('controller' => 'procesoregistros', 'action' => 'index'));
			} */

			 if ($this->Procesoregistro->save($this->request->data)) {
                
                if($this->request->data['btn'] == 'Guardar y asociar Otra sesion') {
                    //$session->setFlash("registro guardado");
                    $this->Session->setFlash('El registro fue almacenado correctamente, realice otro registro','default', array('class'=>'alert alert-success'));
                    //echo '<script> alert("registro guardado"); </script>';
                    return $this->redirect(array('controller' => 'Procesoregistros', 'action' => 'add?sesion='.$this->data["Procesoregistro"]["procesoregistro_id"]));
                } else {
                    //return $this->redirect(array('controller' => 'plsesiones', 'action' => 'nuebus'));                
                    return $this->redirect(array('controller' => 'SistematizacionProcesosViewTests', 'action' => 'nuebus/'.$this->data["Procesoregistro"]["procesoregistro_id"]));    
                          
                    
                }
                }else {
				$this->Session->setFlash('El registro no fue almacenado, Por favor trate nuevamente.','default', array('class'=>'alert alert-danger'));
			}
		
		$proactividades = $this->Procesoregistro->Proactividad->find('list');
		$ubicaciones = $this->Procesoregistro->Ubicacion->find('list');
		$plsesiones = $this->Procesoregistro->Plsesion->find('list');
		$this->set(compact('proactividades', 'ubicaciones', 'plsesiones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Procesoregistro->exists($id)) {
			throw new NotFoundException(__('Invalid procesoregistro'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			if ($this->Procesoregistro->save($this->request->data)) {
				$this->Session->setFlash('El registro fue almacenado correctamente','default', array('class'=>'alert alert-success'));
				//return $this->redirect(array('action' => 'nuebus'));

				  $aux = "view/$id";

                return $this->redirect(array('action' => $aux));
			} else {
				$this->Session->setFlash('El registro no fue almacenado, Por favor trate nuevamente.','default', array('class'=>'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Procesoregistro.' . $this->Procesoregistro->primaryKey => $id));
			$this->request->data = $this->Procesoregistro->find('first', $options);
		}
		$proactividades = $this->Procesoregistro->Proactividad->find('list');
		$ubicaciones = $this->Procesoregistro->Ubicacion->find('list');
		$plsesiones = $this->Procesoregistro->Plsesion->find('list');
		$this->set(compact('proactividades', 'ubicaciones', 'plsesiones'));
	}

	public function editanexo($id = null) {
		if (!$this->Procesoregistro->exists($id)) {
			throw new NotFoundException(__('Invalid procesoregistro'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Procesoregistro->save($this->request->data)) {
				$this->Session->setFlash('El archivo fue almacenado correctamente','default', array('class'=>'alert alert-success'));
				//return $this->redirect(array('action' => 'nuebus'));

				  $aux = "view/$id";

                return $this->redirect(array('action' => $aux));
			} else {
				$this->Session->setFlash('El archivo no fue almacenado correctamente, verifique e intente nuevamente','default', array('class'=>'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Procesoregistro.' . $this->Procesoregistro->primaryKey => $id));
			$this->request->data = $this->Procesoregistro->find('first', $options);
		}
		$proactividades = $this->Procesoregistro->Proactividad->find('list');
		$ubicaciones = $this->Procesoregistro->Ubicacion->find('list');
		$plsesiones = $this->Procesoregistro->Plsesion->find('list');
		$this->set(compact('proactividades', 'ubicaciones', 'plsesiones'));
	}


/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Procesoregistro->id = $id;
		if (!$this->Procesoregistro->exists()) {
			throw new NotFoundException(__('Invalid procesoregistro'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Procesoregistro->delete()) {
			$this->Session->setFlash(__('The procesoregistro has been deleted.'));
		} else {
			$this->Session->setFlash(__('The procesoregistro could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
