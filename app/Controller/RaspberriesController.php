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
	public function synchroniser($id = null, $address) {
		$this->Raspberry->recursive = 0;
		$this->set('raspberries', $this->paginate());
		$role = false;
		$bdd = null;
		$loginBDD = null;
		$mdpBDD = null;
		$NAS = null;
		$loginNas = null;
		$mdpNAS = null;
		//debug($addressM['Raspberry']['address']);
		if (!$this->Raspberry->exists($id)) {
			throw new NotFoundException(__('Invalid raspberry'));
		}
		$this->Raspberry->id = $id;

		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Session->setFlash(__('Synchronisation réussi, le rapsberry redémarre'), 'flash/success');
			$bdd = $this->request->data['Raspberry']['BDD'];
			$loginBDD = $this->request->data['Raspberry']['loginBDD'];
			$mdpBDD = $this->request->data['Raspberry']['mdpBDD'];
			$NAS = $this->request->data['Raspberry']['NAS'];
			$loginNAS = $this->request->data['Raspberry']['loginNAS'];
			$mdpNAS = $this->request->data['Raspberry']['mdpNAS'];
			$cheminMusic1 = $this->request->data['Raspberry']['cheminMusic'];
			$cheminVideo1 = $this->request->data['Raspberry']['cheminVideo'];
			$cheminTVShow1 = $this->request->data['Raspberry']['cheminTVShow'];
			if ($this->Raspberry->findByRole('master', array('Raspberry.address'))!=null) {
				$this->setSlave($address);
			}
			else{
				$this->setMaster($address, $bdd, $loginBDD, $mdpBDD, $NAS, $loginNAS, $mdpNAS, $cheminMusic1, $cheminVideo1, $cheminTVShow1);
			}
			
		}
		else{
		$options = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $id));
		$this->set('raspberry', $this->Raspberry->find('first', $options));
		}
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$connection = $this->connexionSSH($this->request->data['Raspberry']['address'],'root','openelec');
			$this->dossierScript($connection);
			$Overclock = $this->getOverclock($connection);
			$this->request->data['Raspberry']['overclocking'] = $Overclock;
			
			$file = '\\\\'.$this->request->data['Raspberry']['address'].'\Userdata\addon_data\service.openelec.settings\oe_settings.xml';
			if(file_exists($file)) {
				//Create new DomDocuemnt
			    $dom = new DomDocument();
			    $dom->load($file);

			    // Find the parent node 
				$xpath = new DomXPath($dom); 

				//Create the new element to insert/replace
			    $newhostname = $dom->createElement("hostname",$this->request->data['Raspberry']['name']); 

				//Test if node already exists
			    $node = $dom->getElementsByTagName('hostname');

			    if ($node->length==0) {
			    	// new node will be inserted before this node 
					$next = $xpath->query("//settings/system/wizard_completed");
			    	// Insert the new element 
					$next->item(0)->parentNode->insertBefore($newhostname, $next->nextSibling); 
			    }
			    else
			    {
			    	//Parent node
		    		$oldhostname = $xpath->query("//settings/system/hostname");
			    	//Replace
			    	$oldhostname->item(0)->parentNode->replaceChild($newhostname, $oldhostname->item(0));
			    }

				$dom->save($file);
				$this->Raspberry->create();
				if ($this->Raspberry->save($this->request->data)) {
					$this->Session->setFlash(__('The raspberry has been saved'), 'flash/success');
					$this->redirect(array('action' => 'index'));
				} else {
				$this->Session->setFlash(__('The raspberry could not be saved. Please, try again.'), 'flash/error');
				}
			}
			else {
				$this->Session->setFlash(__('oe_settings.xml not found.'), 'flash/error');
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

        $this->Raspberry->recursive = 0;
		$this->set('raspberries', $this->paginate());
		
		if (!$this->Raspberry->exists($id)) {
			throw new NotFoundException(__('Invalid raspberry'));
		}
		$this->Raspberry->id = $id;
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Session->setFlash(__('Configuration en cours'), 'flash/success');
			$overclock = $this->request->data['Raspberry']['overclocking'];
			$connection = $this->connexionSSH($this->request->data['Raspberry']['address'],'root','openelec');
	        
	        $over = $this->overclock($connection,$overclock);

			if ($this->Raspberry->save($this->request->data)) {
				if (!$over) {
					$this->Session->setFlash(__('Erreur lors du changement de configuration'), 'flash/error');
				}
				else{
					$this->Session->setFlash(__('Configuration réussi, openElec va redémarrer'), 'flash/success');
					$this->reboot($connection);
				}
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

	public function add_plugin($id = null, $address) {
		$this->Raspberry->recursive = 0;
		$this->set('raspberries', $this->paginate());
		
		if (!$this->Raspberry->exists($id)) {
			throw new NotFoundException(__('Invalid raspberry'));
		}
		
		$this->Raspberry->id = $id;
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Session->setFlash(__('Ajout du plugin...'), 'flash/success');
			$filename = $this->request->data['Raspberry']['plugin']['name'];
			$filetmp = $this->request->data['Raspberry']['plugin']['tmp_name'];
			if (!empty($filetmp)) {
				$result1 = move_uploaded_file($filetmp, IMAGES . 'plugins' . DS . $filename);
				$file = "../webroot/img/plugins/" . $filename;
				$connection = $this->connexionSSH($address,'root','openelec');
				$result = $this->uploadPlugin($connection, $file, $filename);
			}
			
			if (!$result) {
				$this->Session->setFlash(__('erreur'), 'flash/error');
			}
			else{
				$this->Session->setFlash(__('plugin ajouté'), 'flash/success');
			}

		} else {
			$options = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $id));
			$this->request->data = $this->Raspberry->find('first', $options);
		}
	}


/**
 * connexion SSH method
 *
 * @throws NotFoundException
 * @param string $ip
 * @param string $username
 * @param string $pass
 * @return Ressource
 */
	public function connexionSSH($ip,$username,$pass)
	{
		if (!$connection = ssh2_connect($ip, 22))
		{
		    throw new NotFoundException(__('Failed to connect to raspberry'));
		}
		ssh2_auth_password($connection,$username,$pass);
		return $connection;
	}

/**
 * connexion SSH method
 *
 * @throws BadRequestException
 * @param string $connection
 * @param string $cmd
 * @return string
 */
	public function execSSH($connection,$cmd)
	{
		$query = ssh2_exec($connection,$cmd);
		if (!$query) {
		    throw new BadRequestException();
		}
		stream_set_blocking($query, true);
		$result = stream_get_contents($query);
		return $result;
	}
	public function overclock($connection,$overclock)
	{
		ssh2_scp_send($connection,"../View/Layouts/script/scriptBon.sh","./scripts/scriptBon.sh", 0644);  
	    ssh2_exec($connection, "chmod +x ./scripts/scriptBon.sh");
	    $result = ssh2_exec($connection, "./scripts/scriptBon.sh " . $overclock);
	    if(!$result)
	    {
	    	return false;
	    }
	    else{
	    	return true;
	    }
	}
	
	public function getOverclock($connection)
	{
        ssh2_scp_send($connection,"../View/Layouts/script/scriptParam.sh","./scripts/scriptParam.sh", 0644);
        ssh2_exec($connection, "chmod +x ./scripts/scriptParam.sh");
        
        $result=ssh2_exec($connection, "./scripts/scriptParam.sh");
        stream_set_blocking($result, true);
        $res = stream_get_contents($result);
        if(strstr($res, "arm_freq=700")){$overClock = "default";}
        elseif(strstr($res, "arm_freq=800")){$overClock = "modest";}
        elseif(strstr($res, "arm_freq=900")){$overClock = "medium";}
        elseif(strstr($res, "arm_freq=950")){$overClock = "high";}
        elseif(strstr($res, "arm_freq=1000")){$overClock = "turbo";}

        return $overClock;
	}
	public function reboot($connection)
	{
		$reboot = ssh2_exec($connection, "reboot");
		        if (!$reboot) {
		            die("Failed to execute command reboot");
		        }
	}
	public function dossierScript($connection)
	{
		ssh2_exec($connection, "mkdir scripts");
		ssh2_exec($connection, "chmod 777 scripts");
	}
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
	public function synchronisation($connection, $master)
	{
		if ($master == false) {
			$etape1 = ssh2_exec($connection, 'mkdir partageS');
	        $etape1 = ssh2_exec($connection, 'mkdir partageF');
	        $etape1 = ssh2_exec($connection, 'mkdir partageM');
		    stream_set_blocking($etape1, 1);

		    ssh2_scp_send($connection, "../View/Layouts/script/autoexec.py", "./.kodi/userdata/autoexec.py",0644);
	        ssh2_scp_send($connection, "../View/Layouts/script/script.sh", "./scripts/script.sh",0644);
	        ssh2_exec($connection, 'chmod +x ./scripts/script.sh');
		}
        
		$mdiasrc = ssh2_scp_send($connection, "../View/Layouts/script/mediasources.xml", "./.kodi/userdata/mediasources.xml",0644);
		$src = ssh2_scp_send($connection,"../View/Layouts/script/sources.xml","./.kodi/userdata/sources.xml", 0644);
		$psswd = ssh2_scp_send($connection, "../View/Layouts/script/passwords.xml", "./.kodi/userdata/passwords.xml",0644);
		$clean = ssh2_exec($connection, 'curl -i -X POST -H "Content-Type: application/json" -d \'{"jsonrpc": "2.0", "method": "AudioLibrary.Clean", "id": "2"}\' http://127.0.0.1/jsonrpc');
		stream_set_blocking($clean, 1);
		$scan = ssh2_exec($connection,'curl -i -X POST -H "Content-Type: application/json" -d \'{"jsonrpc": "2.0", "method": "AudioLibrary.Scan", "id": "1"}\' http://127.0.0.1/jsonrpc');
		stream_set_blocking($scan, 1);
		$scan1 = ssh2_exec($connection,'curl -i -X POST -H "Content-Type: application/json" -d \'{"jsonrpc": "2.0", "method": "VideoLibrary.Scan", "id": "1"}\' http://127.0.0.1/jsonrpc');
		stream_set_blocking($scan1, 1);
		$export = ssh2_exec($connection,'curl -i -X POST -H "Content-Type: application/json" -d \'{"jsonrpc": "2.0", "method": "AudioLibrary.Export", "id": "1"}\' http://127.0.0.1/jsonrpc');
		stream_set_blocking($export, 1);
		$export2 = ssh2_exec($connection,'curl -i -X POST -H "Content-Type: application/json" -d \'{"jsonrpc": "2.0", "method": "VideoLibrary.Export", "id": "1"}\' http://127.0.0.1/jsonrpc');
		stream_set_blocking($export2, 1);
		 $as = ssh2_scp_send($connection, "../View/Layouts/script/advancedsettings.xml", "./.kodi/userdata/advancedsettings.xml",0644);
		
		$scan = ssh2_exec($connection,'curl -i -X POST -H "Content-Type: application/json" -d \'{"jsonrpc": "2.0", "method": "AudioLibrary.Scan", "id": "1"}\' http://127.0.0.1/jsonrpc');
		stream_set_blocking($scan, 1);
		$scan2 = ssh2_exec($connection,'curl -i -X POST -H "Content-Type: application/json" -d \'{"jsonrpc": "2.0", "method": "VideoLibrary.Scan", "id": "1"}\' http://127.0.0.1/jsonrpc');
		stream_set_blocking($scan2, 1);
	}
	public function replaceXML($file, $element, $newElement, $chemin)
	{
		$xml = new DOMDocument;
		$xml->load($file);
		$xpath = new DomXPath($xml);
		$place = $xpath->query($chemin);
		$new = $xml->createElement($element,$newElement);
		$place->item(0)->parentNode->replaceChild($new, $place->item(0));
		$xml->save($file);
	}
	public function setMaster($address, $bdd, $loginBDD, $mdpBDD, $NAS, $loginNAS, $mdpNAS, $cheminMusic1, $cheminVideo1, $cheminTVShow1)
	{
			$master = false;

			$chemin = "smb://" . $NAS . "/";
			$cheminPwd = "smb://" . $loginNAS . ":" . $mdpNAS . "@" . $NAS . "/";

			$cheminMusic = $chemin . $cheminMusic1;
			$cheminMusicPwd = $cheminPwd . $cheminMusic1;
			$cheminVideo = $chemin . $cheminVideo1;
			$cheminVideoPwd = $cheminPwd . $cheminVideo1;
			$cheminTVShow = $chemin . $cheminTVShow1;
			$cheminTVShowPwd = $cheminPwd . $cheminTVShow1;

			$this->replaceXML('../View/Layouts/script/advancedsettings.xml', 'host', $bdd, '//advancedsettings/videodatabase/host');
			$this->replaceXML('../View/Layouts/script/advancedsettings.xml', 'user', $loginBDD, '//advancedsettings/videodatabase/user');
			$this->replaceXML('../View/Layouts/script/advancedsettings.xml', 'pass', $mdpBDD, '//advancedsettings/videodatabase/pass');
			$this->replaceXML('../View/Layouts/script/advancedsettings.xml', 'host', $bdd, '//advancedsettings/musicdatabase/host');
			$this->replaceXML('../View/Layouts/script/advancedsettings.xml', 'user', $loginBDD, '//advancedsettings/musicdatabase/user');
			$this->replaceXML('../View/Layouts/script/advancedsettings.xml', 'pass', $mdpBDD, '//advancedsettings/musicdatabase/pass');
			$this->replaceXML('../View/Layouts/script/mediasources.xml', 'location', $cheminMusicPwd, '//mediasources/network/location[@id=0]');
			$this->replaceXML('../View/Layouts/script/mediasources.xml', 'location', $cheminVideoPwd, '//mediasources/network/location[@id=1]');
			$this->replaceXML('../View/Layouts/script/mediasources.xml', 'location', $cheminTVShowPwd, '//mediasources/network/location[@id=2]');
			$this->replaceXML('../View/Layouts/script/passwords.xml', 'to', $cheminMusicPwd . "/", '//passwords/path[@id=0]/to');
			$this->replaceXML('../View/Layouts/script/passwords.xml', 'to', $cheminVideoPwd . "/", '//passwords/path[@id=1]/to');
			$this->replaceXML('../View/Layouts/script/passwords.xml', 'to', $cheminTVShowPwd . "/", '//passwords/path[@id=2]/to');
			$this->replaceXML('../View/Layouts/script/passwords.xml', 'from', $cheminMusic, '//passwords/path[@id=0]/from');
			$this->replaceXML('../View/Layouts/script/passwords.xml', 'from', $cheminVideo, '//passwords/path[@id=1]/from');
			$this->replaceXML('../View/Layouts/script/passwords.xml', 'from', $cheminTVShow, '//passwords/path[@id=2]/from');
			$this->replaceXML('../View/Layouts/script/sources.xml', 'path', $cheminMusic, '//sources/music/source/path');
			$this->replaceXML('../View/Layouts/script/sources.xml', 'path', $cheminVideo, '//sources/video/source[@id=0]/path');
			$this->replaceXML('../View/Layouts/script/sources.xml', 'path', $cheminTVShow, '//sources/video/source[@id=1]/path');
			$connection = $this->connexionSSH($address,'root','openelec');
			$synchro = $this->synchronisation($connection, $master);
			$this->request->data['Raspberry']['role'] = "master";
			$this->Raspberry->save($this->request->data);
			$this->reboot($connection);
	}
	public function setSlave($address){
		$master = true;
		$addressM = $this->Raspberry->findByRole('master', array('Raspberry.address'));
		$addressM = $addressM['Raspberry']['address'];
		$connection = $this->connexionSSH($address,'root','openelec');
		$synchro = $this->synchronisation($connection, $master);
		$this->request->data['Raspberry']['role'] = "slave";
		$this->Raspberry->save($this->request->data);
		$this->reboot($connection);
		$connection = $this->connexionSSH($addressM,'root','openelec');
		ssh2_scp_send($connection,"../View/Layouts/script/scriptMaster.sh","./scripts/scriptMaster.sh", 0644);
		ssh2_exec($connection, 'chmod +x ./scripts/scriptMaster.sh');
		ssh2_exec($connection, './scripts/scriptMaster.sh ' . $address);
		ssh2_exec($connection, 'cd scripts && ./script.sh');
	}
}