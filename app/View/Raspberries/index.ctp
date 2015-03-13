<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Liste OpenELECs
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-fw fa-desktop"></i>  <?php echo $this->Html->link(__('OpenELECs'), array('controller' => 'raspberries','action' => 'index')); ?>
                            </li>
                            <li class="active">
                                <i class="fa fa-list-ul"></i> Liste des OpenELECs
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
	<div id="content">
		<div id="page-container" class="row">
			
			<div id="page-content" class="col-sm-9">

				<div class="raspberries index">
					
					<div class="table-responsive">
						<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
								<?php foreach ($raspberries as $raspberry): ?>
									<div class="col-lg-4">
									<?php $image = $raspberry['Raspberry']['image'] == '' ?'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==':'data:image/jpg;base64,' .   base64_encode($raspberry['Raspberry']['image']);?>
									<img class="img-circle" src="<?php echo $image; ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
							          <p><h4><?php echo h($raspberry['Raspberry']['name']); ?></h4></p>
							          <p><?php echo h($raspberry['Raspberry']['description']); ?></p>
							          <p>
											<?php echo $this->Html->link(__('Vue d\'ensemble'), array('action' => 'view', $raspberry['Raspberry']['id']), array('class' => 'btn btn-default')); ?>
											<?php echo $this->Html->link(__('Parametres'), array('action' => 'settings', $raspberry['Raspberry']['id']), array('class' => 'btn btn-default')); ?>
											<?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $raspberry['Raspberry']['id']), array('class' => 'btn btn-default'), __('Etes vous sur de vouloir supprimer l\'OpenElec %s?', $raspberry['Raspberry']['name'])); ?>
										</p>
										</div>
								<?php endforeach; ?>
						</table>
					</div><!-- /.table-responsive -->
					
				</div><!-- /.index -->
			
			</div><!-- /#page-content .col-sm-9 -->

		</div><!-- /#page-container .row-fluid -->