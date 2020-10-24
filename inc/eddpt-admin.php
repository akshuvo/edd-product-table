<?php

function eddpt_admin_settings_page(){
		?>
	    <div id="amadmin-dashboard" class="wrap amadmin-wrap">
			<div class="welcome-head am-clearfix">
			    <div class="am-row">
			        <div class="am-col-sm-9">
			            <h1><?php esc_html_e( 'Easy Digital Downloads Product Table', 'eddpt' ); ?></h1>
			            <div class="am-welcome">
			                <!-- <p> -->
			                <strong><?php esc_html_e( 'Easy Digital Downloads Product Table', 'eddpt' ); ?></strong> - <?php esc_html_e( 'Build product table easily', 'eddpt' ); ?><span><a href="" target="_blank"> <?php esc_html_e( 'Rate the plugin ★★★★★', 'eddpt' ); ?></a></span>
			                <!-- </p> -->
			            </div>
			        </div>
			        <div class="am-col-sm-3">
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
									<!--<li><a href="#pro"><?php echo esc_html__('Pro','eddpt'); ?></a></li>-->
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
															<p><?php esc_html_e( 'Use this shortcode anywhere in pages', 'eddpt' ); ?> <code>[eddpt]</code></p>
															<p><?php esc_html_e( 'Use this code in your theme/plugin', 'eddpt' ); ?> <code>&lt;?php echo do_shortcode('[eddpt]'); ?&gt;</code></p>
														</div>

														<h4><?php esc_html_e( 'Hide table header', 'eddpt' ); ?></h4>
														<div class="am-content">
															<code>[eddpt thead=false]</code>
														</div>

														<h4><?php esc_html_e( 'Hide table footer', 'eddpt' ); ?></h4>
														<div class="am-content">
															<code>[eddpt tfoot=false]</code>
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
															<a href="#" target="_blank" class="am-main-btn"><?php esc_html_e( 'Support Forum', 'eddpt' ); ?></a>
															<a href="https://github.com/akshuvo/eddpt" target="_blank" class="am-main-btn"><?php esc_html_e( 'Github', 'eddpt' ); ?></a>
														</div>
													</div>
												</div>
											</div>


										</div>

									</div>
									<!-- End general tab -->
									<!-- Start pro tab --
									<div id="pro" class="am-tab-content">
										<div class="am-row">
											<div class="am-col-sm-12">
												<div class="am-minibox addons-box">

												</div>
											</div>
										</div>
									</div>
									-- End addons tab -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	    </div>

	    <?php
}