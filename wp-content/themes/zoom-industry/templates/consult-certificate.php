<?php
/**
 * Template name: Consultar Certificado
 */
get_header();

?>
<main id="content" class="main-content internal find-partner" role="main">

    <section class="partner-top certificate">
        <?php $image = get_the_post_thumbnail_url();

    if( !empty( $image ) ): ?>

        <img class="bg" width="50px" height="50px" src="<?php echo $image; ?>" alt="<?php the_title(); ?>" />

        <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrap">
                        <div class="left">
                            <h1 style="max-width: 330px"><?php the_title(); ?></h1>
                        </div>
                        <div class="right">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="consult-filter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-md-0 mb-4">
                    <div class="form-filter">
                        <h4>Pesquise pelo número de série</h4>
                        <form action="" id="searchCertificate">
                            <div class="form-group">
                                <input type="text" id="serial" name="serial" placeholder="Insira o número de série" required>
                            </div>
                            <div class="form-group mb-5">
                                <small>Para pesquisar mais de um código, separe-os por ponto e virgula.<br>
                                    Ex: 123456ABCDE0100203;654321ABCDE0123456</small>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="g-recaptcha" data-sitekey="6LenSMgfAAAAAJDpMgpILhrDsyzDqAK4CcTDcq2U"></div>
                                </div>
                                <div class="col-md-auto">
                                    <button type="submit" class="btn btn-primary text-uppercase">Buscar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="intro">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="resultCertificate">
        <div class="container d-none">
            <h4>Resultados</h4>
            <div id="resultCertificate" class="table-responsive">
            </div>
        </div>
    </section>

<div class="modal fade" id="certError" tabindex="-1" role="dialog" aria-labelledby="certErrorLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
            <div class="cont">
                <img src="<?php echo get_template_directory_uri() . '/dist/images/alert_icon.png'; ?>" alt="Alert">
                <h2>Número de série não localizado</h2>
                <p>O número de série digitado não é válido, verifique se digitou corretamente e tente novamente </p>
                <button type="button" class="btn btn-primary text-uppercase" data-dismiss="modal">Fechar</button>
            </div>
      </div>
    </div>
  </div>
</div>

<div class="cert_loader d-none">
    <img src="<?php echo get_template_directory_uri() . '/dist/images/loader.svg'; ?>" alt="Loader">
</div>
</main>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php get_footer(); ?>