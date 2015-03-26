<?php
App::uses('AppController', 'Controller');
/**
 * Raspberries Controller
 *
 * @property Raspberry $Raspberry
 * @property PaginatorComponent $Paginator
 */
class RaspberriesController extends AppController {

public $uses = array('Raspberry','Setting','Plugin');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	private $default = array(
				 0 => array(
						'Setting' => array(
							'name' => 'guisettings',
							'description' => 'description guisettings',
							'path' => '/Userdata/',
							'extension' => 'xml',
							'raspberries_id' => ''
				)),
				 1 => array(
					'Setting' => array(
						'name' => 'advancedsettings',
						'description' => 'description advancedsettings',
						'path' => '/Userdata/',
						'extension' => 'xml',
						'raspberries_id' => ''
				)),
				 2 => array(
					'Setting' => array(
						'name' => 'mediasources',
						'description' => 'description mediasources',
						'path' => '/Userdata/',
						'extension' => 'xml',
						'raspberries_id' => ''
				)),
				 3 => array(
					'Setting' => array(
						'name' => 'sources',
						'description' => 'description sources',
						'path' => '/Userdata/',
						'extension' => 'xml',
						'raspberries_id' => ''
				)),
				 4 => array(
					'Setting' => array(
						'name' => 'passwords',
						'description' => 'description passwords',
						'path' => '/Userdata/',
						'extension' => 'xml',
						'raspberries_id' => ''
				)),
				 5 => array(
					'Setting' => array(
						'name' => 'oe_settings',
						'description' => 'description oe_settings',
						'path' => '/Userdata/addon_data/service.openelec.settings/',
						'extension' => 'xml',
						'raspberries_id' => ''
				))
			);

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

		if (!is_null($result = exec('ipconfig | find "Adresse IPv4"'))) {
			$host = substr($result, 44);
		}
		else{
			$host = exec('ip addr show dev eth0 | grep inet | awk \'{print $2}\' | cut -d '/' -f 1');
		}

		$options = array('conditions' => array('Raspberry.role' => 'master'));
		$this->set('role', empty($this->Raspberry->find('all',$options)) ? 'master' : 'slave');
		$this->set('host', $host);

		$default = $this->default;

		if ($this->request->is('post')) {
			$address = $this->request->data['Raspberry']['address'];
			$connection = $this->connexionSSH($address,'root','openelec');

			//Cas (notamment) ou on garde les settings par defaut
			if ($this->request->data['Raspberry']['actualsettings']) $this->request->data['Raspberry']['name'] = trim($this->execSSH($connection,'cat /etc/hostname'));

			$this->Raspberry->create();
			if ($this->Raspberry->save($this->request->data)) {
				$id = $this->Raspberry->id;

			foreach ($default as $defaultname => &$def) {
				$def['Setting']['raspberries_id'] = $id;
			}

				//Tableau qui servira a créer les informations des fichiers de configurations dans la base
				$settings = array();

				//Cas ou on veut garder les configurations actuelles de l'OE
				if ($this->request->data['Raspberry']['actualsettings']) {
					foreach ($default as $filename => $file) {
						$pathfile = '\\\\'.$address.$file['Setting']['path'].$file['Setting']['name'].'.'.$file['Setting']['extension'];
						if(file_exists($pathfile)) {
							$settings[] = $file;
						}
					}

				} else {

					//Cas ou on veut parametrer les configurations par défaut a l'OE
					$this->execSSH($connection,'systemctl stop kodi');
					sleep(2);

					//On charge tout les fichiers par défaut dans l'OE
					foreach ($default as $filename => $file) {
						$file['Setting']['path'] = './files/default'.$file['Setting']['path'];
						if (!$this->movefiles('./files/default','\\\\'.$address,$file['Setting'])) {
								$this->Session->setFlash(__('The raspberry could not be saved. Please, try again.'), 'flash/error');
						}
					}

						$this->execSSH($connection,'systemctl start kodi');
						sleep(1);
						$this->execSSH($connection,'systemctl restart kodi');
						$settings = $default;
				}
				
				//On enregistre les données dans la base
				foreach ($settings as $setting => $set) {

					$set['Setting']['path'] = '\\\\'.$address.str_replace('/','\\',$set['Setting']['path']);

					$this->Setting->create();
					if (!$this->Setting->save($set)) {
						$this->Session->setFlash(__('The settings '.$setting.' could not be saved. Please, try again.'), 'flash/error');
						exit();
					}
				}

				sleep(2);
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

		$options = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $id));
		$raspberry = $this->Raspberry->find('first', $options);

			if ($this->Raspberry->delete()) {
				//Si un dossier de sauvegarde des parametres de configuration de l'OE existe, il sera supprimé
				if (is_dir('./files/'.$raspberry['Raspberry']['name'])) $this->rrmdir('./files/'.$raspberry['Raspberry']['name']);
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
		
		$default = $this->default;

		foreach ($default as $defaultname => &$def) {
				$def['Setting']['raspberries_id'] = $id;
				$def['Setting']['path'] = ($id == 'all') ? './files/default/'.$def['Setting']['path'] : $def['Setting']['path'];
		}

		if ($this->Raspberry->exists($id)) {

			//Si on cible un OE en particulier, 
			$this->Raspberry->id = $id;
			$options = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $id));
			$raspberry = $this->Raspberry->find('first', $options);

			$optionsfiles = array('conditions' => array('Setting.raspberries_id' => $id));

			$files = $this->Setting->find('all', $optionsfiles);
			$raspberry = $this->Raspberry->find('first', $options);
			$currentmode = $this->getOverclock($this->connexionSSH($raspberry['Raspberry']['address'],'root','openelec'));

			$id = $raspberry['Raspberry']['id'];
			$name = $raspberry['Raspberry']['name'];

			$this->set('raspberry', $raspberry);
			$this->set('currentmode', $currentmode);


		} else {
			$name = 'Parametres généraux';
			$id = 'all';
			$files = $default;
		}

		$this->set('files',$files);
		$this->set('name',$name);
		$this->set('id',$id);

		if ($this->request->is('post')) {
			$this->Raspberry->id = $id;
			if (array_key_exists('apply', $this->request->data))
			{
				//Si on veut sauvegarder des parametres de configuration pour tout les Pi
				$allrasps = $this->Raspberry->find('all');
				foreach ($allrasps as $rasps => $rasp) {
					$source = './files/default';
					$destination = '\\\\'.$rasp['Raspberry']['address'];
					$this->execSSH($connection,'systemctl stop kodi');
					sleep(2);

					foreach ($files as $filename => $file) {
						if (!$this->movefiles($source,$destination,$file['Setting'])) {
							$this->Session->setFlash(__('Error when saving file(s)'), 'flash/error');
							break;
						}
						$newpathfile = str_replace($source,"",$file['Setting']['path']);
						$newpathfile = (substr($destination,0,2) == '\\\\') ? str_replace('/','\\',$newpathfile) : str_replace('\\','/',$newpathfile);

						$file['Setting']['path'] = '\\\\'.$rasp['Raspberry']['address'].$newpathfile;
						$file['Setting']['raspberries_id'] = $rasp['Raspberry']['id'];

						$this->Setting->create();
						$deleteconditions = array('Setting.raspberries_id' => $rasp['Raspberry']['id'], 'Setting.name' => $file['Setting']['name']);
						if ($this->Setting->deleteAll($deleteconditions)) {
							if (!$this->Setting->save($file)) {
								$this->Session->setFlash(__('The settings '.$file['Setting']['name'].' could not be saved. Please, try again.'), 'flash/error');
								exit();
							}
						} else {
							$this->Session->setFlash(__('The settings '.$file['Setting']['name'].' could not be saved. Please, try again.'), 'flash/error');
							exit();
						}
						
					}

					$this->execSSH($connection,'systemctl start kodi');
					sleep(1);
					$this->execSSH($connection,'systemctl restart kodi');
					sleep(1);
				}

			} else {
				$connection = $this->connexionSSH($raspberry['Raspberry']['address'],'root','openelec');

				if (array_key_exists('Raspberry', $this->request->data)) {
					//Si on veut changer le mode d'overclocking
					if (!$this->setOverclock($connection,$this->request->data['Raspberry']['overclock'])) {
						$this->Session->setFlash(__('Erreur lors du changement du mode d\'overcloking'), 'flash/error');
						$this->redirect(array('action' => 'settings', $id));
					} else {
						$this->execSSH($connection,'reboot');
						if (!$this->Raspberry->save($this->request->data)) {
							$this->Session->setFlash(__('Erreur lors de l\'enregistrement du mode d\'overcloking'), 'flash/error');
							$this->redirect(array('action' => 'settings', $id));
						}
						sleep(3);
					}
				} else {

						//Si on veut sauvegarder ou restaurer les parametres de configuration pour 1 seul Pi
						$this->execSSH($connection,'systemctl stop kodi');
						sleep(2);
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

						$this->execSSH($connection,'systemctl start kodi');
						sleep(1);
						$this->execSSH($connection,'systemctl restart kodi');
						sleep(1);
					}
				}

			$this->Session->setFlash(__('Changes done'), 'flash/success');
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

	public function movefiles($source,$destination,$file) {

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
					if (isset($this->request->data['Raspberry']['name']) && $dom->getElementsByTagName("hostname")->item(0)->nodeValue == 'default') {
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

	public function setOverclock($connection,$overclock)
		{
			ssh2_exec($connection, 'mkdir -p scripts && chmod 777 scripts');
			ssh2_scp_send($connection,"./files/scripts/setOverclock.sh","./scripts/setOverclock.sh", 0644);  
		    ssh2_exec($connection, "chmod +x ./scripts/setOverclock.sh");
		    $result = ssh2_exec($connection, "./scripts/setOverclock.sh " . $overclock);
		    if(!$result)
		    {
		    	return false;
		    }
		    else {
		    	return true;
		    }
		}
	
	public function getOverclock($connection)
		{
			ssh2_exec($connection, 'mkdir -p scripts && chmod 777 scripts');
	        ssh2_scp_send($connection,"./files/scripts/getOverclock.sh","./scripts/getOverclock.sh", 0644);
	        ssh2_exec($connection, "chmod +x ./scripts/getOverclock.sh");
	        
	        $result=ssh2_exec($connection, "./scripts/getOverclock.sh");
	        stream_set_blocking($result, true);
	        $res = stream_get_contents($result);
	        if(strstr($res, "arm_freq=700")){$overClock = "default";}
	        elseif(strstr($res, "arm_freq=800")){$overClock = "modest";}
	        elseif(strstr($res, "arm_freq=900")){$overClock = "medium";}
	        elseif(strstr($res, "arm_freq=950")){$overClock = "high";}
	        elseif(strstr($res, "arm_freq=1000")){$overClock = "turbo";}

	        return $overClock;
	}

}
