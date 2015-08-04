<?php

/**
 * Class P2C_Core_Back_Compat
 *
 */
final class P2C_Core_Back_Compat
{
    function __run()
    {
        $safe = $this->safe();
        if ( $safe ) do_action( 'p2c_back_compat_safe' );
        if ( !$safe ) do_action( 'p2c_back_compat_unsafe' );
        if ( !$safe ) add_action( 'admin_notices', array( $this, 'unsafe_notice' ) );
    }

    /**
     * Check for the minimal PHP version.
     *
     * @return mixed
     */
    function minimal_php()
    {
        return version_compare( PHP_VERSION, '5.3.10', '>=' );
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
    function safe()
    {
        $requirements = $this->minimal_php();
        $requirements = $requirements && $this->minimal_wp();

        return $requirements;
    }

    /**
     * Add message for unsuccessful compatibility check.
     */
    function unsafe_notice()
    {
        $message = __( 'Unsafe environment for running the functionality plugin!', 'p2c-core' );
        $message .= __( '&nbsp;Minimal system requirements was not satisfied.', 'p2c-core' );
        printf( '<div class="error"><p>%s</p></div>', $message );
    }

}