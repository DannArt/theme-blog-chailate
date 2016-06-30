<?php
 
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Menu principal', 'wptuts' ) );
        } endif;

?>
<?php 	

function load_scripts(){

	/* CARGA LA HOJA DE ESTILO PRINCIPAL*/

	 wp_enqueue_style('stylesheet', get_stylesheet_uri() , '', '1.0','');
	 wp_enqueue_script('stylesheet');

	 /* CARGA FUENTES DE GOOGLE */

	 wp_enqueue_style('opensans', '//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' , '', '1.0','');
	  wp_enqueue_script('opensans');
 	
	  wp_enqueue_style('source', '//fonts.googleapis.com/css?family=Source+Sans+Pro:200, 400,300,700' , '', '1.0','');
	  wp_enqueue_script('source');

	   wp_enqueue_style('arvo', '//fonts.googleapis.com/css?family=Arvo' , '', '1.0','');
	  wp_enqueue_script('arvo');

	  wp_enqueue_style('sans', '//fonts.googleapis.com/css?family=Open+Sans:300,400,700' , '', '1.0','');
	  wp_enqueue_script('sans');

	
    /* CARGA CSS BOOTSTRAP */

	   wp_enqueue_style('bootstrap_css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' , '', '1.0','');
	  wp_enqueue_script('bootstrap_css');

	/* CARGA ICONOS AWESOME FONTS*/

	   wp_enqueue_style('awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"' , '', '1.0','');
	  wp_enqueue_script('awesome');

	 /* CARGA ANIMACIONES ANIMATE.CSS*/

	   wp_enqueue_style('animate_css', '//cdn.jsdelivr.net/animatecss/3.5.2/animate.css' , '', '1.0','');
	  wp_enqueue_script('animate_css');
	  
	  /* CARGA JQUERY*/

	   wp_enqueue_script('jquery_min', '//code.jquery.com/jquery-2.2.3.min.js', array(), '2.2.3', false);
	  wp_enqueue_script('jquery_min');
	  
	  /* CARGA BOOTSTRAP.JS */

	  wp_enqueue_script('bootstrap_js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array(), '2.2.3', false);
	  wp_enqueue_script('bootstrap_js');

	  /* CARGA EL SCRIPT PERSONALIZADO APP.JS */

	   wp_enqueue_script('app_js', get_template_directory_uri() . '/js/app.js', 'jquery_min', '1.0', false);
	 wp_enqueue_script('app_js');

}
add_action('wp_enqueue_scripts','load_scripts');
	
 ?>
 
<?php 
/* CARGA TAMAÑOS DE IMAGENES */
 add_theme_support('post-thumbnails');
 add_image_size('recientes',748,452, true);
 add_image_size('thumb',197,131, true);

 ?>

<?php 
/* WIDGETS SIDEBAR Y FOOT_WIDGET */
	add_action( 'widgets_init', 'theme_slug_widgets_init' );
	function theme_slug_widgets_init() {
   	  register_sidebar( array(
        'name' => 'Sidebar',
        'before_widget' => '<div class="widget-buscar ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="center-block">',
		'after_title'   => '</h4>',
    ) );
     register_sidebar( array(
        'name' => 'Foot_Widget',
        'before_widget' => '<div class="col-lg-3  col-md-3 text-center col-sm-12">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1>',
		'after_title'   => '</h1>',
    ) );
}

?>

