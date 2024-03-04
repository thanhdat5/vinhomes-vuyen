<?php

/**
 * Template Name: Trang chủ
 * Description: ...........
 *
 */

get_header();
?>
<div class="lav-page lav-homepage">
    <!-- Body -->
    <div class="lav-page-body">

        <!-- Section Latest Posts -->
        <?php
        get_template_part('template-parts/component', 'latest-posts');
        ?>

        <!-- Section Contact -->
        <?php
        get_template_part('template-parts/component', 'contact-form');
        ?>
    </div>
</div>
<?php
get_footer();
