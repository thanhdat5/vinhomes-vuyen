<?php

/**
 * Template Name: Trang sản phẩm
 * Description: ...........
 *
 */

get_header();
$page_id = get_the_ID();
$page_title = get_the_title();
$page_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];
$post_type = get_field('post_type_slug');
?>
<div class="lav-page lav-products">
    <!-- Banner -->
    <?php
    get_template_part(
        'template-parts/component',
        'page-banner',
        array(
            'image' => $page_image,
            'title' => $page_title
        )
    );
    ?>

    <!-- Description -->
    <div class="lav-page-description">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <?php echo get_post_field('post_content', $page_id) ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Body -->
    <div class="lav-page-body pt-0">
        <!-- Products List -->
        <?php
        get_template_part('template-parts/component', 'list-product', array(
            'post_type' => $post_type
        ));
        ?>

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
