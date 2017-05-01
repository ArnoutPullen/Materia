<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!-- http://google.github.io/material-design-icons/ -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php if ( is_singular() && get_option('thread_comments')) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
</head>
<body>
<script type="text/javascript">
function toggleMenu()
{    
    $(".mat-sidenav").toggle();
    if($(".mat-sidenav-content").css("margin-left") == "200px") { 
        $(".mat-sidenav-content").css("margin-left", "0px");
    } else {
        $(".mat-sidenav-content").css("margin-left", "200px");
    }
}
</script>
<div class="mat-sidenav-container">
<header class="mat-sidenav">
    <?php wp_nav_menu(); ?>
</header>
<div class="mat-sidenav-content">
<div class="mat-toolbar">
    <button class="mat-icon" onclick="toggleMenu()"><i class="material-icons">menu</i></button>
    <span><?php echo bloginfo();?></span>
    <div class="spacer"></div>
    <button class="mat-icon"><i class="material-icons">edit</i></button>
</div>