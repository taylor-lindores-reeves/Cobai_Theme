<?php

get_header();

// Template Name: index

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h1 class="slogan"><strong class="light-color">Cornwall</strong> business and innovation</h1>
    <h2 class="slogan slogan-two">A company run by students, built and sustained by innovation...</h2>
		<div class="content-video">
            <?php the_content(); ?>
		</div><!-- entry -->

<?php endwhile; ?>
<?php endif; ?>

<?php

get_footer();

?>