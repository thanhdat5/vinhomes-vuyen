<?php
$title = $args['title'] ?? esc_html__('TIN TỨC DỰ ÁN', 'vinhome-vuyen');
?>
<div class="lav-latest-posts lav-archive-loop">
    <div class="container">
        <?php if ($title) {
        ?>
            <div class="lav-latest-posts-header">
                <h4><?php echo $title; ?></h4>
                <a href="#">
                    <span><?php esc_html_e('Khám phá thêm', 'vinhome-vuyen'); ?></span>
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.75" y="0.75" width="54.5" height="54.5" rx="27.25" stroke="#F5F1E6" stroke-width="1.5" />
                        <path d="M21 28H35M29 34L35 28M29 22L35 28" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        <?php
        }
        ?>
        <!-- Items list -->
        <div class="row">
            <?php
            $posts = get_posts(array(
                'post_type'         => 'phan-khu',
                'posts_per_page'    => '3',
                'post_status'       => 'publish',
                'orderby'           => 'publish_date',
                'order'             => 'DESC',
            ));
            if ($posts) : ?>
                <?php foreach ($posts as $post) :
                    setup_postdata($post);
                    get_template_part('template-parts/component', 'archive-item');
                endforeach; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>