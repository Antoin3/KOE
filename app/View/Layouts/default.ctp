<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php

			echo $this->Html->css('bootstrap');
			echo $this->Html->css('sb-admin');
			echo $this->Html->css('plugins/morris');
			echo $this->Html->css('../font-awesome/css/font-awesome');

			echo $this->fetch('css');
	?>
</head>
<body>

<div id="wrapper">
				<?php echo $this->element('menu/top_menu'); ?>
				<?php echo $this->element('menu/sidebar_menu'); ?>
        <div id="page-wrapper">

            <div class="container-fluid">
				<div id="header">
				</div>
	           	<div id="content">
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('content'); ?>
				</div>
				<div id="footer">
				</div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

<?php
			//jQuery
			echo $this->Html->script('jquery.js');

			//Bootstrap Core JavaScript
			echo $this->Html->script('bootstrap');
			echo $this->Html->script('fonctions.js');


			//Morris Charts JavaScript
			echo $this->Html->script('plugins/morris/raphael.min');
			echo $this->Html->script('plugins/morris/morris');
			echo $this->Html->script('plugins/morris/morris-data');
			
			echo $this->fetch('script');
?>


</body>
</html>
