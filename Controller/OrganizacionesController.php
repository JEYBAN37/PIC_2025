<?php

App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');

/**
 * Organizaciones Controller
 *
 * @property Organizacion $Organizacion
 * @property PaginatorComponent $Paginator
 */
class OrganizacionesController extends AppController {

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
        $this->Organizacion->recursive = 0;
        $this->set('organizaciones', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Organizacion->exists($id)) {
            throw new NotFoundException(__('Organización no válida'));
        }
        $options = array('conditions' => array('Organizacion.' . $this->Organizacion->primaryKey => $id));
        $this->set('organizacion', $this->Organizacion->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Organizacion->create();
            if ($this->Organizacion->save($this->request->data)) {
                $this->Session->setFlash(__('La Organización se ha guardado correctamente.'));
                return $this->redirect(array('action' => 'nuebus'));
            } else {
                $this->Session->setFlash(__('La organización no se ha guardado. Por favor, inténte nuevamente.'));
            }
        }
        //$personas = $this->Organizacion->Persona->find('list');
        $ubicaciones = $this->Organizacion->Ubicacion->find('list');
        $poblaciones = $this->Organizacion->Poblacion->find('list');

        $proyectos = $this->Organizacion->Proyecto->find('list');
        $this->set(compact('ubicaciones', 'poblaciones', 'proyectos'));
    }

    public function add2() {
        if ($this->request->is('post')) {
            $this->Organizacion->create();
            if ($this->Organizacion->save($this->request->data)) {
                $this->Session->setFlash(__('Registro guardado exitosamente.'));
                return $this->redirect(array('action' => 'nuebus'));
            } else {
                $this->Session->setFlash(__('El regisgro no se ha guardado. Por favor, Vuelva a inténtarlo.'));
            }
        }
        //$personas = $this->Organizacion->Persona->find('list');
        $ubicaciones = $this->Organizacion->Ubicacion->find('list');
        $poblaciones = $this->Organizacion->Poblacion->find('list');

        $proyectos = $this->Organizacion->Proyecto->find('list');
        $this->set(compact('ubicaciones', 'poblaciones', 'proyectos'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Organizacion->exists($id)) {
            throw new NotFoundException(__('Organización no válida'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Organizacion->save($this->request->data)) {
                $this->Session->setFlash(__('Se ha editado correctamente.'));
                return $this->redirect(array('action' => 'nuebus'));
            } else {
                $this->Session->setFlash(__('No se ha podido editar. Por favor, verifique nuevamente.'));
            }
        } else {
            $options = array('conditions' => array('Organizacion.' . $this->Organizacion->primaryKey => $id));
            $this->request->data = $this->Organizacion->find('first', $options);
        }
        //$personas = $this->Organizacion->Persona->find('list');
        $ubicaciones = $this->Organizacion->Ubicacion->find('list');
        $poblaciones = $this->Organizacion->Poblacion->find('list');

        $proyectos = $this->Organizacion->Proyecto->find('list');
        $this->set(compact('ubicaciones', 'poblaciones', 'proyectos'));
    }

    public function edit1($id = null) {
        if (!$this->Organizacion->exists($id)) {
            throw new NotFoundException(__('Organización no válida'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Organizacion->save($this->request->data)) {
                $this->Session->setFlash(__('Se ha editado correctamente.'));
                return $this->redirect(array('action' => 'nuebus'));
            } else {
                $this->Session->setFlash(__('No se ha podido editar. Por favor, verifique nuevamente.'));
            }
        } else {
            $options = array('conditions' => array('Organizacion.' . $this->Organizacion->primaryKey => $id));
            $this->request->data = $this->Organizacion->find('first', $options);
        }
        //$personas = $this->Organizacion->Persona->find('list');
        $ubicaciones = $this->Organizacion->Ubicacion->find('list');
        $poblaciones = $this->Organizacion->Poblacion->find('list');

        $proyectos = $this->Organizacion->Proyecto->find('list');
        $this->set(compact('ubicaciones', 'poblaciones', 'proyectos'));
    }

    function nuebus() {
//        $campos = array("Tipo_org","Nombre_org", "Comuna_org", "Poblaciones_ident");
//        if(isset($this->data) && !empty($this->data)){
//			$con = array(strtolower($campos[$this->data["Organizacion"]["Campo"]])." like" => "%".$this->data["Organizacion"]["Busqueda"]."%");//array("or" => array("tema like" => "%".$this->data["Actividad"]["Busqueda"]."%", "poblacion like " => "%".$this->data["Actividad"]["Busqueda"]."%","eje like " => "%".$this->data["Actividad"]["Busqueda"]."%","prioridad like " => "%".$this->data["Actividad"]["Busqueda"]."%","comuna_id like " => "%".$this->data["Actividad"]["Busqueda"]."%"));
//
//		} else {
//			$con = null;
//		}
        $this->Organizacion->recursive = 0;
        $paginate = array("fields" => array("id", "tipo_org", "nombre_org", "comuna_org", "telefono_org", "correo_org", "poblaciones_ident"));
        $this->Paginator->settings = $paginate;
//		$this->set("Campos", $campos);
        $count = $this->Organizacion->find('count');
        $this->Paginator->settings['limit'] = $count;
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
        $this->Organizacion->id = $id;
        if (!$this->Organizacion->exists()) {
            throw new NotFoundException(__('Organización'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Organizacion->delete()) {
            $this->Session->setFlash(__('Se ha eliminado exitosamente.'));
        } else {
            $this->Session->setFlash(__('No se ha podido eliminar. Por favor, Inténtelo nuevamente.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
