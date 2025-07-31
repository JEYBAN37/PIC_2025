<?php
App::uses('AppController', 'Controller');
/**
 * Smseventos Controller
 *
 * @property Smsevento $Smsevento
 * @property PaginatorComponent $Paginator
 */
class SmseventosController extends AppController {

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
		$this->Smsevento->recursive = 0;
		$this->set('smseventos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Smsevento->exists($id)) {
			throw new NotFoundException(__('No válido sms evento'));
		}
		$options = array('conditions' => array('Smsevento.' . $this->Smsevento->primaryKey => $id));
		$this->set('smsevento', $this->Smsevento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Smsevento->create();
			if ($this->Smsevento->save($this->request->data)) {
				$this->Session->setFlash(__('Se guardo correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha guardado correctamente.Por favor, inténtelo nuevamente.'));
			}
		}
		$fuenteeventos = $this->Smsevento->Fuenteevento->find('list');
		$dimensiones = $this->Smsevento->Dimension->find('list');
		$eventos = $this->Smsevento->Evento->find('list');
		$ubicacioneses = $this->Smsevento->Ubicacion->find('list');
		$entidades = $this->Smsevento->Entidad->find('list');
		$aseguradoras = $this->Smsevento->Aseguradora->find('list');
		$this->set(compact('fuenteeventos', 'dimensiones', 'eventos', 'ubicacioneses', 'entidades', 'aseguradoras'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Smsevento->exists($id)) {
			throw new NotFoundException(__('No válido sms evento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Smsevento->save($this->request->data)) {
				$this->Session->setFlash(__('Se edito satisfactoriamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No fue editado. Por favor, inténtelo de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Smsevento.' . $this->Smsevento->primaryKey => $id));
			$this->request->data = $this->Smsevento->find('first', $options);
		}
		$fuenteeventos = $this->Smsevento->Fuenteevento->find('list');
		$dimensiones = $this->Smsevento->Dimension->find('list');
		$eventos = $this->Smsevento->Evento->find('list');
		$ubicacioneses = $this->Smsevento->Ubicacion->find('list');
		$entidades = $this->Smsevento->Entidad->find('list');
		$aseguradoras = $this->Smsevento->Aseguradora->find('list');
		$this->set(compact('fuenteeventos', 'dimensiones', 'eventos', 'ubicacioneses', 'entidades', 'aseguradoras'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Smsevento->id = $id;
		if (!$this->Smsevento->exists()) {
			throw new NotFoundException(__('No válidosms evento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Smsevento->delete()) {
			$this->Session->setFlash(__('Se elimino correctamente.'));
		} else {
			$this->Session->setFlash(__('No se ha eliminado. Por favor, vuelva ha inténtar.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
