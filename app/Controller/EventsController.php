<?php
App::uses('AppController', 'Controller');
/**
 * Events Controller
 *
 * @property Event $Event
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EventsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $uses=array();
	public $components = array('Paginator', 'Session');

	public function add() {
 
		if ($this->request->is('post')) {
			$this->Event->create();
			
			if ($this->Event->save($this->request->data)) {
				$this->Session->setFlash(__('The event has been saved.'));
				return $this->redirect(array('action' => 'index'));

			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.'));
			}
		}
		$users = $this->Event->User->find('list');
		$this->set(compact('users'));
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Event->recursive = 0;
		$this->set('events', $this->Paginator->paginate());

	}


	public function home() {
		$this->Event->recursive = 1;
		$this->paginate = array(
			'limit' => 4, 
			'order' =>'Event.id DESC'
		);

		$this->set('events', $this->Paginator->paginate());

	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
			$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
			$this->set('event', $this->Event->find('first', $options));
		}

	public function test(){
		
	}	
	public function lihat($id = null) {
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
		$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
		$this->set('event', $this->Event->find('first', $options));
	}


/**
 * add method
 *
 * @return void
	public function add() {

		if ($this->request->is('post')) {
			$this->Event->create();
			
			if ($this->Event->save($this->request->data)) {
				$this->Session->setFlash(__('The event has been saved.'));
				return $this->redirect(array('action' => 'index'));

			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.'));
			}
		}
		$users = $this->Event->User->find('list');
		
		$this->set(compact('users'));
	}

	public function tambah() {

		if ($this->request->is('post')) {
			$this->Event->create();
			
			if ($this->Event->save($this->request->data)) {
				$this->Session->setFlash(__('The event has been saved.'));
				return $this->redirect(array('action' => 'index'));

			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.'));
			}
		}
		$users = $this->Event->User->find('list');
		
		$this->set(compact('users'));
	}
 // disini di edit yuan
 */
	


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Event->save($this->request->data)) {
				$this->Session->setFlash(__('The event has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
			$this->request->data = $this->Event->find('first', $options);
		}
		$users = $this->Event->User->find('list');
		$this->set(compact('users'));
	}
	public function ubah($id = null) {
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Event->save($this->request->data)) {
				$this->Session->setFlash(__('The event has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
			$this->request->data = $this->Event->find('first', $options);
		}
		$users = $this->Event->User->find('list');
		$this->set(compact('users'));
	}


public function search() {
			if(!empty($this->data['Event']['keyword'])) {
			$keyword = $this->data['Event']['keyword'];

			$options = array(
			'fields' => array(
			'Event.title',
			'Event.url_pic',
			'Event.start',
			'Event.end',
			'Event.description'
			),

			
			'conditions' => array(
			'or' => array(
				'Event.title LIKE' => '%' . $keyword . '%',
				'Event.description LIKE' => '%' . $keyword . '%'
				
			)
			));
			
			$result = $this->Event->find('all', $options);
			$this->set('result', $result);
			if(empty($result)) {
				$this->Session->setFlash('Maaf, keyword: "<strong>'.' '. $keyword.'</strong>"'.' tidak dapat ditemukan.');
			}
			else {
				$this->Session->setFlash('Data ditemukan dengan keyword: "<strong>'.' '. $keyword.'</strong>"');
			}
			$this->set('keyword', $keyword);
			$this->data = null;
			}
		}





/**  * delete method  *  * @throws NotFoundException  * @param string $id  *
@return void  */     public function delete($id = null) {
$this->Event->id = $id;         if (!$this->Event->exists()) {
throw new NotFoundException(__('Invalid event'));         }
$this->request->allowMethod('post', 'delete');         if
($this->Event->delete()) {             $this->Session->setFlash(__('The event
has been deleted.'));         } else {
$this->Session->setFlash(__('The event could not be deleted. Please, try
again.'));         }         return $this->redirect(array('action' =>
'index'));     } }
