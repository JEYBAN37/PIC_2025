<?php

App::uses('AppModel', 'Model');

/**

 * Group Model

 *

 * @property Usuario $Usuario

 */

class Group extends AppModel {



/**

 * Display field

 *

 * @var string

 */

	//public $displayField = 'pertenece';



/**

 * Validation rules

 *

 * @var array

 */

	public $validate = array(

		'id' => array(

			'notEmpty' => array(

				'rule' => array('notEmpty'),

				//'message' => 'Your custom message here',

				//'allowEmpty' => false,

				//'required' => false,

				//'last' => false, // Stop validation after this rule

				//'on' => 'create', // Limit validation to 'create' or 'update' operations

			),

		),

		/*'pertenece' => array(

			'q' => array(

				'rule' => array('q'),

				//'message' => 'Your custom message here',

				//'allowEmpty' => false,

				//'required' => false,

				//'last' => false, // Stop validation after this rule

				//'on' => 'create', // Limit validation to 'create' or 'update' operations

			),

		),*/

	);



	//The Associations below have been created with all possible keys, those that are not needed can be removed



/**

 * hasMany associations

 *

 * @var array

 */

	public $hasMany = array(

		'Usuario' => array(

			'className' => 'Usuario',

			'foreignKey' => 'group_id',

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
public $actsAs = array('Acl' => array('type' => 'requester'));

    public function parentNode() {
        return null;
    }

}