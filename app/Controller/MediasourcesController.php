<?php
App::uses('AppController', 'Controller');
/**
 * Mediasources Controller
 *
 * @property Mediasource $Mediasource
 * @property PaginatorComponent $Paginator
 */
class MediasourcesController extends AppController {

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
		$this->Mediasource->recursive = 0;
		$this->set('mediasources', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mediasource->exists($id)) {
			throw new NotFoundException(__('Invalid mediasource'));
		}
		$options = array('conditions' => array('Mediasource.' . $this->Mediasource->primaryKey => $id));
		$this->set('mediasource', $this->Mediasource->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mediasource->create();
			if ($this->Mediasource->save($this->request->data)) {
				$this->Session->setFlash(__('The mediasource has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mediasource could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$msNetworks = $this->Mediasource->MsNetwork->find('list');
		$this->set(compact('msNetworks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Mediasource->id = $id;
		if (!$this->Mediasource->exists($id)) {
			throw new NotFoundException(__('Invalid mediasource'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Mediasource->save($this->request->data)) {
				$this->Session->setFlash(__('The mediasource has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mediasource could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Mediasource.' . $this->Mediasource->primaryKey => $id));
			$this->request->data = $this->Mediasource->find('first', $options);
		}
		$msNetworks = $this->Mediasource->MsNetwork->find('list');
		$this->set(compact('msNetworks'));
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
		$this->Mediasource->id = $id;
		if (!$this->Mediasource->exists()) {
			throw new NotFoundException(__('Invalid mediasource'));
		}
		if ($this->Mediasource->delete()) {
			$this->Session->setFlash(__('Mediasource deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mediasource was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Mediasource->recursive = 0;
		$this->set('mediasources', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Mediasource->exists($id)) {
			throw new NotFoundException(__('Invalid mediasource'));
		}
		$options = array('conditions' => array('Mediasource.' . $this->Mediasource->primaryKey => $id));
		$this->set('mediasource', $this->Mediasource->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Mediasource->create();
			if ($this->Mediasource->save($this->request->data)) {
				$this->Session->setFlash(__('The mediasource has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mediasource could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$msNetworks = $this->Mediasource->MsNetwork->find('list');
		$this->set(compact('msNetworks'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
        $this->Mediasource->id = $id;
		if (!$this->Mediasource->exists($id)) {
			throw new NotFoundException(__('Invalid mediasource'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Mediasource->save($this->request->data)) {
				$this->Session->setFlash(__('The mediasource has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mediasource could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Mediasource.' . $this->Mediasource->primaryKey => $id));
			$this->request->data = $this->Mediasource->find('first', $options);
		}
		$msNetworks = $this->Mediasource->MsNetwork->find('list');
		$this->set(compact('msNetworks'));
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
		$this->Mediasource->id = $id;
		if (!$this->Mediasource->exists()) {
			throw new NotFoundException(__('Invalid mediasource'));
		}
		if ($this->Mediasource->delete()) {
			$this->Session->setFlash(__('Mediasource deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mediasource was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
