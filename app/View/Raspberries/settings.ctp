<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Parametres
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-fw fa-dashboard"></i>  <?php echo $this->Html->link(__('Accueil'), array('controller' => 'pages','action' => 'home')); ?>
                            </li>
                            <li class="active">
                                <i class="fa fa-list-ul"></i> <?php echo $this->Html->link(__('Liste OpenELECs'), array('controller' => 'raspberries','action' => 'index')); ?>
                            </li>
                            <li class="active">
                                <i class="fa fa-cogs"></i> Parametres de <?php echo $name; ?>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

	<div id="page-container" class="row">

		<div id="page-content" class="col-lg-12">

			<div class="raspberries view">
				
				<?php 

				echo '<div class="col-lg-12 text-center"><h2>'.$name.' :</h2></div></br>'; ?>

				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th class="text-center">
								<?php 
									echo $this->Form->create();
									if ($id != 'all') {
										echo $this->Form->submit('Sauvegarder',array('class' => 'btn btn-success btn-lg', 'name' => 'backup', 'onclick' => 'chargement("Sauvegarde en cours...");'));
										if (is_dir('./files/'.$name)) 
											{
												echo '</th><th class="text-center">';
												echo $this->Form->submit('Restaurer',array('class' => 'btn btn-default btn-lg', 'name' => 'restore', 'onclick' => 'chargement("restauration en cours...");'));
											}
									}
									else {
										echo $this->Form->button('Appliquer a tous',array('class' => 'btn btn-error btn-lg', 'name' => 'apply', 'onclick' => 'chargement("Chargement des fichiers...");'));
									} 
									echo $this->Form->end();
								?>
							</th>				
							<?php if (isset($raspberry)) {
									echo '<th class="text-center">'.$this->Form->button('Overclock', array ('class' => "btn btn-info btn-lg", 'type' => 'button', 'data-toggle' => "modal",'data-target' => '#overclock')).'</th>';
									echo '<th class="text-center">'.$this->Form->button('Codec', array ('class' => "btn btn-info btn-lg", 'type' => 'button', 'data-toggle' => "modal",'data-target' => '#Codec')).'</th>'; } ?>
						</tr>
					</thead>
				</table>
				<?php
					echo '<hr class="featurette-divider">';
					$notexists = '<img class="featurette-image img-responsive" src="'.$this->webroot.'img/settingsnotfound.png"><p><h2>Fichier inexistant</h2></p></img>';
					foreach ($files as $filename => $file) : ?>

				    <div class="row featurette">
				        <div class="col-lg-6 text-center">
				          	<h2 class="featurette-heading"> <?php echo $file['Setting']['name']; ?></h2>
						          <p class="lead"><?php echo $file['Setting']['description']; ?></p>

						          <?php
						          $pathfile = $file['Setting']['path'].$file['Setting']['name'].'.'.$file['Setting']['extension'];
						          if (file_exists($pathfile)) {
						          	$label = 'Modifier '.$file['Setting']['name'];
						          	$display = '<pre class="pre-scrollable" style="text-align:left">'.htmlspecialchars(file_get_contents($pathfile)).'</pre>';
						          } else {
						          	$label = 'Créer '.$file['Setting']['name'];
						          	$display = $notexists;
						          } ?>
					    </div>
				        <div class="col-lg-6 text-center">
					        <?php echo '<p>'.$display.'</p><p>'.$this->Html->link(__($label), array('action' => 'form',$id, $file['Setting']['name']),array('class' => 'btn btn-default', 'onclick' => 'chargement(Patienter...);')).'</p>';
					        ?>
				        </div>
					</div>
					<hr class="featurette-divider">
				<?php endforeach; ?>	

			</div><!-- /.view -->

			<div class="modal fade" id="overclock" tabindex="-1" role="dialog" aria-hidden="true">

				<div class="modal-dialog">

					<div class="modal-content">

						<div class="modal-header">

							<?php echo $this->Form->button('<span aria-hidden="true">&times;</span>', array ('class' => "close", 'data-dismiss' => "modal",'aria-label' => 'Close')); ?>
							<h4 class="modal-title text-center">Overclocking</h4>

						</div>

							        	
						<div class="modal-body">
							<h3><strong>Mode actuel : </strong>'<?php echo $currentmode ?>'</h3>
			        		<?php 
								$options = array('default' =>'default','modest' => 'modest','medium' => 'medium','high' => 'high','turbo' => 'turbo'); 
								echo $this->Form->create(); ?>

									<fieldset>
										<div class="form-group">
											<?php echo $this->Form->input('overclocking', array('class' => 'form-control', 'style' => 'select','label' => 'Mode désiré', 'options' => $options)); ?>
										</div>
										<div class="modal-footer">
											<?php echo $this->Form->submit('Configurer',array('class' => 'btn btn-large btn-success','div'=>false, 'onclick' => 'chargement("Configuration en cours");$("#overclock").modal("hide");'));
												echo $this->Form->button('Close', array ('class' => "btn btn-default", 'data-dismiss' => "modal")); ?>
										</div>
									</fieldset>
									
							<?php echo $this->Form->end();	?>

						</div>

					</div>

				</div>

			</div>

			<div class="modal fade" id="Codec" tabindex="-1" role="dialog" aria-hidden="true">

				<div class="modal-dialog">

					<div class="modal-content">

						<div class="modal-header">

							<?php echo $this->Form->button('<span aria-hidden="true">&times;</span>', array ('class' => "close", 'data-dismiss' => "modal",'aria-label' => 'Close')); ?>
							<h4 class="modal-title text-center">Gestion des codecs
						</div>

							        	
						<div class="modal-body">
			        		<?php 
								$options = array('MPG2' =>'MPG2','WVC1' => 'WVC1','2' => 'les deux'); 
								echo $this->Form->create(); ?>

									<fieldset>
<<<<<<< HEAD
										<div class="form-group">
											<?php echo $this->Form->input('Codec', array('class' => 'form-control', 'style' => 'select','label' => 'Mode désiré', 'options' => $options, 'id' => 'Codec'));
												echo $this->Form->input('CodecMPG2', array('class' => 'form-control','label' => 'Votre codec MPG2'));
												echo $this->Form->input('CodecWVC1', array('class' => 'form-control','label' => 'Votre codec WVC1'));
											
											?>
										</div>
										<div class="modal-footer">
											<?php echo $this->Form->submit('Ajout Codec',array('class' => 'btn btn-large btn-success','div'=>false, 'onclick' => 'chargement("Ajout du codec en cours");$("#Codec").modal("hide");'));
												echo $this->Form->button('Close', array ('class' => "btn btn-default", 'data-dismiss' => "modal")); ?>
										</div>
=======
										<?php if ($raspberry['Raspberry']['role'] == 'master')
										{ ?>
											<div class="form-group">;
											<?php echo $this->Form->input('address', array('class' => 'form-control', 'label' => 'Adresse du serveur')); ?>
											</div>
											<div class="form-group">
												<?php echo $this->Form->input('musics', array('class' => 'form-control','label' => 'Chemin musiques')); ?>
											</div>
											<div class="form-group">
												<?php echo $this->Form->input('videos', array('class' => 'form-control','label' => 'Chemin vidéos')); ?>
											</div>
											<div class="form-group">
												<?php echo $this->Form->input('tvshows', array('class' => 'form-control','label' => 'Chemin séries')); ?>
											</div>
											<div class="form-group">
												<?php echo $this->Form->input('DBaddress', array('class' => 'form-control','label' => 'Adresse de la BDD')); ?>
											</div>
											<div class="form-group">
												<?php echo $this->Form->input('login', array('class' => 'form-control','label' => 'Identifiant')); ?>
											</div>
											<div class="form-group">
												<?php echo $this->Form->input('password', array('class' => 'form-control','label' => 'Mot de passe')); ?>
											</div>
										<?php } ?>
											<div class="form-group">
												<?php echo $this->Form->input('slave', array('class' => 'form-control','type' => 'hidden')); ?>
											</div>
											<div class="modal-footer">
											<?php echo $this->Form->submit('Synchroniser',array('class' => 'btn btn-large btn-success','div'=>false, 'onclick' => 'chargement("Synchronisation en cours");$("#synchro").modal("hide");'));
													echo $this->Form->button('Close', array ('class' => "btn btn-default", 'data-dismiss' => "modal")); ?>
											</div>
>>>>>>> master
									</fieldset>
									
							<?php echo $this->Form->end();	?>

						</div>

					</div>

				</div>

			</div>
		</div><!-- /#page-content .col-lg-12 -->

	</div><!-- /#page-container .row-fluid -->