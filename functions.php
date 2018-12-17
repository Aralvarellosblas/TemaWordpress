<?php
/**
 * Register our sidebars and widgetized areas.
 * Mi propia zona de widget
 *
 */
function wordpress_child_widgets_init() {
	register_sidebar( array(
		'name'          => 'Nueva zona de Widget',
		'id'            => 'zona1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title MiWidget">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wordpress_child_widgets_init' );


function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu1' ));
}
add_action( 'init', 'register_my_menu' );
?>