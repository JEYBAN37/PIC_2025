<?php
App::uses('AppModel', 'Model');
/**
 * Seguimiento Model
 *
 * @property Producto $Producto
 * @property Referente $Referente
 * @property Responsable $Responsable
 */
class Seguimiento extends AppModel
{


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
				'message' => 'El archivo debe ser de tipo pdf, zip, or rar',
				'allowEmpty' => true,  // AJUSTE CLAVE: Permite que el campo esté vacío en el formulario
				'required' => false,   // AJUSTE CLAVE: Indica que el campo no es obligatorio en la petición POST
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


	public function reportDashBoard()
	{
		$seguimientos = $this->find('all', array(
			'fields' => array(
				'Producto.id AS id_actividad',
				'Producto.numproductos AS num_productos',
				'Producto.nombredim',
				'Producto.actividad',
				'Seguimiento.fecha',
				'Seguimiento.valorprogramado',
				'Seguimiento.valorejecutado',
				'Seguimiento.estado',
				'Seguimiento.observacionoperador',
				'Seguimiento.observacionreferente',
				'Responsable.nombres AS responsable',
				'Referente.nombres AS referente'
			),
			'recursive' => 0,
		));

		$rows = array();

		foreach ($seguimientos as $item) {
			$producto    = isset($item['Producto']) ? $item['Producto'] : array();
			$seguimiento = isset($item['Seguimiento']) ? $item['Seguimiento'] : array();
			$responsable = isset($item['Responsable']) ? $item['Responsable'] : array();
			$referente   = isset($item['Referente']) ? $item['Referente'] : array();
			$alias       = isset($item[0]) ? $item[0] : array();

			$rows[] = array(
				'data' => array(
					'id_actividad'          => (string)(isset($alias['id_actividad']) ? $alias['id_actividad'] : (isset($producto['id']) ? $producto['id'] : '')),
					'num_productos'         => (int)(isset($alias['num_productos']) ? $alias['num_productos'] : (isset($producto['numproductos']) ? $producto['numproductos'] : 0)),
					'nombredim'             => (string)(isset($producto['nombredim']) ? $producto['nombredim'] : ''),
					'actividad'             => (string)(isset($producto['actividad']) ? $producto['actividad'] : ''),
					'fecha'                 => !empty($seguimiento['fecha']) ? date('Y-m-d', strtotime($seguimiento['fecha'])) : null,
					'valorprogramado'       => (float)(isset($seguimiento['valorprogramado']) ? $seguimiento['valorprogramado'] : 0),
					'valorejecutado'        => (float)(isset($seguimiento['valorejecutado']) ? $seguimiento['valorejecutado'] : 0),
					'estado'                => (string)(isset($seguimiento['estado']) ? $seguimiento['estado'] : ''),
					'observacionoperador'  => (string)(isset($seguimiento['observacionoperador']) ? $seguimiento['observacionoperador'] : ''),
					'observacionreferente' => (string)(isset($seguimiento['observacionreferente']) ? $seguimiento['observacionreferente'] : ''),
					'responsable'           => (string)(isset($alias['responsable']) ? $alias['responsable'] : (isset($responsable['nombres']) ? $responsable['nombres'] : '')),
					'referente'             => (string)(isset($alias['referente']) ? $alias['referente'] : (isset($referente['nombres']) ? $referente['nombres'] : ''))
				)
			);
		}

		return $rows;
	}
}
