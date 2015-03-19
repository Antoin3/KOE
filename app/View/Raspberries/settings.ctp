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
		
		<div id="page-content" class="col-sm-9">

			<div class="raspberries view">

				<?php 

				echo '<h2>'.$name.' :</h2></br>';

				if ($id != 'all') {
					echo $this->Form->create();
					echo $this->Form->button('Sauvegarder',array('class' => 'btn btn-large btn-success', 'div' => false,'type' => 'submit', 'name' => 'backup')).'&nbsp';
					echo $this->Form->button('Restaurer',array('class' => 'btn btn-large btn-error', 'type' => 'submit', 'name' => 'restore'));
					echo $this->Form->end();
				}

				$notexists = '<img class="featurette-image img-responsive" src="/img/settingsnotfound.png"><p><h2>Fichier inexistant</h2></p></img>';
				foreach ($files as $filename => $file) {
					?>
					<hr class="featurette-divider">
				      <div class="row featurette">
				        <div class="col-md-7">
				          <h2 class="featurette-heading"> <?php echo $file['Setting']['name']; ?></h2>
				          <p class="lead"><?php echo $file['Setting']['description']; ?></p>

				          <?php
				          $pathfile = $file['Setting']['path'].$file['Setting']['name'].'.'.$file['Setting']['extension'];
				          if (file_exists($pathfile)) {
				          	$label = 'Modifier '.$file['Setting']['name'];
				          	$display = '<pre class="pre-scrollable">'.htmlspecialchars(file_get_contents($pathfile)).'</pre>';
				          }
				          else {
				          	$label = 'Créer '.$file['Setting']['name'];
				          	$display = $notexists;
				          } ?>

						 
				        </div>
				        <div class="col-md-5">
				        <?php echo $display.'<p>'.$this->Html->link(__($label), array('controller' => 'Raspberries', 'action' => 'form',$id, $file['Setting']['name']),array('class' => 'btn btn-default')).'</p>';
				        ?>
				        </div>
				      </div>
					
				<?php } ?>
				    
			</div>

		</div>
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->