<?php
/*
Template Name: WTL Page template
*
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package world transport intl
 */

 
 
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php $bck = get_post_custom_values('background-image'); ?>
				<?php the_title('<h1 class="title-land">', '</h1>'); ?>
				
				<div class="text-page">
					<?php the_content(); ?>
				</div>

				

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
<?php backgroundRender($bck) ?> 