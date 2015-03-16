
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


				echo '<h2>'.$name.' :</h2>';
				$notexists = '<img class="featurette-image img-responsive" src="/img/settingsnotfound.png"><p><h2>Fichier inexistant</h2></p></img>';

				$xmlfiles = array(
					'guisettings' => array($address.'\guisettings.xml', 'Interface', 'Blabla1'),
					'advancedsettings' => array($address.'\advancedsettings.xml', 'Parametres Avancés', 'Blabla2'),
					'oe_settings' => array($address.'\addon_data\service.openelec.settings\oe_settings.xml', 'Raspberry', 'Blabla3')
					);

				foreach ($xmlfiles as $xmlfile => $xmlval) {
					?>
					<hr class="featurette-divider">
				      <div class="row featurette">
				        <div class="col-md-7">
				          <h2 class="featurette-heading"> <?php echo $xmlval[1]; ?></h2>
				          <p class="lead"><?php echo $xmlval[2]; ?></p>


				          <?php

				          if (file_exists($xmlval[0])) {
				          	$label = 'Modifier '.$xmlfile;
				          	$display = '<pre class="pre-scrollable">'.htmlspecialchars(file_get_contents($xmlval[0])).'</pre>';
				          }
				          else {
				          	$label = 'Créer '.$xmlfile;
				          	$display = $notexists;
				          } ?>

						 
				        </div>
				        <div class="col-md-5">
				        <?php echo $display.'<p>'.$this->Html->link(__($label), array('controller' => 'Raspberries', 'action' => 'form', $id,$xmlfile),array('class' => 'btn btn-default')).'</p>';
				        ?>
				        </div>
				      </div>
					
				<?php } ?>
				    
			</div>

		</div>
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->