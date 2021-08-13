<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?>  Inventor STEM School</title>
    <!--
        <?php /*if (wp_title('', false)) {
            echo ' :';
        } */?>--><?php /*bloginfo('name'); */?>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WXV923R');</script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177386236-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-177386236-1');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '795303044659067');
        fbq('track', 'PageView');
    </script>

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>


    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXV923R" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript><!-- End Google Tag Manager (noscript) --><!-- FB PIXEL end of (noscript)-->
<noscript><img height="1" width="1" src="https://www.facebook.com/tr?id=795303044659067&ev=PageView&noscript=1"/>
</noscript><!-- End Facebook Pixel Code -->

<!-- wrapper -->
<div class="total_wrapper">

    <!-- header -->
    <header class="header header_border_bottom">
        <!-- header v2 -->
        <div class="inner_wrapper_header">
            <div class="header_v2_holder">
                <div class="header_v2_item"><a href="<?php get_home_url(); ?>"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Main logo"
                                class="main_logo_v2"></a>
                </div>
                <div class="header_v2_item h_v2_item_flex">
                    <div class="h_v2_item_flex_inner"><a class="a_default_style"> <!-- href="/contacts" --> <p
                                    class="p_boston_header"> Open now in <br> <b>Bedford</b>, MA! </p></a></div>
                    <div class="h_v2_item_flex_inner">
                        <div class="nav_v2_btn"><a href="#!"><img src="<?php echo get_template_directory_uri(); ?>/img/nav-btn.png" alt="Navigation"></a></div>
                        <?php html5blank_nav(); ?>
                    </div>
                    <div class="h_v2_item_flex_inner">
                        <a href="#!" class="singup_v2_header a_default_style d-block">Free Trial</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->
