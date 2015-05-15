<?php
App::uses('AppController', 'Controller');
/**
 * Escuelas Controller
 *
 * @property Escuela $Escuela
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EscuelasController extends AppController {
        
        var $helpers = array('Html', 'Form', 'Session');
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
        
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Escuela->recursive = 0;
		$this->set('escuelas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id) {
		if (!$this->Escuela->exists($id)) {
			throw new NotFoundException(__('Invalid escuela'));
		}
		$options = array('conditions' => array('Escuela.' . $this->Escuela->primaryKey => $id));
		$this->set('escuela', $this->Escuela->find('first', $options));
                
                /*Segun Tut de Blog
                public function view($id = null) {
                if (!$id) {
                    throw new NotFoundException(__('Invalid post'));
                }

                $escuela = $this->Escuela->findById($id);
                if (!$escuela) {
                    throw new NotFoundException(__('Invalid escuela.'));
                }
                $this->set('escuela', $escuela);
                }*/
                
        }

/**
 * add method
 *
 * @return void
 */
	public function add() {
            
                if ($this->request->is('post')) {
                    $this->Escuela->create();
                if ($this->Escuela->save($this->request->data)) {
                    $this->Session->setFlash(__('La escuela ha sido guardada.'));
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('La escuela no ha sido guardada. Intente nuevamente.'));
                }
    }
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
            
            if (!$id) {
                throw new NotFoundException(__('Id invalido.'));
            }
            
            $escuela = $this->Escuela->findById($id);
            if (!$escuela) {
                throw new NotFoundException(__('Escuela invalida.'));
            }

            if ($this->request->is(array('post', 'put'))) {
                $this->Escuela->id = $id;
                if ($this->Escuela->save($this->request->data)) {
                    $this->Session->setFlash(__('La escuela ha sido actualizada.'));
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('La escuela no ha sido guardada. Intente nuevamente.'));
        }

            if (!$this->request->data) {
                $this->request->data = $escuela;
            }

 }
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if ($this->request->is('get')) {
                    throw new MethodNotAllowedException();
                }

                if ($this->Escuela->delete($id)) {
                    $this->Session->setFlash(
                    __('La escuela '.$this->Escuela->field('nombre_escuela').' ha sido borrada.', h($id))
                );
                return $this->redirect(array('action' => 'index'));
                }
	}
}
