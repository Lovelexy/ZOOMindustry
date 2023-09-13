<?php
/**
 * Template name: Computação Pessoal Corporativa
 */

get_header();
?>
<main id="content" class="main-content internal" role="main">
    <section class="corporate-intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="corporate-intro__text col-md-6 px-md-6">
                <div class="corporate-intro-bg" style="background-image: url(<?php the_field('bg_intro_corporative'); ?>)"></div>
                    <div class="wrap">
                        <?php if (get_field('title_intro_corporative')) : ?>
                            <div class="page-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <h1><?php the_field('title_intro_corporative'); ?></h1>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('text_intro_corporative')) : ?>
                            <div class="section-desc" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <?php the_field('text_intro_corporative'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="corporate-intro__image col-md-6 px-md-0">
                    <div class="wrap">
                        <?php
                        $image_intro1= get_field('img_intro_corporative');
                        if (!empty($image_intro1)) : ?>
                            <figure data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <img src="<?php echo esc_url($image_intro1['url']); ?>" alt="<?php echo esc_attr($image_intro1['alt']); ?>" />
                            </figure>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="corporate-highlight first">
        <div class="container">
            <div class="row align-items-center">
                <div class="corporate-highlight__image col-md-6">
                    <?php
                    $image_dest1= get_field('img_dest_corporative');
                    if (!empty($image_dest1)) : ?>
                        <figure data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <img src="<?php echo esc_url($image_dest1['url']); ?>" alt="<?php echo esc_attr($image_dest1['alt']); ?>" />
                        </figure>
                    <?php endif; ?>
                </div>
                <div class="corporate-highlight__text col-md-6 px-md-5">
                    <?php if (get_field('title_dest_corporative')) : ?>
                        <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <h2><?php the_field('title_dest_corporative'); ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('text_dest_corporative')) : ?>
                        <div class="section-text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <?php the_field('text_dest_corporative'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="corporate-highlight__buttons" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <?php if (get_field('btn_text_1_dest_corporative')) : ?>
                            <a href="<?php the_field('btn_link_1_dest_corporative'); ?>" class="btn btn-md btn-primary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_1_dest_corporative'); ?></a>
                        <?php endif; ?>
                        <?php if (get_field('btn_text_2_dest_corporative')) : ?>
                            <a href="<?php the_field('btn_link_2_dest_corporative'); ?>" class="btn btn-md btn-secondary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_2_dest_corporative'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="corporate-highlight second">
        <div class="container">
            <div class="row align-items-center">
                <div class="corporate-highlight__text col-md-5 px-md-6">
                    <?php if (get_field('title_dest_2_corporative')) : ?>
                        <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <h2><?php the_field('title_dest_2_corporative'); ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('text_dest_2_corporative')) : ?>
                        <div class="section-text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <?php the_field('text_dest_2_corporative'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="corporate-highlight__buttons" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <?php if (get_field('btn_text_1_dest_2_corporative')) : ?>
                            <a href="<?php the_field('btn_link_1_dest_2_corporative'); ?>" class="btn btn-md btn-primary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_1_dest_2_corporative'); ?></a>
                        <?php endif; ?>
                        <?php if (get_field('btn_text_2_dest_2_corporative')) : ?>
                            <a href="<?php the_field('btn_link_2_dest_2_corporative'); ?>" class="btn btn-md btn-secondary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_2_dest_2_corporative'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="corporate-highlight__image col-md-7">
                    <?php
                    $image_dest2= get_field('img_dest_2_corporative');
                    if (!empty($image_dest2)) : ?>
                        <figure data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <img src="<?php echo esc_url($image_dest2['url']); ?>" alt="<?php echo esc_attr($image_dest2['alt']); ?>" />
                        </figure>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="corporate-products" id="equipamentos">
        <div class="container">
            <?php if (get_field('title_models_1_corporative')) : ?>
                <div class="section-title text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                    <h2><?php the_field('title_models_1_corporative'); ?></h2>
                </div>
            <?php endif; ?>
            <div class="row justify-content-center">
                <?php if (have_rows('models_1_corporative')) :
                    while (have_rows('models_1_corporative')) : the_row();
                        $image = get_sub_field('img_models_1_corporative');
                        $title = get_sub_field('title_models_1_corporative');
                        $desc = get_sub_field('text_models_1_corporative');
                        $link = get_sub_field('link_models_1_corporative');
                    ?>
                    <div class="corporate-products__item col-md-4" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <figure>
                            <a href="<?php echo $link; ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
                        </figure>
                        <a href="<?php echo $link; ?>"><h3><?php echo $title; ?></h3></a>
                        <?php echo $desc; ?>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="corporate-products-desk">
        <div class="container">
            <?php if (get_field('title_models_2_corporative')) : ?>
                <div class="section-title text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                    <h2><?php the_field('title_models_2_corporative'); ?></h2>
                </div>
            <?php endif; ?>
            <?php if (get_field('text_models_2_corporative')) : ?>
                <div class="section-desc text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                    <?php the_field('text_models_2_corporative'); ?>
                </div>
            <?php endif; ?>
            <div class="row justify-content-center">
                <?php if (have_rows('models_2_corporative')) :
                    while (have_rows('models_2_corporative')) : the_row();
                        $image = get_sub_field('img_models_2_corporative');
                        $title = get_sub_field('title_models_2_corporative');
                        $btntext1= get_sub_field('btn_text_1_models_2_corporative');
                        $btnlink1 = get_sub_field('btn_link_1_models_2_corporative');
                        $btntext2 = get_sub_field('btn_text_2_models_2_corporative');
                        $btnlink2 = get_sub_field('btn_link_2_models_2_corporative');
                    ?>
                    <div class="corporate-products-desk__item col-md-5" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <figure>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </figure>
                        <h3><?php echo $title; ?></h3>
                        <div class="corporate-products-desk__buttons">
                            <?php /*<a href="<?php echo $btnlink1; ?>" class="btn btn-md btn-primary"><?php echo $btntext1; ?></a>*/?>
                            <a href="<?php echo $btnlink2; ?>" class="btn btn-md btn-secondary"><?php echo $btntext2; ?></a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </div>
    </section>

    <div class="container">
        <?php get_template_part('template-parts/blog-highlights'); ?>
    </div>

</main>

<?php get_footer(); ?>
