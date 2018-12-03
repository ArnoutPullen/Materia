<?php
function mat_shortcode_get_title() {
    global $post;
    if ( is_single() ) {
        return get_post_type_object( $post->post_type )->labels->name;
    } elseif ( is_page() ) {
        return the_title();
    } elseif ( is_tax() || is_category() ) {
        $queried_object = get_queried_object();
        $taxonomy = get_taxonomy( $queried_object->taxonomy );
        return $taxonomy->labels->name;
    } elseif ( is_admin() ) {
        return get_admin_page_title();
    } elseif ( is_home() || is_search() ) {
        return wp_title( '' );
    } else {
        $object = get_queried_object();
        if ( !empty( $object ) ) {
            if ( isset( $object->post_title ) ) {
                return $object->post_title;
            }
        }
        return get_the_title();
    }
}
add_shortcode( 'title', 'mat_shortcode_get_title' );