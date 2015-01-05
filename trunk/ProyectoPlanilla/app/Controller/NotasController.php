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
        
        $this->loadModel('Alumno');
        $alumnos = $this->Alumno->findAllByCursoId();
        $this->set('alumnos', $alumnos);
        
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
