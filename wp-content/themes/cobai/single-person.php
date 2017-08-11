
<?php get_header(); ?>

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

    <div class="person-container">
        <figure>
            <img src="<?php echo get_field('profile_picture') ?>" alt="profile-picture" width="212px" height="262px">
        </figure>

        <div class="person-aside-container">
            <h1><?php echo get_field('name') ?></h1>
            <h2><?php echo get_field('degree') ?></h2>
            <h3><?php echo get_field('job_title') ?></h3>
        </div>

        <div class="social-media-icons">
		    <?php if(get_field('facebook')) { ?>
                <a href="<?php echo get_field('facebook'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook.svg" height="50px" width="50px" alt="Icon made by Freepik from www.flaticon.com">
                </a>
		    <?php } ?>

		    <?php if(get_field('twitter')) { ?>
                <a href="<?php echo get_field('twitter'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/twitter.svg" height="50px" width="50px" alt="Icon made by Freepik from www.flaticon.com">
                </a>
		    <?php } ?>

		    <?php if(get_field('linkedin')) { ?>
                <a href="<?php echo get_field('linkedin'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/linkedin.svg" height="50px" width="50px" alt="Icon made by Freepik from www.flaticon.com">
                </a>
		    <?php } ?>
        </div>

	        <?php echo the_content() ?>

    </div>


	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

<!--TODO set up a new branch on git for our services-->
<!--TODO fill out social media links on wp backend-->