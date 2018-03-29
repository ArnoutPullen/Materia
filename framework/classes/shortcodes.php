<?php

if ( class_exists( 'Materia_Shortcodes' ) ) {
    return;
}

class Materia_Shortcodes {

    public static $shortcodes = [];

    public static function add_shortcode( $tag, $callback ) {
        if ( shortcode_exists( $tag ) ) {
            Materia_Logging::error( 'Shortcode [' . $tag . '] bestaat al.' );
        } else {
            add_shortcode( $tag, $callback );
            array_push( self::$shortcodes, $tag );
        }
    }

    public static function add_shortcodes( $tags, $callback ) {
        if ( !is_array( $tags )) {
            return;
        } 
        foreach( $tags as $tag ) {
            Materia_Shortcodes::add_shortcode( $tag, $callback );
        }
    }

    public static function get_shortcodes() {
        return self::$shortcodes;
    }
}
