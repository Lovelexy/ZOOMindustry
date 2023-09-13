<?php
/**
 * Template name: Quem Somos
 */

get_header();
?>
<main id="content" class="main-content internal" role="main">
    <section class="about-intro">
        <div class="container">
            <div class="row">
                <div class="about-intro__text col-md-6">
                    <div class="wrap">
                        <?php if (get_field('title_intro_about')) : ?>
                            <div class="page-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <h1><?php the_field('title_intro_about'); ?></h1>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('text_intro_about')) : ?>
                            <div class="section-desc" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <?php the_field('text_intro_about'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="about-intro__image col-md-6 p-0">
                    <div class="about-intro-bg" style="background-image: url(<?php the_field('img_intro_about'); ?>)"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-group">
        <div class="container">
            <div class="row align-items-center">
                <div class="about-group__video col-md-6">
                    <?php
                    $image_1= get_field('img_video_sec_1_about');
                    if (!empty($image_1)) : ?>
                        <figure data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <a href="#modal-video" data-bs-toggle="modal" data-bs-target="#modalVideo">
                                <img src="<?php echo esc_url($image_1['url']); ?>" alt="<?php echo esc_attr($image_1['alt']); ?>" />
                            </a>
                        </figure>
                    <?php endif; ?>

                    <!-- Modal -->
                    <div class="modal fade" id="modalVideo" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php if (get_field('video_sec_1_about')) :
                                         $poster= get_field('img_video_sec_1_about');
                                        ?>
                                        <video poster="<?php echo esc_url($poster['url']); ?>" width="100%" controls>
                                            <source src="<?php the_field('video_sec_1_about'); ?>" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-group__text col-md-6 px-md-5">
                    <?php if (get_field('title_sec_1_about')) : ?>
                        <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <h2><?php the_field('title_sec_1_about'); ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('text_sec_1_about')) : ?>
                        <div class="section-text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <?php the_field('text_sec_1_about'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="about-infra">
        <div class="container">
            <div class="row">
                <div class="about-infra__text col-md-6">
                    <div class="wrap">
                        <?php if (get_field('title_sec_2_about')) : ?>
                            <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <h2><?php the_field('title_sec_2_about'); ?></h2>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('text_sec_2_about')) : ?>
                            <div class="section-text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <?php the_field('text_sec_2_about'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="about-infra__image col-md-6 p-md-0">
                    <?php
                    $image_2= get_field('img_sec_2_about');
                    if (!empty($image_2)) : ?>
                        <figure>
                            <img src="<?php echo esc_url($image_2['url']); ?>" alt="<?php echo esc_attr($image_2['alt']); ?>" />
                        </figure>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php /*<section class="about-cases">
        <div class="container">
            <?php if (get_field('title_cases_about')) : ?>
                <div class="section-title text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                    <h2><?php the_field('title_cases_about'); ?></h2>
                </div>
            <?php endif; ?>
            <div class="about-cases__list" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                <?php if (have_rows('list_cases_about')) :
                    while (have_rows('list_cases_about')) : the_row();
                        $image = get_sub_field('img_list_cases_about');
                    ?>
                    <div class="about-cases__item">
                        <a href='<?php echo esc_url($image['url']); ?>' data-fancybox="gallery">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </a>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section> */?>

    <section class="about-mission">
        <div class="container">
            <div class="row">
                <div class="about-mission__text col-md-7">
                    <div class="wrap" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <?php if (get_field('text_mission_about')) : ?>
                            <?php the_field('text_mission_about'); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="about-mission__image col-md-5 p-0">
                    <?php
                    $image_3= get_field('img_mission_about');
                    if (!empty($image_3)) : ?>
                        <figure>
                            <img src="<?php echo esc_url($image_3['url']); ?>" alt="<?php echo esc_attr($image_3['alt']); ?>" />
                        </figure>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="about-brands">
        <div class="container">
            <div class="about-brands__list">
                <?php if (have_rows('list_brands_about')) :
                    while (have_rows('list_brands_about')) : the_row();
                        $image = get_sub_field('img_list_brands');
                        $link = get_sub_field('link_list_brands');
                    ?>
                    <div class="about-brands__item">
                        <a href='<?php echo $link; ?>' target="blank">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </a>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
