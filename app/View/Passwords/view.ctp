
<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-9">
		
		<div class="passwords view">

			<h2><?php  echo __('Password'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($password['Password']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('From'); ?></strong></td>
		<td>
			<?php echo h($password['Password']['from']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('To'); ?></strong></td>
		<td>
			<?php echo h($password['Password']['to']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
