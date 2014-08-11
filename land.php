<?php
/*
Template Name: Landing
*/
/**
 *
 * @package world transport intl
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_title('<h1 class="title-land">', '</h1>'); ?>
					<div class="main-land">
						<div class="text-land">
							<?php the_content(); ?>
						</div>
						<div class="icons-land">
							<a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('plane','','wp-content/themes/world-transport-intl/img/icons/plane_on.png',1)">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/plane_off.png" name="plane" />
							</a>
							<a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('ship','','wp-content/themes/world-transport-intl/img/icons/ship_on.png',1)">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/ship_off.png" name="ship" />
							</a>
							<a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('truck','','wp-content/themes/world-transport-intl/img/icons/truck_on.png',1)">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/truck_off.png" name="truck" />
							</a>
							
							<br />
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/courier_off.png" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/mudanza_off.png" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/consolidado_off.png" />
							<br/>
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/wine_off.png" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/club_off.png" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/outsourcing_off.png" />
						</div>
					</div>
					
				

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>