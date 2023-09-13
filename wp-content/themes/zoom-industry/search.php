<?php
get_header();

$s = $_GET['s'];

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
$args = [
    'post_type' => array('post','page','documento','componente','driver'),
    'posts_per_page' => 10,
    'post_status' => 'publish',
    's' => $s,
    'paged' => $paged
];
$posts = new WP_Query($args);
?>
<main id="content" class="main-content internal" role="main">
    <section class="header-intro-title">
        <div class="container">
            <div class="row align-items-center">
                <div class="header-intro-title__text col-md-6">
                    <div class="wrap">
                        <div class="page-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <h1>Busca</h1>
                        </div>
                    </div>
                </div>
                <div class="header-intro-title__image col-md-6 p-0">
                    <div class="header-title-bg" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/dist/images/banner-suporte.jpg')?>)"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="search-results">
        <div class="container">
            <div class="page-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
               <h1>Resultado</h1>
            </div>
            <h2 class="search-subtitle" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                Você pesquisou por: <span>"<?php echo $s; ?>"</span>
            </h2>
            <div class="search-form" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                <?php get_template_part('template-parts/searchform-support'); ?>
            </div>

            <?php if($posts->have_posts()): ?>
            <div class="post-list" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                <?php while($posts->have_posts()): $posts->the_post(); ?>
                <div class="post-item">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt();?>
                    <a href="<?php the_permalink(); ?>" class="link-more">Saiba mais</a>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div class="paginacao">
                <?php
                    global $the_query;

                    $big = 999999999; // need an unlikely integer
                    echo '<div class="navigation">';
                        echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'prev_text' => __('Anterior'),
                        'next_text' => __('Próxima'),
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $the_query->max_num_pages
                        ) );
                    echo '</div>';
                ?>
            </div>
            <?php else: ?>
                <div class="text-center">
                    <p>Nenhum post encontrado.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
?>
