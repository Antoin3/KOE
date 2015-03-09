<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <?php echo $this->Html->link('<i class="fa fa-fw fa-dashboard"></i> Accueil', array('controller' => 'pages', 'action' => 'home'), array('escape' => false)); ?>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#rasp"><i class="fa fa-fw fa-desktop"></i> OpenELECs <i class="fa fa-fw fa-caret-down"></i>
                        <ul id="rasp" class="collapse">
                            <li>
                                <?php echo $this->Html->link(__('<i class="fa fa-list"></i> Listes'), array('controller' => 'Raspberries', 'action' => 'index'), array('escape' => false)); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__('<i class="fa fa-plus"></i> Ajouter'), array('controller' => 'Raspberries', 'action' => 'add'), array('escape' => false)); ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-users"></i> Utilisateurs <i class="fa fa-fw fa-caret-down"></i>
                        <ul id="users" class="collapse">
                            <li>
                                <?php echo $this->Html->link(__('<i class="fa fa-list"></i> Listes'), array('controller' => 'Users', 'action' => 'index'), array('escape' => false)); ?>
                            </li>
                            <li>
                            <!-- <i class="fa fa-user-plus"></i> ne fonctionne pas ? -->
                                <?php echo $this->Html->link(__('<i class="fa fa-plus"></i> Ajouter'), array('controller' => 'Users', 'action' => 'add'), array('escape' => false)); ?>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>