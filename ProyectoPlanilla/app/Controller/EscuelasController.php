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
	public function view($id) {
		if (!$this->Escuela->exists($id)) {
			throw new NotFoundException(__('Invalid escuela'));
		}
		$options = array('conditions' => array('Escuela.' . $this->Escuela->primaryKey => $id));
		$this->set('escuela', $this->Escuela->find('first', $options));
                
                /*Segun Tut de Blog
                $escuela = $this->Escuela->findByIdEscuela($id);
                if (!$escuela) {
                    throw new NotFoundException(__('Escuela invalida.'));
                }
                $this->set('escuela', $escuela);*/
                
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
            $this->Escuela->id = $id;
            if($this->request->is('get')){
                //$this->request->data = $this->Escuela->read();
                $this->set('Escuela', $this->Escuela->findByIdEscuela($id));
            }else{
                if ($this->Escuela->save($this->request->data)) {
			$this->Session->setFlash(__('La escuela ha sido guardada.'));
                        return $this->redirect(array('action' => 'index'));
                }else{
			$this->Session->setFlash(__('La escuela no ha sido guardada. Intente nuevamente.'));
                }
            }
//		if (!$this->Escuela->exists($id)) {
//			throw new NotFoundException(__('Escuela no valida.'));
//		}
//		if ($this->request->is(array('escuela', 'put'))) {
//			if ($this->Escuela->save($this->request->data)) {
//				$this->Session->setFlash(__('La escuela ha sido guardada.'));
//				return $this->redirect(array('action' => 'index'));
//			} else {
//				$this->Session->setFlash(__('La escuela no ha sido grabada. Intente nuevamente.'));
//			}
//		} else {
//			$options = array('conditions' => array('Escuela.' . $this->Escuela->primaryKey => $id));
//			$this->request->data = $this->Escuela->find('first', $options);
//		}
            
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
                    __('La escuela '.$this->Escuela->field(nombre_escuela).' ha sido borrada.', h($id))
                );
                return $this->redirect(array('action' => 'index'));
                }
                /*Autogenerado
                $this->Escuela->id_escuela = $id;
                 
		if (!$this->Escuela->exists()) {
			throw new NotFoundException(__('Escuela invalida'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Escuela->delete()) {
			$this->Session->setFlash(__('La escuela ha sido borrada.'));
		} else {
			$this->Session->setFlash(__('La escuela no ha sido borrada. Por favor, intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
                 */
	}
}
