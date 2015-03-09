
<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-9">

		<div class="configRaspberries index">
		
			<h2><?php echo __('Config Raspberries'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('hdmi_ignore_cec_init'); ?></th>
							<th><?php echo $this->Paginator->sort('cr_overscan_id'); ?></th>
							<th><?php echo $this->Paginator->sort('cr_license_id'); ?></th>
							<th><?php echo $this->Paginator->sort('cr_overclocking_id'); ?></th>
							<th><?php echo $this->Paginator->sort('cr_memory_id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($configRaspberries as $configRaspberry): ?>
	<tr>
		<td><?php echo h($configRaspberry['ConfigRaspberry']['id']); ?>&nbsp;</td>
		<td><?php echo h($configRaspberry['ConfigRaspberry']['hdmi_ignore_cec_init']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($configRaspberry['CrOverscan']['id'], array('controller' => 'cr_overscans', 'action' => 'view', $configRaspberry['CrOverscan']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($configRaspberry['CrLicense']['id'], array('controller' => 'cr_licenses', 'action' => 'view', $configRaspberry['CrLicense']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($configRaspberry['CrOverclocking']['id'], array('controller' => 'cr_overclockings', 'action' => 'view', $configRaspberry['CrOverclocking']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($configRaspberry['CrMemory']['id'], array('controller' => 'cr_memories', 'action' => 'view', $configRaspberry['CrMemory']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $configRaspberry['ConfigRaspberry']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $configRaspberry['ConfigRaspberry']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $configRaspberry['ConfigRaspberry']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $configRaspberry['ConfigRaspberry']['id'])); ?>
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