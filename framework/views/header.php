<?php
// Header
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/bc9305cfff.js"></script>
</head>

<body <?php body_class(); ?>>
<div class="mat-sidenav-container">
	<div class="mat-overlay"></div>
	<header class="mat-sidenav mat-sidenav-left mat-sidenav-block">
		<!-- <div class="mat-toolbar"><?php echo bloginfo();?></div> -->
		<?php wp_nav_menu(); ?>
	</header>
</div>
<div class="mat-sidenav-content">
<div class="mat-toolbar">
    <button id="mat-toggle-menu" class="mat-button mat-icon-button"><i class="material-icons">menu</i></button>
    <span><?php echo bloginfo();?></span>
    <div class="mat-spacer"></div>
    <button class="mat-button mat-icon-button"><i class="material-icons">search</i></button>
</div>