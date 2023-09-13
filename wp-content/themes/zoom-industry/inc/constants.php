<?php
// I18n theme domain
define('I18N_DOMAIN', 'zi');

// Acf options
define('ACF_EXISTS', (bool)function_exists('get_field') );
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Opções',
		'menu_title'	=> 'Opções',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
    ));
}
