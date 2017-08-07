<?php
/*
	Bootstrap
*/
function bootstrap_scripts() {
	wp_enqueue_style('rk-theme-bootstrap', get_template_directory_uri().'/library/bootstrap/css/bootstrap.min.css');
	wp_enqueue_script('rk-theme-bootstrapjs', get_template_directory_uri().'/library/bootstrap/js/bootstrap.min.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'bootstrap_scripts');

//Register custom navigation walker
require_once('wp-bootstrap-navwalker.php');
// Theme setup  navigation walker
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;
		
/*
	navbar menus
*/
function my_menus() {
	register_nav_menus(
		array(
			'navegation' =>
			__( 'Menu de navegacion' )
			)
		);
}
add_action('init','my_menus');

/*
	widgets
*/
// Barra lateral principal
function my_widgets(){
	register_sidebar(
		array(
			'name' => __('Sidebar'),
			'id' => 'sidebar',
			'before_widget' => '<aside class="widget">',
			'after_widget' => '</aside>',
			'before_title' => '<h2>',
			'after_title' => '</h2>'
			)
			);
}
add_action('init','my_widgets');

// Barra lateral secundaria
function registrar_sidebar(){  
  register_sidebar(array(  
   'name' => 'Sidebar de ejemplo',  
   'id' => 'sidebar-ejemplo',  
   'description' => 'Descripción de ejemplo',  
   'class' => 'sidebar',  
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget' => '</aside>',  
   'before_title' => '</br></br></br></br></br><!-- <h2 class="widget-title">',  
   'after_title' => '</h2> -->',  
  ));  
}  
add_action( 'widgets_init', 'registrar_sidebar');

/*
    Filtrar resultados de busqueda solo posts
*/
/*
function busqueda_posts($query){
	if($query->is_search) {
		$query->set('post_type','post');
	}
	return $query;
}
add_filter('pre_get_posts','busqueda_posts');
*/
?>