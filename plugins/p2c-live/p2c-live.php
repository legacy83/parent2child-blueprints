<?php
/**
 * Plugin Name: P2C Live
 * Plugin URI: https://github.com/trsenna/parent2child-blueprints
 * Description: Makes your amazing website ready to be live!!!
 *
 * Version: 0.1.0
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 *
 * @package   P2CLive
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2015, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

add_action( 'p2c_back_compat_safe', 'p2c_live_disallow_file_changes', 0 );

/**
 * Safely disallow
 * ... accidental file changes
 */
function p2c_live_disallow_file_changes()
{
    defined( 'DISALLOW_FILE_EDIT' ) or define( 'DISALLOW_FILE_EDIT', TRUE );
    defined( 'DISALLOW_FILE_MODS' ) or define( 'DISALLOW_FILE_MODS', TRUE );
}