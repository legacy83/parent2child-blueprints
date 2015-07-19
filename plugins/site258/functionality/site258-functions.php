<?php

/**
 * Check the minimal PHP version requirement.
 *
 * @return bool
 */
function site258_minimal_php()
{
    $minimal_php = '5.3.0';
    if ( version_compare( PHP_VERSION, $minimal_php, '<' ) ) {
        wp_die( "The minimal PHP $minimal_php is required!" );
    }

    return TRUE;
}