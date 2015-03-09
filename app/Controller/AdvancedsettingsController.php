<?php
App::uses('AppController', 'Controller');
/**
 * Advancedsettings Controller
 *
 * @property Advancedsetting $Advancedsetting
 * @property PaginatorComponent $Paginator
 */
class AdvancedsettingsController extends AppController {

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
		$this->Advancedsetting->recursive = 0;
		$this->set('advancedsettings', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Advancedsetting->exists($id)) {
			throw new NotFoundException(__('Invalid advancedsetting'));
		}
		$options = array('conditions' => array('Advancedsetting.' . $this->Advancedsetting->primaryKey => $id));
		$this->set('advancedsetting', $this->Advancedsetting->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Advancedsetting->create();
			if ($this->Advancedsetting->save($this->request->data)) {
				$this->Session->setFlash(__('The advancedsetting has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The advancedsetting could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$asJsonrpcs = $this->Advancedsetting->AsJsonrpc->find('list');
		$asVideos = $this->Advancedsetting->AsVideo->find('list');
		$asAudios = $this->Advancedsetting->AsAudio->find('list');
		$asMusicdatabases = $this->Advancedsetting->AsMusicdatabase->find('list');
		$asEdls = $this->Advancedsetting->AsEdl->find('list');
		$asPvrs = $this->Advancedsetting->AsPvr->find('list');
		$asEpgs = $this->Advancedsetting->AsEpg->find('list');
		$asVideolibraries = $this->Advancedsetting->AsVideolibrary->find('list');
		$asVideoscanners = $this->Advancedsetting->AsVideoscanner->find('list');
		$asVideoextensions = $this->Advancedsetting->AsVideoextension->find('list');
		$asMusicextensions = $this->Advancedsetting->AsMusicextension->find('list');
		$asTvshowsmatchings = $this->Advancedsetting->AsTvshowsmatching->find('list');
		$asDiscstubextensions = $this->Advancedsetting->AsDiscstubextension->find('list');
		$asMusicfilenamefilters = $this->Advancedsetting->AsMusicfilenamefilter->find('list');
		$asFanarts = $this->Advancedsetting->AsFanart->find('list');
		$asLanguagecodes = $this->Advancedsetting->AsLanguagecode->find('list');
		$asMusicthumbs = $this->Advancedsetting->AsMusicthumb->find('list');
		$asSorttokens = $this->Advancedsetting->AsSorttoken->find('list');
		$asVideodatabases = $this->Advancedsetting->AsVideodatabase->find('list');
		$asMoviestakings = $this->Advancedsetting->AsMoviestaking->find('list');
		$asMyths = $this->Advancedsetting->AsMyth->find('list');
		$asMusiclibraries = $this->Advancedsetting->AsMusiclibrary->find('list');
		$asKaraokes = $this->Advancedsetting->AsKaraoke->find('list');
		$asPictureextensions = $this->Advancedsetting->AsPictureextension->find('list');
		$asPictureexcludes = $this->Advancedsetting->AsPictureexclude->find('list');
		$asSlideshows = $this->Advancedsetting->AsSlideshow->find('list');
		$asSambas = $this->Advancedsetting->AsSamba->find('list');
		$asHosts = $this->Advancedsetting->AsHost->find('list');
		$asNetworks = $this->Advancedsetting->AsNetwork->find('list');
		$asTuxboxes = $this->Advancedsetting->AsTuxbox->find('list');
		$asPathsubstitutions = $this->Advancedsetting->AsPathsubstitution->find('list');
		$asWindows = $this->Advancedsetting->AsWindow->find('list');
		$asGuis = $this->Advancedsetting->AsGui->find('list');
		$this->set(compact('asJsonrpcs', 'asVideos', 'asAudios', 'asMusicdatabases', 'asEdls', 'asPvrs', 'asEpgs', 'asVideolibraries', 'asVideoscanners', 'asVideoextensions', 'asMusicextensions', 'asTvshowsmatchings', 'asDiscstubextensions', 'asMusicfilenamefilters', 'asFanarts', 'asLanguagecodes', 'asMusicthumbs', 'asSorttokens', 'asVideodatabases', 'asMoviestakings', 'asMyths', 'asMusiclibraries', 'asKaraokes', 'asPictureextensions', 'asPictureexcludes', 'asSlideshows', 'asSambas', 'asHosts', 'asNetworks', 'asTuxboxes', 'asPathsubstitutions', 'asWindows', 'asGuis'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Advancedsetting->id = $id;
		if (!$this->Advancedsetting->exists($id)) {
			throw new NotFoundException(__('Invalid advancedsetting'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Advancedsetting->save($this->request->data)) {
				$this->Session->setFlash(__('The advancedsetting has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The advancedsetting could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Advancedsetting.' . $this->Advancedsetting->primaryKey => $id));
			$this->request->data = $this->Advancedsetting->find('first', $options);
		}
		$asJsonrpcs = $this->Advancedsetting->AsJsonrpc->find('list');
		$asVideos = $this->Advancedsetting->AsVideo->find('list');
		$asAudios = $this->Advancedsetting->AsAudio->find('list');
		$asMusicdatabases = $this->Advancedsetting->AsMusicdatabase->find('list');
		$asEdls = $this->Advancedsetting->AsEdl->find('list');
		$asPvrs = $this->Advancedsetting->AsPvr->find('list');
		$asEpgs = $this->Advancedsetting->AsEpg->find('list');
		$asVideolibraries = $this->Advancedsetting->AsVideolibrary->find('list');
		$asVideoscanners = $this->Advancedsetting->AsVideoscanner->find('list');
		$asVideoextensions = $this->Advancedsetting->AsVideoextension->find('list');
		$asMusicextensions = $this->Advancedsetting->AsMusicextension->find('list');
		$asTvshowsmatchings = $this->Advancedsetting->AsTvshowsmatching->find('list');
		$asDiscstubextensions = $this->Advancedsetting->AsDiscstubextension->find('list');
		$asMusicfilenamefilters = $this->Advancedsetting->AsMusicfilenamefilter->find('list');
		$asFanarts = $this->Advancedsetting->AsFanart->find('list');
		$asLanguagecodes = $this->Advancedsetting->AsLanguagecode->find('list');
		$asMusicthumbs = $this->Advancedsetting->AsMusicthumb->find('list');
		$asSorttokens = $this->Advancedsetting->AsSorttoken->find('list');
		$asVideodatabases = $this->Advancedsetting->AsVideodatabase->find('list');
		$asMoviestakings = $this->Advancedsetting->AsMoviestaking->find('list');
		$asMyths = $this->Advancedsetting->AsMyth->find('list');
		$asMusiclibraries = $this->Advancedsetting->AsMusiclibrary->find('list');
		$asKaraokes = $this->Advancedsetting->AsKaraoke->find('list');
		$asPictureextensions = $this->Advancedsetting->AsPictureextension->find('list');
		$asPictureexcludes = $this->Advancedsetting->AsPictureexclude->find('list');
		$asSlideshows = $this->Advancedsetting->AsSlideshow->find('list');
		$asSambas = $this->Advancedsetting->AsSamba->find('list');
		$asHosts = $this->Advancedsetting->AsHost->find('list');
		$asNetworks = $this->Advancedsetting->AsNetwork->find('list');
		$asTuxboxes = $this->Advancedsetting->AsTuxbox->find('list');
		$asPathsubstitutions = $this->Advancedsetting->AsPathsubstitution->find('list');
		$asWindows = $this->Advancedsetting->AsWindow->find('list');
		$asGuis = $this->Advancedsetting->AsGui->find('list');
		$this->set(compact('asJsonrpcs', 'asVideos', 'asAudios', 'asMusicdatabases', 'asEdls', 'asPvrs', 'asEpgs', 'asVideolibraries', 'asVideoscanners', 'asVideoextensions', 'asMusicextensions', 'asTvshowsmatchings', 'asDiscstubextensions', 'asMusicfilenamefilters', 'asFanarts', 'asLanguagecodes', 'asMusicthumbs', 'asSorttokens', 'asVideodatabases', 'asMoviestakings', 'asMyths', 'asMusiclibraries', 'asKaraokes', 'asPictureextensions', 'asPictureexcludes', 'asSlideshows', 'asSambas', 'asHosts', 'asNetworks', 'asTuxboxes', 'asPathsubstitutions', 'asWindows', 'asGuis'));
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
		$this->Advancedsetting->id = $id;
		if (!$this->Advancedsetting->exists()) {
			throw new NotFoundException(__('Invalid advancedsetting'));
		}
		if ($this->Advancedsetting->delete()) {
			$this->Session->setFlash(__('Advancedsetting deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Advancedsetting was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Advancedsetting->recursive = 0;
		$this->set('advancedsettings', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Advancedsetting->exists($id)) {
			throw new NotFoundException(__('Invalid advancedsetting'));
		}
		$options = array('conditions' => array('Advancedsetting.' . $this->Advancedsetting->primaryKey => $id));
		$this->set('advancedsetting', $this->Advancedsetting->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Advancedsetting->create();
			if ($this->Advancedsetting->save($this->request->data)) {
				$this->Session->setFlash(__('The advancedsetting has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The advancedsetting could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$asJsonrpcs = $this->Advancedsetting->AsJsonrpc->find('list');
		$asVideos = $this->Advancedsetting->AsVideo->find('list');
		$asAudios = $this->Advancedsetting->AsAudio->find('list');
		$asMusicdatabases = $this->Advancedsetting->AsMusicdatabase->find('list');
		$asEdls = $this->Advancedsetting->AsEdl->find('list');
		$asPvrs = $this->Advancedsetting->AsPvr->find('list');
		$asEpgs = $this->Advancedsetting->AsEpg->find('list');
		$asVideolibraries = $this->Advancedsetting->AsVideolibrary->find('list');
		$asVideoscanners = $this->Advancedsetting->AsVideoscanner->find('list');
		$asVideoextensions = $this->Advancedsetting->AsVideoextension->find('list');
		$asMusicextensions = $this->Advancedsetting->AsMusicextension->find('list');
		$asTvshowsmatchings = $this->Advancedsetting->AsTvshowsmatching->find('list');
		$asDiscstubextensions = $this->Advancedsetting->AsDiscstubextension->find('list');
		$asMusicfilenamefilters = $this->Advancedsetting->AsMusicfilenamefilter->find('list');
		$asFanarts = $this->Advancedsetting->AsFanart->find('list');
		$asLanguagecodes = $this->Advancedsetting->AsLanguagecode->find('list');
		$asMusicthumbs = $this->Advancedsetting->AsMusicthumb->find('list');
		$asSorttokens = $this->Advancedsetting->AsSorttoken->find('list');
		$asVideodatabases = $this->Advancedsetting->AsVideodatabase->find('list');
		$asMoviestakings = $this->Advancedsetting->AsMoviestaking->find('list');
		$asMyths = $this->Advancedsetting->AsMyth->find('list');
		$asMusiclibraries = $this->Advancedsetting->AsMusiclibrary->find('list');
		$asKaraokes = $this->Advancedsetting->AsKaraoke->find('list');
		$asPictureextensions = $this->Advancedsetting->AsPictureextension->find('list');
		$asPictureexcludes = $this->Advancedsetting->AsPictureexclude->find('list');
		$asSlideshows = $this->Advancedsetting->AsSlideshow->find('list');
		$asSambas = $this->Advancedsetting->AsSamba->find('list');
		$asHosts = $this->Advancedsetting->AsHost->find('list');
		$asNetworks = $this->Advancedsetting->AsNetwork->find('list');
		$asTuxboxes = $this->Advancedsetting->AsTuxbox->find('list');
		$asPathsubstitutions = $this->Advancedsetting->AsPathsubstitution->find('list');
		$asWindows = $this->Advancedsetting->AsWindow->find('list');
		$asGuis = $this->Advancedsetting->AsGui->find('list');
		$this->set(compact('asJsonrpcs', 'asVideos', 'asAudios', 'asMusicdatabases', 'asEdls', 'asPvrs', 'asEpgs', 'asVideolibraries', 'asVideoscanners', 'asVideoextensions', 'asMusicextensions', 'asTvshowsmatchings', 'asDiscstubextensions', 'asMusicfilenamefilters', 'asFanarts', 'asLanguagecodes', 'asMusicthumbs', 'asSorttokens', 'asVideodatabases', 'asMoviestakings', 'asMyths', 'asMusiclibraries', 'asKaraokes', 'asPictureextensions', 'asPictureexcludes', 'asSlideshows', 'asSambas', 'asHosts', 'asNetworks', 'asTuxboxes', 'asPathsubstitutions', 'asWindows', 'asGuis'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
        $this->Advancedsetting->id = $id;
		if (!$this->Advancedsetting->exists($id)) {
			throw new NotFoundException(__('Invalid advancedsetting'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Advancedsetting->save($this->request->data)) {
				$this->Session->setFlash(__('The advancedsetting has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The advancedsetting could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Advancedsetting.' . $this->Advancedsetting->primaryKey => $id));
			$this->request->data = $this->Advancedsetting->find('first', $options);
		}
		$asJsonrpcs = $this->Advancedsetting->AsJsonrpc->find('list');
		$asVideos = $this->Advancedsetting->AsVideo->find('list');
		$asAudios = $this->Advancedsetting->AsAudio->find('list');
		$asMusicdatabases = $this->Advancedsetting->AsMusicdatabase->find('list');
		$asEdls = $this->Advancedsetting->AsEdl->find('list');
		$asPvrs = $this->Advancedsetting->AsPvr->find('list');
		$asEpgs = $this->Advancedsetting->AsEpg->find('list');
		$asVideolibraries = $this->Advancedsetting->AsVideolibrary->find('list');
		$asVideoscanners = $this->Advancedsetting->AsVideoscanner->find('list');
		$asVideoextensions = $this->Advancedsetting->AsVideoextension->find('list');
		$asMusicextensions = $this->Advancedsetting->AsMusicextension->find('list');
		$asTvshowsmatchings = $this->Advancedsetting->AsTvshowsmatching->find('list');
		$asDiscstubextensions = $this->Advancedsetting->AsDiscstubextension->find('list');
		$asMusicfilenamefilters = $this->Advancedsetting->AsMusicfilenamefilter->find('list');
		$asFanarts = $this->Advancedsetting->AsFanart->find('list');
		$asLanguagecodes = $this->Advancedsetting->AsLanguagecode->find('list');
		$asMusicthumbs = $this->Advancedsetting->AsMusicthumb->find('list');
		$asSorttokens = $this->Advancedsetting->AsSorttoken->find('list');
		$asVideodatabases = $this->Advancedsetting->AsVideodatabase->find('list');
		$asMoviestakings = $this->Advancedsetting->AsMoviestaking->find('list');
		$asMyths = $this->Advancedsetting->AsMyth->find('list');
		$asMusiclibraries = $this->Advancedsetting->AsMusiclibrary->find('list');
		$asKaraokes = $this->Advancedsetting->AsKaraoke->find('list');
		$asPictureextensions = $this->Advancedsetting->AsPictureextension->find('list');
		$asPictureexcludes = $this->Advancedsetting->AsPictureexclude->find('list');
		$asSlideshows = $this->Advancedsetting->AsSlideshow->find('list');
		$asSambas = $this->Advancedsetting->AsSamba->find('list');
		$asHosts = $this->Advancedsetting->AsHost->find('list');
		$asNetworks = $this->Advancedsetting->AsNetwork->find('list');
		$asTuxboxes = $this->Advancedsetting->AsTuxbox->find('list');
		$asPathsubstitutions = $this->Advancedsetting->AsPathsubstitution->find('list');
		$asWindows = $this->Advancedsetting->AsWindow->find('list');
		$asGuis = $this->Advancedsetting->AsGui->find('list');
		$this->set(compact('asJsonrpcs', 'asVideos', 'asAudios', 'asMusicdatabases', 'asEdls', 'asPvrs', 'asEpgs', 'asVideolibraries', 'asVideoscanners', 'asVideoextensions', 'asMusicextensions', 'asTvshowsmatchings', 'asDiscstubextensions', 'asMusicfilenamefilters', 'asFanarts', 'asLanguagecodes', 'asMusicthumbs', 'asSorttokens', 'asVideodatabases', 'asMoviestakings', 'asMyths', 'asMusiclibraries', 'asKaraokes', 'asPictureextensions', 'asPictureexcludes', 'asSlideshows', 'asSambas', 'asHosts', 'asNetworks', 'asTuxboxes', 'asPathsubstitutions', 'asWindows', 'asGuis'));
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
		$this->Advancedsetting->id = $id;
		if (!$this->Advancedsetting->exists()) {
			throw new NotFoundException(__('Invalid advancedsetting'));
		}
		if ($this->Advancedsetting->delete()) {
			$this->Session->setFlash(__('Advancedsetting deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Advancedsetting was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
