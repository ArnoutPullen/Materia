<?php

if ( class_exists( 'Materia_Logging' ) ) {
    return;
}

class Materia_Logging {
    public static function error( $message ) {
        if ( ! is_admin() ) {
            return;
        }
        echo '<div class="notice notice-error is-dismissible"><p>' . $message . '</p></div>';
    }
    public static function warning( $message ) {
        if ( ! is_admin() ) {
            return;
        }
        echo '<div class="notice notice-warning is-dismissible"><p>' . $message . '</p></div>';
    }
    public static function success( $message ) {
        if ( ! is_admin() ) {
            return;
        }
        echo '<div class="notice notice-success is-dismissible"><p>' . $message . '</p></div>';
    }
}
Materia_Logging::error('test');