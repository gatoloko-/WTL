<?php
/*
Template Name: WTL Courier Page template
*
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package world transport intl
 */

 
$fuel = get_post_custom_values('fuel');
$mes = get_post_custom_values('mes');
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php $bck = get_post_custom_values('background-image'); ?>
				<?php the_title('<h1 class="title-land">', '</h1>'); ?>
				
				<div class="text-page-courier">
					<?php the_content(); ?>
				</div>
				<div class="fuel">
					<span style="font-size: 60px; line-height: 60px;">FUEL PARA <?php echo $mes[0];?> </span><br/>
					<span>El fuel para el mes de <?php echo $mes[0];?> equivale al <?php echo $fuel[0]; ?>%</span>
					
				</div>
				<a href="http://190.196.17.212:8080/wtcourier/validar.asp">
					<div class="fuel">
						<span style="font-size: 60px; line-height: 60px;">GUIAS Y TRACKING</span><br/>
						<span>Cree sus guias de despacho y monitoree el estado de sus envios haciendo click aqui.</span>
					</div>
				</a>
				

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
<?php backgroundRender($bck) ?> 