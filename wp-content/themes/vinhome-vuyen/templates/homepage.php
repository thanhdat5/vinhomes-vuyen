<?php

/**
 * Template Name: Trang chủ
 * Description: ...........
 *
 */

get_header();
?>
<div class="lav-page lav-homepage">
    <div class="lav-homepage-banner">
        <div class="lav-homepage-banner-inner">
            <div class="container">
                <div class="row gx-lg-5 gy-4 gy-lg-0 justify-content-center">
                    <div class="col-lg-5 pe-lg-4">
                        <div class="lav-homepage-banner-info h-100">
                            <h3><?php echo get_field('banner_title');?></h3>
                            <div><?php echo get_field('banner_description');?></div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-4">
                        <div class="lav-homepage-banner-form h-100">
                            <?php echo do_shortcode(get_field('banner_form_shortcode')) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lav-banner-slideshow">
            <?php
            for ($x = 1; $x <= 5; $x++) {
                if (get_field('banner_slide_' . $x)) {
            ?>
                    <div class="lav-banner-slide-item">
                        <img src="<?php echo get_field('banner_slide_' . $x); ?>" alt="" />
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <!-- Description -->
    <div class="lav-page-description pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 data-aos="fade-up"><?php echo get_field('summary_title'); ?></h2>
                    <p data-aos="fade-up"><?php echo get_field('summary_description'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="lav-about-slideshow" data-aos="zoom-in">
        <?php
        for ($x = 1; $x <= 5; $x++) {
            if (get_field('summary_image_' . $x)) {
        ?>
                <div class="lav-about-slide-item">
                    <img src="<?php echo get_field('summary_image_' . $x); ?>" alt="" />
                </div>
        <?php
            }
        }
        ?>
    </div>

    <!-- Body -->
    <div class="lav-page-body pt-0">
        <div class="lav-homepage-sect lav-homepage-overview overflow-hidden">
            <div class="container">
                <div class="row mb-5 align-items-center">
                    <div class="col-lg-6 pe-lg-5">
                        <img data-aos="fade-right" src="<?php echo get_field('overview_image'); ?>" alt="" class="w-100" />
                    </div>
                    <div class="col-lg-6">
                        <div data-aos="fade-left">
                            <h3 class="lav-homepage-title"><?php echo get_field('overview_title'); ?></h3>
                            <div><?php echo get_field('overview_description'); ?></div>
                        </div>
                    </div>
                </div>

                <div data-aos="flip-up"><?php echo get_field('overview_details'); ?></div>
            </div>
        </div>

        <div class="lav-homepage-sect lav-homepage-location">
            <div class="container">
                <h3 data-aos="fade-up" class="lav-homepage-title text-center"><?php echo get_field('location_title'); ?></h3>
                <div data-aos="fade-up" class="mb-4">
                    <?php echo get_field('location_details'); ?>
                </div>
            </div>
        </div>

        <div class="lav-homepage-sect lav-homepage-amenities lav-amenities">
            <div class="lav-page-body">
                <div class="container">
                    <h3 data-aos="fade-up" class="lav-homepage-title text-center"><?php echo get_field('amenities_title'); ?></h3>
                    <div data-aos="fade-up">
                        <!-- Amenities List -->
                        <?php
                        get_template_part('template-parts/component', 'list-amenities');
                        ?>
                    </div>
                    <div data-aos="fade-up" class="text-center mt-3">
                        <a href="<?php echo get_field('detail_url'); ?>" class="research-btn">
                            <span><?php esc_html_e('Tìm hiểu thêm', 'vinhome-vuyen'); ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Products -->
        <div class="lav-homepage-products lav-products">
            <div class="lav-page-body">
                <div class="container">
                    <h3 data-aos="fade-up" class="lav-homepage-title text-center"><?php echo get_field('products_title'); ?></h3>
                </div>
                <div>
                    <!-- Products List -->
                    <?php
                    get_template_part('template-parts/component', 'list-product');
                    ?>
                </div>
            </div>
        </div>

        <!-- Section Subdivision -->
        <div class="lav-homepage-subdivision lav-subdivision">
            <div class="lav-page-body pb-0">
                <div class="container pb-0">
                    <h3 data-aos="fade-up" class="lav-homepage-title text-center"><?php echo get_field('subdivision_title'); ?></h3>
                    <div>
                        <!-- Subdivision List -->
                        <?php
                        get_template_part('template-parts/component', 'list-subdivision');
                        ?>
                    </div>
                </div>
            </div>
        </div>

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
