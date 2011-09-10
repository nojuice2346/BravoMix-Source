<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title><?php echo $site_title; ?></title>
    <meta name="description" content="<?php echo $site_description; ?>" />
    <meta name="keywords" content="<?php echo $site_keywords; ?>" />
    <?php echo $meta_tag; ?>
    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/normalize.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="/assets/css/blueprint/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="/assets/css/blueprint/print.css" type="text/css" media="print">
    <!--[if lt IE 8]><link rel="stylesheet" href="/assets/css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
    <?php echo $styles; ?>
    <!-- JS -->
    <?php echo $scripts_header; ?>
</head>
<body>
    <div class="notice"><?php echo "Page rendered in " .  $this->benchmark->elapsed_time() . " seconds" ?></div>

    <!-- Begin Wrapper -->
    <div id="wrapper" class="container">

        <!-- Begin Header -->
        <div id="header">
            <ul class="menu">
                <li><a href="#">小幫手</a></li>
                <li><a href="#">註冊</a></li>
                <li><a href="#">登入</a></li>
            </ul>
            <a href="<?php echo site_url('welcome') ?>">
                <h1 class="logo"><strong>BravoMix</strong></h1>
            </a>
        </div>
        <!-- End Header -->

        <!-- Begin Navigation -->
        <div id="nav">
            <ul class="menu">
                <li class="tab-item"><a href="<?php echo site_url('item/roll'); ?>">單品</a></li>
                <li class="tab-mix"><a href="<?php echo site_url('mix/roll'); ?>">搭配</a></li>
                <li class="tab-expert"><a href="#">達人</a></li>
                <li class="tab-brand"><a href="#">品牌專區</a></li>
                <li class="tab-brand"><a href="#">我不知道要穿什麼</a></li>
            </ul>
        </div>
        <!-- End Navigation -->

        <!--Begin Content -->
        <div  class="span-19 last">
            <?php echo $content; ?>
        </div>
        <!-- End Content -->


        <!-- Begin Footer -->
        <div id="footer" class="span-24">
            <ul class="menu">
                <li><a href="#">合作機會</a></li>
                <li><a href="#">工作機會</a></li>
                <li><a href="#">連絡我們</a></li>
            </ul>
        </div>
        <!-- End Footer -->

    </div>
    <!-- End Wrapper -->

    <div id="bottom"></div>     

    <?php echo $scripts_footer; ?>
</body>
</html>
