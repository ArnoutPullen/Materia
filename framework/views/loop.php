<!-- https://codex.wordpress.org/The_Loop -->
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="mat-toolbar">
    <?php the_title(); ?>
    <div class="mat-spacer"></div>
    <?php edit_post_link('<button class="mat-button mat-icon-button"><i class="material-icons">edit</i></button>'); ?>
</div>
<div class="mat-content">
    <?php the_content(); ?>
</div>
<?php endwhile; ?>
<?php else : ?>
No content found
<?php endif; ?>