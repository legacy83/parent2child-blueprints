<?php

/**
 * Class Stargazer12_Assets
 */
final class Stargazer12_Assets
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
        $google_fonts = new Stargazer12_Google_Fonts();
        $google_fonts->family(
            'Open Sans:300,400,600,700',
            /*
             * Translators: If there are characters in your language that are not supported
             * by Open Sans, translate this to 'off'. Do not translate into your own language.
             */
            _x( 'on', 'Open Sans font: on or off', 'stargazer12' )
        );
        $google_fonts->family(
            'Droid Serif:400,700,400italic,700italic',
            /*
             * Translators: If there are characters in your language that are not supported
             * by Droid Serif, translate this to 'off'. Do not translate into your own language.
             */
            _x( 'on', 'Droid Serif font: on or off', 'stargazer12' )
        );

        wp_dequeue_style( 'stargazer-fonts' );
        wp_enqueue_style( 'stargazer12-fonts', $google_fonts->url() );
    }

    /**
     * Enqueue Styles
     */
    function styles()
    {
        wp_dequeue_style( 'parent' );
        wp_dequeue_style( 'style' );

        $theme_uri = trailingslashit( get_stylesheet_directory_uri() );
        wp_enqueue_style( 'stargazer12-base', "{$theme_uri}lib/assets/css/base.css", array( 'parent' ) );
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
                'description' => __( 'Sample One', 'stargazer12' )
            ),
            'sample-02' => array(
                'url' => '%2$s/lib/assets/images/headers/sample.png',
                'thumbnail_url' => '%2$s/lib/assets/images/headers/sample-thumb.png',
                'description' => __( 'Sample Two', 'stargazer12' )
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