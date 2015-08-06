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
function __p2c_plugins_loaded( $functionality, $priority = 10 )
{
    if ( method_exists( $functionality, '__plugins_loaded' ) ) {
        add_action( 'plugins_loaded', array( $functionality, '__plugins_loaded' ), $priority );
    }
}

/**
 * Load the functionality within the after_setup_theme hook.
 *
 * @param     $functionality
 * @param int $priority
 */
function __p2c_after_setup_theme( $functionality, $priority = 10 )
{
    if ( method_exists( $functionality, '__after_setup_theme' ) ) {
        add_action( 'after_setup_theme', array( $functionality, '__after_setup_theme' ), $priority );
    }
}