<?php

App::uses('AppModel', 'Model');

/**

 * Acta Model *
 * @property Ubicacion $Ubicacion
 * @property Responsable $Responsable
 */

class Acta extends AppModel
{

	public $validate = array(

		'fecha' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Ingresar fecha de reunión',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),

		),
		'hora_inicio' => array(
			'time' => array(
				'rule' => array('time'),
				'message' => 'Agregue fecha de inicio',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),

		),

		'hora_fin' => array(
			'time' => array(
				'rule' => array('time'),
				'message' => 'Agregue fecha de fin',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),

		),

		'tema' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Ingrese tema',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),

		),

		'ubicacion_id' => array(
				'numeric' => array(
					'rule' => array('numeric'),
				'message' => 'Registre el Barrio/comuna de actividad',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		/*'vereda' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Ingrese dato requerido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations

			),

		),		*/	

		'responsable_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Agregre responsable de diligenciamiento',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),

		),	

		'producto_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Agregue el producto correpondiente',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'objactividad' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Agregue el objetivo de actividad',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),

		),

		'grupo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Registre el nombre de grupo participante',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),

		),

		'ordendia' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Pendiente diligenciar',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'alcancereunion' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Pendiente diligenciar',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),

		),

		'desarrollo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Pendiente diligenciar',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'compromiso' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Pendiente diligenciar',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),

		),

		'convocatoria' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Pendiente diligenciar',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),


		'anexo' => array(
        	'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Por favor verifique campo, intente nuevamente',
				'on' => 'create'
			),
	    	'isUnderPhpSizeLimit' => array(
	    		'rule' => 'isUnderPhpSizeLimit',
	        	'message' => 'Archivo excede el límite de tamaño de archivo de subida'
	        ),
		    'isValidMimeType' => array(
	    		
				'rule' => array('isValidExtension', array('rar','zip','pdf')),
             'message' => 'El archivo debe ser de tipo pdf, zip, or rar'
	    	),
		    'isBelowMaxSize' => array(
	    		'rule' => array('isBelowMaxSize', 5000000),
        		'message' => 'El tamaño delarchivo es demasiado grande. Maximo 5mb'
	    	),
		   /* 'isValidExtension' => array(
	    		'rule' => array('isValidExtension', array('jpg', 'png'), false),
        		'message' => 'La imagen no tiene la extension jpg o png'
	    	),*/
		    'checkUniqueName' => array(
                'rule' => array('checkUniqueName'),
                'message' => 'Ya existe un archivo con el mismo nombre',
                'on' => 'update'
        	),		
			),	

	);



	public $actsAs = array(
		'Upload.Upload' => array(
			'anexo' => array(
				'fields' => array(
					'dir' => 'dir'
				),
				'thumbnailMethod' => 'php',
				
				'deleteOnUpdate' => false,
				'deleteFolderOndelete' => true
			),

			'checkUniqueName' => array(
				'rule' => array('checkUniqueName'),
				'message' => 'Existe un archivo almacenado con el mismo nombre',
				'on' => 'update'
			),	
			
		),

	);




	public $belongsTo = array(
		'Ubicacion' => array(
			'className' => 'Ubicacion',
			'foreignKey' => 'ubicacion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),

		'Producto' => array(
			'className' => 'Producto',
			'foreignKey' => 'producto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),

		'Responsable' => array(
			'className' => 'Responsable',
			'foreignKey' => 'responsable_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)

	);

	public $hasMany = array(
		'Producto' => array(
			'className' => 'Producto',
			'foreignKey' => 'acta_id',
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


	function checkUniqueName($data)	{
	    $isUnique = $this->find('first', array('fields' => array('Acta.anexo'), 'conditions' => array('Acta.anexo' => $data['anexo'])));
	    if(!empty($isUnique))
	    {
	        return false;
	    }
	    else
	    {
	        return true;
	    }
	}
}
