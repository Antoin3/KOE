
<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-9">

		<div class="guisettings index">
		
			<h2><?php echo __('Guisettings'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_audiocds_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_audiooutput_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_cache_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_cacheaudio_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_cachedvd_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_cacheunknown_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_cachevideo_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_debug_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_disc_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_disc_id1'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_dvds_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_epg_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_filelists_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_general_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_input_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_karaoke_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_locale_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_lookandfeel_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_masterlock_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_musicfiles_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_musiclibrary_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_musicplayer_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_mymusic_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_myvideo_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_network_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_pictures_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_powermanagement_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_pvrmanager_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_pvrmenu_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_pvrparental_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_pvrplayback_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_pvrpowermanagement_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_pvrrecord_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_services_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_scrapers_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_screensaver_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_slideshow_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_smb_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_subtitles_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_system_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_videolibrary_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_videoplayer_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_videoscreen_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_weather_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_window_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_skinsettings_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_defaultvideosettings_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_viewstates_id'); ?></th>
							<th><?php echo $this->Paginator->sort('gs_audio_id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($guisettings as $guisetting): ?>
	<tr>
		<td><?php echo h($guisetting['Guisetting']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsAudiocds']['id'], array('controller' => 'gs_audiocds', 'action' => 'view', $guisetting['GsAudiocds']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsAudiooutput']['id'], array('controller' => 'gs_audiooutputs', 'action' => 'view', $guisetting['GsAudiooutput']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsCache']['id'], array('controller' => 'gs_caches', 'action' => 'view', $guisetting['GsCache']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsCacheaudio']['id'], array('controller' => 'gs_cacheaudios', 'action' => 'view', $guisetting['GsCacheaudio']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsCachedvd']['id'], array('controller' => 'gs_cachedvds', 'action' => 'view', $guisetting['GsCachedvd']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsCacheunknown']['id'], array('controller' => 'gs_cacheunknowns', 'action' => 'view', $guisetting['GsCacheunknown']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsCachevideo']['id'], array('controller' => 'gs_cachevideos', 'action' => 'view', $guisetting['GsCachevideo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsDebug']['id'], array('controller' => 'gs_debugs', 'action' => 'view', $guisetting['GsDebug']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsDisc']['id'], array('controller' => 'gs_discs', 'action' => 'view', $guisetting['GsDisc']['id'])); ?>
		</td>
		<td><?php echo h($guisetting['Guisetting']['gs_disc_id1']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsDvds']['id'], array('controller' => 'gs_dvds', 'action' => 'view', $guisetting['GsDvds']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsEpg']['id'], array('controller' => 'gs_epgs', 'action' => 'view', $guisetting['GsEpg']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsFilelists']['id'], array('controller' => 'gs_filelists', 'action' => 'view', $guisetting['GsFilelists']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsGeneral']['id'], array('controller' => 'gs_generals', 'action' => 'view', $guisetting['GsGeneral']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsInput']['id'], array('controller' => 'gs_inputs', 'action' => 'view', $guisetting['GsInput']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsKaraoke']['id'], array('controller' => 'gs_karaokes', 'action' => 'view', $guisetting['GsKaraoke']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsLocale']['id'], array('controller' => 'gs_locales', 'action' => 'view', $guisetting['GsLocale']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsLookandfeel']['id'], array('controller' => 'gs_lookandfeels', 'action' => 'view', $guisetting['GsLookandfeel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsMasterlock']['id'], array('controller' => 'gs_masterlocks', 'action' => 'view', $guisetting['GsMasterlock']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsMusicfiles']['id'], array('controller' => 'gs_musicfiles', 'action' => 'view', $guisetting['GsMusicfiles']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsMusiclibrary']['id'], array('controller' => 'gs_musiclibraries', 'action' => 'view', $guisetting['GsMusiclibrary']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsMusicplayer']['id'], array('controller' => 'gs_musicplayers', 'action' => 'view', $guisetting['GsMusicplayer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsMymusic']['id'], array('controller' => 'gs_mymusics', 'action' => 'view', $guisetting['GsMymusic']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsMyvideo']['id'], array('controller' => 'gs_myvideos', 'action' => 'view', $guisetting['GsMyvideo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsNetwork']['id'], array('controller' => 'gs_networks', 'action' => 'view', $guisetting['GsNetwork']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsPictures']['id'], array('controller' => 'gs_pictures', 'action' => 'view', $guisetting['GsPictures']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsPowermanagement']['id'], array('controller' => 'gs_powermanagements', 'action' => 'view', $guisetting['GsPowermanagement']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsPvrmanager']['id'], array('controller' => 'gs_pvrmanagers', 'action' => 'view', $guisetting['GsPvrmanager']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsPvrmenu']['id'], array('controller' => 'gs_pvrmenus', 'action' => 'view', $guisetting['GsPvrmenu']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsPvrparental']['id'], array('controller' => 'gs_pvrparentals', 'action' => 'view', $guisetting['GsPvrparental']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsPvrplayback']['id'], array('controller' => 'gs_pvrplaybacks', 'action' => 'view', $guisetting['GsPvrplayback']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsPvrpowermanagement']['id'], array('controller' => 'gs_pvrpowermanagements', 'action' => 'view', $guisetting['GsPvrpowermanagement']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsPvrrecord']['id'], array('controller' => 'gs_pvrrecords', 'action' => 'view', $guisetting['GsPvrrecord']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsServices']['id'], array('controller' => 'gs_services', 'action' => 'view', $guisetting['GsServices']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsScrapers']['id'], array('controller' => 'gs_scrapers', 'action' => 'view', $guisetting['GsScrapers']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsScreensaver']['id'], array('controller' => 'gs_screensavers', 'action' => 'view', $guisetting['GsScreensaver']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsSlideshow']['id'], array('controller' => 'gs_slideshows', 'action' => 'view', $guisetting['GsSlideshow']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsSmb']['id'], array('controller' => 'gs_smbs', 'action' => 'view', $guisetting['GsSmb']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsSubtitles']['id'], array('controller' => 'gs_subtitles', 'action' => 'view', $guisetting['GsSubtitles']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsSystem']['id'], array('controller' => 'gs_systems', 'action' => 'view', $guisetting['GsSystem']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsVideolibrary']['id'], array('controller' => 'gs_videolibraries', 'action' => 'view', $guisetting['GsVideolibrary']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsVideoplayer']['id'], array('controller' => 'gs_videoplayers', 'action' => 'view', $guisetting['GsVideoplayer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsVideoscreen']['id'], array('controller' => 'gs_videoscreens', 'action' => 'view', $guisetting['GsVideoscreen']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsWeather']['id'], array('controller' => 'gs_weathers', 'action' => 'view', $guisetting['GsWeather']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsWindow']['id'], array('controller' => 'gs_windows', 'action' => 'view', $guisetting['GsWindow']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsSkinsettings']['name'], array('controller' => 'gs_skinsettings', 'action' => 'view', $guisetting['GsSkinsettings']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsDefaultvideosettings']['id'], array('controller' => 'gs_defaultvideosettings', 'action' => 'view', $guisetting['GsDefaultvideosettings']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsViewstates']['name'], array('controller' => 'gs_viewstates', 'action' => 'view', $guisetting['GsViewstates']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($guisetting['GsAudio']['id'], array('controller' => 'gs_audios', 'action' => 'view', $guisetting['GsAudio']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $guisetting['Guisetting']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $guisetting['Guisetting']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $guisetting['Guisetting']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $guisetting['Guisetting']['id'])); ?>
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