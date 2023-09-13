<footer class="footer">
    <div class="footer-top container">
        <div class="row justify-content-md-between">
            <div class="col-md-2 footer-top__logo">
                <picture>
                    <source media="(min-width:769px)" srcset="<?php echo esc_url(get_template_directory_uri() . '/dist/images/logos/logo-zoom-industry-vertical.svg'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/images/logos/logo-zoom-industry.svg'); ?>" alt="Zoom Industry">
                </picture>

            </div>
            <div class="col-md-2 footer-top__menu">
                <span>Produtos</span>
                <?php wp_nav_menu(array('menu' => 'Menu Produtos')) ?>
            </div>
            <div class="col-md-2 footer-top__menu">
                <span>Suporte</span>
                <?php wp_nav_menu(array('menu' => 'Menu Suporte')) ?>
            </div>
            <div class="col-md-2 footer-top__menu">
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer_menu',
                    'menu_id' => 'menu-footer',
                ]);
                ?>
            </div>
            <div class="col-md-3 footer-top__social">
                <ul>
                    <?php if (get_field('facebook_social', 'option')) : ?>
                        <li>
                            <a href="<?php the_field('facebook_social', 'option'); ?>" target="blank" title="Facebook">
                                <i class="icon icon-facebook"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (get_field('twitter_social', 'option')) : ?>
                        <li>
                            <a href="<?php the_field('twitter_social', 'option'); ?>" target="blank" title="Twitter">
                                <i class="icon icon-twitter"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (get_field('instagram_social', 'option')) : ?>
                        <li>
                            <a href="<?php the_field('instagram_social', 'option'); ?>" target="blank" title="Instagram">
                                <i class="icon icon-instagram"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (get_field('youtube_social', 'option')) : ?>
                        <li>
                            <a href="<?php the_field('youtube_social', 'option'); ?>" target="blank" title="Youtube">
                                <i class="icon icon-youtube"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (get_field('linkedin_social', 'option')) : ?>
                        <li>
                            <a href="<?php the_field('linkedin_social', 'option'); ?>" target="blank" title="Linkedin">
                                <i class="icon icon-linkedin"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
                <div class="info-contact">
                    <?php if (get_field('info_contact_footer', 'option')) : ?>
                        <?php the_field('info_contact_footer', 'option'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row justify-content-md-between align-items-md-center">
                <div class="col-md-6 footer-bottom__copyright">
                    <p>COPYRIGHT &copy; <?php echo date("Y"); ?> - ZOOM INDUSTRY - TODOS OS DIREITOS RESERVADOS</p>
                </div>
                <div class="col-md-6 footer-bottom__by">
                    <span>Desenvolvimento:</span> <a href="http://www.vitaminaweb.com.br" target="blank" title="VitaminaWeb"><img src="<?php echo esc_url(get_template_directory_uri() . '/dist/images/logos/vitaminaweb-logo-color.png'); ?>" alt="VitaminaWeb"></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script>

    jQuery(window).on('load',function(){
        jQuery('#modalZoomb2b').modal('show');
    });

</script>

<?php include get_template_directory().'/template-parts/scripts.php'; ?>

</body>

</html>
