<?php

// Template Name: contact

?>

<?php

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="contact-form-container">
        <h2 class="contact-form-title">Fill out the form below to get in touch!</h2>
        <div class="contact-form-content">
            <?php echo the_content() ?>
        </div>
    </div>
<?php endwhile; ?>
<?php endif; ?>



<?php

get_footer();

?>

