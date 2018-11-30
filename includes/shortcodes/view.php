<?php
/**
 * https://codex.wordpress.org/Class_Reference/WP_Query
 * https://github.com/billerickson/display-posts-shortcode/blob/master/display-posts-shortcode.php
 */
function mat_shortcode_view( $attributes, $content = null ) {
    $output = '';

    $attributes = shortcode_atts( array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'none',
    ), $attributes, 'view' );

    extract($attributes);

    $args = array(
        'post_type' => $post_type,
        'post_status' => $post_status,
    );

    $query = new WP_Query( $args );
    $posts = $query->get_posts();

    $placeholders = array();
    // extract placeholders of content
    preg_match_all( '/#(.*?)#/', $content, $matches  );
    for($i = 0; $i < count($matches[1]); $i++) {
        // add placeholder to array
        $placeholders[] = $matches[1][$i];
    }

    // replace placeholder with post property
    if ( !empty( $posts ) ) {
        foreach( $posts as $post ) {
            $search = array();
            $replace = array();
            foreach ( $placeholders as $placeholder ) {
                $search[] = '#' . $placeholder . '#';
                switch ( $placeholder ) {
                    case 'post_link':
                        $replace[] = get_permalink( $post->ID );
                        break;
                    case 'post_date':
                        $date_format = get_option( 'date_format' );
                        $replace[] = date( $date_format, strtotime( $post->post_date ));
                        break;
                    case 'post_time':
                        $time_format = get_option( 'time_format' );
                        $replace[] = date( $time_format, strtotime( $post->post_date ));
                        break;
                    case 'post_author':
                    case 'post_author_name':
                        $replace[] = get_the_author_meta( 'display_name', $post->post_author );
                        break;
                    case 'post_author_id':
                        $replace[] = $post->post_author;
                    default:
                        if ( isset($post->$placeholder) ) {
                            $replace[] = $post->$placeholder;
                        }
                }
            }
            $output .= str_replace( $search, $replace, $content );
        }
    }
    return $output;
}
add_shortcode( 'view', 'mat_shortcode_view' );
