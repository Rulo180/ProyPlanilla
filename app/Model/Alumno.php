<?php
App::uses('AppModel', 'Model');

class Alumno extends AppModel{
    
    //public $primaryKey = 'id_alumno';
    
    public $displayField = 'apellido_alumno';
    
    public $belongsTo = ['Curso' => array(
        'className' => 'Curso',
        'foreingKey' => 'curso_id'
    )];
    
    public $validate = array(
            'nombre_alumno' => array(
                'rule' => 'notEmpty',
			'message' => 'El campo nombre no puede quedar vacio',
			//'allowEmpty' => false,
			'required' => true,
			//'last' => false, // Stop validation after this rule
			//'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'apellido_alumno' => array(
                        'rule' => 'notEmpty',
			'message' => 'El campo apellido no puede quedar vacio',
			//'allowEmpty' => false,
			'required' => true,
			//'last' => false, // Stop validation after this rule
			//'on' => 'create', // Limit validation to 'create' or 'update' operations
            )        
        );
}