<?php
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');
/**
 * Productos Controller
 *
 * @property Producto $Producto
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * 
 */

Router::connect(
	'/:controller/:year/:month/:day',
	array('action' => 'index'),
	array(
		'year' => '[12][0-9]{3}',
		'month' => '0[1-9]|1[012]',
		'day' => '0[1-9]|[12][0-9]|3[01]'
	)
);
class ProductosController extends AppController
{

	const ALERT_SUCCESS_CLASS = 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative'; // Puedes cambiar esto por clases Tailwind, por ejemplo: '';
	const ALERT_ERROR_CLASS = 'bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative';


	/**
	 * Components
	 *
	 * @var array
	 */
	//public $components = array('Paginator');
	public $helpers = array('Html', 'Form');
	public $components = array('Paginator', 'Session', 'RequestHandler');
	var $uses = array("Proactividad", "Procesoregistro", "Responsable", "Acta", "Producto");

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {}

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


	public function editpic()
	{
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	/*public function delete($id = null)
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
	}*/

	public function getProductos()
	{
		$this->autoRender = false;
		$this->response->type('json');

		$colums = ['Producto.id'];

		$start = $this->request->query('start');
		$length = $this->request->query('length') ? $this->request->query('length') : 10;
		$search = $this->request->query('search')['value'];
		$order = $this->request->query('order');
		$colums = $this->request->query('columns');

		$orderBy = array();
		if (!empty($order)) {
			foreach ($order as $o) {
				$colIndex = intval($o['column']);
				$colName = $colums[$colIndex]['data'];
				$dir = strtoupper($o['dir']) === 'DESC' ? 'DESC' : 'ASC';

				//MAPEO DE COLUMNAS
				switch ($colName) {
					case 'id':
						$orderBy['Producto.id'] = $dir;
						break;
					case 'numproductos':
						$orderBy['Producto.numproductos'] = $dir;
						break;
					case 'prioridad':
						$orderBy['Producto.nombredim'] = $dir;
						break;
					case 'actividad':
						$orderBy['Producto.producto'] = $dir;
						break;
					case 'tarea':
						$orderBy['Producto.actividad'] = $dir;
						break;
					case 'evidencia':
						$orderBy['Producto.soportes'] = $dir;
						break;
					case 'estado':
						$orderBy['Producto.estado'] = $dir;
						break;
					case 'modified':
						$orderBy['Producto.modified'] = $dir;
				}
			}
		}

		//BUSQUEDA
		$conditions = [];
		$rol = isset($_SESSION['Auth']['User']['proyecto']) ? $_SESSION['Auth']['User']['proyecto'] : '';
		if (!empty($rol)) {
			// nombredim es obligatoria (AND), el resto es OR
			$conditions['AND'] = [
				'Producto.nombredim LIKE' => "%$rol%",
				'OR' => [
					'Producto.numproductos LIKE' => "%$search%",
					'Producto.nombredim LIKE' => "%$search%",
					'Producto.producto LIKE' => "%$search%",
					'Producto.actividad LIKE' => "%$search%",
					'Producto.soportes LIKE' => "%$search%",
					'Producto.estado LIKE' => "%$search%",
					'Producto.modified LIKE' => "%$search%",
				]
			];
		} else {
			$conditions['OR'] = [
				'Producto.numproductos LIKE' => "%$search%",
				'Producto.nombredim LIKE' => "%$search%",
				'Producto.producto LIKE' => "%$search%",
				'Producto.actividad LIKE' => "%$search%",
				'Producto.soportes LIKE' => "%$search%",
				'Producto.estado LIKE' => "%$search%",
				'Producto.modified LIKE' => "%$search%",
			];
		}

		//CUENTA TOTAL DE REGISTROS
		$total = $this->Producto->find('count');
		$filtered = $this->Producto->find('count', ['conditions' => $conditions]);

		//OBTENER REGISTROS
		$data = $this->Producto->find('all', array(
			'conditions' => $conditions,
			'fields' => array(
				'Producto.id',
				'Producto.numproductos',
				'Producto.nombredim',
				'Producto.producto',
				'Producto.actividad',
				'Producto.soportes',
				'Producto.estado',
				'Producto.modified'
				
			),
			'limit' => $length,
			'offset' => $start,
			'order' => $orderBy,
			'recursive' => -1,
		));
		//debug($data);
		//RESPUESTA
		$result = [
			"draw" => intval($this->request->query('draw')),
			"recordsTotal" => $total,
			"recordsFiltered" => $filtered,
			"data" => []
		];



		foreach ($data as $row) {
			$result['data'][] = [
				'id' => $row['Producto']['id'],
				'numproductos' => $row['Producto']['numproductos'],
				'nombredim' => $row['Producto']['nombredim'],
				'producto' => $row['Producto']['producto'],
				'actividad' => $row['Producto']['actividad'],
				'soportes' => $row['Producto']['soportes'],
				'estado' => $row['Producto']['estado'],
				'modified' => $row['Producto']['modified'],
				
			];
		}

		echo json_encode($result);
		exit;
	}
}
