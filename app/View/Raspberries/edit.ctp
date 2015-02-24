<div class="raspberries form">
<?php echo $this->Form->create('Raspberry'); ?>
	<fieldset>
		<legend><?php echo __('Edit Raspberry'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('overcloking');
		echo $this->Form->input('last_update');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Raspberry.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Raspberry.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Raspberries'), array('action' => 'index')); ?></li>
	</ul>
</div>
