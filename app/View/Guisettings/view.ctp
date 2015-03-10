
<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-9">
		
		<div class="guisettings view">

			<h2><?php  echo __('Guisetting'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($guisetting['Guisetting']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Audiocds'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsAudiocds']['id'], array('controller' => 'gs_audiocds', 'action' => 'view', $guisetting['GsAudiocds']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Audiooutput'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsAudiooutput']['id'], array('controller' => 'gs_audiooutputs', 'action' => 'view', $guisetting['GsAudiooutput']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Cache'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsCache']['id'], array('controller' => 'gs_caches', 'action' => 'view', $guisetting['GsCache']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Cacheaudio'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsCacheaudio']['id'], array('controller' => 'gs_cacheaudios', 'action' => 'view', $guisetting['GsCacheaudio']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Cachedvd'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsCachedvd']['id'], array('controller' => 'gs_cachedvds', 'action' => 'view', $guisetting['GsCachedvd']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Cacheunknown'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsCacheunknown']['id'], array('controller' => 'gs_cacheunknowns', 'action' => 'view', $guisetting['GsCacheunknown']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Cachevideo'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsCachevideo']['id'], array('controller' => 'gs_cachevideos', 'action' => 'view', $guisetting['GsCachevideo']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Debug'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsDebug']['id'], array('controller' => 'gs_debugs', 'action' => 'view', $guisetting['GsDebug']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Disc'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsDisc']['id'], array('controller' => 'gs_discs', 'action' => 'view', $guisetting['GsDisc']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Disc Id1'); ?></strong></td>
		<td>
			<?php echo h($guisetting['Guisetting']['gs_disc_id1']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Dvds'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsDvds']['id'], array('controller' => 'gs_dvds', 'action' => 'view', $guisetting['GsDvds']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Epg'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsEpg']['id'], array('controller' => 'gs_epgs', 'action' => 'view', $guisetting['GsEpg']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Filelists'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsFilelists']['id'], array('controller' => 'gs_filelists', 'action' => 'view', $guisetting['GsFilelists']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs General'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsGeneral']['id'], array('controller' => 'gs_generals', 'action' => 'view', $guisetting['GsGeneral']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Input'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsInput']['id'], array('controller' => 'gs_inputs', 'action' => 'view', $guisetting['GsInput']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Karaoke'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsKaraoke']['id'], array('controller' => 'gs_karaokes', 'action' => 'view', $guisetting['GsKaraoke']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Locale'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsLocale']['id'], array('controller' => 'gs_locales', 'action' => 'view', $guisetting['GsLocale']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Lookandfeel'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsLookandfeel']['id'], array('controller' => 'gs_lookandfeels', 'action' => 'view', $guisetting['GsLookandfeel']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Masterlock'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsMasterlock']['id'], array('controller' => 'gs_masterlocks', 'action' => 'view', $guisetting['GsMasterlock']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Musicfiles'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsMusicfiles']['id'], array('controller' => 'gs_musicfiles', 'action' => 'view', $guisetting['GsMusicfiles']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Musiclibrary'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsMusiclibrary']['id'], array('controller' => 'gs_musiclibraries', 'action' => 'view', $guisetting['GsMusiclibrary']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Musicplayer'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsMusicplayer']['id'], array('controller' => 'gs_musicplayers', 'action' => 'view', $guisetting['GsMusicplayer']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Mymusic'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsMymusic']['id'], array('controller' => 'gs_mymusics', 'action' => 'view', $guisetting['GsMymusic']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Myvideo'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsMyvideo']['id'], array('controller' => 'gs_myvideos', 'action' => 'view', $guisetting['GsMyvideo']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Network'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsNetwork']['id'], array('controller' => 'gs_networks', 'action' => 'view', $guisetting['GsNetwork']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Pictures'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsPictures']['id'], array('controller' => 'gs_pictures', 'action' => 'view', $guisetting['GsPictures']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Powermanagement'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsPowermanagement']['id'], array('controller' => 'gs_powermanagements', 'action' => 'view', $guisetting['GsPowermanagement']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Pvrmanager'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsPvrmanager']['id'], array('controller' => 'gs_pvrmanagers', 'action' => 'view', $guisetting['GsPvrmanager']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Pvrmenu'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsPvrmenu']['id'], array('controller' => 'gs_pvrmenus', 'action' => 'view', $guisetting['GsPvrmenu']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Pvrparental'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsPvrparental']['id'], array('controller' => 'gs_pvrparentals', 'action' => 'view', $guisetting['GsPvrparental']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Pvrplayback'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsPvrplayback']['id'], array('controller' => 'gs_pvrplaybacks', 'action' => 'view', $guisetting['GsPvrplayback']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Pvrpowermanagement'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsPvrpowermanagement']['id'], array('controller' => 'gs_pvrpowermanagements', 'action' => 'view', $guisetting['GsPvrpowermanagement']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Pvrrecord'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsPvrrecord']['id'], array('controller' => 'gs_pvrrecords', 'action' => 'view', $guisetting['GsPvrrecord']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Services'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsServices']['id'], array('controller' => 'gs_services', 'action' => 'view', $guisetting['GsServices']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Scrapers'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsScrapers']['id'], array('controller' => 'gs_scrapers', 'action' => 'view', $guisetting['GsScrapers']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Screensaver'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsScreensaver']['id'], array('controller' => 'gs_screensavers', 'action' => 'view', $guisetting['GsScreensaver']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Slideshow'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsSlideshow']['id'], array('controller' => 'gs_slideshows', 'action' => 'view', $guisetting['GsSlideshow']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Smb'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsSmb']['id'], array('controller' => 'gs_smbs', 'action' => 'view', $guisetting['GsSmb']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Subtitles'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsSubtitles']['id'], array('controller' => 'gs_subtitles', 'action' => 'view', $guisetting['GsSubtitles']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs System'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsSystem']['id'], array('controller' => 'gs_systems', 'action' => 'view', $guisetting['GsSystem']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Videolibrary'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsVideolibrary']['id'], array('controller' => 'gs_videolibraries', 'action' => 'view', $guisetting['GsVideolibrary']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Videoplayer'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsVideoplayer']['id'], array('controller' => 'gs_videoplayers', 'action' => 'view', $guisetting['GsVideoplayer']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Videoscreen'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsVideoscreen']['id'], array('controller' => 'gs_videoscreens', 'action' => 'view', $guisetting['GsVideoscreen']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Weather'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsWeather']['id'], array('controller' => 'gs_weathers', 'action' => 'view', $guisetting['GsWeather']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Window'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsWindow']['id'], array('controller' => 'gs_windows', 'action' => 'view', $guisetting['GsWindow']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Skinsettings'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsSkinsettings']['name'], array('controller' => 'gs_skinsettings', 'action' => 'view', $guisetting['GsSkinsettings']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Defaultvideosettings'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsDefaultvideosettings']['id'], array('controller' => 'gs_defaultvideosettings', 'action' => 'view', $guisetting['GsDefaultvideosettings']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Viewstates'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsViewstates']['name'], array('controller' => 'gs_viewstates', 'action' => 'view', $guisetting['GsViewstates']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gs Audio'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($guisetting['GsAudio']['id'], array('controller' => 'gs_audios', 'action' => 'view', $guisetting['GsAudio']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
