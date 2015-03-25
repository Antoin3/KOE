<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-9">

		<!-- <h2><?php echo __('Ajouter un plugin a '.$raspberry['Raspberry']['name']); ?></h2> -->

		<!-- <div class="plugins form"> -->
		
			<?php echo $this->Form->create('Plugin', array('role' => 'form','type' => 'file')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('name', array('class' => 'form-control','label' => 'Nom')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('description', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('path', array('class' => 'form-control', 'value' => $raspberry['Raspberry']['address'].'/.kodi/addons/','type' => 'hidden')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('extension', array('class' => 'form-control','options' => array('py' => 'py','txt' => 'txt','xml' => 'xml'))); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('raspberries_id', array('class' => 'form-control','value' => $raspberry['Raspberry']['id'],'type' => 'hidden')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('file', array('class' => 'form-control','type' => 'file', 'label' => 'Charger le plugin')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary','onclick' => 'chargement();')); ?>
					</br>
				</fieldset>

			<?php echo $this->Form->end(); ?>

		<!-- </div> -->
		<!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->