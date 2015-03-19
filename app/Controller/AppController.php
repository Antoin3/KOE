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
 * @param string $xml
 * @return void
 */
	public function form($id = null, $file = null) {
		if ($this->Raspberry->exists($id)) {
			$options = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $id));
			$this->set('raspberry', $this->Raspberry->find('first', $options));
			$raspberry = $this->Raspberry->find('first', $options);
		}
		else {
			$raspberry = $this->Raspberry->find('all');
		}

		$this->set('file',$file);

		if ($this->request->is('post') || $this->request->is('put')) {

			$filepath = isset($raspberry) ? '\\\\'.$raspberry['Raspberry']['address'].'\Userdata\\' : '/files/';
			$id = isset($raspberry) ? $raspberry['Raspberry']['id'] : 'all';
			$name = isset($raspberry) ? $raspberry['Raspberry']['name'] : 'Parametres généraux';

			$address = $raspberry['Raspberry']['address'];

	            $dom = new XmlDOM();
	            $dom->preserveWhiteSpace = false;
	            if(file_exists($filepath.$file.'.xml')) 
	                {
						//Génération du XML dont les valeurs remplaceront les nouvelles
						$newdom = new XmlDOM();
						$newdom->chargeXML($this->request->data);

						$dom->load($filepath.$file.'.xml');

						//On remplace les valeurs de $olddom par celles de $newdom
						$dom->replaceDOM($newdom);

					} else {
						//Génération du futur XML en DOMDocument : 
						$dom->loadXML($this->request->data[$name][$file]);
					}

					$connection = $this->connexionSSH($address,'root','openelec');
					$this->execSSH($connection,'systemctl stop kodi');
					sleep(2);
					if ($dom->save($filepath.$file.'.xml'))
					{
						$this->execSSH($connection,'systemctl start kodi');
						sleep(1);
						$this->execSSH($connection,'systemctl restart kodi');
						sleep(1);
						$this->Session->setFlash(__('The new '.$file.' has been saved'), 'flash/success');
						$this->redirect(array('action' => 'settings', $id,'guisettings'));
					} else {
						$this->Session->setFlash(__('Error when saving '.$file), 'flash/error');
					}
		}
	}

}

