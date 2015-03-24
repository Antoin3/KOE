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
		//Tableau contenant les informations des fichiers de configurations par défaut
		$default = array( 
							(int) 0 => array(
								'Plugin' => array(
										'name' => 'Ceci est un plugin',
										'description' => 'Genre',
										'path' => './files/default/plugins/',
										'extension' => 'py',
										'raspberries_id' => $id
					)));

		if ($this->Raspberry->exists($id)) {

			//Si on cible un OE en particulier, 
			$plugins = $this->Plugin->find('all',array('Plugins.raspberries_id' => $id));
			$options = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $id));
			$raspberry = $this->Raspberry->find('first', $options);

			$name = "Plugins de ".$raspberry['Raspberry']['name'];

		} else {
			$id = 'all';
			$name = 'Plugins généraux';
			$plugins = $default;
		}

		$this->Plugin->recursive = 0;

		$this->set('plugins', $plugins);
		$this->set('id', $id);
		$this->set('name', $name);
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
	public function add() {
		if ($this->request->is('post')) {
			$this->Plugin->create();
			if ($this->Plugin->save($this->request->data)) {
				$connection = $this->connexionSSH($this->Raspberry->address,'root','openelec');
				if ($this->uploadPlugin($connection,'source',$this->request->data['Plugin']['filename'])) {
					$this->Session->setFlash(__('The plugin has been saved'), 'flash/success');
					$this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash(__('The plugin could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$raspberries = $this->Plugin->Raspberry->find('list');
		$this->set(compact('raspberries'));
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
		if ($this->Plugin->delete()) {
			$this->Session->setFlash(__('Plugin deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Plugin was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}

/**
 * upload plugin method
 *
 * @param Ressource $connection
 * @param string $file
 * @param string $filename
 * @return boolean
 */
public function uploadPlugin($connection, $file, $filename)
	{
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
                			return true;
                		}
                }
}
}
