<?php
/**
 * Template name: Contato
 */

get_header();
?>
<main id="content" class="main-content internal" role="main">
    <section class="contact-intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="contact-intro__text col-md-6 pe-md-5">
                    <div class="wrap">
                        <?php if (get_field('title_intro_contact')) : ?>
                            <div class="page-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <h1><?php the_field('title_intro_contact'); ?></h1>
                            </div>
                        <?php endif; ?>

                        <?php if (get_field('text_intro_contact')) : ?>
                            <div class="section-desc" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <?php the_field('text_intro_contact'); ?>
                            </div>
                        <?php endif; ?>

                        <?php if (get_field('info_1_contact')) : ?>
                            <div class="contact-intro__info" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <?php the_field('info_1_contact'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('info_2_contact')) : ?>
                            <div class="contact-intro__info" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <?php the_field('info_2_contact'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('info_3_contact')) : ?>
                            <div class="contact-intro__info" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <?php the_field('info_3_contact'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('info_4_contact')) : ?>
                            <div class="contact-intro__info" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <?php the_field('info_4_contact'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="contact-intro__image col-md-6 p-0">
                    <div class="contact-intro-bg" style="background-image: url(<?php the_field('img_intro_contact'); ?>)"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-register">
        <div class="container">
            <div class="row">
                <div class="contact-register__image col-md-6 px-md-5">
                    <?php if (get_field('title_form_contact')) : ?>
                        <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <h2><?php the_field('title_form_contact'); ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('text_form_contact')) : ?>
                        <div class="section-desc" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <?php the_field('text_form_contact'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="contact-register__form" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <?php if (get_field('form_contact')) : ?>
                            <?php the_field('form_contact'); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="contact-register__map col-md-6 ps-md-5" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="150">
                    <?php if (get_field('map_contact')) : ?>
                        <?php the_field('map_contact'); ?>
                    <?php endif; ?>

                    <div class="contact-banner" style="margin-bottom: 2rem;">
                        <?php
                        $image=get_field('banner_contact');
                        if (!empty($image)) : ?>
                            <figure>
                                <a href="<?php the_field('link_banner_contact'); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
                            </figure>
                        <?php endif; ?>
                    </div>

                    <div class="contact-banner">
                        <?php
                        $image2 = get_field('banner_contact_2');
                        if (!empty($image2)) : ?>
                            <figure>
                                <a href="<?php the_field('link_banner_contact_2'); ?>"><img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" /></a>
                            </figure>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
