
<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Parametres
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-fw fa-desktop"></i>  <?php echo $this->Html->link(__('OpenELECs'), array('controller' => 'raspberries','action' => 'index')); ?>
                            </li>
                            <li class="active">
                                <i class="fa fa-cogs"></i> Parametres 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
	<div id="page-container" class="row">
		
		<div id="page-content" class="col-sm-9">

			<div class="raspberries view">

				<h2><?php echo $raspberry['Raspberry']['name']; ?></h2>

				<hr class="featurette-divider">
			      <div class="row featurette">
			        <div class="col-md-7">
			          <h2 class="featurette-heading">Parametres de l'interface <span class="text-muted">(guisettings.xml)</span></h2>
			          <p class="lead">Blabla1</p>

			          <?php 
			          $gs = '\\\\'.$raspberry['Raspberry']['address'].'\Userdata\guisettings.xml';
			          if (file_exists($gs)) {
			          	$labelgs = 'Modifier guisettings.xml';
			          	$displaygs = '<pre class="pre-scrollable">'.htmlspecialchars(file_get_contents($gs)).'</pre>';
			          }
			          else {
			          	$labelgs = 'Créer guisettings.xml';
			          	$displaygs = '<img class="featurette-image img-responsive" src="/img/settingsnotfound.png"><p><h2>Fichier inexistant</h2></p></img>';
			          } ?>
					 
			        </div>
			        <div class="col-md-5">
			        <?php echo $displaygs.'<p>'.$this->Html->link(__($labelgs), array('controller' => 'Raspberries', 'action' => 'form', $raspberry['Raspberry']['id'],'guisettings'),array('class' => 'btn btn-default')).'</p>'; ?>
			        </div>
			      </div>

			    <hr class="featurette-divider">
			      <div class="row featurette">
			        <div class="col-md-7">
			          <h2 class="featurette-heading">Parametres avancés <span class="text-muted">(advancedsettings.xml)</span></h2>
			          <p class="lead">Blabla2</p>

			          <?php 
			          $as = '\\\\'.$raspberry['Raspberry']['address'].'\Userdata\advancedsettings.xml';
			          if (file_exists($as)) {
			          	$labelas = 'Modifier advancedsettings.xml';
			          	$displayas = '<pre class="pre-scrollable">'.htmlspecialchars(file_get_contents($as)).'</pre>';
			          }
			          else {
			          	$labelas = 'Créer advancedsettings.xml';
			          	$displayas = '<img class="featurette-image img-responsive" src="/img/settingsnotfound.png"><p><h2>Fichier inexistant</h2></p></img>';
			          } ?>

			        </div>
			        <div class="col-md-5">
			        <?php echo $displayas.'<p>'.$this->Html->link(__($labelas), array('controller' => 'Raspberries', 'action' => 'form', $raspberry['Raspberry']['id'],'advancedsettings'),array('class' => 'btn btn-default')).'</p>'; ?>
			        </div>
			      </div>

				<hr class="featurette-divider">
			      <div class="row featurette">
			        <div class="col-md-7">
			          <h2 class="featurette-heading">Parametres du raspberry <span class="text-muted">(oe_settings.xml, config.txt, etc)</span></h2>
			          <p class="lead">Blabla3</p>

			          <?php 
			          $oes = '\\\\'.$raspberry['Raspberry']['address'].'\Userdata\addon_data\service.openelec.settings\oe_settings.xml';
			          if (file_exists($oes)) {
			          	$labeloes = 'Modifier parametres raspberry';
			          	$displayoes = '<pre class="pre-scrollable">'.htmlspecialchars(file_get_contents($oes)).'</pre>';
			          }
			          else {
			          	$labeloes = 'Créer parametres raspberry';
			          	$displayoes = '<img class="featurette-image img-responsive" src="/img/settingsnotfound.png"><p><h2>Fichier inexistant</h2></p></img>';
			          } ?>
					 
			        </div>
			        <div class="col-md-5">
			        <?php echo $displayoes.'<p>'.$this->Html->link(__($labeloes), array('controller' => 'Raspberries', 'action' => 'form', $raspberry['Raspberry']['id'],'oe_settings'),array('class' => 'btn btn-default')).'</p>'; ?>
			    </div>
			</div>
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->