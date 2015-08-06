<?php
/**
 * Plugin Name: P2C Core
 * Plugin URI: https://github.com/trsenna/parent2child-blueprints
 * Description: All the core functionality needed to build an amazing website.
 *
 * Version: 0.1.0
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 *
 * @package   P2CCore
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2015, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

// must be the last plugin to be activated
add_filter( 'pre_update_option_active_plugins', 'p2c_core_activated_last', 99 );
add_filter( 'pre_update_site_option_active_sitewide_plugins', 'p2c_core_activated_last', 99 );

// safely bootstrap the plugin
add_action( 'p2c_back_compat_safe', 'p2c_core_safe_includes', 3 );
add_action( 'p2c_back_compat_safe', 'p2c_core_safe_bootstrap', 3 );

/**
 * Plugin must be the last one to be activated.
 *
 * @param array $active_plugins
 *
 * @return array
 */
function p2c_core_activated_last( array $active_plugins )
{
    $basename = plugin_basename( __FILE__ );
    $key = array_search( $basename, $active_plugins );

    if ( FALSE !== $key ) {
        array_splice( $active_plugins, $key, 1 );
        array_push( $active_plugins, $basename );
    }

    return array_unique( $active_plugins );
}

/**
 * Safely continues
 * ... with the includes needed by the plugin
 */
function p2c_core_safe_includes()
{
    require_once( 'includes/class-p2c-core-jetpack-friendly.php' );
}

/**
 * Safely continues
 * ... with the plugin bootstrap
 */
function p2c_core_safe_bootstrap()
{
    __p2c_run( new P2C_Core_Jetpack_Friendly() );
}

/*
 * Turn on the lights
 * ... and bootstrap the plugin
 */

require_once( 'base/p2c-bootstrap.php' );
require_once( 'base/class-p2c-back-compat.php' );
__p2c_run( new P2C_Back_Compat() );