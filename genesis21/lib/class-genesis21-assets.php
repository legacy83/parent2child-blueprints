<?php

/**
 * Class Genesis21_Assets
 */
final class Genesis21_Assets
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
        $google_fonts = new Genesis21_Google_Fonts();
        $google_fonts->family(
            'Open Sans:300,400,600,700',
            /*
             * Translators: If there are characters in your language that are not supported
             * by Open Sans, translate this to 'off'. Do not translate into your own language.
             */
            _x( 'on', 'Open Sans font: on or off', 'genesis21' )
        );
        $google_fonts->family(
            'Droid Serif:400,700,400italic,700italic',
            /*
             * Translators: If there are characters in your language that are not supported
             * by Droid Serif, translate this to 'off'. Do not translate into your own language.
             */
            _x( 'on', 'Droid Serif font: on or off', 'genesis21' )
        );

        wp_enqueue_style( 'genesis21-fonts', $google_fonts->url() );
    }

    /**
     * Enqueue Styles
     */
    function styles()
    {
        wp_dequeue_style( 'genesis21' );

        $child_dir_uri = trailingslashit( get_stylesheet_directory_uri() );
        wp_enqueue_style( 'genesis21-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css' );
        wp_enqueue_style( 'genesis21-theme', "{$child_dir_uri}lib/assets/css/theme.css" );
        wp_enqueue_style( 'genesis21-theme-gt568px', "{$child_dir_uri}lib/assets/css/theme-gt568px.css", array(), FALSE, 'only screen and (min-width: 35.5em)' );
        wp_enqueue_style( 'genesis21-theme-gt768px', "{$child_dir_uri}lib/assets/css/theme-gt768px.css", array(), FALSE, 'only screen and (min-width: 48em)' );
        wp_enqueue_style( 'genesis21-theme-gt1024px', "{$child_dir_uri}lib/assets/css/theme-gt1024px.css", array(), FALSE, 'only screen and (min-width: 64em)' );
        wp_enqueue_style( 'genesis21-theme-gt1280px', "{$child_dir_uri}lib/assets/css/theme-gt1280px.css", array(), FALSE, 'only screen and (min-width: 80em)' );
        wp_enqueue_style( 'genesis21' );
    }

}