<?php
$pageTitle = 'Refer a Friend';
include 'data/data.php';
include 'components/header.php';
?>

<main class="subpage">

    <!-- Page Hero -->
    <section class="page-hero page-hero--branded">
        <div class="page-hero__overlay"></div>
        <div class="container-90 page-hero__content">
            <h1 class="page-hero__title reveal reveal-fade-up">Refer a Friend</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb page-hero__breadcrumb reveal reveal-fade-up" data-reveal-delay="100">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Refer a Friend</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ── Section 01 · Offer Banner ── -->
    <section class="py-5 py-lg-6" style="background: var(--color-light-bg);">
        <div class="container-90">
            <div class="row align-items-center g-5 justify-content-center">

                <!-- Offer Visual -->
                <div class="col-12 col-lg-5 reveal reveal-slide-right">
                    <div class="raf-offer-card">
                        <div class="raf-offer-card__badge reveal reveal-fade-up" data-reveal-delay="60">Exclusive Reward</div>
                        <div class="raf-offer-card__amount reveal reveal-fade-up" data-reveal-delay="120">$25 <span>OFF</span></div>
                        <p class="raf-offer-card__tagline reveal reveal-fade-up" data-reveal-delay="180">
                            Refer a Friend &amp; Get <strong>$25 off</strong> your next major treatment
                        </p>
                        <div class="raf-offer-card__divider reveal reveal-fade-up" data-reveal-delay="240"></div>
                        <ul class="raf-offer-card__perks reveal reveal-fade-up" data-reveal-delay="300">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/></svg>
                                No limit — refer as many friends as you like
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/></svg>
                                Applied to any major dental treatment
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/></svg>
                                Discount applied after friend's first visit
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/></svg>
                                Existing patients only
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Intro Text -->
                <div class="col-12 col-lg-6 order-lg-first">
                    <p class="section-eyebrow reveal reveal-fade-up">Patient Reward Program</p>
                    <h2 class="section-heading reveal reveal-fade-up" data-reveal-delay="80">
                        Share the Smile, <span class="text-primary">Earn the Reward</span>
                    </h2>
                    <div class="section-rule reveal reveal-fade-up" data-reveal-delay="140"></div>
                    <p class="about-desc reveal reveal-fade-up" data-reveal-delay="200">
                        Love your smile? Share the experience! When you refer a friend or family member to Bensalem Smiles 4 U, you earn <strong>$25 off</strong> your next major treatment — and your friend gets the quality dental care they deserve.
                    </p>
                    <p class="about-desc reveal reveal-fade-up" data-reveal-delay="240">
                        Simply fill out the referral form below with your details and your friend's contact information. Our team will reach out to them and take care of the rest. It's that easy!
                    </p>

                    <!-- Steps -->
                    <div class="row g-3 mt-1">
                        <div class="col-12 reveal reveal-fade-up" data-reveal-delay="280">
                            <div class="raf-step">
                                <div class="raf-step__num">1</div>
                                <div>
                                    <p class="raf-step__title">Fill the Referral Form</p>
                                    <p class="raf-step__desc">Enter your details and your friend's contact info below.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 reveal reveal-fade-up" data-reveal-delay="340">
                            <div class="raf-step">
                                <div class="raf-step__num">2</div>
                                <div>
                                    <p class="raf-step__title">Friend Visits the Clinic</p>
                                    <p class="raf-step__desc">We contact your friend, they schedule and complete a visit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 reveal reveal-fade-up" data-reveal-delay="400">
                            <div class="raf-step">
                                <div class="raf-step__num">3</div>
                                <div>
                                    <p class="raf-step__title">Claim Your $25 Reward</p>
                                    <p class="raf-step__desc">Your discount is applied to your next major treatment automatically.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ── Section 02 · Referral Form ── -->
    <section class="py-5 py-lg-6 bg-white">
        <div class="container-90">

            <div class="row justify-content-center mb-5">
                <div class="col-12 col-lg-7 text-center">
                    <p class="section-eyebrow reveal reveal-fade-up">Submit Your Referral</p>
                    <h2 class="section-heading reveal reveal-fade-up" data-reveal-delay="80">
                        Referral <span class="text-primary">Form</span>
                    </h2>
                    <div class="section-rule mx-auto reveal reveal-fade-up" data-reveal-delay="140"></div>
                    <p class="about-desc reveal reveal-fade-up" data-reveal-delay="200">
                        Fill in the details below and we'll take care of reaching out to your friend.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">

                    <!-- Success Alert -->
                    <div class="contact-success alert d-none" id="rafSuccess" role="alert">
                        <div class="d-flex align-items-center gap-3">
                            <div class="contact-success__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
                            </div>
                            <div>
                                <strong>Referral submitted successfully!</strong>
                                <p class="mb-0 mt-1" style="font-size:0.875rem;">Thank you! We'll contact your friend shortly. Your $25 reward will be applied after their first visit.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Referral Form -->
                    <form id="rafForm" class="contact-form needs-validation" novalidate>

                        <!-- Patient Info -->
                        <div class="raf-form-section reveal reveal-fade-up" data-reveal-delay="0">
                            <div class="raf-form-section__label">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/></svg>
                                Your Information
                            </div>
                            <div class="row g-4 mt-0">
                                <div class="col-12 col-md-6">
                                    <label for="patientId" class="contact-form__label">Patient ID <span class="text-danger">*</span></label>
                                    <input type="text" id="patientId" name="patient_id" class="contact-form__input form-control" placeholder="e.g. BS4U-00123" required minlength="2">
                                    <div class="invalid-feedback">Please enter your Patient ID.</div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="patientName" class="contact-form__label">Your Name <span class="text-danger">*</span></label>
                                    <input type="text" id="patientName" name="patient_name" class="contact-form__input form-control" placeholder="John Smith" required minlength="2">
                                    <div class="invalid-feedback">Please enter your full name.</div>
                                </div>
                            </div>
                        </div>

                        <!-- Friend Info -->
                        <div class="raf-form-section reveal reveal-fade-up" data-reveal-delay="80">
                            <div class="raf-form-section__label">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.006zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/></svg>
                                Friend's Information
                            </div>
                            <div class="row g-4 mt-0">
                                <div class="col-12 col-md-6">
                                    <label for="friendName" class="contact-form__label">Friend's Name <span class="text-danger">*</span></label>
                                    <input type="text" id="friendName" name="friend_name" class="contact-form__input form-control" placeholder="Jane Doe" required minlength="2">
                                    <div class="invalid-feedback">Please enter your friend's name.</div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="friendPhone" class="contact-form__label">Friend's Contact Number <span class="text-danger">*</span></label>
                                    <input type="tel" id="friendPhone" name="friend_phone" class="contact-form__input form-control" placeholder="(215) 000-0000" required pattern="[\+]?[(]?[0-9]{1,4}[)]?[-\s\.]?[(]?[0-9]{1,3}[)]?[-\s\.]?[0-9]{3,4}[-\s\.]?[0-9]{3,4}">
                                    <div class="invalid-feedback">Please enter a valid phone number.</div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="friendEmail" class="contact-form__label">Friend's Email <span class="text-danger">*</span></label>
                                    <input type="email" id="friendEmail" name="friend_email" class="contact-form__input form-control" placeholder="jane@example.com" required>
                                    <div class="invalid-feedback">Please enter a valid email address.</div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="rafSubject" class="contact-form__label">Subject <span class="text-danger">*</span></label>
                                    <input type="text" id="rafSubject" name="subject" class="contact-form__input form-control" placeholder="e.g. Teeth Cleaning" required minlength="2">
                                    <div class="invalid-feedback">Please enter a subject.</div>
                                </div>
                                <div class="col-12">
                                    <label for="rafMessage" class="contact-form__label">Friend's Treatment Description</label>
                                    <textarea id="rafMessage" name="message" class="contact-form__input contact-form__textarea form-control" placeholder="Briefly describe the treatment your friend is interested in…" rows="4"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="col-12 reveal reveal-fade-up" data-reveal-delay="160">
                            <button type="submit" class="btn btn-primary btn-lg px-5 fw-semibold contact-form__submit" id="rafSubmit">
                                <span class="contact-form__submit-text">Submit Referral</span>
                                <span class="contact-form__submit-spinner spinner-border spinner-border-sm ms-2 d-none" role="status" aria-hidden="true"></span>
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </section>

    <!-- ── CTA Strip ── -->
    <section class="py-5 py-lg-6" style="background: linear-gradient(135deg, #061c63 0%, #0c2b8c 55%, #088ac7 100%);">
        <div class="container-90 text-center">
            <h2 class="section-heading text-white reveal reveal-fade-up">
                Questions About the <span style="color: #7dd3fc;">Referral Program?</span>
            </h2>
            <p class="reveal reveal-fade-up" data-reveal-delay="100" style="color: rgba(255,255,255,0.85); max-width: 520px; margin: 0 auto 2rem;">
                Call us or send an email and our friendly team will be happy to help.
            </p>
            <div class="d-flex flex-wrap gap-3 justify-content-center reveal reveal-fade-up" data-reveal-delay="200">
                <a href="tel:2156383350" class="btn btn-light btn-lg px-4 fw-semibold" style="color: var(--bs-secondary);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="me-2" viewBox="0 0 16 16"><path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>
                    (215) 638-3350
                </a>
                <a href="contact.php" class="btn btn-outline-light btn-lg px-4 fw-semibold">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<script>
(function () {
    var form    = document.getElementById('rafForm');
    var success = document.getElementById('rafSuccess');
    var submit  = document.getElementById('rafSubmit');
    var spinner = submit.querySelector('.contact-form__submit-spinner');
    var btnText = submit.querySelector('.contact-form__submit-text');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        if (!form.checkValidity()) {
            form.classList.add('was-validated');
            var firstInvalid = form.querySelector(':invalid');
            if (firstInvalid) firstInvalid.focus();
            return;
        }

        submit.disabled = true;
        spinner.classList.remove('d-none');
        btnText.textContent = 'Submitting…';

        fetch('send-refer.php', { method: 'POST', body: new FormData(form) })
            .then(function (res) { return res.json(); })
            .then(function (json) {
                spinner.classList.add('d-none');
                submit.disabled = false;

                if (json.success) {
                    btnText.textContent = 'Submit Referral';
                    form.reset();
                    form.classList.remove('was-validated');
                    showAlert(
                        'Referral submitted successfully!',
                        'Thank you! We\'ll contact your friend shortly. Your $25 reward will be applied after their first visit.',
                        '#ecfdf5', '#6ee7b7', '#065f46'
                    );
                } else {
                    btnText.textContent = 'Submit Referral';
                    showAlert('Something went wrong.', json.message || 'Please try again or call us directly.', '#fef2f2', '#fca5a5', '#991b1b');
                }
            })
            .catch(function () {
                spinner.classList.add('d-none');
                btnText.textContent = 'Submit Referral';
                submit.disabled = false;
                showAlert('Connection error.', 'Could not reach the server. Please try again or call us directly.', '#fef2f2', '#fca5a5', '#991b1b');
            });
    });

    function showAlert(title, msg, bg, border, color) {
        success.querySelector('strong').textContent = title;
        success.querySelector('p').textContent = msg;
        success.style.background   = bg;
        success.style.borderColor  = border;
        success.style.color        = color;
        success.classList.remove('d-none');
        success.scrollIntoView({ behavior: 'smooth', block: 'start' });
        setTimeout(function () { success.classList.add('d-none'); }, 7000);
    }
})();
</script>

<?php include 'components/footer.php'; ?>
