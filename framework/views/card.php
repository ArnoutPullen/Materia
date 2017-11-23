<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
    <div class="mat-card">
        <div class="mat-card-header">
            <!-- <div class="mat-card-avatar"><img src="#"></div> -->
            <div class="mat-card-header-text">
                <div class="mat-card-title"><?php the_title(); ?></div>
                <div class="mat-card-subtitle"><?php the_date('d m Y'); ?></div>
            </div>
        </div>
    <?php the_content(); ?>
</div>
<?php edit_post_link('<button class="mat-button mat-icon-button">Edit</button>'); ?>
<?php endwhile; ?>
<?php else : ?>
No content found
<?php endif; ?>