<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Ajout OpenELEC
                           <button onclick="scan();">scan</button>
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
	<div></div>
		<h2><?php echo __('Add Raspberry'); ?></h2>
		
		<div class="raspberries form">
		
			<?php echo $this->Form->create('Raspberry', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('Raspberry.name', array('class' => 'form-control', 'label' => 'Nom')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('Raspberry.address', array('class' => 'form-control', 'label' => 'Adresse')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('Raspberry.description', array('class' => 'form-control','type' => 'textarea','placeholder' => 'Entrer une description')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('Raspberry.image'); ?>
						<p class="help-block">Choisissez une image</p>
					</div><!-- .form-group -->
					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary', 'onclick' => 'sauvegarde();')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
<script type="text/javascript">
function sauvegarde() {
    $('body').prepend("<div id='wait' style='border-radius:5px;border-style:groove;border-color:black;z-index:1;position:absolute;height:150px;width:400px;top:40%;left:40%;text-align:center;font-weight:bold;background-color:#5a5a5a;' ><br/><a style='z-index:2;color:white;font-size:large;'>Sauvegarde en cours . . .</a><br/><br/><img src='../img/chargement.gif' ></img></div>");
}
</script>