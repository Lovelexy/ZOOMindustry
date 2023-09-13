<?php
/**
 * Template name: Suporte
 */

get_header();

?>
<main id="content" class="main-content internal support" role="main">

    <section class="header-intro-title">
        <div class="container">
            <div class="row align-items-center">
                <div class="header-intro-title__text col-md-6">
                    <div class="wrap">
                        <div class="page-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <?php if (get_field('title_intro_support')) : ?>
                                <h1><?php the_field('title_intro_support'); ?></h1>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="header-intro-title__image col-md-6 p-0">
                    <div class="header-title-bg" style="background-image: url(<?php the_field('img_intro_support'); ?>)"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="support-intro">
        <div class="container">
            <div class="support-search" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                <?php if (get_field('title_search_support')) : ?>
                    <span><?php the_field('title_search_support'); ?></span>
                <?php endif; ?>
                <?php get_template_part('template-parts/searchform-support'); ?>
            </div>
            <div class="support-intro__list" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                <?php if (have_rows('search_itens_support')) :
                    while (have_rows('search_itens_support')) : the_row();
                        $image = get_sub_field('icon_search_itens');
                        $title = get_sub_field('title_search_itens');
                        $link = get_sub_field('link_search_itens');
                    ?>
                    <div class="support-intro__item">
                        <a href="<?php echo $link; ?>">
                            <figure><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></figure>
                            <h3><?php echo $title; ?></h3>
                        </a>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="support-proposal">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="row align-items-center">
                        <div class="col-md-5 support-proposal__text pe-md-5" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <div class="support-proposal__text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <?php if (get_field('sec1_text_support')) : ?>
                                    <?php the_field('sec1_text_support'); ?>
                                <?php endif; ?>
                            </div>
                            <div class="support-qrcode">
                                <?php
                                $image_1= get_field('sec1_qrcode_support');
                                if (!empty($image_1)) : ?>
                                    <figure>
                                        <img src="<?php echo esc_url($image_1['url']); ?>" alt="<?php echo esc_attr($image_1['alt']); ?>" />
                                    </figure>
                                <?php endif; ?>
                                <?php if (get_field('sec1_qrcode_img_support')) : ?>
                                    <span><?php the_field('sec1_qrcode_img_support'); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-7 support-proposal__list" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <div class="row justify-content-center">
                                <?php if (have_rows('sec1_itens_support')) :
                                    while (have_rows('sec1_itens_support')) : the_row();
                                        $image = get_sub_field('img_sec1_itens');
                                        $title = get_sub_field('title_sec1_itens');
                                        $text = get_sub_field('text_sec1_itens');
                                    ?>
                                    <div class="col-md-12 support-proposal__item">
                                        <figure><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></figure>
                                        <div class="wrap-text">
                                            <h3><?php echo $title; ?></h3>
                                            <?php echo $text; ?>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="support-services">
        <div class="container">
            <?php if (get_field('title_sec2_support')) : ?>
                <h2 data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('title_sec2_support'); ?></h2>
            <?php endif; ?>

            <div class="row px-md-5" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                <?php if (have_rows('sec2_itens_support')) :
                    while (have_rows('sec2_itens_support')) : the_row();
                        $image = get_sub_field('icon_sec2_itens');
                        $title = get_sub_field('title_sec2_itens');
                        $text = get_sub_field('text_sec2_itens');
                    ?>
                    <div class="col-md-3 support-service__item">
                        <div class="support-service__item-wrap">
                            <div class="support-service__item-title">
                                <figure><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></figure>
                                <h3><?php echo $title; ?></h3>
                            </div>
                            <?php echo $text; ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="text-center mt-3">
                <?php
                $link = get_field('sec2_btn_support');
                if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="btn btn-primary btn-md" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150" data-bs-toggle="modal" data-bs-target="#modalHardService"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>

                <!-- Modal -->
                <div class="modal fade" id="modalHardService" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <?php
                            $image_2= get_field('sec2_img_support');
                            if (!empty($image_2)) : ?>
                                <figure>
                                    <img src="<?php echo esc_url($image_2['url']); ?>" alt="<?php echo esc_attr($image_2['alt']); ?>" />
                                </figure>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="support-contact">
        <div class="container">
            <?php if (get_field('title_sec3_support')) : ?>
                <h2 data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('title_sec3_support'); ?></h2>
            <?php endif; ?>

            <div class="support-contact__list" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                <?php if (have_rows('sec3_itens_support')) :
                    while (have_rows('sec3_itens_support')) : the_row();
                        $image = get_sub_field('icon_sec3_itens');
                        $title = get_sub_field('title_sec3_itens');
                        $link = get_sub_field('link_sec3_itens');
                    ?>
                    <div class="support-contact__item">
                        <a href="<?php echo $link; ?>">
                            <figure><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></figure>
                            <h3><?php echo $title; ?></h3>
                        </a>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
