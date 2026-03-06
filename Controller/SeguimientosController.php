<?php
App::uses('AppController', 'Controller');
/**
 * Seguimientos Controller
 *
 * @property Seguimiento $Seguimiento
 * @property PaginatorComponent $Paginator
 */
class SeguimientosController extends AppController {

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
		$this->Seguimiento->recursive = 0;
		$this->set('seguimientos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Seguimiento->exists($id)) {
			throw new NotFoundException(__('Invalid seguimiento'));
		}
		$options = array('conditions' => array('Seguimiento.' . $this->Seguimiento->primaryKey => $id));
		$tipoUsuario = isset($_SESSION['Auth']['User']['group_id']) ? $_SESSION['Auth']['User']['group_id'] : '';
		$this->set('tipoUsuario',$tipoUsuario);
		$this->set('seguimiento', $this->Seguimiento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

			if ($this->request->is('post')) {
			$this->Seguimiento->create();
			$id_producto = $this->request->data['Seguimiento']['producto_id'];
			if ($this->Seguimiento->save($this->request->data)) {
				
				if (isset($this->request->data['btn']) && $this->request->data['btn'] == 'Guardar') {
					$this->Session->setFlash('Registro de seguimiento se guradado con exito', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));

					return $this->redirect(array(
						'controller' => 'Productos',
						'action' => 'view/' . $id_producto,
						'?' => array('producto' => $id_producto)
					));
				}

			} else {
				$this->Session->setFlash('El registro no fue guardado o esta pendiente un campo del formulario', 'flash_custom', array('class' => 'error', 'title' => 'Error al guardar el registro'));
			}
		}
	
		$productos = $this->Seguimiento->Producto->find('list');
		$referentes = $this->Seguimiento->Referente->find('list');
		$responsables = $this->Seguimiento->Responsable->find('list');
		$this->set(compact('productos', 'referentes', 'responsables'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Seguimiento->exists($id)) {
			throw new NotFoundException(__('Invalid seguimiento'));
		}
        $tipoUsuario = isset($_SESSION['Auth']['User']['group_id']) ? $_SESSION['Auth']['User']['group_id'] : '';
		
		if ($this->request->is(array('post', 'put'))) {
			$id_producto =$this->request->data['Seguimiento']['producto_id'];			
			if ($this->Seguimiento->save($this->request->data)) {
				$this->Session->setFlash('Su registro fue almacenado', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));
				return $this->redirect(array(
						'controller' => 'Productos',
						'action' => 'view/' . $id_producto,
						'?' => array('producto' => $id_producto)
					));
			} else {
				$this->Session->setFlash(__('The seguimiento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Seguimiento.' . $this->Seguimiento->primaryKey => $id));
			$this->request->data = $this->Seguimiento->find('first', $options);
			$id_producto =$this->request->data['Seguimiento']['producto_id'];
		if($tipoUsuario !== '2'){
			return $this->redirect(array(
						'controller' => 'Productos',
						'action' => 'view/' . $id_producto,
						'?' => array('producto' => $id_producto)
					));
		}
		}
		$productos = $this->Seguimiento->Producto->find('list');
		$referentes = $this->Seguimiento->Referente->find('list');
		$responsables = $this->Seguimiento->Responsable->find('list');
		$this->set(compact('productos', 'referentes', 'responsables'));
	}

	public function editpic($id = null)
	{
		if (!$this->Seguimiento->exists($id)) {
			throw new NotFoundException(__('Invalid seguimiento'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$id_producto =$this->request->data['Seguimiento']['producto_id'];			
			if ($this->Seguimiento->save($this->request->data)) {
				$this->Session->setFlash('Su registro fue almacenado', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));
				return $this->redirect(array(
						'controller' => 'Productos',
						'action' => 'view/' . $id_producto,
						'?' => array('producto' => $id_producto)
					));
			} else {
				$this->Session->setFlash(__('The seguimiento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Seguimiento.' . $this->Seguimiento->primaryKey => $id));
			$this->request->data = $this->Seguimiento->find('first', $options);
		}
		$productos = $this->Seguimiento->Producto->find('list');
		$referentes = $this->Seguimiento->Referente->find('list');
		$responsables = $this->Seguimiento->Responsable->find('list');
		$this->set(compact('productos', 'referentes', 'responsables'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Seguimiento->id = $id;
		if (!$this->Seguimiento->exists()) {
			throw new NotFoundException(__('Invalid seguimiento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Seguimiento->delete()) {
			$this->Session->setFlash(__('The seguimiento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The seguimiento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
