<?php

/**
 * Class Kuorinka34
 *
 */
final class Kuorinka34
{
    function __setup()
    {
        //* Add custom background
        add_theme_support( 'custom-background', array(
            'default-color' => 'e6eff7',
            'default-image' => '',
        ) );

        //* Add custom header
        add_theme_support( 'custom-header', array(
            'default-image' => '',
            'default-text-color' => '1668b5',
        ) );
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
                add_action( 'after_setup_theme', array( $functionality, '__setup' ), $priority );
            }
        }
    }
}