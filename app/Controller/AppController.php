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
	}

