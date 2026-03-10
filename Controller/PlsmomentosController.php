<?php

App::uses('AppController', 'Controller');

/**
 * Plsmomentos Controller
 *
 * @property Plsmomento $Plsmomento
 * @property PaginatorComponent $Paginator
 */
class PlsmomentosController extends AppController
{
    const ALERT_SUCCESS_CLASS = 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative'; // Puedes cambiar esto por clases Tailwind, por ejemplo: '';
    const ALERT_ERROR_CLASS = 'bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative';

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    var $uses = array("Plsmomento", "Plsesion");

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
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
    public function view($id = null)
    {
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
    public function add()
    {
        $idAux = $_GET['sesion'];
        $horasRestantes = $this->calcularHorasRestantes($idAux);

        // Obtener el límite de tiempo de la sesión (en minutos)
        $limiteDePlsesiones = $this->Plsesion->find('first', array(
            'conditions' => array('Plsesion.id' => $idAux),
            'fields' => array('Plsesion.hora_fin'),
            'recursive' => -1
        ));
        $limiteDePlsesiones = $limiteDePlsesiones['Plsesion']['hora_fin'];

        // Convertir el límite a minutos si es necesario
        $limiteMinutos = $this->convertirDuracionAMinutos($limiteDePlsesiones);

        // Mapeo de los valores de duración a minutos
        $duraciones = array(
            '5 minutos' => 5,
            '10 minutos' => 10,
            '15 minutos' => 15,
            '20 minutos' => 20,
            '25 minutos' => 25,
            '30 minutos' => 30,
            '35 minutos' => 35,
            '40 minutos' => 40,
            '45 minutos' => 45,
            '50 minutos' => 50,
            '55 minutos' => 55,
            'Una Hora' => 60,
            'Una Hora y media' => 90,
            'Dos Horas' => 120,
            'Tres Horas' => 180,
            'Cuatro horas' => 240,
            'Seis horas' => 360,
            'Ocho horas' => 480
        );

        // Calcular el tiempo restante disponible
        $tiempoDisponible = $limiteMinutos - $horasRestantes;

        // Filtrar las duraciones que no excedan el tiempo disponible
        $duracionesFiltradas = array();
        foreach ($duraciones as $nombre => $minutos) {
            if ($minutos <= $tiempoDisponible) {
                $duracionesFiltradas[$nombre] = $nombre;
            }
        }

        // Si no hay tiempo disponible, mostrar mensaje y redirigir
        if ($tiempoDisponible <= 0) {
            $this->Session->setFlash(__('Ya no hay tiempo disponible en la sesión.'), 'default', array('class' => self::ALERT_ERROR_CLASS));
            return $this->redirect(array('controller' => 'plsesiones', 'action' => 'view/' . $idAux));
        }

        $this->set(compact('idAux', 'horasRestantes', 'limiteDePlsesiones', 'duracionesFiltradas'));

        if ($this->request->is('post')) {

            $duracionObtenida = $this->request->data['Plsmomento']['duracion'];
            $duracionEnMinutos = $this->convertirDuracionAMinutos($duracionObtenida);
            $this->Plsmomento->create();
            if ($this->Plsmomento->save($this->request->data)) {
                if ($this->request->data['btn'] == 'Guardar Otro') {
                    if ($duracionEnMinutos + $tiempoDisponible == 480) {
                        $this->Session->setFlash(__('Has alcanzado el límite máximo de 8 horas para esta sesión.'), 'default', array('class' => self::ALERT_ERROR_CLASS));
                        return $this->redirect(array('controller' => 'plsesiones', 'action' => 'view/' . $this->data["Plsmomento"]["plsesion_id"]));
                    }
                    $this->Session->setFlash(__('El Plan de sesion ha sido guardado.') , 'default', array('class' => self::ALERT_SUCCESS_CLASS));
                    return $this->redirect(array('controller' => 'Plsmomentos', 'action' => 'add?sesion=' . $this->data["Plsmomento"]["plsesion_id"]));
                } else {
                    return $this->redirect(array('controller' => 'plsesiones', 'action' => 'view/' . $this->data["Plsmomento"]["plsesion_id"]));
                }
            } else {
                $this->Session->setFlash(__('The plsmomento could not be saved. Please, try again.') , 'default', array('class' => self::ALERT_ERROR_CLASS));
            }
        }
    }

    private function calcularHorasRestantes($idSesion)
    {
        $duraciones = array(
            '5 minutos' => 5,
            '10 minutos' => 10,
            '15 minutos' => 15,
            '20 minutos' => 20,
            '25 minutos' => 25,
            '30 minutos' => 30,
            '35 minutos' => 35,
            '40 minutos' => 40,
            '45 minutos' => 45,
            '50 minutos' => 50,
            '55 minutos' => 55,
            'Una Hora' => 60,
            'Una Hora y media' => 90,
            'Dos Horas' => 120,
            'Tres Horas' => 180,
            'Cuatro horas' => 240,
            'Seis horas' => 360,
            'Ocho horas' => 480
        );

        $momentos = $this->Plsmomento->find('all', array(
            'conditions' => array('Plsmomento.plsesion_id' => $idSesion),
            'fields' => array('Plsmomento.duracion'),
            'recursive' => -1
        ));

        $totalMinutos = 0;
        foreach ($momentos as $momento) {
            $duracion = $momento['Plsmomento']['duracion'];
            if (isset($duraciones[$duracion])) {
                $totalMinutos += $duraciones[$duracion];
            }
        }

        return $totalMinutos;
    }

    private function convertirDuracionAMinutos($duracion)
    {
        $mapa = array(
            '5 minutos' => 5,
            '10 minutos' => 10,
            '15 minutos' => 15,
            '20 minutos' => 20,
            '25 minutos' => 25,
            '30 minutos' => 30,
            '35 minutos' => 35,
            '40 minutos' => 40,
            '45 minutos' => 45,
            '50 minutos' => 50,
            '55 minutos' => 55,
            'Una Hora' => 60,
            'Una Hora y media' => 90,
            'Dos Horas' => 120,
            'Tres Horas' => 180,
            'Cuatro horas' => 240,
            'Seis horas' => 360,
            'Ocho horas' => 480
        );
        if (isset($mapa[$duracion])) {
            return $mapa[$duracion];
        }
        // Si ya es un número, lo retorna
        if (is_numeric($duracion)) {
            return intval($duracion);
        }
        return 0;
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null)
    {
        if (!$this->Plsmomento->exists($id)) {
            throw new NotFoundException(__('Invalid plsmomento'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Plsmomento->save($this->request->data)) {
                //$this->Session->setFlash(__('The plsmomento has been saved.'));
                //return $this->redirect(array('action' => 'index'));
                //return $this->redirect(array('controller' => 'plsesiones', 'action' => 'nuebus'));
                return $this->redirect(array('controller' => 'plsesiones', 'action' => 'view/' . $this->data["Plsmomento"]["plsesion_id"]));
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
    public function delete($id = null , $idPlsesion = null)
    {
        $this->Plsmomento->id = $id;
        if (!$this->Plsmomento->exists()) {
            throw new NotFoundException(__('Invalid plsmomento'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Plsmomento->delete()) {
            $this->Session->setFlash(__('The plsmomento has been deleted.' ), 'default', array('class' => self::ALERT_SUCCESS_CLASS));
        } else {
            $this->Session->setFlash(__('El plan de sesión no ha sido guardado. Por favor, trate nuevamente.', 'default', array('class' => self::ALERT_ERROR_CLASS)));
        }
        return $this->redirect(array('controller' => 'plsesiones', 'action' => 'view/' . $idPlsesion));
    }
}
