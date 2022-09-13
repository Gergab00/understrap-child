<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package UnderstrapChild
 * @author Gerardo Gonzalez
 * @version 2022.09.13
 * @since 2022.09.13
 * @see https://developer.wordpress.org/reference/functions/get_post_galleries/
 * 
 *
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

add_filter('the_content', 'filter_the_content');

/**
 * Undocumented function
 *
 * @param [type] $content
 * @return void
 * @see https://developer.wordpress.org/reference/hooks/the_content/
 */
function filter_the_content( $content )
{
    //Add your code here to modify the content output.


    return $content;
}

add_filter('wp_trim_excerpt', 'understrap_all_excerpts_get_more_link');

/**
 * Undocumented function
 *
 * @param [type] $post_exceprt
 * @return void
 * @see https://developer.wordpress.org/reference/functions/wp_trim_excerpt/
 * 
 */
function filter_the_excerpt( $post_exceprt ) 
{
    // Add your code here to modify the excerpt output.

    return $post_exceprt;
}
