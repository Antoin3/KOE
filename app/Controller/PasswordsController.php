<?php
App::uses('AppController', 'Controller');
/**
 * Passwords Controller
 *
 * @property Password $Password
 * @property PaginatorComponent $Paginator
 */
class PasswordsController extends AppController {

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
		$this->Password->recursive = 0;
		$this->set('passwords', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Password->exists($id)) {
			throw new NotFoundException(__('Invalid password'));
		}
		$options = array('conditions' => array('Password.' . $this->Password->primaryKey => $id));
		$this->set('password', $this->Password->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Password->create();
			if ($this->Password->save($this->request->data)) {
				$this->Session->setFlash(__('The password has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The password could not be saved. Please, try again.'), 'flash/error');
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
        $this->Password->id = $id;
		if (!$this->Password->exists($id)) {
			throw new NotFoundException(__('Invalid password'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Password->save($this->request->data)) {
				$this->Session->setFlash(__('The password has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The password could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Password.' . $this->Password->primaryKey => $id));
			$this->request->data = $this->Password->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Password->id = $id;
		if (!$this->Password->exists()) {
			throw new NotFoundException(__('Invalid password'));
		}
		if ($this->Password->delete()) {
			$this->Session->setFlash(__('Password deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Password was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Password->recursive = 0;
		$this->set('passwords', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Password->exists($id)) {
			throw new NotFoundException(__('Invalid password'));
		}
		$options = array('conditions' => array('Password.' . $this->Password->primaryKey => $id));
		$this->set('password', $this->Password->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Password->create();
			if ($this->Password->save($this->request->data)) {
				$this->Session->setFlash(__('The password has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The password could not be saved. Please, try again.'), 'flash/error');
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
        $this->Password->id = $id;
		if (!$this->Password->exists($id)) {
			throw new NotFoundException(__('Invalid password'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Password->save($this->request->data)) {
				$this->Session->setFlash(__('The password has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The password could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Password.' . $this->Password->primaryKey => $id));
			$this->request->data = $this->Password->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Password->id = $id;
		if (!$this->Password->exists()) {
			throw new NotFoundException(__('Invalid password'));
		}
		if ($this->Password->delete()) {
			$this->Session->setFlash(__('Password deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Password was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
