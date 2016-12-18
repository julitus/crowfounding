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

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
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
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
		$countries = $this->User->Country->find('list', array('conditions' => array('Country.active' => true)));
		$states = array();
		$cities = array();
		$this->set(compact('countries', 'states', 'cities'));
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
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
			$this->request->data['User']['birthdate'] = date('d-m-Y', strtotime($this->request->data['User']['birthdate']));
		}
		$countries = $this->User->Country->find('list', array('conditions' => array('OR' => array('Country.id' => $this->request->data['User']['country_id'], 'Country.active' => true))));
		$states = $this->User->State->find('list', array('conditions' => array('State.country_id' => $this->request->data['User']['country_id']), 'order' => array('State.name' => 'ASC')));
		$cities = $this->User->City->find('list', array('conditions' => array('City.state_id' => $this->request->data['User']['state_id']), 'order' => array('City.name' => 'ASC')));
		$this->set(compact('countries', 'states', 'cities'));
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
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function getStates()
    {
        $data = array();
        if ($this->request->is('ajax')) {       
            $data = $this->User->State->find('list', array('conditions' => array('State.country_id' => $this->request->data['country_id']), 'order' => array('State.name' => 'ASC')));
        }
        $this->response->body(json_encode($data));
        $this->autoRender = false;
        return $this->response;
    }

    public function getCities()
    {
        $data = array();
        if ($this->request->is('ajax')) {       
            $data = $this->User->City->find('list', array('conditions' => array('City.state_id' => $this->request->data['state_id']), 'order' => array('City.name' => 'ASC')));
        }
        $this->response->body(json_encode($data));
        $this->autoRender = false;
        return $this->response;
    }

}
