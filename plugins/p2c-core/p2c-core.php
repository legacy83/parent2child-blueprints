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

add_action( 'p2c_back_compat_safe', 'p2c_core_safe_includes' );
add_action( 'p2c_back_compat_safe', 'p2c_core_safe_bootstrap' );

/**
 * Safely continues
 * ... with the includes needed by the plugin
 */
function p2c_core_safe_includes()
{
    require_once( 'includes/class-p2c-core-friendly.php' );
}

/**
 * Safely continues
 * ... with the plugin bootstrap
 */
function p2c_core_safe_bootstrap()
{
    __p2c_run( new P2C_Core_Friendly() );
}

/*
 * Turn on the lights
 * ... and bootstrap the plugin
 */

require_once( 'base/p2c-bootstrap.php' );
require_once( 'base/class-p2c-back-compat.php' );
__p2c_run( new P2C_Back_Compat() );