<?php

add_action( 'admin_menu', 'organic_green_blocks_gettingstarted' );
function organic_green_blocks_gettingstarted() {
	add_theme_page( esc_html__('Theme Documentation', 'organic-green-blocks'), esc_html__('Theme Documentation', 'organic-green-blocks'), 'edit_theme_options', 'organic-green-blocks-guide-page', 'organic_green_blocks_guide');
}

function organic_green_blocks_admin_theme_style() {
   wp_enqueue_style('organic-green-blocks-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'organic_green_blocks_admin_theme_style');

if ( ! defined( 'ORGANIC_GREEN_BLOCKS_SUPPORT' ) ) {
define('ORGANIC_GREEN_BLOCKS_SUPPORT',__('https://wordpress.org/support/theme/organic-green-blocks/','organic-green-blocks'));
}
if ( ! defined( 'ORGANIC_GREEN_BLOCKS_REVIEW' ) ) {
define('ORGANIC_GREEN_BLOCKS_REVIEW',__('https://wordpress.org/support/theme/organic-green-blocks/reviews/','organic-green-blocks'));
}
if ( ! defined( 'ORGANIC_GREEN_BLOCKS_LIVE_DEMO' ) ) {
define('ORGANIC_GREEN_BLOCKS_LIVE_DEMO',__('https://www.ovationthemes.com/demos/organic-farm/','organic-green-blocks'));
}
if ( ! defined( 'ORGANIC_GREEN_BLOCKS_BUY_PRO' ) ) {
define('ORGANIC_GREEN_BLOCKS_BUY_PRO',__('https://www.ovationthemes.com/wordpress/organic-farm-wordpress-theme/','organic-green-blocks'));
}
if ( ! defined( 'ORGANIC_GREEN_BLOCKS_PRO_DOC' ) ) {
define('ORGANIC_GREEN_BLOCKS_PRO_DOC',__('https://www.ovationthemes.com/docs/ot-organic-farm-pro-doc/','organic-green-blocks'));
}
if ( ! defined( 'ORGANIC_GREEN_BLOCKS_FREE_DOC' ) ) {
define('ORGANIC_GREEN_BLOCKS_FREE_DOC',__('http://www.ovationthemes.com/docs/ot-organic-farm-free-doc','organic-green-blocks'));
}
if ( ! defined( 'ORGANIC_GREEN_BLOCKS_THEME_NAME' ) ) {
define('ORGANIC_GREEN_BLOCKS_THEME_NAME',__('Premium Organic Green Blocks Theme','organic-green-blocks'));
}

/**
 * Theme Info Page
 */
function organic_green_blocks_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="col-md-10">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'organic-green-blocks'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="col-md-2">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( ORGANIC_GREEN_BLOCKS_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'organic-green-blocks'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( ORGANIC_GREEN_BLOCKS_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'organic-green-blocks'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="container">
			<div class="col-md-9">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','organic-green-blocks'); ?></h3>
					<p><?php $theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','organic-green-blocks'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','organic-green-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','organic-green-blocks'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','organic-green-blocks'); ?></h4>
					<p><?php esc_html_e('To check your website click here','organic-green-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','organic-green-blocks'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','organic-green-blocks'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','organic-green-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( ORGANIC_GREEN_BLOCKS_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','organic-green-blocks'); ?></a>
				</div>
       	</div>
			<div class="col-md-3">
				<h3><?php echo esc_html(ORGANIC_GREEN_BLOCKS_THEME_NAME); ?></h3>
				<img class="organic_green_blocks_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<hr>
			    	<a class="button-primary livedemo" href="<?php echo esc_url( ORGANIC_GREEN_BLOCKS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'organic-green-blocks'); ?></a>
					<a class="button-primary buynow" href="<?php echo esc_url( ORGANIC_GREEN_BLOCKS_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'organic-green-blocks'); ?></a>
					<a class="button-primary docs" href="<?php echo esc_url( ORGANIC_GREEN_BLOCKS_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'organic-green-blocks'); ?></a>
					<hr>
				</div>
				<ul style="padding-top:10px">
					<li class="upsell-organic_green_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'organic-green-blocks');?> </li>                 
					<li class="upsell-organic_green_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'organic-green-blocks');?> </li>
					<li class="upsell-organic_green_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'organic-green-blocks');?> </li>
					<li class="upsell-organic_green_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'organic-green-blocks');?> </li>
					<li class="upsell-organic_green_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'organic-green-blocks');?> </li>
					<li class="upsell-organic_green_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'organic-green-blocks');?> </li>
					<li class="upsell-organic_green_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'organic-green-blocks');?> </li>
					<li class="upsell-organic_green_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'organic-green-blocks');?> </li>
					<li class="upsell-organic_green_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'organic-green-blocks');?> </li>
					<li class="upsell-organic_green_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'organic-green-blocks');?> </li>
					<li class="upsell-organic_green_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'organic-green-blocks');?> </li>
					<li class="upsell-organic_green_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'organic-green-blocks');?> </li>
					<li class="upsell-organic_green_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'organic-green-blocks');?> </li>
               <li class="upsell-organic_green_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'organic-green-blocks');?> </li>
            </ul>
        	</div>
		</div>
	</div>

<?php }?>