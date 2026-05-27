<?php
$pageTitle = 'Contact';
include 'data/data.php';
include 'components/header.php';
?>

<main class="subpage">

    <!-- Page Hero -->
    <section class="page-hero page-hero--branded">
        <div class="page-hero__overlay"></div>
        <div class="container-90 page-hero__content">
            <h1 class="page-hero__title reveal reveal-fade-up">Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb page-hero__breadcrumb reveal reveal-fade-up" data-reveal-delay="100">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ── Section 01 · Contact Form ── -->
    <section class="py-5 py-lg-6 bg-white">
        <div class="container-90">

            <div class="row justify-content-center mb-5">
                <div class="col-12 col-lg-7 text-center">
                    <p class="section-eyebrow reveal reveal-fade-up">Get in Touch</p>
                    <h2 class="section-heading reveal reveal-fade-up" data-reveal-delay="80">
                        Drop a <span class="text-primary">Line</span>
                    </h2>
                    <div class="section-rule mx-auto reveal reveal-fade-up" data-reveal-delay="140"></div>
                    <p class="about-desc reveal reveal-fade-up" data-reveal-delay="200">
                        Have a question? Let's talk. Fill out the form below and our team will get back to you as soon as possible.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">

                    <!-- Success Alert -->
                    <div class="contact-success alert d-none reveal reveal-fade-up" id="contactSuccess" role="alert">
                        <div class="d-flex align-items-center gap-3">
                            <div class="contact-success__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
                            </div>
                            <div>
                                <strong>Message sent successfully!</strong>
                                <p class="mb-0 mt-1" style="font-size:0.875rem;">Thank you for reaching out. We'll get back to you shortly.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <form id="contactForm" class="contact-form needs-validation" novalidate>

                        <div class="row g-4">

                            <div class="col-12 col-md-6 reveal reveal-fade-up" data-reveal-delay="0">
                                <label for="contactName" class="contact-form__label">Your Name <span class="text-danger">*</span></label>
                                <input type="text" id="contactName" name="name" class="contact-form__input form-control" placeholder="John Smith" required minlength="2">
                                <div class="invalid-feedback">Please enter your full name.</div>
                            </div>

                            <div class="col-12 col-md-6 reveal reveal-fade-up" data-reveal-delay="80">
                                <label for="contactEmail" class="contact-form__label">Email <span class="text-danger">*</span></label>
                                <input type="email" id="contactEmail" name="email" class="contact-form__input form-control" placeholder="john@example.com" required>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>

                            <div class="col-12 col-md-6 reveal reveal-fade-up" data-reveal-delay="100">
                                <label for="contactPhone" class="contact-form__label">Phone Number <span class="text-danger">*</span></label>
                                <input type="tel" id="contactPhone" name="phone" class="contact-form__input form-control" placeholder="(215) 000-0000" required pattern="[\+]?[(]?[0-9]{1,4}[)]?[-\s\.]?[(]?[0-9]{1,3}[)]?[-\s\.]?[0-9]{3,4}[-\s\.]?[0-9]{3,4}">
                                <div class="invalid-feedback">Please enter a valid phone number.</div>
                            </div>

                            <div class="col-12 col-md-6 reveal reveal-fade-up" data-reveal-delay="140">
                                <label for="contactSubject" class="contact-form__label">Subject <span class="text-danger">*</span></label>
                                <input type="text" id="contactSubject" name="subject" class="contact-form__input form-control" placeholder="Appointment request" required minlength="2">
                                <div class="invalid-feedback">Please enter a subject.</div>
                            </div>

                            <div class="col-12 reveal reveal-fade-up" data-reveal-delay="180">
                                <label for="contactMessage" class="contact-form__label">Description <span class="text-danger">*</span></label>
                                <textarea id="contactMessage" name="message" class="contact-form__input contact-form__textarea form-control" placeholder="Tell us how we can help you…" rows="6" required minlength="10"></textarea>
                                <div class="invalid-feedback">Please enter your message (at least 10 characters).</div>
                            </div>

                            <div class="col-12 reveal reveal-fade-up" data-reveal-delay="220">
                                <button type="submit" class="btn btn-primary btn-lg px-5 fw-semibold contact-form__submit" id="contactSubmit">
                                    <span class="contact-form__submit-text">Send Message</span>
                                    <span class="contact-form__submit-spinner spinner-border spinner-border-sm ms-2 d-none" role="status" aria-hidden="true"></span>
                                </button>
                            </div>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </section>

    <!-- ── Section 02 · Reach Us ── -->
    <section class="py-5 py-lg-6" style="background: var(--color-light-bg);">
        <div class="container-90">

            <div class="text-center mb-5">
                <p class="section-eyebrow reveal reveal-fade-up">Our Location</p>
                <h2 class="section-heading reveal reveal-fade-up" data-reveal-delay="80">
                    Reach <span class="text-primary">Us</span>
                </h2>
                <div class="section-rule mx-auto reveal reveal-fade-up" data-reveal-delay="160"></div>
                <p class="about-desc reveal reveal-fade-up" data-reveal-delay="220">Keep in Touch with Us</p>
            </div>

            <div class="row g-4 justify-content-center">

                <!-- Address -->
                <div class="col-12 col-sm-6 col-lg-4 reveal reveal-fade-up" data-reveal-delay="0">
                    <div class="contact-info-card h-100">
                        <div class="contact-info-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewBox="0 0 16 16"><path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>
                        </div>
                        <h4 class="contact-info-card__title">Our Address</h4>
                        <p class="contact-info-card__text">1044 Byberry Rd<br>Bensalem, PA 19020</p>
                        <a href="https://maps.app.goo.gl/r4JvuEnga3rAs5h79" target="_blank" rel="noopener" class="contact-info-card__link">Get Directions &rarr;</a>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-12 col-sm-6 col-lg-4 reveal reveal-fade-up" data-reveal-delay="100">
                    <div class="contact-info-card h-100">
                        <div class="contact-info-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewBox="0 0 16 16"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.708 2.825L15 11.105V5.383zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741zM1 11.105l4.708-2.897L1 5.383v5.722z"/></svg>
                        </div>
                        <h4 class="contact-info-card__title">Email Us</h4>
                        <p class="contact-info-card__text">smiles4ubensalem@gmail.com</p>
                        <a href="mailto:smiles4ubensalem@gmail.com" class="contact-info-card__link">Send an Email &rarr;</a>
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-12 col-sm-6 col-lg-4 reveal reveal-fade-up" data-reveal-delay="200">
                    <div class="contact-info-card h-100">
                        <div class="contact-info-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewBox="0 0 16 16"><path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>
                        </div>
                        <h4 class="contact-info-card__title">Call Us</h4>
                        <p class="contact-info-card__text">
                            <a href="tel:2156383350" class="contact-info-card__phone">(215) 638-3350</a><br>
                            <a href="tel:2156380336" class="contact-info-card__phone">(215) 638-0336</a>
                        </p>
                        <a href="tel:2156383350" class="contact-info-card__link">Call Now &rarr;</a>
                    </div>
                </div>

            </div>

        </div>
    </section>
 

</main>

<script>
(function () {
    var form    = document.getElementById('contactForm');
    var success = document.getElementById('contactSuccess');
    var submit  = document.getElementById('contactSubmit');
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
        btnText.textContent = 'Sending…';

        var data = new FormData(form);

        fetch('send-contact.php', { method: 'POST', body: data })
            .then(function (res) { return res.json(); })
            .then(function (json) {
                spinner.classList.add('d-none');
                submit.disabled = false;

                if (json.success) {
                    btnText.textContent = 'Send Message';
                    form.reset();
                    form.classList.remove('was-validated');

                    success.querySelector('strong').textContent = 'Message sent successfully!';
                    success.querySelector('p').textContent = 'Thank you for reaching out. We\'ll get back to you shortly.';
                    success.style.background = '#ecfdf5';
                    success.style.borderColor = '#6ee7b7';
                    success.style.color = '#065f46';
                    success.classList.remove('d-none');
                    success.scrollIntoView({ behavior: 'smooth', block: 'center' });

                    setTimeout(function () { success.classList.add('d-none'); }, 6000);
                } else {
                    btnText.textContent = 'Send Message';
                    success.querySelector('strong').textContent = 'Something went wrong.';
                    success.querySelector('p').textContent = json.message || 'Please try again or call us directly.';
                    success.style.background = '#fef2f2';
                    success.style.borderColor = '#fca5a5';
                    success.style.color = '#991b1b';
                    success.classList.remove('d-none');
                    success.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            })
            .catch(function () {
                spinner.classList.add('d-none');
                btnText.textContent = 'Send Message';
                submit.disabled = false;
                success.querySelector('strong').textContent = 'Connection error.';
                success.querySelector('p').textContent = 'Could not reach the server. Please try again or call us directly.';
                success.style.background = '#fef2f2';
                success.style.borderColor = '#fca5a5';
                success.style.color = '#991b1b';
                success.classList.remove('d-none');
                success.scrollIntoView({ behavior: 'smooth', block: 'center' });
            });
    });
})();
</script>

<?php include 'components/footer.php'; ?>
