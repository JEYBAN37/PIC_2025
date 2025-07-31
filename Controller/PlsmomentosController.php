<?php

App::uses('AppController', 'Controller');

/**
 * Plsmomentos Controller
 *
 * @property Plsmomento $Plsmomento
 * @property PaginatorComponent $Paginator
 */
class PlsmomentosController extends AppController {

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
        $this->Plsmomento->recursive = 0;
        $this->set('plsmomentos', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Plsmomento->exists($id)) {
            throw new NotFoundException(__('Invalid plsmomento'));
        }
        $options = array('conditions' => array('Plsmomento.' . $this->Plsmomento->primaryKey => $id));
        $this->set('plsmomento', $this->Plsmomento->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Plsmomento->create();
            if ($this->Plsmomento->save($this->request->data)) {
                
                if($this->request->data['btn'] == 'Guardar Otro') {
                    //$session->setFlash("registro guardado");
                    $this->Session->setFlash(__('El Plan de sesion ha sido guardado.'));
                    //echo '<script> alert("registro guardado"); </script>';
                    return $this->redirect(array('controller' => 'Plsmomentos', 'action' => 'add?sesion='.$this->data["Plsmomento"]["plsesion_id"]));
                } else {
                    //return $this->redirect(array('controller' => 'plsesiones', 'action' => 'nuebus'));                
                    return $this->redirect(array('controller' => 'plsesiones', 'action' => 'view/'.$this->data["Plsmomento"]["plsesion_id"]));                
                    
                }
            } else {
                $this->Session->setFlash(__('The plsmomento could not be saved. Please, try again.'));
            }
        }
        $plsesiones = $this->Plsmomento->Plsesion->find('list');
        $this->set(compact('plsesiones'));
    }
    
    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Plsmomento->exists($id)) {
            throw new NotFoundException(__('Invalid plsmomento'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Plsmomento->save($this->request->data)) {
                //$this->Session->setFlash(__('The plsmomento has been saved.'));
                //return $this->redirect(array('action' => 'index'));
                //return $this->redirect(array('controller' => 'plsesiones', 'action' => 'nuebus'));
                return $this->redirect(array('controller' => 'plsesiones', 'action' => 'view/'.$this->data["Plsmomento"]["plsesion_id"]));
            } else {
                $this->Session->setFlash(__('El plan de sesión no ha sido guardado. Por favor, trate nuevamente.'));
            }
        } else {
            $options = array('conditions' => array('Plsmomento.' . $this->Plsmomento->primaryKey => $id));
            $this->request->data = $this->Plsmomento->find('first', $options);
        }
        $plsesiones = $this->Plsmomento->Plsesion->find('list');
        $this->set(compact('plsesiones'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Plsmomento->id = $id;
        if (!$this->Plsmomento->exists()) {
            throw new NotFoundException(__('Invalid plsmomento'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Plsmomento->delete()) {
            $this->Session->setFlash(__('The plsmomento has been deleted.'));
        } else {
            $this->Session->setFlash(__('El plan de sesión no ha sido guardado. Por favor, trate nuevamente.'));
        }
        return $this->redirect(array('controller'=>'plsesiones','action' => 'nuebus'));
    }

}
