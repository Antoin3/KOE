
	<div class="raspberries index">
		
			<h2><?php echo __('Raspberries'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered" id="raspberries">
					<thead>
		<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('overclocking'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($raspberries as $raspberry):
	if ($raspberry['Raspberry']['id']==$this->request->pass[0]) {
	?>
	<?php echo $this->Form->create('Raspberry', array('role' => 'form')); ?>
	<tr>
		<?php $options = array('default' => 'default', 'modest' => 'modest', 'medium' => 'medium', 'high' => 'high', 'turbo' => 'turbo');?>
		<td><?php echo h($raspberry['Raspberry']['id']); ?>&nbsp;</td>
		<td><?php echo $this->Form->input('name', array('class' => 'form-control', 'label' => '', 'value' => $raspberry['Raspberry']['name'])); ?>&nbsp;</td>
		<td><?php echo $this->Form->input('address', array('class' => 'form-control', 'label' => '', 'value' => $raspberry['Raspberry']['address'])); ?>&nbsp;</td>
		<td><?php echo $this->Form->input('overclocking', array('class' => 'form-control', 'style' => 'select','label' => '', 'options' => $options)); ?>&nbsp;</td>
		<td class="actions">
		&nbsp;
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary', 'onclick' => 'configuration();')); ?>
		</td>
	</tr>
	<?php echo $this->Form->end(); ?>
	<?php } endforeach; ?>
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
<script type="text/javascript">
function configuration() {
    $('body').prepend("<div id='wait' style='border-radius:5px;border-style:groove;border-color:black;z-index:1;position:absolute;height:150px;width:400px;top:40%;left:40%;text-align:center;font-weight:bold;background-color:#5a5a5a;' ><br/><a style='z-index:2;color:white;font-size:large;'>Configuration en cours . . .</a><br/><br/><img src='../../img/chargement.gif' ></img></div>");
}
</script>