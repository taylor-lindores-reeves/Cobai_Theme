<?php

// Template Name: contact

?>

<?php

get_header();

?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h2 id="main-title">Fill out the form below to get in touch!</h2>


<?php endwhile; ?>
<?php endif; ?>



<?php

get_footer();

?>

