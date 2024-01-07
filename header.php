<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    if ($GLOBALS['title']) {
        $title = $GLOBALS['title'];
    } else {
        $GLOBALS['title'] = "";
    }
    if ($GLOBALS['desc']) {
        $desc = $GLOBALS['desc'];
    } else {
        $desc = "";
    }
    if ($GLOBALS['keywords']) {
        $keywords = $GLOBALS['keywords'];
    } else {
        $keywords = "";
    } ?>
    <title><?php echo $title; ?></title>
    <link rel="icon" href="./assets/img/cropped-dp-ash-favicon-01-32x32.png" sizes="32x32" />
    <link rel="icon" href="./assets/img/cropped-dp-ash-favicon-01-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="./assets/img/cropped-dp-ash-favicon-01-180x180.png" />
    <meta name="msapplication-TileImage" content="./assets/img/cropped-dp-ash-favicon-01-270x270.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/slick.min.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./assets/css/slick-theme.min.css?v=<?php echo time(); ?>">
    <!-- <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    /> -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2.2.1/dist/flickity.min.css">
    <link rel="stylesheet" href="./assets/css/style.min.css?v=<?php echo time(); ?>">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4LQYFJ7779"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());



        gtag('config', 'G-4LQYFJ7779');
    </script>

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
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
        fbq('init', '1309515642968967');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1309515642968967&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body class="<?php
                $page_name = basename($_SERVER['PHP_SELF']);
                if ($page_name == "index.php" || $page_name == "" || $page_name == "/" || $page_name == "investors.php" || $page_name == "about-us.php") {
                ?>homeC<?php } ?>">

    <?php
    function active($currect_page)
    {
        $url_array =  explode('/', $_SERVER['REQUEST_URI']);
        $url = end($url_array);
        if ($currect_page == $url) {
            echo 'active'; //class name in css 
        }
    }
    ?>
    <div class="header-top">
        <div class="invest-bar">
            <div class="container">
                <div class="tSocial">
                    <a href="https://www.facebook.com/deeppowertech/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/deeppowertech/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@deeppowertech" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <!-- Hedaer -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <?php
                    $page_name = basename($_SERVER['PHP_SELF']);
                    if ($page_name == "index.php" || $page_name == "" || $page_name == "/" || $page_name == "investors.php" || $page_name == "about-us.php") {
                    ?>
                        <img src="./assets/img/light-logo.svg" alt="logo">
                    <?php } else { ?>
                        <img src="./assets/img/dark-logo.svg" class="d-none d-lg-block" alt="logo">
                        <img src="./assets/img/light-logo.svg" class="d-lg-none" alt="logo">
                    <?php } ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                    <svg width="25" height="18" viewBox="0 0 25 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1H23.9921" stroke="white" stroke-width="2" stroke-linecap="round" />
                        <path d="M1 8.5H23.9921" stroke="white" stroke-width="2" stroke-linecap="round" />
                        <path d="M7.70602 16.5H23.9921" stroke="white" stroke-width="2" stroke-linecap="round" />
                    </svg>

                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item d-lg-none">
                            <a class="nav-link <?php active('index.php'); ?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php active('market.php'); ?>" href="market.php">Market</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php active('technology.php'); ?>" href="technology.php">Technology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php active('news.php'); ?>" href="news.php">Newsroom</a>
                        </li>



                        <li class="nav-item d-lg-none">
                            <a class="nav-link <?php active('videos.php'); ?>" href="videos.php">Videos</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <a class="nav-link <?php active('investors.php'); ?>" href="investors.php">Investors</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <a class="nav-link <?php active('about-us.php'); ?>" href="about-us.php">About</a>
                        </li>

                        <li class="nav-item d-lg-none">
                            <a class="nav-link <?php active('contact-us.php'); ?>" href="contact-us.php">Contact</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav d-none d-lg-flex rightNav">
                        <li class="nav-item">
                            <a class="nav-link <?php active('videos.php'); ?>" href="videos.php">Videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php active('investors.php'); ?>" href="investors.php">Investors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php active('about-us.php'); ?>" href="about-us.php">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php active('contact-us.php'); ?>" href="contact-us.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>