<?php
/**
 * Enqueues all css and script used in the theme
 *
 * @return void
 */
function theme_enqueues_styles_scripts()
{
    $theme_version = wp_get_theme()->get('Version');

    $ajax_params = array(
        'conecta_ajax' => admin_url('admin-ajax.php'),
        'ajax_nonce' => wp_create_nonce('my_nonce'),
      );

    // Comment reply JS
    if (is_singular()) {
        wp_enqueue_script('comment-reply');
    }

    // ENQUEUE your css below
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], $theme_version);
    wp_enqueue_style('theme-css', get_template_directory_uri() . '/dist/css/main.min.css', [], $theme_version);

    // ENQUEUE your js below
    wp_enqueue_script('jquery');

    // Default js of your theme
    wp_enqueue_script('main-js', get_template_directory_uri() . '/dist/js/main.min.js', [], $theme_version, true);
    wp_script_add_data('main-js', 'async', true);

    wp_localize_script( 'main-js', 'wp', $ajax_params );
}

add_action('wp_enqueue_scripts', 'theme_enqueues_styles_scripts');
