<div class="raspberries form">
<?php echo $this->Form->create('Raspberry'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Raspberry'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Raspberries'), array('action' => 'index')); ?></li>
	</ul>
</div>
