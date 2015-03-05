
<div id="page-container" class="row">
	
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