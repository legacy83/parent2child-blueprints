<?php

/**
 * Class P2C_Core_No_Comments
 *
 */
final class P2C_Core_No_Comments
{
    function __plugins_loaded()
    {
        add_action( 'init', array( $this, 'init' ) );
    }

    /**
     * The init hook
     * ... and disallow pings and comments.
     */
    function init()
    {
        add_filter( 'comments_open', '__return_false' );
        add_filter( 'pings_open', '__return_false' );
    }
}