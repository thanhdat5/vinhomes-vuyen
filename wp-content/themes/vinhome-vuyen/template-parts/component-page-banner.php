<?php

/**
 * The template for displaying "page banner" content in the custom page
 */
[
    'image'  => $image,
    'title'  => $title
] = $args;
?>
<div class="lav-page-banner" style="background-image: url(<?php echo $image; ?>);">
    <div class="container">
        <h1><?php echo $title; ?></h1>
    </div>
</div>