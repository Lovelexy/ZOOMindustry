<?php
// Load constants first
include('inc/constants.php');
// Include your functions files here
include('inc/enqueues.php');
// Ajax load certificates
include('inc/certificate_ajax.php');
// Include TAX
include('inc/taxonomy.php');
// Include CPTS
include('inc/cpt.php');
// Include ACF
include('inc/acf.php');
// Include API/v1
include('inc/api/routes.php');

function cutom_login_logo() {
    echo "<style type=\"text/css\">

    .language-switcher {
        display: none;
    }



</style>";
}
add_action( 'login_enqueue_scripts', 'cutom_login_logo' );

/**
 * Declare theme support
 * ( cf :  http://codex.wordpress.org/Function_Reference/add_theme_support )
 */
function theme_set_theme_supports()
{
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    add_theme_support('automatic-feed-links');

    // let wordpress manage the title
    add_theme_support('title-tag');

    /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
    add_theme_support(
        'html5',
        [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        ]
    );

    // Add support for responsive embeds.
    add_theme_support('responsive-embeds');

    add_image_size( 'post-featured', 500, 315, true);
    add_image_size( 'post-thumb', 290, 165, true);
    add_image_size( 'post-highlight', 275, 205, true);
}

add_action('after_setup_theme', 'theme_set_theme_supports');
function add_custom_jquery() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', false, null);
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'add_custom_jquery');
/**
 * Declare theme width global var
 */
if ( ! isset($content_width)) {
    $content_width = 1170; // Bootstrap default container value
}

/**
 * Register WordPress menus
 * cf : http://codex.wordpress.org/Function_Reference/wp_nav_menu
 *
 */
//@TODO : declare your menus here
register_nav_menus(array(
    'main_menu' => __('Main menu', I18N_DOMAIN),
    'footer_menu' => __('Footer menu', I18N_DOMAIN),
    'secondary_menu' => __('Secondary menu', I18N_DOMAIN)
));

/**
 * register sidebars
 * cf : https://codex.wordpress.org/Function_Reference/register_sidebar
 *
 * @return void
 */
function theme_register_sidebars()
{
    if ( ! function_exists('register_sidebar')) {
        return;
    }
    //@TODO : declare your sidebar here
    register_sidebar(array(
        'name'          => __('Main sidebar', I18N_DOMAIN),
        'id'            => 'main-sidebar',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 1', I18N_DOMAIN),
        'id'            => 'footer-1',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-widget-title">',
        'after_title'   => '</div>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 2', I18N_DOMAIN),
        'id'            => 'footer-2',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-widget-title">',
        'after_title'   => '</div>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 3', I18N_DOMAIN),
        'id'            => 'footer-3',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-widget-title">',
        'after_title'   => '</div>',
    ));
}

add_action( 'widgets_init', 'theme_register_sidebars' );


/**
 * Set style.css in admin
 *
 */

function my_login_stylesheet()
{
    wp_enqueue_style('custom-login', get_stylesheet_directory_uri() . '/dist/css/admin.min.css');
}
add_action('login_enqueue_scripts', 'my_login_stylesheet');

/**
 * Remove emojis CSS and JS
 */
function theme_remove_emojis()
{
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'print_emoji_detection_script', 99);
}
add_action( 'init', 'theme_remove_emojis' );


// Remover tags br e p do contact form 7
add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Custom pagination
 * USAGE:
 *     <?php echo bootstrap_pagination(); ?> //uses global $wp_query
 * or with custom WP_Query():
 *     <?php
 *      $query = new \WP_Query($args);
 *       ... while(have_posts()), $query->posts stuff ... endwhile() ...
 *       echo bootstrap_pagination($query);
 *     ?>
 */
function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true, $params = [] ) {
    if ( null === $wp_query ) {
        global $wp_query;
    }

    $add_args = [];

    //add query (GET) parameters to generated page URLs
    /*if (isset($_GET[ 'sort' ])) {
        $add_args[ 'sort' ] = (string)$_GET[ 'sort' ];
    }*/

    $pages = paginate_links( array_merge( [
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'format'       => '?paged=%#%',
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'total'        => $wp_query->max_num_pages,
            'type'         => 'array',
            'show_all'     => false,
            'end_size'     => 3,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => __( '«' ),
            'next_text'    => __( '»' ),
            'add_args'     => $add_args,
            'add_fragment' => ''
        ], $params )
    );

    if ( is_array( $pages ) ) {
        //$current_page = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
        $pagination = '<nav class="custom-pagination" aria-label="Page navigation"><ul class="pagination">';

        foreach ( $pages as $page ) {
            $pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
        }

        $pagination .= '</ul></nav>';

        if ( $echo ) {
            echo $pagination;
        } else {
            return $pagination;
        }
    }
    return null;
}


/*add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});*/


function listTaxonomies( $term = 'category' ) {

    $terms = get_terms(
        [
            'taxonomy'   => $term,
            'hide_empty' => false
        ]
    );

    if ( ! empty( $terms ) && is_array( $terms ) ) {
        foreach ( $terms as $t ) {
            _e('<option value="' . $t->slug . '" ' . (($_GET[$term] === $t->slug) ? 'selected' : '') . '>' . $t->name . '</option>');
        }
    }

}


function mapTaxonomy($tax){
    $result = [];

    if( !empty($_POST[$tax]) ) {

        if($_POST[$tax][0] === 'all')
            unset($_POST[$tax][0]);

        $result = [
            'taxonomy' => $tax,
            'field'    => 'slug',
            'terms'    => $_POST[$tax]
        ];
    }
    return $result;
}

add_action('wp_ajax_loadmore', 'loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler');

function loadmore_ajax_handler(){

    if(!empty($_POST['categoria'])) {

        $args = [
            'post_type'=> 'page',
            'post_status'=>'publish',
            'posts_per_page'=> -1,
            'orderby' => 'title',
            'order' => 'ASC',
            'tax_query' => [
                [
                    'taxonomy' => 'produto_cat',
                    'field'    => 'slug',
                    'terms'    => $_POST['categoria']
                ]
            ]
        ];

        $result = new WP_Query($args);

        if ( ! empty( $result->posts ) && is_array( $result->posts ) ) {
            foreach ( $result->posts as $r ) {
                _e('<option value="' . $r->ID . '"' . '>' . $r->post_title . '</option>');
            }
        }
    }

	die;
}

add_action('wp_ajax_buscarComponente', 'buscarComponente');
add_action('wp_ajax_nopriv_buscarComponente', 'buscarComponente');

function buscarComponente(){

    if(!empty($_POST['id'])) {

        $args = array(
            'post_type' => 'componente',
            'numberposts' => -1,
            'meta_query' => array(
                array(
                    'key' => 'produto',
                    'value' => '"' . $_POST['id'] . '"',
                    'compare' => 'LIKE'
                )
            )
        );

        $componente = get_posts($args);
        if(!empty($componente)) {
            $arquivo = get_field('arquivo', $componente[0]->ID);
            if(!empty($arquivo)) {
                $html = '<span class="d-block m-3">Arquivo: <strong>' . $arquivo['filename'] . '</strong></span>';
                $html .='<p><a class="btn btn-success" href="' . $arquivo['url'] . '" target="_blank">Download</a></p>';
                echo $html;
            }
        }
    }

	die;
}

function create_pages($params) {

    $parent_id = 0;

    if( !empty($params['parent']) && $parent = get_page_by_title( $params['parent'] ) ) {
        $parent_id = $parent->ID;
    }

    if(!empty($params)) {
        return wp_insert_post(
            [
                'post_title'    => $params['title'],
                'post_status'   => 'publish',
                'post_author'   => 1,
                'post_type'     => 'page',
                'post_name'     => $params['slug'],
                'post_parent'   => $parent_id,
                'page_template' => 'templates/' . $params['template'] . '.php'
            ]
        );
    }
}
function load_pages() {

    $pages = [
        [ 'slug' => 'drivers', 'title' => 'Drivers', 'template'  => 'drivers' ],
        [ 'slug' => 'busca', 'title' => 'Drivers Busca', 'template'  => 'drivers-details', 'parent' => 'Drivers'],
        [ 'slug' => 'componentes-homologados', 'title' => 'Componentes Homologados', 'template'  => 'components' ]

    ];

    foreach($pages as $page) {
        if( get_page_by_title( $page['title'] ) === NULL ) {
            create_pages( $page );
        }
    }

}
add_action('admin_init','load_pages');


function custom_rpc_post_types( $post_types ) {

    $post_types['driver'] = array(
        'driver_cat' => array(
            'message' => 'Por favor selecione uma categoria.'
        )
    );
    $post_types['documento'] = array(
        'documento_cat' => array(
            'message' => 'Por favor selecione um tipo de documento.'
        )
    );

    // Always return $post_types after your modifications
    return $post_types;
}

add_filter( 'rpc_post_types', 'custom_rpc_post_types' );

add_action('wp_insert_post','save_certificate_callback');
function save_certificate_callback($post_id){
    global $post;

    if ($post->post_type === 'certificados'):
        $serial = get_field('serial', $post->ID);
        $certified = get_field('certified', $post->ID);

        $args = array(
            'post_type' => 'certificados',
            'posts_per_page' => -1,
            'meta_query' => array(
                'relation' => 'AND',
                array(
                    'key'     => 'serial',
                    'value'   => $serial,
                    'compare' => '=',
                ),
                array(
                    'key'     => 'certified',
                    'value'   => $certified,
                    'compare' => '=',
                )
            ),
        );
        $hasCertifiedAndSerial = new WP_Query( $args );

        if($hasCertifiedAndSerial->post_count > 1):
            wp_delete_post($post->ID, true);
            $message = "Número de série já existente com o mesmo pacote de serviços.<br><br><a class='button button-primary' href='". admin_url("/edit.php?post_type=certificados") ."'>Voltar</a>";
            wp_die($message);
        endif;
    endif;
}

// ADD COLUMN IN POST LISTING - OPORTUNIDADES
function add_custom_column($columns) {
    unset($columns['date']);

    $columns['status'] = 'Status';
    $columns['date'] = 'Date';

    return $columns;
}
add_filter( 'manage_registros_posts_columns', 'add_custom_column' );

function registros_column( $column, $post_id ) {
    if ( 'status' === $column ) {
        echo get_field('status', $post_id);
    }
}
add_action( 'manage_registros_posts_custom_column', 'registros_column', 10, 2);

function check_ssl_redirect() {
    if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
        $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . $location);
        exit;
    }
}
add_action('wp_head', 'check_ssl_redirect');

