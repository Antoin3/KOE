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
                $filename = '\\\\'.$this->request->data['Raspberry']['address'].'\Userdata\addon_data\service.openelec.settings\oe_settings.xml';
                $oesettings = '<openelec>
									<addon_config/>
									<settings>
										<system>
											<wizard_completed>True</wizard_completed>
										<hostname>'.$this->request->data['Raspberry']['name'].'</hostname></system>
										<connman>
											<wizard_completed>True</wizard_completed>
										</connman>
										<services>
											<wizard_completed>True</wizard_completed>
										</services>
										<about>
											<wizard_completed>True</wizard_completed>
										</about>
										<openelec>
											<wizard_completed>True</wizard_completed>
										</openelec>
									</settings>
								</openelec>';
                //Génération du futur XML en DOMDocument
				$dom = new XmlDOM();
            	$dom->preserveWhiteSpace = false;
				$dom->loadXML($oesettings);

				$connection = $this->connexionSSH($this->request->data['Raspberry']['address'],'root','openelec');
				$this->execSSH($connection,'systemctl stop kodi');
				sleep(2);
				if ($dom->save($filename))
				{
					$this->execSSH($connection,'systemctl start kodi');
					sleep(1);
					$this->execSSH($connection,'systemctl restart kodi');
					sleep(1);
					$this->Session->setFlash(__('The raspberry has been saved'), 'flash/success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The raspberry could not be saved. Please, try again.'), 'flash/error');
				}
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
		if (!$this->Raspberry->exists($id)) {
			throw new NotFoundException(__('Invalid raspberry'));
		}
		$options = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $id));
		$this->set('raspberry', $this->Raspberry->find('first', $options));
	}

/**
 *form method
 *
 * @throws NotFoundException
 * @param string $id
 * @param string $xml
 * @return void
 */
	public function form($id = null, $xml = null) {
		if (!$this->Raspberry->exists($id)) {
			throw new NotFoundException(__('Invalid raspberry'));
		}
		$options = array('conditions' => array('Raspberry.' . $this->Raspberry->primaryKey => $id));
		$this->set('raspberry', $this->Raspberry->find('first', $options));
		$this->set('xml',$xml);
		if ($this->request->is('post') || $this->request->is('put')) {
			$raspberry = $this->Raspberry->find('first', $options);

			if ($xml != 'oe_settings') {
                $filename = '\\\\'.$raspberry['Raspberry']['address'].'\Userdata\\'.$xml.'.xml';
            }
            else {
                $filename = '\\\\'.$raspberry['Raspberry']['address'].'\Userdata\addon_data\service.openelec.settings\\'.$xml.'.xml';
            }
            $dom = new XmlDOM();
            $dom->preserveWhiteSpace = false;
            if(file_exists($filename)) 
                {
					//Génération du XML dont les valeurs remplaceront les nouvelles
					$newdom = new XmlDOM();
					$newdom->chargeXML($this->request->data);

					$dom->load($filename);

					//On remplace les valeurs de $olddom par celles de $newdom
					$dom->replaceDOM($newdom);

				} else {
					//Génération du futur XML en DOMDocument : 
					$dom->loadXML($this->request->data[$raspberry['Raspberry']['name']][$xml]);
				}

				$connection = $this->connexionSSH($raspberry['Raspberry']['address'],'root','openelec');
				$this->execSSH($connection,'systemctl stop kodi');
				sleep(2);
				if ($dom->save($filename))
				{
					$this->execSSH($connection,'systemctl start kodi');
					sleep(1);
					$this->execSSH($connection,'systemctl restart kodi');
					sleep(1);
					$this->Session->setFlash(__('The new '.$xml.' has been saved'), 'flash/success');
					$this->redirect(array('action' => 'settings', $raspberry['Raspberry']['id'],'guisettings'));
				} else {
					$this->Session->setFlash(__('Error when saving '.$xml), 'flash/error');
				}
		}
	}
}
