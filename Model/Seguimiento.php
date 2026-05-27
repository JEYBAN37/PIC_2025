<?php
App::uses('AppModel', 'Model');
/**
 * Seguimiento Model
 *
 * @property Producto $Producto
 * @property Referente $Referente
 * @property Responsable $Responsable
 */
class Seguimiento extends AppModel {


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
		'fecha' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Debe agregar fecha',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'observacionoperador' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Por favor diligenciar la observación correspondiente',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'observacionreferente' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
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
		'limitantes' => array(
			 'multiple' => array(
                'rule' => array('multiple', array('min' => 1)),
                'message' => 'Por favor seleccione al menos una opción',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'acompanamiento' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'descripcionacompanamiento' => array(
			 'multiple' => array(
                'rule' => array('multiple', array('min' => 1)),
                'message' => 'Por favor seleccione al menos una opción',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		/*'enlace1' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'enlace2' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
	/*	'referente_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'responsable_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'productoanexo' => array(
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

				'rule' => array('isValidExtension', array('rar', 'zip', 'pdf')),
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
		'Containable',
		'Upload.Upload' => array(
			'productoanexo' => array(
				'fields' => array(
					'dir' => 'dirproductoanexo'
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

	 public function beforeSave($options = array())
    {
        if (isset($this->data[$this->alias]['limitantes']) && is_array($this->data[$this->alias]['limitantes'])) {
            $this->data[$this->alias]['limitantes'] = implode(',', $this->data[$this->alias]['limitantes']);
        }


        if (isset($this->data[$this->alias]['descripcionacompanamiento']) && is_array($this->data[$this->alias]['descripcionacompanamiento'])) {
            $this->data[$this->alias]['descripcionacompanamiento'] = implode(',', $this->data[$this->alias]['descripcionacompanamiento']);
        }

        return true;
    }

	function checkUniqueName($data)
	{
		$isUnique = $this->find('first', array('fields' => array('Seguimiento.productoanexo'), 'conditions' => array('Seguimiento.productoanexo' => $data['productoanexo'])));
		if (!empty($isUnique)) {
			return false;
		} else {
			return true;
		}
	}
}