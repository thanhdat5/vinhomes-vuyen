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
            <!-- Items list -->
            <div class="row">
                <?php
                $posts = get_posts(array(
                    'post_type'         => $post_type,
                    'posts_per_page'    => -1,
                    'meta_key'          => 'order_no',
                    'orderby'           => 'meta_value',
                    'order'             => 'ASC'
                ));
                if ($posts) : ?>
                    <div>
                        <?php foreach ($posts as $post) :
                            setup_postdata($post)
                        ?>
                            <!-- TODO -->
                            <div class="lav-amenities-item">
                                <!-- Image -->
                                <?php
                                $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->id), 'full')[0];
                                ?>
                                <img height="200" src="<?php echo $image_url; ?>" alt="" />

                                <!-- Link | Title | Date -->
                                <a href="<?php the_permalink($post->id); ?>">
                                    <?php echo get_the_title($post->id); ?> - <span><?php echo get_the_date($post->id); ?></span>
                                </a>

                                <!-- Content -->
                                <?php the_content($post->id); ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
