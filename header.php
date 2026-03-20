<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
	<div class="container header-container">
		<div class="logo">
			<?php 
			if ( has_custom_logo() ) {
				the_custom_logo();
			} else {
				echo '<span>Roshni Health Care</span>';
			}
			?>
		</div>
		<nav class="nav-menu">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'fallback_cb'    => false,
			) );
			?>
		</nav>
	</div>
</header>
