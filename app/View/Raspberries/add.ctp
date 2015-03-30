<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Ajout OpenELEC
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-fw fa-desktop"></i>  <?php echo $this->Html->link(__('OpenELECs'), array('controller' => 'raspberries','action' => 'index')); ?>
                            </li>
                            <li class="active">
                                <i class="fa fa-plus"></i> Ajouter un OpenELEC
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-9">

		<div class="raspberries form">

			<?php echo $this->Form->create('Raspberry', array('role' => 'form')); ?>


				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('Raspberry.name', array('class' => 'form-control', 'label' => 'Nom', 'id' => 'name')); ?>
					</div><!-- .form-group -->

					<div class="form-group">
						<?php echo $this->Form->input('Raspberry.address', array('class' => 'form-control', 'label' => 'Adresses possibles', 'id' => 'address')).'</br>'; ?>
						<?php echo $this->Form->button('Scan du réseau', array('class' => 'btn btn-large btn-warning', 'type' => 'button' ,'onclick' => "scan('".$host."');chargement('Scan en cours ...');")); ?>
					</div><!-- .form-group -->

					<div class="form-group">
						<?php echo $this->Form->input('Raspberry.description', array('class' => 'form-control','type' => 'textarea','placeholder' => 'Entrer une description')); ?>
					</div><!-- .form-group -->

					<div class="form-group">
						<?php echo $this->Form->input('Raspberry.role', array('class' => 'form-control','value' => $role, 'readonly' => 'readonly')); ?>
					</div><!-- .form-group -->

					<div class="form-group">
						<?php echo $this->Form->input('actualsettings', array('class' => 'form-control', 'options' => array('non','oui'), 'label' => 'Conserver les réglages actuellement présents ?', 'id' => 'as', 'onchange' => 'if ($("#as").val() == 1) {
																								document.getElementById("name").disabled = true;
																								document.getElementById("name").value = "";
																							} else {
																								document.getElementById("name").disabled = false;
																							};')); ?>
					</div><!-- .form-group -->
					
					<div class="form-group">
					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary', 'onclick' => 'chargement("Ajout en cours...");')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->