<!-- header -->
<div class="header" id="home1">
	<div class="container padding-left-null">
		<div class="w3l_login">
			<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
		</div>
		<?php
		$crb_logo_id = carbon_get_theme_option("est_header_logo");
		$crb_logo =  $crb_logo_id ? wp_get_attachment_image_src($crb_logo_id  , 'full')  : "";
		?>
		<div class="w3l_logo">
			<?php
			if(  carbon_get_theme_option("est_header_logic") === "no"):
				?>


				<?php  if(is_home() && is_front_page()):  ?>
				<h1 class="logo-title">


					<a>
						<?php  $site_name = carbon_get_theme_option("est_header_site_name");
						echo    $site_name ? $site_name : "Electronic Store";  ?>
						<span>
                            <?php
                            $site_desc =  carbon_get_theme_option("est_header_site_desc");
                            echo     $site_desc ? $site_desc  : "Your stores. Your place." ; ?>
                        </span>
					</a>
				</h1>
			<?php   else: ?>

				<h1 class="logo-title">
					<a href="<?php echo home_url("/") ; ?>">
						<?php  $site_name = carbon_get_theme_option("est_header_site_name");
						echo    $site_name ? $site_name : "Electronic Store";  ?>
						<span>
                            <?php
                            $site_desc =  carbon_get_theme_option("est_header_site_desc");
                            echo     $site_desc ? $site_desc  : "Your stores. Your place." ;

                            ?>
                        </span>
					</a>
				</h1>

			<?php  endif ;  ?>


			<?php elseif(carbon_get_theme_option("est_header_logic") === "yes") :   ?>

				<?php if(is_home() && is_front_page()) :  ?>
					<div style="width: 100px ; height: 50px;">
						<img width="100" height="50" class="img-fluid" src="<?php echo $crb_logo[0] ;  ?>" alt="logo">
					</div>
				<?php  else :  ?>
					<div style="width: 100px ; height: 50px;">
						<a href="<?php echo  home_url('/'); ?>">
							<img width="100" height="50" class="img-fluid" src="<?php echo $crb_logo[0] ;  ?>" alt="logo">
						</a>
					</div>
				<?php endif;  ?>

			<?php endif;  ?>
		</div>

		<div class="search">

			<input class="search_box" type="checkbox" id="search_box">
			<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>


			<div class="search_form">
				<form action="<?php echo home_url('/') ; ?>" method="POST" role="search">
					<input  type="text"  autocomplete="off"  value="<?php  get_search_query(true) ?>" name="s">
					<input  type="submit" class="search-submit"  value="Send">

					<div id="searchResult"></div>
                    <div class="text-muted" id="searchResultClose">Ищем...</div>

				</form>
			</div>

		</div>



		<div class="cart cart box_1">
			<?php  estore_woocommerce_cart_link() ; ?>
            <div class="mini-cart-content">
                <?php
                the_widget("WC_Widget_Cart", "title=");
                ?>
            </div>
		</div>
	</div>
</div>
<!-- //header -->