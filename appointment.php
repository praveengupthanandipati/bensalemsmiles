<?php
$pageTitle = 'Get Appointment';
include 'data/data.php';
include 'components/header.php';
?>

<main class="subpage">

    <!-- Page Hero -->
    <section class="page-hero page-hero--branded">
        <div class="page-hero__overlay"></div>
        <div class="container-90 page-hero__content">
            <h1 class="page-hero__title reveal reveal-fade-up">Get Appointment</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb page-hero__breadcrumb reveal reveal-fade-up" data-reveal-delay="100">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Get Appointment</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ── Appointment Form Section ── -->
    <section class="py-5 py-lg-6 bg-white">
        <div class="container-90">

            <div class="row justify-content-center mb-5">
                <div class="col-12 col-lg-7 text-center">
                    <p class="section-eyebrow reveal reveal-fade-up">Book a Visit</p>
                    <h2 class="section-heading reveal reveal-fade-up" data-reveal-delay="80">
                        Request an <span class="text-primary">Appointment</span>
                    </h2>
                    <div class="section-rule mx-auto reveal reveal-fade-up" data-reveal-delay="140"></div>
                    <p class="about-desc reveal reveal-fade-up" data-reveal-delay="200">
                        Fill out the form below and our team will confirm your appointment shortly. We offer convenient morning, afternoon, and evening slots.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">

                    <!-- Success Alert -->
                    <div class="contact-success alert d-none" id="apptSuccess" role="alert">
                        <div class="d-flex align-items-center gap-3">
                            <div class="contact-success__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
                            </div>
                            <div>
                                <strong>Appointment request sent!</strong>
                                <p class="mb-0 mt-1" style="font-size:0.875rem;">Thank you! We'll confirm your appointment shortly.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Appointment Form -->
                    <form id="appointmentForm" class="contact-form needs-validation" novalidate>

                        <div class="row g-4">

                            <!-- Name -->
                            <div class="col-12 col-md-6 reveal reveal-fade-up" data-reveal-delay="0">
                                <label for="apptName" class="contact-form__label">Full Name <span class="text-danger">*</span></label>
                                <input type="text" id="apptName" name="name" class="contact-form__input form-control" placeholder="John Smith" required minlength="2">
                                <div class="invalid-feedback">Please enter your full name.</div>
                            </div>

                            <!-- Email -->
                            <div class="col-12 col-md-6 reveal reveal-fade-up" data-reveal-delay="80">
                                <label for="apptEmail" class="contact-form__label">Email <span class="text-danger">*</span></label>
                                <input type="email" id="apptEmail" name="email" class="contact-form__input form-control" placeholder="john@example.com" required>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>

                            <!-- Phone -->
                            <div class="col-12 col-md-6 reveal reveal-fade-up" data-reveal-delay="100">
                                <label for="apptPhone" class="contact-form__label">Phone Number <span class="text-danger">*</span></label>
                                <input type="tel" id="apptPhone" name="phone" class="contact-form__input form-control" placeholder="(215) 000-0000" required pattern="[\+]?[(]?[0-9]{1,4}[)]?[-\s\.]?[(]?[0-9]{1,3}[)]?[-\s\.]?[0-9]{3,4}[-\s\.]?[0-9]{3,4}">
                                <div class="invalid-feedback">Please enter a valid phone number.</div>
                            </div>

                            <!-- Subject -->
                            <div class="col-12 col-md-6 reveal reveal-fade-up" data-reveal-delay="140">
                                <label for="apptSubject" class="contact-form__label">Subject <span class="text-danger">*</span></label>
                                <input type="text" id="apptSubject" name="subject" class="contact-form__input form-control" placeholder="e.g. Teeth Cleaning" required minlength="2">
                                <div class="invalid-feedback">Please enter a subject.</div>
                            </div>

                            <!-- Time Slot -->
                            <div class="col-12 col-md-6 reveal reveal-fade-up" data-reveal-delay="180">
                                <label for="apptTime" class="contact-form__label">Time for Appointment <span class="text-danger">*</span></label>
                                <select id="apptTime" name="time" class="contact-form__input form-select" required>
                                    <option value="" disabled selected>Select a time slot</option>
                                    <option value="10:00 AM – 1:00 PM">10:00 AM – 1:00 PM</option>
                                    <option value="2:00 PM – 4:00 PM">2:00 PM – 4:00 PM</option>
                                    <option value="6:00 PM – 9:00 PM">6:00 PM – 9:00 PM</option>
                                </select>
                                <div class="invalid-feedback">Please select a time slot.</div>
                            </div>

                            <!-- Preferred Day -->
                            <div class="col-12 col-md-6 reveal reveal-fade-up" data-reveal-delay="220">
                                <label for="apptDay" class="contact-form__label">Preferred Day of the Week <span class="text-danger">*</span></label>
                                <select id="apptDay" name="day" class="contact-form__input form-select" required>
                                    <option value="" disabled selected>Select a day</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                </select>
                                <div class="invalid-feedback">Please select a preferred day.</div>
                            </div>

                            <!-- Description -->
                            <div class="col-12 reveal reveal-fade-up" data-reveal-delay="260">
                                <label for="apptMessage" class="contact-form__label">Description</label>
                                <textarea id="apptMessage" name="message" class="contact-form__input contact-form__textarea form-control" placeholder="Tell us about your dental concern or any special requirements…" rows="5"></textarea>
                            </div>

                            <!-- Submit -->
                            <div class="col-12 reveal reveal-fade-up" data-reveal-delay="300">
                                <button type="submit" class="btn btn-primary btn-lg px-5 fw-semibold contact-form__submit" id="apptSubmit">
                                    <span class="contact-form__submit-text">Book Appointment</span>
                                    <span class="contact-form__submit-spinner spinner-border spinner-border-sm ms-2 d-none" role="status" aria-hidden="true"></span>
                                </button>
                            </div>

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
                Prefer to Call? <span style="color: #7dd3fc;">We're Ready.</span>
            </h2>
            <p class="reveal reveal-fade-up" data-reveal-delay="100" style="color: rgba(255,255,255,0.85); max-width: 520px; margin: 0 auto 2rem;">
                Call us directly to schedule your visit. We offer late evening and weekend hours for your convenience.
            </p>
            <div class="d-flex flex-wrap gap-3 justify-content-center reveal reveal-fade-up" data-reveal-delay="200">
                <a href="tel:2156383350" class="btn btn-light btn-lg px-4 fw-semibold" style="color: var(--bs-secondary);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="me-2" viewBox="0 0 16 16"><path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>
                    (215) 638-3350
                </a>
                <a href="tel:2156380336" class="btn btn-outline-light btn-lg px-4 fw-semibold">
                    (215) 638-0336
                </a>
            </div>
        </div>
    </section>

</main>

<script>
(function () {
    var form    = document.getElementById('appointmentForm');
    var success = document.getElementById('apptSuccess');
    var submit  = document.getElementById('apptSubmit');
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

        fetch('send-appointment.php', { method: 'POST', body: data })
            .then(function (res) { return res.json(); })
            .then(function (json) {
                spinner.classList.add('d-none');
                submit.disabled = false;

                if (json.success) {
                    btnText.textContent = 'Book Appointment';
                    form.reset();
                    form.classList.remove('was-validated');

                    success.querySelector('strong').textContent = 'Appointment request sent!';
                    success.querySelector('p').textContent = 'Thank you! We\'ll confirm your appointment shortly.';
                    success.style.background = '#ecfdf5';
                    success.style.borderColor = '#6ee7b7';
                    success.style.color = '#065f46';
                    success.classList.remove('d-none');
                    success.scrollIntoView({ behavior: 'smooth', block: 'start' });

                    setTimeout(function () { success.classList.add('d-none'); }, 7000);
                } else {
                    btnText.textContent = 'Book Appointment';
                    showError(json.message || 'Please try again or call us directly.');
                }
            })
            .catch(function () {
                spinner.classList.add('d-none');
                btnText.textContent = 'Book Appointment';
                submit.disabled = false;
                showError('Could not reach the server. Please try again or call us directly.');
            });
    });

    function showError(msg) {
        success.querySelector('strong').textContent = 'Something went wrong.';
        success.querySelector('p').textContent = msg;
        success.style.background = '#fef2f2';
        success.style.borderColor = '#fca5a5';
        success.style.color = '#991b1b';
        success.classList.remove('d-none');
        success.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
})();
</script>

<?php include 'components/footer.php'; ?>
