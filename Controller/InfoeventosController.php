<?php
App::uses('AppController', 'Controller');
/**
 * Infoeventos Controller
 *
 * @property Infoevento $Infoevento
 * @property PaginatorComponent $Paginator
 *  @property Acta $Acta
 */
class InfoeventosController extends AppController
{
	const ALERT_SUCCESS_CLASS = 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative'; // Puedes cambiar esto por clases Tailwind, por ejemplo: '';
	const ALERT_ERROR_CLASS = 'bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative';
	var $uses = array("Acta", "Ubicacion", "Infoevento", "Responsable", "Producto");
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
		$this->Infoevento->recursive = 0;
		$this->set('infoeventos', $this->Paginator->paginate());
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
		$ubicaciones = $this->Ubicacion->find('list');
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
		$infoevento = $this->Infoevento->find(
			'first',
			array(
				'conditions' => array('Infoevento.' . $this->Infoevento->primaryKey => $id),
				'contain' => array(
					'Ubicacion' => array('fields' => array('Ubicacion.id', 'Ubicacion.sitio')),
					'Producto' => array('fields' => array('Producto.id', 'Producto.dimensiones', 'Producto.entorno', 'Producto.activity', 'Producto.tarea')),
					'Responsable' => array('fields' => array('Responsable.id', 'Responsable.nombres'))
				)
			)
		);
		$this->set('infoevento', $infoevento);
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
		$ubicaciones = $this->Ubicacion->find('list');
		$productos = $this->Acta->cargarProductos();
		$this->set(compact('ubicaciones', 'productos'));
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


			if (empty($this->request->data['Infoevento']['anexo']['name'])) {
				unset($this->request->data['Infoevento']['anexo']); // CakePHP no reemplaza
			} else {
				// Aquí procesar la subida de archivo
				$archivo = $this->request->data['Infoevento']['anexo'];
				$nombreArchivo = time() . '_' . $archivo['name'];
				move_uploaded_file($archivo['tmp_name'], WWW_ROOT . 'uploads' . DS . $nombreArchivo);
				$this->request->data['Infoevento']['anexo'] = $nombreArchivo;
			}



			if ($this->Infoevento->save($this->request->data)) {
				$this->Session->setFlash(__('The infoevento has been saved.', 'default', array('class' => self::ALERT_SUCCESS_CLASS)));
				//return $this->redirect(array('action' => 'index'));


				$id = $this->Infoevento->id;
				$aux = "view/$id";
				return $this->redirect(array('action' => $aux));
			} else {
				$this->Session->setFlash('El formulario no se ha guardado, por favor verifique la informacion.', 'default', array('class' => self::ALERT_ERROR_CLASS));
			}
		} else {
			$options = array('conditions' => array('Infoevento.' . $this->Infoevento->primaryKey => $id));
			$this->request->data = $this->Infoevento->find('first', $options);
			$this->request->data = $this->tranformData($this->request->data);
		}
		$ubicaciones = $this->Ubicacion->find('list');
		$productos = $this->Acta->cargarProductos();
		$responsables = $this->Responsable->find('list');


		$this->set(compact('ubicaciones', 'productos', 'responsables'));
	}


	private function tranformData($data)
	{
		// Ejemplo: viene "2. Hombres,4. Niños y niñas"
		if (!empty($data['Infoevento']['poblaciones'])) {
			$poblacionStr = $data['Infoevento']['poblaciones'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Infoevento']['poblaciones'] = $tipos;
		}

		return $data;
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
