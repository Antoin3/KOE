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
		if ($this->Raspberry->delete()) {
			$this->Session->setFlash(__('Raspberry deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
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
			$connection = $this->connexionSSH(
					$this->request->data['Raspberry']['address'],
					'root','openelec');
			$name = $this->execSSH($connection,'uname -n');
			$version = $this->execSSH($connection,'cat /etc/version');
			$this->Raspberry->create();
			if ($name && $version)
			{
					$this->Raspberry->set(
						array( 
							'name' => $name,
							'version' => $version
							//'overclocking' => $this->execSSH($connection,)
					));
					if ($this->Raspberry->save($this->request->data)) {
						$this->Session->setFlash(__('The raspberry has been saved'), 'flash/success');
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__('The raspberry could not be saved. Please, try again.'), 'flash/error');
					} 
			} else {
					$this->Session->setFlash(__('Bad informations given. Please, try again.'), 'flash/error');
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
 * @throws Met
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
 * settings method
 *
 * @throws Met
 * @param string $connection
 * @param string $cmd
 * @return string
 */

	public function admin_settings($id = null) {
		$this->Raspberry->id = $id;
		if (!$this->Raspberry->exists($id)) {
			throw new NotFoundException(__('Invalid raspberry'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			// $getaddress = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $id));
			// $address = $this->Raspberry->address->find('first', $getaddress);
			debug($file = '\\\\10.10.10.103\Userdata\guisettings.xml');
			if(file_exists($file)) 
			{
				$xml = Xml::toArray(Xml::build($file));
				if ($xmlarray = array_merge($xml['settings'],$this->request->data)) {
					$this->request->data = $xmlarray;
					$this->Session->setFlash(__('The raspberry has been saved'), 'flash/success');
					$this->render('xml');
				} else {
					$this->Session->setFlash(__('The raspberry could not be saved. Please, try again.'), 'flash/error');
				}
			}
			else $this->Session->setFlash(__('Error'), 'flash/error');
		} else {
			$options = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $id));
			$this->request->data = $this->Raspberry->find('first', $options);
		}
	}
}