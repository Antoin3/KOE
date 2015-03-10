<?php
App::uses('AppController', 'Controller');
/**
 * ConfigRaspberries Controller
 *
 * @property ConfigRaspberry $ConfigRaspberry
 * @property PaginatorComponent $Paginator
 */
class ConfigRaspberriesController extends AppController {

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
		$this->ConfigRaspberry->recursive = 0;
		$this->set('configRaspberries', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ConfigRaspberry->exists($id)) {
			throw new NotFoundException(__('Invalid config raspberry'));
		}
		$options = array('conditions' => array('ConfigRaspberry.' . $this->ConfigRaspberry->primaryKey => $id));
		$this->set('configRaspberry', $this->ConfigRaspberry->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ConfigRaspberry->create();
			if ($this->ConfigRaspberry->save($this->request->data)) {
				$this->Session->setFlash(__('The config raspberry has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The config raspberry could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$crOverscans = $this->ConfigRaspberry->CrOverscan->find('list');
		$crLicenses = $this->ConfigRaspberry->CrLicense->find('list');
		$crOverclockings = $this->ConfigRaspberry->CrOverclocking->find('list');
		$crMemories = $this->ConfigRaspberry->CrMemory->find('list');
		$this->set(compact('crOverscans', 'crLicenses', 'crOverclockings', 'crMemories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->ConfigRaspberry->id = $id;
		if (!$this->ConfigRaspberry->exists($id)) {
			throw new NotFoundException(__('Invalid config raspberry'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ConfigRaspberry->save($this->request->data)) {
				$this->Session->setFlash(__('The config raspberry has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The config raspberry could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('ConfigRaspberry.' . $this->ConfigRaspberry->primaryKey => $id));
			$this->request->data = $this->ConfigRaspberry->find('first', $options);
		}
		$crOverscans = $this->ConfigRaspberry->CrOverscan->find('list');
		$crLicenses = $this->ConfigRaspberry->CrLicense->find('list');
		$crOverclockings = $this->ConfigRaspberry->CrOverclocking->find('list');
		$crMemories = $this->ConfigRaspberry->CrMemory->find('list');
		$this->set(compact('crOverscans', 'crLicenses', 'crOverclockings', 'crMemories'));
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
		$this->ConfigRaspberry->id = $id;
		if (!$this->ConfigRaspberry->exists()) {
			throw new NotFoundException(__('Invalid config raspberry'));
		}
		if ($this->ConfigRaspberry->delete()) {
			$this->Session->setFlash(__('Config raspberry deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Config raspberry was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ConfigRaspberry->recursive = 0;
		$this->set('configRaspberries', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ConfigRaspberry->exists($id)) {
			throw new NotFoundException(__('Invalid config raspberry'));
		}
		$options = array('conditions' => array('ConfigRaspberry.' . $this->ConfigRaspberry->primaryKey => $id));
		$this->set('configRaspberry', $this->ConfigRaspberry->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ConfigRaspberry->create();
			if ($this->ConfigRaspberry->save($this->request->data)) {
				$this->Session->setFlash(__('The config raspberry has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The config raspberry could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$crOverscans = $this->ConfigRaspberry->CrOverscan->find('list');
		$crLicenses = $this->ConfigRaspberry->CrLicense->find('list');
		$crOverclockings = $this->ConfigRaspberry->CrOverclocking->find('list');
		$crMemories = $this->ConfigRaspberry->CrMemory->find('list');
		$this->set(compact('crOverscans', 'crLicenses', 'crOverclockings', 'crMemories'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
        $this->ConfigRaspberry->id = $id;
		if (!$this->ConfigRaspberry->exists($id)) {
			throw new NotFoundException(__('Invalid config raspberry'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ConfigRaspberry->save($this->request->data)) {
				$this->Session->setFlash(__('The config raspberry has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The config raspberry could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('ConfigRaspberry.' . $this->ConfigRaspberry->primaryKey => $id));
			$this->request->data = $this->ConfigRaspberry->find('first', $options);
		}
		$crOverscans = $this->ConfigRaspberry->CrOverscan->find('list');
		$crLicenses = $this->ConfigRaspberry->CrLicense->find('list');
		$crOverclockings = $this->ConfigRaspberry->CrOverclocking->find('list');
		$crMemories = $this->ConfigRaspberry->CrMemory->find('list');
		$this->set(compact('crOverscans', 'crLicenses', 'crOverclockings', 'crMemories'));
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
		$this->ConfigRaspberry->id = $id;
		if (!$this->ConfigRaspberry->exists()) {
			throw new NotFoundException(__('Invalid config raspberry'));
		}
		if ($this->ConfigRaspberry->delete()) {
			$this->Session->setFlash(__('Config raspberry deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Config raspberry was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
