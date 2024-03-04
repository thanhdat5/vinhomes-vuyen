<?php
/**
 * The template for displaying "contact form" content
 */
$contact_form_shortcode = get_theme_mod('lav_contact_form_shortcode', '');
$contact_form_image = get_theme_mod('lav_contact_image', '');
?>
<div class="lav-sect-contact">
	<div class="lav-sect-contact-bg" style="background-image: url(<?php echo $contact_form_image;?>);"></div>
    <div class="lav-sect-contact-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <?php echo do_shortcode( $contact_form_shortcode) ?>
                </div>
            </div>
        </div>
    </div>
</div>