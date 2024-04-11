<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function organic_green_blocks_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'WooCommerce', 'organic-green-blocks' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	organic_green_blocks_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'organic_green_blocks_register_recommended_plugins' );