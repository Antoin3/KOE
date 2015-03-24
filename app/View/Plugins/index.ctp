<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Liste des Plugins
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-fw fa-desktop"></i>  <?php echo $this->Html->link(__('OpenELECs'), array('controller' => 'raspberries','action' => 'index')); ?>
                            </li>
                            <li class="active">
                                <i class="fa fa-plug"></i> Liste Plugins
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
		<div id="page-container" class="row">
			
			<div id="page-content" class="col-sm-9">

				<div class="raspberries index">
				<?php 

					echo '<div class="col-lg-12"><h2>'.$name.' :</h2></br>';

				?>
					<?php  echo $this->Html->link(__('Ajouter un plugin'), array('controller' => 'Plugin', 'action' => 'add', $id), 
					array('class' => 'btn btn-success', 'target' => '_blank', 'escape' => false, 'onclick' => 
					"window.open('/Plugin/add/".$id."','popUpWindow','height=500,width=400,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');")); ?>

					<div class="table-responsive">

						<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">

						<hr class="featurette-divider">

								<?php foreach ($plugins as $plugin): ?>

									<div class="col-lg-4">
				                        <div class="panel panel-primary">

				                            <div class="panel-heading">

												<h4 class="panel-title"><p class='text-center'><?php echo h($plugin['Plugin']['name']); ?></p></h4>
				                            </div>

				                            <div class="panel-body">

				                            	<p class='text-center'>

											      	<?php $desc = strlen(h($plugin['Plugin']['description'])) > 55 ? substr(h($plugin['Plugin']['description']),0,55).'...' : h($plugin['Plugin']['description']); echo $desc; ?>

										      	</p>

						                        <p class='text-center'>
													
													<?php if ($id != 'all' ) echo $this->Form->postLink(__('Supprimer'), array('controller' => 'Plugin', 'action' => 'delete', $plugin['Plugin']['id'],true), array('class' => 'btn btn-sm btn-default'), __('Etes vous sur de vouloir supprimer le plugin %s?', $plugin['Plugin']['name'])); ?>

													 </p>

				                                </div>

				                            </div>

				                        </div>

				                    </div>
										<!-- <p class="text-center"><img class="img-circle" src="<?php echo $image; ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;"></p> -->
								<?php endforeach; ?>
						</table>
					</div><!-- /.table-responsive -->
					
				</div><!-- /.index -->
			
			</div><!-- /#page-content .col-sm-9 -->

		</div><!-- /#page-container .row-fluid -->