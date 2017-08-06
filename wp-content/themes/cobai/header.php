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

<header>
    <nav class="header-nav">
        <a href="/home">
            <img class="header-main-logo" src="<?php echo get_template_directory_uri();?>/assets/images/cobai-logo.png" alt="cobai-logo" />
        </a>
        <a href="/contact"><button class="header-btn">ENQUIRE NOW</button></a>
    </nav>
</header>


