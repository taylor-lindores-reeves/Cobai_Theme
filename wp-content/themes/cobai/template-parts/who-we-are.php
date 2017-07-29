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

//echo "<pre>" . print_r($personQuery->posts,1) . "</pre>";

?>

    <h2 id="who-we-are-title">Meet the team!</h2>

    <div class="profiles-container">

        <?php if ($personQuery->have_posts()) {

            foreach ($personQuery->posts as $post) { ?>
                <div>
                    <a href="<?php echo get_permalink($post->ID); ?>"><img src="<?php echo get_field('profile_picture'); ?>" alt="william-griffin" height="131px" width="106px"></a>
                    <p><?php echo apply_filters('the_title', $post->post_title); ?></p>
                </div>


        <?php } } ?>

    </div>

<?php

get_footer();

?>

