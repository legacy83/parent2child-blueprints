<?php
/**
 * Plugin Name: P2C Lock
 * Plugin URI: https://github.com/trsenna/parent2child-blueprints
 * Description: Protects the current website to be accidentally destroyed.
 *
 * Version: 0.1.0
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 *
 * @package   P2CLock
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2015, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

add_action( 'p2c_back_compat_safe', 'p2c_lock_safe_bootstrap', 5 );

/**
 * Safely turn on the lights
 * ... and bootstrap the plugin
 */
function p2c_lock_safe_bootstrap()
{
    __p2c_run( new P2C_Core_Lock() );
}