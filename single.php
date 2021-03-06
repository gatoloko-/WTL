<?php
/**
 * The template for displaying all single posts.
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
<style>
body{
	background: url(<?php echo get_template_directory_uri(); ?>/img/<?php echo rand(1, 6)  ?>.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>