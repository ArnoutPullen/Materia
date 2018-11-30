<div class="mat-content">
<!-- https://codex.wordpress.org/The_Loop -->
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; ?>
<?php else : ?>
No content found
<?php endif; ?>
</div>