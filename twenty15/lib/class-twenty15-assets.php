<?php

/**
 * Class Twenty15_Assets
 */
final class Twenty15_Assets
{
    function __after_setup_theme()
    {
        //* Enqueue/Dequeue fonts and styles
        add_action( 'wp_enqueue_scripts', array( $this, 'fonts' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'styles' ) );
    }

    /**
     * Enqueue Fonts
     */
    function fonts()
    {
        $google_fonts = new Twenty15_Google_Fonts();
        $google_fonts->family(
            'Noto Sans:400italic,700italic,400,700',
            /*
             * Translators: If there are characters in your language that are not supported
             * by Noto Sans, translate this to 'off'. Do not translate into your own language.
             */
            _x( 'on', 'Noto Sans font: on or off', 'twenty15' )
        );
        $google_fonts->family(
            'Noto Serif:400italic,700italic,400,700',
            /*
             * Translators: If there are characters in your language that are not supported
             * by Noto Serif, translate this to 'off'. Do not translate into your own language.
             */
            _x( 'on', 'Noto Serif font: on or off', 'twenty15' )
        );
        $google_fonts->family(
            'Inconsolata:400,700',
            /*
             * Translators: If there are characters in your language that are not supported
             * by Inconsolata, translate this to 'off'. Do not translate into your own language.
             */
            _x( 'on', 'Inconsolata font: on or off', 'twenty15' )
        );

        wp_dequeue_style( 'twentyfifteen-fonts' );
        wp_enqueue_style( 'twenty15-fonts', $google_fonts->url() );
    }

    /**
     * Enqueue Styles
     */
    function styles()
    {
        wp_dequeue_style( 'twentyfifteen-style' );
        wp_dequeue_style( 'twentyfifteen-ie' );
        wp_dequeue_style( 'twentyfifteen-ie7' );

        $parent_dir_uri = trailingslashit( get_template_directory_uri() );
        $child_dir_uri = trailingslashit( get_stylesheet_directory_uri() );
        wp_register_style( 'twenty15-parent', "{$parent_dir_uri}style.css" );
        wp_enqueue_style( 'twenty15-theme', "{$child_dir_uri}lib/assets/css/theme.css", array( 'twenty15-parent' ) );
        wp_enqueue_style( 'twentyfifteen-style' );
    }

}