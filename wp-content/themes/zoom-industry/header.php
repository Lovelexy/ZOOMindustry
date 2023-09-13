<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php echo get_the_title(get_queried_object_id()); ?></title> <!-- Aqui está o título -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->

    <meta name="facebook-domain-verification" content="ujcpslqzt9ktkcthy2owfdb53mpu53" />

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "hka0wwsx6u");
    </script>

    <?php the_field( 'script_head', 'options' ); ?>

    <?php wp_head(); ?>

    <script type="text/javascript">
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    </script>
</head>


<body <?php echo body_class(); ?>> <!--
<a href="https://api.whatsapp.com/send?phone=558006435890&text=Olá, tudo bem? Que bom que você entrou em contato com a Equipe ZOOMindustry! Esse canal foi pensado para facilitar a sua experiência conosco!"
    target="_blank"
    style="position:fixed;bottom:48px;right:32px;">
    <svg enable-background="new 0 0 512 512" width="50" height="50" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z" fill="#4CAF50"/><path d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z" fill="#FAFAFA"/></svg>
</a>
-->
   

    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content'); ?></a>
    <header class="header" role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-md">
                <div class="translation">
+                    <?php echo do_shortcode('[gtranslate]'); ?>
+                </div>

                <?php
                if (is_front_page()) : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand me-auto">
                        <h1><img src="<?php echo esc_url(get_template_directory_uri() . '/dist/images/logos/logo-zoom-industry.svg'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>"></h1>
                    </a>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand me-auto"><img src="<?php echo esc_url(get_template_directory_uri() . '/dist/images/logos/logo-zoom-industry.svg'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>"></a>
                <?php endif; ?>
                <div class="collapse navbar-collapse">
                    <?php
                    wp_nav_menu(array(
                        'menu' => 'primary',
                        'theme_location' => 'main_menu',
                        'container' => 'ul',
                        'container_id' => '',
                        'menu_class' => 'navbar-nav ms-auto',
                    ));
                    ?>
                </div>
                <button class="navbar-toggler p-0 border-0" type="button" data-trigger="#menu_offcanvas">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </nav>
        </div>

        <div class="screen-overlay"></div>
        <aside class="mobile-menu offcanvas-left" id="menu_offcanvas">
            <div class="mobile-menu__title">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/images/logos/logo-zoom-industry.svg'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
                <button class="btn-close btn-close"></button>
            </div>

            <?php
            wp_nav_menu(array(
                'menu' => 'primary',
                'theme_location' => 'main_menu',
                'container' => 'ul',
                'container_id' => '',
                'menu_class' => 'navbar-nav me-auto',
            ));
            ?>
        </aside>
    </header>

    <?php if (!is_front_page() && !is_single() && !is_page_template('templates/reg-oportunity.php' ) && !is_page_template('templates/find-partner.php' ) && !is_page_template('templates/consult-certificate.php' )) : ?>
        <div class="secondary-nav">
            <div class="container">
                <?php
                wp_nav_menu(array(
                    'menu' => 'secondary',
                    'theme_location' => 'secondary_menu',
                    'container' => 'ul',
                    'container_id' => '',
                    'menu_class' => 'navbar-nav',
                ));
                ?>
            </div>
        </div>
    <?php endif; ?>
