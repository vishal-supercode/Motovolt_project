<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Supercode
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'supercode'); ?></a>

		<header id="masthead" class="site-header<?php echo is_front_page() ? ' site-header--hero' : ''; ?>">
			<?php if (is_front_page()): ?>
				<nav class="hero-nav">
					<a href="<?php echo esc_url(home_url('/')); ?>" class="hero-nav__logo"
						aria-label="<?php bloginfo('name'); ?>">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/company-logo.png'); ?>"
							alt="<?php bloginfo('name'); ?>">
					</a>

					<div class="hero-nav__menu">
						<ul>
							<li><a href="#">Smart Vehicles</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Store Locator</a></li>
							<li><a href="#">Dealers Enquiry</a></li>
							<li><a href="#">More</a></li>
						</ul>

						<a href="#" class="hero-nav__cta">Book Now <img
								src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/arrow.svg'); ?>"
								alt="" aria-hidden="true"></a>
					</div>
				</nav>
			<?php else: ?>
			<div class="site-branding">
				<?php
				the_custom_logo();
				?>
				<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
						rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
				$supercode_description = get_bloginfo('description', 'display');
				if ($supercode_description || is_customize_preview()):
					?>
					<p class="site-description">
						<?php echo $supercode_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu"
					aria-expanded="false"><?php esc_html_e('Primary Menu000', 'supercode'); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id' => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
			<?php endif; ?>
		</header><!-- #masthead -->