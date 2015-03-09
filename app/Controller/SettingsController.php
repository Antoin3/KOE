<?php
App::uses('AppController', 'Controller');
/**
 * Settings Controller
 *
 * @property Setting $Setting
 * @property PaginatorComponent $Paginator
 */
class SettingsController extends AppController {

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
		$this->Setting->recursive = 0;
		$this->set('settings', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Setting->exists($id)) {
			throw new NotFoundException(__('Invalid setting'));
		}
		$options = array('conditions' => array('Setting.' . $this->Setting->primaryKey => $id));
		$this->set('setting', $this->Setting->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Setting->create();
			if ($this->Setting->save($this->request->data)) {
				$this->Session->setFlash(__('The setting has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The setting could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$raspberries = $this->Setting->Raspberry->find('list');
		$mediasources = $this->Setting->Mediasource->find('list');
		$passwords = $this->Setting->Password->find('list');
		$configRaspberries = $this->Setting->ConfigRaspberry->find('list');
		$guisettings = $this->Setting->Guisetting->find('list');
		$sources = $this->Setting->Source->find('list');
		$this->set(compact('raspberries', 'mediasources', 'passwords', 'configRaspberries', 'guisettings', 'sources'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Setting->id = $id;
		if (!$this->Setting->exists($id)) {
			throw new NotFoundException(__('Invalid setting'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Setting->save($this->request->data)) {
				$this->Session->setFlash(__('The setting has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The setting could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Setting.' . $this->Setting->primaryKey => $id));
			$this->request->data = $this->Setting->find('first', $options);
		}
		$raspberries = $this->Setting->Raspberry->find('list');
		$mediasources = $this->Setting->Mediasource->find('list');
		$passwords = $this->Setting->Password->find('list');
		$configRaspberries = $this->Setting->ConfigRaspberry->find('list');
		$guisettings = $this->Setting->Guisetting->find('list');
		$sources = $this->Setting->Source->find('list');
		$this->set(compact('raspberries', 'mediasources', 'passwords', 'configRaspberries', 'guisettings', 'sources'));
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
		$this->Setting->id = $id;
		if (!$this->Setting->exists()) {
			throw new NotFoundException(__('Invalid setting'));
		}
		if ($this->Setting->delete()) {
			$this->Session->setFlash(__('Setting deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Setting was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Setting->recursive = 0;
		$this->set('settings', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Setting->exists($id)) {
			throw new NotFoundException(__('Invalid setting'));
		}
		$options = array('conditions' => array('Setting.' . $this->Setting->primaryKey => $id));
		$this->set('setting', $this->Setting->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Setting->create();
			if ($this->Setting->save($this->request->data)) {
				$this->Session->setFlash(__('The setting has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The setting could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$raspberries = $this->Setting->Raspberry->find('list');
		$mediasources = $this->Setting->Mediasource->find('list');
		$passwords = $this->Setting->Password->find('list');
		$configRaspberries = $this->Setting->ConfigRaspberry->find('list');
		$guisettings = $this->Setting->Guisetting->find('list');
		$sources = $this->Setting->Source->find('list');
		$this->set(compact('raspberries', 'mediasources', 'passwords', 'configRaspberries', 'guisettings', 'sources'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
        $this->Setting->id = $id;
		if (!$this->Setting->exists($id)) {
			throw new NotFoundException(__('Invalid setting'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Setting->save($this->request->data)) {
				$this->Session->setFlash(__('The setting has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The setting could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Setting.' . $this->Setting->primaryKey => $id));
			$this->request->data = $this->Setting->find('first', $options);
		}
		$raspberries = $this->Setting->Raspberry->find('list');
		$mediasources = $this->Setting->Mediasource->find('list');
		$passwords = $this->Setting->Password->find('list');
		$configRaspberries = $this->Setting->ConfigRaspberry->find('list');
		$guisettings = $this->Setting->Guisetting->find('list');
		$sources = $this->Setting->Source->find('list');
		$this->set(compact('raspberries', 'mediasources', 'passwords', 'configRaspberries', 'guisettings', 'sources'));
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
		$this->Setting->id = $id;
		if (!$this->Setting->exists()) {
			throw new NotFoundException(__('Invalid setting'));
		}
		if ($this->Setting->delete()) {
			$this->Session->setFlash(__('Setting deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Setting was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
