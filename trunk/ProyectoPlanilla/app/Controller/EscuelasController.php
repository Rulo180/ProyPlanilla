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
        
        var $helpers = array('Html', 'Form');
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
	public function view($id = null) {
		if (!$this->Escuela->exists($id)) {
			throw new NotFoundException(__('Invalid escuela'));
		}
		//$options = array('conditions' => array('Escuela.' . $this->Escuela->primaryKey => $id));
		//$this->set('escuela', $this->Escuela->find('first', $options));
                $escuela = $this->Escuela->findById($id);
                if (!$escuela) {
                    throw new NotFoundException(__('Invalid post'));
                }
                $this->set('escuela', $escuela);
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
				$this->Session->setFlash(__('Se ha registrado la escuela correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La escuela no ha sido guardada. Intente nuevamente.'));
			}
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
		if (!$this->Escuela->exists($id)) {
			throw new NotFoundException(__('Escuela no valida.'));
		}
		if ($this->request->is(array('escuela', 'put'))) {
			if ($this->Escuela->save($this->request->data)) {
				$this->Session->setFlash(__('La escuela ha sido guardada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La escuela no ha sido grabada. Intente nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Escuela.' . $this->Escuela->primaryKey => $id));
			$this->request->data = $this->Escuela->find('first', $options);
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
		$this->Escuela->id = $id;
		if (!$this->Escuela->exists()) {
			throw new NotFoundException(__('Invalid escuela'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Escuela->delete()) {
			$this->Session->setFlash(__('The escuela has been deleted.'));
		} else {
			$this->Session->setFlash(__('The escuela could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
