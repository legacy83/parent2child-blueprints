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

/*
 * Turn on the lights
 * ... and bootstrap the functionality plugin
 */

require_once( 'includes/p2c-core-bootstrap.php' );
require_once( 'includes/class-p2c-core-back-compat.php' );
__p2c_run( new P2C_Core_Back_Compat() );