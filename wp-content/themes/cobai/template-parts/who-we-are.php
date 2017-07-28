<?php

// Template Name: who we are

?>

<?php

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h2 id="who-we-are-title">Meet the team!</h2>

    <div class="profiles-container">
        <div>
            <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/william.png" alt="" height="131px" width="106px"></a>
            <p>William Henry<br> Griffin</p>
        </div>


        <div>
            <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/taylor.png" alt="" height="131px" width="106px"></a>
            <p>Taylor Lindores<br> Reeves</p>
        </div>


        <div>
            <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/robyn.jpg" alt="" height="131px" width="106px"></a>
            <p>Robyn Piper</p>
        </div>


        <div>
            <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/olivia.jpg" alt="" height="131px" width="106px"></a>
            <p>Olivia Schneck</p>
        </div>


        <div>
            <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/lauren.jpg" alt="" height="131px" width="106px"></a>
            <p>Lauren Woods</p>
        </div>


        <div>
            <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/francesca.jpg" alt="" height="131px" width="106px"></a>
            <p>Francesa Ware</p>
        </div>


        <div>
            <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/david.jpg" alt="" height="131px" width="106px"></a>
            <p>David Brimelow</p>
        </div>


        <div>
            <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/stefano.jpg" alt="" height="131px" width="106px"></a>
            <p>Stefano Paderi</p>
        </div>

    </div>


<?php endwhile; ?>
<?php endif; ?>

<?php

get_footer();

?>

