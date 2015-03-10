
<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-9">
		
		<div class="sources view">

			<h2><?php  echo __('Source'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($source['Source']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('S Programms'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($source['SProgramms']['name'], array('controller' => 's_programms', 'action' => 'view', $source['SProgramms']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('S Music'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($source['SMusic']['name'], array('controller' => 's_musics', 'action' => 'view', $source['SMusic']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('S Video'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($source['SVideo']['name'], array('controller' => 's_videos', 'action' => 'view', $source['SVideo']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('S Pictures'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($source['SPictures']['name'], array('controller' => 's_pictures', 'action' => 'view', $source['SPictures']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('S Files'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($source['SFiles']['name'], array('controller' => 's_files', 'action' => 'view', $source['SFiles']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
