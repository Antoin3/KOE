<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Parametres
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-fw fa-desktop"></i>  <?php echo $this->Html->link(__('OpenELECs'), array('controller' => 'raspberries','action' => 'index')); ?>
                            </li>
                            <li class="active">
                                <i class="fa fa-cogs"></i> Parametres 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

	<div id="page-container" class="row">
			<div class="raspberries view">
				<?php 

				echo '<div class="col-lg-12 text-center"><h2>'.$name.' :</h2></br>';

				if ($id != 'all') {
					echo $this->Form->create();
					echo $this->Form->button('Sauvegarder',array('class' => 'btn btn-large btn-success', 'type' => 'submit', 'name' => 'backup', 'onclick' => 'chargement();')).'&nbsp';
					if (is_dir('./files/'.$name)) 
						{
							echo $this->Form->button('Restaurer',array('class' => 'btn btn-large btn-default', 'type' => 'submit', 'name' => 'restore', 'onclick' => 'chargement();'));
							echo $this->Form->end();
						}
				}
				else {
					echo $this->Form->create();
					echo $this->Form->button('Appliquer a tous',array('class' => 'btn btn-large btn-info', 'type' => 'submit', 'name' => 'apply', 'onclick' => 'chargement();'));
					echo $this->Form->end();
				}
				echo '<hr class="featurette-divider">';
				$notexists = '<img class="featurette-image img-responsive" src="'.$this->webroot.'/img/settingsnotfound.png"><p><h2>Fichier inexistant</h2></p></img>';
				foreach ($files as $filename => $file) {
					?>
				    <div class="row featurette">
				        <div class="col-lg-6 text-center">
				          	<h2 class="featurette-heading"> <?php echo $file['Setting']['name']; ?></h2>
						          <p class="lead"><?php echo $file['Setting']['description']; ?></p>

						          <?php
						          $pathfile = $file['Setting']['path'].$file['Setting']['name'].'.'.$file['Setting']['extension'];
						          if (file_exists($pathfile)) {
						          	$label = 'Modifier '.$file['Setting']['name'];
						          	$display = '<pre class="pre-scrollable" style="text-align:left">'.htmlspecialchars(file_get_contents($pathfile)).'</pre>';
						          }
						          else {
						          	$label = 'Créer '.$file['Setting']['name'];
						          	$display = $notexists;
						          } ?>
					    </div>
				        <div class="col-lg-6 text-center">
					        <?php echo '<p>'.$display.'</p><p>'.$this->Html->link(__($label), array('controller' => 'Raspberries', 'action' => 'form',$id, $file['Setting']['name']),array('class' => 'btn btn-default', 'onclick' => 'chargement();')).'</p>';
					        ?>
				        </div>
					</div>
					<hr class="featurette-divider">
				<?php } ?>
				    
			</div>
		</div>
</div><!-- /#page-container .row-fluid -->