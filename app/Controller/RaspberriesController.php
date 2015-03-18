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
				$id = $this->Raspberry->id;
				$address = $this->request->data['Raspberry']['address'];
				$files = array(
								'guisettings' => array(
									'name' => 'guisettings', 
									'description' => 'description guisettings', 
									'path' => '\Userdata\\', 
									'extension' => 'xml', 
									'raspberries_id' => $id),
								'advancedsettings' => array(
									'name' => 'advancedsettings', 
									'description' => 'description advancedsettings', 
									'path' => '\Userdata\\', 
									'extension' => 'xml', 
									'raspberries_id' => $id),
								'mediasources' => array(
									'name' => 'mediasources', 
									'description' => 'description mediasources', 
									'path' => '\Userdata\\', 
									'extension' => 'xml', 
									'raspberries_id' => $id),
								'sources' => array(
									'name' => 'sources', 
									'description' => 'description sources', 
									'path' => '\Userdata\\', 
									'extension' => 'xml', 
									'raspberries_id' => $id),
								'passwords' => array(
									'name' => 'passwords', 
									'description' => 'description passwords', 
									'path' => '\Userdata\\', 
									'extension' => 'xml', 
									'raspberries_id' => $id),
								'oe_settings' => array(
									'name' => 'oe_settings', 
									'description' => 'description oe_settings', 
									'path' => '\Userdata\addon_data\service.openelec.settings\\', 
									'extension' => 'xml', 
									'raspberries_id' => $id)
							);

				$settings = array();
				if ($this->request->data['Raspberry']['actualsettings']) {
					foreach ($files as $filename => $file) {
						$pathfile = '\\\\'.$address.$file['path'].$file['name'].'.'.$file['extension'];
						if(file_exists($pathfile)) {
							$settings[$filename] = $file;
						}
					}
				} else {
					$connection = $this->connexionSSH($address,'root','openelec');
					$this->execSSH($connection,'systemctl stop kodi');
					sleep(2);
					foreach ($files as $filename => $file) {
						if (!$this->movefiles('./files/default/','\\\\'.$address,$file)) {
								$this->Session->setFlash(__('The raspberry could not be saved. Please, try again.'), 'flash/error');
						}
					}
						$this->execSSH($connection,'systemctl start kodi');
						sleep(1);
						$this->execSSH($connection,'systemctl restart kodi');
						$settings = $files;
					}
				foreach ($settings as $setting => $set) {
							$set['path'] = '\\\\'.$address.$set['path'];
							$this->Setting->create();
							if (!$this->Setting->save($set)) {
								$this->Session->setFlash(__('The settings '.$setting.' could not be saved. Please, try again.'), 'flash/error');
								exit();
							}
						}
				sleep(1);
				$this->Session->setFlash(__('The raspberry has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
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
	public function delete($id = null, $cascade = true) {
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
				$this->Session->setFlash(__('Raspberry was not deleted (Raspberry)'), 'flash/error');
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
			$options2 = array('conditions' => array('Setting.raspberries_id' => $id));
			$this->set('setting', $this->Setting->find('all',$options2));
			$files = $this->Setting->find('all', $options2);
		} else {
			// $options = array('conditions' => array('Raspberry.role' => 'master'));
			// $this->set('raspberry', $this->Raspberry->find('first', $options));
			$raspberry = $this->Raspberry->find('all');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if (array_key_exists('backup', $this->request->data)){
				$source = '\\\\'.$raspberry['Raspberry']['address'];
				$destination = './files/'.$raspberry['Raspberry']['name'];
			}
			elseif (array_key_exists('restore', $this->request->data)) {
				$source = './files/'.$raspberry['Raspberry']['name'];
				$destination = '\\\\'.$raspberry['Raspberry']['address'];
				foreach ($files as $filename => &$file) {
					$file['Setting']['path'] = $source.str_replace($destination,"",$file['Setting']['path']);
				 }
			}
			foreach ($files as $filename => $file) {
				if (!$this->movefiles($source,$destination,$file['Setting'])) {
					$this->Session->setFlash(__('Error when saving file(s)'), 'flash/error');
					break;
				}
			}
			$this->Session->setFlash(__('File(s) has been saved'), 'flash/success');
			$this->redirect(array('action' => 'settings', $id));
		}
	}

/**
 *settings method : upload files and save them
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

	public function movefiles($source,$destination, $file) {
			$pathfile = $file['path'].$file['name'].'.'.$file['extension'];
			$newpathfile = str_replace($source,"",$file['path']);
			$newpathfile = (substr($destination,0,2) == '\\\\') ? str_replace('/','\\',$newpathfile) : str_replace('\\','/',$newpathfile);
			if(file_exists($pathfile)) {
            	$movingfile = file_get_contents($pathfile);
				if ($file['name'] == 'oe_settings')
				{
					$dom = new DOMDocument();
            		$dom->preserveWhiteSpace = false;
					$dom->load($pathfile);
					if ($dom->getElementsByTagName("hostname")->item(0)->nodeValue == '') {
						$dom->getElementsByTagName("hostname")->item(0)->nodeValue = $this->request->data['Raspberry']['name'];
					}
					$movingfile = $dom->saveXML();
				}
				if (!file_exists($destination.$newpathfile)) {
					if (!mkdir($destination.$newpathfile,0777,true)) {
						$this->Session->setFlash(__('Error when saving '.$file['name'].'. Please, try again.'), 'flash/error');
						exit(0);
					}
				}
				if (!file_put_contents($destination.$newpathfile.$file['name'].'.'.$file['extension'],$movingfile)) {
					$this->Session->setFlash(__('Error when saving '.$file['name'].'. Please, try again.'), 'flash/error');
					exit(0);
				}
			} else $this->Session->setFlash(__('Error when saving '.$file['name'].'. Please, try again.'), 'flash/error');
			return 1;
	}

}
