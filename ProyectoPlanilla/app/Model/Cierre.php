<?php

App::uses('AppModel', 'Model');

class Cierre extends AppModel{
    
    public $primaryKey = 'id_cierre';
    
    public $belongsTo = ['Escuela' => array(
            'className' => 'Escuela',
            'foreignKey' => 'escuela_id'
        )
        ];
    
    public $hasMany = array(
		'notas' => array(
			'className' => 'Nota',
			'foreignKey' => 'cierre_id',
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

