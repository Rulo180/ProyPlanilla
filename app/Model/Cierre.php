<?php

App::uses('AppModel', 'Model');

class Cierre extends AppModel{
    
    //public $primaryKey = 'id_cierre';
    
    public $belongsTo = ['Curso' => array(
            'className' => 'Curso',
            'foreignKey' => 'curso_id'
        )
        ];
    
    public $hasMany = array(
		'notas' => array(
			'className' => 'Nota',
			'foreignKey' => 'cierre_id',
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
            'trimestre' => array(
                'noVacio' => array(
                    'rule' => 'notEmpty',
                    'message' => 'El campo trimestre no puede quedar vacio',
                    'required' => true
                ),'numerico' => array(
                    'rule' => 'numeric',
                    'required' => true,
                    'message' => 'El campo trimestre debe ser númerico.'
                )
            ),
            'fecha_cierre' => array(
                'noVacio' => array(
                    'rule' => 'notEmpty',
                    'message' => 'El campo fecha no puede quedar vacio',
                    'required' => true
                ),'fecha' => array(
                    'rule' => 'date',
                    'message' => 'Ingrese una fecha válida.',
                    'allowEmpty' => true
                )
            )
    );
}

