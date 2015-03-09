
<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-9">
		
		<div class="settings view">

			<h2><?php  echo __('Setting'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($setting['Setting']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Raspberries'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($setting['Raspberries']['name'], array('controller' => 'raspberries', 'action' => 'view', $setting['Raspberries']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Mediasources'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($setting['Mediasources']['id'], array('controller' => 'mediasources', 'action' => 'view', $setting['Mediasources']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Passwords'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($setting['Passwords']['id'], array('controller' => 'passwords', 'action' => 'view', $setting['Passwords']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Config Raspberries'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($setting['ConfigRaspberries']['id'], array('controller' => 'config_raspberries', 'action' => 'view', $setting['ConfigRaspberries']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Guisettings'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($setting['Guisettings']['id'], array('controller' => 'guisettings', 'action' => 'view', $setting['Guisettings']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Sources'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($setting['Sources']['id'], array('controller' => 'sources', 'action' => 'view', $setting['Sources']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
