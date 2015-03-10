
<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-9">

		<div class="sources index">
		
			<h2><?php echo __('Sources'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('s_programms_id'); ?></th>
							<th><?php echo $this->Paginator->sort('s_music_id'); ?></th>
							<th><?php echo $this->Paginator->sort('s_video_id'); ?></th>
							<th><?php echo $this->Paginator->sort('s_pictures_id'); ?></th>
							<th><?php echo $this->Paginator->sort('s_files_id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($sources as $source): ?>
	<tr>
		<td><?php echo h($source['Source']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($source['SProgramms']['name'], array('controller' => 's_programms', 'action' => 'view', $source['SProgramms']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($source['SMusic']['name'], array('controller' => 's_musics', 'action' => 'view', $source['SMusic']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($source['SVideo']['name'], array('controller' => 's_videos', 'action' => 'view', $source['SVideo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($source['SPictures']['name'], array('controller' => 's_pictures', 'action' => 'view', $source['SPictures']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($source['SFiles']['name'], array('controller' => 's_files', 'action' => 'view', $source['SFiles']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $source['Source']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $source['Source']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $source['Source']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $source['Source']['id'])); ?>
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