<?php
App::uses('AppModel', 'Model');
/**
 * Eje Model
 *
 * @property Actividad $Actividad
 * @property Responsable $Responsable
 */
class Eje extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'eje';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Actividad' => array(
			'className' => 'Actividad',
			'foreignKey' => 'eje_id',
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
			'foreignKey' => 'eje_id',
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
