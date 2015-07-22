<?php

/**
 * Class Site258_Pluginception_Driven
 *
 */
final class Site258_Pluginception_Driven
{
    function __run()
    {
        if ( !function_exists( 'pluginception_create_plugin' ) ) {
            defined( 'DISALLOW_FILE_EDIT' ) or define( 'DISALLOW_FILE_EDIT', TRUE );
            defined( 'DISALLOW_FILE_MODS' ) or define( 'DISALLOW_FILE_MODS', TRUE );
        }
    }
}