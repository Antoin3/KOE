
<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-9">

		<div class="settings index">
		
			<h2><?php echo __('Settings'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('Raspberries_id'); ?></th>
							<th><?php echo $this->Paginator->sort('mediasources_id'); ?></th>
							<th><?php echo $this->Paginator->sort('passwords_id'); ?></th>
							<th><?php echo $this->Paginator->sort('config_raspberries_id'); ?></th>
							<th><?php echo $this->Paginator->sort('guisettings_id'); ?></th>
							<th><?php echo $this->Paginator->sort('sources_id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($settings as $setting): ?>
	<tr>
		<td><?php echo h($setting['Setting']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($setting['Raspberries']['name'], array('controller' => 'raspberries', 'action' => 'view', $setting['Raspberries']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($setting['Mediasources']['id'], array('controller' => 'mediasources', 'action' => 'view', $setting['Mediasources']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($setting['Passwords']['id'], array('controller' => 'passwords', 'action' => 'view', $setting['Passwords']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($setting['ConfigRaspberries']['id'], array('controller' => 'config_raspberries', 'action' => 'view', $setting['ConfigRaspberries']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($setting['Guisettings']['id'], array('controller' => 'guisettings', 'action' => 'view', $setting['Guisettings']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($setting['Sources']['id'], array('controller' => 'sources', 'action' => 'view', $setting['Sources']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $setting['Setting']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $setting['Setting']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $setting['Setting']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $setting['Setting']['id'])); ?>
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