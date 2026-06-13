<?php
$pageTitle = 'Complete & Partial Dentures';
include 'data/data.php';
include 'components/header.php';
?>

<main class="subpage">

    <!-- Page Hero -->
    <section class="page-hero page-hero--branded">
        <div class="page-hero__overlay"></div>
        <div class="container-90 page-hero__content">
            <h1 class="page-hero__title">Complete &amp; Partial Dentures</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb page-hero__breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dental Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Complete &amp; Partial Dentures</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ==========================================
         Intro
         ========================================== -->
    <section class="py-5 py-lg-6 bg-white">
        <div class="container-90">
            <div class="row align-items-center g-4 g-lg-5">

                <div class="col-12 col-lg-6 reveal reveal-slide-left" style="padding-top:1.5rem;">
                    <span class="section-eyebrow">Restore Your Smile</span>
                    <h2 class="section-heading mt-1 mb-3">What Are Dentures?</h2>
                    <p class="about-desc">A denture is a removable replacement for missing teeth and surrounding tissues. Two types of dentures are available — <strong>complete</strong> and <strong>partial</strong> dentures. Complete dentures are used when all of the teeth are missing, while partial dentures are used when some natural teeth remain.</p>
                    <p class="about-desc">At Bensalem Smiles 4 U, we create custom-fitted dentures designed to look natural, feel comfortable, and restore full function — giving you the confidence to smile, speak, and eat without worry.</p>
                </div>

                <div class="col-12 col-lg-6 reveal reveal-slide-right">
                    <div class="newtec-img-wrap">
                        <img src="img/slider03.jpg" alt="Natural-looking denture smile" class="newtec-img">
                        <div class="newtec-img-caption">
                            <div class="newtec-img-caption__icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                            </div>
                            <div>
                                <div class="newtec-img-caption__label">Custom Crafted</div>
                                <div class="newtec-img-caption__title">Natural-Looking &amp; Comfortable</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <hr class="section-rule m-0">

    <!-- ==========================================
         Type Overview Cards
         ========================================== -->
    <section class="py-5 py-lg-6" style="background: var(--color-light-bg);">
        <div class="container-90">

            <div class="text-center reveal reveal-fade-up mb-5">
                <span class="section-eyebrow">Types of Dentures</span>
                <h2 class="section-heading mt-1">Which Denture Is Right for You?</h2>
                <p class="text-muted" style="max-width:560px; margin:0.75rem auto 0; font-size:0.95rem;">Your dentist will recommend the best option based on how many teeth are missing and the condition of your remaining teeth and gums.</p>
            </div>

            <div class="row g-4">

                <!-- Complete -->
                <div class="col-12 col-lg-4 reveal reveal-fade-up" data-reveal-delay="0">
                    <div class="dent-type-card dent-type-card--complete h-100">
                        <div class="dent-type-card__icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        </div>
                        <h4 class="dent-type-card__title">Complete Dentures</h4>
                        <p class="dent-type-card__desc">Used when <strong>all teeth</strong> are missing in the upper or lower jaw. Replaces the entire arch with a full set of natural-looking artificial teeth.</p>
                        <div class="dent-type-card__tag">Full Arch Replacement</div>
                    </div>
                </div>

                <!-- Partial -->
                <div class="col-12 col-lg-4 reveal reveal-fade-up" data-reveal-delay="100">
                    <div class="dent-type-card dent-type-card--partial h-100">
                        <div class="dent-type-card__icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                        </div>
                        <h4 class="dent-type-card__title">Partial Dentures</h4>
                        <p class="dent-type-card__desc">Used when <strong>some natural teeth remain</strong>. Fills the gaps left by missing teeth and prevents remaining teeth from shifting out of position.</p>
                        <div class="dent-type-card__tag">Targeted Gap Filling</div>
                    </div>
                </div>

                <!-- Precision -->
                <div class="col-12 col-lg-4 reveal reveal-fade-up" data-reveal-delay="200">
                    <div class="dent-type-card dent-type-card--precision h-100">
                        <div class="dent-type-card__icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        </div>
                        <h4 class="dent-type-card__title">Precision Partial</h4>
                        <p class="dent-type-card__desc">A removable precision partial with <strong>internal attachments</strong> instead of clasps — a more natural-looking, discreet alternative to traditional partial dentures.</p>
                        <div class="dent-type-card__tag">Most Natural Appearance</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <hr class="section-rule m-0">

    <!-- ==========================================
         Complete Dentures Detail
         ========================================== -->
    <section class="py-5 py-lg-6 bg-white">
        <div class="container-90">

            <div class="text-center reveal reveal-fade-up mb-5">
                <span class="section-eyebrow">Complete Dentures</span>
                <h2 class="section-heading mt-1">Traditional vs. Immediate Dentures</h2>
                <p class="text-muted" style="max-width:560px; margin:0.75rem auto 0; font-size:0.95rem;">Complete dentures come in two forms — your dentist will guide you to the right approach based on your timeline and healing needs.</p>
            </div>

            <div class="row g-4 align-items-stretch">

                <!-- Traditional -->
                <div class="col-12 col-lg-6 reveal reveal-slide-left">
                    <div class="dent-compare-card h-100">
                        <div class="dent-compare-card__header dent-compare-card__header--traditional">
                            <div class="dent-compare-card__badge">Traditional</div>
                            <div class="dent-compare-card__header-icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            </div>
                        </div>
                        <div class="dent-compare-card__body">
                            <h4 class="dent-compare-card__title">Traditional Complete Denture</h4>
                            <p class="dent-compare-card__text">Made after the teeth have been removed and the gum tissue has begun to heal. A traditional denture is ready for placement in the mouth around <strong>8 to 12 weeks</strong> after the teeth have been extracted.</p>
                            <ul class="tech-features mt-3">
                                <li><span class="tech-features__icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span>Crafted after full gum healing</span></li>
                                <li><span class="tech-features__icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span>More precise fit to healed gum tissue</span></li>
                                <li><span class="tech-features__icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span>Fewer adjustments needed long-term</span></li>
                                <li><span class="tech-features__icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span>Considered the gold standard for complete dentures</span></li>
                            </ul>
                            <div class="dent-compare-card__note">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                                Ready in 8–12 weeks after extraction
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Immediate -->
                <div class="col-12 col-lg-6 reveal reveal-slide-right">
                    <div class="dent-compare-card h-100">
                        <div class="dent-compare-card__header dent-compare-card__header--immediate">
                            <div class="dent-compare-card__badge dent-compare-card__badge--immediate">Immediate</div>
                            <div class="dent-compare-card__header-icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                            </div>
                        </div>
                        <div class="dent-compare-card__body">
                            <h4 class="dent-compare-card__title">Immediate Complete Denture</h4>
                            <p class="dent-compare-card__text">Made in advance and placed <strong>the same day teeth are removed</strong>, so you're never without teeth during the healing period. However, bones and gums shrink over time during recovery, requiring more adjustments.</p>
                            <ul class="tech-features mt-3">
                                <li><span class="tech-features__icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span>Placed immediately on extraction day</span></li>
                                <li><span class="tech-features__icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span>No period of being without teeth</span></li>
                                <li><span class="tech-features__icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span>Requires more adjustments as gums heal</span></li>
                                <li><span class="tech-features__icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span>Best used as a temporary solution</span></li>
                            </ul>
                            <div class="dent-compare-card__note dent-compare-card__note--warning">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                Generally considered a temporary solution
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <hr class="section-rule m-0">

    <!-- ==========================================
         Partial Dentures Detail
         ========================================== -->
    <section class="py-5 py-lg-6" style="background: var(--color-light-bg);">
        <div class="container-90">
            <div class="row align-items-center g-4 g-lg-5">

                <div class="col-12 col-lg-6 order-lg-1 order-2 reveal reveal-slide-left">
                    <div class="newtec-img-wrap">
                        <img src="img/slider02.jpg" alt="Partial denture fitting" class="newtec-img">
                        <div class="newtec-img-caption">
                            <div class="newtec-img-caption__icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            </div>
                            <div>
                                <div class="newtec-img-caption__label">Custom Fit</div>
                                <div class="newtec-img-caption__title">Partial Denture Solutions</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 order-lg-2 order-1 reveal reveal-slide-right" style="padding-top:1.5rem;">
                    <span class="section-eyebrow">Partial Dentures</span>
                    <h2 class="section-heading mt-1 mb-3">When Some Natural Teeth Remain</h2>
                    <p class="about-desc">A removable partial denture usually consists of replacement teeth attached to a pink or gum-colored plastic base, sometimes connected by a metal framework that holds the denture in place in the mouth.</p>
                    <p class="about-desc">Partial dentures are used when at least one natural tooth remains in the upper or lower jaw. Not only does a partial denture fill in the spaces created by missing teeth — it also keeps other teeth from shifting out of position.</p>

                    <div class="dent-partial-options mt-4">

                        <div class="dent-partial-option reveal reveal-fade-up" data-reveal-delay="0">
                            <div class="dent-partial-option__num">A</div>
                            <div>
                                <div class="dent-partial-option__title">Fixed Bridge</div>
                                <div class="dent-partial-option__desc">Replaces one or more teeth by placing crowns on the teeth on either side of the gap and attaching artificial teeth to them. The bridge is then permanently cemented into place.</div>
                            </div>
                        </div>

                        <div class="dent-partial-option reveal reveal-fade-up" data-reveal-delay="80">
                            <div class="dent-partial-option__num">B</div>
                            <div>
                                <div class="dent-partial-option__title">Removable Partial Denture</div>
                                <div class="dent-partial-option__desc">Replacement teeth on a gum-colored base held in place with a metal framework. Removable for cleaning and comfortable for everyday use.</div>
                            </div>
                        </div>

                        <div class="dent-partial-option reveal reveal-fade-up" data-reveal-delay="160">
                            <div class="dent-partial-option__num">C</div>
                            <div>
                                <div class="dent-partial-option__title">Precision Partial Denture</div>
                                <div class="dent-partial-option__desc">A removable precision partial with internal attachments instead of clasps connected to adjacent crowns — a far more natural-looking and discreet appliance.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <hr class="section-rule m-0">

    <!-- ==========================================
         Why Bensalem
         ========================================== -->
    <section class="py-5 py-lg-6 bg-white">
        <div class="container-90">

            <div class="text-center reveal reveal-fade-up mb-5">
                <span class="section-eyebrow">Why Choose Us</span>
                <h2 class="section-heading mt-1">The Bensalem Smiles 4 U Difference</h2>
                <p class="text-muted" style="max-width:520px; margin:0.75rem auto 0; font-size:0.95rem;">Custom-fitted dentures crafted with precision, care, and your comfort in mind — at every step.</p>
            </div>

            <div class="row g-4">
                <div class="col-12 col-sm-6 col-lg-3 reveal reveal-fade-up" data-reveal-delay="0">
                    <div class="why-card">
                        <div class="why-card__icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        </div>
                        <h4 class="why-card__title">Custom Fit</h4>
                        <p class="why-card__desc">Every denture is individually crafted from precise impressions of your mouth for maximum comfort and a natural look.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 reveal reveal-fade-up" data-reveal-delay="80">
                    <div class="why-card">
                        <div class="why-card__icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                        </div>
                        <h4 class="why-card__title">Expert Specialists</h4>
                        <p class="why-card__desc">Our experienced dental team handles complete and partial denture cases with skill, precision, and patient-focused care.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 reveal reveal-fade-up" data-reveal-delay="160">
                    <div class="why-card">
                        <div class="why-card__icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        </div>
                        <h4 class="why-card__title">Transparent Pricing</h4>
                        <p class="why-card__desc">Clear, upfront estimates before treatment begins. We work with your insurance and offer flexible payment options.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 reveal reveal-fade-up" data-reveal-delay="240">
                    <div class="why-card">
                        <div class="why-card__icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.41 2 2 0 0 1 3.6 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.56a16 16 0 0 0 6.29 6.29l.84-.84a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </div>
                        <h4 class="why-card__title">Ongoing Support</h4>
                        <p class="why-card__desc">Adjustments, repairs, and follow-up care included. We're with you every step of the way after your dentures are fitted.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- CTA Strip -->
    <section class="py-5 text-center reveal reveal-fade-up" style="background: var(--color-light-bg);">
        <div class="container-90">
            <h3 style="color:var(--bs-secondary); font-weight:800;" class="mb-2">Ready to Restore Your Smile?</h3>
            <p class="text-muted mb-4" style="font-size:0.975rem;">Schedule a consultation and our team will find the perfect denture solution tailored to your needs and budget.</p>
            <div class="d-flex flex-wrap gap-3 justify-content-center">
               <a href="https://app.nexhealth.com/appt/bensalem-smiles-4-u?lid=242566" target="_blank" class="btn btn-primary btn-lg">
                    Get an Appointment
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ms-2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
                <a href="tel:2156383350" class="btn btn-outline-secondary btn-lg">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="me-2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.41 2 2 0 0 1 3.6 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.56a16 16 0 0 0 6.29 6.29l.84-.84a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    (215) 638-3350
                </a>
            </div>
        </div>
    </section>

</main>

<?php include 'components/footer.php'; ?>
