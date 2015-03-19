<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Modification/Creation
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-fw fa-desktop"></i>  
                                <?php echo $this->Html->link(__('OpenELECs'), array('controller' => 'raspberries','action' => 'index', $id)); ?>
                            </li>
                            <li>
                                <i class="fa fa-cogs"></i> <?php echo $this->Html->link(__('Parametres'), array('controller' => 'raspberries','action' => 'settings', $id)); ?>
                            </li>
                            <li class="active">
                                <i class="fa fa-pencil-square-o"></i> <?php echo $fileinfo['Setting']['name']; ?>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <h2><?php echo '<h2>'.$name.' :</h2>'; ?></h2>

                    <div id="page-container" class="row">

                            <?php
                                    if(file_exists($fileinfo['Setting']['path'].$fileinfo['Setting']['name'].'.'.$fileinfo['Setting']['extension'])) 
                                        { 
                                            echo '<div class="col-lg-6">';
                                            echo $this->Form->create($name, array('role' => 'form', 'url' => './form/'.$id.'/'.$fileinfo['Setting']['name']));

                                            {
                                                    //Create new DomDocuemnt
                                                    $dom = new DomDocument();
                                                    $dom->preserveWhiteSpace = FALSE;
                                                    $dom->load($fileinfo['Setting']['path'].$fileinfo['Setting']['name'].'.'.$fileinfo['Setting']['extension']);
                                                    $this->Xml->inputXML($dom);
                                                }
                                            echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary'));
                                            echo $this->Form->end();
                                            echo '</div>';
                                            ?>
                                            <div class="col-lg-6">
                                                    <?php echo '<pre>'.htmlspecialchars(file_get_contents($fileinfo['Setting']['path'].$fileinfo['Setting']['name'].'.'.$fileinfo['Setting']['extension'])).'</pre>'; ?>

                                            <?php }
                                    else {
                                            ?>
                                                    <?php 
                                                    echo $this->Form->create($name, array('role' => 'form', 'url' => './form/'.$id.'/'.$fileinfo['Setting']['name']));
                                                    echo $this->Form->input($fileinfo['Setting']['name'], array('class' => 'form-control', 'type' => 'textarea','placeholder' => 'Entrer votre fichier'));
                                                    echo '<br><p>'.$this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary','div' => false));
                                                    echo '&nbsp'.$this->Form->button('Tout effacer',array('type' => 'reset', 'class' => 'btn btn-default')).'</p>';
                                                    echo $this->Form->end();
                                        }?>
                                        </div>
                    </div>