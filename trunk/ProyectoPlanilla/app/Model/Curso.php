<?php
App::uses('AppModel', 'Model');

class Curso extends AppModel{
    
    public $primaryKey = 'id_curso';
    
    
    public $belongsTo = ['Escuela' => array(
            'className' => 'Escuela',
            'foreignKey' => 'escuela_id'
        )
        ];
    
    
    public $validate = array(
        'año_curso' => array(
            'rule' => array('notEmpty'),
            'message' => 'El campo año no puede quedar vacio',
            'required' => true
        ),
        'division_curso' => array(
            'rule' => array('notEmpty'),
            'message' => 'El campo división no puede quedar vacio',
            'required' => true
        )
    );
}

