<?php

// Template Name: about us

?>

<?php

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="about-page-content">
        <h4 class="about-page-title">We are a <a href="/who-we-are">team of 10</a> with a combined experience of over 10 years of running a company.<br/>
            The connections and knowledge we have gained from networking and working with <br/>
            a variety of companies in different industries has enabled us to feel confident in<br/>
            providing you with the best possible business solutions service we can.<br/>
        </h4>
    </div>

	<div class="content-image">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/services.jpg" alt="" height="55%" width="55%">
	</div>

<?php endwhile; ?>
<?php endif; ?>

<?php

get_footer();

?>