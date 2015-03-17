<?php
App::uses('AppController', 'Controller');
/**
 * Raspberries Controller
 *
 * @property Raspberry $Raspberry
 * @property PaginatorComponent $Paginator
 */
class RaspberriesController extends AppController {

public $uses = array('Raspberry','Setting');

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
				$address = $this->request->data['Raspberry']['address'];
				$files = array(
					'guisettings' => array('Interface', $address.'\guisettings.xml'),
					'advancedsettings' => array('Parametres Avancés', $address.'\advancedsettings.xml'),
					'oe_settings' => array('Raspberry', $address.'\addon_data\service.openelec.settings\oe_settings.xml')
					);
				$connection = $this->connexionSSH($address,'root','openelec');
				$this->execSSH($connection,'systemctl stop kodi');
				foreach ($files as $filename=>$file) {
					$dom = new DOMDocument();
		            $dom->preserveWhiteSpace = false;
		            if(file_exists('./files/'.$filename.'.xml')) 
		                {
							$dom->load('./files/'.$filename.'.xml');
							if ($filename == 'oe_settings')
							{
								$dom->getElementsByTagName("hostname")->item(0)->nodeValue = $this->request->data['Raspberry']['name'];
							}
							$settings = array('Setting' => array('name' => $filename, 'description' => $file[0], 'path' => $file[1], 'extension' => 'xml', 'raspberries_id' => $this->Raspberry->id));
							$this->Setting->create();

							if ((!$dom->save('\\\\'.$file[1].$filename.'.xml')) || (!$this->Setting->save($settings))) $this->Session->setFlash(__('Error when saving '.$filename.'. Please, try again.'), 'flash/error');
						}
					}
				sleep(2);
				$this->execSSH($connection,'systemctl start kodi');
				sleep(1);
				$this->execSSH($connection,'systemctl restart kodi');
				sleep(1);
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
		$options = array('conditions' => array('Setting.raspberries_id' => $id));
		$this->Setting->id = $this->Raspberry->find('first', $options);
		if ($this->Setting->delete()) {
			if ($this->Raspberry->delete()) {
				$this->Session->setFlash(__('Raspberry deleted'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			}
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
		if ($this->Raspberry->exists($id)) {
			$options = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $id));
			$this->set('raspberry', $this->Raspberry->find('first', $options));
			$raspberry = $this->Raspberry->find('first', $options);
		} else {
			// $options = array('conditions' => array('Raspberry.role' => 'master'));
			// $this->set('raspberry', $this->Raspberry->find('first', $options));
			$raspberry = $this->Raspberry->find('all');
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			foreach ($raspberry as $rasp) {
				$address = $rasp['Raspberry']['address'];
				$filepath = '\\\\'.$address.'\Userdata\\';
				$files = array(
					'guisettings' => array($address.'\guisettings.xml', 'Interface', 'Blabla1'),
					'advancedsettings' => array($address.'\advancedsettings.xml', 'Parametres Avancés', 'Blabla2'),
					'oe_settings' => array($address.'\addon_data\service.openelec.settings\oe_settings.xml', 'Raspberry', 'Blabla3')
					);
				foreach ($files as $filename=>$file) {
					$dom = new DOMDocument();
		            $dom->preserveWhiteSpace = false;
		            if(file_exists('./files/'.$filename.'.xml')) 
		                {
							$dom->load('./files/'.$filename.'.xml');
						}

						$connection = $this->connexionSSH($address,'root','openelec');
						$this->execSSH($connection,'systemctl stop kodi');
						sleep(2);
						if ($dom->save($filepath.$filename.'.xml'))
						{
							$this->execSSH($connection,'systemctl start kodi');
							sleep(1);
							$this->execSSH($connection,'systemctl restart kodi');
							sleep(1);
						} else {
							$this->Session->setFlash(__('Error when saving '.$filename), 'flash/error');
							exit;
						}
					}
				$this->Session->setFlash(__('New file(s) has been saved'), 'flash/success');
				$this->redirect(array('action' => 'settings', $id));
			}
		}
	            
	}

}
