<?php
/**
 * Homepage footer content.
 *
 * @package Supercode
 */
?>
<footer class="site-footer" aria-label="Site footer">
    <div class="container site-footer__inner">
        <div class="site-footer__top">
            <a class="site-footer__brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Motovolt home">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Motovolt-footer.png'); ?>"
                    alt="Motovolt">
            </a>

            <nav class="site-footer__socials" aria-label="Social media">
                <a href="#" aria-label="Instagram"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/InstagramLogo.png'); ?>" alt="Instagram"></a>
                <a href="#" aria-label="Facebook"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/FacebookLogo.png'); ?>" alt="Facebook"></a>
                <a href="#" aria-label="YouTube"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/YouTubeLogo.png'); ?>" alt="YouTube"></a>
                <a href="#" aria-label="LinkedIn"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/LinkedInLogo.png'); ?>" alt="LinkedIn"></a>
                <a href="#" aria-label="X"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/TwitterLogo.png'); ?>" alt="X"></a>
            </nav>
        </div>

        <div class="site-footer__bottom">
            <p>©Motovolt Mobility Pvt. Ltd.</p>
            <nav aria-label="Legal links">
                <a href="#">Return &amp; Refund Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Privacy Policy</a>
            </nav>
        </div>
    </div>
</footer>
