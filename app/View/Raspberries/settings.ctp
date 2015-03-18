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

				$address = isset($raspberry) ? '\\\\'.$raspberry['Raspberry']['address'] : './files/default';
				$id = isset($raspberry) ? $raspberry['Raspberry']['id'] : 'all';
				$name = isset($raspberry) ? $raspberry['Raspberry']['name'] : 'Parametres généraux';

				$setting = array(
						'guisettings' => array(
							'name' => 'guisettings', 
							'description' => 'description guisettings', 
							'path' => '\Userdata\\', 
							'extension' => 'xml', 
							'raspberries_id' => $id),
						'advancedsettings' => array(
							'name' => 'advancedsettings', 
							'description' => 'description advancedsettings', 
							'path' => '\Userdata\\', 
							'extension' => 'xml', 
							'raspberries_id' => $id),
						'mediasources' => array(
							'name' => 'mediasources', 
							'description' => 'description mediasources', 
							'path' => '\Userdata\\', 
							'extension' => 'xml', 
							'raspberries_id' => $id),
						'sources' => array(
							'name' => 'sources', 
							'description' => 'description sources', 
							'path' => '\Userdata\\', 
							'extension' => 'xml', 
							'raspberries_id' => $id),
						'passwords' => array(
							'name' => 'passwords', 
							'description' => 'description passwords', 
							'path' => '\Userdata\\', 
							'extension' => 'xml', 
							'raspberries_id' => $id),
						'oe_settings' => array(
							'name' => 'oe_settings', 
							'description' => 'description oe_settings', 
							'path' => '\Userdata\addon_data\service.openelec.settings\\', 
							'extension' => 'xml', 
							'raspberries_id' => $id)
					);

				$files = isset($files) ? $files['Setting'] : $setting;

				echo '<h2>'.$name.' :</h2></br>';

				echo $this->Form->create();
				echo $this->Form->button('Sauvegarder',array('class' => 'btn btn-large btn-success', 'div' => false,'type' => 'submit', 'name' => 'backup')).'&nbsp';
				echo $this->Form->button('Restaurer',array('class' => 'btn btn-large btn-error', 'type' => 'submit', 'name' => 'restore'));
				echo $this->Form->end();


				$notexists = '<img class="featurette-image img-responsive" src="/img/settingsnotfound.png"><p><h2>Fichier inexistant</h2></p></img>';
				foreach ($files as $filename => $file) {
					?>
					<hr class="featurette-divider">
				      <div class="row featurette">
				        <div class="col-md-7">
				          <h2 class="featurette-heading"> <?php echo $file['name']; ?></h2>
				          <p class="lead"><?php echo $file['description']; ?></p>


				          <?php
				          $pathfile = $address.$file['path'].$file['name'].'.'.$file['extension'];
				          if (file_exists($pathfile)) {
				          	$label = 'Modifier '.$file['name'];
				          	$display = '<pre class="pre-scrollable">'.htmlspecialchars(file_get_contents($pathfile)).'</pre>';
				          }
				          else {
				          	$label = 'Créer '.$file['name'];
				          	$display = $notexists;
				          } ?>

						 
				        </div>
				        <div class="col-md-5">
				        <?php echo $display.'<p>'.$this->Html->link(__($label), array('controller' => 'Raspberries', 'action' => 'form', $id,$file['name']),array('class' => 'btn btn-default')).'</p>';
				        ?>
				        </div>
				      </div>
					
				<?php } ?>
				    
			</div>

		</div>
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->