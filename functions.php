<?php
/*
	Bootstrap
*/
function bootstrap_scripts() {
	wp_enqueue_style('rk-theme-bootstrap', get_template_directory_uri().'/library/bootstrap/css/bootstrap.min.css');
	wp_enqueue_script('rk-theme-bootstrapjs', get_template_directory_uri().'/library/bootstrap/js/bootstrap.min.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'bootstrap_scripts');

/*
	menus
*/
function my_menus() {
	register_nav_menus(
		array(
			'navegation' =>
			__( 'Menu de navegacion' )
			)
		);
}

add_action(
'init',
'my_menus' );

/*
	Zonas de Widgets
*/
function my_widgets(){
	register_sidebar(
		array(
			'name' => __('Sidebar'),
			'id' => 'sidebar',
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
			)
			);
}
add_action('init','my_widgets');

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