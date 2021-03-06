<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="<?php echo (!empty($this->params['action']) && ($this->params['controller'] == 'pages') && ($this->params['action']=='display') )?'active' :'inactive' ?>">
                        <?php echo $this->Html->link('<i class="fa fa-fw fa-dashboard"></i> Accueil', array('controller' => 'pages', 'action' => 'home'), array('escape' => false)); ?>
                    </li>
                    <li class="<?php echo (!empty($this->params['action']) && (($this->params['controller']=='Raspberries') || ($this->params['controller']=='Plugins')))?'active' :'inactive' ?>">
                        <a href="javascript:;" data-toggle="collapse" data-target="#rasp"><i class="fa fa-fw fa-desktop"></i> OpenELECs <i class="fa fa-fw fa-caret-down"/></i></a>
                        <ul id="rasp" class="collapse">
                            <li>
                                <?php echo $this->Html->link(__('<i class="fa fa-list"></i> Liste'), array('controller' => 'Raspberries', 'action' => 'index'), array('escape' => false)); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__('<i class="fa fa-plus"></i> Ajouter'), array('controller' => 'Raspberries', 'action' => 'add'), array('escape' => false)); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__('<i class="fa fa-cogs"></i> Parametres généraux'), array('controller' => 'Raspberries', 'action' => 'settings','all'), array('escape' => false)); ?>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php echo (!empty($this->params['action']) && ($this->params['controller']=='Users'))?'active' :'inactive' ?>">
                        <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-users"></i> Utilisateurs <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="users" class="collapse">
                            <li>
                                <?php echo $this->Html->link(__('<i class="fa fa-list"></i> Liste'), array('controller' => 'Users', 'action' => 'index'), array('escape' => false)); ?>
                            </li>
                            <li>
                            <!-- <i class="fa fa-user-plus"></i> ne fonctionne pas ? -->
                                <?php echo $this->Html->link(__('<i class="fa fa-user-plus"></i> Ajouter'), array('controller' => 'Users', 'action' => 'add'), array('escape' => false)); ?>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>