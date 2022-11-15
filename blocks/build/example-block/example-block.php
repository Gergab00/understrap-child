<?php
/**
 * 
 * 
 * @author the Understrap Contributors
 * @version 1.1.0
 * @since 1.1.0
 * @package understrap-framework-theme
 * 
 */

 /**
  * copy this line into block.php -> require __DIR__.'/build/example-block/example-block.php';
  */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class ExampleBlock {

    /**
	 * Constructor
	 */
	public function init() {
		add_action( 'init', array( get_called_class(), 'registrer' ) );
	}

    public function registrer()
    {
        register_block_type(
            get_theme_file_path('blocks/build/example-block'),
            array(
                /**
                 * Render callback function.
                 *
                 * @param array    $attributes The block attributes.
                 * @param string   $content    The block content.
                 * @param WP_Block $block      Block instance.
                 *
                 * @return string The rendered output.
                 */
                'render_callback' => function ($attributes, $content, $block) {
                    ob_start();
                    require_once get_theme_file_path('blocks/build/example-block/render.php');
                    return ob_get_clean();
                },
            ));
    }

}

ExampleBlock::init();