<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'pclzip', array('file' => 'pclzip/pclzip.lib.php'));

/**
 * Procesoregistros Controller
 *
 * @property Procesoregistro $Procesoregistro
 * @property PaginatorComponent $Paginator
 * @property Plsesion $Plsesion
 * @property Producto $Producto
 * @property Ubicacion $Ubicacion
 */
class ProcesoregistrosController extends AppController
{

	const ALERT_SUCCESS_CLASS = 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative'; // Puedes cambiar esto por clases Tailwind, por ejemplo: '';
	const ALERT_ERROR_CLASS = 'bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative';
	var $uses = array("Ubicacion", "Producto", "Procesoregistro", "Proactividad", "Plsesion");

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
		
		// Capturamos el archivo enviado por la URL query (?file=archivo.zip)
		$file = $this->request->query('file');
		$adjuntosZip = array('images' => array(), 'otherFiles' => array());
		
		// Si no se pasó por URL pero el registro ya tiene un archivo guardado en la BD, lo usamos
    if (empty($file) && !empty($procesoregistro['Procesoregistro']['anexo'])) {
        $file = $procesoregistro['Procesoregistro']['anexo'];
    }
    
    $adjuntosZip = array('images' => array(), 'otherFiles' => array());
    if (!empty($file) && is_string($file)) {
        $adjuntosZip = $this->viewZip($file, $id);
    }
    
    $this->set(compact('procesoregistro', 'adjuntosZip'));
	}

	public function viewZip($file = null, $id = null)
	{
		if (!$file) {
			return ['images' => [], 'otherFiles' => []];
		}

		// 1. Validar la ruta física real donde el plugin guarda el archivo
		// Nota: Como tu plugin usa la estructura webroot/files/procesoregistro/anexo/{id}/{file}
		$filePath = WWW_ROOT . 'files' . DS . 'procesoregistro' . DS . 'anexo' . DS . $id . DS . $file;

		// Fallback: Si no existe ahí, buscamos en la carpeta general de uploads
		if (!file_exists($filePath)) {
			$alternative = WWW_ROOT . 'uploads' . DS . $fileName;
			if (file_exists($alternative)) {
				$filePath = $alternative;
			} elseif (file_exists($file)) {
				$filePath = $file;
			} elseif (file_exists(WWW_ROOT . ltrim($file, '/\\'))) {
				$filePath = WWW_ROOT . ltrim($file, '/\\');
			}
		}

		if (!file_exists($filePath)) {
			return ['images' => [], 'otherFiles' => []];
		}

		$sessionId = $this->Session->id();
		$extractPath = WWW_ROOT . 'files' . DS . 'tmp' . DS . $sessionId . DS;

		if (!is_dir($extractPath)) {
			mkdir($extractPath, 0777, true);
		}

		$images = [];
		$otherFiles = [];

		// 2. Usar ZipArchive nativo en lugar de PclZip para garantizar lectura binaria
		$zip = new ZipArchive;
		if ($zip->open($filePath) === TRUE) {
			$zip->extractTo($extractPath);
			$zip->close();

			// 3. Recorrer de forma recursiva la carpeta temporal donde se extrajo
			$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($extractPath));
			foreach ($rii as $f) {
				if ($f->isDir()) continue;
				
				$ext = strtolower($f->getExtension());
				$path = $f->getPathname();

				// Soportar variaciones comunes de extensión de imagen incluyendo 'jpeg'
				if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif'])) {
					
					// Reducir la calidad en el servidor para optimizar la carga en Pasto
					if (in_array($ext, ['jpg', 'jpeg'])) {
						$img = @imagecreatefromjpeg($path);
						if ($img) {
							imagejpeg($img, $path, 30); // Calidad 30%
							imagedestroy($img);
						}
					} elseif ($ext === 'png') {
						$img = @imagecreatefrompng($path);
						if ($img) {
							imagepng($img, $path, 6);
							imagedestroy($img);
						}
					}

					// Normalizar la URL pública para el navegador web
					$relativePath = str_replace(WWW_ROOT, '', $path);
					$relativePath = str_replace(DIRECTORY_SEPARATOR, '/', $relativePath);
					$webPath = Router::url('/' . $relativePath, true);

					$images[] = $webPath;
				} else {
					// Si son PDFs u otros documentos, guardamos su ruta relativa interna
					$relativePath = str_replace($extractPath, '', $path);
					$relativePath = str_replace(DIRECTORY_SEPARATOR, '/', $relativePath);
					$otherFiles[] = $relativePath;
				}
			}
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
		if ($this->request->is('post')) {
			if ($this->Procesoregistro->save($this->request->data)) {
				if ($this->request->data['btn'] == 'Guardar y asociar otra sesion') {
					$this->Session->setFlash(
						'El registro fue almacenado correctamente, realice otro registro',
						'default',
						array('class' => self::ALERT_SUCCESS_CLASS)
					);
					return $this->redirect(array('controller' => 'Procesoregistros', 'action' => 'add?sesion=' . $this->data["Procesoregistro"]["procesoregistro_id"]));
				} else {
					return $this->redirect(array('controller' => 'Proactividades', 'action' => 'index/'));
				}
			} else {
				$this->Session->setFlash('El registro no fue almacenado, Por favor trate nuevamente.', 'default', array('class' => self::ALERT_ERROR_CLASS));
			}
		}

		$productos = $this->Producto->find('list', [
			//'conditions' => $conditions,
			'fields' => ['Producto.id'],
			'order' => ['Producto.modified' => 'DESC'],
			'recursive' => -1
		]);

		$ubicaciones = $this->Ubicacion->find('list');
		$proactividades = $this->Procesoregistro->cargarProactividad();
		$plsesiones = $this->Procesoregistro->cargarPlanSesion($productos);
		if (empty($plsesiones)) {
			$plsesiones = $this->Plsesion->find('list', [
				'fields' => ['Plsesion.id', 'Plsesion.tema'],
				'order' => ['Plsesion.tema' => 'ASC'],
				'recursive' => -1
			]);
		}
		$plsesion = $plsesiones;

		$this->set(compact('proactividades', 'ubicaciones', 'plsesiones', 'plsesion'));
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
				unset($this->request->data['Procesoregistro']['anexo']); 
            	unset($this->request->data['Procesoregistro']['sisproceso_dir']);
				
			} 

			if ($this->Procesoregistro->save($this->request->data)) {

				$this->Session->setFlash('El registro fue almacenado correctamente', 'default', array('class' =>  self::ALERT_SUCCESS_CLASS));
				// Si el usuario subió un archivo nuevo o ya existía uno guardado en la base de datos
			if (!empty($this->request->data['Procesoregistro']['anexo'])) {
				$nombreArchivo = $this->request->data['Procesoregistro']['anexo'];
        
					return $this->redirect(array(
							'action' => 'view', 
							$id, 
							'?' => array('file' => $nombreArchivo)
						));
						} else {
							// Si no se subió un archivo nuevo, redirige a la vista normal sin parámetros
							return $this->redirect(array('action' => 'view', $id));
						}


			} else {
				$this->Session->setFlash('El registro no fue almacenado, Por favor trate nuevamente.', 'default', array('class' => self::ALERT_ERROR_CLASS));
			}
		} else {
			$options = array('conditions' => array('Procesoregistro.' . $this->Procesoregistro->primaryKey => $id));
			$this->request->data = $this->Procesoregistro->find('first', $options);
			$this->request->data = $this->tranformData($this->request->data);
		}

		

		

		$productos = $this->Producto->find('list', [
			
			'fields' => ['Producto.id'],
			'order' => ['Producto.modified' => 'DESC'],
			'recursive' => -1
		]);

		$ubicaciones = $this->Ubicacion->find('list');
		$proactividades = $this->Procesoregistro->cargarProactividad();
		$plsesiones = $this->Procesoregistro->cargarPlanSesion($productos);
		
		$this->set(compact('proactividades', 'ubicaciones', 'plsesiones'));
	}


	private function tranformData($data)
	{
		if (!empty($data['Procesoregistro']['cursovida'])) {
			$poblacionStr = $data['Procesoregistro']['cursovida'];
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Procesoregistro']['cursovida'] = $tipos;
		}

		if (!empty($data['Procesoregistro']['poblacion'])) {
			$poblacionStr = $data['Procesoregistro']['poblacion'];
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Procesoregistro']['poblacion'] = $tipos;
		}

		if (!empty($data['Procesoregistro']['vulnerabilidad'])) {
			$poblacionStr = $data['Procesoregistro']['vulnerabilidad'];
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Procesoregistro']['vulnerabilidad'] = $tipos;
		}

		if (!empty($data['Procesoregistro']['apoyos'])) {
			$poblacionStr = $data['Procesoregistro']['apoyos'];
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Procesoregistro']['apoyos'] = $tipos;
		}

		if (!empty($data['Procesoregistro']['mecanismo'])) {
			$poblacionStr = $data['Procesoregistro']['mecanismo'];
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Procesoregistro']['mecanismo'] = $tipos;
		}

		// AJUSTE NUEVO: Mapeo para volver a convertir en Array en la Vista de edición
		if (!empty($data['Procesoregistro']['tipopoblacion'])) {
			$poblacionStr = $data['Procesoregistro']['tipopoblacion'];
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Procesoregistro']['tipopoblacion'] = $tipos;
		}

		if (!empty($data['Procesoregistro']['limitantes'])) {
			$poblacionStr = $data['Procesoregistro']['limitantes'];
			$tipos = array_map('trim', explode(',', $poblacionStr));
			$data['Procesoregistro']['limitantes'] = $tipos;
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

	public function getPlsesion($id = null)
	{
		$this->autoRender = false;
		$this->response->type('json');

		if (!$id) {
			return json_encode(['success' => false, 'message' => 'ID no válido']);
		}

		$plsesion = $this->Procesoregistro->loadTematica($id);

		if ($plsesion) {
			return json_encode([
				'success' => true,
				'data' => [
					'id' => $plsesion['Plsesion']['id'],
					'nombre' => $plsesion['Plsesion']['tema'],
				]
			]);
		}

		return json_encode(['success' => false, 'message' => 'No encontrado']);
	}
}