<?php

/**
 * Class P2C_Core_Jetpack_Friendly
 *
 */
final class P2C_Core_Jetpack_Friendly
{
    function __plugins_loaded()
    {
        defined( 'JETPACK_DEV_DEBUG' ) or define( 'JETPACK_DEV_DEBUG', TRUE );
        add_filter( 'jetpack_get_default_modules', '__return_empty_array', 999 );
    }
}