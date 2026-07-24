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
 * @property Actividad $Seguimiento
 */
class Producto extends AppModel
{

	
	public $actsAs = array(
		'Containable',
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
		)

	);

	public function getProductoCompleto($id = null){
		return $this->find('first', array(
			'conditions' => array('Producto.id'. $this-> primaryKey => $id),
			'fields' => array(
				'Producto.id',
				'Producto.numproductos',
				'Producto.nombredim',	
				'Producto.producto',	
				'Producto.actividad',				
				'Producto.soportes',				
				'Producto.porcentajeavancetotal',				
				'Producto.estado',
			),
			'order' => array('Producto.modified' => 'DESC'),

		
		));


	}

	
	public $virtualFields = array(
		'nombreproducto' => 'CONCAT(Producto.numproductos," | ",Producto.actividad)'
	);
	public $displayField = 'nombredim';


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
		/*'primercohorte' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Elija un numero de la lista',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'segundocohorte' => array(
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
			'isUniqueName' => array(
				'rule' => array('checkUniqueName'), // Especifica la función como un array de regla interna
				'message' => 'El nombre de este archivo ya ha sido registrado previamente.',
				'allowEmpty' => true, // Permite que pase la validación en la edición si el archivo viene vacío
				'required' => false
			)
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
		),
	
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
		/*'Actividad' => array(
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
		),*/
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
		),	
		'Seguimiento' => array(
			'className' => 'Seguimiento',
			'foreignKey' => 'producto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
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


	public function checkUniqueName($data)
	{
		// Si estamos editando y el archivo no cambió, no es necesario validar unicidad
		if (empty($data['anexo']) || is_array($data['anexo'])) {
			return true;
		}

		$conditions = array('Producto.anexo' => $data['anexo']);
		
		// Si estamos editando (existe un ID en el modelo), excluimos el registro actual de la búsqueda
		if (!empty($this->id)) {
			$conditions['Producto.id !='] = $this->id;
		}

		$isUnique = $this->find('first', array(
			'fields' => array('Producto.anexo'), 
			'conditions' => $conditions,
			'recursive' => -1
		));

		return empty($isUnique); // Retorna true si está libre, false si ya existe duplicado
	}
	


}
