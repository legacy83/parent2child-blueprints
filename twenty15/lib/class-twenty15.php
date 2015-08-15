<?php

/**
 * Class Twenty15
 *
 */
final class Twenty15
{
    function __after_setup_theme()
    {
        add_filter( 'twentyfifteen_color_schemes', array( $this, 'color_schemes' ) );
    }

    /**
     * Register new color schemes for Twenty Fifteen
     *
     * The order of colors in a colors array:
     * 1. Main Background Color.
     * 2. Sidebar Background Color.
     * 3. Box Background Color.
     * 4. Main Text and Link Color.
     * 5. Sidebar Text and Link Color.
     * 6. Meta Box Background Color.
     *
     * @param $color_schemes
     *
     * @return mixed
     */
    function color_schemes( $color_schemes )
    {
        return array(
            'default' => $color_schemes[ 'default' ],
            'twenty15' => array(
                'label' => __( 'Twenty15', 'twenty15' ),
                'colors' => array(
                    '#2d2d2d',
                    '#252525',
                    '#ffffff',
                    '#646464',
                    '#ffffff',
                    '#fcfcfc',
                ),
            ),
        );
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
            if ( method_exists( $functionality, '__after_setup_theme' ) ) {
                add_action( 'after_setup_theme', array( $functionality, '__after_setup_theme' ), $priority );
            }
        }
    }

}