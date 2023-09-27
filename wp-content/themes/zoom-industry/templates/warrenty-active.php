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
            <div class="container p-0">
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
            <div class="container p-0">
                <div class="row">
                    <div class="partners-text-second__text col-md-8 pe-md-5">
                        <div class="wrap">
                            <?php if (get_field('text_sec_text_2_partners')) : ?>
                                <div class="section-text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                    <?php the_field('text_sec_text_2_partners'); ?>
                                </div>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                    <div class="partners-text-second__image col-md-4 p-md-0">
                        <?php
                        $image_partner= get_field('img_sec_text_2_partners');
                        if (!empty($image_partner)) : ?>
                            <figure data-aos="fade-up" data-aos-easing="ease-in-out">
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
                <div class="forms_warranty">
                    <div class="d-flex flex-row align-items-center justify-content-center mx-auto ">
                        <div class="form-check mx-5">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="cpf">
                            <label class="form-check-label" for="flexRadioDefault1">
                                <strong>CPF</strong>
                            </label>
                        </div>
                            <div class="form-check mx-5">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="cnpj">
                            <label class="form-check-label" for="flexRadioDefault2">
                                <strong>CNPJ</strong>
                            </label>
                        </div>
                    </div>                  
                    
                    <div id="cpf_form" class="partner-register__form" style="display:none"  >
                            <?php the_field('cpf_form'); ?>
                    </div>

                    
                </div>
                <div id="form_cnpj" class="partner-register__form" style="display:none">

                        <div class="section-desc text-center">
                            <?php the_field('text_form_partners_cnpj'); ?>
                        </div>

                        <div>
                        <?php the_field('form_cnpj'); ?>
                        </div>
                        
                </div>
            </div>
        </section>
    

        

      

        
    </div>

    
</main>

<?php get_footer(); ?>
