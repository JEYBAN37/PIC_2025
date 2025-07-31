<?php
App::uses('AppController', 'Controller');
/**
 * Participanteseventos Controller
 *
 * @property Participantesevento $Participantesevento
 * @property PaginatorComponent $Paginator
 */
class ParticipanteseventosController extends AppController {

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
		$this->Participantesevento->recursive = 0;
		$this->set('participanteseventos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Participantesevento->exists($id)) {
			throw new NotFoundException(__('Invalid participantesevento'));
		}
		$options = array('conditions' => array('Participantesevento.' . $this->Participantesevento->primaryKey => $id));
		$this->set('participantesevento', $this->Participantesevento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Participantesevento->create();
			if ($this->Participantesevento->save($this->request->data)) {
				$this->Session->setFlash(__('The participantesevento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participantesevento could not be saved. Please, try again.'));
			}
		}
		$personas = $this->Participantesevento->Persona->find('list');
		$infoeventos = $this->Participantesevento->Infoevento->find('list');
		$this->set(compact('personas', 'infoeventos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Participantesevento->exists($id)) {
			throw new NotFoundException(__('Invalid participantesevento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Participantesevento->save($this->request->data)) {
				$this->Session->setFlash(__('The participantesevento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participantesevento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Participantesevento.' . $this->Participantesevento->primaryKey => $id));
			$this->request->data = $this->Participantesevento->find('first', $options);
		}
		$personas = $this->Participantesevento->Persona->find('list');
		$infoeventos = $this->Participantesevento->Infoevento->find('list');
		$this->set(compact('personas', 'infoeventos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Participantesevento->id = $id;
		if (!$this->Participantesevento->exists()) {
			throw new NotFoundException(__('Invalid participantesevento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Participantesevento->delete()) {
			$this->Session->setFlash(__('The participantesevento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The participantesevento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
