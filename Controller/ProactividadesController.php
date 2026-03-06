<?php
App::uses('AppController', 'Controller');
/**
 * Proactividades Controller
 *
 * @property Proactividad $Proactividad
 * @property PaginatorComponent $Paginator
 */
class ProactividadesController extends AppController
{

	const ALERT_SUCCESS_CLASS = 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative'; // Puedes cambiar esto por clases Tailwind, por ejemplo: '';
	const ALERT_ERROR_CLASS = 'bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative';
	var $uses = array("Proactividad", "Procesoregistro", "Responsable", "Acta", "Producto");
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

	public function index()
	{
		$tipoUsuario = isset($_SESSION['Auth']['User']['group_id']) ? $_SESSION['Auth']['User']['group_id'] : '';
		$this->set('tipoUsuario', $tipoUsuario);
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
		$tipoUsuario = isset($_SESSION['Auth']['User']['group_id']) ? $_SESSION['Auth']['User']['group_id'] : '';
		if (!$this->Proactividad->exists($id)) {
			throw new NotFoundException(__('Invalid proactividad'));
		}

		// En tu controlador
		$proactividad = $this->Proactividad->getProactividadCompleto($id);

		$encuentros = $proactividad['Proactividad']['id'];
		// Contar el número de sesiones en Procesoregistro donde producto_id coincide
		$numSesiones = $this->Procesoregistro->countSesionesPorPosicion($encuentros);
		if ($proactividad) {
			$conCatNumSesiones = $numSesiones . ' / ' . $proactividad['Proactividad']['totalsesiones']; // Sumar 1 al conteo obtenido
		}

		$this->set('conCatNumSesiones', $conCatNumSesiones);
		$this->set('proactividad', $proactividad);
		$this->set('tipoUsuario', $tipoUsuario);
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		
		if ($this->request->is('post')) {
			$this->Proactividad->create();			
			if ($this->Proactividad->save($this->request->data)) {
				$this->Session->setFlash('La sistematizacion del proceso formativo educativo fue gurdada, asocie las fechas, tematicas relaciondas a la sistematizacion.', 'default', array('class' => self::ALERT_SUCCESS_CLASS));
				return $this->redirect(array('controller' => 'Procesoregistros', 'action' => 'add'));
			} else {
				$this->Session->setFlash('No se ha podido guardar, por favor verifique el formulario', 'default', array('class' => self::ALERT_ERROR_CLASS));
			}
		}
		$productos = $this->Acta->cargarProductos();
		$this->set(compact('productos'));
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
		if (!$this->Proactividad->exists($id)) {
			throw new NotFoundException(__('Invalid proactividad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Proactividad->save($this->request->data)) {
				$this->Session->setFlash('La sistematización se ha guardado correctamente', 'default', array('class' => self::ALERT_SUCCESS_CLASS));
				return $this->redirect(array('action' => 'view', $id));
			} else {
				$this->Session->setFlash('La sistematización no se ha guardado.  por favor verificar el formulario. Revise nuevamente todos los campos de selección.', 'default', array('class' => self::ALERT_ERROR_CLASS));
			}
		} else {
			$options = array('conditions' => array('Proactividad.' . $this->Proactividad->primaryKey => $id));
			$this->request->data = $this->Proactividad->find('first', $options);
			$this->request->data = $this->tranformData($this->request->data);
		}


		$productos = $this->Acta->cargarProductos();
		$idResponsable = isset($this->request->data['Proactividad']['responsable_id']) ? $this->request->data['Proactividad']['responsable_id'] : null;
		$responsable = $idResponsable ? $this->Responsable->find('first', [
			'conditions' => ['Responsable.id' => $idResponsable],
			'fields' => ['id', 'nombres']
		]) : null;
		$idredirect = $this->request->data['Proactividad']['id'];
		$this->set(compact('productos', 'responsable', 'idredirect'));
	}


	private function tranformData($data)
	{
		// Ejemplo: viene "2. Hombres,4. Niños y niñas"
		if (!empty($data['Proactividad']['poblaciones'])) {
			$poblacionStr = $data['Proactividad']['poblaciones'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Proactividad']['poblaciones'] = $tipos;
		}

		return $data;
	}

	public function getProactividades()
	{
		$this->autoRender = false;
		$this->response->type('json');

		$columns = ['Proactividad.id'];
		$start = $this->request->query('start');
		$length = $this->request->query('length') ? $this->request->query('length') : 10;
		$search = $this->request->query('search')['value'];
		$order = $this->request->query('order');
		$columns = $this->request->query('columns');

		$orderBy = array();
		if (!empty($order)) {
			foreach ($order as $o) {
				$colIndex = intval($o['column']); // índice de la columna
				$colName = $columns[$colIndex]['data']; // nombre definido en JS (columns: [])
				$dir = strtoupper($o['dir']) === 'DESC' ? 'DESC' : 'ASC';

				// Mapear a las columnas reales de la BD
				switch ($colName) {
					case 'id':
						$orderBy['Proactividad.id'] = $dir;
						break;
					
					case 'numeroactividad':
						// si es virtual o concatenado
						$orderBy['Producto.id'] = $dir;
						break;
					case 'nombredim':
						// si es virtual o concatenado
						$orderBy['Producto.nombredim'] = $dir;
						break;
					case 'actividad':
						// si es virtual o concatenado
						$orderBy['Producto.actividad'] = $dir;
						break;	
					case 'objactividad':
						$orderBy['Proactividad.objactividad'] = $dir;
						break;
					case 'responsable':
						$orderBy['Responsable.nombres'] = $dir;
						break;
					case 'conCatNumSesiones':
						// si quieres ordenar por el número de sesiones
						$orderBy['numSesiones'] = $dir;
						break;
					case 'created':
						$orderBy['Proactividad.created'] = $dir;
						break;
				}
			}
		}
		$conditions = [];
		


		
				$conditions['OR'] = [
					'Proactividad.id LIKE' => "%$search%",
					'Producto.actividad LIKE' => "%$search%",
					'Producto.id LIKE' => "%$search%",
					'Proactividad.objactividad LIKE' => "%$search%",
					'Responsable.nombres LIKE' => "%$search%"
				];
			
		

		$total = $this->Proactividad->find('count');
		$filtered = $this->Proactividad->find('count', ['conditions' => $conditions]);

		$data = $this->Proactividad->find('all', array(
			'conditions' => $conditions,
			'fields' => array(
				'Proactividad.id',
				'Proactividad.totalsesiones',
				'Proactividad.objactividad',
				'Proactividad.created',
				'(SELECT COUNT(*) FROM procesoregistros pr WHERE pr.proactividad_id = Proactividad.id) AS numSesiones'
			),
			'contain' => array(
				'Producto' => array(
					'fields' => array(
						
						'Producto.actividad',
						'Producto.nombredim',
						'Producto.id'
					)
				),
				'Responsable' => array(
					'fields' => array('Responsable.id', 'Responsable.nombres')
				)
			),
			'limit' => $length,
			'offset' => $start,
			'order' => $orderBy,
			'recursive' => -1,
		));

		$result = [
			"draw" => intval($this->request->query('draw')),
			"recordsTotal" => $total,
			"recordsFiltered" => $filtered,
			"data" => []
		];

		foreach ($data as $row) {
			$result['data'][] = [
				'id' => $row['Proactividad']['id'],
				'conCatNumSesiones' => $row[0]['numSesiones'] . ' / ' . $row['Proactividad']['totalsesiones'],
				'numeroactividad' => $row['Producto']['id'],
				'actividad' => $row['Producto']['actividad'],
				'nombredim' => $row['Producto']['nombredim'],
				'responsable' => isset($row['Responsable']['nombres']) ? $row['Responsable']['nombres'] : 'N/A',
				'objactividad' => $row['Proactividad']['objactividad'],
				'created' => $row['Proactividad']['created'],
			];
		}

		echo json_encode($result);
	}
}
