<?php

/**
 * Class P2C_Core_Lock
 *
 */
final class P2C_Core_Lock
{
    function __run()
    {
        $this->disallow_file_changes();
    }

    /**
     * Safely disallow accidental file changes.
     */
    function disallow_file_changes()
    {
        defined( 'DISALLOW_FILE_EDIT' ) or define( 'DISALLOW_FILE_EDIT', TRUE );
        defined( 'DISALLOW_FILE_MODS' ) or define( 'DISALLOW_FILE_MODS', TRUE );
    }

}