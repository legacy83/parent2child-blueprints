<?php

/**
 * Class TwentyFifteen25
 *
 */
final class TwentyFifteen25
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
        unset( $color_schemes[ 'dark' ] );
        unset( $color_schemes[ 'yellow' ] );
        unset( $color_schemes[ 'pink' ] );
        unset( $color_schemes[ 'purple' ] );
        unset( $color_schemes[ 'blue' ] );

        $color_schemes[ 'twentyfifteen25' ] = array(
            'label' => __( 'TwentyFifteen25', 'twentyfifteen25' ),
            'colors' => array(
                '#2d2d2d',
                '#252525',
                '#ffffff',
                '#646464',
                '#ffffff',
                '#fcfcfc',
            ),
        );

        return $color_schemes;
    }

}