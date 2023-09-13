<?php 

function cptui_register_my_cpts_drivers() {

	/**
	 * Post Type: Drivers.
	 */

	$labels = [
		"name" => __( "Drivers", "custom-post-type-ui" ),
		"singular_name" => __( "Driver", "custom-post-type-ui" ),
        "all_items" => __( "Todos Drivers", "custom-post-type-ui" )
	];

	$args = [
		"label" => __( "Drivers", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "driver", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-media-archive",
        "supports" => [ "title", "editor", "thumbnail", "custom-fields", "page-attributes", "post-formats" ],
        "taxonomies" => [ "driver_cat" ],
		"show_in_graphql" => false,
	];

	register_post_type( "driver", $args );
}

add_action( 'init', 'cptui_register_my_cpts_drivers' );


function cptui_register_my_cpts_documentos() {

	/**
	 * Post Type: documentos.
	 */

	$labels = [
		"name" => __( "Documentos", "custom-post-type-ui" ),
		"singular_name" => __( "Documento", "custom-post-type-ui" ),
        "all_items" => __( "Todos Documentos", "custom-post-type-ui" )
	];

	$args = [
		"label" => __( "Documentos", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "documento", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-media-archive",
        "supports" => [ "title", "editor", "thumbnail", "custom-fields", "page-attributes", "post-formats" ],
        "taxonomies" => [ "documento_cat" ],
		"show_in_graphql" => false,
	];

	register_post_type( "documento", $args );
}

add_action( 'init', 'cptui_register_my_cpts_documentos' );


function cptui_register_my_cpts_componentes() {

	/**
	 * Post Type: componentes.
	 */

	$labels = [
		"name" => __( "Componentes", "custom-post-type-ui" ),
		"singular_name" => __( "Componente", "custom-post-type-ui" ),
        "all_items" => __( "Todos Componentes", "custom-post-type-ui" )
	];

	$args = [
		"label" => __( "Componentes", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "componente", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-media-archive",
        "supports" => [ "title", "editor", "thumbnail", "custom-fields", "page-attributes", "post-formats" ],
		"show_in_graphql" => false,
	];

	register_post_type( "componente", $args );
}

add_action( 'init', 'cptui_register_my_cpts_componentes' );

add_action( 'init', 'registro_de_oportunidade' );
	function registro_de_oportunidade() {
		register_post_type( 'registros',
			array(
				'labels' => array(
					'name' => __( 'Registro de Oportunidade' ),
					'singular_name' => __( 'Registro de Oportunidade' ),
					'menu_name' => __( 'Oportunidades' ),
					'all_items' => __( 'Registros de Oportunidades' ),
					'add_new_item' => __( 'Adicionar novo registro' ),
					'not_found' => __("Nenhum registro encontrado"),
					'not_found_in_trash' => __("Nenhum registro encontrado na lixeira"),
				),
		'public' => true,
		'menu_position' => 5,
		'has_archive'   => true,
		'menu_icon' => 'dashicons-star-filled',
		'supports' => array('title'),
		)
	);
}