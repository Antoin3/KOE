
<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-9">
		
		<div class="configRaspberries view">

			<h2><?php  echo __('Config Raspberry'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($configRaspberry['ConfigRaspberry']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Hdmi Ignore Cec Init'); ?></strong></td>
		<td>
			<?php echo h($configRaspberry['ConfigRaspberry']['hdmi_ignore_cec_init']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cr Overscan'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($configRaspberry['CrOverscan']['id'], array('controller' => 'cr_overscans', 'action' => 'view', $configRaspberry['CrOverscan']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cr License'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($configRaspberry['CrLicense']['id'], array('controller' => 'cr_licenses', 'action' => 'view', $configRaspberry['CrLicense']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cr Overclocking'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($configRaspberry['CrOverclocking']['id'], array('controller' => 'cr_overclockings', 'action' => 'view', $configRaspberry['CrOverclocking']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cr Memory'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($configRaspberry['CrMemory']['id'], array('controller' => 'cr_memories', 'action' => 'view', $configRaspberry['CrMemory']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
