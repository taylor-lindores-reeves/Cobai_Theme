<?php

// Template Name: what-we-do

?>

<?php

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="what-content">
		<h4 class="what-title">We are a small start-up company. We understand the struggle.
			It's hard running a company. We've felt it first hand. Albeit, as
			students we have the safety net of the University, but that does
			not stop us from experiencing the day-to-day running of a business.
			Getting a team of people all working in the same direction, . But we're students, we're learning.
			If you have a query
		</h4>
		<img class="what-we-do-banner" src="<?php echo get_template_directory_uri();?>/assets/images/services-667x409.jpg" alt="services" />
	</div>

<?php endwhile; ?>
<?php endif; ?>

<?php

get_footer();

?>