<?php
$pageTitle = 'Bensalem Smiles 4 U';
include 'data/data.php';
include 'components/header.php';
?>

    <!-- main -->
    <main>
        <!-- Home Hero Carousel-->
        <section class="home-hero-carousel carousel slide carousel-fade">
            <div class="swiper-container homeslider">
                <div class="swiper-wrapper">
                    <?php foreach ($heroSlides as $slide): ?>
                    <div class="swiper-slide <?= htmlspecialchars($slide['class']) ?>">
                        <div class="slide-overlay"></div>
                        <div class="slide-content">
                            <h2 class="slide-title"><?= htmlspecialchars($slide['title']) ?></h2>
                            <span class="slide-line"></span>
                            <p class="slide-desc"><?= htmlspecialchars($slide['desc']) ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!--/ Home Hero Carousel-->

        <!-- features -->
        <section class="features py-5 bg-secondary">
            <div class="container-90">
                <div class="row g-4">
                    <?php foreach ($features as $f): ?>
                    <div class="col-12 col-sm-6 col-xl">
                        <div class="feature-card reveal reveal-fade-up" data-reveal-delay="<?= $f['delay'] ?>">
                            <div class="feature-icon-wrap">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <?= $f['icon'] ?>
                                </svg>
                            </div>
                            <h5 class="feature-title"><?= htmlspecialchars($f['title']) ?></h5>
                            <p class="feature-desc"><?= htmlspecialchars($f['desc']) ?></p>
                            <a href="<?= htmlspecialchars($f['href']) ?>" class="feature-readmore">
                                Read more
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>                   

                </div>
            </div>
        </section>
        <!--/ Features-->

        <!-- Popular Services -->
        <section class="features3 py-5 py-lg-6">
            <div class="container-90">

                <!-- Section Header -->
                <div class="text-center mb-5 reveal reveal-fade-up">
                    <span class="section-eyebrow">Our Dental Care</span>
                    <h2 class="section-heading">Popular Dental Services</h2>
                    <p class="section-subheading">Compassionate, patient-focused dental care delivered with the latest technology and the warmth you deserve.</p>
                </div>

                <div class="row g-4">

                    <?php foreach ($dentalCareCards as $card): ?>
                    <div class="col-12 col-sm-6 col-lg-3 reveal reveal-fade-up" data-reveal-delay="<?= $card['delay'] ?>">
                        <div class="f3-card<?= $card['active'] ? ' f3-card--active' : '' ?>">
                            <div class="f3-card__top">
                                <div class="f3-icon">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="niiiiiiii
                                    one" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                                        <?= $card['icon'] ?>
                                    </svg>
                                </div>
                                <span class="f3-number"><?= $card['number'] ?></span>
                            </div>
                            <h4 class="f3-title"><?= htmlspecialchars($card['title']) ?></h4>
                            <p class="f3-desc"><?= htmlspecialchars($card['desc']) ?></p>
                            <div class="f3-divider"></div>
                            <a href="<?= htmlspecialchars($card['href']) ?>" class="f3-link">
                                Learn More
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--/ more features-->

        <!-- about -->
        <section class="about py-5 py-lg-6 bg-white">
            <div class="container-90">

                <!-- Block 1: Welcome -->
                <div class="row align-items-center g-5 mb-5 mb-lg-7">

                    <!-- Text -->
                    <div class="col-lg-6 reveal reveal-slide-left">
                        <span class="section-eyebrow">About Us</span>
                        <h2 class="about-title">Welcome to Bensalem Smiles 4 U Dental</h2>
                        <p class="about-desc">Finding the right dental care plan is vital for your well-being and in this endeavour, Bensalem Smiles 4U has been able to bring about a state-of-the-art practice that offers comprehensive dental care to the patients. With our years of experience in providing quality dental care, we incorporate the latest technology and treatment techniques; we become the most preferred general dentist in Bensalem.</p>
                        <a href="about.php" class="btn btn-primary about-btn">
                            Read More
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ms-2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>

                    <!-- Image -->
                    <div class="col-lg-6 reveal reveal-slide-right">
                        <div class="about-img-wrap">
                            <img src="img/slider01.jpg" alt="Bensalem Smiles Dental Clinic" class="about-img">
                            <div class="about-badge about-badge--top">
                                <span class="about-badge__number">10<sup>+</sup></span>
                                <span class="about-badge__label">Years of Experience</span>
                            </div>
                            <div class="about-badge about-badge--bottom">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                <span class="about-badge__label">Trusted by 5000+ Patients</span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Divider -->
                <div class="about-divider reveal reveal-fade-up"></div>

                <!-- Block 2: We Care -->
                <div class="row align-items-center g-5 mt-5 mt-lg-7">

                    <!-- Image -->
                    <div class="col-lg-6 reveal reveal-slide-left">
                        <div class="about-img-wrap about-img-wrap--alt">
                            <img src="img/image11.jpg" alt="Expert Dental Care" class="about-img">
                            <div class="about-floating-card">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                <div>
                                    <p class="mb-0 fw-bold text-secondary" style="font-size:0.85rem;">Patient-Centered Care</p>
                                    <p class="mb-0 text-muted" style="font-size:0.75rem;">Your smile is our priority</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Text -->
                    <div class="col-lg-6 reveal reveal-slide-right">
                        <span class="section-eyebrow">What We Offer</span>
                        <h2 class="about-title">We Care About Your Oral Health and We Improve Your Facial Esthetics</h2>
                        <ul class="about-list">
                            <li class="about-list__item">
                                <span class="about-list__icon">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span>100% dental care</span>
                            </li>
                            <li class="about-list__item">
                                <span class="about-list__icon">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span>Facial esthetics and TMJ pain management</span>
                            </li>
                            <li class="about-list__item">
                                <span class="about-list__icon">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span>Facial therapy</span>
                            </li>
                            <li class="about-list__item">
                                <span class="about-list__icon">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span>Patient centered care</span>
                            </li>
                            <li class="about-list__item">
                                <span class="about-list__icon">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span>Affordable and accessible services</span>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </section>
        <!--/ about-->

        <!-- advice section -->
        <section class="advice-section">
            <div class="advice-overlay"></div>
            <div class="container-90 position-relative" style="z-index:2;">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-7 text-center">
                        <span class="advice-eyebrow reveal reveal-fade-up" data-reveal-delay="0">Expert Dental Care</span>

                        <h2 class="advice-title reveal reveal-fade-up" data-reveal-delay="120">
                            Do You Need a Dentist's Advice for the Dental Problem?
                        </h2>

                        <p class="advice-desc reveal reveal-fade-up" data-reveal-delay="240">
                            Whatever the difficulty you are having in your tooth, don't hesitate and come to us, we will give you a solution for every problem you have. New patients are always welcome with their dental problem.
                        </p>

                        <a href="tel:2156383350" class="advice-cta reveal reveal-fade-up" data-reveal-delay="360">
                            <span class="advice-cta__icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.13 12.6 19.79 19.79 0 0 1 1.06 4a2 2 0 0 1 1.72-2.18h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                            </span>
                            <span class="advice-cta__text">
                                <span class="advice-cta__label">Call Us Now</span>
                                <span class="advice-cta__number">215-638-3350</span>
                            </span>
                        </a>

                    </div>
                </div>
            </div>
        </section>
        <!--/ advice section-->     

        <!-- Insurance Partners -->
        <section class="insurance-section py-5 py-lg-6">
            <div class="container-90">

                <!-- Section Header -->
                <div class="text-center mb-5 reveal reveal-fade-up">
                    <span class="section-eyebrow">Accepted Insurance</span>
                    <h2 class="section-heading">Our Insurance Partners</h2>
                    <p class="section-subheading">Do not have Dental Insurance? No Worry! We have patient centric and best affordable dental plans. Just visit or stop by at our office.</p>
                </div>

            </div>

            <!-- Marquee track (full-width, no container clipping) -->
            <div class="ins-marquee-wrap reveal reveal-fade-up" data-reveal-delay="150">
                <div class="ins-marquee-track">
                    <?php foreach ($insurancePartners as $ins): ?>
                    <div class="ins-logo"><img src="<?= htmlspecialchars($ins['src']) ?>" alt="<?= htmlspecialchars($ins['alt']) ?>" loading="lazy"></div>
                    <?php endforeach; ?>
                    <?php foreach ($insurancePartners as $ins): ?>
                    <div class="ins-logo" aria-hidden="true"><img src="<?= htmlspecialchars($ins['src']) ?>" alt="" loading="lazy"></div>
                    <?php endforeach; ?>
                </div>
            </div>

        </section>
        <!-- /Insurance Partners -->  

        <?php include 'components/gallery.php'; ?>

        <!-- testimonials -->
        <section class="testimonials-section py-5 py-lg-6">
            <div class="container-90">

                <!-- Section Header -->
                <div class="text-center mb-5 reveal reveal-fade-up">
                    <span class="section-eyebrow">Patient Reviews</span>
                    <h2 class="section-heading">What Our Patients Say</h2>
                    <p class="section-subheading">Taking seamless key performance indicators offline to maximise the long tail to determine their progression.</p>
                </div>

                <!-- Swiper Testimonial Carousel -->
                <div class="swiper-container testimonial-swiper reveal reveal-fade-up" data-reveal-delay="100">
                    <div class="swiper-wrapper">

                        <?php foreach ($testimonials as $t): ?>
                        <div class="swiper-slide"><div class="testi-card">
                            <div class="testi-stars">
                                <?php for ($s = 0; $s < 5; $s++): ?>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <?php endfor; ?>
                            </div>
                            <svg width="34" height="34" viewBox="0 0 24 24" fill="currentColor" class="testi-quote-icon"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                            <p class="testi-text"><?= htmlspecialchars($t['text']) ?></p>
                            <div class="testi-author"><div class="testi-avatar"><?= htmlspecialchars($t['avatar']) ?></div><div><p class="testi-name"><?= htmlspecialchars($t['name']) ?></p><p class="testi-role">Patient</p></div></div>
                        </div></div>
                        <?php endforeach; ?>

                    </div>

                    <!-- Prev / Next buttons -->
                    <div class="testi-nav">
                        <button class="testi-btn testi-btn--prev" id="testiPrev" aria-label="Previous review">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
                        </button>
                        <button class="testi-btn testi-btn--next" id="testiNext" aria-label="Next review">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </button>
                    </div>

                    <div class="swiper-pagination testi-pagination"></div>
                </div>

            </div>
        </section>
        <!--/ testimonials-->
    </main>

<?php include 'components/footer.php'; ?>
