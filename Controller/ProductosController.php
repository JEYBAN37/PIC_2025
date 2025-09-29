<?php
App::uses('AppController', 'Controller');
/**
 * Productos Controller
 *
 * @property Producto $Producto
 * @property PaginatorComponent $Paginator
 */
class ProductosController extends AppController
{

	/**
	 * Components
	 *
	 * @var array
	 */
	//public $components = array('Paginator');
	public $components = array('Paginator', 'Session', 'RequestHandler');
	var $uses = array("Proactividad", "Procesoregistro", "Responsable", "Acta", "Producto");

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		$this->Producto->recursive = 0;
		$rol = isset($_SESSION['Auth']['User']['proyecto']) ? $_SESSION['Auth']['User']['proyecto'] : '';

		$conditions = [];
		if (!empty($rol)) {
			$conditions['Producto.nombredim'] = $rol;
		}

		$count = $this->Producto->find(
			'count',
			array('conditions' => $conditions)
		);

		$this->Paginator->settings['limit'] = $count;

		$Productos = $this->Producto->find(
			'all',
			array('conditions' => $conditions)
		);

		$this->set("productos", $Productos);

		//$this->set('productos', $this->Paginator->paginate());
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
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$tipoUsuario = isset($_SESSION['Auth']['User']['group_id']) ? $_SESSION['Auth']['User']['group_id'] : '';


		$producto = $this->Producto->find(
			'first',
			array(
				'conditions' => array('Producto.' . $this->Producto->primaryKey => $id),
				'contain' => array(
					'Responsable' => array(
						'fields' => array('Responsable.id', 'Responsable.nombres')
					),
					'Referente' => array(
						'fields' => array('Referente.id', 'Referente.nombres')
					),
					'Proactividad' => array(
						'fields' => array('Proactividad.id', 'Proactividad.grupo', 'Proactividad.poblaciones', 'Proactividad.objactividad', 'Proactividad.caracteristicasesion'),
						'Responsable' => array(
							'fields' => array('Responsable.id', 'Responsable.nombres')
						)
					),
					'Plsesion' => array(
						'fields' => array('Plsesion.id', 'Plsesion.fecha', 'Plsesion.tema', 'Plsesion.dimension'),
						'Responsable' => array(
							'fields' => array('Responsable.id', 'Responsable.nombres')
						),
					),
					'Infoevento' => array(
						'fields' => array('Infoevento.id', 'Infoevento.fecha', 'Infoevento.tema', 'Infoevento.tipo', 'Infoevento.anexo', 'Infoevento.observacion'),
						'Responsable' => array(
							'fields' => array('Responsable.id', 'Responsable.nombres')
						)
					),
					'Acta' => array(
						'fields' => array('Acta.id', 'Acta.fecha', 'Acta.tema', 'Acta.objactividad', 'Acta.anexo'),
						'Responsable' => array(
							'fields' => array('Responsable.id', 'Responsable.nombres')
						),
						'Ubicacion' => array(
							'fields' => array('Ubicacion.id', 'Ubicacion.sitio')
						)
					)
				)
			)
		);
		$this->set(compact('tipoUsuario', 'producto'));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
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
	public function edit($id = null)
	{
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

	public function editanexo($id = null)
	{
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

	function nuebus()
	{
		$this->Producto->recursive = 0;

		$paginate = array("fields" => array("id", "numproductos", "dimensiones", "activity", "tarea", "evidencia", "modified", "estado"));
		$this->Paginator->settings = $paginate;

		$count = $this->Producto->find('count');
		$this->Paginator->settings['limit'] = $count;

		$this->set("l", $this->paginate());
	}


	public function editpic($id = null)
	{
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
				$this->Session->setFlash('Los soportes no ha sido guardado. Por favor revise los campos y trate nuevamente.', 'default', array('class' => 'alert alert-danger'));
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

	public function smsedit($id = null)
	{
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
				$this->Session->setFlash('Los soportes no ha sido guardado. Por favor revise los campos y trate nuevamente.', 'default', array('class' => 'alert alert-danger'));
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
	public function delete($id = null)
	{
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


	public function states(){
		$this->autoRender = false;
		$this->response->type('json');
		$data = $this->Producto->find('all', array(
			'fields' => array('Producto.estado', 'COUNT(Producto.id) as count'),
			'group' => array('Producto.estado'),
			'recursive' => -1
		));
		$this->response->body(json_encode($data));
	}
}
