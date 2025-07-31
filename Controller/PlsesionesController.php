<?php

App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');

/**
 * Plsesiones Controller
 *
 * @property Plsesion $Plsesion
 * @property PaginatorComponent $Paginator
 */
class PlsesionesController extends AppController {

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
        //$this->Plsesion->recursive = 0;
        //$this->set('plsesiones', $this->Paginator->paginate());
        $this->Plsesion->recursive = 0;
        $paginate = array("fields" => array("id", "fecha", "tema", "intension", "objetivog", "tipoblacion", "dimension", "proceso"));
        $this->Paginator->settings = $paginate;

        $count = $this->Plsesion->find('count');
        if ($count > 0) {
            $this->Paginator->settings['limit'] = $count;
        }
        $this->set("l", $this->paginate());
    }
    
    public function nuebus() {
        $this->Plsesion->recursive = 0;
        $paginate = array("fields" => array("id", "fecha", "tema", "intension", "objetivog", "tipoblacion", "dimension", "proceso"));
        $this->Paginator->settings = $paginate;

        $count = $this->Plsesion->find('count');
        if ($count > 0) {
            $this->Paginator->settings['limit'] = $count;
        }
        $this->set("l", $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Plsesion->exists($id)) {
            throw new NotFoundException(__('Invalid plsesion'));
        }
        $options = array('conditions' => array('Plsesion.' . $this->Plsesion->primaryKey => $id));
        $this->set('plsesion', $this->Plsesion->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Plsesion->create();
            if ($this->Plsesion->save($this->request->data)) {
                $this->Session->setFlash(__('El Plan de sesion ha sido guardado.'));
                //return $this->redirect(array('action' => 'nuebus'));
                return $this->redirect(array('controller' => 'Plsmomentos', 'action' => 'add?sesion='.$this->Plsesion->id));
            } else {
                $this->Session->setFlash('El plan de sesión no ha sido guardado. Por favor, trate nuevamente.', 'default',array('class'=>'alert alert-danger'));
            }
        }
        $responsables = $this->Plsesion->Responsable->find('list');
        $productos = $this->Plsesion->Producto->find('list');
        $this->set(compact('responsables','productos'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Plsesion->exists($id)) {
            throw new NotFoundException(__('Invalid plsesion'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Plsesion->save($this->request->data)) {
                 $this->Session->setFlash('El plan de sesión ha sido guardado. agregue momentos al plan de sesión', 'default',array('class'=>'alert alert-success'));
                return $this->redirect(array('action' => 'nuebus'));
            } else {
                $this->Session->setFlash('El plan de sesión no ha sido guardado. Por favor, trate nuevamente.', 'default',array('class'=>'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('Plsesion.' . $this->Plsesion->primaryKey => $id));
            $this->request->data = $this->Plsesion->find('first', $options);
        }
        $responsables = $this->Plsesion->Responsable->find('list');
        $productos = $this->Plsesion->Producto->find('list');
        $this->set(compact('responsables','productos'));
    }

    public function editanexo($id = null) {
		if (!$this->Plsesion->exists($id)) {
			throw new NotFoundException(__('Invalid plan'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Plsesion->save($this->request->data)) {
                $this->Session->setFlash('El plan de sesión sido guardado.', 'default',array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'nuebus'));
			} else {
                $this->Session->setFlash('Los soportes no sido guardado. Por favor, trate nuevamente.', 'default',array('class'=>'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Plsesion.' . $this->Plsesion->primaryKey => $id));
            $this->request->data = $this->Plsesion->find('first', $options);
		}
		$responsables = $this->Plsesion->Responsable->find('list');
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
        $this->Plsesion->id = $id;
        if (!$this->Plsesion->exists()) {
            throw new NotFoundException(__('Invalid plsesion'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Plsesion->delete()) {
            $this->Session->setFlash(__('The plsesion has been deleted.'));
        } else {
            $this->Session->setFlash(__('The plsesion could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'nuebus'));
    }

}
