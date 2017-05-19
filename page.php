<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    Op <?php the_time('d m Y'); ?> door <?php the_author_posts_link(); ?>
<?php the_content(); ?>
<?php endwhile; else : ?>
	<p><?php _e( 'No posts found' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
