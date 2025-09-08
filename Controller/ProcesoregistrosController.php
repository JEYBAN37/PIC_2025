<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'pclzip', array('file' => 'pclzip/pclzip.lib.php'));

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
		if (!$this->Procesoregistro->exists($id)) {
			throw new NotFoundException(__('Invalid procesoregistro'));
		}
		$options = array('conditions' => array('Procesoregistro.' . $this->Procesoregistro->primaryKey => $id));

		$procesoregistro = $this->Procesoregistro->find('first', $options);
		$files = $this->viewZip($procesoregistro['Procesoregistro']['anexo'], $id);
		$this->set(compact('procesoregistro', 'files'));
	}

	public function viewZip($file = null, $id = null)
	{
		if (!$file) {
			return [];
		}

		$filePath = WWW_ROOT . 'files' . DS . 'procesoregistro' . DS . 'anexo' . DS . $id . DS . $file;

		if (!file_exists($filePath)) {
			return [];
		}

		$sessionId = $this->Session->id();
		$extractPath = WWW_ROOT . 'files' . DS . 'tmp' . DS . $sessionId . DS;

		if (!is_dir($extractPath)) {
			mkdir($extractPath, 0777, true);
		}
		// Extraer todos los archivos
		$zip = new PclZip($filePath);
		$list = $zip->extract(
			PCLZIP_OPT_PATH,
			$extractPath
		);

		// Extraer archivos que no sean jpg/jpeg/png/gif y guardar sus rutas
		$otherFiles = [];
		if (is_array($list)) {
			foreach ($list as $entry) {
				$ext = strtolower(pathinfo($entry['filename'], PATHINFO_EXTENSION));
				if (!in_array($ext, ['jpg', 'jpeg', 'png', 'gif'])) {
					$webPath = '/' . $entry['filename'];
					$webPath = str_replace(DIRECTORY_SEPARATOR, '/', $webPath);
					$otherFiles[] = $webPath;
				}
			}
		}

		if ($list == 0) {
			return [];
		}

		$images = [];
		$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($extractPath));
		foreach ($rii as $f) {
			if ($f->isDir()) continue;
			$ext = strtolower($f->getExtension());

			if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif'])) {
				$path = $f->getPathname();

				// ⚡ Reducir calidad (solo JPG/PNG, GIF lo dejamos igual)
				if (in_array($ext, ['jpg', 'jpeg'])) {
					$img = imagecreatefromjpeg($path);
					imagejpeg($img, $path, 30); // calidad 30% (ajústalo: 30 = muy baja, 90 = casi original)
					imagedestroy($img);
				} elseif ($ext === 'png') {
					$img = imagecreatefrompng($path);
					imagepng($img, $path, 6); // compresión 0 (mejor calidad) a 9 (peor)
					imagedestroy($img);
				}

				$relativePath = str_replace(WWW_ROOT, '/', $path); // quita C:/xampp/htdocs/PIC/webroot
				$relativePath = str_replace(DIRECTORY_SEPARATOR, '/', $relativePath);
				$webPath = Router::url($relativePath, true); // 🔥 genera http://localhost/PIC/files/tmp/...


				$images[] = $webPath;
			}

			//normalizar las rutas para los otros documentos
		}
		return compact('images', 'otherFiles');
	}


	public function cleanupTmp()
	{
		$this->autoRender = false;

		$sessionId = $this->Session->id();
		$extractPath = WWW_ROOT . 'files' . DS . 'tmp' . DS . $sessionId . DS;

		if (is_dir($extractPath)) {
			$it = new RecursiveIteratorIterator(
				new RecursiveDirectoryIterator($extractPath, RecursiveDirectoryIterator::SKIP_DOTS),
				RecursiveIteratorIterator::CHILD_FIRST
			);
			foreach ($it as $file) {
				$file->isDir() ? rmdir($file->getPathname()) : unlink($file->getPathname());
			}
			@rmdir($extractPath);
		}

		echo json_encode(['status' => 'ok']);
	}





	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post'))


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
		$proactividades = $this->Procesoregistro->cargarProactividad();
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
		$proactividades = $this->Procesoregistro->cargarProactividad();
		$ubicaciones = $this->Procesoregistro->Ubicacion->find('list');
		$plsesiones = $this->Procesoregistro->Plsesion->find('list', [
			'order' => ['Plsesion.modified' => 'DESC']
		]);
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
			$this->Session->setFlash(__('The procesoregistro has been deleted.'), 'default', array('class' => self::ALERT_SUCCESS_CLASS));
		} else {
			$this->Session->setFlash(__('The procesoregistro could not be deleted. Please, try again.'), 'default', array('class' => self::ALERT_ERROR_CLASS));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function deleteInProactividades($id = null, $idProactividades = null)
	{
		$this->Procesoregistro->id = $id;
		if (!$this->Procesoregistro->exists()) {
			throw new NotFoundException(__('Invalid procesoregistro'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Procesoregistro->delete()) {
			$this->Session->setFlash(__('The procesoregistro has been deleted.'), 'default', array('class' => self::ALERT_SUCCESS_CLASS));
		} else {
			$this->Session->setFlash(__('The procesoregistro could not be deleted. Please, try again.'), 'default', array('class' => self::ALERT_ERROR_CLASS));
		}
		return $this->redirect(array('controller' => 'proactividades', 'action' => 'view', $idProactividades));
	}
}
