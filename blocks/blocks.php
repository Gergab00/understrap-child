<?php
/**
 * Understrap Child Theme registers a block type. The recommended way is to register a block type using the metadata stored in the block.json file.
 *
 * @package UnderstrapChild
 * @author Gerardo Gonzalez
 * @version 2022.10.12
 * @since 2022.09.26
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
 * 
 * To use the callback function please check the link below.
 * To create the Template, put the file in the Tempaltes folder with the registered name of the block.
 * 
 * @see https://happyprime.co/2021/09/14/using-block-json-to-register-a-custom-gutenberg-block/
 * 
 */
function theme_register_block() {
	foreach ( $understrapchild_blocks as $file ) {
		register_block_type( __DIR__ . $understrapchild_build_dir.$file, array('render_callback' => 'get_render_callback') );
	}
}
add_action( 'init', 'theme_register_block' );

function get_render_callback($attributes) {
	ob_start();
	$name = explode("/", $attributes["name"])[1];
	get_template_part( 'blocks/templates/template', $name, $attributes);
	return ob_get_clean();
}
