<?php

/**
 * Class Genesis21
 *
 */
final class Genesis21
{
    function __setup()
    {
        //* Add HTML5 markup structure
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ) );

        //* Add viewport meta tag for mobile browsers
        add_theme_support( 'genesis-responsive-viewport' );

        //* Add support for 3-column footer widgets
        add_theme_support( 'genesis-footer-widgets', 3 );

        //* Do the cleanup
        $this->cleanup();
    }

    /**
     * Do the cleanup
     */
    function cleanup()
    {
        //* Unregister secondary sidebar
        unregister_sidebar( 'sidebar-alt' );

        //* Unregister not needed layouts
        genesis_unregister_layout( 'content-sidebar-sidebar' );
        genesis_unregister_layout( 'sidebar-sidebar-content' );
        genesis_unregister_layout( 'sidebar-content-sidebar' );
    }

    /**
     * Turn on the lights
     * ... and bootstrap the theme
     *
     * @param array $hookable
     * @param int   $priority
     */
    static function bootstrap( array $hookable, $priority = 10 )
    {
        foreach ( $hookable as $functionality ) {
            if ( method_exists( $functionality, '__setup' ) ) {
                add_action( 'genesis_setup', array( $functionality, '__setup' ), $priority );
            }
        }
    }
}