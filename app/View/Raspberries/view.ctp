<div class="raspberries view">
<h2><?php echo __('Raspberry'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($raspberry['Raspberry']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($raspberry['Raspberry']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($raspberry['Raspberry']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Overcloking'); ?></dt>
		<dd>
			<?php echo h($raspberry['Raspberry']['overcloking']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($raspberry['Raspberry']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Update'); ?></dt>
		<dd>
			<?php echo h($raspberry['Raspberry']['last_update']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Raspberry'), array('action' => 'edit', $raspberry['Raspberry']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Raspberry'), array('action' => 'delete', $raspberry['Raspberry']['id']), array(), __('Are you sure you want to delete # %s?', $raspberry['Raspberry']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Raspberries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Raspberry'), array('action' => 'add')); ?> </li>
	</ul>
</div>
