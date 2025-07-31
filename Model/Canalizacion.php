<?php
App::uses('AppModel', 'Model');
/**
 * Canalizacion Model
 *
 * @property Ubicacion $Ubicacion
 * @property Ubicacion $Aseguradora
 */
class Canalizacion extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'canalizaciones';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'fecha';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Ubicacion' => array(
			'className' => 'Ubicacion',
			'foreignKey' => 'ubicacion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	
		'Aseguradora' => array(
			'className' => 'Aseguradora',
			'foreignKey' => 'aseguradora_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
