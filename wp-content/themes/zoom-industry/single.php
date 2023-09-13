<?php get_header(); ?>
<main id="content" class="main-content internal blog" role="main">
    <div class="container">
        <div class="row">
            <div class="blog-main col-md-9">
                <section class="entry-section">
                    <?php
                    if (have_posts()): the_post(); ?>
                        <figure>
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                        </figure>
                        <div class="content">
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        </div>
                    <?php endif;?>
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
