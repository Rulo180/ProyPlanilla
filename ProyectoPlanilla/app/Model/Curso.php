<?php
App::uses('AppModel', 'Model');

class Curso extends AppModel{
    
    public $primaryKey = 'id_curso';
    
    
    public $belongsTo = ['Escuela' => array(
            'className' => 'Escuela',
            'foreignKey' => 'escuela_id'
        )
        ];
}

