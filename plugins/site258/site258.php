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

require_once( 'functionality/site258-bootstrap.php' );
require_once( 'functionality/includes/class-site258-back-compat.php' );
__site258_run( $back_compatiblity = new Site258_Back_Compat() );

/**
 *
 */

if ( $back_compatiblity->safe() ) {

    require_once( 'functionality/site258-functions.php' );
    require_once( 'functionality/includes/class-site258-clip.php' );

    /*
     * load the embedded theme-directory
     */

    require_once( 'themes/class-site258-theme-directory.php' );
    __site258_run( new Site258_Theme_Directory() );

    /*
     * load the backend functionality
     */

    require_once( 'functionality/backend/class-site258-jetpack-friendly.php' );
    __site258_run( new Site258_Jetpack_Friendly() );

    require_once( 'functionality/backend/class-site258-pluginception-driven.php' );
    __site258_run( new Site258_Pluginception_Driven() );

    /*
     * load the public functionality
     */

    require_once( 'functionality/public/class-site258-no-comments.php' );
    __site258_loaded( new Site258_No_Comments() );

    require_once( 'functionality/public/class-site258-purecss.php' );
    __site258_loaded( new Site258_PureCSS() );

    require_once( 'functionality/public/class-site258-shortcodes.php' );
    __site258_loaded( new Site258_Shortcodes() );

}
