<?php

// Template Name: about us

?>

<?php

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="about-page-content">
        <h4 class="about-page-title">We are a <a href="/who-we-are">team of 10</a> with a combined experience of over 10 years of running a company. The connections and knowledge we have gained from networking and working with a variety of companies in different industries has enabled us to feel confident in providing you with the best possible business solutions service we can.</h4>
        <img class="about-us-banner" src="<?php echo get_template_directory_uri();?>/assets/images/services-667x409.jpg" alt="services" />
    </div>

<?php endwhile; ?>
<?php endif; ?>

<?php

get_footer();

?>