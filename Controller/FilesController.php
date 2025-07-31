<?php
App::uses('AppController', 'Controller');
/**
 * Integrantes Controller
 *
 * @property Integrante $Integrante
 * @property PaginatorComponent $Paginator
 */
class FilesController extends AppController {

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
 
public function productosactividad() {
		$this->Session->setFlash(__('No hay archivo adjunto en esta actividad'));
	}

public function actividad() {
		$this->Session->setFlash(__('No hay archivo adjunto en esta actividad'));
	}
	
}
