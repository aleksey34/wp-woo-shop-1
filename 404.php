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
<?php
est_breadcrumbs();

?>
    <!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>Products</li>
            </ul>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- mobiles -->
    <div class="mobiles">
        <div class="container">
            <div class="w3ls_mobiles_grids">

                <!--                main block-->
                <div class="col-md-8 w3ls_mobiles_grid_left">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'estore' ); ?></h1>


                    <div class="container ">
                        <form role="search" method="get" class="search-form" action="<?php echo home_url("/"); ?>">
                            <label>
                                <span class="screen-reader-text">Найти:</span>
                                <input type="search" class="search-field" placeholder="Поиск…" value="" name="s">
                            </label>
                            <input type="submit" class="search-submit" value="Поиск">
                        </form>
                    </div>
                </div>


                <!--end main block-->

                <!--                sidebar-->
                <div  class="col-md-4 w3ls_mobiles_grid_right error-404 not-found">

					<?php get_sidebar();  ?>

                </div>
                <!--endsidebar-->


                <div class="clearfix"> </div>
            </div>
        </div>
    </div>


<?php
get_footer();


