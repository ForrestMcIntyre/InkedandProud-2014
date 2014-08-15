<?php

//for security, hide wp version in web pages and feeds
function remove_version_info() {
     return '';
}
add_filter('the_generator', 'remove_version_info');

// use shortcodes in widgets
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

//Register custom menus
function register_my_menus() {
  register_nav_menus(
    array( 
		  'main-menu' => __( 'Main Menu' ), 
		  'footer-menu' => __( 'Footer Menu' )
		  )
  );
  
  add_action( 'init', 'register_my_menus' );

}

// Add custom menus to Dashboard when theme is active   
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main-menu' => 'Main Menu',
		  'footer_menu' => 'Footer Menu'
			 )
	);
}    

add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	/* Register the primary sidebar. */
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
	/* Register the right home widget. */
	register_sidebar(
		array(
			'id' => 'home-right',
			'name' => __( 'Right Home Widget' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
	/* Register the center home widget. */
	register_sidebar(
		array(
			'id' => 'home-center',
			'name' => __( 'Center Home Widget' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
	/* Register the left home widget. */
	register_sidebar(
		array(
			'id' => 'home-left',
			'name' => __( 'Left Home Widget' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
	
	/* Repeat register_sidebar() code for additional sidebars. */
}

function custom_excerpt_length( $length ) {
	return 20;
}
function custom_excerpt_more( $more ) {
	return '...<a class="more" href="'. get_permalink( get_the_ID() ) . '">' . __('See More »', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Remove rel attribute from the category list
function remove_category_list_rel($output)
{
  $output = str_replace(' rel="category tag"', '', $output);
  return $output;
}
add_filter('wp_list_categories', 'remove_category_list_rel');
add_filter('the_category', 'remove_category_list_rel');