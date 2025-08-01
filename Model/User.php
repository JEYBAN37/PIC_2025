<?php
App::uses('AppModel', 'Model', 'SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel
{
	public $useTable = 'users';
    var $name = "User";
	public $actsAs = array('Acl' => array('type' => 'requester'));

	public $validate = array(
		'username' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El nombre de usuario es requerido',
				'required' => false,
			),
		),
		'password' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'La contraseña es requerida',
			),
			'format' => array(
				'rule' => '/^[A-Za-z0-9]{6,20}$/',
				'message' => 'La contraseña debe tener entre 6 y 20 caracteres alfanuméricos',
			),
		),
		'nivel' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El nivel es requerido',
			),
		),
		'nombre_usuario' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El nombre es requerido',
			),
		),
		'group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'El ID del grupo debe ser numérico',
			),
		),
	);

	public function parentNode()
	{
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

	public function bindNode($user)
	{
		return array('model' => 'Group', 'foreign_key' => $user['User']['group_id']);
	}

	public function beforeSave($options = array())
	{
		if (!empty($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = md5($this->data[$this->alias]['password']);
		}
		return true;
	}

	public $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
