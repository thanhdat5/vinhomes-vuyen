<?php
$posts = get_posts(array(
    'post_type'         => 'post',
    'posts_per_page'    => '5',
    'post_status'       => 'publish',
    'orderby'           => 'publish_date',
    'order'             => 'DESC',
));
if ($posts) { ?>
    <!-- Related posts -->
    <div class="lav-sidebar-latest-posts">
        <h3 class="widget-title">
            <?php esc_html_e('Bài viết mới nhất', 'vinhome-vuyen'); ?>
        </h3>
        <?php
        foreach ($posts as $post) :
            setup_postdata($post);
            $category = get_the_category();
        ?>
            <div class="lav-post-item">
                <a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="lav-post-item-image">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'large'); ?>
                </a>
                <div class="lav-post-item-body">
                    <h2 class="lav-post-item-title">
                        <a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
                    </h2>
                    <div class="lav-post-item-date">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                            <path d="M7 12.5C10.3137 12.5 13 9.81371 13 6.5C13 3.18629 10.3137 0.5 7 0.5C3.68629 0.5 1 3.18629 1 6.5C1 9.81371 3.68629 12.5 7 12.5Z" stroke="#222222" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7 3.16669V6.50002L9 8.50002" stroke="#222222" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span><?php echo get_the_date(); ?></span>
                    </div>
                </div>
            </div>
        <?php
        endforeach;
        ?>
    </div>
<?php
    wp_reset_postdata();
}
?>