<?php

// Template Name: Single Person

?>

<?php

get_header();

?>

<?php

$args = array( 'post_type' => 'team_member', 'posts_per_page' => 10 );

$the_query = new WP_Query( $args );

?>

<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <h2 class="persons-title"><?php the_title(); ?></h2>

        <div class="persons-content">

            <div class="person-container">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/taylor.png" alt="" height="262px" width="212px">
                <h1>Director</h1>
                <h2>Taylor Lindores-Reeves</h2>
                <h3>Sign up for ebulletins</h3>
                <h3>Like us on facebook</h3>
                <h3>Follow us on twitter</h3>
                <h3>Subscribe to our youtube channel</h3>
                <h3>Follow us on instagram</h3>
                <h3>Follow us on flickr</h3>

                <p>Our team has been lucky enough to work for a variety of companies in different industries.
                    We have been presented with challenging problems that have certainly enabled me to learn a lot about problem-solving within
                    the context of a team. My hobby is web development, and this gives me an edge when it comes to technology. A recent client that
                    we did some consultation work for is now in the process of developing an online presence. The ideas we put forth have set a
                    foundation that they are now building on. Our team specializes in business solutions consultations so please feel free to
                    <a>contact us</a> if you have any queries regarding your own business.</p>

                <p>As a side hobby, I am a freelance web developer. I have a growing set of design and development skills that I am continuing to
                    develop on a daily basis. Photoshop CC 2017, Wordpress, and Node.js are just a few of the mediums I use for my web projects.
                    If you are interested in having a website to showcase yourself or your business, please get in contact.</p>

            </div>

        </div>

		<?php wp_reset_postdata(); ?>

        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

	<?php endwhile; ?>
<?php endif; ?>

<?php

get_footer();

?>
