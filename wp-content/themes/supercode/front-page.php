<?php
/**
 * Front Page Template
 *
 * @package Supercode
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="hero">
		<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hero-section-image-1.png'); ?>"
			alt="Supercode" class="hero__image">
	</section>

</main>

<?php
get_footer();