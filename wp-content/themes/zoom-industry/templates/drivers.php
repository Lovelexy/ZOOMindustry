<?php
/**
 * Template name: Drivers
 * Template Post Type: page
 */

get_header();
?>
<main id="content" class="main-content internal" role="main">
    <section class="downloads-intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="downloads-intro__text col-md-6 px-md-5">
                    <div class="wrap">
                        <div class="page-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <h1><?php the_title();?></h1>
                        </div>
                    </div>
                </div>
                <div class="downloads-intro__image col-md-6 p-0">
                    <div class="downloads-intro-bg" style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/dist/images/Drivers.png'); ?>)"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="downloads-content">
        <div class="container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">

            <?php //the_field('text_intro_downloads'); ?>

            <form id="drivers" action="busca/" method="GET">
                <div class="row">
                    <div class="downloads-content__form col-md-6">
                        <div class="form-group">
                            <label>Categoria</label>
                            <select class="form-select categorias" id="categoria" name="">
                                <option selected value="0">Selecione a categoria</option>
                                <?php listTaxonomies('produto_cat'); ?>
                            </select>
                        </div>
                    </div>
                    <div class="downloads-content__form col-md-6">
                        <div class="form-group">
                            <label>Modelo do Produto</label>
                            <select class="form-select" name="produto_id" id="produtos" disabled>
                                <option selected>Selecione o modelo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 text-end">
                        <button type="submit" class="btn btn-md btn-primary" id="btnSearch" >Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>

<?php get_footer(); ?>
