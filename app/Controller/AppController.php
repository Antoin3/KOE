<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
App::uses('XmlDOM', 'Lib');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array('Session','DebugKit.Toolbar');

/**
 * recursively remove directory method
 *
 * @param string $dir
 * @return void
 */

 	public function rrmdir($dir) 
 	{ 
	   if (is_dir($dir)) { 
	     $objects = scandir($dir); 
	     foreach ($objects as $object) { 
	       if ($object != "." && $object != "..") { 
	         if (filetype($dir."/".$object) == "dir") $this->rrmdir($dir."/".$object); else unlink($dir."/".$object); 
	       } 
	     } 
	     reset($objects); 
	     rmdir($dir); 
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

/**
 *form method
 *
 * @throws NotFoundException
 * @param string $id
 * @param string $file
 * @return void
 */
	public function form($id = null, $file = null) {
		$default = array( 
							(int) 0 => array(
									'Setting' => array(
										'name' => 'guisettings',
										'description' => 'description guisettings',
										'path' => './files/default/Userdata/',
										'extension' => 'xml'
							)),
							(int) 1 => array(
								'Setting' => array(
									'name' => 'advancedsettings',
									'description' => 'description advancedsettings',
									'path' => './files/default/Userdata/',
									'extension' => 'xml'
							)),
							(int) 2 => array(
								'Setting' => array(
									'name' => 'mediasources',
									'description' => 'description mediasources',
									'path' => './files/default/Userdata/',
									'extension' => 'xml'
							)),
							(int) 3 => array(
								'Setting' => array(
									'name' => 'sources',
									'description' => 'description sources',
									'path' => './files/default/Userdata/',
									'extension' => 'xml'
							)),
							(int) 4 => array(
								'Setting' => array(
									'name' => 'passwords',
									'description' => 'description passwords',
									'path' => './files/default/Userdata/',
									'extension' => 'xml'
							)),
							(int) 5 => array(
								'Setting' => array(
									'name' => 'oe_settings',
									'description' => 'description oe_settings',
									'path' => './files/default/Userdata/addon_data/service.openelec.settings/',
									'extension' => 'xml'
							))
					);

		if ($this->Raspberry->exists($id)) {
			$options = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $id));
			$raspberry = $this->Raspberry->find('first', $options);

			$optionsfiles = array('conditions' => array('Setting.raspberries_id' => $id, 'Setting.name' => $file));
			$fileinfo = $this->Setting->find('first',$optionsfiles);

			$name = $raspberry['Raspberry']['name'];
			$id = $raspberry['Raspberry']['id'];
		}
		else {
			// $options = array('conditions' => array('Raspberry.role' => 'master'));
			// $this->set('raspberry', $this->Raspberry->find('first', $options));
			foreach ($default as $def => $key) {
					if ($key['Setting']['name'] == $file) 
					{
						$fileinfo = $key;
						break;
					}
				 }
			$name = 'Parametres généraux';
			$id = 'all';
		}

		$this->set('fileinfo',$fileinfo);
		$this->set('name',$name);
		$this->set('id',$id);

		if ($this->request->is('post') || $this->request->is('put')) {
	            $dom = new XmlDOM();
	            $dom->preserveWhiteSpace = false;
	            if(file_exists($fileinfo['Setting']['path'].$fileinfo['Setting']['name'].'.'.$fileinfo['Setting']['extension'])) 
	                {
						//Génération du XML dont les valeurs remplaceront les nouvelles
						$newdom = new XmlDOM();
						$newdom->chargeXML($this->request->data);

						$dom->load($fileinfo['Setting']['path'].$fileinfo['Setting']['name'].'.'.$fileinfo['Setting']['extension']);

						//On remplace les valeurs de $olddom par celles de $newdom
						$dom->replaceDOM($newdom);

					} else {
						//Génération du futur XML en DOMDocument : 
						$dom->chargeXML($this->request->data);
					}

					if ($id != 'all')
					{
							$connection = $this->connexionSSH($raspberry['Raspberry']['address'],'root','openelec');
							$this->execSSH($connection,'systemctl stop kodi');
							sleep(2);

							if (isset($this->request->data['openelec']['settings']['system']['hostname'])) 
							{
								$this->Raspberry->id = $id;
								$this->Raspberry->set('name', $this->request->data['openelec']['settings']['system']['hostname'][0]);
								$this->Raspberry->save();
							}
					}
					
					if ($dom->save($fileinfo['Setting']['path'].$fileinfo['Setting']['name'].'.'.$fileinfo['Setting']['extension']))
					{
						if ($id != 'all')
						{	
							$this->execSSH($connection,'systemctl start kodi');
							sleep(1);
							$this->execSSH($connection,'systemctl restart kodi');
							sleep(1);
						}
					} else {
						$this->Session->setFlash(__('Error when saving '.$file), 'flash/error');
						exit;
					}

					$this->Session->setFlash(__('The new '.$file.' has been saved'), 'flash/success');
					$this->redirect(array('action' => 'settings', $id,$file));
				}
		}
		public function reboot($connection)
		{
			$reboot = ssh2_exec($connection, "reboot");
			        if (!$reboot) {
			            die("Failed to execute command reboot");
			        }
		}
		public function replaceXML($file, $element, $newElement, $chemin, $ID)
		{
			$xml = new DOMDocument;
			$xml->load($file);
			$xpath = new DomXPath($xml);
			$place = $xpath->query($chemin);
			$new = $xml->createElement($element,$newElement);
			if ($ID != null) {
				$new->setAttribute('id', $ID);
			}
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

			$this->replaceXML('../View/Layouts/script/advancedsettings.xml', 'host', $bdd, '//advancedsettings/videodatabase/host', null);
			$this->replaceXML('../View/Layouts/script/advancedsettings.xml', 'user', $loginBDD, '//advancedsettings/videodatabase/user', null);
			$this->replaceXML('../View/Layouts/script/advancedsettings.xml', 'pass', $mdpBDD, '//advancedsettings/videodatabase/pass', null);
			$this->replaceXML('../View/Layouts/script/advancedsettings.xml', 'host', $bdd, '//advancedsettings/musicdatabase/host', null);
			$this->replaceXML('../View/Layouts/script/advancedsettings.xml', 'user', $loginBDD, '//advancedsettings/musicdatabase/user', null);
			$this->replaceXML('../View/Layouts/script/advancedsettings.xml', 'pass', $mdpBDD, '//advancedsettings/musicdatabase/pass', null);
			$this->replaceXML('../View/Layouts/script/mediasources.xml', 'location', $cheminMusicPwd, '//mediasources/network/location[@id=1]', 1);
			$this->replaceXML('../View/Layouts/script/mediasources.xml', 'location', $cheminVideoPwd, '//mediasources/network/location[@id=2]', 2);
			$this->replaceXML('../View/Layouts/script/mediasources.xml', 'location', $cheminTVShowPwd, '//mediasources/network/location[@id=3]', 3);
			$this->replaceXML('../View/Layouts/script/passwords.xml', 'to', $cheminMusicPwd . "/", '//passwords/path[@id=0]/to', null);
			$this->replaceXML('../View/Layouts/script/passwords.xml', 'to', $cheminVideoPwd . "/", '//passwords/path[@id=1]/to', null);
			$this->replaceXML('../View/Layouts/script/passwords.xml', 'to', $cheminTVShowPwd . "/", '//passwords/path[@id=2]/to', null);
			$this->replaceXML('../View/Layouts/script/passwords.xml', 'from', $cheminMusic, '//passwords/path[@id=0]/from', null);
			$this->replaceXML('../View/Layouts/script/passwords.xml', 'from', $cheminVideo, '//passwords/path[@id=1]/from', null);
			$this->replaceXML('../View/Layouts/script/passwords.xml', 'from', $cheminTVShow, '//passwords/path[@id=2]/from', null);
			$this->replaceXML('../View/Layouts/script/sources.xml', 'path', $cheminMusic, '//sources/music/source/path', null);
			$this->replaceXML('../View/Layouts/script/sources.xml', 'path', $cheminVideo, '//sources/video/source[@id=0]/path', null);
			$this->replaceXML('../View/Layouts/script/sources.xml', 'path', $cheminTVShow, '//sources/video/source[@id=1]/path', null);
			$connection = $this->connexionSSH($address,'root','openelec');
			$synchro = $this->synchronisation($connection, $master);
			$this->request->data['Raspberry']['role'] = "master";
			$this->Raspberry->save($this->request->data);
			$this->reboot($connection);
		}
		public function setSlave($address)
		{
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
		public function dossierScript($connection)
		{
			ssh2_exec($connection, "mkdir scripts");
			ssh2_exec($connection, "chmod 777 scripts");
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
}

