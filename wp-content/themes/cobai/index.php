<?php

get_header();

// Template Name: index

?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="home-content">
                <h1 class="home-title"><strong class="light-color">Cornwall</strong> business and innovation</h1>
                <h2 class="home-subtitle">A company run by students, built and sustained by innovation</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/irYUpt-n3W0?showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>

<?php endwhile; ?>
<?php endif; ?>

<?php

get_footer();

?>