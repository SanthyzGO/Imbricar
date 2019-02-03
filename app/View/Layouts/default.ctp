<?php
/**
* CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
* Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
* @link          https://cakephp.org CakePHP(tm) Project
* @package       app.View.Layouts
* @since         CakePHP(tm) v 0.10.0.1076
* @license       https://opensource.org/licenses/mit-license.php MIT License
*/

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo "Imbricar" ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
	echo $this->Html->meta('llave.icon');

	//cho $this->Html->css('cake.generic');
	echo $this->Html->css('bootstrap.min');
	echo $this->Html->css('bootstrap-responsive.min');
	echo $this->Html->css('theme');
	echo $this->Html->css('font-awesome');
	echo $this->Html->script('jquery-1.9.1.min');
	echo $this->Html->script('jquery-ui-1.10.1.custom.min');
	echo $this->Html->script('bootstrap.min');
	echo $this->Html->script('jquery.flot');
	echo $this->Html->script('jquery.flot.resize');
	echo $this->Html->script('jquery.dataTables');
	echo $this->Html->script('common');
	echo $this->Html->script('jquery.flot.pie');
	echo $this->Html->css('bootstrap-theme.min');



	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
</head>
<body>
	<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
	    <div class="container">
	      <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
	        <i class="icon-reorder shaded"></i>
	      </a>

	      <a class="brand" href="index.html">
	        Imbricar
	      </a>

	      <div class="nav-collapse collapse navbar-inverse-collapse">

	        <div class="nav pull-right">
	          <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
	            <ul class="dropdown-menu">
	              <li><a href="#">Item No. 1</a></li>

	              <li><a href="#">Don't Click</a></li>
	              <li class="divider"></li>
	              <li class="nav-header">Example Header</li>
	              <li><a href="#">A Separated link</a></li>
	            </ul>
	          </li>

	          <li><a href="#">
	            Support
	          </a></li>
	          <li class="nav-user dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              <img src="images/user.png" class="nav-avatar" />
	              <b class="caret"></b>
	            </a>
	            <ul class="dropdown-menu">
	              <li><a href="#">Your Profile</a></li>
	              <li><a href="#">Edit Profile</a></li>
	              <li><a href="#">Account Settings</a></li>
	              <li class="divider"></li>
	              <li><a href="#">Logout</a></li>
	            </ul>
	          </li>
	        </div>
	      </div><!-- /.nav-collapse -->
	    </div>
	  </div><!-- /navbar-inner -->
	</div><!-- /navbar -->
	<div class="wrapper">
	  <div class="container">
	    <div class="row">
	      <div class="span-4">
	        <div class="sidebar">
	          <ul class="widget widget-menu unstyled">
	            <li class="active">
	              <?php echo $this->Html->link('Repuestos',array('controller'=>'repuestos','action'=>'index')); ?>
	            </li>
	            <li><?php
	            echo $this->Html->link('Crear Repuesto',array('controller'=>'repuestos','action'=>'nuevo'));?>
	          </li>
	          <li>
							<?php
							echo $this->html->link('Clientes',array('controller'=>'clientes','action'=>'index')); ?>
						</li>
	            <li>
								<?php
								 echo $this->Html->link('Crear Cliente',array('controller'=>'clientes','action'=>'nuevo'));?> 
							<!-- <a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">19</b> </a> -->
							</li>
	            </ul>
	            <!--/.widget-nav-->



	            <!--/.widget-nav-->
	            <ul class="widget widget-menu unstyled">
	              <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">

	              </i>More Pages </a>
	              <ul id="togglePages" class="collapse unstyled">
	                <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
	                <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
	                <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
	              </ul>
	            </li>
	            <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
	          </ul>
	        </div>
	        <!--/.sidebar-->
	      </div>
	      <div class="span-8">
	        <div class="content">
	          <?php echo $this->Flash->render(); ?>

	          <?php echo $this->fetch('content'); ?>
	        </div>
	      </div>
	    </div>

	  </div>
	</div>
	<div id="footer">
	  <h6>Imbricar 2019 ®</h6>
	  <p>
	  </p>
	</div>

<!--esta linea permite ver las busquedas que se realicen-->
<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
