<?php

// Template Name: our services

?>

<?php

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section id="set-1">
            <div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">
                <a href="#" class="hi-icon hi-icon-location component-location"></a>
                <a href="#" class="hi-icon hi-icon-videos component-videos"></a>
                <a href="#" class="hi-icon hi-icon-mail component-mail"></a>

                <div class="inner-container-names">
                    <p>Location</p>
                    <p>Videos</p>
                    <p>Contact</p>
                </div>


            </div>
        </section>

        <!-- End of Icons -->


<?php endwhile; ?>
<?php endif; ?>

<?php

get_footer();

?>
