		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                   Plugins
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-fw fa-desktop"></i>  <?php echo $this->Html->link(__('OpenELECs'), array('controller' => 'raspberries','action' => 'index')); ?>
                    </li>
                    <li class="active">
                        <i class="fa fa-plug"></i> Liste Plugins <?php echo $raspberry['Raspberry']['name']; ?>
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

		<div id="page-container" class="row">
			
			<div id="page-content" class="col-sm-9">

				<div class="plugin index">

					<?php 
						echo '<h2>Liste des plugins de '.$raspberry['Raspberry']['name'].' :</h2>&nbsp'.$this->Form->button('Ajouter un plugin', array ('class' => "btn btn-success btn-lg", 'data-toggle' => "modal",'data-target' => '#add-plugin')); 
					?>

					<div class="table-responsive">

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
													
													<?php echo $this->Form->postLink(__('Supprimer'), array('controller' => 'plugins', 'action' => 'delete', $plugin['Plugin']['id']), array('class' => 'btn btn-sm btn-default'), __('Etes vous sur de vouloir supprimer le plugin %s?', $plugin['Plugin']['name'])); ?>

												</p>

				                            </div>

				                        </div>

				                   </div>

				                <?php endforeach; ?>

						<div class="modal fade" id="add-plugin" tabindex="-1" role="dialog" aria-hidden="true">

							<div class="modal-dialog">

							    <div class="modal-content">

							    	<div class="modal-header">

							    		<?php echo $this->Form->button('<span aria-hidden="true">&times;</span>', array ('class' => "close", 'data-dismiss' => "modal",'aria-label' => 'Close'));?>
							    		<h4 class="modal-title text-center">Ajouter un plugin a <?php echo $raspberry['Raspberry']['name']; ?></h4>

							    	</div>
							        	
							        	<div class="modal-body">

											<?php echo $this->Form->create('Plugin', array('role' => 'form','type' => 'file')); ?>

												<fieldset>

													<div class="form-group">
														<?php echo $this->Form->input('name', array('class' => 'form-control','label' => 'Nom')); ?>
													</div><!-- .form-group -->
													<div class="form-group">
														<?php echo $this->Form->input('description', array('class' => 'form-control')); ?>
													</div><!-- .form-group -->
													<div class="form-group">
														<?php echo $this->Form->input('path', array('class' => 'form-control', 'value' => '/.kodi/addons/','type' => 'hidden')); ?>
													</div><!-- .form-group -->
													<div class="form-group">
														<?php echo $this->Form->input('raspberries_id', array('class' => 'form-control','value' => $raspberry['Raspberry']['id'],'type' => 'hidden')); ?>
													</div><!-- .form-group -->
													<div class="form-group">
														<?php echo $this->Form->input('file', array('class' => 'form-control','type' => 'file', 'label' => 'Charger le plugin')); ?>
													</div><!-- .form-group -->
													<div class="modal-footer">
													<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary','div'=>false, 'onclick' => 'chargement();$("#add-plugin").modal("hide");')); ?>
													<?php echo $this->Form->button('Close', array ('class' => "btn btn-default", 'data-dismiss' => "modal"));?>
													</div>

												</fieldset>

											<?php echo $this->Form->end(); ?>

										</div>

								</div>

							</div>

						</div>

					</div><!-- /.table-responsive -->
					
				</div><!-- /.index -->
			
			</div><!-- /#page-content .col-sm-9 -->

		</div><!-- /#page-container .row-fluid -->