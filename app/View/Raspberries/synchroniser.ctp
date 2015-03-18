
<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-9">

		<div class="raspberries index">
		
			<h2><?php echo __('Raspberries'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered" id="raspberries">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('address'); ?></th>
							<th><?php echo $this->Paginator->sort('BDD'); ?></th>
							<th><?php echo $this->Paginator->sort('NAS'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<?php 
						$raspMaster = false;
						foreach ($raspberries as $raspberry):
						if ($raspberry['Raspberry']['role']=='master') {
							$raspMaster = true;
						}
						endforeach;
					?>
					
					<tbody>

<?php foreach ($raspberries as $raspberry): ?>
	<?php echo $this->Form->create('Raspberry', array('role' => 'form')); ?>
	<tr>
		<td><?php echo h($raspberry['Raspberry']['id']); ?>&nbsp;</td>
		<td><?php echo h($raspberry['Raspberry']['name']); ?>&nbsp;</td>
		<td><?php echo h($raspberry['Raspberry']['address']); ?>&nbsp;</td>
		<?php if ($raspMaster == false) { ?>
		
		<td><?php echo $this->Form->input('BDD', array('class' => 'form-control', 'label' => 'adresse BDD')); ?>&nbsp;
		<?php echo $this->Form->input('loginBDD', array('class' => 'form-control', 'label' => 'login')); ?>&nbsp;
		<?php echo $this->Form->input('mdpBDD', array('class' => 'form-control', 'label' => 'mdp')); ?>&nbsp;</td>
		<td><?php echo $this->Form->input('NAS', array('class' => 'form-control', 'label' => 'adresse NAS')); ?>&nbsp;
		<?php echo $this->Form->input('cheminMusic', array('class' => 'form-control', 'label' => 'dossier music')); ?>&nbsp;
		<?php echo $this->Form->input('cheminVideo', array('class' => 'form-control', 'label' => 'dossier video')); ?>&nbsp;
		<?php echo $this->Form->input('cheminTVShow', array('class' => 'form-control', 'label' => 'dossier TVShow')); ?>&nbsp;
		<?php echo $this->Form->input('loginNAS', array('class' => 'form-control', 'label' => 'login')); ?>&nbsp;
		<?php echo $this->Form->input('mdpNAS', array('class' => 'form-control', 'label' => 'mdp')); ?>&nbsp;</td>
		<?php } ?>
		<?php if ($raspMaster == true) { ?>
		<td><?php echo h($raspberry['Raspberry']['BDD']); ?>&nbsp;</td>
		<td><?php echo h($raspberry['Raspberry']['NAS']); ?>&nbsp;</td>
		<?php } ?>
		<td class="actions">
		<?php 
		if ($raspberry['Raspberry']['role']==null) {
			echo $this->Form->submit('Synchroniser', array('class' => 'btn btn-large btn-primary', 'onclick' => 'synchronisation1();')); 
		}
		else{
			 echo __('Ajouté'); 
		}
		?>
		</td>
	</tr>
	<?php echo $this->Form->end();?>
<?php endforeach; ?>

					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
			</small></p>

			<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
<script type="text/javascript">
function synchronisation1() {
    $('body').prepend("<div id='wait' style='border-radius:5px;border-style:groove;border-color:black;z-index:1;position:absolute;height:150px;width:400px;top:40%;left:40%;text-align:center;font-weight:bold;background-color:#5a5a5a;' ><br/><a style='z-index:2;color:white;font-size:large;'>Synchronisation en cours . . .</a><br/><br/><img src='../../../img/chargement.gif' ></img></div>");
}
</script>