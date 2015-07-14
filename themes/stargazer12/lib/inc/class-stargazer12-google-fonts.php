<?php

/**
 * Class Stargazer12_Google_Fonts
 */
final class Stargazer12_Google_Fonts
{
    private $fonts = array();

    /**
     * Add font family
     *
     * @param        $font
     * @param string $active
     */
    function family( $font, $active = 'on' )
    {
        if ( 'off' !== $active ) {
            $this->fonts[ ] = $font;
        }
    }

    /**
     * Get the font url
     *
     * @return string
     */
    public function url()
    {
        if ( $this->fonts ) {
            $fonts_url = add_query_arg( array(
                'family' => urlencode( implode( '|', $this->fonts ) ),
                'subset' => urlencode( $this->subsets() ),
            ), 'https://fonts.googleapis.com/css' );
        }

        return isset( $fonts_url ) ? esc_url_raw( $fonts_url ) : '';
    }

    /**
     * Get the subsets
     *
     * @return string
     */
    private function subsets()
    {
        $subsets = 'latin,latin-ext';
        /*
         * Translators: To add an additional character subset specific to your language,
         * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
         */
        $subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'stargazer12' );
        if ( 'cyrillic' == $subset ) {
            $subsets .= ',cyrillic,cyrillic-ext';
        } elseif ( 'greek' == $subset ) {
            $subsets .= ',greek,greek-ext';
        } elseif ( 'devanagari' == $subset ) {
            $subsets .= ',devanagari';
        } elseif ( 'vietnamese' == $subset ) {
            $subsets .= ',vietnamese';
        }

        return $subsets;
    }
}