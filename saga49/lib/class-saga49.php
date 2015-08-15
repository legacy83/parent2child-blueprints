<?php

/**
 * Class Saga49
 *
 */
final class Saga49
{
    function __setup()
    {
        //* Add custom background
        add_theme_support( 'custom-background', array(
            'default-color' => '151515',
        ) );

        //* Add custom header
        add_theme_support( 'custom-header', array(
            'default-image' => '',
            'default-text-color' => 'dadada',
        ) );

        //* Add a custom default icon for the "header_icon" option
        add_filter( 'theme_mod_header_icon', array( $this, 'header_icon' ) );

        //* Add a custom default color for the "menu" color option.
        add_filter( 'theme_mod_color_menu', array( $this, 'color_menu' ) );

        //* Overrides the color primary
        add_filter( 'theme_mod_color_primary', array( $this, 'color_primary' ) );
    }

    /**
     * Get the header icon
     *
     * @param $icon
     *
     * @return string
     */
    function header_icon( $icon )
    {
        return 'default' === $icon ? 'icon-pencil' : $icon;
    }

    /**
     * Get the menu color
     *
     * @param $hex
     *
     * @return string
     */
    function color_menu( $hex )
    {
        return $hex ? $hex : '929292';
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