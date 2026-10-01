<?php
/**
 * Front Page Template
 *
 * @package Supercode
 */

get_header('home');
?>

<main id="primary" class="site-main">
    <section class="hero">
        <!-- Hero Background -->
        <img class="hero__background"
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hero-section-image-1.png'); ?>"
            alt="Motovolt electric motorcycle">

        <div class="hero__content">
            <!-- Hero Navigation -->
            <nav class="hero-nav">
                <!-- Logo Block -->
                <a href="<?php echo esc_url(home_url('/')); ?>" class="hero-nav__logo"
                    aria-label="<?php bloginfo('name'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/company-logo.png'); ?>"
                        alt="<?php bloginfo('name'); ?>">
                </a>

                <!-- Menu Block -->
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
                            alt="<?php bloginfo('name'); ?>"></a>
                </div>

            </nav>

            <!-- Hero Main Content -->
            <div class="hero-main">
                <!-- Product Name -->
                <img class="hero-product"
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/klimbr.png'); ?>"
                    alt="Klimbr" />

                <!-- Tagline -->
                <div class="hero-title">
                    <span class="hero-title-small">Beautifully</span>
                    <span class="hero-title-large">Engineered</span>
                </div>

                <!-- Bottom Content -->
                <div class="hero-bottom">
                    <!-- Stats -->
                    <div class="hero-stats">
                        <div class="hero-stats__item">
                            <div class="hero-stats__value">110<span class="hero-stats__unit">KM</span></div>
                            <span class="hero-stats__label">IDC Range</span>
                        </div>

                        <div class="hero-stats__item">
                            <div class="hero-stats__value">1.9<span class="hero-stats__unit">KWh</span></div>
                            <span class="hero-stats__label">Battery</span>
                        </div>

                        <div class="hero-stats__item">
                            <div class="hero-stats__value">60<span class="hero-stats__unit">NM</span></div>
                            <span class="hero-stats__label">Torque</span>
                        </div>
                    </div>

                    <!-- Slider Indicators -->
                    <div class="hero-slider" aria-label="Hero slides">
                        <span class="hero-slider__line hero-slider__line--active"></span>
                        <span class="hero-slider__line"></span>
                        <span class="hero-slider__line"></span>
                        <span class="hero-slider__line"></span>
                        <span class="hero-slider__line"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About / Introduction Section -->
    <section class="intro-section">
        <div class="container intro-section__content">
            <h2 class="intro-section__heading">
                <span>Beautiful</span>
                <span class="intro-section__muted"> On The </span>
                <span>Outside.</span>
                <br>
                <span>Uncompromising</span>
                <span class="intro-section__muted"> On The </span>
                <span>Inside.</span>
            </h2>

            <p class="intro-section__description">
                Your Motovolt will turn heads at the signal. But the real beauty is inside the
                <br/>
                motor controller, the battery, the chassis.
                <br/>
                They decide how it rides, how long it lasts, and how wide the smile on your face
                is when you zoom off as the signal turns green.
            </p>

            <div class="intro-section__stats">
                <div class="intro-section__stat">
                    <div class="intro-section__stat-value">200+</div>
                    <div class="intro-section__stat-label">Charging stations worldwide</div>
                </div>

                <div class="intro-section__stat">
                    <div class="intro-section__stat-value">35000+</div>
                    <div class="intro-section__stat-label">Customers</div>
                </div>

                <div class="intro-section__stat">
                    <div class="intro-section__stat-value">200+</div>
                    <div class="intro-section__stat-label">Dealerships</div>
                </div>
            </div>
        </div>
    </section>

    <section class="bento-section">
        <div class="container bento-section__content">
            
        </div>
    </section>
</main>

<?php
get_footer('home');