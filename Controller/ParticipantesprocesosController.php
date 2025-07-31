<?php
App::uses('AppController', 'Controller');
/**
 * Participantesprocesos Controller
 *
 * @property Participantesproceso $Participantesproceso
 * @property PaginatorComponent $Paginator
 */
class ParticipantesprocesosController extends AppController {

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
		$this->Participantesproceso->recursive = 0;
		$this->set('participantesprocesos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Participantesproceso->exists($id)) {
			throw new NotFoundException(__('Invalid participantesproceso'));
		}
		$options = array('conditions' => array('Participantesproceso.' . $this->Participantesproceso->primaryKey => $id));
		$this->set('participantesproceso', $this->Participantesproceso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Participantesproceso->create();
			if ($this->Participantesproceso->save($this->request->data)) {
				$this->Session->setFlash(__('The participantesproceso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participantesproceso could not be saved. Please, try again.'));
			}
		}
		$personas = $this->Participantesproceso->Persona->find('list');
		$procesoregistros = $this->Participantesproceso->Procesoregistro->find('list');
		$this->set(compact('personas', 'procesoregistros'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Participantesproceso->exists($id)) {
			throw new NotFoundException(__('Invalid participantesproceso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Participantesproceso->save($this->request->data)) {
				$this->Session->setFlash(__('The participantesproceso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participantesproceso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Participantesproceso.' . $this->Participantesproceso->primaryKey => $id));
			$this->request->data = $this->Participantesproceso->find('first', $options);
		}
		$personas = $this->Participantesproceso->Persona->find('list');
		$procesoregistros = $this->Participantesproceso->Procesoregistro->find('list');
		$this->set(compact('personas', 'procesoregistros'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Participantesproceso->id = $id;
		if (!$this->Participantesproceso->exists()) {
			throw new NotFoundException(__('Invalid participantesproceso'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Participantesproceso->delete()) {
			$this->Session->setFlash(__('The participantesproceso has been deleted.'));
		} else {
			$this->Session->setFlash(__('The participantesproceso could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
