<?php get_header(); ?>
<main id="content" class="main-content internal blog" role="main">
    <div class="container">
        <div class="row">
            <div class="blog-main col-md-9 mb-5">
                <section class="blog-posts">
                    <?php if ( have_posts() ) : ?>
                        <h1 class="archive-title"><?php single_cat_title(); ?></h1>
                        <div class="row blog-list">
                            <?php while ( have_posts() ) : the_post(); ?>
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
                        </div>
                    <?php else : ?>
                        <p><?php _e( 'Desculpe, nenhum post foi encontado.' ); ?></p>
                    <?php endif; ?>
                </section>
            </div>

            <div class="blog-sidebar col-md-3 ps-md-5 mb-5">
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
    </div>
</main>
<?php get_footer(); ?>
