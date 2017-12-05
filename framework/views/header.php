<?php
// Header
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<header class="mat-sidenav mat-sidenav-left mat-sidenav-block mat-sidenav-transition mat-sidenav-closed">
		<div class="mat-toolbar"><?php echo bloginfo();?></div>
		<?php wp_nav_menu(); ?>
		<div class="spacer"></div>
		<?php if ( is_user_logged_in() ) { ?>
			<div class="mat-user">
				<?php $current_user = wp_get_current_user(); ?>
				<span class="mat-user-image"><?php echo get_avatar( $current_user->ID ) ?></span>
				<a href="<?php echo get_edit_user_link(); ?>">
					<span class="mat-user-name"><?php echo $current_user->display_name ?></span>
				</a>
			</div>
		<?php } else { ?>
			<div class="mat-user">
				<div class="mat-user-login">
					<a href="<?php echo wp_login_url( get_permalink() ); ?>" title="Login">
						<button class="mat-button mat-button-flat">Login</button>
					</a>
				</div>
			</div>
		<?php } ?>
	</header>
	<div class="mat-sidenav-content">
		<div class="mat-toolbar">
			<button id="mat-toggle-menu" class="mat-button mat-icon-button"><i class="material-icons">menu</i></button>
			<a href="<?php echo site_url(); ?>"class="mat-site-title"><?php echo bloginfo();?></a>
			<div class="mat-spacer"></div>
			<a href="<?php echo site_url(); ?>/?s"><button class="mat-button mat-icon-button"><i class="material-icons">search</i></button></a>
		</div>
		<div class="mat-toolbar">
			<?php the_title(); ?>
			<div class="mat-spacer"></div>
			<?php edit_post_link('<button class="mat-button mat-icon-button"><i class="material-icons">edit</i></button>'); ?>
		</div>
		<div class="mat-content">