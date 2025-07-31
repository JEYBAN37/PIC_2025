<?php
App::uses('AppModel', 'Model');
/**
 * Productosactividad Model
 *
 * @property Producto $Producto
 * @property Actividad $Actividad
 * @property Acta $Acta
 */
class Productosactividad extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'producto_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'actividad_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'acta_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		
		'observacion' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'porcentaje' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'responsable_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'dim' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pro' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estado' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'observacionsms' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'referente_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'proceso' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

	

		'task' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'porcentaje_act' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	


	 /*'anexo' => array(
        'rule' => array('isValidExtension', array('rar','zip','pdf')),
        'message' => 'File does not have a pdf, zip, or rar'
    ),

		 /* 'anexo1' => array(
        'rule' => array('isValidExtension', array('rar','zip','pdf')),
        'message' => 'File does not have a pdf, zip, or rar'
    ),

		 'anexo' => array(
        'rule' => 'isUnderPhpSizeLimit',
        'message' => 'File exceeds upload filesize limit'
   		 ),
		
		 'anexo' => array(
        'rule' => 'isFileUploadOrHasExistingValue',
        'message' => 'File was missing from submission'
   			 )			*/
																

	

		);


   /* 'anexo' => array(
        'rule' => array('isValidMimeType', array('application/pdf','application/Rar'), true),
        'message' => 'File is not a pdf or png'
    ),
	

	

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */

//var $name = 'Acta';
	
 /*public $actsAs = array(
		'Upload.Upload' => array(
			'anexo'=>array(
			   'fields'=>array(
			   	   'dir'=>'dir'),
			   		'thumbnailMethod'=>'php',
			   		'thumbnailSizes'=> array(
			   			'vga'=>'640x480',
			   		     'thumb'=>'150x150'
			   		     ),

			   		'deleteOnUpdate'=> true,
			   		'deleteFolderOndelete'=>true
			   )
			)
     
    );*/

	

	public $actsAs = array(
        'Upload.Upload' => array(
            'anexo' => array(
                'fields' => array(
                    'dir'=>'dirproducto'),
			   		'thumbnailMethod'=>'php',
			   		/*'thumbnailSizes'=> array(
			   			'thumb'=>'150x150'
			   		     ),*/
                'deleteOnUpdate'=> false,
			   		'deleteFolderOndelete'=>false,
			   		'maxSize' => 2097152
            ),
          /*  'anexo1' => array(
                'fields' => array(
                    'dir'=>'dir1'),
			   		'thumbnailMethod'=>'php',
			   		/*'thumbnailSizes'=> array(
			   			'thumb'=>'150x150'
			   		     ),
                'deleteOnUpdate'=> true,
			   		'deleteFolderOndelete'=>true*/
            ),
        
    );

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Producto' => array(
			'className' => 'Producto',
			'foreignKey' => 'producto_id',
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
		'Acta' => array(
			'className' => 'Acta',
			'foreignKey' => 'acta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Referente' => array(
			'className' => 'Referente',
			'foreignKey' => 'referente_id',
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
}
