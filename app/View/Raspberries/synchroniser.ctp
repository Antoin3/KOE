<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Synchronisation
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-fw fa-desktop"></i>  <?php echo $this->Html->link(__('OpenELECs'), array('controller' => 'raspberries','action' => 'index')); ?>
                            </li>
                            <li class="active">
                                <i class="fa fa-cogs"></i> Synchronisation 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

	<div id="page-container" class="row">
		
		<div id="page-content" class="col-sm-9">

			<div class="raspberries view">

				<?php 
				echo '<h2>'.$name.' :</h2></br>';

				if ($id != 'all') { 
					if ($master == false) {
					?>
					
				<div class="table-responsive">
					<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered" id="raspberries">
						<thead>
							<tr>
								<th><?php echo $this->Paginator->sort('BDD'); ?></th>
								<th><?php echo $this->Paginator->sort('NAS'); ?></th>
							</tr>
						</thead>
						<tbody>
						<tr>
						<?php echo $this->Form->create(); ?>
							<td>
							<?php
								echo $this->Form->input('Raspberry.BDD', array('class' => 'form-control', 'label' => 'adresse BDD'));
								echo $this->Form->input('Raspberry.loginBDD', array('class' => 'form-control', 'label' => 'login'));
								echo $this->Form->input('Raspberry.mdpBDD', array('class' => 'form-control', 'label' => 'mdp'));
							?>
							</td>
							<td>
							<?php
								echo $this->Form->input('Raspberry.NAS', array('class' => 'form-control', 'label' => 'adresse NAS'));
								echo $this->Form->input('Raspberry.cheminMusic', array('class' => 'form-control', 'label' => 'dossier music'));
								echo $this->Form->input('Raspberry.cheminVideo', array('class' => 'form-control', 'label' => 'dossier video'));
								echo $this->Form->input('Raspberry.cheminTVShow', array('class' => 'form-control', 'label' => 'dossier TVShow'));
								echo $this->Form->input('Raspberry.loginNAS', array('class' => 'form-control', 'label' => 'login'));
								echo $this->Form->input('Raspberry.mdpNAS', array('class' => 'form-control', 'label' => 'mdp'));
							?>
							</td>
						</tr>
						</tbody>
					</table>
				</div><!-- /.table-responsive -->
				<?php  echo $this->Form->button('Synchroniser',array('class' => 'btn btn-large btn-success', 'div' => false,'type' => 'submit', 'onclick' => 'chargement("Synchronisation en cours ...");')).'&nbsp';
							echo $this->Form->end();
							 }
					else{
						?>
					
				<div class="table-responsive">
					<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered" id="raspberries">
						<thead>
							<tr>
								<th><?php echo $this->Paginator->sort('BDD'); ?></th>
								<th><?php echo $this->Paginator->sort('NAS'); ?></th>
							</tr>
						</thead>
						<tbody>
						<tr>
						<?php echo $this->Form->create(); ?>
							<td>
							<?php
								echo $this->Form->input('Raspberry.BDD', array('class' => 'form-control', 'label' => 'adresse BDD', 'placeholder' => $BDD));
							?>
							</td>
							<td>
							<?php
								echo $this->Form->input('Raspberry.NAS', array('class' => 'form-control', 'label' => 'adresse NAS', 'placeholder' => $NAS));
							?>
							</td>
						</tr>
						</tbody>
					</table>
				</div><!-- /.table-responsive -->
				<?php  echo $this->Form->button('Synchroniser',array('class' => 'btn btn-large btn-success', 'div' => false,'type' => 'submit', 'onclick' => 'chargement("Synchronisation en cours ...");')).'&nbsp';
							echo $this->Form->end();
					}
				}
				else {
					?>
					<div class="table-responsive">
					<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered" id="raspberries">
						<thead>
							<tr>
								<th><?php echo $this->Paginator->sort('BDD'); ?></th>
								<th><?php echo $this->Paginator->sort('NAS'); ?></th>
							</tr>
						</thead>
						<tbody>
						<tr>
						<?php echo $this->Form->create(); ?>
							<td>
							<?php
								echo $this->Form->input('Raspberry.BDD', array('class' => 'form-control', 'label' => 'adresse BDD'));
								echo $this->Form->input('Raspberry.loginBDD', array('class' => 'form-control', 'label' => 'login'));
								echo $this->Form->input('Raspberry.mdpBDD', array('class' => 'form-control', 'label' => 'mdp'));
							?>
							</td>
							<td>
							<?php
								echo $this->Form->input('Raspberry.NAS', array('class' => 'form-control', 'label' => 'adresse NAS'));
								echo $this->Form->input('Raspberry.cheminMusic', array('class' => 'form-control', 'label' => 'dossier music'));
								echo $this->Form->input('Raspberry.cheminVideo', array('class' => 'form-control', 'label' => 'dossier video'));
								echo $this->Form->input('Raspberry.cheminTVShow', array('class' => 'form-control', 'label' => 'dossier TVShow'));
								echo $this->Form->input('Raspberry.loginNAS', array('class' => 'form-control', 'label' => 'login'));
								echo $this->Form->input('Raspberry.mdpNAS', array('class' => 'form-control', 'label' => 'mdp'));
							?>
							</td>
							<?php  echo $this->Form->button('Appliquer a tous',array('class' => 'btn btn-large btn-info', 'type' => 'submit', 'onclick' => 'chargement("Synchronisation en cours ...");'));
							echo $this->Form->end();
							?>
						</tr>
						</tbody>
					</table>
				</div><!-- /.table-responsive -->
				<?php
					
					
				}

				$notexists = '<img class="featurette-image img-responsive" src="'.$this->webroot.'/img/settingsnotfound.png"><p><h2>Fichier inexistant</h2></p></img>';
					?>
				    
			</div>

		</div>
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->