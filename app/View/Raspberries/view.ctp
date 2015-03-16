
<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Vue d'ensemble
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-fw fa-desktop"></i>  <?php echo $this->Html->link(__('OpenELECs'), array('controller' => 'raspberries','action' => 'index')); ?>
                            </li>
                            <li class="active">
                                <i class="fa fa-eye"></i> Vue d'ensemble 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
	<div id="page-container" class="row">
		
		<div id="page-content" class="col-sm-9">
			
			<div class="raspberries view">

				<h2 class="featurette-heading"><?php echo $raspberry['Raspberry']['name']; ?></h2>
			
			<div class="table-responsive">

					<hr class="featurette-divider">
				      <div class="row featurette">
				        <div class="col-md-7">
				          <h3><strong>Adresse IP :</strong> <?php echo __('Address'); ?></h3>
						 	  <p class="lead">Blabla2</p><h4>Création le : <?php echo h($raspberry['Raspberry']['created']); ?></h4>
						 	<h4>Derniere modification le : <?php echo h($raspberry['Raspberry']['modified']); ?></h4></p>
				        </div>
				        <div class="col-md-5">
				        	<img class="featurette-image img-responsive" src="'data:image/jpg;base64,' .   base64_encode($raspberry['Raspberry']['image']);"></img>
				        	<p class="lead"> <?php echo h($raspberry['Raspberry']['description']); ?></p>
				        </div>
				      </div>

			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
