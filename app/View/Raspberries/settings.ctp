
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
				$address = isset($raspberry) ? '\\\\'.$raspberry['Raspberry']['address'].'\Userdata\\' : './files/';
				$id = isset($raspberry) ? $raspberry['Raspberry']['id'] : 'all';
				$name = isset($raspberry) ? $raspberry['Raspberry']['name'] : 'Parametres généraux';
				$submitall = isset($raspberry) ? '' : $this->Form->submit('Submit all', array('class' => 'btn btn-large btn-primary'));

				echo '<h2>'.$name.' :</h2> ';

				$files = array(
					'guisettings' => array($address.'\guisettings.xml', 'Interface', 'Blabla1'),
					'advancedsettings' => array($address.'\advancedsettings.xml', 'Parametres Avancés', 'Blabla2'),
					'oe_settings' => array($address.'\addon_data\service.openelec.settings\oe_settings.xml', 'Raspberry', 'Blabla3')
					);
                 
                echo $this->Form->create('settings', array('role' => 'form'));

				foreach ($files as $file => $val) {
					?>
					<hr class="featurette-divider">
				      <div class="row featurette">
				        <div class="col-md-7">
				          <h2 class="featurette-heading"> <?php echo $val[1]; ?></h2>
				          <p class="lead"><?php echo $val[2]; ?></p>


				          <?php

				          if (file_exists($val[0])) {
				          	$label = 'Modifier '.$file;
				          	$display = $this->Form->input($file, array('class' => 'form-control', 'type' => 'textarea', 'style'=>'width:700px; height:400px;', 'disabled' => 'disabled', 'value' => file_get_contents($val[0])));				          }
				          else {
				          	$label = 'Créer '.$file;
				          	$display = '<img class="featurette-image img-responsive" src="'.$this->webroot.'app/webroot/img/settingsnotfound.png"><p><h2>Fichier inexistant</h2></p></img>';
				          } ?>

						 
				        </div>
				        <div class="col-md-5">
				        <?php echo '<p>'.$display.'</p><p>'.$this->Html->link(__($label), array('controller' => 'Raspberries', 'action' => 'form', $id,$file),array('class' => 'btn btn-default')).'</p>';
				        ?>
				        </div>
				      </div>
					
				<?php } 
				echo $submitall;
                echo $this->Form->end();
				?>
				    
			</div>

		</div>
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->