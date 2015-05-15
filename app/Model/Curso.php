<?php
App::uses('AppModel', 'Model');

class Curso extends AppModel{
    
    //public $primaryKey = 'id_curso';
    
    //public $virtualFields = array('Nombre_Curso' => "CONCAT(Curso.año_curso, ' - ', Curso.division_curso)");
    
    //public $displayField = 'Nombre_Curso';
    
    /**
     * Relationships
     * @var type 
     */
    public $belongsTo = ['Escuela' => array(
            'className' => 'Escuela',
            'foreignKey' => 'escuela_id'
        )
        ];
    
    
    public $hasMany = array(
		'cierres' => array(
			'className' => 'Cierre',
			'foreignKey' => 'curso_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
                'alumnos' => array(
			'className' => 'Alumno',
			'foreignKey' => 'curso_id',
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
            'año_curso' => array(
                'rule' => 'notEmpty',
                'message' => 'El campo año no puede quedar vacio',
                'required' => true
            ),
            'division_curso' => array(
                'rule' => 'notEmpty',
                'message' => 'El campo división no puede quedar vacio',
                'required' => true
            )
    );
}

