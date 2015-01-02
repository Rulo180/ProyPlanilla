<?php

App::uses('AppController', 'Controller');

class NotasController extends AppController{
    
    var $helpers = array('Html', 'Form');
    public $components = array('Paginator', 'Session');
    
    public function index($id, $filtro) { //Falta definir como filtrar por alumno o cierre segun desde donde llamemos al metodo.
        $this->Paginator->settings = array(
        'conditions' => array('Nota.cierre_id' => $id));
        $this->loadModel('Escuela', $id);
        $this->set('nombre_escuela', $this->Escuela->field('nombre_escuela'));
        $this->set('id_escuela', $id);
        
	$this->Cierre->recursive = 0;
	$this->set('cierres', $this->Paginator->paginate());
	}

}
