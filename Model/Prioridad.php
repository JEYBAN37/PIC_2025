<?php
App::uses('AppModel', 'Model');
/**
 * Prioridad Model
 *
 * @property Actividad $Actividad
 * @property Responsable $Responsable
 */
class Prioridad extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'prioridad';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Actividad' => array(
			'className' => 'Actividad',
			'foreignKey' => 'prioridad_id',
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
		'Responsable' => array(
			'className' => 'Responsable',
			'foreignKey' => 'prioridad_id',
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
