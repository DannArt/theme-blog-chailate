<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta property="fb:app_id" content="1649416852048714">
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<?php wp_head();   ?>
</head>
<body>
	<div id="logo"  class="text-center">
		<div >
			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logoti.png" alt="">
		</div>
		
	</div>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
		    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </button>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
	  	<?php 
	  		 if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')): endif;
			 ?>
		  
		</div>
	</div>



<!-- <!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta property="fb:app_id" content="1649416852048714">
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<?php wp_head();   ?>
</head>
<body>
	<div id="inicio" class="parallax" >
		<nav class="navbar navbar-default">
  			<div class="container-fluid">
			    <div class="navbar-header">
			      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
			      	</button>
			    </div>

		    
			    <div class="collapse navbar-collapse" >
			
			     <?php 
			     wp_nav_menu(array(
			     	'container' => 'ul',
			     	 'menu_class' =>'nav navbar-nav yanone',
                	'items_wrap' => '<ul id="primary" class="nav navbar-nav yanone">%3$s</ul>',
                	'theme_location' => 'primary')); 
                ?>
			   
			      <ul class="nav navbar-nav navbar-right">
			        	<li>
			        		<a href="https://www.facebook.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/face.png"></a>
			        	</li>
			        	<li>
			        		<a href="https://twitter.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/tw.png"></a>
			        	</li>
			        	<li>
			        		<a href="https://www.instagram.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/in.png"></a>
			        	</li>
			        	<li>
			        		<a href="https://www.youtube.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/yu.png"></a>
			        	</li>
		      		</ul>
		    	</div>
		  	</div>
		</nav>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 text-center">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="">
				<br>
				<button class=" oswald">LEER MAS</button>
				</div>
			</div>
		</div>
	</div>
-->