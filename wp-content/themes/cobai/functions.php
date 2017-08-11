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
add_action('get_header', 'my_filter_head');

    function my_filter_head() {
	    remove_action('wp_head', '_admin_bar_bump_cb');
    }
?>


<?php

add_action( 'init', 'create_posttype' );

function create_posttype() {

	$labels = array(
	'name' => 'Persons',
	'singular_name' => 'Person',
	'add_new' => 'Add Person',
	'all_items' => 'All People',
	'add_new_item' => 'Add Person',
	'edit_item' => 'Edit Person',
	'new_item' => 'New Person',
	'view_item' => 'View Person',
	'search_item' => 'Search People',
	'not_found' => 'No people found',
	'not_found_in_trash' => 'No people found in trash',
	'parent_item-colon' => 'Parent Person'
	);

	$args = array(
		'labels' => $labels,'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'slug' => 'person',
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
			'page-attributes'
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
	    'exclude_from_search' => false
	);

	register_post_type( 'person', $args);
}
?>

