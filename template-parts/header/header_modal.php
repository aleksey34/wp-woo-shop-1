<!-- header modal -->
<?php  if(!is_user_logged_in())  : ?>

	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
	     aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">Don't Wait, Login now!</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Авторизация</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Регистрация</span></li>
									</ul>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">

												<?php wc_get_template("includes/parts/wc-form-login.php");  ?>

											</div>
										</div>
									</div>

									<?php  if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

										<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
											<div class="facts">
												<div class="register">

													<?php  wc_get_template("includes/parts/wc-form-register.php");  ?>

												</div>
											</div>
										</div>

									<?php else: ?>
										<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
											<div class="facts">
												<div class="register">
													<p>
														<?php  esc_html_e("Регистрация запрещена, обратителсь администаратору сайта" , 'estore')  ?>
													</p>
												</div>
											</div>
										</div>

									<?php   endif; ?>

								</div>


							</div>

							<script type="text/javascript">
                                jQuery(document).ready(function ($) {
                                    $('#horizontalTab').easyResponsiveTabs({
                                        type: 'default', //Types: default, vertical, accordion
                                        width: 'auto', //auto or any width like 600px
                                        fit: true   // 100% fit in a container
                                    });
                                });
							</script>

							<div id="OR" class="hidden-xs">ИЛИ</div>
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
								<div class="col-md-12">
									<h3 class="other-nw">Регистрация через соцсети</h3>
								</div>
								<div class="col-md-12">
<!--                                    add registration-->
<!--                                    <a href="http://sitedb2/wp-login.php?loginSocial=facebook" data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="facebook" data-popupwidth="475" data-popupheight="175">-->
<!--                                        <img src="Image url" alt="" />-->
<!--                                    </a>-->
<?php // echo do_shortcode('[miniorange_social_login  shape="square" theme="default" space="4" size="35"]') ; ?>
<?php  echo do_shortcode('[TheChamp-Login title="Login with your Social Account"]') ; ?>
									<ul class="social">
										<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
										<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
										<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
										<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php  endif;  ?>
<!-- header modal -->
