<?php
/**
 * Understrap Child Theme registers a block type. The recommended way is to register a block type using the metadata stored in the block.json file.
 *
 * @package UnderstrapChild
 * @author Gerardo Gonzalez
 * @version 2022.09.26
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrapchild_build_dir = '/build/';

$understrapchild_blocks = array(
	'some-one'
);

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function theme_register_block() {
	foreach ( $understrapchild_blocks as $file ) {
		register_block_type( __DIR__ . $understrapchild_build_dir.$file );
	}
}
add_action( 'init', 'theme_register_block' );
