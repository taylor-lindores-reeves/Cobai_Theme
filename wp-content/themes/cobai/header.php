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
    <nav class="site-header-nav">
        <a href="/home">
            <img class="site-header-main-logo" src="<?php echo get_template_directory_uri();?>/assets/images/cobai-logo.png" alt="cobai-logo" />
        </a>
        <a href="/contact"><button class="site-header-btn">ENQUIRE NOW</button></a>
    </nav>

    <a href="#" class="site-header-anchor">
    <div class="site-header__menu-icon">
        <div class="site-header__menu-icon__top"></div>
        <div class="site-header__menu-icon__middle"></div>
        <div class="site-header__menu-icon__bottom"></div>
    </div>
    </a>

    <div class="site-header__menu-content">
        <div class="site-header__btn-container">
            <a href="https://facebook.com" class="btn open-modal">Get in Touch</a>
        </div>
        <nav class="primary-nav primary-nav--pull-right">
            <ul>
                <li><a href="/home">HOME</a></li>
                <li><a href="/what-we-do">WHAT WE DO</a></li>
                <li><a href="/who-we-are">WHO WE ARE</a></li>
            </ul>
        </nav>
    </div>

</header>


