<?php
$pageTitle = 'Special Offers';
include 'data/data.php';
include 'components/header.php';
?>

<main class="subpage">

    <!-- Page Hero -->
    <section class="page-hero page-hero--branded">
        <div class="page-hero__overlay"></div>
        <div class="container-90 page-hero__content">
            <h1 class="page-hero__title reveal reveal-fade-up">Special Offers</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb page-hero__breadcrumb reveal reveal-fade-up" data-reveal-delay="100">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Special Offers</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ── Section 01 · Intro ── -->
    <section class="py-5 py-lg-6 bg-white">
        <div class="container-90">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 text-center">
                    <p class="section-eyebrow reveal reveal-fade-up">Save More, Smile More</p>
                    <h2 class="section-heading reveal reveal-fade-up" data-reveal-delay="80">
                        Special Offers at <span class="text-primary">Bensalem Smiles 4 U</span>
                    </h2>
                    <div class="section-rule mx-auto reveal reveal-fade-up" data-reveal-delay="140"></div>
                    <p class="about-desc reveal reveal-fade-up" data-reveal-delay="200">
                        Take advantage of our special offers. Use our new patient specials and coupons to save money. With late evening and weekend hours, Bensalem Smiles 4 U offers you convenient dental care. We accept most insurance plans and offer new patient discounts.
                    </p>
                    <p class="about-desc reveal reveal-fade-up" data-reveal-delay="240">
                        You'll love our friendly and experienced staff for all your family's dental needs. We're always accepting new patients — check out the offers below and create the smile you want and deserve!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Section 02 · Featured Coupons ── -->
    <section class="py-5 py-lg-6" style="background: var(--color-light-bg);">
        <div class="container-90">

            <div class="text-center mb-5">
                <p class="section-eyebrow reveal reveal-fade-up">New Patient Specials</p>
                <h2 class="section-heading reveal reveal-fade-up" data-reveal-delay="80">
                    Today's <span class="text-primary">Best Deals</span>
                </h2>
                <div class="section-rule mx-auto reveal reveal-fade-up" data-reveal-delay="160"></div>
            </div>

            <div class="row g-4 justify-content-center">

                <div class="col-12 col-sm-6 col-lg-4 reveal reveal-fade-up" data-reveal-delay="0">
                    <div class="offer-card offer-card--featured h-100">
                        <div class="offer-card__badge">Limited Time</div>
                        <div class="offer-card__price">Free</div>
                        <h3 class="offer-card__title">Consultation</h3>
                        <p class="offer-card__desc">For Implants, Invisalign &amp; Dentures</p>
                        <!-- <a href="contact.php" class="btn btn-primary mt-auto">Book Now</a> -->
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 reveal reveal-fade-up" data-reveal-delay="100">
                    <div class="offer-card h-100">
                        <div class="offer-card__price">$79</div>
                        <h3 class="offer-card__title">Adult Patient</h3>
                        <p class="offer-card__desc">Emergency Exam with 1 X-Ray</p>
                        <!-- <a href="contact.php" class="btn btn-outline-primary mt-auto">Book Now</a> -->
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 reveal reveal-fade-up" data-reveal-delay="200">
                    <div class="offer-card h-100">
                        <div class="offer-card__price">$98</div>
                        <h3 class="offer-card__title">Cleaning</h3>
                        <p class="offer-card__desc">General Cleaning</p>
                        <!-- <a href="contact.php" class="btn btn-outline-primary mt-auto">Book Now</a> -->
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ── Section 03 · In-House Insurance Plans ── -->
    <section class="py-5 py-lg-6 bg-white">
        <div class="container-90">

            <div class="text-center mb-5">
                <p class="section-eyebrow reveal reveal-fade-up">Preventive Care</p>
                <h2 class="section-heading reveal reveal-fade-up" data-reveal-delay="80">
                    In-House <span class="text-primary">Preventive Insurance Plans</span>
                </h2>
                <div class="section-rule mx-auto reveal reveal-fade-up" data-reveal-delay="160"></div>
            </div>

            <div class="row g-4 justify-content-center">

                <div class="col-12 col-md-4 reveal reveal-fade-up" data-reveal-delay="0">
                    <div class="plan-card h-100">
                        <div class="plan-card__price">$129<span>/yr</span></div>
                        <h3 class="plan-card__name">Basic Plan</h3>
                        <ul class="plan-card__features">
                            <li>1 Cleaning</li>
                            <li>1 Exam</li>
                            <li>Basic X-Rays</li>
                            <li>10% Off All Procedures</li>
                        </ul>
                        <!-- <a href="contact.php" class="btn btn-outline-primary w-100 mt-auto">Get Started</a> -->
                    </div>
                </div>

                <div class="col-12 col-md-4 reveal reveal-fade-up" data-reveal-delay="100">
                    <div class="plan-card plan-card--featured h-100">
                        <div class="plan-card__badge">Most Popular</div>
                        <div class="plan-card__price">$240<span>/yr</span></div>
                        <h3 class="plan-card__name">Standard Plan</h3>
                        <ul class="plan-card__features">
                            <li>2 Cleanings</li>
                            <li>2 Exams</li>
                            <li>Full Mouth X-Ray</li>
                            <li>20% Off All Procedures</li>
                        </ul>
                        <!-- <a href="contact.php" class="btn btn-light w-100 mt-auto fw-semibold">Get Started</a> -->
                    </div>
                </div>

                <div class="col-12 col-md-4 reveal reveal-fade-up" data-reveal-delay="200">
                    <div class="plan-card h-100">
                        <div class="plan-card__price">$340<span>/yr</span></div>
                        <h3 class="plan-card__name">Premium Plan</h3>
                        <ul class="plan-card__features">
                            <li>2 Cleanings</li>
                            <li>2 Exams</li>
                            <li>3D X-Ray Scan</li>
                            <li>25% Off All Procedures</li>
                        </ul>
                        <!-- <a href="contact.php" class="btn btn-outline-primary w-100 mt-auto">Get Started</a> -->
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ── Section 04 · More Offers ── -->
    <section class="py-5 py-lg-6" style="background: var(--color-light-bg);">
        <div class="container-90">

            <div class="text-center mb-5">
                <p class="section-eyebrow reveal reveal-fade-up">More Savings</p>
                <h2 class="section-heading reveal reveal-fade-up" data-reveal-delay="80">
                    Additional <span class="text-primary">Patient Offers</span>
                </h2>
                <div class="section-rule mx-auto reveal reveal-fade-up" data-reveal-delay="160"></div>
            </div>

            <div class="row g-4">

                <div class="col-12 col-sm-6 col-lg-4 reveal reveal-fade-up" data-reveal-delay="0">
                    <div class="offer-card h-100">
                        <div class="offer-card__price">$129</div>
                        <h3 class="offer-card__title">New Adult Patient</h3>
                        <p class="offer-card__desc">Includes exam, X-ray &amp; teeth cleaning</p>
                        <!-- <a href="contact.php" class="btn btn-outline-primary mt-auto">Book Now</a> -->
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 reveal reveal-fade-up" data-reveal-delay="80">
                    <div class="offer-card h-100">
                        <div class="offer-card__price">$99</div>
                        <h3 class="offer-card__title">New Kid Patient</h3>
                        <p class="offer-card__desc">Under 12 years old — fluoride treatment &amp; school forms filled out</p>
                        <!-- <a href="contact.php" class="btn btn-outline-primary mt-auto">Book Now</a> -->
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 reveal reveal-fade-up" data-reveal-delay="160">
                    <div class="offer-card offer-card--featured h-100">
                        <div class="offer-card__badge">Best Value</div>
                        <div class="offer-card__price">$500</div>
                        <h3 class="offer-card__title">Zoom Whitening</h3>
                        <p class="offer-card__desc">Initial Zoom whitening in-office + take-home kit with lifetime refill</p>
                        <!-- <a href="tooth-whitening.php" class="btn btn-primary mt-auto">Learn More</a> -->
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 reveal reveal-fade-up" data-reveal-delay="0">
                    <div class="offer-card offer-card--discount h-100">
                        <div class="offer-card__price">30% Off</div>
                        <h3 class="offer-card__title">Senior Citizens &amp; Veterans</h3>
                        <p class="offer-card__desc">Discount applied on standard fee schedule</p>
                        <!-- <a href="contact.php" class="btn btn-outline-primary mt-auto">Book Now</a> -->
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 reveal reveal-fade-up" data-reveal-delay="80">
                    <div class="offer-card h-100">
                        <div class="offer-card__price">$250</div>
                        <h3 class="offer-card__title">3D CBCT Scan</h3>
                        <p class="offer-card__desc">Not included with other promotions</p>
                        <!-- <a href="3dcbct.php" class="btn btn-outline-primary mt-auto">Learn More</a> -->
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ── CTA Strip ── -->
    <section class="py-5 py-lg-6" style="background: linear-gradient(135deg, #061c63 0%, #0c2b8c 55%, #088ac7 100%);">
        <div class="container-90 text-center">
            <h2 class="section-heading text-white reveal reveal-fade-up">
                Ready to Save on Your <span style="color: #7dd3fc;">Next Visit?</span>
            </h2>
            <p class="reveal reveal-fade-up" data-reveal-delay="100" style="color: rgba(255,255,255,0.85); max-width: 520px; margin: 0 auto 2rem;">
                Contact us today to take advantage of these offers. Feel free to ask our staff about manufacturer coupons and dental product samples available at our office.
            </p>
            <div class="d-flex flex-wrap gap-3 justify-content-center reveal reveal-fade-up" data-reveal-delay="200">
                <a href="tel:2156383350" class="btn btn-light btn-lg px-4 fw-semibold" style="color: var(--bs-secondary);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="me-2" viewBox="0 0 16 16"><path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>
                    (215) 638-3350
                </a>
                <a href="https://app.nexhealth.com/appt/bensalem-smiles-4-u?lid=242566" target="_blank" class="btn btn-outline-light btn-lg px-4 fw-semibold">
                    Request Appointment
                </a>
            </div>
        </div>
    </section>

</main>

<?php include 'components/footer.php'; ?>
