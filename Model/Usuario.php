<?php

App::uses('AppModel', 'Model');

/**

 * Usuario Model

 *

 * @property Documento $Documento

 * @property Day $Day

 * @property Month $Month

 * @property Fecha $Fecha

 * @property Edad $Edad

 * @property Genero $Genero

 * @property Group $Group

 * @property Ano $Ano

 * @property Mes $Mes

 * @property Actividad $Actividad

 * @property Comuna $Comuna

 * @property Comunitario $Comunitario

 * @property Participante $Participante

 * @property Publico $Publico

 * @property Sociale $Sociale

 * @property Actividad $Actividad

 */

class Usuario extends AppModel {

/*public $virtualFields=array(

	'nombres'=>'CONCAT(Usuario.nombres," ",Usuario.apellidos)');*/

	public $displayField = 'nombres';

/**

 * Display field

 *

 * @var string

 */

	



/**

 * Validation rules

 *

 * @var array

 */

	public $validate = array(

		'documento_id' => array(

			'numeric' => array(

				'rule' => array('numeric'),

				//'message' => 'Your custom message here',

				//'allowEmpty' => false,

				//'required' => false,

				//'last' => false, // Stop validation after this rule

				//'on' => 'create', // Limit validation to 'create' or 'update' operations

			),

		),

		'numero' => array(

			'login'  =>  array ( 

        'rule'     =>  'isUnique' , 

        'message'  =>  'El numero de documento ya esta registrado.' ,

          ) 

		    ),

		'nombres' => array(

			'notEmpty' => array(

				'rule' => array('notEmpty'),

				//'message' => 'Your custom message here',

				//'allowEmpty' => false,

				//'required' => false,

				//'last' => false, // Stop validation after this rule

				//'on' => 'create', // Limit validation to 'create' or 'update' operations

			),

		),

		'apellidos' => array(

			'notEmpty' => array(

				'rule' => array('notEmpty'),

				//'message' => 'Your custom message here',

				//'allowEmpty' => false,

				//'required' => false,

				//'last' => false, // Stop validation after this rule

				//'on' => 'create', // Limit validation to 'create' or 'update' operations

			),

		),

		'day_id' => array(

			'notEmpty' => array(

				'rule' => array('notEmpty'),

				//'message' => 'Your custom message here',

				//'allowEmpty' => false,

				//'required' => false,

				//'last' => false, // Stop validation after this rule

				//'on' => 'create', // Limit validation to 'create' or 'update' operations

			),

		),

		'month_id' => array(

			'notEmpty' => array(

				'rule' => array('notEmpty'),

				//'message' => 'Your custom message here',

				//'allowEmpty' => false,

				//'required' => false,

				//'last' => false, // Stop validation after this rule

				//'on' => 'create', // Limit validation to 'create' or 'update' operations

			),

		),

		'fecha_id' => array(

			'notEmpty' => array(

				'rule' => array('notEmpty'),

				//'message' => 'Your custom message here',

				//'allowEmpty' => false,

				//'required' => false,

				//'last' => false, // Stop validation after this rule

				//'on' => 'create', // Limit validation to 'create' or 'update' operations

			),

		),

		'edad_id' => array(

			'notEmpty' => array(

				'rule' => array('notEmpty'),

				//'message' => 'Your custom message here',

				//'allowEmpty' => false,

				//'required' => false,

				//'last' => false, // Stop validation after this rule

				//'on' => 'create', // Limit validation to 'create' or 'update' operations

			),

		),

		'genero_id' => array(

			'notEmpty' => array(

				'rule' => array('notEmpty'),

				//'message' => 'Your custom message here',

				//'allowEmpty' => false,

				//'required' => false,

				//'last' => false, // Stop validation after this rule

				//'on' => 'create', // Limit validation to 'create' or 'update' operations

			),

		),

		'group_id' => array(

			'notEmpty' => array(

				'rule' => array('notEmpty'),

				//'message' => 'Your custom message here',

				//'allowEmpty' => false,

				//'required' => false,

				//'last' => false, // Stop validation after this rule

				//'on' => 'create', // Limit validation to 'create' or 'update' operations

			),

		),

		'correo' => array(

			'email' => array(

				'rule' => array('email'),

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

		'Documento' => array(

			'className' => 'Documento',

			'foreignKey' => 'documento_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),

		'Day' => array(

			'className' => 'Day',

			'foreignKey' => 'day_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),

		'Month' => array(

			'className' => 'Month',

			'foreignKey' => 'month_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),

		'Fecha' => array(

			'className' => 'Fecha',

			'foreignKey' => 'fecha_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),

		'Edad' => array(

			'className' => 'Edad',

			'foreignKey' => 'edad_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),

		'Genero' => array(

			'className' => 'Genero',

			'foreignKey' => 'genero_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),

		'Group' => array(

			'className' => 'Group',

			'foreignKey' => 'group_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),

		'Ano' => array(

			'className' => 'Ano',

			'foreignKey' => 'ano_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),

		'Mes' => array(

			'className' => 'Mes',

			'foreignKey' => 'mes_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),

		'Actividad' => array(

			'className' => 'Actividad',

			'foreignKey' => 'actividad_id',

			'conditions' => '',

			'fields' => '',

			'order' => ''

		),

		'Comuna' => array(

			'className' => 'Comuna',

			'foreignKey' => 'comuna_id',

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

		'Comunitario' => array(

			'className' => 'Comunitario',

			'foreignKey' => 'usuario_id',

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

		'Participante' => array(

			'className' => 'Participante',

			'foreignKey' => 'usuario_id',

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

		'Publico' => array(

			'className' => 'Publico',

			'foreignKey' => 'usuario_id',

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

		'Sociale' => array(

			'className' => 'Sociale',

			'foreignKey' => 'usuario_id',

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





/**

 * hasAndBelongsToMany associations

 *

 * @var array

 */

	public $hasAndBelongsToMany = array(

		'Actividad' => array(

			'className' => 'Actividad',

			'joinTable' => 'usuarios_actividades',

			'foreignKey' => 'usuario_id',

			'associationForeignKey' => 'actividad_id',

			'unique' => 'keepExisting',

			'conditions' => '',

			'fields' => '',

			'order' => '',

			'limit' => '',

			'offset' => '',

			'finderQuery' => '',

		)

	);

	public $actsAs = array('Acl' => array('type' => 'requester'));

    public function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        if (isset($this->data['User']['group_id'])) {
            $groupId = $this->data['User']['group_id'];
        } else {
            $groupId = $this->field('group_id');
        }
        if (!$groupId) {
            return null;
        } else {
            return array('Group' => array('id' => $groupId));
        }
    }

}