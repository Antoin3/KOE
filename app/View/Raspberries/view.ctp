
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Raspberry'), array('action' => 'edit', $raspberry['Raspberry']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Raspberry'), array('action' => 'delete', $raspberry['Raspberry']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $raspberry['Raspberry']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Raspberries'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Raspberry'), array('action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="raspberries view">

			<h2><?php  echo __('Raspberry'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($raspberry['Raspberry']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($raspberry['Raspberry']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Address'); ?></strong></td>
		<td>
			<?php echo h($raspberry['Raspberry']['address']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Overcloking'); ?></strong></td>
		<td>
			<?php echo h($raspberry['Raspberry']['overcloking']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($raspberry['Raspberry']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Last Update'); ?></strong></td>
		<td>
			<?php echo h($raspberry['Raspberry']['last_update']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
