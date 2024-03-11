<?php
$post_type = $args['post_type'] ?? 'tien-ich'
?>
<!-- Items list -->
<div class="row lav-amenities-list">
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
            setup_postdata($post);
            $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->id), 'full')[0];
    ?>
            <div class="col col-xl-4 col-md-6 col-sm-12 col-xs-12">
                <div class="lav-amenities-item" data-aos="fade-up" data-aos-delay="<?php echo ($index_x % 3) * 100 ?>">
                    <!-- Image -->
                    <a href="<?php echo $image_url; ?>" data-lightbox="image-<?php echo '11' . $post->id; ?>" class="lav-amenities-item-img">
                        <img src="<?php echo $image_url; ?>" alt="" />
                    </a>
                    <!-- Link | Title | Date -->
                    <div class="lav-amenities-item-title">
                        <!-- <a href="<?php echo get_field('detail_url'); ?>"> -->
                        <?php echo get_the_title($post->id); ?>
                        <!-- </a> -->
                    </div>
                </div>
            </div>
    <?php
            $index_x++;
        endforeach;
        wp_reset_postdata();
    endif; ?>
    <!-- </div> -->
</div>
<!-- end -->