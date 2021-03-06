<?php 
// Our custom post type function
function create_mentor_posttype() {
	register_post_type( 'mentors',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Mentors' ),
				'singular_name' => __( 'Mentor' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'mentors'),
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_mentor_posttype' );

function funix_setup_menu(){
	add_theme_support('menus');

	register_nav_menu('primary','Primary Header Navigation');
}
add_action( 'init', 'funix_setup_menu' );
