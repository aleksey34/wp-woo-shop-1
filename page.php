<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package estore
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
                <div class="col-md-8 w3ls_mobiles_grid_left">



					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
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

