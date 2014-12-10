<?php
App::uses('AppModel', 'Model');

class Curso extends AppModel{
    
    public $primaryKey = 'id_curso';
    
    
    public $hasOne = 'Escuela';
}

