<?php
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');
/**
 * Planes Controller
 *
 * @property Plan $Plan
 * @property PaginatorComponent $Paginator
 */
class PlanesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Plan->recursive = 0;
		
		$count = $this->Plan->find('count');
		$this->Paginator->settings['limit'] = $count;

		
		$this->set('planes', $this->Paginator->paginate());
	}


	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Plan->exists($id)) {
			throw new NotFoundException(__('Invalid plan'));
		}
		$options = array('conditions' => array('Plan.' . $this->Plan->primaryKey => $id));
		$this->set('plan', $this->Plan->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Plan->create();
			if ($this->Plan->save($this->request->data)) {
				$this->Session->setFlash(__('The plan has been saved.'));
				return $this->redirect(array('action' => 'nuebus'));
			} else {
				$this->Session->setFlash(__('The plan could not be saved. Please, try again.'));
			}
		}
		$responsables = $this->Plan->Responsable->find('list');
		$this->set(compact('responsables'));
	}


public function addplaneshistoricos() {
		if ($this->request->is('post')) {
			$this->Plan->create();
			if ($this->Plan->save($this->request->data)) {
				$this->Session->setFlash(__('The plan has been saved.'));
				return $this->redirect(array('action' => 'nuebus'));
			} else {
				$this->Session->setFlash(__('The plan could not be saved. Please, try again.'));
			}
		}
		$responsables = $this->Plan->Responsable->find('list');
		$this->set(compact('responsables'));
	}	

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Plan->exists($id)) {
			throw new NotFoundException(__('Invalid plan'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Plan->save($this->request->data)) {
				$this->Session->setFlash(__('The plan has been saved.'));
				return $this->redirect(array('action' => 'nuebus'));
			} else {
				$this->Session->setFlash(__('The plan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Plan.' . $this->Plan->primaryKey => $id));
			$this->request->data = $this->Plan->find('first', $options);
		}
		$responsables = $this->Plan->Responsable->find('list');
		$this->set(compact('responsables'));
	}
public function edit2($id = null) {
		if (!$this->Plan->exists($id)) {
			throw new NotFoundException(__('Invalid plan'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Plan->save($this->request->data)) {
				$this->Session->setFlash(__('The plan has been saved.'));
				return $this->redirect(array('action' => 'nuebus'));
			} else {
				$this->Session->setFlash(__('The plan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Plan.' . $this->Plan->primaryKey => $id));
			$this->request->data = $this->Plan->find('first', $options);
		}
		$responsables = $this->Plan->Responsable->find('list');
		$this->set(compact('responsables'));
	}

	public function editanexo($id = null) {
		if (!$this->Plan->exists($id)) {
			throw new NotFoundException(__('Invalid plan'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Plan->save($this->request->data)) {
				$this->Session->setFlash(__('The plan has been saved.'));
				return $this->redirect(array('action' => 'nuebus'));
			} else {
				$this->Session->setFlash(__('The plan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Plan.' . $this->Plan->primaryKey => $id));
			$this->request->data = $this->Plan->find('first', $options);
		}
		$responsables = $this->Plan->Responsable->find('list');
		$this->set(compact('responsables'));
	}
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Plan->exists($id)) {
			throw new NotFoundException(__('Invalid plan'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Plan->save($this->request->data)) {
				$this->Session->setFlash(__('The plan has been saved.'));
				return $this->redirect(array('action' => 'nuebus'));
			} else {
				$this->Session->setFlash(__('The plan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Plan.' . $this->Plan->primaryKey => $id));
			$this->request->data = $this->Plan->find('first', $options);
		}
		$responsables = $this->Plan->Responsable->find('list');
		$this->set(compact('responsables'));
	}


	  function nuebus() {
        $this->Plan->recursive = 0;
        
        $paginate = array("fields" => array("id", "fecha", "tema", "intension", "objetivog", "tipoblacion", "dimension", "proceso"));
        $this->Paginator->settings = $paginate;
        
        $count = $this->Plan->find('count');
        if ($count>0)
        {
        	 $this->Paginator->settings['limit'] = $count;
        }
       
        
        $this->set("l", $this->paginate());        
    }
}
