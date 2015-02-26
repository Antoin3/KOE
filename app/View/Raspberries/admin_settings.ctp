
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Raspberry.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Raspberry.id'))); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Raspberries'), array('action' => 'index')); ?></li>
			</ul><!-- /.list-group -->
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Raspberry Settings'); ?></h2>

		<div class="raspberries form">
		
			<?php 
				$file = '\\\\'.$this->Form->value('Raspberry.address').'\Userdata\guisettings.xml';
				if(file_exists($file)) 
				{
					$xml = Xml::toArray(Xml::build($file));
					$settings = array_keys($xml['settings']);
					$settingstochange = array('','locale');

					echo '<div>' . $this->Form->input('Settings available', 
						array(
				   				'class' => 'btn btn-default dropdown-toggle', 
				   				'options' => $settings)
						). '</div>';


					echo $this->Form->create('settings', array('role' => 'form')); ?>

					<fieldset>

					<?php

						   		foreach ($xml['settings'] as $item => $param) {

						   			if(array_search($item,$settingstochange)) {
						   				$this->Form->create($item);

						   				echo '<h3>'.strtoupper($item).'</h3>';
							   			foreach ($param as $key => $value) {

											$ifexistvalue = array_key_exists('@', $value) ? $value['@'] : null;

								   			echo '<div class="form-group">' . $this->Form->input($key, array(
								   				'class' => 'form-control', 
								   				'value' => $ifexistvalue)
								   			). '</div><!-- .form-group -->';
						   				}
						   				$this->Form->end();
							   		}
						 }
					}

					?> 
					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

					</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->