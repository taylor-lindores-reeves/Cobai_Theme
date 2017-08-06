<?php

// Template Name: about us

?>

<?php

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>

    <div class="about-us-banner">
		<?php
		$img_src = wp_get_attachment_image_url( $attachment_id, 'small' );
		$img_srcset = wp_get_attachment_image_srcset( $attachment_id, 'small' );
		?>

        <img src="<?php echo get_template_directory_uri();?>/assets/images/services.jpg"
             srcset="<?php echo get_template_directory_uri();?>/assets/images/services-medium.jpg 1366w"
             srcset="<?php echo get_template_directory_uri();?>/assets/images/services-small.jpg 960w"
             sizes="(max-width: 1040px) 100vw, (max-width: 900px) 50vw" alt="banner">
    </div>

<?php endwhile; ?>
<?php endif; ?>

<?php

get_footer();

?>