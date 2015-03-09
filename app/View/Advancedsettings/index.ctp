
<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-9">

		<div class="advancedsettings index">
		
			<h2><?php echo __('Advancedsettings'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('loglevel'); ?></th>
							<th><?php echo $this->Paginator->sort('skiploopfilter'); ?></th>
							<th><?php echo $this->Paginator->sort('measurerefreshrate'); ?></th>
							<th><?php echo $this->Paginator->sort('forcedswaptime'); ?></th>
							<th><?php echo $this->Paginator->sort('cleandatetime'); ?></th>
							<th><?php echo $this->Paginator->sort('tvmultipartmatching'); ?></th>
							<th><?php echo $this->Paginator->sort('imageres'); ?></th>
							<th><?php echo $this->Paginator->sort('fanartres'); ?></th>
							<th><?php echo $this->Paginator->sort('useddsfanart'); ?></th>
							<th><?php echo $this->Paginator->sort('playlistasfolders'); ?></th>
							<th><?php echo $this->Paginator->sort('playlistretries'); ?></th>
							<th><?php echo $this->Paginator->sort('playlisttimeout'); ?></th>
							<th><?php echo $this->Paginator->sort('cddbaddress'); ?></th>
							<th><?php echo $this->Paginator->sort('songinfoduration'); ?></th>
							<th><?php echo $this->Paginator->sort('enableairtunesdebuglog'); ?></th>
							<th><?php echo $this->Paginator->sort('packagefoldersize'); ?></th>
							<th><?php echo $this->Paginator->sort('detectasudf'); ?></th>
							<th><?php echo $this->Paginator->sort('remotedelay'); ?></th>
							<th><?php echo $this->Paginator->sort('remoterepeat'); ?></th>
							<th><?php echo $this->Paginator->sort('controllerdeadzone'); ?></th>
							<th><?php echo $this->Paginator->sort('seeksteps'); ?></th>
							<th><?php echo $this->Paginator->sort('advancedsettingscol'); ?></th>
							<th><?php echo $this->Paginator->sort('allowd3d9ex'); ?></th>
							<th><?php echo $this->Paginator->sort('restrictcapsmask'); ?></th>
							<th><?php echo $this->Paginator->sort('forced3d9ex'); ?></th>
							<th><?php echo $this->Paginator->sort('showexitbutton'); ?></th>
							<th><?php echo $this->Paginator->sort('fullscreen'); ?></th>
							<th><?php echo $this->Paginator->sort('splash'); ?></th>
							<th><?php echo $this->Paginator->sort('cputempcommand'); ?></th>
							<th><?php echo $this->Paginator->sort('gputempcommand'); ?></th>
							<th><?php echo $this->Paginator->sort('glrectanglehack'); ?></th>
							<th><?php echo $this->Paginator->sort('alwaysontop'); ?></th>
							<th><?php echo $this->Paginator->sort('as_jsonrpc_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_video_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_audio_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_musicdatabase_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_edl_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_pvr_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_epg_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_videolibrary_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_videoscanner_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_videoextensions_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_musicextensions_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_tvshowsmatching_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_discstubextensions_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_musicfilenamefilters_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_fanart_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_languagecodes_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_musicthumbs_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_sorttokens_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_videodatabase_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_moviestaking_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_myth_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_musiclibrary_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_karaoke_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_pictureextensions_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_pictureexcludes_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_slideshow_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_samba_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_hosts_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_network_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_tuxbox_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_pathsubstitution_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_window_id'); ?></th>
							<th><?php echo $this->Paginator->sort('as_gui_id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($advancedsettings as $advancedsetting): ?>
	<tr>
		<td><?php echo h($advancedsetting['Advancedsetting']['id']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['loglevel']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['skiploopfilter']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['measurerefreshrate']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['forcedswaptime']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['cleandatetime']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['tvmultipartmatching']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['imageres']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['fanartres']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['useddsfanart']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['playlistasfolders']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['playlistretries']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['playlisttimeout']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['cddbaddress']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['songinfoduration']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['enableairtunesdebuglog']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['packagefoldersize']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['detectasudf']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['remotedelay']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['remoterepeat']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['controllerdeadzone']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['seeksteps']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['advancedsettingscol']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['allowd3d9ex']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['restrictcapsmask']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['forced3d9ex']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['showexitbutton']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['fullscreen']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['splash']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['cputempcommand']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['gputempcommand']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['glrectanglehack']); ?>&nbsp;</td>
		<td><?php echo h($advancedsetting['Advancedsetting']['alwaysontop']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsJsonrpc']['id'], array('controller' => 'as_jsonrpcs', 'action' => 'view', $advancedsetting['AsJsonrpc']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsVideo']['id'], array('controller' => 'as_videos', 'action' => 'view', $advancedsetting['AsVideo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsAudio']['id'], array('controller' => 'as_audios', 'action' => 'view', $advancedsetting['AsAudio']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsMusicdatabase']['id'], array('controller' => 'as_musicdatabases', 'action' => 'view', $advancedsetting['AsMusicdatabase']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsEdl']['id'], array('controller' => 'as_edls', 'action' => 'view', $advancedsetting['AsEdl']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsPvr']['id'], array('controller' => 'as_pvrs', 'action' => 'view', $advancedsetting['AsPvr']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsEpg']['id'], array('controller' => 'as_epgs', 'action' => 'view', $advancedsetting['AsEpg']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsVideolibrary']['id'], array('controller' => 'as_videolibraries', 'action' => 'view', $advancedsetting['AsVideolibrary']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsVideoscanner']['id'], array('controller' => 'as_videoscanners', 'action' => 'view', $advancedsetting['AsVideoscanner']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsVideoextensions']['id'], array('controller' => 'as_videoextensions', 'action' => 'view', $advancedsetting['AsVideoextensions']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsMusicextensions']['id'], array('controller' => 'as_musicextensions', 'action' => 'view', $advancedsetting['AsMusicextensions']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsTvshowsmatching']['id'], array('controller' => 'as_tvshowsmatchings', 'action' => 'view', $advancedsetting['AsTvshowsmatching']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsDiscstubextensions']['id'], array('controller' => 'as_discstubextensions', 'action' => 'view', $advancedsetting['AsDiscstubextensions']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsMusicfilenamefilters']['id'], array('controller' => 'as_musicfilenamefilters', 'action' => 'view', $advancedsetting['AsMusicfilenamefilters']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsFanart']['id'], array('controller' => 'as_fanarts', 'action' => 'view', $advancedsetting['AsFanart']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsLanguagecodes']['id'], array('controller' => 'as_languagecodes', 'action' => 'view', $advancedsetting['AsLanguagecodes']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsMusicthumbs']['id'], array('controller' => 'as_musicthumbs', 'action' => 'view', $advancedsetting['AsMusicthumbs']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsSorttokens']['id'], array('controller' => 'as_sorttokens', 'action' => 'view', $advancedsetting['AsSorttokens']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsVideodatabase']['id'], array('controller' => 'as_videodatabases', 'action' => 'view', $advancedsetting['AsVideodatabase']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsMoviestaking']['id'], array('controller' => 'as_moviestakings', 'action' => 'view', $advancedsetting['AsMoviestaking']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsMyth']['id'], array('controller' => 'as_myths', 'action' => 'view', $advancedsetting['AsMyth']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsMusiclibrary']['id'], array('controller' => 'as_musiclibraries', 'action' => 'view', $advancedsetting['AsMusiclibrary']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsKaraoke']['id'], array('controller' => 'as_karaokes', 'action' => 'view', $advancedsetting['AsKaraoke']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsPictureextensions']['id'], array('controller' => 'as_pictureextensions', 'action' => 'view', $advancedsetting['AsPictureextensions']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsPictureexcludes']['id'], array('controller' => 'as_pictureexcludes', 'action' => 'view', $advancedsetting['AsPictureexcludes']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsSlideshow']['id'], array('controller' => 'as_slideshows', 'action' => 'view', $advancedsetting['AsSlideshow']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsSamba']['id'], array('controller' => 'as_sambas', 'action' => 'view', $advancedsetting['AsSamba']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsHosts']['id'], array('controller' => 'as_hosts', 'action' => 'view', $advancedsetting['AsHosts']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsNetwork']['id'], array('controller' => 'as_networks', 'action' => 'view', $advancedsetting['AsNetwork']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsTuxbox']['id'], array('controller' => 'as_tuxboxes', 'action' => 'view', $advancedsetting['AsTuxbox']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsPathsubstitution']['id'], array('controller' => 'as_pathsubstitutions', 'action' => 'view', $advancedsetting['AsPathsubstitution']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsWindow']['id'], array('controller' => 'as_windows', 'action' => 'view', $advancedsetting['AsWindow']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($advancedsetting['AsGui']['id'], array('controller' => 'as_guis', 'action' => 'view', $advancedsetting['AsGui']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $advancedsetting['Advancedsetting']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $advancedsetting['Advancedsetting']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $advancedsetting['Advancedsetting']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $advancedsetting['Advancedsetting']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
			</small></p>

			<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->