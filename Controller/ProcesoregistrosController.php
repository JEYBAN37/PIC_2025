<?php
App::uses('AppController', 'Controller');
/**
 * Procesoregistros Controller
 *
 * @property Procesoregistro $Procesoregistro
 * @property PaginatorComponent $Paginator
 */
class ProcesoregistrosController extends AppController
{

	const ALERT_SUCCESS_CLASS = 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative'; // Puedes cambiar esto por clases Tailwind, por ejemplo: '';
	const ALERT_ERROR_CLASS = 'bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative';

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
		$this->Procesoregistro->Behaviors->load('Containable');
		$data = $this->Procesoregistro->find(
			'all',
			array(
				'recursive' => -1,
				'fields' => array('Procesoregistro.id, Procesoregistro.fecha'),
				'contain' => array(
					'Proactividad' => array('fields' => array('id')),
					'Ubicacion' => array('fields' => array('comuna')),
					'Plsesion' => array('fields' => array('tema')),
					'Proactividad.Responsable' => array('fields' => array('nombres'))
				),
			)
		);
		debug($data);
		$this->set('procesoregistros', $data);
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
	public function add()
	{
		if ($this->request->is('post')) /*{
			$this->Procesoregistro->create();
			if ($this->Procesoregistro->save($this->request->data)) {
				$this->Session->setFlash(__('El registro fue almacenado, asocie una nueva sistematizacion de proceso formativo o educativo con la fecha y tematica relacionada.'));
				return $this->redirect(array('controller' => 'procesoregistros', 'action' => 'index'));
			} */

			if ($this->Procesoregistro->save($this->request->data)) {

				if ($this->request->data['btn'] == 'Guardar y asociar otra sesion') {
					//$session->setFlash("registro guardado");
					$this->Session->setFlash(
						'El registro fue almacenado correctamente, realice otro registro',
						'default',
						array('class' => self::ALERT_SUCCESS_CLASS)
					);
					//echo '<script> alert("registro guardado"); </script>';
					return $this->redirect(array('controller' => 'Procesoregistros', 'action' => 'add?sesion=' . $this->data["Procesoregistro"]["procesoregistro_id"]));
				} else {
					//return $this->redirect(array('controller' => 'plsesiones', 'action' => 'nuebus'));                
					return $this->redirect(array('controller' => 'SistematizacionProcesosViewTests', 'action' => 'nuebus/' . $this->data["Procesoregistro"]["procesoregistro_id"]));
				}
			} else {
				$this->Session->setFlash('El registro no fue almacenado, Por favor trate nuevamente.', 'default', array('class' => self::ALERT_ERROR_CLASS));
			}

		$ubicaciones = $this->Procesoregistro->Ubicacion->find('list');
		$proactividades = $this->Procesoregistro->Proactividad->find('list', [
			'order' => ['Proactividad.created' => 'DESC']
		]);

		$plsesiones = $this->Procesoregistro->Plsesion->find('list', [
			'order' => ['Plsesion.modified' => 'DESC']
		]);

		$this->set(compact('proactividades', 'ubicaciones', 'plsesiones'));
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
		if (!$this->Procesoregistro->exists($id)) {
			throw new NotFoundException(__('Invalid procesoregistro'));
		}
		if ($this->request->is(array('post', 'put'))) {

			if (empty($this->request->data['Procesoregistro']['anexo']['name'])) {
				unset($this->request->data['Procesoregistro']['anexo']); // CakePHP no reemplaza
			} else {
				// Aquí procesar la subida de archivo
				$archivo = $this->request->data['Procesoregistro']['anexo'];
				$nombreArchivo = time() . '_' . $archivo['name'];
				move_uploaded_file($archivo['tmp_name'], WWW_ROOT . 'uploads' . DS . $nombreArchivo);
				$this->request->data['Procesoregistro']['anexo'] = $nombreArchivo;
			}

			if ($this->Procesoregistro->save($this->request->data)) {

				$this->Session->setFlash('El registro fue almacenado correctamente', 'default', array('class' =>  self::ALERT_SUCCESS_CLASS));
				$aux = "view/$id";

				return $this->redirect(array('action' => $aux));
			} else {
				$this->Session->setFlash('El registro no fue almacenado, Por favor trate nuevamente.', 'default', array('class' => self::ALERT_ERROR_CLASS));
			}
		} else {
			$options = array('conditions' => array('Procesoregistro.' . $this->Procesoregistro->primaryKey => $id));
			$this->request->data = $this->Procesoregistro->find('first', $options);
			$this->request->data = $this->tranformData($this->request->data);
		}
		$proactividades = $this->Procesoregistro->Proactividad->find('list');
		$ubicaciones = $this->Procesoregistro->Ubicacion->find('list');
		$plsesiones = $this->Procesoregistro->Plsesion->find('list');
		$this->set(compact('proactividades', 'ubicaciones', 'plsesiones'));
	}


	private function tranformData($data)
	{
		// Ejemplo: viene "2. Hombres,4. Niños y niñas"
		if (!empty($data['Procesoregistro']['tipopoblacion'])) {
			$poblacionStr = $data['Procesoregistro']['tipopoblacion'];
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Procesoregistro']['tipopoblacion'] = $tipos;
		}

		if (!empty($data['Procesoregistro']['cursovida'])) {
			$cursovidaStr = strtolower($data['Procesoregistro']['cursovida']);
			// Extraer cada palabra/frase hasta la coma
			$tipos = array_map('trim', explode(',', $cursovidaStr));
			$data['Procesoregistro']['cursovida'] = $tipos;
		}

		return $data;
	}

	public function editanexo($id = null)
	{
		if (!$this->Procesoregistro->exists($id)) {
			throw new NotFoundException(__('Invalid procesoregistro'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Procesoregistro->save($this->request->data)) {
				$this->Session->setFlash('El archivo fue almacenado correctamente', 'default', array('class' => self::ALERT_SUCCESS_CLASS));
				//return $this->redirect(array('action' => 'nuebus'));

				$aux = "view/$id";

				return $this->redirect(array('action' => $aux));
			} else {
				$this->Session->setFlash('El archivo no fue almacenado correctamente, verifique e intente nuevamente', 'default', array('class' => self::ALERT_ERROR_CLASS));
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
	public function delete($id = null)
	{
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
