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
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

extract( $attributes );

?>

<section <?php echo get_block_wrapper_attributes(['class' => 'my-class']); ?> data-block="example-block">
	<?php esc_html_e( 'Example Block – hello from a understrap-framwork-theme block!', 'understrap-framework-theme' ); ?>
</section>