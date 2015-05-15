<?php
App::uses('AppController', 'Controller');

class AlumnosController extends AppController{
    
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Paginator', 'Session');
    
    public function index($id_curso) {
        $this->Paginator->settings = array(
        'conditions' => array('Alumno.curso_id' => $id_curso), 'order' => array('apellido_alumno' => 'asc'));
	$this->set('id_curso', $id_curso);
        $this->Alumno->recursive = 0;
	$this->set('alumnos', $this->Paginator->paginate());
	}
        
    public function add($id_curso) {
        
                $this->set('id_curso', $id_curso);
                if ($this->request->is('post')) {
                    $this->Alumno->create();
                if ($this->Alumno->save($this->request->data)) {
                    $this->Alumno->setFlash(__('El alumno ha sido guardado.'));
                    return $this->redirect(array('action' => 'index', $id_curso));
                }
                $this->Session->setFlash(__('El alumno no ha sido guardado. Intente nuevamente.'));
                }
                
    }
    
    public function edit($id){
            if (!$id) {
                throw new NotFoundException(__('Id invalido.'));
            }
            
            $alumno = $this->Alumno->findById($id);
            if (!$alumno) {
                throw new NotFoundException(__('Curso invalido.'));
            }

            if ($this->request->is(array('post', 'put'))) {
                $this->Alumno->id = $id;
                if ($this->Alumno->save($this->request->data)) {
                    $this->Session->setFlash(__('El alumno ha sido actualizado.'));
                    $id_curso = $this->Alumno->field('curso_id');
                    return $this->redirect(array('action' => 'index', $id_curso));
                }
                $this->Session->setFlash(__('El alumno no ha sido guardado. Intente nuevamente.'));
        }

            if (!$this->request->data) {
                $this->request->data = $alumno;
            }
    }
    
    public function delete($id = null) {
		if ($this->request->is('get')) {
                    throw new MethodNotAllowedException();
                }

                if ($this->Alumno->delete($id)) {
                    $this->Session->setFlash('El alumno  ha sido borrado.');
                    $id_curso = $this->Alumno->field('curso_id');
                    return $this->redirect(array('action' => 'index', $id_curso));
                }
	}
    
}