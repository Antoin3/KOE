<?php
App::uses('AppController', 'Controller');
/**
 * Raspberries Controller
 *
 * @property Raspberry $Raspberry
 * @property PaginatorComponent $Paginator
 */
class RaspberriesController extends AppController {

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
		$this->Raspberry->recursive = 0;
		$this->set('raspberries', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Raspberry->exists($id)) {
			throw new NotFoundException(__('Invalid raspberry'));
		}
		$options = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $id));
		$this->set('raspberry', $this->Raspberry->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Raspberry->create();
			if ($this->Raspberry->save($this->request->data)) {
				$this->Session->setFlash(__('The raspberry has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The raspberry could not be saved. Please, try again.'), 'flash/error');
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
        $this->Raspberry->id = $id;
		if (!$this->Raspberry->exists($id)) {
			throw new NotFoundException(__('Invalid raspberry'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Raspberry->save($this->request->data)) {
				$this->Session->setFlash(__('The raspberry has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The raspberry could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $id));
			$this->request->data = $this->Raspberry->find('first', $options);
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
		$this->Raspberry->id = $id;
		if (!$this->Raspberry->exists()) {
			throw new NotFoundException(__('Invalid raspberry'));
		}
		if ($this->Raspberry->delete()) {
			$this->Session->setFlash(__('Raspberry deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Raspberry was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Raspberry->recursive = 0;
		$this->set('raspberries', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Raspberry->exists($id)) {
			throw new NotFoundException(__('Invalid raspberry'));
		}
		$options = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $id));
		$this->set('raspberry', $this->Raspberry->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Raspberry->create();
			if ($this->Raspberry->save($this->request->data)) {
				$this->Session->setFlash(__('The raspberry has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The raspberry could not be saved. Please, try again.'), 'flash/error');
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
        $this->Raspberry->id = $id;
		if (!$this->Raspberry->exists($id)) {
			throw new NotFoundException(__('Invalid raspberry'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Raspberry->save($this->request->data)) {
				$this->Session->setFlash(__('The raspberry has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The raspberry could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $id));
			$this->request->data = $this->Raspberry->find('first', $options);
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
		$this->Raspberry->id = $id;
		if (!$this->Raspberry->exists()) {
			throw new NotFoundException(__('Invalid raspberry'));
		}
		if ($this->Raspberry->delete()) {
			$this->Session->setFlash(__('Raspberry deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Raspberry was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}

/**
 *settings method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function settings($id = null) {
		if (!$this->Raspberry->exists($id)) {
			throw new NotFoundException(__('Invalid raspberry'));
		}
		$options = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $id));
		$this->set('raspberry', $this->Raspberry->find('first', $options));
	}

/**
 *gs form method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function gs_form($id = null) {
		if (!$this->Raspberry->exists($id)) {
			throw new NotFoundException(__('Invalid raspberry'));
		}
		$options = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $id));
		$this->set('raspberry', $this->Raspberry->find('first', $options));
	}

	/**
 * gs_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function gs_edit($id = null) {
	$this->Raspberry->id = $id;
		if (!$this->Raspberry->exists($id)) {
			throw new NotFoundException(__('Invalid raspberry'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			//Récupération de l'address
			$options = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $id));
			$raspberry = $this->Raspberry->find('first', $options);

			$filename = '\\\\'.$raspberry['Raspberry']['address'].'\Userdata\guisettings.xml';
			if(file_exists($filename))
			{
				//Génération du futur ancien XML en DOMDocument
				$olddom = new XmlDOM();
				$olddom->preserveWhiteSpace = FALSE;
				$olddom->load($filename);

				//Génération du XML dont les valeurs remplaceront les nouvelles
				$newdom = new XmlDOM();
				$newdom->chargeXML($this->request->data);

				//On remplace les valeurs de $olddom par celles de $newdom
				$olddom->replaceDOM($newdom);

				if ($olddom->save($filename))
				{ 
					$this->Session->setFlash(__('The new guisetting has been saved'), 'flash/success');
					$this->redirect(array('action' => 'index'));
				}
				else {
					$this->Session->setFlash(__('Error when modifying '.$filename), 'flash/error');
				}
			} else {
				$this->Session->setFlash(__($filename.' not exists'), 'flash/error');
			}
		}
	}

}
