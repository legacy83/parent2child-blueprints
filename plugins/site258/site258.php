<?php
/**
 * Plugin Name: Site258 Functionality
 * Plugin URI:   https://github.com/trsenna/parent2child-blueprints
 * Description: All functionality needed by the Site258 website.
 *
 * Version: 0.1.0
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 *
 * @package   Site258
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2015, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

ini_set( 'display_errors', 1 );

add_action( 'p2c_back_compat_safe', 'site258_safe_includes' );
add_action( 'p2c_back_compat_safe', 'site258_safe_bootstrap' );

/**
 * Safely continues
 * ... with the includes needed by the functionality plugin
 */
function site258_safe_includes()
{
    require_once( 'functionality/public/class-site258-assets.php' );
    require_once( 'functionality/public/class-site258-shortcodes.php' );
}

/**
 * Safely continues
 * ... with the functionality plugin bootstrap
 */
function site258_safe_bootstrap()
{
    register_theme_directory( dirname( __FILE__ ) . '/themes' );

    __p2c_plugins_loaded( new P2C_Core_No_Comments() );
    __p2c_plugins_loaded( new P2C_Core_PureCSS() );
    __p2c_plugins_loaded( new Site258_Assets() );
    __p2c_plugins_loaded( new Site258_Shortcodes() );
}