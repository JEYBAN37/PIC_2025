<?php

App::uses('AppController', 'Controller');

/**
 * Canalizaciones Controller
 *
 * @property Canalizacion $Canalizacion
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CanalizacionesController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Canalizacion->recursive = 0;
        $this->set('canalizaciones', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Canalizacion->exists($id)) {
            throw new NotFoundException(__('Canalización no valida'));
        }
        $options = array('conditions' => array('Canalizacion.' . $this->Canalizacion->primaryKey => $id));
        $this->set('canalizacion', $this->Canalizacion->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Canalizacion->create();
            if ($this->Canalizacion->save($this->request->data)) {
                $this->Session->setFlash(__('La canalización se a guardado correctamente'));
                return $this->redirect(array('action' => 'nuebus'));
            } else {
                $this->Session->setFlash(__('La canalización no se a podido guardar, por favor intentelo nuevamente'));
            }
        }

        $ubicaciones = $this->Canalizacion->Ubicacion->find('list');
        $aseguradoras = $this->Canalizacion->Aseguradora->find('list');
        $this->set(compact('ubicaciones', 'aseguradoras'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Canalizacion->exists($id)) {
            throw new NotFoundException(__('Canalización no valida'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Canalizacion->save($this->request->data)) {
                $this->Session->setFlash(__('Se edito correctamente'));
                return $this->redirect(array('action' => 'nuebus'));
            } else {
                $this->Session->setFlash(__('No se a podido guardar, nuevamente intentelo'));
            }
        } else {
            $options = array('conditions' => array('Canalizacion.' . $this->Canalizacion->primaryKey => $id));
            $this->request->data = $this->Canalizacion->find('first', $options);
        }
        $ubicaciones = $this->Canalizacion->Ubicacion->find('list');

        $this->set(compact('ubicaciones'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Canalizacion->id = $id;
        if (!$this->Canalizacion->exists()) {
            throw new NotFoundException(__('Canalización no valida'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Canalizacion->delete()) {
            $this->Session->setFlash(__('Se borro correctamente'));
        } else {
            $this->Session->setFlash(__('TNo se a podido borrar, intente nuevamente o más tarde'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    function nuebus() {
        $this->Canalizacion->recursive = 0;
        
        $paginate = array("fields" => array("id", "identificacion", "nombres", "apellidos", "celular", "tipoafi", "ria", "concepto", "aseguradora_id", "comunas", "canalizacion", "canalizacionuno", "canalizaciondos"));
        $this->Paginator->settings = $paginate;
        
        $count = $this->Canalizacion->find('count');
        $this->Paginator->settings['limit'] = $count;
        
        $this->set("l", $this->paginate());
    }
    
    /*
    function nuebus() {
        $campos = array("Ria");
        if (isset($this->data) && !empty($this->data)) {

            $campoFiltro = $this->data["Canalizacion"]["Campo"];
            $textoFiltro = $this->data["Canalizacion"]["Ria"];


            $filtroIdentificacion = $this->data["Canalizacion"]["Identificacion"];
            $filtroNombres = $this->data["Canalizacion"]["Nombres"];
            $filtroApellidos = $this->data["Canalizacion"]["Apellidos"];
            $filtroRia = $this->data["Canalizacion"]["Ria"];
            $filtroConcepto = $this->data["Canalizacion"]["Concepto"];


            $con = array(strtolower($campos[$campoFiltro]) . " like" => "%" . $textoFiltro . "%"); //array("or" => array("tema like" => "%".$this->data["Actividad"]["Busqueda"]."%", "poblacion like " => "%".$this->data["Actividad"]["Busqueda"]."%","eje like " => "%".$this->data["Actividad"]["Busqueda"]."%","prioridad like " => "%".$this->data["Actividad"]["Busqueda"]."%","comuna_id like " => "%".$this->data["Actividad"]["Busqueda"]."%"));
            $identificacion = "UPPER(identificacion) like '%" . $filtroIdentificacion . "%'";
            $nombres = "UPPER(nombres) like '%" . $filtroNombres . "%'";
            $apellidos = "UPPER(apellidos) like '%" . $filtroApellidos . "%'";

            $concepto = "UPPER(ria) like '%" . $filtroConcepto . "%'";

            array_push($con, $identificacion);
            array_push($con, $nombres);
            array_push($con, $apellidos);

            array_push($con, $concepto);
        } else {
            $con = null;
        }
        $this->Canalizacion->recursive = 0;
        $paginate = array("fields" => array("id", "identificacion", "nombres", "apellidos", "celular", "tipoafi", "ria", "concepto", "aseguradora_id", "comunas", "canalizacion", "canalizacionuno", "canalizaciondos"), "conditions" => $con, "limit" => 30);
        $this->Paginator->settings = $paginate;
        $this->set("Campos", $campos);
        $this->set("l", $this->paginate());
    }*/

    public function excel() {
        $this->layout = 'excel';
        $this->Canalizacion->recursive = 0;
        $this->set('canalizaciones', $this->Canalizacion->find("all"));
    }

    function check() {
        $campos = array("Ria");
        if (isset($this->data) && !empty($this->data)) {

            $campoFiltro = $this->data["Canalizacion"]["Campo"];
            $textoFiltro = $this->data["Canalizacion"]["Ria"];


            $filtroIdentificacion = $this->data["Canalizacion"]["Identificacion"];
            $filtroNombres = $this->data["Canalizacion"]["Nombres"];
            $filtroApellidos = $this->data["Canalizacion"]["Apellidos"];
            $filtroRia = $this->data["Canalizacion"]["Ria"];
            $filtroConcepto = $this->data["Canalizacion"]["Concepto"];


            $con = array(strtolower($campos[$campoFiltro]) . " like" => "%" . $textoFiltro . "%"); //array("or" => array("tema like" => "%".$this->data["Actividad"]["Busqueda"]."%", "poblacion like " => "%".$this->data["Actividad"]["Busqueda"]."%","eje like " => "%".$this->data["Actividad"]["Busqueda"]."%","prioridad like " => "%".$this->data["Actividad"]["Busqueda"]."%","comuna_id like " => "%".$this->data["Actividad"]["Busqueda"]."%"));
            $identificacion = "UPPER(identificacion) like '%" . $filtroIdentificacion . "%'";
            $nombres = "UPPER(nombres) like '%" . $filtroNombres . "%'";
            $apellidos = "UPPER(apellidos) like '%" . $filtroApellidos . "%'";

            $concepto = "UPPER(ria) like '%" . $filtroConcepto . "%'";

            array_push($con, $identificacion);
            array_push($con, $nombres);
            array_push($con, $apellidos);

            array_push($con, $concepto);
        } else {
            $con = null;
        }
        $this->Canalizacion->recursive = 0;
        $paginate = array("fields" => array("id", "identificacion", "nombres", "apellidos", "celular", "tipoafi", "ria", "concepto", "aseguradora_id", "comunas", "canalizacion", "canalizacionuno", "canalizaciondos"), "conditions" => $con, "limit" => 30);
        $this->Paginator->settings = $paginate;
        $this->set("Campos", $campos);
        $this->set("l", $this->paginate());
    }

}
