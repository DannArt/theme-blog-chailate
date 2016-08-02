<!DOCTYPE html>
<html  <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta property="fb:app_id" content="1649416852048714">
	
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/Favicon.png" />
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<?php wp_head();   ?>
</head>
<body>
	<div id="logo"  class="text-center">
		<div >
			<a href="http://chailate.com/blog/">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logoti.png" alt="">
			</a>
		</div>
	</div>
	<nav class="navbar navbar-default">
	  	<div class="container-fluid">
	    <!-- Toggle para dispositivos moviles -->
		    <div class="navbar-header">
			    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			    </button>
		    </div>

		    <!-- WIDGET MENU PRINCIPAL -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> <!-- .navbar-collapse -->
		   	  <?php 
				     wp_nav_menu(array(
				     	'container' => 'ul',
				     	 'menu_class' =>'nav navbar-nav',
	                	'items_wrap' => '<ul id="primary" class="nav navbar-nav ">%3$s</ul>',
	                	'theme_location' => 'primary')); 
	            ?>
		    </div><!-- /.navbar-collapse -->
	  	</div><!-- /.container-fluid -->	
	</nav>
	<div id="myNav" class="overlay">
	  <a href="#" class="closebtn">×</a>
	  	<div class="overlay-content">
	  	<!--____________________  WIDGET BUSCADOR ____________________-->
	  	<?php 
	  		 if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')): endif;
			 ?>
		<!--________________  FINAL WIDGET BUSCADOR __________________-->
		</div>
	</div>