<?php
$post_id = $args['post_id'];
?>
<div class="lav-related-posts py-5">
    <h3 class="lav-widget-title">
        <?php esc_html_e('Có thể bạn quan tâm', 'vinhome-vuyen'); ?>
    </h3>
    <!-- Items list -->
    <div class="row gx-lg-5">
        <?php
        $related = get_posts(
            array(
                'post_type'     => 'phan-khu',
                'numberposts'   => 3,
                'post__not_in'  => array($post_id)
            )
        );
        if ($related) : ?>
            <?php foreach ($related as $post) :
                setup_postdata($post);
                get_template_part('template-parts/component', 'archive-item');
            endforeach; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>