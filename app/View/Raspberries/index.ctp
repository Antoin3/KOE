
<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-9">

		<div class="raspberries index">
		
			<h2><?php echo __('Raspberries'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered" id="raspberries">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('address'); ?></th>
							<th><?php echo $this->Paginator->sort('created'); ?></th>
							<th><?php echo $this->Paginator->sort('modified'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($raspberries as $raspberry): ?>
	<tr>
		<td><?php echo h($raspberry['Raspberry']['id']); ?>&nbsp;</td>
		<td><?php echo h($raspberry['Raspberry']['name']); ?>&nbsp;</td>
		<td><?php echo h($raspberry['Raspberry']['address']); ?>&nbsp;</td>
		<td><?php echo h($raspberry['Raspberry']['created']); ?>&nbsp;</td>
		<td><?php echo h($raspberry['Raspberry']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Synchronisation'), array('action' => 'synchroniser', $raspberry['Raspberry']['id'], $raspberry['Raspberry']['address']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $raspberry['Raspberry']['id']), array('class' => 'btn btn-default btn-xs', 'id' => 'edit')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $raspberry['Raspberry']['id']), array('class' => 'btn btn-default btn-xs', 'id' => 'delete'), __('Are you sure you want to delete # %s?', $raspberry['Raspberry']['id'])); ?>
			<?php echo $this->Html->link(__('Plugin'), array('action' => 'add_plugin', $raspberry['Raspberry']['id'], $raspberry['Raspberry']['address']), array('class' => 'btn btn-default btn-xs', 'id' => 'addPlugin')); ?>
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