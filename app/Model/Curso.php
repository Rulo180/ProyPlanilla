<?php
App::uses('AppModel', 'Model');

class Curso extends AppModel{
    
    //public $primaryKey = 'id_curso';
    
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

