<?php get_header(); ?>
<main id="content" class="main-content internal" role="main">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="page-title">
                <h1><?php the_title(); ?></h1>
            </div>

            <section class="page-content">
                <?php the_content(); ?>
            </section>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
