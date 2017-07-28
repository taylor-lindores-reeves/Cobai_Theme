<?php

function enqueue_cobai_styles() { /** This is only seeming to work for the header thus far */

    wp_enqueue_style( 'style', get_stylesheet_uri());

    /** Below enqueues the normalize file from the template directory stated */
    wp_enqueue_style( 'normalize',  get_template_directory_uri() .'/assets/css/normalize.css' );

    /** Below enqueues the javascript file from js directory */
    wp_enqueue_script( 'js',  get_template_directory_uri() .'/assets/js/js.js' );

}


add_action( 'wp_enqueue_scripts', 'enqueue_cobai_styles');

?>
<?php

add_action( 'init', 'create_posttype' );
function create_posttype() {
	register_post_type( 'team_member',
		array(
			'labels' => array(
				'name' => __( 'Persons' ),
				'singular_name' => __( 'Person' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'team_member'),
		)
	);
}

?>
