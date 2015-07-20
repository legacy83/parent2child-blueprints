<?php

/**
 * Class Site258_PureCSS
 *
 */
final class Site258_PureCSS
{
    function __loaded()
    {
        add_action( 'wp_enqueue_scripts', array( $this, 'register_styles' ), 0 );
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ), 5 );
    }

    /**
     * Register Styles
     */
    function register_styles()
    {
        $pureCDN = trailingslashit( 'http://yui.yahooapis.com/pure/0.6.0' );
        wp_register_style( 'purecss-base', "{$pureCDN}base-min.css" );
        wp_register_style( 'purecss-buttons', "{$pureCDN}buttons-min.css" );
        wp_register_style( 'purecss-forms', "{$pureCDN}forms-min.css" );
        wp_register_style( 'purecss-forms-nr', "{$pureCDN}forms-nr-min.css" );
        wp_register_style( 'purecss-grids', "{$pureCDN}grids-min.css" );
        wp_register_style( 'purecss-grids-responsive', "{$pureCDN}grids-responsive-min.css" );
        wp_register_style( 'purecss-menus', "{$pureCDN}menus-min.css" );
        wp_register_style( 'purecss-menus-nr', "{$pureCDN}menus-nr-min.css" );
        wp_register_style( 'purecss-tables', "{$pureCDN}tables-min.css" );
    }

    /**
     * Enqueue Styles
     */
    function enqueue_styles()
    {
        wp_enqueue_style( 'purecss-grids' );
        wp_enqueue_style( 'purecss-grids-responsive' );
    }

}