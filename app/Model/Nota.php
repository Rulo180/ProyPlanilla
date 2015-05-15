<?php

App::uses('AppModel', 'Model');

/*
 * Falta las validaciones de los Selects de Alumno y Tipo_Nota
 */

class Nota extends AppModel{
    
    //public $primaryKey = 'id_nota';
    
    public $displayField = 'valor_nota';
    
    /**
     *  Relationships
     * @var type 
     */
    
    public $belongsTo = array(
                'Alumno' => array(
                        'className' => 'Alumno',
			'foreignKey' => 'alumno_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
                ),
                'Cierre' => array(
                        'className' => 'Cierre',
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
                ),
                'TipoNota' => array(
                        'className' => 'TipoNota',
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
            'valor_nota' => array(
                'noVacio' => array(
                        'rule' => 'notEmpty',
                        'message' => 'El campo no puede quedar vacio',
                        'required' => true
                ),'numerico' => array(
                        'rule' => 'numeric',
                        'required' => true,
                        'message' => 'El campo trimestre debe ser númerico.'
                ),'entre0y10' => array(
                        'rule' => array('range', 0, 10),
                        'message' => 'Debe ingresar un valor entre 0 y 10.'
                )
            )
    );
}