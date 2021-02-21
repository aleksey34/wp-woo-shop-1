<?php

/**
 * Template Name: Template without sidebar(full width)
 */

get_header();
?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package estore
 */

get_header();

?>

	<!-- banner -->
	<div class="banner banner1">
		<div class="container">
			<h2>Great Offers on <span>Mobiles</span> Flat <i>35% Discount</i></h2>
		</div>
	</div>
	<!-- breadcrumbs -->
<?php
est_breadcrumbs();

?>

	<!-- //breadcrumbs -->
	<!-- mobiles -->
	<div class="mobiles">
		<div class="container">
			<div class="w3ls_mobiles_grids">

				<!--                main block-->
				<div class="col-md-12 w3ls_mobiles_grid_left">

					<?php
					while ( have_posts() ) :
						the_post(); ?>

<?php //if(is_wc_endpoint_url("order-received")) :  // the same
        if(is_order_received_page()) :
                        ?>
<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
 <?php  endif; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="margin-bottom-2 nentry-title text-center">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php estore_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->

	</article><!-- #post-<?php the_ID(); ?> -->
<?php // if(is_wc_endpoint_url("order-received")) : // the same
      if(is_order_received_page()) :
                        ?>
                </div>
            </div>
<?php endif;   ?>
<?php  endwhile; // End of the loop. ?>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>



<?php
get_footer();
?>