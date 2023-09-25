<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

function add_admin_item_to_nav_menu( $items, $args ) {
    if (is_user_logged_in()) {
        $items .= '<li id="menu-item-2" class="menu-item"><a href="'.admin_url().'">Admin</a></li>';
    }
    return $items;
}

add_filter( 'wp_nav_menu_items', 'add_admin_item_to_nav_menu', 10, 2);
// END ENQUEUE PARENT ACTION
