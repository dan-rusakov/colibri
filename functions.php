<?php
// Remove all default WP template redirects/lookups
remove_action( 'template_redirect', 'redirect_canonical' );

// Redirect all requests to index.php so the Vue app is loaded and 404s aren't thrown
function remove_redirects() {
	add_rewrite_rule( '^/(.+)/?', 'index.php', 'top' );
}
add_action( 'init', 'remove_redirects' );

// Load scripts
function load_vue_scripts() {
	wp_enqueue_script(
		'vuejs-wordpress-theme-starter-js',
		get_stylesheet_directory_uri() . '/dist/scripts/index.js',
		array( 'jquery' ),
		filemtime( get_stylesheet_directory() . '/dist/scripts/index.js' ),
		true
	);

	wp_enqueue_style(
		'vuejs-wordpress-theme-starter-css',
		get_stylesheet_directory_uri() . '/dist/styles.css',
		null,
		filemtime( get_stylesheet_directory() . '/dist/styles.css' )
	);
}
add_action( 'wp_enqueue_scripts', 'load_vue_scripts', 100 );

/* ACF settings
----------------------------------------- */

function acf_load_trainer_select_field( $field ) {

    $field['choices'] = array();
	$field['choices']['unselected'] = '';

    if( have_rows('trainers') ) {
        while( have_rows('trainers') ) {

            the_row();

            $value = get_sub_field('trainer_name');
            $field['choices'][ $value ] = $value;

        }
    }

    return $field;
}

add_filter('acf/load_field/name=trainer_select', 'acf_load_trainer_select_field');

function acf_load_group_select_field( $field ) {

    $field['choices'] = array();
	$field['choices']['unselected'] = '';

    if( have_rows('groups') ) {
        while( have_rows('groups') ) {

            the_row();

            $value = get_sub_field('group_name');
            $field['choices'][ $value ] = $value;

        }
    }

    return $field;
}

add_filter('acf/load_field/name=group_select', 'acf_load_group_select_field');
