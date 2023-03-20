<?php
//about theme info
add_action( 'admin_menu', 'vw_real_estate_gettingstarted' );
function vw_real_estate_gettingstarted() {    	
	add_theme_page( esc_html__('About VW Real Estate', 'vw-real-estate'), esc_html__('About VW Real Estate', 'vw-real-estate'), 'edit_theme_options', 'vw_real_estate_guide', 'vw_real_estate_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function vw_real_estate_admin_theme_style() {
   wp_enqueue_style('vw-real-estate-custom-admin-style', get_theme_file_uri() . '/inc/getstart/getstart.css');
   wp_enqueue_script('vw-real-estate-tabs', get_theme_file_uri() . '/inc/getstart/js/tab.js');
   wp_enqueue_style( 'font-awesome-css', esc_url(get_theme_file_uri()).'/css/fontawesome-all.css' );
}
add_action('admin_enqueue_scripts', 'vw_real_estate_admin_theme_style');

//guidline for about theme
function vw_real_estate_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'vw-real-estate' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to VW Real Estate Theme', 'vw-real-estate' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-real-estate'); ?></p>
    </div>
    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy VW Real Estate at 20% Discount','vw-real-estate'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','vw-real-estate'); ?> ( <span><?php esc_html_e('vwpro20','vw-real-estate'); ?></span> ) </h4> 
			<div class="info-link">
				<a href="<?php echo esc_url( VW_REAL_ESTATE_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'vw-real-estate' ); ?></a>
			</div>
		</div>
    </div>

    <div class="tab-sec">
		<div class="tab">
			<button class="tablinks" onclick="vw_real_estate_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'vw-real-estate' ); ?></button>
			<button class="tablinks" onclick="vw_real_estate_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'vw-real-estate' ); ?></button>
		  	<button class="tablinks" onclick="vw_real_estate_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'vw-real-estate' ); ?></button>		  
		  	<button class="tablinks" onclick="vw_real_estate_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'vw-real-estate' ); ?></button>
		  	<button class="tablinks" onclick="vw_real_estate_open_tab(event, 'free_pro')"><?php esc_html_e( 'Support', 'vw-real-estate' ); ?></button>
		</div>

		<!-- Tab content -->
		<?php
			$vw_real_estate_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$vw_real_estate_plugin_custom_css ='display: block';
			}
		?>
		<div id="gutenberg_editor" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = VW_Real_Estate_Plugin_Activation_Settings::get_instance();
			$vw_real_estate_actions = $plugin_ins->recommended_actions;
			?>
				<div class="vw-real-estate-recommended-plugins">
				    <div class="vw-real-estate-action-list">
				        <?php if ($vw_real_estate_actions): foreach ($vw_real_estate_actions as $key => $vw_real_estate_actionValue): ?>
				                <div class="vw-real-estate-action" id="<?php echo esc_attr($vw_real_estate_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($vw_real_estate_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_real_estate_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_real_estate_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'vw-real-estate' ); ?></h3>
				<hr class="h3hr">
				<div class="vw-real-estate-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','vw-real-estate'); ?></a>
			    </div>

			    <div class="link-customizer-with-guternberg-ibtana">
					<h3><?php esc_html_e( 'Link to customizer', 'vw-real-estate' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-real-estate'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-networking"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_construction_estate_social_icon_settings') ); ?>" target="_blank"><?php esc_html_e('Social Icons','vw-real-estate'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-real-estate'); ?></a>
							</div>
							
							<div class="row-box2">
								<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_construction_estate_footer_section') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-real-estate'); ?></a>
							</div>
						</div>

						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_construction_estate_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-real-estate'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_construction_estate_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-real-estate'); ?></a>
							</div> 
						</div>
						
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_construction_estate_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-real-estate'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-real-estate'); ?></a>
							</div> 
						</div>
					</div>
				</div>
			<?php } ?>
		</div>

		<div id="block_pattern" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Real_Estate_Plugin_Activation_Settings::get_instance();
				$vw_real_estate_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-real-estate-recommended-plugins">
				    <div class="vw-real-estate-action-list">
				        <?php if ($vw_real_estate_actions): foreach ($vw_real_estate_actions as $key => $vw_real_estate_actionValue): ?>
				                <div class="vw-real-estate-action" id="<?php echo esc_attr($vw_real_estate_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_real_estate_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_real_estate_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_real_estate_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','vw-real-estate'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($vw_real_estate_plugin_custom_css); ?>">
				<div class="block-pattern-img">
				  	<h3><?php esc_html_e( 'Block Patterns', 'vw-real-estate' ); ?></h3>
					<hr class="h3hr">
					<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','vw-real-estate'); ?></p>
	              	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon >> Click Pattern Tab >> Click on homepage sections >> Publish.','vw-real-estate'); ?></span></b></p>
	              	<div class="vw-real-estate-pattern-page">
				    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','vw-real-estate'); ?></a>
				    </div>
	              	<img src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/getstart/images/block-pattern.png" alt="" />	
	            </div>	

	            <div class="block-pattern-link-customizer">
	              	<div class="link-customizer-with-block-pattern">
							<h3><?php esc_html_e( 'Link to customizer', 'vw-real-estate' ); ?></h3>
							<hr class="h3hr">
							<div class="first-row">
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-real-estate'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-networking"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_construction_estate_social_icon_settings') ); ?>" target="_blank"><?php esc_html_e('Social Icons','vw-real-estate'); ?></a>
									</div>
								</div>
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-real-estate'); ?></a>
									</div>
									
									<div class="row-box2">
										<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_construction_estate_footer_section') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-real-estate'); ?></a>
									</div>
								</div>

								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_construction_estate_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-real-estate'); ?></a>
									</div>
									 <div class="row-box2">
										<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_construction_estate_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-real-estate'); ?></a>
									</div> 
								</div>
								
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_construction_estate_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-real-estate'); ?></a>
									</div>
									 <div class="row-box2">
										<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-real-estate'); ?></a>
									</div> 
								</div>
							</div>
					</div>	
				</div>		
	        </div>
		</div>

		<div id="lite_theme" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Real_Estate_Plugin_Activation_Settings::get_instance();
				$vw_real_estate_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-real-estate-recommended-plugins">
				    <div class="vw-real-estate-action-list">
				        <?php if ($vw_real_estate_actions): foreach ($vw_real_estate_actions as $key => $vw_real_estate_actionValue): ?>
				                <div class="vw-real-estate-action" id="<?php echo esc_attr($vw_real_estate_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_real_estate_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_real_estate_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_real_estate_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','vw-real-estate'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($vw_real_estate_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'vw-real-estate' ); ?></h3>
				<hr class="h3hr">
			  	<p><?php esc_html_e('Real estate website needs high-quality standard and fortunately, the free real estate WordPress theme fulfills this condition. You can make an exceptional websites for real estate business or allied construction businesses despite its free nature and above all, it is known for its responsive design. Because of the responsive design, you can open up the website on the small and big screens and also the micro screens. This WP theme has more than one hundred font family options. It has the advance slider with multiple effects and control options apart from enabling disable options on all sections. Because of the WooCommerce compatibility, you can start the online businesses that are directly or indirectly related to real estate. It has multiple inner page templates and an advanced social media feature. It has pre-made content that can be both tweaked as well as personalized. It has the pagination option as well as translation ready option. The free real estate WordPress theme has elegant design that is cleanly coded.','vw-real-estate'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'vw-real-estate' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-real-estate' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_REAL_ESTATE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-real-estate' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'vw-real-estate'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-real-estate'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-real-estate'); ?></a>
					</div>
					<hr>				
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-real-estate'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-real-estate'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_REAL_ESTATE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-real-estate'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'vw-real-estate'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-real-estate'); ?>  </p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_REAL_ESTATE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-real-estate'); ?></a>
					</div>
			  		<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-real-estate' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-real-estate'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_construction_estate_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Section','vw-real-estate'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_construction_estate_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-real-estate'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_construction_estate_footer_section') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-real-estate'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_construction_estate_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-real-estate'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_construction_estate_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-real-estate'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-real-estate'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-real-estate'); ?></a>
								</div> 
							</div>

						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','vw-real-estate'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-real-estate'); ?></p>
	                <ul>
	                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','vw-real-estate'); ?></span><?php esc_html_e(' Go to ','vw-real-estate'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','vw-real-estate'); ?></b></p>

	                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','vw-real-estate'); ?></p>
	                  	<img src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
	                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-real-estate'); ?></span><?php esc_html_e(' Go to ','vw-real-estate'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','vw-real-estate'); ?></b></p>
					  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','vw-real-estate'); ?></p>
	                  	<img src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
	                  	<p><?php esc_html_e(' Once you are done with this, then follow the','vw-real-estate'); ?> <a class="doc-links" href="https://www.vwthemesdemo.com/docs/free-vw-real-estate/" target="_blank"><?php esc_html_e('Documentation','vw-real-estate'); ?></a></p>
	                </ul>
			  	</div>
			</div>
		</div>	

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'vw-real-estate' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('Real estate WordPress theme is a WP theme of premium-level having brand section, product section, Instagram feed and newsletter section. It is good for the real estate companies or the real estate agencies or anything that is directly or indirectly related to the real estate or construction business. It has responsive layout for all devices and you make an exceptional website for the real estate. It has footer widgets and editor-style apart from section reordering and the customizable homepage. WP real estate theme is particularly designed for the professionals of real estate and is good especially for those who want a competitive edge in this business. It is integrated with the latest font awesome and by the end of the day, you are making a user-friendly website. It has advanced colour options and colour pallets. It has the global colour option and is SEO friendly making it go high in search engine ranking.','vw-real-estate'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( VW_REAL_ESTATE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'vw-real-estate'); ?></a>
					<a href="<?php echo esc_url( VW_REAL_ESTATE_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'vw-real-estate'); ?></a>
					<a href="<?php echo esc_url( VW_REAL_ESTATE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'vw-real-estate'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'vw-real-estate' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'vw-real-estate'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'vw-real-estate'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'vw-real-estate'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'vw-real-estate'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'vw-real-estate'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'vw-real-estate'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'vw-real-estate'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'vw-real-estate'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'vw-real-estate'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-real-estate'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-real-estate'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'vw-real-estate'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'vw-real-estate'); ?></td>
								<td class="table-img"><?php esc_html_e('13', 'vw-real-estate'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'vw-real-estate'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'vw-real-estate'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'vw-real-estate'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'vw-real-estate'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'vw-real-estate'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'vw-real-estate'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'vw-real-estate'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( VW_REAL_ESTATE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'vw-real-estate'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'vw-real-estate'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'vw-real-estate'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_REAL_ESTATE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'vw-real-estate'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'vw-real-estate'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'vw-real-estate'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_REAL_ESTATE_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'vw-real-estate'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">		  		
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'vw-real-estate'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'vw-real-estate'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_REAL_ESTATE_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'vw-real-estate'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'vw-real-estate'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'vw-real-estate'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_REAL_ESTATE_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','vw-real-estate'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'vw-real-estate'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'vw-real-estate'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_REAL_ESTATE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'vw-real-estate'); ?></a>
				</div>
		  	</div>
		</div>
	</div>
</div>
<?php } ?>