<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>
<main class="site-main" id="main">
	<div id="content" tabindex="-1">
		
		<!-- hero section to be built in homepage options -->
		<section id="homepage-hero" class="py-1">
			<img class="img-fluid w-100" src="/wp-content/uploads/2022/08/homepage-hero-lg.png" alt="">
		</section>
		<!-- end hero section -->

		<?php get_template_part('template-parts/acf','main'); ?>


	</div><!-- #content -->
</main><!-- #main -->
<?php
get_footer();
