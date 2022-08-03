<?php
/**
 * 
 * Child Theme Customizer.
 * 
 * @package UnderstrapChild
 * @author Gerardo Gonzalez
 * @version 2022.08.03
 * @since 2022.07.28
 * 
 */

if ( ! function_exists( 'child_theme_customize_register' ) ) {
	/**
	 * Register individual settings through customizer's API.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer reference.
	 * @see https://developer.wordpress.org/themes/customize-api/
	 */
	function child_theme_customize_register( $wp_customize ) {
		//Add you Customizer code in here

    }

    add_action( 'customize_register', 'child_theme_customize_register' );
}// End of if function_exists( 'reeferdispatch_theme_customize_register' ).