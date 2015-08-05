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

/**
 * Safely disallow
 * ... accidental file changes
 */
function p2c_lock_disallow_file_changes()
{
    defined( 'DISALLOW_FILE_EDIT' ) or define( 'DISALLOW_FILE_EDIT', TRUE );
    defined( 'DISALLOW_FILE_MODS' ) or define( 'DISALLOW_FILE_MODS', TRUE );
}

/*
 * Turn on the lights
 * ... and bootstrap the plugin
 */

p2c_lock_disallow_file_changes();