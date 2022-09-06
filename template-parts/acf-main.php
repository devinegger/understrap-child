<?php 

/** 
 * Template part for displaying all ACF Templates on any page
 */

 if (have_rows('page_section')) :
    while (have_rows('page_section')) : the_row();

        // Full Width Gradient
        if (get_row_layout() == 'full_width_gradient') :
            get_template_part('template-parts/acf','full-width-gradient');
        endif;

        // Left Right Image Content
        if (get_row_layout() == 'left_right_image_content') :
            get_template_part('template-parts/acf','left-right-image-content');
        endif;

        // Left Right Image Content
        if (get_row_layout() == 'column_rows_image_right') :
            get_template_part('template-parts/acf','column-rows-image-right');
        endif;




        // Divider
        if (get_row_layout() == 'divider') :
            get_template_part('template-parts/acf','divider');
        endif;

    endwhile;
 endif;