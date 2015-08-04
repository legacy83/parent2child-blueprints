<?php

/**
 * Class Site258_Back_Compat
 *
 */
final class Site258_Back_Compat
{
    function __hooks()
    {
        if ( !self::ok() ) {
            add_action( 'admin_notices', array( $this, 'upgrade_notice' ) );
        }
    }

    /**
     * Check for the minimal PHP version.
     *
     * @return mixed
     */
    function minimal_php()
    {
        return version_compare( PHP_VERSION, '5.3.0', '>=' );
    }

    /**
     * Check for the minimal WordPress version.
     *
     * @return mixed
     */
    function minimal_wp()
    {
        return version_compare( $GLOBALS[ 'wp_version' ], '4.2.3', '>=' );
    }

    /**
     * Check for minimal system requirements.
     *
     * @return bool|mixed
     */
    function ok()
    {
        $requirements = $this->minimal_php();
        $requirements = $requirements && $this->minimal_wp();

        return $requirements;
    }

    /**
     * Add message for unsuccessful compatibility check.
     *
     */
    function upgrade_notice()
    {
        $message = __( 'Minimal system requirements from the functionality plugin is not satisfied!', 'site258' );
        printf( '<div class="error"><p>%s</p></div>', $message );
    }

}