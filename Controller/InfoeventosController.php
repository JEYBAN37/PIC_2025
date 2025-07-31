<?php
App::uses('AppController', 'Controller');
/**
 * Infoeventos Controller
 *
 * @property Infoevento $Infoevento
 * @property PaginatorComponent $Paginator
 */
class InfoeventosController extends AppController
{
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
	public function index($id = null)
	{
	}


	public function nuebus($id = null)
	{
	}

	public function editanexo($id = null)
	{
		if (!$this->Infoevento->exists($id)) {
			throw new NotFoundException(__('Invalid infoevento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Infoevento->save($this->request->data)) {
				//$this->Session->setFlash(__('The infoevento has been saved.'));
				//return $this->redirect(array('action' => 'index'));


				$id = $this->Infoevento->id;
				$aux = "view/$id";
				return $this->redirect(array('action' => $aux));
			} else {
				$this->Session->setFlash('El formulario no se ha guardado, por favor verifique la informacion.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Infoevento.' . $this->Infoevento->primaryKey => $id));
			$this->request->data = $this->Infoevento->find('first', $options);
		}
		$ubicaciones = $this->Infoevento->Ubicacion->find('list');
		$productos = $this->Infoevento->Producto->find('list');
		$responsables = $this->Infoevento->Responsable->find('list');
		$this->set(compact('ubicaciones', 'productos', 'responsables'));
	}
	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null)
	{
		if (!$this->Infoevento->exists($id)) {
			throw new NotFoundException(__('Invalid infoevento'));
		}
		$options = array('conditions' => array('Infoevento.' . $this->Infoevento->primaryKey => $id));
		$this->set('infoevento', $this->Infoevento->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Infoevento->create();
			if ($this->Infoevento->save($this->request->data)) {
				//$this->Session->setFlash(__('The infoevento has been saved.'));
				//return $this->redirect(array('action' => 'index'));

				$id = $this->Infoevento->id;
				$aux = "view/$id";
				return $this->redirect(array('action' => $aux));
			} else {
				$this->Session->setFlash('El formulario no se ha guardado, por favor verifique la informacion.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$ubicaciones = $this->Infoevento->Ubicacion->find('list');
		$productos = $this->Infoevento->Producto->find('list');
		$responsables = $this->Infoevento->Responsable->find('list');
		$this->set(compact('ubicaciones', 'productos', 'responsables'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null)
	{
		if (!$this->Infoevento->exists($id)) {
			throw new NotFoundException(__('Invalid infoevento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Infoevento->save($this->request->data)) {
				//$this->Session->setFlash(__('The infoevento has been saved.'));
				//return $this->redirect(array('action' => 'index'));


				$id = $this->Infoevento->id;
				$aux = "view/$id";
				return $this->redirect(array('action' => $aux));
			} else {
				$this->Session->setFlash('El formulario no se ha guardado, por favor verifique la informacion.', 'default', array('alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Infoevento.' . $this->Infoevento->primaryKey => $id));
			$this->request->data = $this->Infoevento->find('first', $options);
		}
		$ubicaciones = $this->Infoevento->Ubicacion->find('list');
		$productos = $this->Infoevento->Producto->find('list');
		$responsables = $this->Infoevento->Responsable->find('list');
		$this->set(compact('ubicaciones', 'productos', 'responsables'));
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	/*public function delete($id = null) {
		$this->Infoevento->id = $id;
		if (!$this->Infoevento->exists()) {
			throw new NotFoundException(__('Invalid infoevento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Infoevento->delete()) {
			$this->Session->setFlash(__('The infoevento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The infoevento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}*/
}
