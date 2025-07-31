<?php
App::uses('AppModel', 'Model');
/**
 * Etnia Model
 *
 * @property Persona $Persona
 */
class Etnia extends AppModel {



/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'etnia';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'etnia_id',
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
