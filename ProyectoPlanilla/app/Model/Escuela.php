<?php
App::uses('AppModel', 'Model');
/**
 * Escuela Model
 *
 * @property  $
 */
class Escuela extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_escuela';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_escuela';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id_escuela' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El campo nombre no puede quedar vacio',
				//'allowEmpty' => false,
				'required' => true
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nombre_escuela' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),'nro_escuela' => array(
                        'rule' => 'numeric',
                        'message' => 'Ingrese solo números.'
                ), 'telefono_escuela' => array(
                        'rule' => 'numeric',
                        'allowEmpty' => true,
                        'message' => 'Ingrese solo números.'
                        ),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'' => array(
			'className' => 'Curso',
			'foreignKey' => 'escuela_id',
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

}
