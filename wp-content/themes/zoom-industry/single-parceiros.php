<?php

get_header();
?>
<main id="content" class="main-content internal find-partner" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php $categories = get_the_terms( get_the_ID(), 'parceiro_cat' );  ?>

        <section class="partner-top single-part">
            <?php $image = get_field('imagem_part', 'options');

            if( !empty( $image ) ): ?>
            
                <img class="bg" width="50px" height="50px" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

            <?php endif; ?>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wrap">
                            <div class="left">
                                <h1><?php the_title(); ?></h1>
                            </div>
                            <div class="right">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="back">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <a href="javascript:void(0)" onclick="history.back();" class="go-back">Voltar</a>
                    </div>
                </div>
            </div>
        </div>

        <section class="partner-content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wrapper">
                            <div class="left">
                                <div class="inner-left">
                                    <div class="block-partner" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="0">
                                        <div class="head">
                                            <h2>Sobre o Parceiro</h2>
                                        </div>
                                        <div class="body">
                                            <?php if ( has_post_thumbnail() ) : ?>
                                                <figure class="thumb">
                                                    <?php the_post_thumbnail(); ?>
                                                </figure>
                                            <?php endif; ?>
                                            <div class="text">
                                                <h2><?php the_title(); ?></h2>
                                                <p><?php the_content(); ?></p>
                                                
                                                <?php if( get_field('site') ): ?>
                                                    <div class="site">
                                                        <a href="<?php the_field( 'site'); ?>" target="_blank" rel="noopener noreferrer"><?php the_field( 'site'); ?></a>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <?php if (get_field('exibir_programa_de_canais') == 'sim') { ?>
                                        <div class="block-partner not-mb grad" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="0">
                                            <div class="head">
                                                <h2>Programa de Canais</h2>
                                            </div>
                                            <div class="body">
                                                <div class="gallery">
                                                    <?php $image = get_field('graduacao');

                                                    if( !empty( $image ) ): ?>
                                                        <figure class="gal">
                                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                        </figure>
                                                    <?php endif; ?>
                                                    <div class="cat <?php if ( ! empty( $categories ) ) {echo esc_html( $categories[0]->name ) ;} ?>">
                                                        <p>
                                                            <span class="icon"><i></i></span>
                                                            <span class="text"><?php if ( ! empty( $categories ) ) {echo esc_html( $categories[0]->name ) ;} ?></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } else { ?>

                                    <?php } ?>
                               
                              
                               
                                <div class="block-partner not-mb <?php if (get_field('exibir_programa_de_canais') == 'sim') { echo 'this-mt'; } else { } ?>" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="0">
                                    <div class="head">
                                        <h2>Informações de Contato</h2>
                                    </div>
                                    <div class="body">
                                        <div class="text">
                                            <?php if( get_field('telefone') ): ?>
                                                <div class="phone">
                                                    <a href="tel:<?php the_field( 'telefone'); ?>" target="_blank" rel="noopener noreferrer"><small><?php the_field( 'telefone'); ?></small></a>
                                                </div>
                                            <?php endif; ?>
                                            <?php if( get_field('e-mail') ): ?>
                                                <div class="mail">
                                                    <a href="mailto:<?php the_field( 'e-mail'); ?>" target="_blank" rel="noopener noreferrer"><small><?php the_field( 'e-mail'); ?></small></a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                            <?php if (get_field('exibir_programa_de_canais') == 'sim') { ?>
                           
                            <?php } else { ?>
                                </div>
                            <?php } ?>          
                               
                                
                            </div>
                            <div class="right">
                                <div class="block-partner not-mb" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="0">
                                    <div class="head">
                                        <h2>Localização</h2>
                                    </div>
                                    <div class="body">
                                        <div class="text">
                                            <?php if( get_field('mapa') ): ?>
                                                <div class="map">
                                                    <?php the_field( 'mapa'); ?>
                                                </div>
                                            <?php endif; ?>
                                            <?php if( get_field('endereco') ): ?>
                                                <address>
                                                    <?php the_field( 'endereco'); ?>
                                                </address>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; else : ?> <?php wp_reset_query(); ?> <?php endif; ?>

</main>

<?php get_footer(); ?>
