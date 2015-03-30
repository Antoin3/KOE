
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Plugin'), array('action' => 'edit', $plugin['Plugin']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Plugin'), array('action' => 'delete', $plugin['Plugin']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $plugin['Plugin']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Plugins'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Plugin'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Raspberries'), array('controller' => 'raspberries', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Raspberries'), array('controller' => 'raspberries', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="plugins view">

			<h2><?php  echo __('Plugin'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($plugin['Plugin']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($plugin['Plugin']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Description'); ?></strong></td>
		<td>
			<?php echo h($plugin['Plugin']['description']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Path'); ?></strong></td>
		<td>
			<?php echo h($plugin['Plugin']['path']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Extension'); ?></strong></td>
		<td>
			<?php echo h($plugin['Plugin']['extension']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($plugin['Plugin']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($plugin['Plugin']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Raspberries'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($plugin['Raspberries']['name'], array('controller' => 'raspberries', 'action' => 'view', $plugin['Raspberries']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
