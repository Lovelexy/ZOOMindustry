<?php
/**
 * Template name: Holowits
 */

get_header();
?>
<main id="content" class="main-content internal" role="main">
    <section class="holowits-intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="holowits-intro__text col-md-6 px-md-6">
                <div class="holowits-intro-bg" style="background-image: url(<?php the_field('bg_intro_holowits'); ?>)"></div>
                    <div class="wrap">
                        <?php if (get_field('title_intro_holowits')) : ?>
                            <div class="page-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <h1><?php the_field('title_intro_holowits'); ?></h1>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('text_intro_holowits')) : ?>
                            <div class="section-desc" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <?php the_field('text_intro_holowits'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="holowits-intro__image col-md-6 px-md-0">
                    <div class="wrap">
                        <?php
                        $image_intro1= get_field('img_intro_holowits');
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
    <section class="holowits-highlight first">
        <div class="container">
            <div class="row align-items-center">
                <div class="holowits-highlight__image col-md-6">
                    <?php
                    $image_dest1= get_field('img_dest_holowits');
                    if (!empty($image_dest1)) : ?>
                        <figure data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <img src="<?php echo esc_url($image_dest1['url']); ?>" alt="<?php echo esc_attr($image_dest1['alt']); ?>" />
                        </figure>
                    <?php endif; ?>
                </div>
                <div class="holowits-highlight__text col-md-6 px-md-5">
                    <?php if (get_field('title_dest_holowits')) : ?>
                        <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <h2><?php the_field('title_dest_holowits'); ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('text_dest_holowits')) : ?>
                        <div class="section-text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <?php the_field('text_dest_holowits'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="holowits-highlight__buttons" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <?php if (get_field('btn_text_1_dest_holowits')) : ?>
                            <a href="<?php the_field('btn_link_1_dest_holowits'); ?>" class="btn btn-md btn-primary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_1_dest_holowits'); ?></a>
                        <?php endif; ?>
                        <?php if (get_field('btn_text_2_dest_holowits')) : ?>
                            <a href="<?php the_field('btn_link_2_dest_holowits'); ?>" class="btn btn-md btn-secondary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_2_dest_holowits'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="holowits-highlight second">
        <div class="container">
            <div class="row align-items-center">
                <div class="holowits-highlight__text col-md-5 px-md-6">
                    <?php if (get_field('title_dest_2_holowits')) : ?>
                        <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <h2><?php the_field('title_dest_2_holowits'); ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('text_dest_2_holowits')) : ?>
                        <div class="section-text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <?php the_field('text_dest_2_holowits'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="holowits-highlight__buttons" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <?php if (get_field('btn_text_1_dest_2_holowits')) : ?>
                            <a href="<?php the_field('btn_link_1_dest_2_holowits'); ?>" class="btn btn-md btn-primary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_1_dest_2_holowits'); ?></a>
                        <?php endif; ?>
                        <?php if (get_field('btn_text_2_dest_2_holowits')) : ?>
                            <a href="<?php the_field('btn_link_2_dest_2_holowits'); ?>" class="btn btn-md btn-secondary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_2_dest_2_holowits'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="holowits-highlight__image col-md-7">
                    <?php
                    $image_dest2= get_field('img_dest_2_holowits');
                    if (!empty($image_dest2)) : ?>
                        <figure >
                            <img src="<?php echo esc_url($image_dest2['url']); ?>" alt="<?php echo esc_attr($image_dest2['alt']); ?>" />
                        </figure>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="holowits-highlight third">
        <div class="container">
            <div class="row align-items-center">
                <div class="holowits-highlight__image col-md-6">
                    <?php
                    $image_dest3= get_field('img_dest_3_holowits');
                    if (!empty($image_dest3)) : ?>
                        <figure data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <img src="<?php echo esc_url($image_dest3['url']); ?>" alt="<?php echo esc_attr($image_dest4['alt']); ?>" />
                        </figure>
                    <?php endif; ?>
                </div>
                <div class="holowits-highlight__text col-md-6 px-md-5">
                    <?php if (get_field('title_dest_3_holowits')) : ?>
                        <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <h2><?php the_field('title_dest_3_holowits'); ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('text_dest_3_holowits')) : ?>
                        <div class="section-text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <?php the_field('text_dest_3_holowits'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="holowits-highlight__buttons" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <?php if (get_field('btn_text_1_dest_3_holowits')) : ?>
                            <a href="<?php the_field('btn_text_1_dest_3_holowits'); ?>" class="btn btn-md btn-primary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_1_dest_holowits'); ?></a>
                        <?php endif; ?>
                        <?php if (get_field('btn_text_2_dest_holowits')) : ?>
                            <a href="<?php the_field('btn_link_2_dest_holowits'); ?>" class="btn btn-md btn-secondary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_2_dest_holowits'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="holowits-highlight second">
        <div class="container">
            <div class="row align-items-center">
                <div class="holowits-highlight__text col-md-5 px-md-6">
                    <?php if (get_field('title_dest_4_holowits')) : ?>
                        <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <h2><?php the_field('title_dest_4_holowits'); ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('text_dest_4_holowits')) : ?>
                        <div class="section-text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <?php the_field('text_dest_4_holowits'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="holowits-highlight__buttons" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <?php if (get_field('btn_text_1_dest_4_holowits')) : ?>
                            <a href="<?php the_field('btn_link_1_dest_4_holowits'); ?>" class="btn btn-md btn-primary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_1_dest_2_holowits'); ?></a>
                        <?php endif; ?>
                        <?php if (get_field('btn_text_2_dest_4_holowits')) : ?>
                            <a href="<?php the_field('btn_link_2_dest_4_holowits'); ?>" class="btn btn-md btn-secondary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_2_dest_2_holowits'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="holowits-highlight__image col-md-7">
                    <?php
                    $image_dest4= get_field('img_dest_4_holowits');
                    if (!empty($image_dest4)) : ?>
                        <figure >
                            <img src="<?php echo esc_url($image_dest4['url']); ?>" alt="<?php echo esc_attr($image_dest4['alt']); ?>" />
                        </figure>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    
    

    <section class="holowits-products" id="equipamentos">
        <div class="container">
            <?php if (get_field('title_models_1_holowits')) : ?>
                <div class="section-title text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                    <h2><?php the_field('title_models_1_holowits'); ?></h2>
                </div>
            <?php endif; ?>
            <div class="row justify-content-center">
                <?php if (have_rows('models_1_holowits')) :
                    while (have_rows('models_1_holowits')) : the_row();
                        $image = get_sub_field('img_models_1_holowits');
                        $title = get_sub_field('title_models_1_holowits');
                        $desc = get_sub_field('text_models_1_holowits');
                        $link = get_sub_field('link_models_1_holowits');
                    ?>
                    <div class="holowits-products__item col-md-4" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
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

    <section class="holowits-products-desk">
        <div class="container">
            <?php if (get_field('title_models_2_holowits')) : ?>
                <div class="section-title text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                    <h2><?php the_field('title_models_2_holowits'); ?></h2>
                </div>
            <?php endif; ?>
            <?php if (get_field('text_models_2_holowits')) : ?>
                <div class="section-desc text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                    <?php the_field('text_models_2_holowits'); ?>
                </div>
            <?php endif; ?>
            <div class="row justify-content-center">
                <?php if (have_rows('models_2_holowits')) :
                    while (have_rows('models_2_holowits')) : the_row();
                        $image = get_sub_field('img_models_2_holowits');
                        $title = get_sub_field('title_models_2_holowits');
                        $btntext1= get_sub_field('btn_text_1_models_2_holowits');
                        $btnlink1 = get_sub_field('btn_link_1_models_2_holowits');
                        $btntext2 = get_sub_field('btn_text_2_models_2_holowits');
                        $btnlink2 = get_sub_field('btn_link_2_models_2_holowits');
                    ?>
                    <div class="holowits-products-desk__item col-md-5" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <figure>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </figure>
                        <h3><?php echo $title; ?></h3>
                        <div class="holowits-products-desk__buttons">
                            <a href="<?php echo $btnlink1; ?>" class="btn btn-md btn-primary"><?php echo $btntext1; ?></a>
                            
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
