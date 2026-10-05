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

                    <a href="#" class="hero-nav__cta"> Book Now <img
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
                    <div class="hero-slider" data-hero-slider role="group" aria-label="Hero slides">
                        <?php
                        $hero_images = [
                            'hero-section-image-1.png',
                            'urbnx-card.png',
                            'klimbr-card.png',
                        ];
                        ?>

                        <?php foreach ($hero_images as $slide => $image): ?>
                            <button class="hero-slider__line<?php echo $slide === 0 ? ' is-active' : ''; ?>" type="button"
                                data-hero-slide="<?php echo esc_attr($slide); ?>"
                                data-hero-image="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $image); ?>"
                                aria-label="Show slide <?php echo esc_attr($slide + 1); ?>"
                                aria-pressed="<?php echo $slide === 0 ? 'true' : 'false'; ?>">
                            </button>
                        <?php endforeach; ?>
                        <button class="hero-slider__toggle" type="button" data-hero-toggle
                            aria-pressed="false">Pause</button>
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
                <br />
                motor controller, the battery, the chassis.
                <br />
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

            <h2 class="bento-section__heading">
                Your <span>Motovolt</span> Journey Starts Now.
            </h2>

            <div class="bento-grid">

                <!-- Klimbr -->
                <article class="bento-card">
                    <img class="bento-card__image"
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/klimbr-card.png'); ?>"
                        alt="Motovolt Klimbr electric motorcycle">

                    <div class="bento-card__top">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/bento-klmbr-headline.png'); ?>"
                            alt="Klimbr">
                    </div>

                    <div class="bento-card__bottom">
                        <div class="bento-card__text">
                            <span class="bento-card__tag">Daily commuters</span>
                            <p>Built for serious commuting —<br>with the torque to prove it.</p>
                        </div>
                        <a href="#" class="bento-card__link" aria-label="Explore Klimbr">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/arrow.svg'); ?>"
                                alt="">
                        </a>
                    </div>
                </article>

                <!-- UrbanX -->
                <article class="bento-card">
                    <img class="bento-card__image"
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/urbnx-card.png'); ?>"
                        alt="Motovolt UrbanX electric motorcycle">

                    <div class="bento-card__top">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/bento-urbnx-headline.png'); ?>"
                            alt="UrbanX">
                    </div>

                    <div class="bento-card__bottom">
                        <div class="bento-card__text">
                            <span class="bento-card__tag">Built for all ages</span>
                            <p>The UrbnX is urban mobility done right<br>without a license.</p>
                        </div>
                        <a href="#" class="bento-card__link" aria-label="Explore UrbanX">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/arrow.svg'); ?>"
                                alt="">
                        </a>
                    </div>
                </article>

                <!-- M7 -->
                <article class="bento-card">
                    <img class="bento-card__image"
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/m7-card.png'); ?>"
                        alt="Motovolt M7 electric scooter">

                    <div class="bento-card__top bento-card__top--dark">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/bento-m7-headline.png'); ?>"
                            alt="M7">
                    </div>

                    <div class="bento-card__bottom">
                        <div class="bento-card__text">
                            <span class="bento-card__tag">Urban commuters</span>
                            <p>Your everyday ride, engineered to outperform it. Low<br>total cost of ownership. High
                                reliability.</p>
                        </div>
                        <a href="#" class="bento-card__link" aria-label="Explore M7">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/arrow.svg'); ?>"
                                alt="">
                        </a>
                    </div>
                </article>

                <!-- Urbon -->
                <article class="bento-card">
                    <img class="bento-card__image"
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/urbon-card.jpg'); ?>"
                        alt="Motovolt Urbon electric motorcycle">

                    <div class="bento-card__top bento-card__top--dark">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/bento-urbn-headline.png'); ?>"
                            alt="Urbon">
                    </div>

                    <div class="bento-card__bottom">
                        <div class="bento-card__text">
                            <span class="bento-card__tag">Daily commuters</span>
                            <p>URBN is lightweight, easy to handle, and built to<br>make city commute a little less
                                complicated.</p>
                        </div>

                        <a href="#" class="bento-card__link" aria-label="Explore Urbon">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/arrow.svg'); ?>"
                                alt="">
                        </a>
                    </div>
                </article>

            </div>
        </div>
    </section>
    <!-- Experience / Inside Story -->
    <section class="experience-section" aria-labelledby="experience-title">
        <div class="container experience-section__content">
            <h2 id="experience-title" class="experience-section__heading">Experience Motovolt’s <span>Inside
                    Story</span></h2>
            <div class="experience-tabs" role="tablist" aria-label="Inside Story topics">
                <button class="experience-tabs__tab is-active" type="button" role="tab" aria-selected="true"
                    data-experience="controller">VESC Motor Controller</button>
                <button class="experience-tabs__tab" type="button" role="tab" aria-selected="false"
                    data-experience="battery">LFP Pouch-Cell Battery</button>
                <button class="experience-tabs__tab" type="button" role="tab" aria-selected="false"
                    data-experience="design">In-House Design &amp; Assembly</button>
            </div>
        </div>

        <div class="experience-slider" data-experience-slider>
            <div class="experience-slider__track">
                <article class="experience-card is-active" data-experience-card="controller">
                    <img class="experience-card__media"
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hero-section-image-1.png'); ?>"
                        alt="" aria-hidden="true">
                    <div class="experience-card__shade"></div><span class="experience-card__eyebrow">01 / 03</span>
                    <h3>VESC Motor Controller</h3>
                </article>
                <article class="experience-card" data-experience-card="battery">
                    <img class="experience-card__media"
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hero-section-image-1.png'); ?>"
                        alt="" aria-hidden="true">
                    <div class="experience-card__shade"></div><span class="experience-card__eyebrow">02 / 03</span>
                    <h3>LFP Pouch-Cell Battery</h3>
                </article>
                <article class="experience-card" data-experience-card="design">
                    <img class="experience-card__media"
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hero-section-image-1.png'); ?>"
                        alt="" aria-hidden="true">
                    <div class="experience-card__shade"></div><span class="experience-card__eyebrow">03 / 03</span>
                    <h3>In-House Design &amp; Assembly</h3>
                </article>
            </div>
        </div>
        <div class="container experience-section__detail">
            <p class="experience-section__description" data-experience-description>Most EV brands use generic
                Chinese-made controllers. Ours is developed in-house - and extracts up to 1.92x the torque from the same
                motor capacity. More pull. More efficiency. More control.</p>
            <a class="experience-section__cta" href="#">Explore More <span aria-hidden="true">&#8599;</span></a>
        </div>
    </section>
    <!-- Support -->
    <section class="support-section" aria-labelledby="support-title">
        <div class="container support-section__content">
            <div class="support-section__header">
                <h2 id="support-title" class="support-section__heading"><span>Support</span> That Keeps You Moving</h2>
                <p class="support-section__intro">Access quick assistance, expert guidance, and dependable after-sales
                    support throughout your ownership journey.</p>
            </div>

            <div class="support-panel" data-support-panel>
                <div class="support-panel__services" role="tablist" aria-label="Support services">
                    <span class="support-service__track" aria-hidden="true"><span
                            class="support-service__thumb"></span></span>
                    <button class="support-service is-active" type="button" role="tab" aria-selected="true"
                        data-support="network">
                        <span class="support-service__copy"><strong>Pan India Service Network</strong><small>Always
                                Connected. Always Supported.</small></span>
                    </button>
                    <button class="support-service" type="button" role="tab" aria-selected="false" data-support="video">
                        <span class="support-service__copy"><strong>Video Support</strong><small>Real-Time Remote
                                Assistance</small></span>
                    </button>
                    <button class="support-service" type="button" role="tab" aria-selected="false" data-support="parts">
                        <span class="support-service__copy"><strong>Parts Delivered</strong><small>Service That Comes To
                                You</small></span>
                    </button>
                    <button class="support-service" type="button" role="tab" aria-selected="false"
                        data-support="doorstep">
                        <span class="support-service__copy"><strong>Doorstep Service</strong><small>Service That Comes
                                To You</small></span>
                    </button>
                </div>
                <div class="support-panel__feature" data-support-feature>
                    <div class="support-panel__scene support-panel__scene--video" data-support-scene="video" hidden>
                        <img class="support-panel__phone"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/video-support.png'); ?>"
                            alt="Motovolt technician assisting over a video call">
                        <span class="support-panel__label">Issue Diagnosed</span><span class="support-panel__label">Fast
                            Service Response</span><span class="support-panel__label">Service Connected</span><span
                            class="support-panel__label">Battery Health</span><span class="support-panel__label">Live
                            Assistance</span>
                    </div>
                    <div class="support-panel__scene support-panel__scene--parts" data-support-scene="parts" hidden>
                        <img class="support-panel__delivery"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/parts-delivered.png'); ?>"
                            alt="Motovolt genuine parts delivered to your door">
                        <span class="support-panel__label">Genuine Parts</span><span
                            class="support-panel__label">Doorstep Delivery</span><span class="support-panel__label">Fast
                            Dispatch Support</span><span class="support-panel__label">Ready to Install Parts</span>
                    </div>
                    <div class="support-panel__scene support-panel__scene--doorstep" data-support-scene="doorstep"
                        hidden>
                        <img class="support-panel__technician"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/doorstop-service-guy.png'); ?>"
                            alt="Motovolt service technician at your location">
                        <img class="support-panel__scooter"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/doorstop-service-scooty.png'); ?>"
                            alt="">
                        <span class="support-panel__label">Certified Service Experts</span><span
                            class="support-panel__label">Hassle Free Maintenance</span><span
                            class="support-panel__label">Support At Your Location</span>
                    </div>
                    <div class="support-panel__feature-copy">
                        <h3 data-support-title>Always Connected</h3>
                        <p data-support-description>Our support team is always ready to assist you through calls and
                            video support.</p>
                    </div>
                    <div class="support-panel__wave" aria-hidden="true">
                        <img class="support-panel__visual-art"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/wave.png'); ?>"
                            alt="Visual representation of Motovolt support services">
                    </div>
                    <div class="support-panel__actions" aria-label="Contact Motovolt support">
                        <button class="support-panel__action" type="button" aria-label="Video call support"><svg
                                viewBox="0 0 24 24" aria-hidden="true">
                                <rect x="3.5" y="6.5" width="12" height="11" rx="2"></rect>
                                <path d="m15.5 10 5-3v10l-5-3"></path>
                            </svg></button>
                        <button class="support-panel__action" type="button" aria-label="Call support"><svg
                                viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M7 3.5h3l1.5 4-2 1.5a15 15 0 0 0 5.5 5.5l1.5-2 4 1.5v3c0 1.1-.9 2-2 2A15.5 15.5 0 0 1 5 5.5c0-1.1.9-2 2-2Z">
                                </path>
                                <path d="M14 4.5a5 5 0 0 1 5 5M14 7.5a2 2 0 0 1 2 2"></path>
                            </svg></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Store locator -->
    <section class="store-section" aria-labelledby="store-title">
        <div class="container store-section__inner">
            <div class="store-section__map">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/map.png'); ?>"
                    alt="Map showing Motovolt store locations">
            </div>
            <div class="store-section__copy">
                <h2 id="store-title">Find your <span>Motovolt Store</span></h2>
                <p>Visit a Motovolt Experience Centre to explore our latest electric<br>cycles and smart mobility
                    solutions.</p>
                <a class="store-section__cta" href="tel:+910000000000"><img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/store-location-icon.png'); ?>"
                        alt="phone">Request a call back</a>
                <label class="store-section__select-label" for="store-city">Choose a city</label>
                <div class="store-section__select-wrap">
                    <select class="store-section__select" id="store-city" name="store-city">
                        <option value="" selected>Select City</option>
                        <option value="bengaluru">Bengaluru</option>
                        <option value="mumbai">Mumbai</option>
                        <option value="delhi">Delhi</option>
                    </select>
                    <img class="store-section__select-arrow"
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/down-arrow.png'); ?>"
                        alt="" aria-hidden="true">
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer('home');
