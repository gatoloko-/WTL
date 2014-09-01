<?php
/*
Template Name: Landing
*/
/**
 *
 * @package world transport intl
 */

get_header(); ?>
<style>
body{
	background: url(<?php echo get_template_directory_uri(); ?>/img/<?echo rand(1, 6); ?>.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_title('<h1 class="title-land">', '</h1>'); ?>
					<div class="main-land">
						<div class="text-land">
							<?php the_content(); ?>
						</div>
						<div class="icons-land">
							<a href="carga-aerea" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('plane','','wp-content/themes/world-transport-intl/img/icons/plane_on.png',1)">
								<img class="icon-image" src="<?php echo get_template_directory_uri(); ?>/img/icons/plane_off.png" name="plane" /></a>
							<a href="carga-maritima" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('ship','','wp-content/themes/world-transport-intl/img/icons/ship_on.png',1)">
								<img class="icon-image" src="<?php echo get_template_directory_uri(); ?>/img/icons/ship_off.png" name="ship" /></a>
							<a href="carga-terrestre" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('truck','','wp-content/themes/world-transport-intl/img/icons/truck_on.png',1)">
								<img class="icon-image" src="<?php echo get_template_directory_uri(); ?>/img/icons/truck_off.png" name="truck" /></a>
							<a href="carga-proyecto" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('cargap','','wp-content/themes/world-transport-intl/img/icons/carga_proyecto_on.png',1)">
								<img class="icon-image" src="<?php echo get_template_directory_uri(); ?>/img/icons/carga_proyecto_off.png" name="cargap" /></a>
							<a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('courier','','wp-content/themes/world-transport-intl/img/icons/courier_on.png',1)">
								<img class="icon-image" src="<?php echo get_template_directory_uri(); ?>/img/icons/courier_off.png" name="courier" /></a>
							<br />	
							<a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('mudanza','','wp-content/themes/world-transport-intl/img/icons/mudanza_on.png',1)">
								<img class="icon-image" src="<?php echo get_template_directory_uri(); ?>/img/icons/mudanza_off.png" name="mudanza"/></a>
							<a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('consolidado','','wp-content/themes/world-transport-intl/img/icons/consolidado_on.png',1)">
								<img class="icon-image" src="<?php echo get_template_directory_uri(); ?>/img/icons/consolidado_off.png" name="consolidado" /></a>
							<a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('wine','','wp-content/themes/world-transport-intl/img/icons/wine_on.png',1)">
								<img class="icon-image" src="<?php echo get_template_directory_uri(); ?>/img/icons/wine_off.png" name="wine" /></a>
							<a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('club','','wp-content/themes/world-transport-intl/img/icons/club_on.png',1)">
								<img class="icon-image" src="<?php echo get_template_directory_uri(); ?>/img/icons/club_off.png" name="club" /></a>
							<a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('outsourcing','','wp-content/themes/world-transport-intl/img/icons/outsourcing_on.png',1)">
								<img class="icon-image" src="<?php echo get_template_directory_uri(); ?>/img/icons/outsourcing_off.png" name="outsourcing" /></a>
							
						</div>
					</div>
					
				

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>