<!DOCTYPE html>

<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153486379-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-153486379-1');
    </script>

    <meta charset="utf-8" />
    <meta title="BistroQuatorze ビストロキャトルズ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" href= "<?php echo get_template_directory_uri(); ?>/assets/images/logo/favicon.png">
    <link rel="apple-touch-icon" href= "<?php echo get_template_directory_uri(); ?>/assets/images/logo/favicon.png" sizes="180x180">

    <title> <?php wp_title('|',true,'right'); bloginfo('name') ?> </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="canonical" href="https://www.arpege-i.com" />
    <meta name="description" content="シャービックなインテリアで統一した落ち着きのある店内。大切な人を喜ばせたい特別な日に、心に残る時間をお過ごし頂けます。" />
    <meta name="author" content="kiyotaka_yamada" />
    <meta property='og:locale' content="ja_JP" />
    <meta property="fb:app_id" content="746099745995868" />
    <meta property='og:site_name' content="Arpege" />
    <meta property='og:title' content="Quatorze" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="ページのツイッターアカウント" />
    <meta name="twitter:creator" content="ページコンテンツ製作者のツイッターアカウント" />
    <meta property="og:description" content="シャービックなインテリアで統一した落ち着きのある店内。大切な人を喜ばせたい特別な日に、心に残る時間をお過ごし頂けます。" />
    <meta property="og:url" content="http://www.arpege-i.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="シェアされたときに表示する画像" />
    <meta property="og:image:width" content="画像の横幅（数値指定）" />
    <meta property="og:image:height" content="画像の高さ（数値指定）" />

    <!-- fontのインストール -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">       

    <!-- Jqueryインストール -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bgswitcher.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/dark-hive/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
    
     <!-- pluginインストール -->
    <link href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/swiper/swiper.min.css" rel="stylesheet" type="text/css">
   
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/index.js"> </script>
    <link href="<?php echo get_template_directory_uri(); ?>/scss/limestone.css" rel="stylesheet" type="text/css">

</head>

<body>
    <header class="header">
        <div class="header_bar">
            
            <div class="container_head">
                <div class="header_items">
                    <a href="#reserve" class="sp_only">
                        <div class="reserve_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/reserve.svg" alt="Arpege"  class="header_logo">
                            <p>
                                予約する
                            </p>
                        </div>
                    </a>

                    <div class="header_logo">
                        <h1>
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo_01.png" alt="Arpege"  class="header_logo">
                            </a>
                        </h1>
                    </div>

                    <div class="header_menu" id="a_animation">

                        <div class="header_menu_buttom">    
                            <ul>
                                <li>
                                    <a href="#news">NEWS</a>
                                </li>
                                <li>
                                    <a href="#concept">CONCEPT</a>
                                </li>
                                <li>
                                    <a href="#menu">MENU</a>
                                </li>
                                <li>
                                    <a href="#place">PLACE</a>
                                </li>
                                <li>
                                    <a href="#info">INFO&ACCESS</a>
                                </li>
                            </ul>
                        </div>
                       
                    </div>
                    
                    <div class="pc_reserve_btn">
                        <button class="reserve_button" onclick="location.href='#reserve'">
                            予約する
                        </button>
                    </div>
                    
                    <div id="menu_btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            
            <div class="header_modal">
                <ul>
                    <li>
                        <a href="#news">NEWS</a>
                    </li>
                    <li>
                        <a href="#concept">CONCEPT</a>
                    </li>
                    <li>
                        <a href="#menu">MENU</a>
                    </li>
                    <li>
                        <a href="#place">PLACE</a>
                    </li>
                    <li>
                        <a href="#info">ACCESS</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
