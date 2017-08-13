<?php

// Template Name: what we do

?>

<?php

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="what-content">
		<h4 class="what-title">
            We are a small start-up company based at Penryn Campus University.
            We understand how challenging it is to run a business because that's
            exactly what our degree entails - to build, run and sustain a real plc.
			What motivates us is seeing results. We pride ourselves on having a
            close-knit team with a strong work ethic and we will always go the
            extra mile for our clients.
		</h4>

        <div class="what-banner"></div>
	</div>

<?php endwhile; ?>
<?php endif; ?>

<?php

get_footer();

?>