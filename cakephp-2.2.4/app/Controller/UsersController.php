<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

    public function beforeFilter() {
    	$this->Auth->allow('add') ;
    	$this->Auth->allow('home') ;
    }
/**
 * index method
 *
 * @return void
 */
    public function login() {
         $this->layout = "login" ;
          if($this->request->is('post')) {

              if($this->Auth->login()) {
              	 $id = $this->Auth->user('id') ;
              	 $staffid = $this->User->query("SELECT staff_id FROM staff,users WHERE users.id = staff.user_id AND users.id = $id")[0]['staff']['staff_id'] ;
                 $this->Session->write('User.staffid', $staffid) ; 
                if ($this->User->query("SELECT role FROM users WHERE users.id = $id")[0]['users']['role']) {
                	$this->redirect(array('controller'=>'Staff', 'action'=>'index')) ;
                 
                } else {
                    $this->redirect(array('controller'=>'Projects', 'action'=>'index')) ;
                   
                }   
              
              } else {

              	$this->Session->setFlash('Invalid Username or Password') ;
              }

          }



    }

    public function logout(){
        
       $this->Auth->logout() ;
       $this->redirect(array('action' => 'index'));


    }


	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

	public function home() {
          $this->layout ='index' ;

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			$this->request->data['User']['password'] =AuthComponent::password($this->request->data['User']['password']) ;
			$this->request->data['User']['role'] = 1 ;
			
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('User Saved') ;
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('Edited') ;
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
				$this->Session->setFlash('Deleted') ;
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
