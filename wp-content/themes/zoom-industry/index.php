<?php

/**
 * Template name: Home
 */
get_header();
?>

<main id="content" class="main-content" role="main">
    <section class="home-content">
        <div class="home-slideshow">
            <div class="wrap">
                <?php if (have_rows('slideshow_home')) : ?>
                    <?php while (have_rows('slideshow_home')) : the_row();
                        $image = get_sub_field('img_slideshow_home');
                        $title = get_sub_field('title_slideshow_home');
                        $text = get_sub_field('text_slideshow_home');
                        $btnText = get_sub_field('btn_text_slideshow_home');
                        $btnLink = get_sub_field('btn_link_slideshow_home');
                    ?>
                        <div class="item" style="background-image: url('<?php echo $image; ?>')">
                            <div class="caption">
                                <h2 data-aos="fade-up" data-aos-easing="ease-in-out"><?php echo $title; ?></h2>
                                <div class="text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="100"><?php echo $text; ?></div>
                                <a href="<?php echo $btnLink; ?>" class="btn btn-md btn-primary" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150"><?php echo $btnText; ?></a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="home-solutions">
            <div class="home-solutions__block">
                <div class="home-solutions__block-content" style="background-image: url(<?php the_field('img_featured_1_home'); ?>)">
                    <a href="<?php the_field('link_featured_1_home'); ?>" class="home-solutions__block-link"></a>
                    <div class="home-solutions__block-title">
                        <?php if (get_field('title_featured_1_home')) : ?>
                            <h2><?php the_field('title_featured_1_home'); ?></h2>
                        <?php endif; ?>
                        <i class="icon-plus"></i>
                    </div>
                </div>
            </div>
            <div class="home-solutions__block">
                <div class="home-solutions__block-content" style="background-image: url(<?php the_field('img_featured_2_home'); ?>)">
                    <a href="<?php the_field('link_featured_2_home'); ?>" class="home-solutions__block-link"></a>
                    <div class="home-solutions__block-title">
                        <?php if (get_field('title_featured_2_home')) : ?>
                            <h2><?php the_field('title_featured_2_home'); ?></h2>
                        <?php endif; ?>
                        <i class="icon-plus"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php /*
<!-- Modal -->
<div class="modal fade" id="modalZoomb2b" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Vem aí nossa loja online especializada em equipamentos de TI para empresas e revendas!</h3>
            </div>
            <div class="modal-body">
                <p>Inscreva-se agora para o <strong>pré-lançamento</strong> e <strong>receba 10% desconto</strong> mais <strong>apoio técnico</strong></p>
                <a href="https://lp.zoomb2b.com.br/b2b-launch-zoomindustry" class="btn-green" target="blank">Saiba mais</a>
                <div class="modal-footer">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/images/logo-zoomb2b.png'); ?>" alt="Zoomb2b">
                </div>
            </div>
        </div>
    </div>
</div>
*/ ?>


<?php get_footer(); ?>
