<?php
/**
 * Template name: Ativação de Garantia e Suporte
 */

get_header();
?>
<main id="content" class="main-content internal" role="main">
     <section class="partners-intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="partners-intro__text col-md-6 px-md-5">
                    <div class="wrap">
                        <?php if (get_field('title_intro_partners')) : ?>
                            <div class="page-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <h1><?php the_field('title_intro_partners'); ?></h1>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('text_intro_partners')) : ?>
                            <div class="section-desc" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <?php the_field('text_intro_partners'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="partners-intro__image col-md-6 p-0">
                    <div class="partners-intro-bg" style="background-image: url(<?php the_field('img_intro_warranty'); ?>)"></div>
                </div>
            </div>
        </div>
    </section>
    <div class="template-page-warrenty-active folder-template container">
        <section class="partners-text-first">
            <div class="container">
                <?php if (get_field('title_sec_text_1_partners')) : ?>
                    <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <h2><?php the_field('title_sec_text_1_partners'); ?></h2>
                    </div>
                <?php endif; ?>
                <?php if (get_field('text_sec_text_1_partners')) : ?>
                    <div class="section-text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <?php the_field('text_sec_text_1_partners'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <section class="partners-text-second">
            <div class="container">
                <div class="row">
                    <div class="partners-text-second__text col-md-6 pe-md-5">
                        <div class="wrap">
                            <?php if (get_field('title_sec_text_2_partners')) : ?>
                                <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                    <h2><?php the_field('title_sec_text_2_partners'); ?></h2>
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('text_sec_text_2_partners')) : ?>
                                <div class="section-text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                    <?php the_field('text_sec_text_2_partners'); ?>
                                </div>
                            <?php endif; ?>
                            <a href="<?php the_field('btn_link_sec_text_2_partners'); ?>" class="btn btn-md btn-primary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php the_field('btn_text_sec_text_2_partners'); ?></a>
                        </div>
                    </div>
                    <div class="partners-text-second__image col-md-6 p-md-0">
                        <?php
                        $image_partner= get_field('img_sec_text_2_partners');
                        if (!empty($image_partner)) : ?>
                            <figure>
                                <img src="<?php echo esc_url($image_partner['url']); ?>" alt="<?php echo esc_attr($image_partner['alt']); ?>" />
                            </figure>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        

        <section class="partner-register" id="seja-um-parceiro">
            <div class="container">
                <?php if (get_field('title_form_partners')) : ?>
                    <div class="section-title text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <h2><?php the_field('title_form_partners'); ?></h2>
                    </div>
                <?php endif; ?>
                <?php if (get_field('text_form_partners')) : ?>
                    <div class="section-desc text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <?php the_field('text_form_partners'); ?>
                    </div>
                <?php endif; ?>
                <div class="partner-register__form" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                    <?php if (get_field('form_partners')) : ?>
                        <?php the_field('form_partners'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    

        

      

        
    </div>

    
</main>

<?php get_footer(); ?>
