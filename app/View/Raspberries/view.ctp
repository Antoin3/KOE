
<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Vue d'ensemble
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-fw fa-desktop"></i>  <?php echo $this->Html->link(__('OpenELECs'), array('controller' => 'raspberries','action' => 'index')); ?>
                            </li>
                            <li class="active">
                                <i class="fa fa-list-ul"></i> Vue d'ensemble 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
	<div id="page-container" class="row">
		
		<div id="page-content" class="col-sm-9">
			
			<div class="raspberries view">

				<h2><?php echo $raspberry['Raspberry']['name']; ?></h2>
			
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
					</tr><tr>		<td><strong><?php echo __('Description'); ?></strong></td>
							<td>
								<?php echo h($raspberry['Raspberry']['description']); ?>
								&nbsp;
							</td>
					</tr><tr>		<td><strong><?php echo __('Image'); ?></strong></td>
							<td>
								<?php echo h($raspberry['Raspberry']['image']); ?>
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
					</tr><tr>		<td><strong><?php echo __('Master'); ?></strong></td>
							<td>
								<?php echo h($raspberry['Raspberry']['master']); ?>
								&nbsp;
							</td>
					</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
