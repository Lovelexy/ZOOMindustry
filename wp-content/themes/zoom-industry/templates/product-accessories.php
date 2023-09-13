<?php
/**
 * Template Name: Produto - Acessórios
 * Template Post Type: produto, page
 */

get_header();
?>
<main id="content" class="main-content internal" role="main">
    <section class="product-intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="product-intro__text col-md-6 px-md-5">
                    <div class="product-intro-bg" style="background-image: url(<?php the_field('bg_intro_product'); ?>)"></div>
                    <div class="wrap">
                        <?php if (get_field('title_intro_product')) : ?>
                            <div class="page-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <h1><?php the_field('title_intro_product'); ?></h1>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('text_intro_product')) : ?>
                            <div class="section-desc" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <?php the_field('text_intro_product'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="product-intro__image col-md-6 p-0">
                    <div class="wrap">
                        <?php
                        $image_prod= get_field('img_intro_product');
                        if (!empty($image_prod)) : ?>
                            <figure data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                                <img src="<?php echo esc_url($image_prod['url']); ?>" alt="<?php echo esc_attr($image_prod['alt']); ?>" />
                            </figure>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-specifications">
        <div class="container">
            <?php if (get_field('title_spec_product')) : ?>
                <div class="section-title text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                    <h2><?php the_field('title_spec_product'); ?></h2>
                </div>
            <?php endif; ?>
            <div class="product-specifications__table">
                <div class="table-responsive" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                    <table class="table striped">
                    <?php if (have_rows('spec_list_product')) :
                        while (have_rows('spec_list_product')) : the_row();
                            $title = get_sub_field('title_specifications_product');
                            $desc = get_sub_field('desc_specifications_product');
                        ?>
                        <tr>
                            <td><?php echo $title; ?></td>
                            <td><?php echo $desc; ?></td>
                        </tr>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="product-gallery">
        <div class="container">
            <?php if (get_field('title_gallery_product')) : ?>
                <div class="section-title text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                    <h2><?php the_field('title_gallery_product'); ?></h2>
                </div>
            <?php endif; ?>
            <?php
            $images = get_field('gallery_product');
            if( $images ): ?>
                <div class="wrap">
                    <?php foreach( $images as $image ): ?>
                        <figure  data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
                        </figure>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="product-highlight first">
        <div class="container">
            <?php if (have_rows('features_product')) :
                while (have_rows('features_product')) : the_row();
                    $image = get_sub_field('img_features_product');
                    $title = get_sub_field('title_features_product');
                    $text = get_sub_field('text_features_product');
                ?>
            <div class="row align-items-center">
                <div class="product-highlight__image col-md-3 ps-md-5">
                    <figure data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </figure>
                </div>
                <div class="product-highlight__text col-md-9">
                    <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <h2><?php echo $title; ?></h2>
                    </div>
                    <div class="section-desc" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <?php echo $text; ?>
                    </div>
                </div>
            </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <?php /* section class="product-highlight second">
        <div class="container">
            <div class="row align-items-center">
                <div class="product-highlight__text col-md-6 px-md-5">
                    <?php if (get_field('title_highlight_2_product')) : ?>
                        <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <h2><?php the_field('title_highlight_2_product'); ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('text_highlight_2_product')) : ?>
                        <div class="section-desc" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <?php the_field('text_highlight_2_product'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="product-highlight__image col-md-6 px-md-5">
                    <?php
                    $image_high2= get_field('img_highlight_2_product');
                    if (!empty($image_high2)) : ?>
                        <figure data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <img src="<?php echo esc_url($image_high2['url']); ?>" alt="<?php echo esc_attr($image_high2['alt']); ?>" />
                        </figure>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </?section> */?>

    <section class="product-support" id="suporte">
        <div class="container">
            <div class="row">
                <div class="product-support__text col-md-6 px-md-5">
                    <?php if (get_field('title_support_product')) : ?>
                        <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <h2><?php the_field('title_support_product'); ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('text_support_product')) : ?>
                        <div class="section-desc" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <?php the_field('text_support_product'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('phone_support_product')) : ?>
                        <div class="product-support__phone" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <i class="icon-phone"></i><p><?php the_field('phone_support_product'); ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('info_support_product')) : ?>
                        <div class="product-support__msg" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <i class="icon-msg"></i><p><?php the_field('info_support_product'); ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('email_support_product')) : ?>
                        <div class="product-support__mail" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <i class="icon-mail"></i><p><a href="<?php the_field('email_support_product'); ?>"><?php the_field('email_support_product'); ?></a></p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="product-support__info col-md-6 ps-md-5">
                    <div class="product-support__tabs">
                        <ul class="nav nav-tabs" id="supportTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="doc-tab" data-bs-toggle="tab" data-bs-target="#doc" type="button" role="tab" aria-controls="doc" aria-selected="false">Documentação <span>Folder do Produto</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="chamado-tab" data-bs-toggle="tab" data-bs-target="#chamado" type="button" role="tab" aria-controls="chamado" aria-selected="false">Chamado <span>Abra seu chamado para suporte técnico</span></button>
                            </li>
                        </ul>
                        <div class="tab-content" id="supportTabContent">
                            <div class="tab-pane fade show active" id="doc" role="tabpanel" aria-labelledby="doc-tab">
                                <?php if (have_rows('docs_support_product')) :
                                    while (have_rows('docs_support_product')) : the_row();
                                        $name = get_sub_field('name_docs_support');
                                        $file = get_sub_field('docs_support');
                                    ?>
                                    <div class="file">
                                        <a href="<?php echo $file; ?>" target="blank"><?php echo $name; ?></a>
                                    </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <div class="tab-pane fade" id="chamado" role="tabpanel" aria-labelledby="chamado-tab">
                                <?php if (get_field('form_support')) : ?>
                                    <?php the_field('form_support'); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<?php get_footer(); ?>
