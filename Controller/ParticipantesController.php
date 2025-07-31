<?php
App::uses('AppController', 'Controller');
/**
 * Participantes Controller
 *
 * @property Participante $Participante
 * @property PaginatorComponent $Paginator
 */
class ParticipantesController extends AppController {

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
		$this->Participante->recursive = 0;
		$this->set('participantes', $this->Paginator->paginate());
	}

	 public function create_pdf(){
 
    $participantes = $this->Participante->find("all");
 
    $this->set(compact('participantes'));
 
    $this->layout = '/pdf/default';
 
    $this->render('/Pdf/pdf_participantes');
 
}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Participante->exists($id)) {
			throw new NotFoundException(__('Participante no valido'));
		}
		$options = array('conditions' => array('Participante.' . $this->Participante->primaryKey => $id));
		$this->set('participante', $this->Participante->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Participante->create();
			if ($this->Participante->save($this->request->data)) {
				$this->Session->setFlash(__('Registro exitoso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no fue guardado. Revise los datos.'));
			}
		}
		$usuarios = $this->Participante->Usuario->find('list');
		$actividades = $this->Participante->Actividad->find('list');
		$edades = $this->Participante->Edad->find('list');
		$estudios = $this->Participante->Estudio->find('list');
		$preferencias = $this->Participante->Preferencia->find('list');
		$grupos = $this->Participante->Grupo->find('list');
		$victimas = $this->Participante->Victima->find('list');
		$meses = $this->Participante->Mes->find('list');
		$anos = $this->Participante->Ano->find('list');
		$comunas = $this->Participante->Comuna->find('list');
		$this->set(compact('usuarios', 'actividades','edades', 'estudios', 'preferencias', 'grupos', 'victimas', 'meses', 'anos', 'comunas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Participante->exists($id)) {
			throw new NotFoundException(__('Participante no valido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Participante->save($this->request->data)) {
				$this->Session->setFlash(__('Registro exitoso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no fue guardado. Revise los datos.'));
			}
		} else {
			$options = array('conditions' => array('Participante.' . $this->Participante->primaryKey => $id));
			$this->request->data = $this->Participante->find('first', $options);
		}
		$usuarios = $this->Participante->Usuario->find('list');
		$actividades = $this->Participante->Actividad->find('list');
		$edades = $this->Participante->Edad->find('list');
		$estudios = $this->Participante->Estudio->find('list');
		$preferencias = $this->Participante->Preferencia->find('list');
		$grupos = $this->Participante->Grupo->find('list');
		$victimas = $this->Participante->Victima->find('list');
		$meses = $this->Participante->Mes->find('list');
		$anos = $this->Participante->Ano->find('list');
		$comunas = $this->Participante->Comuna->find('list');
		$this->set(compact('usuarios', 'actividades','edades', 'estudios', 'preferencias', 'grupos', 'victimas', 'meses', 'anos', 'comunas'));
		
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Participante->id = $id;
		if (!$this->Participante->exists()) {
			throw new NotFoundException(__('Participante no valido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Participante->delete()) {
			$this->Session->setFlash(__('Registro eliminado.'));
		} else {
			$this->Session->setFlash(__('El registro no fue eliminado.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	 public function excel (){
       $this->layout='excel';
       $this->Participante->recursive = 0;
       $this->set('participantes', $this->Participante->find("all"));

          
   }
}
