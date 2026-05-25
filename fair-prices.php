<?php
$pageTitle = 'Fair Prices';
include 'data/data.php';
include 'components/header.php';
?>

<main class="subpage">

    <!-- Page Hero -->
    <section class="page-hero page-hero--branded">
        <div class="page-hero__overlay"></div>
        <div class="container-90 page-hero__content">
            <h1 class="page-hero__title">Fair Prices</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb page-hero__breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="about.php">Clinic</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Fair Prices</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ==========================================
         Section 01 · Intro
         ========================================== -->
    <section class="py-5 py-lg-6 bg-white">
        <div class="container-90">
            <div class="row align-items-center g-4 g-lg-5">

                <!-- Text -->
                <div class="col-12 col-lg-7 reveal reveal-slide-left">
                    <span class="section-eyebrow">Affordable Care</span>
                    <h2 class="section-heading mt-1 mb-3">Quality Dental Care<br class="d-none d-md-block"> Without the High Price Tag</h2>
                    <p class="about-desc">At Bensalem Smiles 4 U, we firmly believe that every patient deserves access to exceptional dental care — regardless of their financial situation. Our transparent, straightforward pricing means no hidden fees, no surprises, and no stress.</p>
                    <p class="about-desc">Whether you're a new patient, a senior, a veteran, or a family looking for affordable preventive care, we have flexible options designed with you in mind. Our in-house preventive plans are a perfect alternative to traditional dental insurance.</p>
                    <button class="btn btn-primary about-btn mt-2" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                        Book an Appointment
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ms-2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                </div>

                <!-- Value Pills -->
                <div class="col-12 col-lg-5 reveal reveal-slide-right">
                    <div class="d-flex flex-column gap-3">

                        <div class="price-value-item">
                            <div class="price-value-item__icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            </div>
                            <div>
                                <div class="price-value-item__label">No Hidden Fees</div>
                                <div class="price-value-item__desc">Every charge is explained upfront before treatment begins.</div>
                            </div>
                        </div>

                        <div class="price-value-item">
                            <div class="price-value-item__icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            </div>
                            <div>
                                <div class="price-value-item__label">Same-Day Estimates</div>
                                <div class="price-value-item__desc">We provide a detailed cost breakdown before any procedure.</div>
                            </div>
                        </div>

                        <div class="price-value-item">
                            <div class="price-value-item__icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                            </div>
                            <div>
                                <div class="price-value-item__label">Flexible Payment Options</div>
                                <div class="price-value-item__desc">In-house plans, insurance accepted &amp; third-party financing available.</div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==========================================
         Section 02 · Special Offers
         ========================================== -->
    <section class="py-5 py-lg-6" style="background: var(--color-light-bg);">
        <div class="container-90">

            <div class="text-center reveal reveal-fade-up mb-5">
                <span class="section-eyebrow">Special Offers</span>
                <h2 class="section-heading mt-1">Our Best Deals for You</h2>
                <p class="text-muted" style="max-width: 560px; margin: 0.75rem auto 0; font-size: 0.95rem;">Affordable entry points for new and returning patients. All offers subject to clinical evaluation.</p>
            </div>

            <!-- Row A · 3 Offer Cards -->
            <div class="row g-4 mb-4">

                <!-- Free Consultation -->
                <div class="col-12 col-sm-6 col-lg-4 reveal reveal-fade-up" data-reveal-delay="0">
                    <div class="price-card price-card--free h-100">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="price-card__badge price-card__badge--free">FREE</span>
                            <div class="price-card__icon" style="background: rgba(22,163,74,0.1); color: #16a34a;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                            </div>
                        </div>
                        <div class="price-card__amount" style="color: #16a34a;">$0</div>
                        <div class="price-card__title">Free Consultation</div>
                        <p class="price-card__desc">Come in, meet our team, and discuss your dental goals — completely free, no obligation.</p>
                        <ul class="price-card__list">
                            <li>Meet your dentist one-on-one</li>
                            <li>Discuss your smile goals &amp; concerns</li>
                            <li>Receive a personalized care overview</li>
                            <li>No pressure, no commitment</li>
                        </ul>
                        <button class="btn btn-outline-success w-100 mt-auto pt-3" style="border-radius: 10px; font-weight: 600;" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                            Book Free Visit
                        </button>
                    </div>
                </div>

                <!-- Emergency Exam -->
                <div class="col-12 col-sm-6 col-lg-4 reveal reveal-fade-up" data-reveal-delay="100">
                    <div class="price-card h-100">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="price-card__badge price-card__badge--pop">POPULAR</span>
                            <div class="price-card__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                            </div>
                        </div>
                        <div class="price-card__amount">$79</div>
                        <div class="price-card__title">Emergency Exam</div>
                        <p class="price-card__desc">Urgent dental pain? We'll see you fast and get you relief with a thorough emergency exam.</p>
                        <ul class="price-card__list">
                            <li>Same-day emergency appointments</li>
                            <li>Comprehensive clinical exam</li>
                            <li>Digital X-rays included</li>
                            <li>Immediate pain assessment &amp; plan</li>
                        </ul>
                        <button class="btn btn-primary w-100 mt-auto pt-3" style="border-radius: 10px; font-weight: 600;" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                            Book Emergency Visit
                        </button>
                    </div>
                </div>

                <!-- Cleaning Special -->
                <div class="col-12 col-sm-6 col-lg-4 reveal reveal-fade-up" data-reveal-delay="200">
                    <div class="price-card h-100">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="price-card__badge price-card__badge--light">SPECIAL</span>
                            <div class="price-card__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            </div>
                        </div>
                        <div class="price-card__amount">$98</div>
                        <div class="price-card__title">Cleaning Special</div>
                        <p class="price-card__desc">Complete preventive cleaning for new patients — exam, X-rays, and professional polish included.</p>
                        <ul class="price-card__list">
                            <li>Full mouth professional cleaning</li>
                            <li>Comprehensive oral exam</li>
                            <li>Necessary digital X-rays</li>
                            <li>Oral hygiene counseling</li>
                        </ul>
                        <button class="btn btn-primary w-100 mt-auto pt-3" style="border-radius: 10px; font-weight: 600;" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                            Book Cleaning
                        </button>
                    </div>
                </div>

            </div>

            <!-- Row B · In-House Preventive Insurance Plans -->
            <div class="reveal reveal-fade-up mt-5 mb-4">
                <div class="text-center mb-4">
                    <h3 class="offers-heading">In-House Preventive Insurance Plans</h3>
                    <p class="text-muted" style="font-size: 0.9rem; max-width: 500px; margin: 0.5rem auto 0;">No insurance? No problem. Our annual plans cover your preventive essentials at a flat yearly rate.</p>
                </div>
                <div class="row g-4 justify-content-center">

                    <!-- Individual Plan -->
                    <div class="col-12 col-sm-6 col-lg-4 reveal reveal-fade-up" data-reveal-delay="0">
                        <div class="price-card h-100 text-center">
                            <div class="price-card__amount">$129</div>
                            <div class="price-card__title">Individual Plan</div>
                            <p class="price-card__desc">Annual preventive coverage for one adult patient.</p>
                            <ul class="price-card__list text-start">
                                <li>2 cleanings per year</li>
                                <li>2 routine exams per year</li>
                                <li>Necessary X-rays included</li>
                                <li>10% off all other treatments</li>
                            </ul>
                            <button class="btn btn-outline-primary w-100 mt-3" style="border-radius: 10px; font-weight: 600;" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                                Get Started
                            </button>
                        </div>
                    </div>

                    <!-- Couple Plan (Featured) -->
                    <div class="col-12 col-sm-6 col-lg-4 reveal reveal-fade-up" data-reveal-delay="100">
                        <div class="price-card price-card--featured h-100 text-center">
                            <div class="d-flex justify-content-center mb-2">
                                <span class="price-card__badge price-card__badge--pop">BEST VALUE</span>
                            </div>
                            <div class="price-card__amount" style="color: #fff;">$240</div>
                            <div class="price-card__title" style="color: rgba(255,255,255,0.9);">Couple Plan</div>
                            <p class="price-card__desc" style="color: rgba(255,255,255,0.72);">Annual preventive coverage for two adults.</p>
                            <ul class="price-card__list" style="color: rgba(255,255,255,0.78);">
                                <li>2 cleanings × 2 patients</li>
                                <li>2 routine exams × 2 patients</li>
                                <li>Necessary X-rays included</li>
                                <li>15% off all other treatments</li>
                            </ul>
                            <button class="btn btn-light w-100 mt-3" style="border-radius: 10px; font-weight: 700; color: var(--bs-secondary);" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                                Get Started
                            </button>
                        </div>
                    </div>

                    <!-- Family Plan -->
                    <div class="col-12 col-sm-6 col-lg-4 reveal reveal-fade-up" data-reveal-delay="200">
                        <div class="price-card h-100 text-center">
                            <div class="price-card__amount">$340</div>
                            <div class="price-card__title">Family Plan</div>
                            <p class="price-card__desc">Annual preventive coverage for the whole family (up to 4 members).</p>
                            <ul class="price-card__list text-start">
                                <li>2 cleanings × 4 members</li>
                                <li>2 routine exams × 4 members</li>
                                <li>Necessary X-rays included</li>
                                <li>20% off all other treatments</li>
                            </ul>
                            <button class="btn btn-outline-primary w-100 mt-3" style="border-radius: 10px; font-weight: 600;" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                                Get Started
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Row C · New Patient Specials -->
            <div class="reveal reveal-fade-up mt-5 mb-4">
                <div class="text-center mb-4">
                    <h3 class="offers-heading">New Patient Specials</h3>
                    <p class="text-muted" style="font-size: 0.9rem; max-width: 500px; margin: 0.5rem auto 0;">Exclusive first-visit pricing to make your first experience with us stress-free.</p>
                </div>
                <div class="row g-4">

                    <!-- Adult Special -->
                    <div class="col-12 col-sm-6 col-xl-3 reveal reveal-fade-up" data-reveal-delay="0">
                        <div class="price-card h-100">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="price-card__badge price-card__badge--light">NEW PATIENT</span>
                                <div class="price-card__icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                </div>
                            </div>
                            <div class="price-card__amount">$129</div>
                            <div class="price-card__title">Adult Exam &amp; Clean</div>
                            <p class="price-card__desc">Comprehensive new patient package for adults — everything you need in one visit.</p>
                            <ul class="price-card__list">
                                <li>Full exam &amp; cleaning</li>
                                <li>Digital X-rays</li>
                                <li>Treatment plan</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Kids Special -->
                    <div class="col-12 col-sm-6 col-xl-3 reveal reveal-fade-up" data-reveal-delay="100">
                        <div class="price-card price-card--free h-100">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="price-card__badge price-card__badge--free">KIDS</span>
                                <div class="price-card__icon" style="background: rgba(22,163,74,0.1); color: #16a34a;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                </div>
                            </div>
                            <div class="price-card__amount" style="color: #16a34a;">$99</div>
                            <div class="price-card__title">Kids Under 12</div>
                            <p class="price-card__desc">Gentle, child-friendly first visit. We make dentistry fun and stress-free for little smiles.</p>
                            <ul class="price-card__list">
                                <li>Pediatric exam &amp; cleaning</li>
                                <li>Age-appropriate X-rays</li>
                                <li>Fluoride treatment</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Zoom Whitening -->
                    <div class="col-12 col-sm-6 col-xl-3 reveal reveal-fade-up" data-reveal-delay="200">
                        <div class="price-card h-100">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="price-card__badge price-card__badge--pop">COSMETIC</span>
                                <div class="price-card__icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                </div>
                            </div>
                            <div class="price-card__amount">$500</div>
                            <div class="price-card__title">Zoom! Whitening</div>
                            <p class="price-card__desc">In-office professional teeth whitening with the industry-leading Zoom system. Visible results in one visit.</p>
                            <ul class="price-card__list">
                                <li>In-office Zoom! system</li>
                                <li>Up to 8 shades brighter</li>
                                <li>Take-home trays included</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Senior / Veteran Discount -->
                    <div class="col-12 col-sm-6 col-xl-3 reveal reveal-fade-up" data-reveal-delay="300">
                        <div class="price-card h-100">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="price-card__badge price-card__badge--off">30% OFF</span>
                                <div class="price-card__icon" style="background: rgba(239,68,68,0.07); color: #dc2626;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg>
                                </div>
                            </div>
                            <div class="price-card__amount" style="color: #dc2626;">30% Off</div>
                            <div class="price-card__title">Seniors &amp; Veterans</div>
                            <p class="price-card__desc">We proudly honor seniors (65+) and all active or retired military personnel with a special discount on all treatments.</p>
                            <ul class="price-card__list">
                                <li>30% off all dental services</li>
                                <li>Valid ID or proof required</li>
                                <li>Cannot combine with other offers</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Row D · 3D CBCT Card -->
            <div class="reveal reveal-fade-up mt-5">
                <div class="cbct-card">

                    <div class="cbct-card__icon">
                        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                    </div>

                    <div class="cbct-card__body">
                        <div class="cbct-card__eyebrow">Advanced Imaging</div>
                        <h3 class="cbct-card__title">3D Cone Beam CT (CBCT) Imaging</h3>
                        <p class="cbct-card__desc">State-of-the-art 3D imaging for precise diagnosis — from implant planning to root canal analysis. This service is available as a standalone add-on and is <strong>not included</strong> in any other promotional offer.</p>
                    </div>

                    <div class="cbct-card__pricing">
                        <div class="cbct-card__amount">$250</div>
                        <div class="cbct-card__note">Per scan · Not combinable</div>
                        <a href="modern-clinic.php" class="btn btn-light mt-3" style="border-radius: 10px; font-weight: 700; color: var(--bs-secondary); font-size: 0.875rem;">
                            Learn About Our Technology
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ms-1"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- CTA Strip -->
    <section class="py-5 bg-white text-center reveal reveal-fade-up">
        <div class="container-90">
            <h3 class="fw-800 mb-2" style="color: var(--bs-secondary); font-weight: 800;">Have Questions About Pricing?</h3>
            <p class="text-muted mb-4" style="font-size: 0.975rem;">Our team is happy to walk you through every option and find a plan that works for your budget.</p>
            <div class="d-flex flex-wrap gap-3 justify-content-center">
                <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                    Get an Appointment
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ms-2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </button>
                <a href="tel:2156383350" class="btn btn-outline-secondary btn-lg">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="me-2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.41 2 2 0 0 1 3.6 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.56a16 16 0 0 0 6.29 6.29l.84-.84a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    (215) 638-3350
                </a>
            </div>
        </div>
    </section>

</main>

<?php include 'components/footer.php'; ?>
