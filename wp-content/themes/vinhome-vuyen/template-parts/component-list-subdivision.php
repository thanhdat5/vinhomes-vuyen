<?php
$post_type = $args['post_type'] ?? 'phan-khu'
?>
<!-- Items list -->
<div class="row row-cols-1">
    <?php
    $posts = get_posts(array(
        'post_type'         => $post_type,
        'posts_per_page'    => -1,
        'meta_key'          => 'order_no',
        'orderby'           => 'meta_value',
        'order'             => 'ASC'
    ));
    if ($posts) :
        $index_x = 0;
        foreach ($posts as $post) :
            setup_postdata($post)
    ?>
            <!-- TODO -->
            <div class="col col-md-6 col-sm-12">
                <div class="lav-subdivision-item" data-aos="zoom-in" data-aos-delay="<?php echo (($index_x % 2) * 100);?>">
                    <!-- Image -->
                    <?php
                    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->id), 'full')[0];
                    ?>
                    <div class="lav-subdivision-item-image">
                        <img src="<?php echo $image_url; ?>" alt="" />
                    </div>

                    <!-- Link | Title | Date -->
                    <a href="<?php the_permalink($post->id); ?>">
                        <?php echo get_the_title($post->id); ?>
                        <!-- - <span><?php echo get_the_date($post->id); ?></span> -->
                    </a>

                    <div class="lav-subdivision-item-excerpt">
                        <?php echo get_the_excerpt(); ?>
                    </div>
                </div>
            </div>
        <?php
            $index_x++;
        endforeach;
        wp_reset_postdata(); ?>
    <?php endif; ?>
</div>