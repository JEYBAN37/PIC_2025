<?php

App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');

/**
 * Organizaciones Controller
 *
 * @property Organizacion $Organizacion
 * @property PaginatorComponent $Paginator
 */
class InstitucionesController extends AppController {

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
        $this->Institucion->recursive = 0;
        $this->set('instituciones', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Institucion->exists($id)) {
            throw new NotFoundException(__('Institución no válida'));
        }
        $options = array('conditions' => array('Institucion.' . $this->Institucion->primaryKey => $id));
        $this->set('institucion', $this->Institucion->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Institucion->create();
            if ($this->Institucion->save($this->request->data)) {
                $this->Session->setFlash(__('La Institución se ha guardado correctamente.'));
                return $this->redirect(array('action' => 'nuebus'));
            } else {
                $this->Session->setFlash(__('La institución no se ha guardado. Por favor, inténte nuevamente.'));
            }
        }
        //$personas = $this->Institucion->Persona->find('list');
        $ubicaciones = $this->Institucion->Ubicacion->find('list');
        $poblaciones = $this->Institucion->Poblacion->find('list');
        $proyectos = $this->Institucion->Proyecto->find('list');
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
        if (!$this->Institucion->exists($id)) {
            throw new NotFoundException(__('Organización no válida'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Institucion->save($this->request->data)) {
                $this->Session->setFlash(__('Se ha editado correctamente.'));
                return $this->redirect(array('action' => 'nuebus'));
            } else {
                $this->Session->setFlash(__('No se ha podido editar. Por favor, verifique nuevamente.'));
            }
        } else {
            $options = array('conditions' => array('Institucion.' . $this->Institucion->primaryKey => $id));
            $this->request->data = $this->Institucion->find('first', $options);
        }
        //$personas = $this->Institucion->Persona->find('list');
        $ubicaciones = $this->Institucion->Ubicacion->find('list');
        $poblaciones = $this->Institucion->Poblacion->find('list');

        $proyectos = $this->Institucion->Proyecto->find('list');
        $this->set(compact('ubicaciones', 'poblaciones', 'proyectos'));
    }

    function nuebus() {
//        $campos = array("nombre_inst", "comuna_institucion", "poblaciones_ident");
//        if(isset($this->data) && !empty($this->data)){
//			$con = array(strtolower($campos[$this->data["Institucion"]["Campo"]])." like" => "%".$this->data["Institucion"]["Busqueda"]."%");//array("or" => array("tema like" => "%".$this->data["Actividad"]["Busqueda"]."%", "poblacion like " => "%".$this->data["Actividad"]["Busqueda"]."%","eje like " => "%".$this->data["Actividad"]["Busqueda"]."%","prioridad like " => "%".$this->data["Actividad"]["Busqueda"]."%","comuna_id like " => "%".$this->data["Actividad"]["Busqueda"]."%"));
//
//		} else {
//			$con = null;
//		}
        $this->Institucion->recursive = 0;
        $paginate = array("fields" => array("id", "nombre_inst", "comuna_institucion", "telefono_institucion", "correo_institucion", "poblaciones_ident"));
        $this->Paginator->settings = $paginate;
        //$this->set("Campos", $campos);
        $count = $this->Institucion->find('count');
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
        $this->Institucion->id = $id;
        if (!$this->Institucion->exists()) {
            throw new NotFoundException(__('Instiución'));
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
