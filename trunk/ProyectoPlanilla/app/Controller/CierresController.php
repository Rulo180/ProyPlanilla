<?php

App::uses('AppController', 'Controller');

class CierresController extends AppController{
    
    var $helpers = array('Html', 'Form');
    public $components = array('Paginator', 'Session');
    
    public function index($id) {
        $this->Paginator->settings = array(
        'conditions' => array('Cierre.escuela_id' => $id));
        $this->loadModel('Escuela', $id);
        $this->set('nombre_escuela', $this->Escuela->field('nombre_escuela'));
        $this->set('id_escuela', $id);
        
	$this->Curso->recursive = 0;
	$this->set('cierres', $this->Paginator->paginate());
	}
    
    
    
}

