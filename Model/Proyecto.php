<?php
App::uses('AppModel', 'Model');
/**
 * Proyecto Model
 *
 * @property Entidad $Entidad
 * @property Poblacion $Poblacion
 * @property Ubicacion $Ubicacion
 * @property Entidad $Entidad
 * @property Organizacion $Organizacion
 */
class Proyecto extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Entidad' => array(
			'className' => 'Entidad',
			'foreignKey' => 'entidad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Poblacion' => array(
			'className' => 'Poblacion',
			'foreignKey' => 'poblacion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ubicacion' => array(
			'className' => 'Ubicacion',
			'foreignKey' => 'ubicacion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Entidad' => array(
			'className' => 'Entidad',
			'foreignKey' => 'proyecto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Organizacion' => array(
			'className' => 'Organizacion',
			'foreignKey' => 'proyecto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
