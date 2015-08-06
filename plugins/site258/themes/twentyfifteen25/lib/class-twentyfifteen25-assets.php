<?php

/**
 * Class TwentyFifteen25_Assets
 */
final class TwentyFifteen25_Assets
{
    function __setup()
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
        $google_fonts = new TwentyFifteen25_Google_Fonts();
        $google_fonts->family(
            'Noto Sans:400italic,700italic,400,700',
            /*
             * Translators: If there are characters in your language that are not supported
             * by Noto Sans, translate this to 'off'. Do not translate into your own language.
             */
            _x( 'on', 'Noto Sans font: on or off', 'twentyfifteen25' )
        );
        $google_fonts->family(
            'Noto Serif:400italic,700italic,400,700',
            /*
             * Translators: If there are characters in your language that are not supported
             * by Noto Serif, translate this to 'off'. Do not translate into your own language.
             */
            _x( 'on', 'Noto Serif font: on or off', 'twentyfifteen25' )
        );
        $google_fonts->family(
            'Inconsolata:400,700',
            /*
             * Translators: If there are characters in your language that are not supported
             * by Inconsolata, translate this to 'off'. Do not translate into your own language.
             */
            _x( 'on', 'Inconsolata font: on or off', 'twentyfifteen25' )
        );

        wp_dequeue_style( 'twentyfifteen-fonts' );
        wp_enqueue_style( 'twentyfifteen25-fonts', $google_fonts->url() );
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
        echo 'ola mundo <br><br><br><br><br><br><br><br><br><br><br><br>';
        echo $parent_dir_uri;

        wp_register_style( 'twentyfifteen25-parent', "{$parent_dir_uri}style.css" );
        wp_enqueue_style( 'twentyfifteen25-theme', "{$child_dir_uri}lib/assets/css/theme.css", array( 'twentyfifteen25-parent' ) );
        wp_enqueue_style( 'twentyfifteen-style' );
    }

}