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
    <div class="lav-page-body">
            <!-- Items list -->
            <div>
                <?php
                $posts = get_posts(
                    array(
                        'post_type' => $post_type,
                        'posts_per_page' => -1,
                        'meta_key' => 'order_no',
                        'orderby' => 'meta_value',
                        'order' => 'ASC'
                    )
                );
                if ($posts): ?>
                    <?php foreach ($posts as $index => $post):
                        setup_postdata($post)
                            ?>
                        <!-- TODO -->
                        <?php
                        ?>

                        <div class="lav-products-item <?php echo (count($posts) - 2 <= $index) ? 'last' : '' ?>">
                            <div class="container">
                                <div class="row equal">
                                    <!-- Image -->
                                    <?php
                                    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->id), 'full')[0];
                                    ?>

                                    <div
                                        class="col-12 col-md-6 lav-products-item-left <?php echo ($index % 2 != 0) ? 'odd' : '' ?>">
                                        <img class="lav-products-item-img <?php echo ($index % 2 != 0) ? 'right' : '' ?>"
                                            src="<?php echo $image_url; ?>" alt="" />
                                    </div>
                                    <div
                                        class="col-12 col-md-6 lav-products-item-right <?php echo ($index % 2 != 0) ? 'even' : '' ?>">
                                        <a href="<?php the_permalink($post->id); ?>" class="lav-products-item-title">
                                            <?php echo get_the_title($post->id); ?>
                                            <!-- - <span><?php echo get_the_date($post->id); ?></span> -->
                                        </a>

                                        <!-- Content -->
                                        <div class="lav-products-item-desc">
                                            <?php the_content($post->id); ?>
                                        </div>

                                        <div class="lav-products-item-bottom">
                                            <a href="<?php the_permalink($post->id); ?>" class="research-btn">
                                                <span>Tìm hiểu thêm</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Link | Title | Date -->
                                </div>
                            </div>



                        </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        <!-- Section Contact -->
        <?php
        get_template_part('template-parts/component', 'contact-form');
        ?>
    </div>
</div>
<?php
get_footer();
