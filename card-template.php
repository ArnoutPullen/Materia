<?php
/*
Template Name: Card Template
*/
?>
<?php get_header(); ?>
<div class="mat-card">
    <div class="mat-card-image">
        <?php echo the_post_thumbnail(); ?>
    </div>
    <div class="mat-card-header">
        <div class="mat-card-title"><h1><?php echo get_post_field('post_title', $post->ID); ?></h1></div>
        <div class="mat-card-subtitle">By <?php echo get_post_field('post_author', $post->ID); ?> on <?php echo get_post_field('post_date', $post->ID); ?> </div>
    </div>
    <!--<img src="http://www.materialdoc.com/content/images/2015/11/materialdesign_introduction.png" class="mat-card-image">-->
    <div class="mat-card-content">
        <?php echo get_post_field('post_content', $post->ID); ?>
    </div>
    <div class="mat-card-actions">
        <!--<?php echo get_post_field('post_title', $post->ID); ?>
        <?php echo get_post_field('post_name', $post->ID); ?>
        <?php echo get_post_field('post_author', $post->ID); ?>
        <?php echo get_post_field('post_date', $post->ID); ?>-->
        <button class="mat-button mat-raised">raised</button>
        <button class="mat-button mat-flat">flat</button>
    </div>
</div>
<button class="mat-action"><i class="mat-icon">add</i></button>
<?php get_footer(); ?>