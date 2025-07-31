<?php
App::uses('AppModel', 'Model');
/**
 * Producto Model
 *
 * @property Actividad $Actividad
 * @property Acta $Acta
 * @property Responsable $Responsable
 * @property Referente $Referente
 * @property ActaViewTest $ActaViewTest
 * @property Acta $Acta
 * @property Actividad $Actividad
 * @property ActividadesViewTest $ActividadesViewTest
 * @property Plsesion $Plsesion
 * @property Productosactividad $Productosactividad
 * @property Actividad $Actividad
 */
class Producto extends AppModel
{

	public $virtualFields = array(
		'nombreproducto' => 'CONCAT(Producto.numproductos," - ",Producto.tarea)'
	);


	public $displayField = 'nombreproducto';


	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(

		/*	'numproductos' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'lineas' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dimensiones' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nombredim' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'costodim' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'linormativas' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'resultado' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'activity' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'vidacursos' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'entorno' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tecnologias' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'porcproducto' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),*/
		/*'tarea' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		/*'porctareas' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		/*	'clasobjetivos' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		/*'evidencia' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		/*	'actividad_id' => array(
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
		'responsable_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Ingrese nombre de responsable de registro',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'porcentajeavance1' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Valide el porcentaje asignado por PIC',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		/*  'porcentajeavance3' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Valide el porcentaje asignado por PIC',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'porcentajeoctubre' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Registre el porcentaje programado para el periodo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/

		/*'observacionpic' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Ingrese la observación pertinente',
				//'allowEmpty' => false,
				'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'observacionsms' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Ingrese la observación pertinente',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estado' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Elija el estado de la tarea',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'referente_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Ingrese nombre de responsable de registro',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'primercohorte' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Elija un numero de la lista',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'segundocohorte' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Elija un numero de la lista',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tercercohorte' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Elija un numero de la lista',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		/*'enlace' => array(
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

				'rule' => array('isValidExtension', array('rar', 'zip', 'pdf')),
				'message' => 'El archivo debe ser de tipo pdf, zip, or rar'
			),
			'isBelowMaxSize' => array(
				'rule' => array('isBelowMaxSize', 4000000),
				'message' => 'El tamaño delarchivo es demasiado grande. Maximo 4mb'
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
					'dir' => 'dirproduc'
				),
				'thumbnailMethod' => 'php',
				/*'thumbnailSizes'=> array(
			   			'thumb'=>'150x150'
			   		     ),*/
				'deleteOnUpdate' => false,
				'deleteFolderOndelete' => false,
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
		/*'Actividad' => array(
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
		'Infoevento' => array(
			'className' => 'Infoevento',
			'foreignKey' => 'infoevento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		*//*'Proactividad' => array(
			'className' => 'Proactividad',
			'foreignKey' => 'proactividad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),*/
		'Responsable' => array(
			'className' => 'Responsable',
			'foreignKey' => 'responsable_id',
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
		)
	);

	/**
	 * hasMany associations
	 *
	 * @var array
	 */
	public $hasMany = array(
		/*'ActaViewTest' => array(
			'className' => 'ActaViewTest',
			'foreignKey' => 'producto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),*/
		'Acta' => array(
			'className' => 'Acta',
			'foreignKey' => 'producto_id',
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
		'Actividad' => array(
			'className' => 'Actividad',
			'foreignKey' => 'producto_id',
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
		/*'ActividadesViewTest' => array(
			'className' => 'ActividadesViewTest',
			'foreignKey' => 'producto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),*/
		'Infoevento' => array(
			'className' => 'Infoevento',
			'foreignKey' => 'producto_id',
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

		'Proactividad' => array(
			'className' => 'Proactividad',
			'foreignKey' => 'producto_id',
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
		'Plsesion' => array(
			'className' => 'Plsesion',
			'foreignKey' => 'producto_id',
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
		/*'Productosactividad' => array(
			'className' => 'Productosactividad',
			'foreignKey' => 'producto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)*/
	);


	/**
	 * hasAndBelongsToMany associations
	 *
	 * @var array
	 */
	/*public $hasAndBelongsToMany = array(
		'Actividad' => array(
			'className' => 'Actividad',
			'joinTable' => 'productos_actividades',
			'foreignKey' => 'producto_id',
			'associationForeignKey' => 'actividad_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);*/


	function checkUniqueName($data)
	{
		$isUnique = $this->find('first', array('fields' => array('Producto.anexo'), 'conditions' => array('Producto.anexo' => $data['anexo'])));
		if (!empty($isUnique)) {
			return false;
		} else {
			return true;
		}
	}
}
