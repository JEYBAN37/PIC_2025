<?php
App::uses('AppController', 'Controller');
/**
 * UsuariosActividades Controller
 *
 * @property UsuariosActividad $UsuariosActividad
 * @property PaginatorComponent $Paginator
 */
class UsuariosActividadesController extends AppController {

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
		$this->UsuariosActividad->recursive = 0;
		$this->set('usuariosActividades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UsuariosActividad->exists($id)) {
			throw new NotFoundException(__('No válido usuarios actividad'));
		}
		$options = array('conditions' => array('UsuariosActividad.' . $this->UsuariosActividad->primaryKey => $id));
		$this->set('usuariosActividad', $this->UsuariosActividad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UsuariosActividad->create();
			if ($this->UsuariosActividad->save($this->request->data)) {
				$this->Session->setFlash(__('Se agrego correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha guardado. Por favor, inténtar nuevamente.'));
			}
		}
		$usuarios = $this->UsuariosActividad->Usuario->find('list');
		$actividades = $this->UsuariosActividad->Actividad->find('list');
		$this->set(compact('usuarios', 'actividades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UsuariosActividad->exists($id)) {
			throw new NotFoundException(__('No válido usuarios actividad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UsuariosActividad->save($this->request->data)) {
				$this->Session->setFlash(__('Se edito correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha editado. Por favor, inténtarlo de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('UsuariosActividad.' . $this->UsuariosActividad->primaryKey => $id));
			$this->request->data = $this->UsuariosActividad->find('first', $options);
		}
		$usuarios = $this->UsuariosActividad->Usuario->find('list');
		$actividades = $this->UsuariosActividad->Actividad->find('list');
		$this->set(compact('usuarios', 'actividades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UsuariosActividad->id = $id;
		if (!$this->UsuariosActividad->exists()) {
			throw new NotFoundException(__('No válido usuarios actividad'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UsuariosActividad->delete()) {
			$this->Session->setFlash(__('Se ha eliminado con éxito.'));
		} else {
			$this->Session->setFlash(__('No se ha podido eliminar. Por favor, vuelva e inténtelo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function admin($id = null) {
		if($id==null){
			$this->set("datos",$this->UsuarioActividad->find("all"));
		} else {}
	}

	public function excel (){
       $this->layout='excel';
       $this->UsuariosActividad->recursive = 0;
       $this->set('usuariosActividades', $this->UsuariosActividad->find("all"));

          
   }
}
