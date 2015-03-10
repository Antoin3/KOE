
<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-9">
		
		<div class="mediasources view">

			<h2><?php  echo __('Mediasource'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($mediasource['Mediasource']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Ms Network'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($mediasource['MsNetwork']['id'], array('controller' => 'ms_networks', 'action' => 'view', $mediasource['MsNetwork']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
