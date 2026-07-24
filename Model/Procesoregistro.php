<?php
App::uses('AppModel', 'Model');
/**
 * Procesoregistro Model
 *
 * @property Proactividad $Proactividad
 * @property Ubicacion $Ubicacion
 * @property Plsesion $Plsesion
 * @property Producto $Producto
 * 
 */
class Procesoregistro extends AppModel
{

	public function cargarProactividad()
	{
		$proactividades = $this->Proactividad->find('list', [
			'fields' => ['Proactividad.id', 'Proactividad.nombreact'],
			'order' => ['Proactividad.created' => 'DESC']
		]);

		// Elimina etiquetas HTML y convierte a mayúsculas
		foreach ($proactividades as $key => $value) {
			$proactividades[$key] = strip_tags($value);
		}

		return $proactividades;
	}

	public function cargarPlanSesion( $productos = null )
	{
		$plsesiones = $this->Plsesion->find('list', [
			'conditions' => ['Plsesion.producto_id' => $productos],
			'fields' => ['Plsesion.id', 'Plsesion.nombreplan'],
			'order' => ['Plsesion.modified' => 'DESC']
		]);

		// Elimina etiquetas HTML y convierte a mayúsculas
		foreach ($plsesiones as $key => $value) {
			$plsesiones[$key] = strip_tags($value);
		}

		return $plsesiones;
	}


	public function loadTematica($id = null)
	{
		if (!$id) {
			return null;
		}

		$plsesion = $this->Plsesion->find('first', [
			'conditions' => ['Plsesion.id' => $id],
			'fields' => ['Plsesion.id', 'Plsesion.tema'],
			'recursive' => -1
		]);

		if ($plsesion) {
			return $plsesion;
		} else {
			return null;
		}
	}

	// En Model/Proactividad.php
	public function countSesionesPorPosicion($proactividadId)
	{
		$countproceso = $this->find('count', array(
			'conditions' => array('proactividad_id' => $proactividadId),
			'recursive' => -1
		));
		return $countproceso;
	}

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
		'proactividad_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Por favor verifique campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Por favor verifique campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'hora_inicio' => array(
			'time' => array(
				'rule' => array('time'),
				'message' => 'Por favor verifique campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'hora_fin' => array(
			'time' => array(
				'rule' => array('time'),
				'message' => 'Por favor verifique campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tema' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Por favor verifique campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'entorno' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Por favor verifique campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cursovida' => array(
			'multiple' => array(
				'rule' => array('multiple', array('min' => 1)),
				'message' => 'Por favor seleccione al menos una opción',
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
		'tipopoblacion' => array(
			'multiple' => array(
				'rule' => array('multiple', array('min' => 1)),
				'message' => 'Por favor seleccione al menos una opción',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'accioninformativa' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Por favor verifique campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'grupo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Por favor verifique campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'ubicacion_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Por favor verifique campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

	/*	'plsesion_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Por favor verifique campo',
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
				'message' => 'File does not have a pdf, zip, or rar'
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
				'isUniqueName' => array(
				'rule' => array('checkUniqueName'), // Especifica la función como un array de regla interna
				'message' => 'El nombre de este archivo ya ha sido registrado previamente.',
				'allowEmpty' => true, // Permite que pase la validación en la edición si el archivo viene vacío
				'required' => false
			)
			
		),


	);



	public $actsAs = array(
		'Containable',
		'Upload.Upload' => array(
			'anexo' => array(
				'fields' => array(
					'dir' => 'sisproceso_dir'
				),
				'thumbnailMethod' => 'php',

				'deleteOnUpdate' => true,
				'deleteFolderOndelete' => true
			),

		
			
			'checkUniqueName' => array(
				'rule' => array('checkUniqueName'),
				'message' => 'Existe un archivo almacenado con el mismo nombre',
				'on' => 'update'
			),

		),

		'containable'

	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	/**
	 * belongsTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
		'Proactividad' => array(
			'className' => 'Proactividad',
			'foreignKey' => 'proactividad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ubicacion' => array(
			'className' => 'Ubicacion',
			'foreignKey' => 'ubicacion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Plsesion' => array(
			'className' => 'Plsesion',
			'foreignKey' => 'plsesion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
		/*'Procesoregistro' => array(
			'className' => 'Procesoregistro',
			'foreignKey' => 'procesoregistro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)*/
	);

	public $hasMany = array(
		/*'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'procesoregistro_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),/*
		'Participantesprocesos' => array(
			'className' => 'Participantesprocesos',
			'foreignKey' => 'Procesoregistro_id',
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
		
		/*'Producto' => array(
			'className' => 'Producto',
			'foreignKey' => 'Procesoregistro_id',
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

		'Productosactividad' => array(
			'className' => 'Productosactividad',
			'foreignKey' => 'Procesoregistro_id',
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
	public $hasAndBelongsToMany = array(
		
		/*'Producto' => array(
			'className' => 'Producto',
			'joinTable' => 'productosactividades',
			'foreignKey' => 'actividad_id',
			'associationForeignKey' => 'producto_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)*/
	);

	public function checkUniqueName($data)
	{
		// Si estamos editando y el archivo no cambió, no es necesario validar unicidad
		if (empty($data['anexo']) || is_array($data['anexo'])) {
			return true;
		}

		$conditions = array('Procesoregistro.anexo' => $data['anexo']);
		
		// Si estamos editando (existe un ID en el modelo), excluimos el registro actual de la búsqueda
		if (!empty($this->id)) {
			$conditions['Procesoregistro.id !='] = $this->id;
		}

		$isUnique = $this->find('first', array(
			'fields' => array('Procesoregistro.anexo'), 
			'conditions' => $conditions,
			'recursive' => -1
		));

		return empty($isUnique); // Retorna true si está libre, false si ya existe duplicado
	}


	public function beforeSave($options = array())
	{
		// AJUSTE: Aplanar tipopoblacion de Array a String
		if (isset($this->data[$this->alias]['tipopoblacion']) && is_array($this->data[$this->alias]['tipopoblacion'])) {
			$this->data[$this->alias]['tipopoblacion'] = implode(',', $this->data[$this->alias]['tipopoblacion']);
		}

		// AJUSTE: Aplanar limitantes de Array a String
		if (isset($this->data[$this->alias]['limitantes']) && is_array($this->data[$this->alias]['limitantes'])) {
			$this->data[$this->alias]['limitantes'] = implode(',', $this->data[$this->alias]['limitantes']);
		}

		// --- Tus lógicas originales intactas ---
		if (isset($this->data[$this->alias]['cursovida']) && is_array($this->data[$this->alias]['cursovida'])) {
			$this->data[$this->alias]['cursovida'] = implode(',', $this->data[$this->alias]['cursovida']);
		}

		if (isset($this->data[$this->alias]['poblacion']) && is_array($this->data[$this->alias]['poblacion'])) {
			$this->data[$this->alias]['poblacion'] = implode(',', $this->data[$this->alias]['poblacion']);
		}

		if (isset($this->data[$this->alias]['vulnerabilidad']) && is_array($this->data[$this->alias]['vulnerabilidad'])) {
			$this->data[$this->alias]['vulnerabilidad'] = implode(',', $this->data[$this->alias]['vulnerabilidad']);
		}

		if (isset($this->data[$this->alias]['apoyos']) && is_array($this->data[$this->alias]['apoyos'])) {
			$this->data[$this->alias]['apoyos'] = implode(',', $this->data[$this->alias]['apoyos']);
		}

		if (isset($this->data[$this->alias]['mecanismo']) && is_array($this->data[$this->alias]['mecanismo'])) {
			$this->data[$this->alias]['mecanismo'] = implode(',', $this->data[$this->alias]['mecanismo']);
		}

		return true;
	}
}