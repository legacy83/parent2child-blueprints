<?php

/**
 * Class P2C_Core_Friendly
 *
 */
final class P2C_Core_Friendly
{
    function __run()
    {
        $this->allow_file_changes();
        $this->jetpack_friendship();
    }

    /**
     * Allow file editing by default.
     */
    function allow_file_changes()
    {
        defined( 'DISALLOW_FILE_EDIT' ) or define( 'DISALLOW_FILE_EDIT', FALSE );
        defined( 'DISALLOW_FILE_MODS' ) or define( 'DISALLOW_FILE_MODS', FALSE );
    }

    /**
     * Makes jetpack friendly.
     */
    function jetpack_friendship()
    {
        defined( 'JETPACK_DEV_DEBUG' ) or define( 'JETPACK_DEV_DEBUG', TRUE );
        add_filter( 'jetpack_get_default_modules', '__return_empty_array', 999 );
    }

}