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

		<section id="page-title" class="bg-gradient py-3">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 offset-1 text-white">
						<?php
						while ( have_posts() ) {
							the_post();
							the_title( '<h1 class="entry-title text-uppercase">', '</h1>' );
							the_content();
					
						}
						?>

					</div>
				</div>
			</div>
		</section>
		

		<div class="row">



		

				

		</div><!-- .row -->
	</div><!-- #content -->
</main><!-- #main -->
<?php
get_footer();
