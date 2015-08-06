<?php

/**
 * Class Site258_Assets
 *
 */
final class Site258_Assets
{
    function __plugins_loaded()
    {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ), 5 );
    }

    /**
     * Enqueue styles needed by the current website.
     */
    function enqueue_styles()
    {
        wp_enqueue_style( 'purecss-grids' );
        wp_enqueue_style( 'purecss-grids-responsive' );
    }

}