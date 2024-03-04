<?php

/**
 * The template for displaying the archive loop.
 */
if (have_posts()) :
?>
    <div class="lav-archive-loop">
        <!-- Items list -->
        <div class="row">
            <?php
            while (have_posts()) :
                the_post();
                /**
                 * Include the Post-Format-specific template for the content.
                 * If you want to overload this in a child theme then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part('template-parts/component', 'archive-item');
            endwhile;
            ?>
        </div>

        <!-- Pagination -->
        <div class="lav-archive-loop-pagination">
            <?php the_posts_pagination(); ?>
        </div>
    </div>
<?php
endif;
wp_reset_postdata();
