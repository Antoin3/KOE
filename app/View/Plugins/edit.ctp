		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                   Plugins
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-fw fa-dashboard"></i>  <?php echo $this->Html->link(__('Accueil'), array('controller' => 'pages','action' => 'home')); ?>
                    </li>
                    <li class="active">
                        <i class="fa fa-list-ul"></i> <?php echo $this->Html->link(__('Liste OpenELECs'), array('controller' => 'raspberries','action' => 'index')); ?>
                    </li>
                    <li class="active">
                        <i class="fa fa-plug"></i> <?php echo $this->Html->link(__('Liste Plugins'), array('controller' => 'plugins','action' => 'index', $plugin['Plugin']['raspberries_id'])); ?>
                    </li>
                    <li class="active">
                        <i class="fa fa-plug"></i> Modification de <?php echo $plugin['Plugin']['name']; ?>
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo 'Modification du plugin '.$plugin['Plugin']['name']; ?></h2>

		<div class="plugins form">
		
			<?php echo $this->Form->create('Plugin', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('description', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->