<?php 

/** 
 * Template Part for displaying ACF Flexible Content - Page Section - Full Width Gradient
 */

// get group of left column items (array)
$left_column = get_sub_field('left_column');

// grab content rows from left column group
$left_column_rows = $left_column['rows'];

// should there be a divider between the rows?
$display_divider = $left_column['display_row_divider'];

// get image field (array)
$image_arr = get_sub_field('image');

// break out image array
$image_ID = $image_arr['ID'];
$image_url = $image_arr['url'];
$image_alt = $image_alt['alt'];

// create HTML image
$image = wp_get_attachment_image( $image_ID, 'full', array('src' => $image_url, 'alt' => $image_alt ) );

?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="row">

                    <?php $row_num = 1; ?>
                    <?php foreach($left_column_rows as $row) : ?>

                        <?php $headline_color = $row['headline_color'];  ?>
                        <?php $headline = $row['headline'];  ?>
                        <?php $content = $row['content'];  ?>
                        <?php $button = $row['button'];  ?>
                        <?php $text_class = "text-" . $headline_color; ?>

                        <div class="col-12 py-3">
                            <h2 class="<?= $text_class ?>"><?= $headline ?></h2>
                            <p><?= $content ?></p>
                            <a href="<?= $button['url'] ?>" class="btn btn-primary"><?= $button['title'] ?></a>
                        </div>

                        <?php if($row_num===1 && $display_divider) : ?>
                            <span class="divider"></span>
                        <?php endif; ?>

                        <?php $row_num++ ?>
                    <?php endforeach; ?>

                </div>
            </div>
            <div class="col-md-5 p-3 m-auto">
                <?=  $image ?>
            </div>
        </div><!-- .row -->
    </div>
</section>