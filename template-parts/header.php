<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#448AFF">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/bc9305cfff.js"></script>
	<!-- WP HEAD START -->
	<?php wp_head(); ?>
	<!-- WP HEAD END -->
</head>

<body <?php body_class(); ?>>
<div class="mat-sidenav-container">
	<div class="mat-overlay"></div>
	<header class="mat-sidenav mat-sidenav-<?php echo get_theme_mod( 'sidenav_position', 'left' ); ?> mat-sidenav-<?php echo get_theme_mod( 'sidenav_layout', 'block' ); ?> mat-sidenav-transition mat-sidenav-closed">
		<div class="mat-toolbar"><?php echo bloginfo();?></div>
		<?php mat_get_view( 'nav-menu', 'sidenav' ); ?>
		<div class="spacer"></div>
		<?php mat_get_view( 'user-card', 'sidenav' ); ?>
	</header>
	<div class="mat-sidenav-content">
		<div class="mat-toolbar">
			<button id="mat-toggle-menu" class="mat-button mat-icon-button"><i class="material-icons">menu</i></button>
			<a href="<?php echo site_url(); ?>"class="mat-site-title"><?php echo bloginfo();?></a>
			<div class="mat-spacer"></div>
			<a href="<?php echo get_search_link(); ?>/?s"><button class="mat-button mat-icon-button"><i class="material-icons">search</i></button></a>
		</div>
		<div class="mat-toolbar">
			<?php do_shortcode( '[title]' ); ?>
			<div class="mat-spacer"></div>
			<?php edit_post_link('<button class="mat-button mat-icon-button"><i class="material-icons">edit</i></button>'); ?>
		</div>