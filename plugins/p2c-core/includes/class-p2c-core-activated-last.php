<?php

/**
 * Class P2C_Core_Jetpack_Friendly
 *
 */
final class P2C_Core_Activated_Last
{
    private $plugin_file;

    function __construct( $plugin_file )
    {
        $this->plugin_file = $plugin_file;
    }

    function __plugins_loaded()
    {
        add_filter( 'pre_update_option_active_plugins', array( $this, 'activated_last' ), 99 );
        add_filter( 'pre_update_site_option_active_sitewide_plugins', array( $this, 'activated_last' ), 99 );
    }

    /**
     * Plugin must be the last one to be activated.
     *
     * @param array $active_plugins
     *
     * @return array
     */
    function activated_last( array $active_plugins )
    {
        $basename = plugin_basename( $this->plugin_file );
        $key = array_search( $basename, $active_plugins );

        if ( FALSE !== $key ) {
            array_splice( $active_plugins, $key, 1 );
            array_push( $active_plugins, $basename );
        }

        return array_unique( $active_plugins );
    }

}