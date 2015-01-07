<?php

App::uses('AppController', 'Controller');

class NotasController extends AppController{
    
    var $helpers = array('Html', 'Form');
    public $components = array('Paginator', 'Session');
    
    public function index($id, $filtro) {
        if($filtro == 'c'){
        $this->Paginator->settings = array(
        'conditions' => array('Nota.cierre_id' => $id));
        $this->set('id_cierre', $id);
        } elseif ($filtro == 'a') {
        $this->Paginator->settings = array(
        'conditions' => array('Nota.alumno_id' => $id));
        }
        
	$this->Nota->recursive = 0;
	$this->set('notas', $this->Paginator->paginate());
	}
        
    public function add($id_cierre){
        $this->loadModel('Cierre');
        $cierre = $this->Cierre->findById($id_cierre);
        $id_curso = $cierre['Cierre']['curso_id'];
        
        //Busca los alumnos y los guarda en una variable para la vista.
        $this->loadModel('Alumno');
        $alumnos = $this->Alumno->find('list', array('conditions' => array('Alumno.curso_id' => $id_curso), 
                                            'fields' => array('id','nombre_alumno', 'apellido_alumno')));
        $this->set('alumnos', $alumnos);
        
        //Busca los tipoNotas y los guarda en una variable para la vista.
        $this->loadModel('TipoNota');
        $tipos = $this->TipoNota->find('list');
        $this->set('tipos', $tipos);
        
        $this->set('id_cierre', $id_cierre);
        
        if($this->request->is('post')){
            $this->Nota->create();
            if($this->Nota->save($this->request->data)){
                $this->Session->setFlash('La nota ha sido guardado.');
                return $this->redirect(array('action'=> 'index', $id_cierre));
            }
            $this->Session->setFlash('La nota no ha sido guardado. Intente nuevamente.');
        }
    }
}
