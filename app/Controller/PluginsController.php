<?php
App::uses('AppController', 'Controller');
/**
 * Plugins Controller
 *
 * @property Plugin $Plugin
 * @property PaginatorComponent $Paginator
 */
class PluginsController extends AppController {

public $uses = array('Plugin','Setting','Raspberry');

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
	public function index($id = null) {
		$this->Plugin->recursive = 0;

		$plugins = $this->Plugin->find('all',array('Plugins.raspberries_id' => $id));
		$raspberry = $this->Raspberry->find('first', array('Raspberry.' . $this->Raspberry->primaryKey => $id));

		$this->set('plugins', $plugins);
		$this->set('raspberry',$raspberry);

		if ($this->request->is('post') || $this->request->is('put')) {
			$options = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $id));
			$raspberry = $this->Raspberry->find('first', $options);
			$this->set('raspberry',$raspberry);
			if ($this->request->is('post')) {
				$this->Plugin->create();
				$tmp = './files/plugins/';
				$this->request->data['Plugin']['filename'] = substr($this->request->data['Plugin']['file']['name'],0,strripos($this->request->data['Plugin']['file']['name'], '.'));
				if ($this->Plugin->save($this->request->data)) {
					if (move_uploaded_file($this->request->data['Plugin']['file']['tmp_name'], $tmp.$this->request->data['Plugin']['file']['name'])) {
						$connection = $this->connexionSSH($raspberry['Raspberry']['address'],'root','openelec');
						if ($this->uploadPlugin($connection,$tmp.$this->request->data['Plugin']['file']['name'],$this->request->data['Plugin']['file']['name'])) {
							$this->Session->setFlash(__('The plugin has been saved'), 'flash/success');
							$this->redirect(array('action' => 'index',$id));
						} else {
							$this->Session->setFlash(__('Error when uploading '.$this->request->data['Plugin']['file']['name']), 'flash/error');
						}
					} else {
						$this->Session->setFlash(__('Error when moving '.$this->request->data['Plugin']['file']['name']), 'flash/error');
					}
				} else {
					$this->Session->setFlash(__('The plugin could not be saved. Please, try again.'), 'flash/error');
				}
			}
		}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Plugin->exists($id)) {
			throw new NotFoundException(__('Invalid plugin'));
		}
		$options = array('conditions' => array('Plugin.' . $this->Plugin->primaryKey => $id));
		$this->set('plugin', $this->Plugin->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		if ($this->request->is('post')) {
			$this->Plugin->create();
			$tmp = './files/plugins/';
			if ($this->Plugin->save($this->request->data)) {
				$this->Session->setFlash(__('The plugin has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plugin could not be saved. Please, try again.'), 'flash/error');
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
        $this->Plugin->id = $id;
		if (!$this->Plugin->exists($id)) {
			throw new NotFoundException(__('Invalid plugin'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Plugin->save($this->request->data)) {
				$this->Session->setFlash(__('The plugin has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plugin could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Plugin.' . $this->Plugin->primaryKey => $id));
			$this->request->data = $this->Plugin->find('first', $options);
		}
		$raspberries = $this->Plugin->Raspberry->find('list');
		$this->set(compact('raspberries'));
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
		$this->Plugin->id = $id;
		if (!$this->Plugin->exists()) {
			throw new NotFoundException(__('Invalid plugin'));
		}

		$options = array('conditions' => array('Plugin.' . $this->Plugin->primaryKey => $id));
		$plugin = $this->Plugin->find('first', $options); 

		$optionsrasp = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $plugin['Plugin']['raspberries_id']));
		$raspberry = $this->Raspberry->find('first', $optionsrasp);

		if ($this->Plugin->delete()) {
			$connection = $this->connexionSSH($raspberry['Raspberry']['address'],'root','openelec');
			$this->execSSH($connection,'rm -rf '.$plugin['Plugin']['path'].$plugin['Plugin']['filename']);
			$this->Session->setFlash(__('Plugin deleted'), 'flash/success');
			$this->redirect(array('action' => 'index',$plugin['Plugin']['raspberries_id']));
		}
		$this->Session->setFlash(__('Plugin was not deleted'), 'flash/error');
	}

/**
 * upload plugin method
 *
 * @param Ressource $connection
 * @param string $file
 * @param string $filename
 * @return boolean
 */
	public function uploadPlugin($connection, $file, $filename) {
	                $result = ssh2_scp_send($connection, $file,"/storage/.kodi/addons/" . $filename, 0644);
	                
	                if (!$result) {
	                   die("Failed to execute command scp send");
	                }
	                else {  
	                		$result = ssh2_exec($connection,"cd /storage/.kodi/addons/ && unzip /storage/.kodi/addons/" . $filename . " && rm " . $filename);
	                		stream_set_blocking($result, true);
	                		$unzip = stream_get_contents($result);
	                		if (!$unzip) {
	                   			die("Failed to execute command unzip");
	                		}
	                		else{
	                			$this->execSSH($connection,'reboot');
	                			return true;
	                		}
	                }
	}
}
