<?php

// Template Name: contact

?>

<?php

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h2 id="main-title">Fill out the form below to get in touch!</h2>

    [contact-form-7 id="142" title="Contact Us"]

    <div class="g-recaptcha" data-sitekey="6LcRrCsUAAAAACQe7GepQUmuIZvdQ4yt_Fb7EDet"></div>

<?php endwhile; ?>
<?php endif; ?>



<?php

get_footer();

?>

