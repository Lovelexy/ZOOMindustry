<div class="blog-hightlights">
    <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
        <h2>Destaques do Blog</h2>
    </div>
    <div class="row blog-list">
        <?php
        $the_query = new WP_Query(array(
            'post_type'=>'post',
            'category_name' => 'destaques',
            'post_status'=>'publish',
            'posts_per_page'=>4,
            'orderby' => 'date'
        )); ?>
        <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="blog-post-item col-md-3" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                    <figure>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php the_post_thumbnail('post-highlight'); ?>
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
        <?php endif; wp_reset_query(); ?>
    </div>
</div>
