<?php 

function cptui_register_my_taxes_produto_cat() {

	/**
	 * Taxonomy: Categorias.
	 */

	$labels = [
		"name" => __( "Categorias", "custom-post-type-ui" ),
		"singular_name" => __( "Categoria", "custom-post-type-ui" ),
	];
	
	$args = [
		"label" => __( "Categorias", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'produto_cat', 'with_front' => false, 'hierarchical' => true ],
        'hierarchical' => true,
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "produto_cat",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "produto_cat", [ "page" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_produto_cat' );

function cptui_register_my_taxes_driver_cat() {

	/**
	 * Taxonomy: Categorias.
	 */

	$labels = [
		"name" => __( "Categorias", "custom-post-type-ui" ),
		"singular_name" => __( "Categoria", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => __( "Categorias", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'driver_cat', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "driver_cat",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "driver_cat", [ "driver" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_driver_cat' );


function cptui_register_my_taxes_documento_cat() {

	/**
	 * Taxonomy: Categorias.
	 */

	$labels = [
		"name" => __( "Tipo", "custom-post-type-ui" ),
		"singular_name" => __( "Tipo", "custom-post-type-ui" ),
	];
	
	$args = [
		"label" => __( "Tipo", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'documento_cat', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "documento_cat",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "documento_cat", [ "documento" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_documento_cat' );