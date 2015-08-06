<?php

/**
 * Class Site258_Shortcodes
 *
 */
final class Site258_Shortcodes extends P2C_Core_Clip
{
    function __plugins_loaded()
    {
        add_shortcode( 'hello', array( $this, 'hello' ) );
        add_shortcode( 'sticky-posts', array( $this, 'sticky_posts' ) );
    }

    /**
     * Hello World
     *
     * @return mixed
     */
    function hello()
    {
        return $this->render( 'hello', array(
            'message' => 'World'
        ) );
    }

    /**
     * Sticky Posts
     *
     * @return string
     */
    function sticky_posts()
    {
        $sticky_posts = get_option( 'sticky_posts' );
        $the_query = new WP_Query( array(
            'posts_per_page' => 6,
            'post__in' => $sticky_posts,
            'ignore_sticky_posts' => 1
        ) );

        return $this->render_query( 'sticky-posts', $the_query, array(
            'sticky_posts' => $sticky_posts
        ) );
    }

    /**
     * Locate the template
     *
     * @param $name
     *
     * @return bool|string
     */
    protected function locate_template( $name )
    {
        $path = trailingslashit( plugin_dir_path( __FILE__ ) );
        if ( file_exists( "{$path}partials/shortcodes/{$name}.php" ) ) {
            $located = "{$path}partials/shortcodes/{$name}.php";
        }

        return isset( $located ) ? $located : FALSE;
    }

}