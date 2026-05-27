<?php
$pageTitle = 'About Bensalem Smiles 4 u ';
include 'data/data.php';
include 'components/header.php';
?>

<main class="subpage">

    <!-- Page Hero -->
    <section class="page-hero page-hero--branded">
        <div class="page-hero__overlay"></div>
        <div class="container-90 page-hero__content">
            <h1 class="page-hero__title">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb page-hero__breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ==========================================
         Section 01 · About Bensalem Smiles 4 U
         ========================================== -->
    <section class="py-5 py-lg-6 bg-white">
        <div class="container-90">
            <div class="row align-items-center g-4 g-lg-5">

                <!-- Text -->
                <div class="col-12 col-lg-7 reveal reveal-slide-left">
                    <span class="section-eyebrow">About Our Clinic</span>
                    <h2 class="about-title">About Bensalem Smiles 4 U</h2>
                    <p class="about-desc">Thank you for considering our clinic for you and your family's dental needs. We are pleased to welcome you as a new patient and look forward to being of service to you. We provide a full range of general, preventive and cosmetic dental treatments in a relaxed atmosphere, using the latest technology. Our goal is to provide our patients with the best possible dental care in an environment of comfort and compassion.</p>
                    <p class="about-desc">If you are experiencing loose teeth, bleeding gums, sensitivity or pain with your teeth when eating or drinking, please make an appointment with us to discuss your dental health needs. We use advanced proven technology to keep your smile looking the best!</p>
                    <a href="doctors.php" class="btn btn-primary about-btn mt-3">
                        Our Qualified Doctors
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ms-2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>

                <!-- Image -->
                <div class="col-12 col-lg-5 reveal reveal-slide-right">
                    <div class="about-img-wrap">
                        <img src="img/slider01.jpg" alt="Bensalem Smiles Dental Clinic" class="about-img">
                        <div class="about-badge about-badge--top">
                            <span class="about-badge__number">10<sup>+</sup></span>
                            <span class="about-badge__label">Years of Experience</span>
                        </div>
                        <div class="about-badge about-badge--bottom">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <span class="about-badge__label">Trusted by 5000+ Patients</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==========================================
         Section 02 · New Patient Specials
         ========================================== -->
    <section class="py-5 py-lg-6" style="background: var(--color-light-bg);">
        <div class="container-90">
            <div class="row align-items-center g-4 g-lg-5">

                <!-- Stats Visual -->
                <div class="col-12 col-lg-5 reveal reveal-slide-left">
                    <div class="specials-stats-grid">
                        <div class="specials-stat reveal reveal-fade-up" data-reveal-delay="0">
                            <div class="specials-stat__icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="specials-stat__value">5,000<sup>+</sup></div>
                                <div class="specials-stat__label">Happy Patients Served</div>
                            </div>
                        </div>
                        <div class="specials-stat reveal reveal-fade-up" data-reveal-delay="80">
                            <div class="specials-stat__icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                            </div>
                            <div>
                                <div class="specials-stat__value">Same Day</div>
                                <div class="specials-stat__label">Appointments Available</div>
                            </div>
                        </div>
                        <div class="specials-stat reveal reveal-fade-up" data-reveal-delay="160">
                            <div class="specials-stat__icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="specials-stat__value">16<sup>+</sup></div>
                                <div class="specials-stat__label">Insurance Plans Accepted</div>
                            </div>
                        </div>
                        <div class="specials-stat reveal reveal-fade-up" data-reveal-delay="240">
                            <div class="specials-stat__icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                            </div>
                            <div>
                                <div class="specials-stat__value">15<sup>+</sup></div>
                                <div class="specials-stat__label">Dental Services Offered</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Text -->
                <div class="col-12 col-lg-7 reveal reveal-slide-right">
                    <span class="section-eyebrow">New Patients</span>
                    <h2 class="about-title">New Patient Specials</h2>
                    <p class="about-desc">Learn more about our new patient specials, discounts and the exceptional service we give our patients!</p>
                    <p class="about-desc">We want to thank you for visiting Bensalem Smiles. Our goal is for your first visit to be one of comfort and acknowledgement of your personal dental needs. We will take the required time to properly diagnose your immediate dental concerns, review your past medical and dental history, and create a treatment plan that provides for your optimal dental health.</p>
                    <p class="about-desc mb-4">Why? Because the foundation of a long term relationship is established at your first visit to our practice.</p>

                    <div class="p-3 p-md-4 rounded-3 mb-4" style="background: var(--bs-primary-light); border-left: 4px solid var(--bs-primary);">
                        <p class="mb-2 fw-semibold" style="color: var(--bs-secondary); font-size: 0.925rem;">Interested? Complete the form below and we will contact you today!</p>
                        <p class="mb-0" style="color: #475569; font-size: 0.875rem;">Or feel free to call us at <a href="tel:2156383350" class="fw-bold text-decoration-none" style="color: var(--bs-primary);">(215) 638-3350</a>. Please fill out the new patient forms and bring them to your first visit to save time.</p>
                    </div>

                    <div class="about-action-btns d-flex flex-wrap gap-3">
                        <a href="appointment.php" class="btn btn-primary fw-semibold">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            Get Appointment
                        </a>
                        <a href="fair-prices.php" class="btn btn-outline-secondary fw-semibold">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                            Get Fair Prices
                        </a>
                        <a href="downloads.php" class="btn btn-outline-primary fw-semibold">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg>
                            Download Forms
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==========================================
         Section 03 · Why Choose Us
         ========================================== -->
    <section class="py-5 py-lg-6 bg-white">
        <div class="container-90">

            <!-- Header -->
            <div class="section-header text-center mb-5 reveal reveal-fade-up">
                <span class="section-eyebrow">Our Commitment</span>
                <h2 class="section-heading">Why Choose Us</h2>
                <p class="section-subheading">Bensalem Smiles has many ways to serve you at the highest level — our goal is to bring the best smile back to your face.</p>
            </div>

            <!-- Cards -->
            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-12 col-sm-6 col-md-4 reveal reveal-fade-up" data-reveal-delay="0">
                    <div class="why-card">
                        <div class="why-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                        </div>
                        <h4 class="why-card__title">Same Day Appointments</h4>
                        <p class="why-card__desc">No more delays or frustrations when you are suffering with dental pain. Bensalem Smiles goes an extra mile to serve you and does our best to give same day appointments for critical issues.</p>
                        <p class="why-card__desc mt-2">We're available every day except Sunday. On Sundays, give us a call so that we can take care of you first.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-sm-6 col-md-4 reveal reveal-fade-up" data-reveal-delay="120">
                    <div class="why-card">
                        <div class="why-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <h4 class="why-card__title">Dental Care Around Your Schedule</h4>
                        <p class="why-card__desc">Changes in your schedule may suddenly present an opportunity for you to take care of yourself. Our smile crew is here to make solutions easy for you.</p>
                        <p class="why-card__desc mt-2">Work around your schedule — our crew will find appointments as per your availability or a same-day appointment to address your dental concerns.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-sm-6 col-md-4 reveal reveal-fade-up" data-reveal-delay="240">
                    <div class="why-card">
                        <div class="why-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                        </div>
                        <h4 class="why-card__title">Friendly Dental Services</h4>
                        <p class="why-card__desc">Each member of our smile crew is highly trained with years of patient care behind their hands. We listen first, then offer customized dental care solutions each patient deserves.</p>
                        <p class="why-card__desc mt-2">From comprehensive checkups to same-day restorations with CEREC®, we offer a full range of dentistry services for any oral health need.</p>
                    </div>
                </div>

            </div>

            <!-- CTA -->
            <div class="text-center mt-5 reveal reveal-fade-up" data-reveal-delay="100">
                <p class="text-muted mb-3" style="font-size: 0.95rem;">Ready to experience the Bensalem difference?</p>
                <a href="appointment.php" class="btn btn-primary btn-lg">
                    Book Your Appointment Today
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ms-2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>

        </div>
    </section>

</main>

<?php include 'components/footer.php'; ?>