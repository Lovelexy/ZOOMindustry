<?php
/**
 * Template name: Data Center
 */

get_header();
?>
<main id="content" class="main-content internal" role="main">
    <section class="corporate-intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="corporate-intro__text col-md-6 px-md-4">
                    <div class="corporate-intro-bg" style="background-image: url(<?php the_field('bg_intro_datacenter'); ?>);"></div>
                    <div class="wrap">
                        <?php if (get_field('title_intro_datacenter')) : ?>
                            <div class="page-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <h1><?php the_field('title_intro_datacenter'); ?></h1>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('text_intro_datacenter')) : ?>
                            <div class="section-desc" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <?php the_field('text_intro_datacenter'); ?>
                            </div>
                        <?php endif; ?>
                        <a href="<?php the_field('btn_link_intro_datacenter'); ?>" class="btn btn-md btn-primary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_intro_datacenter'); ?></a>
                    </div>
                </div>
                <div class="corporate-intro__image col-md-4 px-0">
                    <div class="wrap">
                        <?php
                        $image_intro1= get_field('img_intro_datacenter');
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
                    $image_dest1= get_field('img_dest_datacenter');
                    if (!empty($image_dest1)) : ?>
                        <figure data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <img src="<?php echo esc_url($image_dest1['url']); ?>" alt="<?php echo esc_attr($image_dest1['alt']); ?>" />
                        </figure>
                    <?php endif; ?>
                </div>
                <div class="corporate-highlight__text col-md-6 px-md-3">
                    <?php if (get_field('title_dest_datacenter')) : ?>
                        <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <h2><?php the_field('title_dest_datacenter'); ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('text_dest_datacenter')) : ?>
                        <div class="section-text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <?php the_field('text_dest_datacenter'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="corporate-products-models" id="equipamentos">
        <div class="container">
            <?php if (get_field('title_models_datacenter')) : ?>
                <div class="section-title text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                    <h2><?php the_field('title_models_datacenter'); ?></h2>
                </div>
            <?php endif; ?>
            <div data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
            <div class="row h-100 justify-content-center">
                <?php if (have_rows('prod_models_datacenter')) :
                    while (have_rows('prod_models_datacenter')) : the_row();
                        $image = get_sub_field('img_prod_models_datacenter');
                        $title = get_sub_field('title_prod_models_datacenter');
                        $desc = get_sub_field('text_prod_models_datacenter');
                        $btn = get_sub_field('btn_text_prod_models_datacenter');
                        $btnlink = get_sub_field('btn_link_prod_models_datacenter');
                    ?>
                    <div class="corporate-products-models__item col-md-4">
                        <figure>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </figure>
                        <h3><?php echo $title; ?></h3>
                        <div class="desc"><?php echo $desc; ?></div>
                        <div class="corporate-products-models__item-info">
                            <div class="models-item">
                                <?php if (have_rows('spec_prod_models_datacenter')) :
                                    while (have_rows('spec_prod_models_datacenter')) : the_row();
                                        $title = get_sub_field('title_spec_models');
                                        $desc = get_sub_field('desc_spec_models');
                                    ?>
                                    <p><strong><?php echo $title; ?>:</strong> <?php echo $desc; ?></p>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <a href="<?php echo $btnlink; ?>" class="btn btn-md btn-primary"><?php echo $btn; ?></a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            </div>
        </div>
    </section>

    <?php /*<section class="data-center-application">
        <div class="container">
            <div class="row">
                <div class="data-center-application__text col-md-6 pe-md-5">
                    <div class="data-center-application__tabs" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <ul class="nav nav-tabs" id="datacenterTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="governo-tab" data-bs-toggle="tab" data-bs-target="#governo" type="button" role="tab" aria-controls="governo" aria-selected="true">Governo</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="privado-tab" data-bs-toggle="tab" data-bs-target="#privado" type="button" role="tab" aria-controls="privado" aria-selected="false">Privado</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="datacenterTabContent">
                            <div class="tab-pane fade show active" id="governo" role="tabpanel" aria-labelledby="governo-tab">
                                <?php if (get_field('gov_applications_datacenter')) : ?>
                                    <?php the_field('gov_applications_datacenter'); ?>
                                <?php endif; ?>
                            </div>
                            <div class="tab-pane fade" id="privado" role="tabpanel" aria-labelledby="privado-tab">
                                <?php if (get_field('priv_applications_datacenter')) : ?>
                                    <?php the_field('priv_applications_datacenter'); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="data-center-application__image col-md-6 p-0">
                    <figure>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/images/datacenter.png'); ?>" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section> */?>

    <div class="container">
        <?php get_template_part('template-parts/blog-highlights'); ?>
    </div>
</main>

<?php get_footer(); ?>
