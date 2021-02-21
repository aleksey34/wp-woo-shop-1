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
                <div class="col-md-8 w3ls_mobiles_grid_left">


					<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) :
							?>
                            <header>
                                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                            </header>
						<?php
						endif;

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>


                </div>
                <!--end main block-->

                <!--                sidebar-->
                <div  class="col-md-4 w3ls_mobiles_grid_right">

					<?php get_sidebar();  ?>

                </div>
                <!--endsidebar-->


                <div class="clearfix"> </div>
            </div>
        </div>
    </div>


<?php
get_footer();

