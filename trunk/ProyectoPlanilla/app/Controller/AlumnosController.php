<?php
App::uses('AppController', 'Controller');

class AlumnosController extends AppController{
    
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Paginator', 'Session');
    
    public function index($id_alumno) {
        $this->Paginator->settings = array(
        'conditions' => array('Alumno.curso_id' => $id_alumno)
        );
		$this->Alumno->recursive = 0;
		$this->set('alumnos', $this->Paginator->paginate());
	}
}