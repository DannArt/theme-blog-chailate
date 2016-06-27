<?php
 
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Menu principal', 'wptuts' ) );
        } endif;

?>
<?php 	

function load_scripts(){

	/* CARGA HOJAS DE ESTILO DEL DIRECTORIO*/

	 wp_enqueue_style('stylesheet', get_stylesheet_uri() , '', '1.0','');
	 wp_enqueue_script('stylesheet');

	 /* CARGA FUENTES DE GOOGLE */

	 wp_enqueue_style('opensans', '//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' , '', '1.0','');
	  wp_enqueue_script('opensans');

	  wp_enqueue_style('awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"' , '', '1.0','');
	  wp_enqueue_script('awesome');
	  	
	  wp_enqueue_style('source', '//fonts.googleapis.com/css?family=Source+Sans+Pro:200, 400,300,700' , '', '1.0','');
	  wp_enqueue_script('source');

	   wp_enqueue_style('arvo', '//fonts.googleapis.com/css?family=Arvo' , '', '1.0','');
	  wp_enqueue_script('arvo');

	  wp_enqueue_style('sans', '//fonts.googleapis.com/css?family=Open+Sans:300,400,700' , '', '1.0','');
	  wp_enqueue_script('sans');

	
    /* CARGA CSS BOOTSTRAP */

	   wp_enqueue_style('bootstrap_css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' , '', '1.0','');
	  wp_enqueue_script('bootstrap_css');

	   wp_enqueue_style('animate_css', '//cdn.jsdelivr.net/animatecss/3.5.2/animate.css' , '', '1.0','');
	  wp_enqueue_script('animate_css');
	  
	   wp_enqueue_script('jquery_min', '//code.jquery.com/jquery-2.2.3.min.js', array(), '2.2.3', false);
	  wp_enqueue_script('jquery_min');
	  
	  wp_enqueue_script('bootstrap_js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array(), '2.2.3', false);
	  wp_enqueue_script('bootstrap_js');

	   wp_enqueue_script('app_js', get_template_directory_uri() . '/js/app.js', 'jquery_min', '1.0', false);
	 wp_enqueue_script('app_js');
	
}
add_action('wp_enqueue_scripts','load_scripts');
	
 ?>
 
<?php /*
	function popularPosts($num) {
    global $wpdb;
    
    $posts = $wpdb->get_results("SELECT comment_count, ID, post_title, post_date FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , $num");
  
    foreach ($posts as $post) {

        setup_postdata($post);
        $id = $post->ID;
        $image_url = wp_get_attachment_url( get_post_thumbnail_id($id) );
        $title = $post->post_title;
        $count = $post->comment_count;
        $date= $post->post_date;
        $result= substr($date, 0, 10);
        if ($count != 0) {
            $popular .= '<li>';
            $popular .= '<div>
							<a href="' . get_permalink($id) . '">
								<img src="'.$image_url.'">
							</a> 
						</div>
						<h5>
							<a href="'. get_permalink($id) .'">'.$title.
							'</a>
						</h5>
						<small>'
							.$result.' '.$contador.'
						</small>
            ';
            $popular .= '</li>';
        }
    }
    return $popular;
}
 ?>
 */

 add_theme_support('post-thumbnails');
 add_image_size('recientes',748,452, true);
 add_image_size('page',783,500, true);
  ?>

<?php 

	add_action( 'widgets_init', 'theme_slug_widgets_init' );
	function theme_slug_widgets_init() {
   
     register_sidebar( array(
        'name' => 'Foot_Widget',
        'before_widget' => '<div class="col-lg-3  col-md-3 text-center col-sm-12">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1>',
		'after_title'   => '</h1>',
    ) );
}

?>

