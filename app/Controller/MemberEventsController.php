<?php
App::uses('AppController', 'Controller');
/**
 * Memberevents Controller
 *
 * @property Memberevent $Memberevent
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MembereventsController extends AppController {

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
		$this->Memberevent->recursive = 0;
		$this->set('memberevents', $this->Paginator->paginate());
	}
	public function home() {
		$this->Memberevent->recursive = 0;
		$this->set('memberevents', $this->Paginator->paginate());
	}
	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Memberevent->exists($id)) {
			throw new NotFoundException(__('Invalid memberevent'));
		}
		$options = array('conditions' => array('Memberevent.' . $this->Memberevent->primaryKey => $id));
		$this->set('memberevent', $this->Memberevent->find('first', $options));
	}

	
	public function lihat($id = null) {
		if (!$this->Memberevent->exists($id)) {
			throw new NotFoundException(__('Invalid memberevent'));
		}
		$options = array('conditions' => array('Memberevent.' . $this->Memberevent->primaryKey => $id));
		$this->set('memberevent', $this->Memberevent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Memberevent->create();
			if ($this->Memberevent->save($this->request->data)) {
				$this->Session->setFlash(__('The memberevent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The memberevent could not be saved. Please, try again.'));
			}
		}
		$users = $this->Memberevent->User->find('list');
		$events = $this->Memberevent->Event->find('list');
		$this->set(compact('users', 'events'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Memberevent->exists($id)) {
			throw new NotFoundException(__('Invalid memberevent'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Memberevent->save($this->request->data)) {
				$this->Session->setFlash(__('The memberevent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The memberevent could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Memberevent.' . $this->Memberevent->primaryKey => $id));
			$this->request->data = $this->Memberevent->find('first', $options);
		}
		$users = $this->Memberevent->User->find('list');
		$events = $this->Memberevent->Event->find('list');
		$this->set(compact('users', 'events'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Memberevent->id = $id;
		if (!$this->Memberevent->exists()) {
			throw new NotFoundException(__('Invalid memberevent'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Memberevent->delete()) {
			$this->Session->setFlash(__('The memberevent has been deleted.'));
		} else {
			$this->Session->setFlash(__('The memberevent could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
