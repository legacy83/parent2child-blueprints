<?php

/**
 * Class Site258_No_Comments
 *
 */
final class Site258_No_Comments
{
    function __loaded()
    {
        add_action( 'init', array( $this, 'init' ) );
    }

    /**
     * Init
     */
    function init()
    {
        add_filter( 'comments_open', '__return_false' );
        add_filter( 'pings_open', '__return_false' );
    }
}