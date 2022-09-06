<?php 

/** 
 * Template Part for displaying ACF Flexible Content - Page Section - Full Width Gradient
 */


// get image field in array format
$image_arr = get_sub_field('image');

// break out image array
$image_ID = $image_arr['ID'];
$image_url = $image_arr['url'];
$image_alt = $image_alt['alt'];

// create HTML image
$image = wp_get_attachment_image( $image_ID, 'full', array('src' => $image_url, 'alt' => $image_alt ) );


$headline_color = get_sub_field('headline_color');
$headline = get_sub_field('headline');
$content = get_sub_field('content');
$button = get_sub_field('button');

$text_class = "text-" . $headline_color;

?>

<section>
    <div class="container py-3">
        <div class="row">
            <div class="col-md-6">
                <?= $image ?>
            </div>
            <div class="col-md-6 text-start m-auto">
                <h2 class="<?= $text_class ?>"><?= $headline ?></h2>
                <p><?= $content ?></p>
                <a href="<?= $button['url'] ?>" class="btn btn-primary"><?= $button['title'] ?></a>
            </div>
        </div><!-- .row -->
    </div>
</section>