<?php
App::uses('AppModel', 'Model');
/**
 * Participantesevento Model
 *
 * @property Persona $Persona
 * @property Infoevento $Infoevento
 */
class Participantesevento extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'persona_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'infoevento_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'persona_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Infoevento' => array(
			'className' => 'Infoevento',
			'foreignKey' => 'infoevento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
