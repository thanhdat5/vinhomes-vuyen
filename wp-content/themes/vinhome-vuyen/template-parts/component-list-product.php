<?php
$post_type = $args['post_type'] ?? 'san-pham'
?>
<!-- Items list -->
<div class="overflow-hidden">
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
    if ($posts) :
        $index_x = 0;
        foreach ($posts as $index => $post) :
            setup_postdata($post);
            $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->id), 'full')[0];
    ?>
            <div class="lav-products-item <?php echo (count($posts) - 2 <= $index) ? 'last' : '' ?>">
                <div class="lav-products-item-bg <?php echo ($index_x % 2 == 0) ? 'left' : 'right' ?>">
                    <img data-aos="<?php echo ($index_x % 2 == 0) ? 'fade-right' : 'fade-left' ?>" class="lav-products-item-img <?php echo ($index % 2 != 0) ? 'right' : '' ?>" src="<?php echo $image_url; ?>" alt="" />
                </div>
                <div class="container">
                    <div class="row">
                        <!-- Image -->
                        <div class="col-12 col-lg-6 <?php echo ($index % 2 == 0) ? '' : 'order-1 order-lg-2' ?>"></div>
                        <div class="col-12 col-lg-6 lav-products-item-right <?php echo ($index % 2 != 0) ? 'order-2 order-lg-1 pe-lg-5' : 'ps-lg-5' ?>">
                            <div data-aos="<?php echo ($index_x % 2 == 0) ? 'fade-left' : 'fade-right' ?>">
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
                        </div>
                        <!-- Link | Title | Date -->
                    </div>
                </div>
            </div>
        <?php
            $index_x++;
        endforeach;
        wp_reset_postdata();
        ?>
    <?php endif; ?>
</div>