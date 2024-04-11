<?php
/**
 * Organic Green Blocks: Block Patterns
 *
 * @since Organic Green Blocks 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Organic Green Blocks 1.0
 *
 * @return void
 */
function organic_green_blocks_register_block_patterns() {
	$block_pattern_categories = array(
		'organic-green-blocks'    => array( 'label' => __( 'Organic Green Blocks', 'organic-green-blocks' ) ),
	);

	$block_pattern_categories = apply_filters( 'organic_green_blocks_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'organic_green_blocks_register_block_patterns', 9 );
