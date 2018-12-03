<?php if ( have_posts() ) : ?>
<div class="mat-accordions">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="mat-accordion">
            <div class="mat-card-header">
                <!-- <div class="mat-card-avatar"><img src="#"></div> -->
                <div class="mat-card-header-text">
                    <div class="mat-card-title"><?php the_title(); ?></div>
                    <div class="mat-card-subtitle"><?php the_date( get_option( 'date_format', 'j F Y' ) ); ?></div>
                </div>
                <?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'mat-header-image' ] ); ?>
            </div>
            <div class="mat-card-content">
                <?php wp_strip_all_tags( the_content() ); ?>
            </div>
            <div class="mat-card-actions">
                <a class="mat-button mat-button-flat" href="<?php the_permalink(); ?>">Read more</a>
                <?php edit_post_link( 'Edit', null, null, null, 'mat-button mat-button-flat' ); ?>
            </div>
        </div>
    <?php endwhile; ?>
    <?php else : ?>
    No content found
    <?php endif; ?>
</div>