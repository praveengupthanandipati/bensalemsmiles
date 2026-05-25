<?php
$pageTitle = 'New Technology';
include 'data/data.php';
include 'components/header.php';
?>

<main class="subpage">

    <!-- Page Hero -->
    <section class="page-hero page-hero--branded">
        <div class="page-hero__overlay"></div>
        <div class="container-90 page-hero__content">
            <h1 class="page-hero__title">New Technology</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb page-hero__breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="about.php">Clinic</a></li>
                    <li class="breadcrumb-item active" aria-current="page">New Technology</li>
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
                <div class="col-12 col-lg-6 reveal reveal-slide-left" style="padding-top: 1.5rem;">
                    <span class="section-eyebrow">Modern Dentistry</span>
                    <h2 class="section-heading mt-1 mb-3">Dentistry Has Come a Long Way</h2>
                    <p class="about-desc">It's time to reconsider the old stereotype of a trip to the dentist involving drills, multiple visits, pain, and discomfort. All of these things are no longer required to get the dental care you need to stay healthy, eliminate pain, and have a great smile.</p>
                    <p class="about-desc">Take a look at how far dental technologies have come in recent decades — and how Bensalem Smiles 4 U puts the very best of those advances to work for every patient who walks through our doors.</p>

                    <ul class="tech-features mt-4">
                        <li>
                            <span class="tech-features__icon">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span>Less drilling, fewer visits, minimal discomfort</span>
                        </li>
                        <li>
                            <span class="tech-features__icon">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span>Procedures once requiring surgery now done non-invasively</span>
                        </li>
                        <li>
                            <span class="tech-features__icon">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span>Cosmetic results that look and feel completely natural</span>
                        </li>
                        <li>
                            <span class="tech-features__icon">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span>Anesthesia options available for needle-phobic patients</span>
                        </li>
                    </ul>

                    <button class="btn btn-primary about-btn mt-4" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                        Experience It Yourself
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ms-2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                </div>

                <!-- Image -->
                <div class="col-12 col-lg-6 reveal reveal-slide-right">
                    <div class="newtec-img-wrap">
                        <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=800&q=85&fit=crop" alt="Modern dental clinic technology" class="newtec-img">
                        <div class="newtec-img-caption">
                            <div class="newtec-img-caption__icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                            </div>
                            <div>
                                <div class="newtec-img-caption__label">Bensalem Smiles 4 U</div>
                                <div class="newtec-img-caption__title">State-of-the-Art Dental Care</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <hr class="section-rule m-0">

    <!-- ==========================================
         Section 02 · New Gum Procedures
         ========================================== -->
    <section class="py-5 py-lg-6" style="background: var(--color-light-bg);">
        <div class="container-90">
            <div class="row align-items-center g-4 g-lg-5">

                <!-- Image (left on desktop) -->
                <div class="col-12 col-lg-6 order-lg-1 order-2 reveal reveal-slide-left">
                    <div class="newtec-img-wrap">
                        <img src="https://images.unsplash.com/photo-1609840114035-3c981b782dfe?w=800&q=85&fit=crop" alt="Gum procedure treatment" class="newtec-img">
                        <div class="newtec-img-caption">
                            <div class="newtec-img-caption__icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                            </div>
                            <div>
                                <div class="newtec-img-caption__label">Periodontal Care</div>
                                <div class="newtec-img-caption__title">Advanced Gum Restoration</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Text (right on desktop) -->
                <div class="col-12 col-lg-6 order-lg-2 order-1 reveal reveal-slide-right" style="padding-top: 1.5rem;">
                    <span class="section-eyebrow">Gum Health</span>
                    <h2 class="section-heading mt-1 mb-3">New Gum Procedures</h2>
                    <p class="about-desc">Gums are extremely important to good dental health. Without gums fully covering the teeth, pockets can form that expose the tooth to bacteria from new positions, increasing the chance of other dental problems.</p>
                    <p class="about-desc">For many decades, there was little a dentist could do to reverse the loss of gums from problems such as gum disease — but things have changed dramatically. There are several recent methods for reversing gum damage, from bone and tissue grafts to installing membranes. There are even special proteins that stimulate the regrowth of gum and inner tooth tissue.</p>

                    <ul class="tech-features mt-4">
                        <li>
                            <span class="tech-features__icon">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span>Pocket reduction without traditional surgery</span>
                        </li>
                        <li>
                            <span class="tech-features__icon">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span>Bone &amp; soft tissue grafting options</span>
                        </li>
                        <li>
                            <span class="tech-features__icon">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span>Root surface cleaning to eliminate hidden plaque</span>
                        </li>
                        <li>
                            <span class="tech-features__icon">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span>Protein-based stimulation of natural gum regrowth</span>
                        </li>
                        <li>
                            <span class="tech-features__icon">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span>Protective membrane barrier installations</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <hr class="section-rule m-0">

    <!-- ==========================================
         Section 03 · Improved Veneers
         ========================================== -->
    <section class="py-5 py-lg-6 bg-white">
        <div class="container-90">
            <div class="row align-items-center g-4 g-lg-5">

                <!-- Text (left on desktop) -->
                <div class="col-12 col-lg-6 reveal reveal-slide-left" style="padding-top: 1.5rem;">
                    <span class="section-eyebrow">Cosmetic Dentistry</span>
                    <h2 class="section-heading mt-1 mb-3">Improved Veneers</h2>
                    <p class="about-desc">Relatively common today, veneers are a dental procedure to help with the visual element of the teeth. A thin shell, specially made by the dentist for that patient, is made to cover the front of a crooked, damaged, or otherwise unappealing tooth.</p>
                    <p class="about-desc">Today, veneer materials have improved, making them stronger and more reliable and allowing them to be made thinner. This means that less of a patient's tooth has to be removed to make room for the veneer and that more of the original tooth is preserved — reducing the chance of pain and other complications.</p>

                    <ul class="tech-features mt-4">
                        <li>
                            <span class="tech-features__icon">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span>Thinner shells require minimal tooth reshaping</span>
                        </li>
                        <li>
                            <span class="tech-features__icon">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span>Stronger, more durable materials than ever before</span>
                        </li>
                        <li>
                            <span class="tech-features__icon">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span>More natural tooth structure is preserved</span>
                        </li>
                        <li>
                            <span class="tech-features__icon">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span>Reduced risk of post-procedure sensitivity</span>
                        </li>
                        <li>
                            <span class="tech-features__icon">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span>Custom-crafted for a perfectly natural appearance</span>
                        </li>
                    </ul>

                    <button class="btn btn-primary about-btn mt-4" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                        Explore Veneer Options
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ms-2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                </div>

                <!-- Image (right on desktop) -->
                <div class="col-12 col-lg-6 reveal reveal-slide-right">
                    <div class="newtec-img-wrap">
                        <img src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?w=800&q=85&fit=crop" alt="Dental veneers cosmetic procedure" class="newtec-img">
                        <div class="newtec-img-caption">
                            <div class="newtec-img-caption__icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            </div>
                            <div>
                                <div class="newtec-img-caption__label">Cosmetic Enhancement</div>
                                <div class="newtec-img-caption__title">Thinner, Stronger, More Natural</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <hr class="section-rule m-0">

    <!-- ==========================================
         Section 04 · No-Needle Anesthesia
         ========================================== -->
    <section class="py-5 py-lg-6" style="background: var(--color-light-bg);">
        <div class="container-90">
            <div class="row align-items-center g-4 g-lg-5">

                <!-- Image (left on desktop) -->
                <div class="col-12 col-lg-6 order-lg-1 order-2 reveal reveal-slide-left">
                    <div class="newtec-img-wrap">
                        <img src="https://images.unsplash.com/photo-1551601651-2a8555f1a136?w=800&q=85&fit=crop" alt="No-needle anesthesia dental treatment" class="newtec-img">
                        <div class="newtec-img-caption">
                            <div class="newtec-img-caption__icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg>
                            </div>
                            <div>
                                <div class="newtec-img-caption__label">Pain-Free Innovation</div>
                                <div class="newtec-img-caption__title">Comfort Without the Needle</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Text (right on desktop) -->
                <div class="col-12 col-lg-6 order-lg-2 order-1 reveal reveal-slide-right" style="padding-top: 1.5rem;">
                    <span class="section-eyebrow">Pain-Free Innovation</span>
                    <h2 class="section-heading mt-1 mb-3">No-Needle Anesthesia</h2>
                    <p class="about-desc">Many of the methods for preparing a patient for a procedure are uncomfortable for some, whether it's being put under with full anesthesia or simply being injected with a numbing agent. Fortunately, those who hate needles may have nothing to fear.</p>
                    <p class="about-desc">A study by the University of Sao Paulo in 2016 considered a new possibility where a numbing gel is applied topically. The dentist then uses a small electric current to encourage full absorption of the numbing agent by the skin — delivering effective anesthesia without a single injection.</p>

                    <ul class="tech-features mt-4">
                        <li>
                            <span class="tech-features__icon">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span>Numbing gel applied directly to the surface</span>
                        </li>
                        <li>
                            <span class="tech-features__icon">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span>Small electric current drives absorption through skin</span>
                        </li>
                        <li>
                            <span class="tech-features__icon">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span>Eliminates the fear and discomfort of injection</span>
                        </li>
                        <li>
                            <span class="tech-features__icon">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span>Research-backed — University of Sao Paulo, 2016</span>
                        </li>
                        <li>
                            <span class="tech-features__icon">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span>Ideal for needle-phobic and anxious patients</span>
                        </li>
                    </ul>

                    <button class="btn btn-primary about-btn mt-4" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                        Learn More
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ms-2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Strip -->
    <section class="py-5 bg-white text-center reveal reveal-fade-up">
        <div class="container-90">
            <h3 class="fw-800 mb-2" style="color: var(--bs-secondary); font-weight: 800;">Ready to Experience Modern Dentistry?</h3>
            <p class="text-muted mb-4" style="font-size: 0.975rem;">Book your visit today and discover how our technology makes every appointment comfortable and efficient.</p>
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
