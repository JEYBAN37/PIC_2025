<?php
App::uses('AppModel', 'Model');
/**
 * Cobertura Model
 *
 * @property Comunitario $Comunitario
 */
class Cobertura extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'personas';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Comunitario' => array(
			'className' => 'Comunitario',
			'foreignKey' => 'cobertura_id',
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
