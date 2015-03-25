
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
				      
                <?php $image = $raspberry['Raspberry']['image'] == '' ?'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==':'data:image/jpg;base64,' .   base64_encode($raspberry['Raspberry']['image']);?>
			    <header class="image-bg-fluid-height">
			        <h1 class="section-heading" style="color:white"><?php echo $raspberry['Raspberry']['name']; ?></h1>
			    </header>

    <!-- Content Section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <p class="lead section-lead"><strong>Adresse IP :</strong> <?php echo h($raspberry['Raspberry']['address']); ?></p>
                    <p class="section-paragraph"><?php echo $raspberry['Raspberry']['description']; ?></p><h4>Création le : <?php echo h($raspberry['Raspberry']['created']); ?></h4>
						 	<h4>Derniere modification le : <?php echo h($raspberry['Raspberry']['modified']); ?></h4>
                </div>
                <div class="col-md-5"><p>
                    <img class="img-responsive img-center img-circle" src="<?php echo $image; ?>" alt="Generic placeholder image" style="width: 200px; height: 200px;">
                </p></div>
                <div class="col-lg-12">
                    <h2>Settings :</h2>
                </div>
                <?php if (isset($raspberry['Setting'])) {
                foreach ($raspberry['Setting'] as $setting): ?>

                                    <div class="col-lg-4">
                                        <div class="panel panel-primary">

                                            <div class="panel-heading">

                                                <h4 class="panel-title"><p class='text-center'><?php echo h($setting['name']); ?></p></h4>
                                            </div>

                                            <div class="panel-body">
                                                <p>
                                                    <?php echo h($setting['description']);?>
                                                </p>
                                            </div>

                                        </div>

                                   </div>

                                <?php endforeach; }?>
                <div class="col-lg-12">
                    <h2>Plugins :</h2>
                </div>
                <?php if (isset($raspberry['Plugin'])) {
                foreach ($raspberry['Plugin'] as $plugin): ?>

                                    <div class="col-lg-4">
                                        <div class="panel panel-primary">

                                            <div class="panel-heading">

                                                <h4 class="panel-title"><p class='text-center'><?php echo h($plugin['name']); ?></p></h4>
                                            </div>

                                            <div class="panel-body">
                                                <p>
                                                    <?php echo h($plugin['description']);?>
                                                </p>
                                            </div>

                                        </div>

                                   </div>

                                <?php endforeach; }?>

            </div>
        </div>
    </section>


    <!-- Fixed Height Image Aside -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->
    <aside class="image-bg-fixed-height"></aside>

