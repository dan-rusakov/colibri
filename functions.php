<?php
// Remove all default WP template redirects/lookups
remove_action('template_redirect', 'redirect_canonical');

// Redirect all requests to index.php so the Vue app is loaded and 404s aren't thrown
function remove_redirects() {
	add_rewrite_rule('^/(.+)/?', 'index.php');
}
add_action('init', 'remove_redirects');

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

/* Hide menu items for manager
----------------------------------------- */

function hide_menu_items() {
    if (!current_user_can('manage_options')) {
        remove_menu_page('edit-comments.php');
		remove_menu_page('edit.php');
		remove_menu_page('tools.php');
    }
}

add_action('admin_menu', 'hide_menu_items', 999);

/* Emails sending
----------------------------------------- */

function feedback(WP_REST_Request $request)
{
    $phone = $request->get_param('phone');

    if (empty($phone)) {
        wp_send_json(['status' => 422, "message" => 'Нет номера телефона'], 422);
    }

    $email = 'kolibrigym@gmail.com';
    $subject = 'Новая заявка с сайта';
    $message_for_user = 'Номер телефона: ' . $phone;

    wp_mail(
        $email,
        $subject,
        $message_for_user,
    );
    wp_send_json(['status' => 200, 'data' => ['message' => 'Sent successfully']], 200);
}

add_action('rest_api_init', function () {
    register_rest_route('api', '/feedback', array(
        'methods' => 'POST',
        'callback' => 'feedback',
    ));
});
