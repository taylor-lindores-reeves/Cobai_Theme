<?php

get_header();

// Template Name: index

?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="content-video">
            <?php the_content(); ?>
		</div><!-- entry -->

<?php endwhile; ?>
<?php endif; ?>

<?php

get_footer();

?>