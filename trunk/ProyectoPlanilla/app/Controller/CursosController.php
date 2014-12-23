<?php

App::uses('AppController', 'Controller');

class CursosController extends AppController{
    
    var $helpers = array('Html', 'Form');
    public $components = array('Paginator', 'Session');
    
    
    public function index($id) {
        $this->Paginator->settings = array(
        'conditions' => array('Curso.escuela_id' => $id));
        $this->set('id_escuela', $id);
        
	$this->Curso->recursive = 0;
	$this->set('cursos', $this->Paginator->paginate());
	}
        
    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $curso = $this->Curso->findByIdCurso($id);
        if (!$curso) {
            throw new NotFoundException(__('Curso invalido.'));
        }
        $this->set('curso', $curso);
    }
        
    public function add($id){
        $this->set('id_escuela', $id);
        if($this->request->is('post')){
            $this->Curso->create();
            if($this->Curso->save($this->request->data)){
                $this->Session->setFlash('El curso ha sido guardado.');
                return $this->redirect(array('action'=> 'index', $id));
            }
            $this->Session->setFlash('El curso no ha sido guardado. Intente nuevamente.');
        }
    }
    
    public function edit($id){
            if (!$id) {
                throw new NotFoundException(__('Id invalido.'));
            }
            
            $curso = $this->Curso->findByIdCurso($id);
            if (!$curso) {
                throw new NotFoundException(__('Curso invalido.'));
            }

            if ($this->request->is(array('post', 'put'))) {
                $this->Curso->id = $id;
                if ($this->Curso->save($this->request->data)) {
                    $this->Session->setFlash(__('El curso ha sido actualizado.'));
                    return $this->redirect(array('action' => 'index', $id));
                }
                $this->Session->setFlash(__('El curso no ha sido guardado. Intente nuevamente.'));
        }

            if (!$this->request->data) {
                $this->request->data = $curso;
            }
    }
    
    public function delete($id = null) {
		if ($this->request->is('get')) {
                    throw new MethodNotAllowedException();
                }

                if ($this->Curso->delete($id)) {
                    $id = $this->Curso->field('escuela_id');
                    $this->Session->setFlash('El curso  ha sido borrado.');
                return $this->redirect(array('action' => 'index', $id));
                }
	}
}

