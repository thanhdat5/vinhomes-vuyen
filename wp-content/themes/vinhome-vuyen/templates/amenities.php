<?php

/**
 * Template Name: Trang tiện ích
 * Description: ...........
 *
 */

get_header();
$page_id = get_the_ID();
$page_title = get_the_title();
$page_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];
$post_type = get_field('post_type_slug');
?>
<div class="lav-page lav-amenities">
    <!-- Banner -->
    <?php
    get_template_part('template-parts/component', 'page-banner', array(
        'image'  => $page_image,
        'title' => $page_title
    ));
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
    <div class="lav-page-body">
        <div class="container">
            <!-- Amenities List -->
            <?php
            get_template_part('template-parts/component', 'list-amenities', array(
                'post_type' => $post_type
            ));
            ?>

            <div class="mt-4">
                <?php echo get_field('amenities_details'); ?>
            </div>
        </div>
    </div>

    <div class="lav-products">
        <div class="container">
            <h2 class="my-5 mb-lg-5 mb-3 text-center text-warning">
                <b><?php esc_html_e('CÁC SẢN PHẨM TẠI VINHOMES VŨ YÊN', 'vinhome-vuyen'); ?></b>
            </h2>
        </div>
        <!-- Products List -->
        <?php
        get_template_part('template-parts/component', 'list-product');
        ?>
    </div>

    <!-- Section Contact -->
    <?php
    get_template_part('template-parts/component', 'contact-form');
    ?>
</div>
<?php
get_footer();
