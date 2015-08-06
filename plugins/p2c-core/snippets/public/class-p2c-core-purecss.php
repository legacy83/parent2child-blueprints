<?php

/**
 * Class P2C_Core_PureCSS
 *
 */
final class P2C_Core_PureCSS
{
    function __plugins_loaded()
    {
        add_action( 'wp_enqueue_scripts', array( $this, 'register_styles' ), 0 );
    }

    /**
     * Register all the PureCSS modules.
     */
    function register_styles()
    {
        $pureCDN = untrailingslashit( 'http://yui.yahooapis.com/pure/0.6.0' );
        foreach ( $this->get_individual_modules() as $module => $css_style ) {
            wp_register_style( $module, "{$pureCDN}/{$css_style}" );
        }
    }

    /**
     * Get all PureCSS individual modules available.
     *
     * @return array
     */
    private function get_individual_modules()
    {
        return array(
            'purecss-base' => 'base-min.css',
            'purecss-buttons' => 'buttons-min.css',
            'purecss-forms' => 'forms-min.css',
            'purecss-forms-nr' => 'forms-nr-min.css',
            'purecss-grids' => 'grids-min.css',
            'purecss-grids-responsive' => 'grids-responsive-min.css',
            'purecss-menus' => 'menus-min.css',
            'purecss-menus-nr' => 'menus-nr-min.css',
            'purecss-tables' => 'tables-min.css',
        );
    }

}