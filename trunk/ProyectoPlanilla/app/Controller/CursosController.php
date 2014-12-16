<?php

App::uses('AppController', 'Controller');

class CursosController extends AppController{
    
    var $helpers = array('Html', 'Form');
    public $components = array('Paginator', 'Session');
    
    
    public function index($id_escuela) {
        $this->Paginator->settings = array(
        'conditions' => array('Curso.escuela_id' => $id_escuela)
    );
		$this->Curso->recursive = 0;
		$this->set('cursos', $this->Paginator->paginate());
	}
        
    public function view($id){
        $curso = $this->Curso->findByIdCurso($id);
        if(!$curso){
            throw new NotFoundException(__('Curso invalido.'));
        }
        $this->set('curso', $curso);
        
    }
    
    public function add(){
        if($this->request->is('post')){
            $this->Curso->create();
            if($this->Curso->save($this->request->data)){
                $this->Session->setFlash('El curso ha sido guardado.');
                return $this->redirect(array('action'=> 'index'));
            }
            $this->Session->setFlash('El curso no ha sido guardado. Intente nuevamente.');
        }
    }
    
    public function edit($id){
        if($this->request->is('get')){
            $this->set('Escuela', $this->Curso->findByIdCurso($id));
        }else{
            $this->Curso->save($this->request->data);
            $this->Session->setFlash(__('El curso ha sido guardado.'));
            return $this->redirect(array('action' => 'index'));
        }
    }
}

