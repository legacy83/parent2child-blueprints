<?php

/**
 * Class Site258_Clip
 *
 */
abstract class Site258_Clip
{
    /**
     * Render/Clip the template
     *
     * @param       $name
     * @param array $model
     *
     * @return string
     */
    function render( $name, array $model = array() )
    {
        ob_start();

        $located = $this->locate_template( $name );
        if ( $located ) {
            if ( is_array( $model ) ) extract( $model );
            include( "$located" );
        }

        return trim( ob_get_clean() );
    }

    /**
     * Render/Clip template and make the query available.
     *
     * @param          $name
     * @param WP_Query $the_query
     * @param array    $model
     *
     * @return string
     */
    function render_query( $name, WP_Query $the_query, array $model = array() )
    {
        if ( is_array( $model ) ) {
            $model[ 'the_query' ] = $the_query;
        }

        return $this->render( $name, $model );
    }

    /**
     * Locate the template
     *
     * @param $name
     *
     * @return bool|string
     */
    abstract protected function locate_template( $name );
}