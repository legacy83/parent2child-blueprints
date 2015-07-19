<?php
/**
 * Plugin Name: Site258 Functionality
 * Plugin URI:   https://github.com/trsenna/parent2child-blueprints
 * Description: Environment and all functionality needed by the Site258 website.
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

require_once( 'functionality/site258-functions.php' );

if ( site258_minimal_php() ) {

    require_once( 'functionality/site258-bootstrap.php' );

    // --------------------------------------------
    // theme-directory
    // --------------------------------------------

    require_once( 'themes/class-site258-theme-directory.php' );
    __site258_run( new Site258_Theme_Directory() );

    // --------------------------------------------
    // load backend
    // --------------------------------------------

//    require_once( 'functionality/backend/class-td251-jetpack-friendly.php' );
//    require_once( 'functionality/backend/class-td251-options.php' );
//    require_once( 'functionality/backend/class-td251-pluginception-driven.php' );
//    require_once( 'functionality/backend/class-td251-section-piwik.php' );

    // --------------------------------------------
    // load public
    // --------------------------------------------

//    require_once( 'functionality/public/class-td251-no-comments.php' );
//    require_once( 'functionality/public/class-td251-piwik.php' );

}
