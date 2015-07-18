<?php

/**
 * Class Kuorinka34_Assets
 */
final class Kuorinka34_Assets
{
    function __setup()
    {
        //* Enqueue/Dequeue fonts and styles
        add_action( 'wp_enqueue_scripts', array( $this, 'fonts' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'styles' ) );

        //* Register default headers
        $this->default_headers();
    }

    /**
     * Enqueue Fonts
     */
    function fonts()
    {
        $google_fonts = new Kuorinka34_Google_Fonts();
        $google_fonts->family(
            'Source Sans Pro:400,600,700,400italic,600italic,700italic',
            /*
             * Translators: If there are characters in your language that are not supported
             * by Source Sans Pro, translate this to 'off'. Do not translate into your own language.
             */
            _x( 'on', 'Source Sans Pro font: on or off', 'kuorinka34' )
        );
        $google_fonts->family(
            'Roboto Condensed:300,400,700,300italic,400italic,700italic',
            /*
             * Translators: If there are characters in your language that are not supported
             * by Roboto Condensed, translate this to 'off'. Do not translate into your own language.
             */
            _x( 'on', 'Roboto Condensed font: on or off', 'kuorinka34' )
        );

        wp_dequeue_style( 'kuorinka-fonts' );
        wp_enqueue_style( 'kuorinka34-fonts', $google_fonts->url() );
    }

    /**
     * Enqueue Styles
     */
    function styles()
    {
        wp_dequeue_style( 'kuorinka-parent-style' );
        wp_dequeue_style( 'kuorinka-style' );

        $child_dir_uri = trailingslashit( get_stylesheet_directory_uri() );
        wp_enqueue_style( 'kuorinka34-theme', "{$child_dir_uri}lib/assets/css/theme.css", array( 'kuorinka-parent-style' ) );
        wp_enqueue_style( 'kuorinka-style' );
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
                'description' => __( 'Sample One', 'kuorinka34' )
            ),
            'sample-02' => array(
                'url' => '%2$s/lib/assets/images/headers/sample.png',
                'thumbnail_url' => '%2$s/lib/assets/images/headers/sample-thumb.png',
                'description' => __( 'Sample Two', 'kuorinka34' )
            )
        ) );
    }

}