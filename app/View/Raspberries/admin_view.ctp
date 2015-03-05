
<div id="page-container" class="row">
	
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
</tr><tr>		<td><strong><?php echo __('Version'); ?></strong></td>
		<td>
			<?php echo h($raspberry['Raspberry']['version']); ?>
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
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($raspberry['Raspberry']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
