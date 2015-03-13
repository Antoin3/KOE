<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Guisettings
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-fw fa-desktop"></i>  <?php echo $this->Html->link(__('OpenELECs'), array('controller' => 'raspberries','action' => 'index')); ?>
                            </li>
                            <li>
                                <i class="fa fa-list-ul"></i> Parametres
                            </li>
                            <li class="active">
                                <i class="fa fa-list-ul"></i> Modification de guisettings.xml
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                    <div id="page-container" class="row">
                    <?php  
                            $filename = '\\\\'.$raspberry['Raspberry']['address'].'\Userdata\guisettings.xml';
                            if(file_exists($filename)) 
                                    { 
                                        echo '<div class="col-lg-6">';
                                        echo $this->Form->create('Guisettings', array('role' => 'form'));

                                        echo '<fieldset>';
                                        //Create new DomDocuemnt
                                        $dom = new DomDocument();
                                        $dom->preserveWhiteSpace = FALSE;
                                        $dom->load($filename);
                                        $this->Xml->inputXML($dom);
                                        echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary'));
                                        echo '</fieldset>';

                                        echo $this->Form->end();
                                        echo '</div>';
                                        ?>
                                        <div class="col-lg-6">
                                            <hr class="featurette-divider">
                                                <?php echo '<pre class="pre-scrollable">'.htmlspecialchars(file_get_contents($filename)).'</pre>'; ?>
                                        </div>

                                        <?php } ?>
                    </div>