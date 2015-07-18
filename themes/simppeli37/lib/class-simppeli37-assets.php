<?php

/**
 * Class Simppeli37_Assets
 */
final class Simppeli37_Assets
{
    function __setup()
    {
        //* Enqueue/Dequeue fonts and styles
        add_action( 'wp_enqueue_scripts', array( $this, 'fonts' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'styles' ) );

        //* Register default headers/background
        $this->default_headers();
    }

    /**
     * Enqueue Fonts
     */
    function fonts()
    {
        $google_fonts = new Simppeli37_Google_Fonts();
        $google_fonts->family(
            'Noto Sans:400italic,700italic,400,700',
            /*
             * Translators: If there are characters in your language that are not supported
             * by Noto Sans, translate this to 'off'. Do not translate into your own language.
             */
            _x( 'on', 'Noto Sans font: on or off', 'simppeli37' )
        );
        $google_fonts->family(
            'Noto Serif:400italic,700italic,400,700',
            /*
             * Translators: If there are characters in your language that are not supported
             * by Noto Serif, translate this to 'off'. Do not translate into your own language.
             */
            _x( 'on', 'Noto Serif font: on or off', 'simppeli37' )
        );

        wp_dequeue_style( 'simppeli-fonts' );
        wp_enqueue_style( 'simppeli37-fonts', $google_fonts->url() );
    }

    /**
     * Enqueue Styles
     */
    function styles()
    {
        wp_dequeue_style( 'simppeli-parent-style' );
        wp_dequeue_style( 'simppeli-style' );

        $child_dir_uri = trailingslashit( get_stylesheet_directory_uri() );
        wp_enqueue_style( 'simppeli37-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css' );
        wp_enqueue_style( 'simppeli37-theme', "{$child_dir_uri}lib/assets/css/theme.css", array( 'simppeli-parent-style' ) );
        wp_enqueue_style( 'simppeli-style' );
    }

    /**
     * Register Default Headers
     */
    function default_headers()
    {
        register_default_headers( array(
            'sample-01' => array(
                'url' => '%2$s/lib/assets/images/headers/sample.png',
                'thumbnail_url' => '%2$s/lib/assets/images/headers/sample-thumb.png',
                'description' => __( 'Sample One', 'simppeli37' )
            ),
            'sample-02' => array(
                'url' => '%2$s/lib/assets/images/headers/sample.png',
                'thumbnail_url' => '%2$s/lib/assets/images/headers/sample-thumb.png',
                'description' => __( 'Sample Two', 'simppeli37' )
            )
        ) );
    }

}