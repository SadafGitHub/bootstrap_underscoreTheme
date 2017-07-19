<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function me_experiment_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'me_experiment' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'me_experiment' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


    register_sidebar( array(
		'name'          => esc_html__( 'Left Sidebar', 'me_experiment' ),
		'id'            => 'left-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'me_experiment' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	
}
add_action( 'widgets_init', 'me_experiment_widgets_init' );
?>