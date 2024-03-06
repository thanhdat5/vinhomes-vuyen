<?php

/**
 * Template Name: Trang liên hệ
 * Description: ...........
 *
 */

get_header();
$page_title = get_the_title();
$page_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];
$address = get_theme_mod('lav_address', '');
$email = get_theme_mod('lav_email', '');
$phone_1 = get_theme_mod('lav_phone_1', '');
$phone_2 = get_theme_mod('lav_phone_2', '');
$map_embeded = get_theme_mod('lav_map', '');
?>
<div class="lav-page lav-contact">
    <!-- Banner -->
    <?php
    get_template_part('template-parts/component', 'page-banner', array(
        'image'  => $page_image,
        'title' => $page_title
    ));
    ?>

    <!-- Body -->
    <div class="lav-contact-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Contact form -->
                    <?php the_content(); ?>
                </div>

                <div class="col-lg-6">
                    <!-- Contact info -->
                    <h3><?php echo get_field('contact_title');?></h3>
                    <p><?php echo get_field('contact_description');?></p>

                    <!-- Address -->
                    <?php if ($address) {
                    ?>
                        <div class="lav-contact-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M17.5 8.33337C17.5 14.1667 10 19.1667 10 19.1667C10 19.1667 2.5 14.1667 2.5 8.33337C2.5 6.34425 3.29018 4.4366 4.6967 3.03007C6.10322 1.62355 8.01088 0.833374 10 0.833374C11.9891 0.833374 13.8968 1.62355 15.3033 3.03007C16.7098 4.4366 17.5 6.34425 17.5 8.33337Z" stroke="#222222" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 10.8334C11.3807 10.8334 12.5 9.71409 12.5 8.33337C12.5 6.95266 11.3807 5.83337 10 5.83337C8.61929 5.83337 7.5 6.95266 7.5 8.33337C7.5 9.71409 8.61929 10.8334 10 10.8334Z" stroke="#222222" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="lav-contact-adress"><?php echo $address; ?></span>
                        </div>
                    <?php
                    } ?>

                    <!-- Email -->
                    <?php if ($email) {
                    ?>
                        <div class="lav-contact-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M3.33366 3.33331H16.667C17.5837 3.33331 18.3337 4.08331 18.3337 4.99998V15C18.3337 15.9166 17.5837 16.6666 16.667 16.6666H3.33366C2.41699 16.6666 1.66699 15.9166 1.66699 15V4.99998C1.66699 4.08331 2.41699 3.33331 3.33366 3.33331Z" stroke="#222222" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M18.3337 5L10.0003 10.8333L1.66699 5" stroke="#222222" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span >
                                <a  href="mailto:<?php echo $email; ?>"><?php echo $email; ?>
                            </span>
                        </div>
                    <?php
                    } ?>

                    <!-- Phone -->
                    <?php if ($phone_1 || $phone_2) {
                    ?>
                        <div class="lav-contact-info lav-phone">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M18.3332 14.1V16.6C18.3341 16.8321 18.2866 17.0618 18.1936 17.2744C18.1006 17.4871 17.9643 17.678 17.7933 17.8349C17.6222 17.9918 17.4203 18.1112 17.2005 18.1856C16.9806 18.2599 16.7477 18.2875 16.5165 18.2666C13.9522 17.988 11.489 17.1118 9.32486 15.7083C7.31139 14.4289 5.60431 12.7218 4.32486 10.7083C2.91651 8.53432 2.04007 6.05914 1.76653 3.48331C1.7457 3.25287 1.77309 3.02061 1.84695 2.80133C1.9208 2.58205 2.03951 2.38055 2.1955 2.20966C2.3515 2.03877 2.54137 1.90224 2.75302 1.80875C2.96468 1.71526 3.19348 1.66686 3.42486 1.66665H5.92486C6.32928 1.66267 6.72136 1.80588 7.028 2.06959C7.33464 2.3333 7.53493 2.69952 7.59153 3.09998C7.69705 3.90003 7.89274 4.68558 8.17486 5.44165C8.28698 5.73992 8.31125 6.06407 8.24478 6.37571C8.17832 6.68735 8.02392 6.9734 7.79986 7.19998L6.74153 8.25831C7.92783 10.3446 9.65524 12.072 11.7415 13.2583L12.7999 12.2C13.0264 11.9759 13.3125 11.8215 13.6241 11.7551C13.9358 11.6886 14.2599 11.7129 14.5582 11.825C15.3143 12.1071 16.0998 12.3028 16.8999 12.4083C17.3047 12.4654 17.6744 12.6693 17.9386 12.9812C18.2029 13.2931 18.3433 13.6913 18.3332 14.1Z" stroke="#222222" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>
                                <?php if ($phone_1) {
                                ?>
                                    <a href="tel:<?php echo $phone_1; ?>"><?php echo $phone_1; ?> -</a>
                                <?php
                                } ?>
                                
                                <?php if ($phone_2) {
                                ?>
                                    <a href="tel:<?php echo $phone_2; ?>"><?php echo $phone_2; ?></a>
                                <?php
                                } ?>
                            </span>
                        </div>
                    <?php
                    } ?>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Map -->
    <?php if ($map_embeded) {
    ?>
        <div class="lav-contact-map">
            <?php echo $map_embeded; ?>
        </div>
    <?php
    } ?>
</div>
<?php
get_footer();
