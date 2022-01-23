<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name='robots' content='index,follow'>
    <meta name='author' content='Top Rated Crypto Casinos, chidodesigns@gmail.com'>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

    <?php if ($_SERVER['SERVER_NAME'] === 'topratedcryptocasinos.co.uk' &&  $_SERVER['HTTP_HOST'] === 'topratedcryptocasinos.co.uk') : ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-S3C13ZLESH"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-S3C13ZLESH');
    </script>
    <!-- Hotjar Tracking Code for topratedcryptocasinos.co.uk -->
    <script>
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 2246342,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="home">
    <!--Navbar -->
    <div class="navbar top desktop-menu" id="navbar">
        <div class="container flex">
            <a href="<?php echo site_url('/'); ?>">
                <h1 class="logo text-center">Top Rated Crypto Casino</h1>
            </a>
            <nav>
                <ul>
                    <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
                    <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
                    <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/dist/images/united-kingdom.svg" alt=""
                            style="width: 30px;"></li>
                </ul>
            </nav>
        </div>
    </div>


    <div class="menu-wrap">
        <input type="checkbox" class="toggler">
        <div class="hamburger">
            <div class="hamburger--single-lines"></div>
        </div>
        <div class="menu">
            <div class="menu--overlay">
                <div class="menu--links-container">
                    <ul>
                        <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
                        <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/dist/images/united-kingdom.svg" alt=""
                                style="width: 30px;"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>