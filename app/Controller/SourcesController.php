<?php
App::uses('AppController', 'Controller');
/**
 * Sources Controller
 *
 * @property Source $Source
 * @property PaginatorComponent $Paginator
 */
class SourcesController extends AppController {

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
		$this->Source->recursive = 0;
		$this->set('sources', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Source->exists($id)) {
			throw new NotFoundException(__('Invalid source'));
		}
		$options = array('conditions' => array('Source.' . $this->Source->primaryKey => $id));
		$this->set('source', $this->Source->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Source->create();
			if ($this->Source->save($this->request->data)) {
				$this->Session->setFlash(__('The source has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The source could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$sProgramms = $this->Source->SProgramm->find('list');
		$sMusics = $this->Source->SMusic->find('list');
		$sVideos = $this->Source->SVideo->find('list');
		$sPictures = $this->Source->SPicture->find('list');
		$sFiles = $this->Source->SFile->find('list');
		$this->set(compact('sProgramms', 'sMusics', 'sVideos', 'sPictures', 'sFiles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Source->id = $id;
		if (!$this->Source->exists($id)) {
			throw new NotFoundException(__('Invalid source'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Source->save($this->request->data)) {
				$this->Session->setFlash(__('The source has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The source could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Source.' . $this->Source->primaryKey => $id));
			$this->request->data = $this->Source->find('first', $options);
		}
		$sProgramms = $this->Source->SProgramm->find('list');
		$sMusics = $this->Source->SMusic->find('list');
		$sVideos = $this->Source->SVideo->find('list');
		$sPictures = $this->Source->SPicture->find('list');
		$sFiles = $this->Source->SFile->find('list');
		$this->set(compact('sProgramms', 'sMusics', 'sVideos', 'sPictures', 'sFiles'));
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
		$this->Source->id = $id;
		if (!$this->Source->exists()) {
			throw new NotFoundException(__('Invalid source'));
		}
		if ($this->Source->delete()) {
			$this->Session->setFlash(__('Source deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Source was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Source->recursive = 0;
		$this->set('sources', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Source->exists($id)) {
			throw new NotFoundException(__('Invalid source'));
		}
		$options = array('conditions' => array('Source.' . $this->Source->primaryKey => $id));
		$this->set('source', $this->Source->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Source->create();
			if ($this->Source->save($this->request->data)) {
				$this->Session->setFlash(__('The source has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The source could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$sProgramms = $this->Source->SProgramm->find('list');
		$sMusics = $this->Source->SMusic->find('list');
		$sVideos = $this->Source->SVideo->find('list');
		$sPictures = $this->Source->SPicture->find('list');
		$sFiles = $this->Source->SFile->find('list');
		$this->set(compact('sProgramms', 'sMusics', 'sVideos', 'sPictures', 'sFiles'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
        $this->Source->id = $id;
		if (!$this->Source->exists($id)) {
			throw new NotFoundException(__('Invalid source'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Source->save($this->request->data)) {
				$this->Session->setFlash(__('The source has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The source could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Source.' . $this->Source->primaryKey => $id));
			$this->request->data = $this->Source->find('first', $options);
		}
		$sProgramms = $this->Source->SProgramm->find('list');
		$sMusics = $this->Source->SMusic->find('list');
		$sVideos = $this->Source->SVideo->find('list');
		$sPictures = $this->Source->SPicture->find('list');
		$sFiles = $this->Source->SFile->find('list');
		$this->set(compact('sProgramms', 'sMusics', 'sVideos', 'sPictures', 'sFiles'));
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
		$this->Source->id = $id;
		if (!$this->Source->exists()) {
			throw new NotFoundException(__('Invalid source'));
		}
		if ($this->Source->delete()) {
			$this->Session->setFlash(__('Source deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Source was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
