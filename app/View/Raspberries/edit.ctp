<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Overclocking
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-fw fa-desktop"></i>  <?php echo $this->Html->link(__('OpenELECs'), array('controller' => 'raspberries','action' => 'index')); ?>
                            </li>
                            <li class="active">
                                <i class="fa fa-cogs"></i> Overclocking 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

	<div id="page-container" class="row">
		
		<div id="page-content" class="col-sm-9">

			<div class="raspberries view">

				<?php 
 				$options = array('default' => 'default', 'modest' => 'modest', 'medium' => 'medium', 'high' => 'high', 'turbo' => 'turbo');
				echo '<h2>'.$name.' :</h2></br>';

				if ($id != 'all') {
					echo $this->Form->create();
					echo $this->Form->input('overclocking', array('class' => 'form-control', 'style' => 'select','label' => 'Mode d\'overclock', 'options' => $options));
					echo $this->Form->button('Configurer',array('class' => 'btn btn-large btn-success', 'div' => false,'type' => 'submit', 'onclick' => 'chargement("Configuration en cours ...");')).'&nbsp';
					echo $this->Form->end();
				}
				else {
					echo $this->Form->create();
					echo $this->Form->input('overclocking', array('class' => 'form-control', 'style' => 'select','label' => 'Mode d\'overclock', 'options' => $options));
					echo $this->Form->button('Appliquer a tous',array('class' => 'btn btn-large btn-info', 'type' => 'submit', 'onclick' => 'chargement("Configuration en cours ...");'));
					echo $this->Form->end();
				}

				$notexists = '<img class="featurette-image img-responsive" src="'.$this->webroot.'/img/settingsnotfound.png"><p><h2>Fichier inexistant</h2></p></img>';
					?>
				    
			</div>

		</div>
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->