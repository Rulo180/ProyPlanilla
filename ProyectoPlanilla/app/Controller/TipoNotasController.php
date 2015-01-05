<?php

App::uses('AppController', 'Controller');

class TipoNotasController extends AppController{
    
    var $helpers = array('Html', 'Form');
    public $components = array('Paginator', 'Session');
    
    public function index() {
             
	$this->TipoNota->recursive = 0;
	$this->set('tipos', $this->Paginator->paginate());
	}
    
    public function add(){
        if($this->request->is('post')){
            $this->TipoNota->create();
            if($this->TipoNota->save($this->request->data)){
                $this->Session->setFlash('El tipo de nota ha sido guardado.');
                return $this->redirect(array('action'=> 'index'));
            }
            $this->Session->setFlash('El tipo de nota no ha sido guardado. Intente nuevamente.');
        }
    }
    
    public function edit($id){
            if (!$id) {
                throw new NotFoundException(__('Id invalido.'));
            }
            
            $tipo = $this->TipoNota->findByIdTipoNota($id);
            if (!$tipo) {
                throw new NotFoundException(__('Tipo invalido.'));
            }

            if ($this->request->is(array('post', 'put'))) {
                $this->TipoNota->id = $id;
                if ($this->TipoNota->save($this->request->data)) {
                    $this->Session->setFlash(__('El tipo de nota ha sido actualizado.'));
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('El tipo de nota no ha sido guardado. Intente nuevamente.'));
        }

            if (!$this->request->data) {
                $this->request->data = $tipo;
            }
    }
    
    public function delete($id = null) {
		if ($this->request->is('get')) {
                    throw new MethodNotAllowedException();
                }

                if ($this->TipoNota->delete($id)) {
                    $this->Session->setFlash('El tipo de nota ha sido borrado.');
                return $this->redirect(array('action' => 'index'));
                }
	}
}

