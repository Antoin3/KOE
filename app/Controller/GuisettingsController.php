<?php
App::uses('AppController', 'Controller');

/**
 * Guisettings Controller
 *
 * @property Guisetting $Guisetting
 * @property PaginatorComponent $Paginator
 */

class GuisettingsController extends AppController {

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
		$this->Guisetting->recursive = 0;
		$this->set('guisettings', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Guisetting->exists($id)) {
			throw new NotFoundException(__('Invalid guisetting'));
		}
		$options = array('conditions' => array('Guisetting.' . $this->Guisetting->primaryKey => $id));
		$this->set('guisetting', $this->Guisetting->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$filename = '\\\\10.10.10.103\Userdata\guisettings.xml';
			if(file_exists($filename))
			{
				//Génération du futur ancien XML en DOMDocument
				$olddom = new XmlDOM();
				$olddom->preserveWhiteSpace = FALSE;
				$olddom->load($filename);

				//Génération du XML dont les valeurs remplaceront les nouvelles
				$newdom = new XmlDOM();
				$newdom->chargeXML($this->request->data);

				//On remplace les valeurs de $olddom par celles de $newdom
				$olddom->replaceDOM($newdom);

				if ($olddom->save($filename))
				{ 
					$this->Session->setFlash(__('The new guisetting has been saved'), 'flash/success');
					$this->redirect(array('action' => 'index'));
				}
				else {
					$this->Session->setFlash(__('Error when modifying '.$filename), 'flash/error');
				}
			} else {
				$this->Session->setFlash(__($filename.' not exists'), 'flash/error');
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
        $this->Guisetting->id = $id;
		if (!$this->Guisetting->exists($id)) {
			throw new NotFoundException(__('Invalid guisetting'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Guisetting->save($this->request->data)) {
				$this->Session->setFlash(__('The guisetting has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guisetting could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Guisetting.' . $this->Guisetting->primaryKey => $id));
			$this->request->data = $this->Guisetting->find('first', $options);
		}
		$gsAudiocds = $this->Guisetting->GsAudiocds->find('list');
		$gsAudiooutput = $this->Guisetting->GsAudiooutput->find('list');
		$gsCache = $this->Guisetting->GsCache->find('list');
		$gsCacheaudio = $this->Guisetting->GsCacheaudio->find('list');
		$gsCachedvd = $this->Guisetting->GsCachedvd->find('list');
		$gsCacheunknown = $this->Guisetting->GsCacheunknown->find('list');
		$gsCachevideo = $this->Guisetting->GsCachevideo->find('list');
		$gsDebug = $this->Guisetting->GsDebug->find('list');
		$gsDisc = $this->Guisetting->GsDisc->find('list');
		$gsDvds = $this->Guisetting->GsDvds->find('list');
		$gsEpg = $this->Guisetting->GsEpg->find('list');
		$gsFilelists = $this->Guisetting->GsFilelists->find('list');
		$gsGeneral = $this->Guisetting->GsGeneral->find('list');
		$gsInput = $this->Guisetting->GsInput->find('list');
		$gsKaraoke = $this->Guisetting->GsKaraoke->find('list');
		$gsLocale = $this->Guisetting->GsLocale->find('list');
		$gsLookandfeel = $this->Guisetting->GsLookandfeel->find('list');
		$gsMasterlock = $this->Guisetting->GsMasterlock->find('list');
		$gsMusicfiles = $this->Guisetting->GsMusicfiles->find('list');
		$gsMusiclibrary = $this->Guisetting->GsMusiclibrary->find('list');
		$gsMusicplayer = $this->Guisetting->GsMusicplayer->find('list');
		$gsMymusic = $this->Guisetting->GsMymusic->find('list');
		$gsMyvideo = $this->Guisetting->GsMyvideo->find('list');
		$gsNetwork = $this->Guisetting->GsNetwork->find('list');
		$gsPictures = $this->Guisetting->GsPictures->find('list');
		$gsPowermanagement = $this->Guisetting->GsPowermanagement->find('list');
		$gsPvrmanager = $this->Guisetting->GsPvrmanager->find('list');
		$gsPvrmenu = $this->Guisetting->GsPvrmenu->find('list');
		$gsPvrparental = $this->Guisetting->GsPvrparental->find('list');
		$gsPvrplayback = $this->Guisetting->GsPvrplayback->find('list');
		$gsPvrpowermanagement = $this->Guisetting->GsPvrpowermanagement->find('list');
		$gsPvrrecord = $this->Guisetting->GsPvrrecord->find('list');
		$gsServices = $this->Guisetting->GsServices->find('list');
		$gsScraper = $this->Guisetting->GsScrapers->find('list');
		$gsScreensaver = $this->Guisetting->GsScreensaver->find('list');
		$gsSlideshow = $this->Guisetting->GsSlideshow->find('list');
		$gsSmb = $this->Guisetting->GsSmb->find('list');
		$gsSubtitles = $this->Guisetting->GsSubtitles->find('list');
		$gsSystem = $this->Guisetting->GsSystem->find('list');
		$gsVideolibrary = $this->Guisetting->GsVideolibrary->find('list');
		$gsVideoplayer = $this->Guisetting->GsVideoplayer->find('list');
		$gsVideoscreen = $this->Guisetting->GsVideoscreen->find('list');
		$gsWeather = $this->Guisetting->GsWeather->find('list');
		$gsWindow = $this->Guisetting->GsWindow->find('list');
		$gsSkinsettings = $this->Guisetting->GsSkinsettings->find('list');
		$gsDefaultvideosettings = $this->Guisetting->GsDefaultvideosettings->find('list');
		$gsViewstates = $this->Guisetting->GsViewstates->find('list');
		$gsAudio = $this->Guisetting->GsAudio->find('list');
		$this->set(compact('gsAudiocds', 'gsAudiooutput', 'gsCache', 'gsCacheaudio', 'gsCachedvd', 'gsCacheunknown', 'gsCachevideo', 'gsDebug', 'gsDisc', 'gsDvds', 'gsEpg', 'gsFilelists', 'gsGeneral', 'gsInput', 'gsKaraoke', 'gsLocale', 'gsLookandfeel', 'gsMasterlock', 'gsMusicfiles', 'gsMusiclibrary', 'gsMusicplayer', 'gsMymusic', 'gsMyvideo', 'gsNetwork', 'gsPicture', 'gsPowermanagement', 'gsPvrmanager', 'gsPvrmenu', 'gsPvrparental', 'gsPvrplayback', 'gsPvrpowermanagement', 'gsPvrrecord', 'gsServices', 'gsScrapers', 'gsScreensaver', 'gsSlideshow', 'gsSmb', 'gsSubtitles', 'gsSystem', 'gsVideolibrary', 'gsVideoplayer', 'gsVideoscreen', 'gsWeather', 'gsWindow', 'gsSkinsettings', 'gsDefaultvideosettings', 'gsViewstates', 'gsAudio'));
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
		$this->Guisetting->id = $id;
		if (!$this->Guisetting->exists()) {
			throw new NotFoundException(__('Invalid guisetting'));
		}
		if ($this->Guisetting->delete()) {
			$this->Session->setFlash(__('Guisetting deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Guisetting was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Guisetting->recursive = 0;
		$this->set('guisettings', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Guisetting->exists($id)) {
			throw new NotFoundException(__('Invalid guisetting'));
		}
		$options = array('conditions' => array('Guisetting.' . $this->Guisetting->primaryKey => $id));
		$this->set('guisetting', $this->Guisetting->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Guisetting->create();
			if ($this->Guisetting->save($this->request->data)) {
				$this->Session->setFlash(__('The guisetting has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guisetting could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$gsAudiocds = $this->Guisetting->GsAudiocds->find('list');
		$gsAudiooutput = $this->Guisetting->GsAudiooutput->find('list');
		$gsCache = $this->Guisetting->GsCache->find('list');
		$gsCacheaudio = $this->Guisetting->GsCacheaudio->find('list');
		$gsCachedvd = $this->Guisetting->GsCachedvd->find('list');
		$gsCacheunknown = $this->Guisetting->GsCacheunknown->find('list');
		$gsCachevideo = $this->Guisetting->GsCachevideo->find('list');
		$gsDebug = $this->Guisetting->GsDebug->find('list');
		$gsDisc = $this->Guisetting->GsDisc->find('list');
		$gsDvds = $this->Guisetting->GsDvds->find('list');
		$gsEpg = $this->Guisetting->GsEpg->find('list');
		$gsFilelists = $this->Guisetting->GsFilelists->find('list');
		$gsGeneral = $this->Guisetting->GsGeneral->find('list');
		$gsInput = $this->Guisetting->GsInput->find('list');
		$gsKaraoke = $this->Guisetting->GsKaraoke->find('list');
		$gsLocale = $this->Guisetting->GsLocale->find('list');
		$gsLookandfeel = $this->Guisetting->GsLookandfeel->find('list');
		$gsMasterlock = $this->Guisetting->GsMasterlock->find('list');
		$gsMusicfiles = $this->Guisetting->GsMusicfiles->find('list');
		$gsMusiclibrary = $this->Guisetting->GsMusiclibrary->find('list');
		$gsMusicplayer = $this->Guisetting->GsMusicplayer->find('list');
		$gsMymusic = $this->Guisetting->GsMymusic->find('list');
		$gsMyvideo = $this->Guisetting->GsMyvideo->find('list');
		$gsNetwork = $this->Guisetting->GsNetwork->find('list');
		$gsPictures = $this->Guisetting->GsPictures->find('list');
		$gsPowermanagement = $this->Guisetting->GsPowermanagement->find('list');
		$gsPvrmanager = $this->Guisetting->GsPvrmanager->find('list');
		$gsPvrmenu = $this->Guisetting->GsPvrmenu->find('list');
		$gsPvrparental = $this->Guisetting->GsPvrparental->find('list');
		$gsPvrplayback = $this->Guisetting->GsPvrplayback->find('list');
		$gsPvrpowermanagement = $this->Guisetting->GsPvrpowermanagement->find('list');
		$gsPvrrecord = $this->Guisetting->GsPvrrecord->find('list');
		$gsServices = $this->Guisetting->GsServices->find('list');
		$gsScraper = $this->Guisetting->GsScrapers->find('list');
		$gsScreensaver = $this->Guisetting->GsScreensaver->find('list');
		$gsSlideshow = $this->Guisetting->GsSlideshow->find('list');
		$gsSmb = $this->Guisetting->GsSmb->find('list');
		$gsSubtitles = $this->Guisetting->GsSubtitles->find('list');
		$gsSystem = $this->Guisetting->GsSystem->find('list');
		$gsVideolibrary = $this->Guisetting->GsVideolibrary->find('list');
		$gsVideoplayer = $this->Guisetting->GsVideoplayer->find('list');
		$gsVideoscreen = $this->Guisetting->GsVideoscreen->find('list');
		$gsWeather = $this->Guisetting->GsWeather->find('list');
		$gsWindow = $this->Guisetting->GsWindow->find('list');
		$gsSkinsettings = $this->Guisetting->GsSkinsettings->find('list');
		$gsDefaultvideosettings = $this->Guisetting->GsDefaultvideosettings->find('list');
		$gsViewstates = $this->Guisetting->GsViewstates->find('list');
		$gsAudio = $this->Guisetting->GsAudio->find('list');
		$this->set(compact('gsAudiocds', 'gsAudiooutput', 'gsCache', 'gsCacheaudio', 'gsCachedvd', 'gsCacheunknown', 'gsCachevideo', 'gsDebug', 'gsDisc', 'gsDvds', 'gsEpg', 'gsFilelists', 'gsGeneral', 'gsInput', 'gsKaraoke', 'gsLocale', 'gsLookandfeel', 'gsMasterlock', 'gsMusicfiles', 'gsMusiclibrary', 'gsMusicplayer', 'gsMymusic', 'gsMyvideo', 'gsNetwork', 'gsPicture', 'gsPowermanagement', 'gsPvrmanager', 'gsPvrmenu', 'gsPvrparental', 'gsPvrplayback', 'gsPvrpowermanagement', 'gsPvrrecord', 'gsServices', 'gsScrapers', 'gsScreensaver', 'gsSlideshow', 'gsSmb', 'gsSubtitles', 'gsSystem', 'gsVideolibrary', 'gsVideoplayer', 'gsVideoscreen', 'gsWeather', 'gsWindow', 'gsSkinsettings', 'gsDefaultvideosettings', 'gsViewstates', 'gsAudio'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
        $this->Guisetting->id = $id;
		if (!$this->Guisetting->exists($id)) {
			throw new NotFoundException(__('Invalid guisetting'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Guisetting->save($this->request->data)) {
				$this->Session->setFlash(__('The guisetting has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guisetting could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Guisetting.' . $this->Guisetting->primaryKey => $id));
			$this->request->data = $this->Guisetting->find('first', $options);
		}
		$gsAudiocds = $this->Guisetting->GsAudiocds->find('list');
		$gsAudiooutput = $this->Guisetting->GsAudiooutput->find('list');
		$gsCache = $this->Guisetting->GsCache->find('list');
		$gsCacheaudio = $this->Guisetting->GsCacheaudio->find('list');
		$gsCachedvd = $this->Guisetting->GsCachedvd->find('list');
		$gsCacheunknown = $this->Guisetting->GsCacheunknown->find('list');
		$gsCachevideo = $this->Guisetting->GsCachevideo->find('list');
		$gsDebug = $this->Guisetting->GsDebug->find('list');
		$gsDisc = $this->Guisetting->GsDisc->find('list');
		$gsDvds = $this->Guisetting->GsDvds->find('list');
		$gsEpg = $this->Guisetting->GsEpg->find('list');
		$gsFilelists = $this->Guisetting->GsFilelists->find('list');
		$gsGeneral = $this->Guisetting->GsGeneral->find('list');
		$gsInput = $this->Guisetting->GsInput->find('list');
		$gsKaraoke = $this->Guisetting->GsKaraoke->find('list');
		$gsLocale = $this->Guisetting->GsLocale->find('list');
		$gsLookandfeel = $this->Guisetting->GsLookandfeel->find('list');
		$gsMasterlock = $this->Guisetting->GsMasterlock->find('list');
		$gsMusicfiles = $this->Guisetting->GsMusicfiles->find('list');
		$gsMusiclibrary = $this->Guisetting->GsMusiclibrary->find('list');
		$gsMusicplayer = $this->Guisetting->GsMusicplayer->find('list');
		$gsMymusic = $this->Guisetting->GsMymusic->find('list');
		$gsMyvideo = $this->Guisetting->GsMyvideo->find('list');
		$gsNetwork = $this->Guisetting->GsNetwork->find('list');
		$gsPictures = $this->Guisetting->GsPictures->find('list');
		$gsPowermanagement = $this->Guisetting->GsPowermanagement->find('list');
		$gsPvrmanager = $this->Guisetting->GsPvrmanager->find('list');
		$gsPvrmenu = $this->Guisetting->GsPvrmenu->find('list');
		$gsPvrparental = $this->Guisetting->GsPvrparental->find('list');
		$gsPvrplayback = $this->Guisetting->GsPvrplayback->find('list');
		$gsPvrpowermanagement = $this->Guisetting->GsPvrpowermanagement->find('list');
		$gsPvrrecord = $this->Guisetting->GsPvrrecord->find('list');
		$gsServices = $this->Guisetting->GsServices->find('list');
		$gsScraper = $this->Guisetting->GsScrapers->find('list');
		$gsScreensaver = $this->Guisetting->GsScreensaver->find('list');
		$gsSlideshow = $this->Guisetting->GsSlideshow->find('list');
		$gsSmb = $this->Guisetting->GsSmb->find('list');
		$gsSubtitles = $this->Guisetting->GsSubtitles->find('list');
		$gsSystem = $this->Guisetting->GsSystem->find('list');
		$gsVideolibrary = $this->Guisetting->GsVideolibrary->find('list');
		$gsVideoplayer = $this->Guisetting->GsVideoplayer->find('list');
		$gsVideoscreen = $this->Guisetting->GsVideoscreen->find('list');
		$gsWeather = $this->Guisetting->GsWeather->find('list');
		$gsWindow = $this->Guisetting->GsWindow->find('list');
		$gsSkinsettings = $this->Guisetting->GsSkinsettings->find('list');
		$gsDefaultvideosettings = $this->Guisetting->GsDefaultvideosettings->find('list');
		$gsViewstates = $this->Guisetting->GsViewstates->find('list');
		$gsAudio = $this->Guisetting->GsAudio->find('list');
		$this->set(compact('gsAudiocds', 'gsAudiooutput', 'gsCache', 'gsCacheaudio', 'gsCachedvd', 'gsCacheunknown', 'gsCachevideo', 'gsDebug', 'gsDisc', 'gsDvds', 'gsEpg', 'gsFilelists', 'gsGeneral', 'gsInput', 'gsKaraoke', 'gsLocale', 'gsLookandfeel', 'gsMasterlock', 'gsMusicfiles', 'gsMusiclibrary', 'gsMusicplayer', 'gsMymusic', 'gsMyvideo', 'gsNetwork', 'gsPicture', 'gsPowermanagement', 'gsPvrmanager', 'gsPvrmenu', 'gsPvrparental', 'gsPvrplayback', 'gsPvrpowermanagement', 'gsPvrrecord', 'gsServices', 'gsScrapers', 'gsScreensaver', 'gsSlideshow', 'gsSmb', 'gsSubtitles', 'gsSystem', 'gsVideolibrary', 'gsVideoplayer', 'gsVideoscreen', 'gsWeather', 'gsWindow', 'gsSkinsettings', 'gsDefaultvideosettings', 'gsViewstates', 'gsAudio'));
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
		$this->Guisetting->id = $id;
		if (!$this->Guisetting->exists()) {
			throw new NotFoundException(__('Invalid guisetting'));
		}
		if ($this->Guisetting->delete()) {
			$this->Session->setFlash(__('Guisetting deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Guisetting was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
