<?php
/**
 * Template name: Drivers - Listagem
 * Template Post Type: page
 */

get_header();
?>
<?php

  $post = new WP_Query( [ 'p' => $_GET['produto_id'], 'post_type' => 'any' ] );
  if(!empty($post->post)) {
    $produto = $post = $post->post;
    setup_postdata($post);
  } else {
    wp_redirect( '/drivers' );
    exit;
  }  

?>
<main id="content" class="main-content internal" role="main">
    <section class="downloads-intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="downloads-intro__text col-md-6 px-md-5">
                    <div class="wrap">
                        <div class="page-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <h1>Drivers</h1>
                        </div>
                    </div>
                </div>
                <div class="downloads-intro__image col-md-6 p-0">
                    <div class="downloads-intro-bg" style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/dist/images/Drivers.png'); ?>)"></div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="downloads-content bg-white">
        <div class="container">
            <a href="javascript:history.back();" class="back-link" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">Voltar</a>
            <div class="row mb-5" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                <div class="downloads-content__image col-md-3">
                    <?php
                    $image_prod= get_field('img_intro_product');
                    if (!empty($image_prod)) : ?>
                        <figure data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                            <img src="<?php echo esc_url($image_prod['url']); ?>" alt="<?php echo esc_attr($image_prod['alt']); ?>" />
                        </figure>
                    <?php endif; ?>
                </div>
                <div class="downloads-content__text col-md-6">
                    <?php if(!empty($post->post_title)) { ?>
                        <h2><?php _e(esc_html($post->post_title)); ?></h2>
                    <?php } ?>
                    <?php if (get_field('text_intro_product')) : ?>
                        <p>
                            <?php the_field('text_intro_product'); ?>
                        </p>
                    <?php endif; ?>
                    <?php if(!empty($post->post_content)) { ?>
                        <p><?php _e($post->post_content) ?></p>
                    <?php } ?>
                </div>
            </div>

            <?php  
                $active = 'driver_cat';
                if(!empty($_GET['documento_cat'])) $active = 'documento_cat'; 
            ?>
            <div class="downloads-content__info" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150">
                <div class="filters__tabs">
                    <ul class="nav nav-tabs" id="filerTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link <?php echo ($active === 'driver_cat') ? 'active' : '' ?>" id="software-tab" data-bs-toggle="tab" data-bs-target="#software" type="button" role="tab" aria-controls="software" aria-selected="true">Software</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link <?php echo ($active === 'documento_cat') ? 'active' : '' ?>" id="document-tab" data-bs-toggle="tab" data-bs-target="#document" type="button" role="tab" aria-controls="document" aria-selected="false">Documentação</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="filerTabContent">
                        <div class="tab-pane fade <?php echo ($active === 'driver_cat') ? 'show active' : '' ?>" id="software" role="tabpanel" aria-labelledby="software-tab">
                            <form action="" method="get" class="buscar" id="driver">
                                <div class="d-flex mb-3">
                                    <div class="form-group">
                                        <select class="form-select" name="driver_cat">
                                            <option value="">Selecione a Categoria</option>
                                            <?php listTaxonomies('driver_cat') ?>
                                        </select>
                                        <input type="hidden" name="produto_id" value="<?php echo $_GET['produto_id'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md btn-primary">Filtrar</button>
                                    </div>
                                </div>
                            </form>
                            <div id="resultado_driver" class="results">
                                <h3>Resultados</h3>

                                <?php
                                    $args = array(
                                        'post_type' => 'driver',
                                        'numberposts' => -1,
                                        'meta_query' => array(
                                            array(
                                                'key' => 'produto',
                                                'value' => '"' . $produto->ID . '"',
                                                'compare' => 'LIKE'
                                            )
                                        )                                        
                                    );
                                    if(!empty($_GET['driver_cat'])) {
                                        $args['tax_query'] = array(
                                            array(
                                                'taxonomy' => 'driver_cat',
                                                'field' => 'slug', 
                                                'terms' => $_GET['driver_cat']
                                            )
                                        );
                                    }
                                    $drivers = get_posts($args); 
                                    if(!empty($drivers)) {
                                ?>

                                <table class="table table-striped table-hover" aria-describedby="">
                                    <thead>
                                        <tr>
                                            <th scope="col">OS</th>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Categoria</th>
                                            <th scope="col">Driver / Firmware</th>
                                            <th scope="col">Tamanho</th>
                                            <th scope="col">Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($drivers as $post) { 
                                                setup_postdata($post);
                                                $terms = get_the_terms($post->ID, 'driver_cat'); 
                                                $os = get_field('os');
                                                $driver_firmware = get_field('driver_firmware');
                                                $tamanho = get_field('tamanho');
                                                $arquivo = get_field('arquivo');
                                        ?>
                                        <tr>
                                            <td data-label="OS"><?php _e( !empty($os) ? $os : '-' ); ?></td>
                                            <td data-label="Nome"><?php the_title(); ?></td>
                                            <?php if(!empty($terms)) { ?>
                                                <td data-label="Categoria">
                                                <?php foreach ($terms as $term) { ?>
                                                    <?php echo $term->name; ?>
                                                <?php } ?>
                                                </td>
                                            <?php } ?>                                            
                                            <td data-label="Driver / Firmware"><?php  _e( !empty($driver_firmware) ? $driver_firmware : '-' ); ?></td>
                                            <td data-label="Tamanho"><?php _e( !empty($tamanho) ? $tamanho : '-' ); ?></td>
                                            <td data-label="Download"><?php if(!empty($arquivo)) { ?><a href="<?php _e($arquivo['url']); ?>" target="_blank" title="Download arquivo <?php _e($arquivo['filename']); ?>">Download</a><?php } else { ?>-<?php } ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                                <?php } else { ?>
                                    <p>Nennhum resultado encontrado.</p>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="tab-pane fade <?php echo ($active === 'documento_cat') ? 'show active' : '' ?>" id="document" role="tabpanel" aria-labelledby="document-tab">
                            <form action="" method="get" class="buscar" id="documento">
                                <div class="d-flex mb-3">
                                    <div class="form-group">
                                        <select class="form-select" name="documento_cat">
                                            <option value="">Selecione o Tipo de Documento</option>
                                            <?php listTaxonomies('documento_cat') ?>
                                        </select>
                                        <input type="hidden" name="produto_id" value="<?php echo $_GET['produto_id'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md btn-primary">Filtrar</button>
                                    </div>
                                </div>
                            </form>
                            <div class="results" id="resultado_documento">
                                <h3>Resultados</h3>

                                <?php
                                    $args = array(
                                        'post_type' => 'documento',
                                        'numberposts' => -1,
                                        'meta_query' => array(
                                            array(
                                                'key' => 'produto',
                                                'value' => '"' . $produto->ID . '"',
                                                'compare' => 'LIKE'
                                            )
                                        )                                        
                                    );
                                    if(!empty($_GET['documento_cat'])) {
                                        $args['tax_query'] = array(
                                            array(
                                                'taxonomy' => 'documento_cat',
                                                'field' => 'slug', 
                                                'terms' => $_GET['documento_cat']
                                            )
                                        );
                                    }
                                    $documentos = get_posts($args); 
                                    if(!empty($documentos)) {
                                ?>

                                <table class="table table-striped table-hover" aria-describedby="">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Versão</th>
                                            <th scope="col">Tipo de documento</th>
                                            <th scope="col">Data</th>
                                            <th scope="col">Tamanho</th>
                                            <th scope="col">Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($documentos as $post) { 
                                                setup_postdata($post);
                                                $terms = get_the_terms($post->ID, 'documento_cat'); 
                                                $nome = get_field('nome');
                                                $versao = get_field('versao');
                                                $tamanho = get_field('tamanho');
                                                $arquivo = get_field('arquivo');
                                        ?>
                                        <tr>
                                            <td data-label="Nome"><?php _e( !empty($nome) ? $nome : '-' ); ?></td>
                                            <td data-label="Versão"><?php _e( !empty($versao) ? $versao : '-' ); ?></td>
                                            <?php if(!empty($terms)) { ?>
                                                <td data-label="Categoria">
                                                <?php foreach ($terms as $term) { ?>
                                                    <?php echo $term->name; ?>
                                                <?php } ?>
                                                </td>
                                            <?php } ?>                                            
                                            <td data-label="Data"><?php  the_date('d/m/Y'); ?></td>
                                            <td data-label="Tamanho"><?php _e( !empty($tamanho) ? $tamanho : '-' ); ?></td>
                                            <td data-label="Download"><?php if(!empty($arquivo)) { ?><a href="<?php _e($arquivo['url']); ?>" target="_blank" title="Download arquivo <?php _e($arquivo['filename']); ?>">Download</a><?php } else { ?>-<?php } ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                                <?php } else { ?>
                                    <p>Nennhum resultado encontrado.</p>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
