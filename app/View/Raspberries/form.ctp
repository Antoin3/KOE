<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Modification
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-fw fa-desktop"></i>  <?php echo $this->Html->link(__('OpenELECs'), array('controller' => 'raspberries','action' => 'index')); ?>
                            </li>
                            <li>
                                <i class="fa fa-list-ul"></i> Parametres
                            </li>
                            <li class="active">
                                <i class="fa fa-list-ul"></i> Modification de <?php echo $xml; ?>.xml
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                    <div id="page-container" class="row">

                        <h2><?php echo $raspberry['Raspberry']['name'].' : '.$xml.'.xml'; ?></h2>

                            <?php  
                                    if ($xml != 'oe_settings') {
                                        $filename = '\\\\'.$raspberry['Raspberry']['address'].'\Userdata\\'.$xml.'.xml';
                                    }
                                    else {
                                        $filename = '\\\\'.$raspberry['Raspberry']['address'].'\Userdata\addon_data\service.openelec.settings\\'.$xml.'.xml';
                                    }
                                    if(file_exists($filename)) 
                                        { 
                                            echo '<div class="col-lg-6">';
                                            echo '<hr class="featurette-divider">';
                                            echo $this->Form->create($xml, array('role' => 'form', 'url' => './form/'.$raspberry['Raspberry']['id'].'/'.$xml));

                                            //Create new DomDocuemnt
                                            $dom = new DomDocument();
                                            $dom->preserveWhiteSpace = FALSE;
                                            $dom->load($filename);
                                            $this->Xml->inputXML($dom);
                                            echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary'));
                                            echo $this->Form->end();
                                            echo '</div>';
                                            ?>
                                            <div class="col-lg-6">
                                                <hr class="featurette-divider">
                                                    <?php echo '<pre>'.htmlspecialchars(file_get_contents($filename)).'</pre>'; ?>

                                            <?php }
                                    else {
                                            ?>
                                                    <h2 class="featurette-heading">
                                                    <?php 
                                                    echo $this->Form->create($xml, array('role' => 'form', 'url' => './form/'.$raspberry['Raspberry']['id'].'/'.$xml));
                                                    echo $this->Form->input($xml, array('class' => 'form-control', 'type' => 'textarea','placeholder' => 'Entrer votre XML'));
                                                    echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary'));
                                                    echo $this->Form->end().'</h2>';
                                        }?>
                                        </div>
                    </div>