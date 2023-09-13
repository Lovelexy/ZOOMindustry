<?php get_header(); ?>

<main id="content" class="main-content" role="main">
    <section class="page-content error-404">
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-md-4 error-404__text">
                    <h1>OPS... <br><span>ERRO 404</span></h1>
                    <p>A página que você tentou acessar não existe ou não foi encontrada.</p>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-md btn-primary">Ir para a Home</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
