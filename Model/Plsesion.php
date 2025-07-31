<?php

App::uses('AppModel', 'Model');

/**
 * Plsesion Model
 *
 * @property Responsable $Responsable
 * @property Plsmomento $Plsmomento
 */
class Plsesion extends AppModel
{

    public $virtualFields = array(
        'nombreplan' => 'CONCAT(Plsesion.id," ",Plsesion.tema)'
    );


    public $displayField = 'nombreplan';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'fecha' => array(
            'date' => array(
                'rule' => array('date'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'hora_fin' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'producto_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),

        'sesion' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'tema' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'intension' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'cuerpoterritorio' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'part_significativa' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'ciudadaniaactiva' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'territorial' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'poblacional' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'interultural' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'diferencial' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'genero' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'obj_individuos' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'obj_organizaciones' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'obj_instituciones' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'objetivog' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'objetivoe' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'tipoblacion' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'cursovida' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'proceso' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'dimension' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'equipores' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'responsable_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        /* 'tematica' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            'message' => 'Complete los campos requeridos',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'resultado' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            'message' => 'Complete los campos requeridos',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),*/
        'preguntasentido' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'califi_obj1' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                //'numeric' => array(
                //'rule' => array('numeric'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'califi_obj2' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                //	'rule' => array('numeric'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'califi_obj3' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'califi_premisa_ct' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'califi_premisa_ps' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'califi_premisa_ca' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'califi_enfo_territorial' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'califi_enfo_poblacional' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                //	'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'califi_enfo_intercultural' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                //'rule' => array('numeric'),
                'message' => 'Complete los campos requeridos',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'califi_enfo_diferencial' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Complete los campos requeridos',
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

                'rule' => array('isValidExtension', array('rar', 'zip', 'pdf')),
                'message' => 'El archivo debe ser de tipo pdf, zip, or rar'
            ),
            'isBelowMaxSize' => array(
                'rule' => array('isBelowMaxSize', 3000000),
                'message' => 'El tamaño delarchivo es demasiado grande. Maximo 3mb'
            ),
         
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
                            'dir' => 'dirplanes'
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
        'Responsable' => array(
            'className' => 'Responsable',
            'foreignKey' => 'responsable_id',
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
        )
    );



    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Plsmomento' => array(
            'className' => 'Plsmomento',
            'foreignKey' => 'plsesion_id',
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
	    $isUnique = $this->find('first', array('fields' => array('Plsesion.anexo'), 'conditions' => array('Plsesion.anexo' => $data['anexo'])));
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
