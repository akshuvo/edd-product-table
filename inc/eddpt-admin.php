<?php
/**
 * Setting Page
 */
function eddpt_admin_settings_page(){
	?>
	<div id="amadmin-dashboard" class="wrap amadmin-wrap">
		<div class="welcome-head am-clearfix">
		    <div class="am-row">
		        <div class="am-col-sm-9">
		            <h1><?php esc_html_e( 'Easy Digital Downloads Product Table', 'eddpt' ); ?></h1>
		            <div class="am-welcome">
		                <!-- <p> -->
		                <strong><?php esc_html_e( 'Easy Digital Downloads Product Table', 'eddpt' ); ?></strong> - <?php esc_html_e( 'Build product table easily', 'eddpt' ); ?><span><a href="https://wordpress.org/support/plugin/edd-product-table/reviews/#new-post" target="_blank"> <?php esc_html_e( 'Rate the plugin ★★★★★', 'eddpt' ); ?></a></span>
		                <!-- </p> -->
		            </div>
		        </div>
		        <div class="am-col-sm-3">
		        	<img width="80" src="https://ps.w.org/edd-product-table/assets/icon-256x256.png">
		            <span class="am-theme-version"><?php esc_html_e( 'Version', 'eddpt' ); ?> <?php echo esc_html( EDDPT_PLUGIN_VERSION ); ?></span>
		        </div>
		    </div>
		</div>
		<div class="am-tab-container-wrap am-clearfix">
			<div class="am-row">
				<div class="am-col-sm-12">
					<div class="am-clearfix amsetting-wrap">
						<div class="am-box-head">
							<ul class="am-tab-nav">
								<li class="active"><a href="#general"><?php echo esc_html__('General','eddpt'); ?></a></li>
								<li><a href="#shortcodes"><?php echo esc_html__('Shortcodes Generator','eddpt'); ?></a></li>
								<!--<li><a href="#pro"><?php echo esc_html__('Free vs Pro','eddpt'); ?></a></li>-->
							</ul>
						</div>
						<div class="am-box-content am-box">
							<div class="am-tab-container">
								<!-- Start general tab -->
								<div id="general" class="am-tab-content active">
									<div class="am-row">

										<div class="am-col-sm-6">
											<div class="am-minibox">
												<div class="am-content-area">
													<h4><?php esc_html_e( 'Default Shortcode', 'eddpt' ); ?></h4>
													<div class="am-content">

														<p><?php esc_html_e( 'Use this shortcode anywhere in pages', 'eddpt' ); ?> <input type="text" value="[eddpt]" readonly="readonly"></p>

														<p><?php esc_html_e( 'Use this code in your theme/plugin', 'eddpt' ); ?> <input type="text" value="<?php echo esc_attr("<?php echo do_shortcode('[eddpt]'); ?>"); ?>" readonly="readonly" style=" width: 275px; "></p>

													</div>

													<h4><?php esc_html_e( 'Hide table header', 'eddpt' ); ?></h4>
													<div class="am-content">
														<input type="text" value="[eddpt thead=false]" readonly="readonly">
													</div>

													<h4><?php esc_html_e( 'Hide table footer', 'eddpt' ); ?></h4>
													<div class="am-content">
														<input type="text" value="[eddpt tfoot=false]" readonly="readonly">
													</div>

													<h4><?php esc_html_e( 'Hide table column', 'eddpt' ); ?></h4>
													<div class="am-content">
														<input type="text" value="[eddpt hidecol=thumbnail,content,title,price,cart]" readonly="readonly" style=" width: 100%; ">
														<p><?php esc_html_e( '(For hide any column use the column key in shortcode like this.)', 'eddpt' ); ?>)</p>
													</div>
												</div>
											</div>
										</div>

										<div class="am-col-sm-6">
											<div class="am-minibox">
												<div class="icon-area">
													<img src="<?php echo EDDPT_PLUGIN_URL . '/assets/admin/img/support.svg'; ?>" alt="">
												</div>
												<div class="am-content-area">
													<h4><?php esc_html_e( 'Any Help Needed?', 'eddpt' ); ?></h4>
													<div class="am-content">
														<p><?php echo __( 'Are you stuck with something? or Do you need any <strong>Custom Functions</strong> to be added? Just let us know', 'eddpt' ); ?></p>
													</div>

													<div class="am-btn-group">
														<a href="https://wordpress.org/support/plugin/edd-product-table/" target="_blank" class="am-main-btn"><?php esc_html_e( 'Support Forum', 'eddpt' ); ?></a>
														<a href="https://github.com/akshuvo/edd-product-table" target="_blank" class="am-main-btn"><?php esc_html_e( 'Github', 'eddpt' ); ?></a>
													</div>
												</div>
											</div>
										</div>


									</div>

								</div>
								<!-- End general tab -->

								<!-- Start shortcode generator tab -->
								<div id="shortcodes" class="am-tab-content">
									<div class="am-row">
										<div class="am-col-sm-12">
											<div class="am-minibox addons-box">
												Coming Soon
											</div>
										</div>
									</div>
								</div>
								<!-- End shortcode generator tab -->

								<!-- Start pro tab -->
								<div id="pro" class="am-tab-content">
									<div class="am-row">
										<div class="am-col-sm-12">
											<div class="am-minibox addons-box">

											</div>
										</div>
									</div>
								</div>
								<!-- End addons tab -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
}