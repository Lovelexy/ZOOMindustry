<?php
/**
 * Template name: Blog
 */

get_header();
?>
<main id="content" class="main-content internal blog" role="main">
    <div class="container">
        <div class="row">
            <div class="blog-main col-md-9">
                <section class="blog-posts">
                    <?php
                    $the_query = new WP_Query(array(
                        'post_type'=>'post',
                        'post_status'=>'publish',
                        'posts_per_page'=>1,
                        'orderby' => 'date'
                    )); ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <div class="blog-post-featured">
                                <figure>
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <?php the_post_thumbnail('post-featured'); ?>
                                        </a>
                                    <?php endif; ?>
                                </figure>
                                <div class="content">
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>" class="read-more">Saiba mais +</a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p><?php _e( 'Desculpe, nenhum post foi encontado.' ); ?></p>
                    <?php endif; wp_reset_query(); ?>

                    <div class="row blog-list">
                        <?php
                        $the_query = new WP_Query(array(
                            'post_type'=>'post',
                            'post_status'=>'publish',
                            'posts_per_page'=>3,
                            'offset' => 1,
                            'orderby' => 'date'
                        )); ?>
                        <?php if ( $the_query->have_posts() ) : ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <div class="blog-post-item col-md-4">
                                    <figure>
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                                <?php the_post_thumbnail('post-thumb'); ?>
                                            </a>
                                        <?php endif; ?>
                                    </figure>
                                    <div class="content">
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <?php the_excerpt(); ?>
                                        <a href="<?php the_permalink(); ?>" class="read-more">Saiba mais +</a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <p><?php _e( 'Desculpe, nenhum post foi encontado.' ); ?></p>
                        <?php endif; wp_reset_query(); ?>
                    </div>
                </section>
            </div>

            <div class="blog-sidebar col-md-3 ps-md-5">
                <div class="blog-sidebar-categories">
                    <span>Todos os temas</span>
                    <?php
                        $exclude_cats = array(
                            get_cat_ID('Sem categoria'),
                            get_cat_ID('Destaques')
                        );
                        $categories = get_categories( array(
                            'taxonomy'   => 'category',
                            'orderby' => 'name',
                            'order'   => 'ASC',
                            'hide_empty'          => 0,
                            'exclude' => $exclude_cats
                        ) );
                        echo '<ul>';
                        foreach( $categories as $category ) {
                            echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                        }
                        echo '</ul>';
                    ?>
                </div>
            </div>
        </div>

        <?php get_template_part('template-parts/blog-highlights'); ?>

    </div>
</main>

<?php get_footer(); ?>
