<?php
App::uses('AppModel', 'Model');
/**
 * Edad Model
 *
 * @property Participante $Participante
 */
class Edad extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'rango';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Participante' => array(
			'className' => 'Participante',
			'foreignKey' => 'edad_id',
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
