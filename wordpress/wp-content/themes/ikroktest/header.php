<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=1280, initial-scale=0.01">
    <meta name="theme-color" content="#AF92D39">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title><?php if(is_page()) { the_title(); } else { bloginfo('title'); echo ' - ';  bloginfo('description'); }  ?></title>
    <link rel="apple-touch-icon" sizes="57x57"
          href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60"
          href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72"
          href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"
          href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
          href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
          href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
          href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
          href="<?php echo get_template_directory_uri(); ?>/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
          href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage"
          content="<?php echo get_template_directory_uri(); ?>/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <script>

        function updateFontSize() {

            const screenWidth = window.innerWidth;
            const screenHeight = window.innerHeight;

            const baseFontSize = 23.5608;


            const aspectRatio = screenWidth / screenHeight;

            let fontSize;

            console.log(aspectRatio);
            if(screenHeight > 700) {
            if (aspectRatio > 2) {
                fontSize = screenHeight * 0.0311192;
            } else {

            }

            document.body.style.fontSize = `${fontSize}px`;
            }
        }

        window.addEventListener('load', updateFontSize);
        window.addEventListener('resize', updateFontSize);
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <div class="container">
        <div class="header flex justify-content-space-between">
            <div class="header-left">
                <a href="#">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""/>
                </a>
            </div>
            <div class="header-right flex align-items-center">
                <div class="chat">
                    <img class="chat-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/chat_bot.png"
                         alt=""/>
                </div>
                <a href="#" class="button flex justify-content-center align-items-center">Get Started</a>
                <div class="lang">
                    En
                </div>
                <nav class="nav">
                    <img class="nav-img" src="<?php echo get_template_directory_uri(); ?>/assets/icons/hamburger.svg"
                         alt=""/>
                </nav>
            </div>
        </div>

    </div>


</header>