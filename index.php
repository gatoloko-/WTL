<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package world transport intl
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="main-loop">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
					<div class="news-div">
						<a href="<?php the_permalink(); ?>"><?php the_title('<h2>', '</h2>') ?></a>
						<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'thumb-feed' ) ); ?>
						<div class="feed-excerpt">
							<?php the_excerpt(); ?>
						</div>
					</div>
				
				
				

			<?php endwhile; ?>
			<div class="paging-navigation">
				<?php world_transport_intl_paging_nav(); ?>
			</div>
			

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<style>
body{
	background: url(<?php echo get_template_directory_uri(); ?>/img/<?php echo rand(1, 6);  ?>.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<?php get_footer(); ?>
