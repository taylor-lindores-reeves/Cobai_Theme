<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cobai Limited</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"" />
	<?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

<header class="site-header">
    <nav class="site-header-container">
        <a href="/index">
            <img class="site-header-main-logo" src="<?php echo get_template_directory_uri();?>/assets/images/cobai-logo.png" alt="cobai-logo" />
        </a>
        <a href="/who-we-are" class="hidden">WHO WE ARE</a>
        <a href="/what-we-do" class="hidden">WHAT WE DO</a>
        <a href="/contact" id="contact-us" class="hidden">CONTACT US</a>
    </nav>

    <div class="site-header__menu-icon">
        <div class="site-header__menu-icon__top"></div>
        <div class="site-header__menu-icon__middle"></div>
        <div class="site-header__menu-icon__bottom"></div>
    </div>


    <div class="site-header__menu-content">
        <nav class="primary-nav primary-nav--pull-right">
            <ul>
                <li><a href="/home">HOME</a></li>
                <li><a href="/what-we-do">WHAT WE DO</a></li>
                <li><a href="/who-we-are">WHO WE ARE</a></li>
                <li><a href="/contact">CONTACT US</a></li>
            </ul>
        </nav>
    </div>
</header>


