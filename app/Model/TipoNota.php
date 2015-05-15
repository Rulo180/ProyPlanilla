<?php

App::uses('AppModel', 'Model');

class TipoNota extends AppModel{
    
    //public $primaryKey = 'id_tipo_nota';
    
    public $displayField = 'nombre_tipo_nota';
    
    public $hasMany = array(
                'Nota' => array(
                        'className' => 'Nota',
			'foreignKey' => 'tipo_nota_id',
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
    
    public $validate = array(
            'nombre_tipo_nota' => array(
                'noVacio' => array(
                    'rule' => 'notEmpty',
                    'message' => 'El campo no puede quedar vacio',
                    'required' => true
                )
            )
    );
}