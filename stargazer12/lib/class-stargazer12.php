<?php

/**
 * Class Stargazer12
 *
 */
final class Stargazer12
{
    function __setup()
    {
        //* Add custom background
        add_theme_support( 'custom-background', array(
            'default-color' => 'ffffff',
        ) );

        //* Add custom header
        add_theme_support( 'custom-header', array(
            'default-image' => '',
        ) );

        //* Overrides the color primary
        add_filter( 'theme_mod_color_primary', array( $this, 'color_primary' ) );
    }

    /**
     * Get the primary color
     *
     * @param $hex
     *
     * @return string
     */
    function color_primary( $hex )
    {
        return $hex ? $hex : '929292';
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