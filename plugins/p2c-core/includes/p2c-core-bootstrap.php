<?php

/**
 * Just run the functionality.
 *
 * @param $functionality
 */
function __p2c_run( $functionality )
{
    if ( method_exists( $functionality, '__run' ) ) {
        $functionality->__run();
    }
}

/**
 * Hooks the functionality.
 *
 * @param $functionality
 */
function __p2c_hooks( $functionality )
{
    if ( method_exists( $functionality, '__hooks' ) ) {
        $functionality->__hooks();
    }
}

/**
 * Load the functionality within the plugins_loaded hook.
 *
 * @param     $functionality
 * @param int $priority
 */
function __p2c_loaded( $functionality, $priority = 10 )
{
    __p2c_plugins_loaded( $functionality, $priority );
}

/**
 * Load the functionality within the plugins_loaded hook.
 *
 * @param     $functionality
 * @param int $priority
 */
function __p2c_plugins_loaded( $functionality, $priority = 10 )
{
    if ( method_exists( $functionality, '__loaded' ) ) {
        add_action( 'plugins_loaded', array( $functionality, '__loaded' ), $priority );
    }
}

/**
 * Load the functionality within the setup_theme hook.
 *
 * @param     $functionality
 * @param int $priority
 */
function __p2c_setup_theme( $functionality, $priority = 10 )
{
    if ( method_exists( $functionality, '__setup' ) ) {
        add_action( 'after_setup_theme', array( $functionality, '__setup' ), $priority );
    }
}

/**
 * Makes the functionality live launching it's own hook.
 *
 * @param $functionality
 */
function __p2c_live( $functionality )
{
    do_action( strtolower( get_class( $functionality ) ) . '_live', $functionality );
}