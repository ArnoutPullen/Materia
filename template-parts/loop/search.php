<?php
$search_query = get_search_query();
$args = array(
    's' => $search_query
);

$query = new WP_Query( $args );
if ( $query->have_posts() ):
    ?><h1><?php printf( __( 'Search Results for: %s', MAT_SLUG ), get_query_var( 's' ) ); ?></h1><?php
    while ( $query->have_posts() ) {
        $query->the_post();
        ?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><?php
    }
else:
    ?><h1><?php printf( __( 'Nothing Found', MAT_SLUG ) ); ?></h1>
    <p><?php printf( __( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', MAT_SLUG ) ); ?></p><?php
endif;
