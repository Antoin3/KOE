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
 * @return Ressource
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

		//Tableau contenant les informations des fichiers de configurations par défaut
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

			//Si on cible un OpenElec en particulier, on récupere dans la BDD toutes les informations du fichier de configurations ciblé liés a cet OE
			$optionsfiles = array('conditions' => array('Setting.raspberries_id' => $id, 'Setting.name' => $file));
			$fileinfo = $this->Setting->find('first',$optionsfiles);

			$name = $raspberry['Raspberry']['name'];
			$id = $raspberry['Raspberry']['id'];
		}
		else {
			// $options = array('conditions' => array('Raspberry.role' => 'master'));
			// $this->set('raspberry', $this->Raspberry->find('first', $options));

			//Si on cible tous les OpenElecs, on récupere dans le tableau 'default' toutes les informations du fichier de configuration ciblé
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
				//On créer un nouveau fichier Xml qui viendra remplacer le précédent s'il existe, on qui sera créé
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

					//Dans le cas on réalise une requete sur un OE en particulier
					if ($id != 'all')
					{
							//On éteint Kodi et edite les nouvelles infos dans la base
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
					
					//On enregistre le Xml
					if ($dom->save($fileinfo['Setting']['path'].$fileinfo['Setting']['name'].'.'.$fileinfo['Setting']['extension']))
					{
						//Dans le cas on réalise une requete sur un OE en particulier
						if ($id != 'all')
						{	
							//On relance et restart Kodi
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
}

