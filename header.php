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
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Roshni Health Care " style="max-height: 80px; width: auto;">
			</a>
		</div>
		<nav class="nav-menu">
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
				<li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About</a></li>
				<li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Services</a></li>
				<li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a></li>
				<li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary" style="color: #fff; padding: 10px 20px; font-size: 0.9rem;">Contact Us</a></li>
			</ul>
		</nav>
	</div>
</header>
