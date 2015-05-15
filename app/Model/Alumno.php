<?php
App::uses('AppModel', 'Model');

class Alumno extends AppModel{
    
    //public $primaryKey = 'id_alumno';
    
    public $virtualFields = array('Nombre_Completo' => "CONCAT(Alumno.apellido_alumno, ' ', Alumno.nombre_alumno)");
    
    public $displayField = 'Nombre_Completo';
    
    /**
     *  Relationships
     * @var type 
     */
    public $belongsTo = ['Curso' => array(
        'className' => 'Curso',
        'foreingKey' => 'curso_id'
    )];
    
    public $hasMany = array(
		'notas' => array(
			'className' => 'Nota',
			'foreignKey' => 'alumno_id',
			'dependent' => true,
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