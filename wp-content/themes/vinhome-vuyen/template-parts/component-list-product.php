<?php
$post_type = $args['post_type'] ?? 'san-pham'
?>
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
    if ($posts) : ?>
        <?php foreach ($posts as $index => $post) :
            setup_postdata($post)
        ?>
            <div class="lav-products-item <?php echo (count($posts) - 2 <= $index) ? 'last' : '' ?>">
                <div class="container">
                    <div class="row equal">
                        <!-- Image -->
                        <?php
                        $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->id), 'full')[0];
                        ?>

                        <div class="col-12 col-md-6 lav-products-item-left <?php echo ($index % 2 != 0) ? 'odd' : '' ?>">
                            <img class="lav-products-item-img <?php echo ($index % 2 != 0) ? 'right' : '' ?>" src="<?php echo $image_url; ?>" alt="" />
                        </div>
                        <div class="col-12 col-md-6 lav-products-item-right <?php echo ($index % 2 != 0) ? 'even' : '' ?>">
                            <a href="<?php echo get_field('detail_url'); ?>" class="lav-products-item-title">
                                <?php echo get_the_title($post->id); ?>
                                <!-- - <span><?php echo get_the_date($post->id); ?></span> -->
                            </a>

                            <!-- Content -->
                            <div class="lav-products-item-desc">
                                <?php the_content($post->id); ?>
                            </div>

                            <div class="lav-products-item-bottom">
                                <a href="<?php echo get_field('detail_url'); ?>" class="research-btn">
                                    <span><?php esc_html_e('Tìm hiểu thêm', 'vinhome-vuyen'); ?></span>
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