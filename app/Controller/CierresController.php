<?php

App::uses('AppController', 'Controller');

class CierresController extends AppController{
    
    var $helpers = array('Html', 'Form');
    public $components = array('Paginator', 'Session');
    
    public function index($id) {
        $this->Paginator->settings = array(
        'conditions' => array('Cierre.curso_id' => $id), 'order' => array('fecha_cierre' => 'asc'));
        $this->set('id_curso', $id);
        
	$this->Cierre->recursive = 0;
	$this->set('cierres', $this->Paginator->paginate());
	}
    
    public function add($id_curso){
        $this->set('id_curso', $id_curso);
        if($this->request->is('post')){
            $this->Cierre->create();
            if($this->Cierre->save($this->request->data)){
                $this->Session->setFlash('El cierre ha sido guardado.');
                return $this->redirect(array('action'=> 'index', $id_curso));
            }
            $this->Session->setFlash('El cierre no ha sido guardado. Intente nuevamente.');
        }
    }
    
    public function edit($id){
            if (!$id) {
                throw new NotFoundException(__('Id invalido.'));
            }
            
            $cierre = $this->Cierre->findById($id);
            if (!$cierre) {
                throw new NotFoundException(__('Cierre invalido.'));
            }

            if ($this->request->is(array('post', 'put'))) {
                $this->Cierre->id = $id;
                if ($this->Cierre->save($this->request->data)) {
                    $this->Session->setFlash(__('El cierre ha sido actualizado.'));
                    $id_curso = $this->Cierre->field('curso_id');
                    return $this->redirect(array('action' => 'index', $id_curso));
                }
                $this->Session->setFlash(__('El cierre no ha sido guardado. Intente nuevamente.'));
        }

            if (!$this->request->data) {
                $this->request->data = $cierre;
            }
    }
    
    public function delete($id = null) {
		if ($this->request->is('get')) {
                    throw new MethodNotAllowedException();
                }

                if ($this->Cierre->delete($id)) {
                    $id_curso = $this->Cierre->field('curso_id');
                    $this->Session->setFlash('El cierre  ha sido borrado.');
                return $this->redirect(array('action' => 'index', $id_curso));
                }
	}
    
}

