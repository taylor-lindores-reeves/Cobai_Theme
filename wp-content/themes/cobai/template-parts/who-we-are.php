<?php

// Template Name: who we are

?>

<?php

get_header();

$personQuery = new WP_Query(array(
	'post_type' => 'person',
	'posts_per_page' => -1,
	'post_status' => 'publish',
	'order' => 'ASC'
));

?>

<h2 class="who-title">Meet the team!</h2>

<div class="profiles-container">

	<?php if ($personQuery->have_posts()) {

		foreach ($personQuery->posts as $post) { ?>
            <div class="profile-pics-container">
                <a href="<?php echo get_permalink($post->ID); ?>"><img src="<?php echo get_field('profile_picture'); ?>" alt="team-members" height="131px" width="106px"></a>
                <div class="profile-titles">
                    <p class="post-title"><?php echo apply_filters('the_title', $post->post_title); ?></p>
                    <p class="job-title"><?php echo apply_filters('job_title', $post->job_title); ?></p>
                </div>
            </div>

		<?php } } ?>

</div>

<?php

get_footer();

?>