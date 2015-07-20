<?php

/**
 * Class Site258_Theme_Directory
 *
 */
final class Site258_Theme_Directory
{
    function __run()
    {
        register_theme_directory( dirname( __FILE__ ) );
    }
}