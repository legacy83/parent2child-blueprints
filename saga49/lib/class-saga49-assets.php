<?php

/**
 * Class Saga49_Assets
 */
final class Saga49_Assets
{
    function __setup()
    {
        //* Enqueue/Dequeue fonts and styles
        add_action( 'wp_enqueue_scripts', array( $this, 'fonts' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'styles' ) );

        //* Register default headers/background
        $this->default_headers();
        add_filter( 'hybrid_default_backgrounds', array( $this, 'default_backgrounds' ), 11 );
    }

    /**
     * Enqueue Fonts
     */
    function fonts()
    {
        $google_fonts = new Saga49_Google_Fonts();
        $google_fonts->family(
            'Lato:300,400,700,900,300italic,400italic,700italic,900italic',
            /*
             * Translators: If there are characters in your language that are not supported
             * by Lato, translate this to 'off'. Do not translate into your own language.
             */
            _x( 'on', 'Lato font: on or off', 'saga49' )
        );
        $google_fonts->family(
            'Playfair Display:400,700,900,400italic,700italic,900italic',
            /*
             * Translators: If there are characters in your language that are not supported
             * by Playfair Display, translate this to 'off'. Do not translate into your own language.
             */
            _x( 'on', 'Playfair Display font: on or off', 'saga49' )
        );

        wp_dequeue_style( 'saga-fonts' );
        wp_enqueue_style( 'saga49-fonts', $google_fonts->url() );
    }

    /**
     * Enqueue Styles
     */
    function styles()
    {
        wp_dequeue_style( 'parent' );
        wp_dequeue_style( 'style' );

        $child_dir_uri = trailingslashit( get_stylesheet_directory_uri() );
        wp_enqueue_style( 'saga49-theme', "{$child_dir_uri}lib/assets/css/theme.css", array( 'parent' ) );
        wp_enqueue_style( 'style' );
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
                'description' => __( 'Sample One', 'saga49' )
            ),
            'sample-02' => array(
                'url' => '%2$s/lib/assets/images/headers/sample.png',
                'thumbnail_url' => '%2$s/lib/assets/images/headers/sample-thumb.png',
                'description' => __( 'Sample Two', 'saga49' )
            )
        ) );
    }

    /**
     * Register Default Backgrounds
     *
     * @param $backgrounds
     *
     * @return array
     */
    function default_backgrounds( $backgrounds )
    {
        $_backgrounds = array(
            'sample-01' => array(
                'url' => '%2$s/lib/assets/images/backgrounds/sample.png',
                'thumbnail_url' => '%2$s/lib/assets/images/backgrounds/sample-thumb.png',
            ),
            'sample-02' => array(
                'url' => '%2$s/lib/assets/images/backgrounds/sample.png',
                'thumbnail_url' => '%2$s/lib/assets/images/backgrounds/sample-thumb.png',
            )
        );

        return array_merge( $backgrounds, $_backgrounds );
    }
}