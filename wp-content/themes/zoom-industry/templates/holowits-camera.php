<?php
/**
 * Template name: Holowits Cameras
 */

get_header();
?>
<main id="content" class="main-content internal" role="main">
    <section class="holowits_cam-intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="holowits_cam-intro__text col-md-6 px-md-6">
                <div class="holowits_cam-intro-bg" style="background-image: url(<?php the_field('bg_intro_holowits_cam'); ?>)"></div>
                    <div class="wrap">
                        <?php if (get_field('title_intro_holowits_cam')) : ?>
                            <div class="page-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <h1><?php the_field('title_intro_holowits_cam'); ?></h1>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('text_intro_holowits_cam')) : ?>
                            <div class="section-desc" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <?php the_field('text_intro_holowits_cam'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="holowits_cam-intro__image col-md-6 px-md-0">
                    <div class="wrap">
                        <?php
                        $image_intro1= get_field('img_intro_holowits_cam');
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
    <section class="holowits_cam-highlight first">
        <div class="container">
            <div class="row align-items-center">
                <div class="holowits_cam-highlight__image col-md-6">
                    <?php
                    $image_dest1= get_field('img_dest_holowits_cam');
                    if (!empty($image_dest1)) : ?>
                        <figure data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <img src="<?php echo esc_url($image_dest1['url']); ?>" alt="<?php echo esc_attr($image_dest1['alt']); ?>" />
                        </figure>
                    <?php endif; ?>
                </div>
                <div class="holowits_cam-highlight__text col-md-6 px-md-5">
                    <?php if (get_field('title_dest_holowits_cam')) : ?>
                        <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <h2><?php the_field('title_dest_holowits_cam'); ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('text_dest_holowits_cam')) : ?>
                        <div class="section-text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <?php the_field('text_dest_holowits_cam'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="holowits_cam-highlight__buttons" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <?php if (get_field('btn_text_1_dest_holowits_cam')) : ?>
                            <a href="<?php the_field('btn_link_1_dest_holowits_cam'); ?>" class="btn btn-md btn-primary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_1_dest_holowits_cam'); ?></a>
                        <?php endif; ?>
                        <?php if (get_field('btn_text_2_dest_holowits_cam')) : ?>
                            <a href="<?php the_field('btn_link_2_dest_holowits_cam'); ?>" class="btn btn-md btn-secondary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_2_dest_holowits_cam'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="holowits_cam-highlight second">
        <div class="container">
            <div class="row align-items-center">
                <div class="holowits_cam-highlight__text col-md-5 px-md-6">
                    <?php if (get_field('title_dest_2_holowits_cam')) : ?>
                        <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <h2><?php the_field('title_dest_2_holowits_cam'); ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('text_dest_2_holowits_cam')) : ?>
                        <div class="section-text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <?php the_field('text_dest_2_holowits_cam'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="holowits_cam-highlight__buttons" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <?php if (get_field('btn_text_1_dest_2_holowits_cam')) : ?>
                            <a href="<?php the_field('btn_link_1_dest_2_holowits_cam'); ?>" class="btn btn-md btn-primary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_1_dest_2_holowits_cam'); ?></a>
                        <?php endif; ?>
                        <?php if (get_field('btn_text_2_dest_2_holowits_cam')) : ?>
                            <a href="<?php the_field('btn_link_2_dest_2_holowits_cam'); ?>" class="btn btn-md btn-secondary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_2_dest_2_holowits_cam'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="holowits_cam-highlight__image col-md-7">
                    <?php
                    $image_dest2= get_field('img_dest_2_holowits_cam');
                    if (!empty($image_dest2)) : ?>
                        <figure >
                            <img src="<?php echo esc_url($image_dest2['url']); ?>" alt="<?php echo esc_attr($image_dest2['alt']); ?>" />
                        </figure>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="holowits_cam-highlight third">
        <div class="container">
            <div class="row align-items-center">
                <div class="holowits_cam-highlight__image col-md-6">
                    <?php
                    $image_dest3= get_field('img_dest_3_holowits_cam');
                    if (!empty($image_dest3)) : ?>
                        <figure data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <img src="<?php echo esc_url($image_dest3['url']); ?>" alt="<?php echo esc_attr($image_dest4['alt']); ?>" />
                        </figure>
                    <?php endif; ?>
                </div>
                <div class="holowits_cam-highlight__text col-md-6 px-md-5">
                    <?php if (get_field('title_dest_3_holowits_cam')) : ?>
                        <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <h2><?php the_field('title_dest_3_holowits_cam'); ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('text_dest_3_holowits_cam')) : ?>
                        <div class="section-text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <?php the_field('text_dest_3_holowits_cam'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="holowits_cam-highlight__buttons" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <?php if (get_field('btn_text_1_dest_3_holowits_cam')) : ?>
                            <a href="<?php the_field('btn_text_1_dest_3_holowits_cam'); ?>" class="btn btn-md btn-primary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_1_dest_holowits_cam'); ?></a>
                        <?php endif; ?>
                        <?php if (get_field('btn_text_2_dest_holowits_cam')) : ?>
                            <a href="<?php the_field('btn_link_2_dest_holowits_cam'); ?>" class="btn btn-md btn-secondary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_2_dest_holowits_cam'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="holowits_cam-highlight second">
        <div class="container">
            <div class="row align-items-center">
                <div class="holowits_cam-highlight__text col-md-5 px-md-6">
                    <?php if (get_field('title_dest_4_holowits_cam')) : ?>
                        <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <h2><?php the_field('title_dest_4_holowits_cam'); ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('text_dest_4_holowits_cam')) : ?>
                        <div class="section-text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <?php the_field('text_dest_4_holowits_cam'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="holowits_cam-highlight__buttons" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <?php if (get_field('btn_text_1_dest_4_holowits_cam')) : ?>
                            <a href="<?php the_field('btn_link_1_dest_4_holowits_cam'); ?>" class="btn btn-md btn-primary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_1_dest_2_holowits_cam'); ?></a>
                        <?php endif; ?>
                        <?php if (get_field('btn_text_2_dest_4_holowits_cam')) : ?>
                            <a href="<?php the_field('btn_link_2_dest_4_holowits_cam'); ?>" class="btn btn-md btn-secondary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_2_dest_2_holowits_cam'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="holowits_cam-highlight__image col-md-7">
                    <?php
                    $image_dest4= get_field('img_dest_4_holowits_cam');
                    if (!empty($image_dest4)) : ?>
                        <figure >
                            <img src="<?php echo esc_url($image_dest4['url']); ?>" alt="<?php echo esc_attr($image_dest4['alt']); ?>" />
                        </figure>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="holowits_cam-highlight third">
        <div class="container">
            <div class="row align-items-center">
                <div class="holowits_cam-highlight__image col-md-6">
                    <?php
                    $image_dest5= get_field('img_dest_5_holowits_cam');
                    if (!empty($image_dest5)) : ?>
                        <figure data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <img src="<?php echo esc_url($image_dest5['url']); ?>" alt="<?php echo esc_attr($image_dest5['alt']); ?>" />
                        </figure>
                    <?php endif; ?>
                </div>
                <div class="holowits_cam-highlight__text col-md-6 px-md-5">
                    <?php if (get_field('title_dest_5_holowits_cam')) : ?>
                        <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <h2><?php the_field('title_dest_5_holowits_cam'); ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('text_dest_5_holowits_cam')) : ?>
                        <div class="section-text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <?php the_field('text_dest_5_holowits_cam'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="holowits_cam-highlight__buttons" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <?php if (get_field('btn_text_1_dest_5_holowits_cam')) : ?>
                            <a href="<?php the_field('btn_text_1_dest_5_holowits_cam'); ?>" class="btn btn-md btn-primary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_1_dest_holowits_cam'); ?></a>
                        <?php endif; ?>
                        <?php if (get_field('btn_text_2_dest_holowits_cam')) : ?>
                            <a href="<?php the_field('btn_link_2_dest_holowits_cam'); ?>" class="btn btn-md btn-secondary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_2_dest_holowits_cam'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="holowits_cam-highlight second">
        <div class="container">
            <div class="row align-items-center">
                <div class="holowits_cam-highlight__text col-md-5 px-md-6">
                    <?php if (get_field('title_dest_6_holowits_cam')) : ?>
                        <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <h2><?php the_field('title_dest_6_holowits_cam'); ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('text_dest_6_holowits_cam')) : ?>
                        <div class="section-text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <?php the_field('text_dest_6_holowits_cam'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="holowits_cam-highlight__buttons" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <?php if (get_field('btn_text_1_dest_6_holowits_cam')) : ?>
                            <a href="<?php the_field('btn_link_1_dest_6_holowits_cam'); ?>" class="btn btn-md btn-primary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_1_dest_2_holowits_cam'); ?></a>
                        <?php endif; ?>
                        <?php if (get_field('btn_text_2_dest_6_holowits_cam')) : ?>
                            <a href="<?php the_field('btn_link_2_dest_6_holowits_cam'); ?>" class="btn btn-md btn-secondary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_2_dest_2_holowits_cam'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="holowits_cam-highlight__image col-md-7">
                    <?php
                    $image_dest6= get_field('img_dest_6_holowits_cam');
                    if (!empty($image_dest6)) : ?>
                        <figure >
                            <img src="<?php echo esc_url($image_dest6['url']); ?>" alt="<?php echo esc_attr($image_dest6['alt']); ?>" />
                        </figure>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    
    

    <section class="holowits_cam-products" id="equipamentos">
        <div class="container">
            <?php if (get_field('title_models_1_holowits_cam')) : ?>
                <div class="section-title text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                    <h2><?php the_field('title_models_1_holowits_cam'); ?></h2>
                </div>
            <?php endif; ?>
            <div class="row justify-content-center">
                <?php if (have_rows('models_1_holowits_cam')) :
                    while (have_rows('models_1_holowits_cam')) : the_row();
                        $image = get_sub_field('img_models_1_holowits_cam');
                        $title = get_sub_field('title_models_1_holowits_cam');
                        $desc = get_sub_field('text_models_1_holowits_cam');
                        $link = get_sub_field('link_models_1_holowits_cam');
                    ?>
                    <div class="holowits_cam-products__item col-md-4" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
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

    <section class="holowits_cam-products-desk">
        <div class="container">
            <?php if (get_field('title_models_2_holowits_cam')) : ?>
                <div class="section-title text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                    <h2><?php the_field('title_models_2_holowits_cam'); ?></h2>
                </div>
            <?php endif; ?>
            <?php if (get_field('text_models_2_holowits_cam')) : ?>
                <div class="section-desc text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                    <?php the_field('text_models_2_holowits_cam'); ?>
                </div>
            <?php endif; ?>
            <div class="row justify-content-center">
                <?php if (have_rows('models_2_holowits_cam')) :
                    while (have_rows('models_2_holowits_cam')) : the_row();
                        $image = get_sub_field('img_models_2_holowits_cam');
                        $title = get_sub_field('title_models_2_holowits_cam');
                        $btntext1= get_sub_field('btn_text_1_models_2_holowits_cam');
                        $btnlink1 = get_sub_field('btn_link_1_models_2_holowits_cam');
                        $btntext2 = get_sub_field('btn_text_2_models_2_holowits_cam');
                        $btnlink2 = get_sub_field('btn_link_2_models_2_holowits_cam');
                    ?>
                    <div class="holowits_cam-products-desk__item col-md-5" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <figure>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </figure>
                        <h3><?php echo $title; ?></h3>
                        <div class="holowits_cam-products-desk__buttons">
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
