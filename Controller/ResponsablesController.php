<?php

App::uses('AppController', 'Controller');

/**

 * Responsables Controller

 *

 * @property Responsable $Responsable

 * @property PaginatorComponent $Paginator

 * @property SessionComponent $Session

 */

class ResponsablesController extends AppController {



/**

 * Components

 *

 * @var array

 */

	public $components = array('Paginator', 'Session');



/**

 * index method

 *

 * @return void

 */

	public function index() {

		$this->Responsable->recursive = 0;

		$this->set('responsables', $this->Paginator->paginate());

	}



/**

 * view method

 *

 * @throws NotFoundException

 * @param string $id

 * @return void

 */

	public function view($id = null) {

		if (!$this->Responsable->exists($id)) {

			throw new NotFoundException(__('Responsable no válido'));

		}

		$options = array('conditions' => array('Responsable.' . $this->Responsable->primaryKey => $id));

		$this->set('responsable', $this->Responsable->find('first', $options));

	}



/**

 * add method

 *

 * @return void

 */

	public function add() {

		if ($this->request->is('post')) {

			$this->Responsable->create();

			if ($this->Responsable->save($this->request->data)) {

				$this->Session->setFlash(__('Se guardo correctamente.'));

				return $this->redirect(array('action' => 'nuebus'));

			} else {

				$this->Session->setFlash(__('No se ha podido guardar. Por favor, inténtar nuevamente.'));

			}

		}

	}



/**

 * edit method

 *

 * @throws NotFoundException

 * @param string $id

 * @return void

 */

	public function edit($id = null) {

		if (!$this->Responsable->exists($id)) {

			throw new NotFoundException(__('Responsable no válido'));

		}

		if ($this->request->is(array('post', 'put'))) {

			if ($this->Responsable->save($this->request->data)) {

				$this->Session->setFlash(__('Edición éxitosa.'));

				return $this->redirect(array('action' => 'nuebus'));

			} else {

				$this->Session->setFlash(__('No se ha editado. Por favor, verifique e inténte nuevamente.'));

			}

		} else {

			$options = array('conditions' => array('Responsable.' . $this->Responsable->primaryKey => $id));

			$this->request->data = $this->Responsable->find('first', $options);

		}

	}



	function nuebus() {

        $campos = array("Numero","Nombres");

        if(isset($this->data) && !empty($this->data)){

			$con = array(strtolower($campos[$this->data["Responsable"]["Campo"]])." like" => "%".$this->data["Responsable"]["Busqueda"]."%");//array("or" => array("tema like" => "%".$this->data["Actividad"]["Busqueda"]."%", "poblacion like " => "%".$this->data["Actividad"]["Busqueda"]."%","eje like " => "%".$this->data["Actividad"]["Busqueda"]."%","prioridad like " => "%".$this->data["Actividad"]["Busqueda"]."%","comuna_id like " => "%".$this->data["Actividad"]["Busqueda"]."%"));



		} else {

			$con = null;

		}

        $this->Responsable->recursive = 0;

		$paginate = array("fields" => array("id" , "numero" , "nombres", "celular","correo"), "conditions" => $con, "limit" => 30);

		$this->Paginator->settings = $paginate;

		$this->set("Campos", $campos);

		$this->set("l", $this->paginate());

	}



/**

 * delete method

 *

 * @throws NotFoundException

 * @param string $id

 * @return void

 */

	public function delete($id = null) {

		$this->Responsable->id = $id;

		if (!$this->Responsable->exists()) {

			throw new NotFoundException(__('Responsable no válido'));

		}

		$this->request->allowMethod('post', 'delete');

		if ($this->Responsable->delete()) {

			$this->Session->setFlash(__('Se ha eliminado exitosamente.'));

		} else {

			$this->Session->setFlash(__('No se puede eliminar. Por favor, inténtelo nuevamente.'));

		}

		return $this->redirect(array('action' => 'nuebus'));

	}

}





