<?php 

/** 
 * Template Part for displaying ACF Flexible Content - Page Section - Full Width Gradient
 */

// content

$uppercase = get_sub_field('uppercase');
$font_size = get_sub_field('font_size');
$font_family = get_sub_field('font_family');
$content = get_sub_field('content');
$button = get_sub_field('button');


$uppercase ? $transform_class = 'text-uppercase' : $transform_class="";
$font_class = "font-".$font_family;

?>

<section class="bg-gradient">
    <div class="container-fluid mx-5 text-center text-white <?= $font_class ?> <?= $font_size ?>">
        <p class="<?= $transform_class ?>"><?= $content ?></p>
        <a href="<?= $button['url'] ?>" class="btn btn-white"><?= $button['title'] ?></a>
    </div><!-- .container -->
</section>
