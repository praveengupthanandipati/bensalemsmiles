<?php
$pageTitle = 'Frequently Asked Questions';
include 'data/data.php';
include 'components/header.php';
?>

<main class="subpage">

    <!-- Page Hero -->
    <section class="page-hero page-hero--branded">
        <div class="page-hero__overlay"></div>
        <div class="container-90 page-hero__content">
            <h1 class="page-hero__title reveal reveal-fade-up">Frequently Asked Questions</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb page-hero__breadcrumb reveal reveal-fade-up" data-reveal-delay="100">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ── FAQ Section ── -->
    <section class="py-5 py-lg-6 bg-white">
        <div class="container-90">

            <div class="row justify-content-center mb-5">
                <div class="col-12 col-lg-7 text-center">
                    <p class="section-eyebrow reveal reveal-fade-up">Got Questions?</p>
                    <h2 class="section-heading reveal reveal-fade-up" data-reveal-delay="80">
                        Frequently Asked <span class="text-primary">Questions</span>
                    </h2>
                    <div class="section-rule mx-auto reveal reveal-fade-up" data-reveal-delay="140"></div>
                    <p class="about-desc reveal reveal-fade-up" data-reveal-delay="200">
                        Find answers to the most common questions about our dental services, appointments, insurance, and more. Still have questions? <a href="contact.php" class="text-primary fw-semibold text-decoration-none">Contact us</a> anytime.
                    </p>
                </div>
            </div>

            <?php
            $faqs = [

                // ── General ──────────────────────────────────────────
                [
                    'category' => 'General',
                    'q' => 'Where is Bensalem Smiles 4 U located and what are your hours?',
                    'a' => 'We are located at 1044 Byberry Rd, Bensalem, PA 19020. Our office hours are Monday &amp; Wednesday 9:00 AM–6:00 PM, Tuesday &amp; Thursday 8:00 AM–6:00 PM, and Friday by appointment 8:00 AM–1:00 PM. Call <a href="tel:2156383350" class="faq-link">(215) 638-3350</a> or <a href="tel:2156380336" class="faq-link">(215) 638-0336</a> to schedule.',
                ],
                [
                    'category' => 'General',
                    'q' => 'Are you accepting new patients?',
                    'a' => 'Yes! We are always welcoming new patients and their families. We offer special new patient discounts and promotions to make your first visit affordable. Check our <a href="special-offers.php" class="faq-link">Special Offers</a> page for current deals.',
                ],
                [
                    'category' => 'General',
                    'q' => 'Do you accept dental insurance?',
                    'a' => 'We accept most major dental insurance plans. Our knowledgeable staff will help you maximize your benefits and file claims on your behalf. If you don\'t have insurance, we also offer in-house preventive plans starting at $129/year. Visit our <a href="special-offers.php" class="faq-link">Special Offers</a> page to learn more.',
                ],
                [
                    'category' => 'General',
                    'q' => 'What makes Bensalem Smiles 4 U different from other dental practices?',
                    'a' => 'We combine advanced technology — including Same-Day CEREC Crowns, Waterlase laser dentistry, and 3D CBCT scanning — with a warm, patient-first approach. We offer late evening hours, accept most insurances, provide senior and veteran discounts, and even offer Facial Esthetics services all under one roof. Our experienced team is committed to making every visit comfortable and stress-free.',
                ],

                // ── Appointments ─────────────────────────────────────
                [
                    'category' => 'Appointments',
                    'q' => 'How do I book an appointment?',
                    'a' => 'You can book in three easy ways: call <a href="tel:2156383350" class="faq-link">(215) 638-3350</a>, email <a href="mailto:smiles4ubensalem@gmail.com" class="faq-link">smiles4ubensalem@gmail.com</a>, or fill out our online <a href="appointment.php" class="faq-link">Appointment Request Form</a>. We confirm appointments promptly.',
                ],
                [
                    'category' => 'Appointments',
                    'q' => 'What should I bring to my first appointment?',
                    'a' => 'Please bring a valid photo ID, your dental insurance card (if applicable), a list of current medications, and any completed patient forms from our <a href="downloads.php" class="faq-link">Downloads</a> page. Arriving 10–15 minutes early is recommended.',
                ],
                [
                    'category' => 'Appointments',
                    'q' => 'How long does a typical dental appointment take?',
                    'a' => 'A routine cleaning and exam typically takes 45–60 minutes. More complex procedures such as Same-Day Crowns or dental implant consultations may take 1–2 hours. When you book, our team will give you an accurate time estimate so you can plan your day accordingly.',
                ],
                [
                    'category' => 'Appointments',
                    'q' => 'What is your cancellation or rescheduling policy?',
                    'a' => 'We kindly ask that you give us at least 24 hours\' notice if you need to cancel or reschedule your appointment. This allows us to offer the slot to another patient in need. To reschedule, simply call us at <a href="tel:2156383350" class="faq-link">(215) 638-3350</a> and we will find a new time that works for you.',
                ],

                // ── Treatments ────────────────────────────────────────
                [
                    'category' => 'Treatments',
                    'q' => 'What dental services do you offer?',
                    'a' => 'We provide Preventive Dentistry, Pediatric Dentistry, Cosmetic Dentistry, Dental Implants, Invisalign &amp; Glidewell Clear Aligners, Root Canal Treatment, Oral Surgery, Same-Day Crowns, Waterlase Laser Dentistry, 3D CBCT Scanning, Teeth Whitening, Dentures, and Nitrous Oxide Sedation — plus a full Facial Esthetics menu.',
                ],
                [
                    'category' => 'Treatments',
                    'q' => 'What are Same-Day Crowns and how do they work?',
                    'a' => 'Same-Day Crowns use CEREC technology to design, mill, and place a permanent ceramic crown in a single visit — no temporaries or second appointments. A digital scan is taken, the crown is custom-milled in our office, then bonded, typically within 1–2 hours. Learn more on our <a href="same-day-crowns.php" class="faq-link">Same-Day Crowns</a> page.',
                ],
                [
                    'category' => 'Treatments',
                    'q' => 'Is Waterlase laser dentistry painful?',
                    'a' => 'Waterlase replaces the traditional drill for many procedures. Most patients experience little to no discomfort, and anesthesia is often not required. It is ideal for patients with dental anxiety or needle sensitivity. Read more on our <a href="waterlase.php" class="faq-link">Waterlase</a> page.',
                ],
                [
                    'category' => 'Treatments',
                    'q' => 'Do you offer Invisalign or clear aligners?',
                    'a' => 'Yes. We offer both Invisalign and Glidewell Clear Aligners to straighten teeth discreetly without metal braces. A free consultation is available to determine which option best fits your smile and lifestyle. Visit our <a href="glidewell-clear-aligners.php" class="faq-link">Glidewell Clear Aligners</a> page for details.',
                ],

                // ── Sedation & Comfort ────────────────────────────────
                [
                    'category' => 'Sedation & Comfort',
                    'q' => 'Do you offer sedation for anxious patients?',
                    'a' => 'Yes. We offer Nitrous Oxide (laughing gas) sedation for patients who experience dental anxiety or fear. It is safe, fast-acting, and wears off quickly so you can drive home after your visit. Our team is dedicated to making every appointment as comfortable and stress-free as possible.',
                ],
                [
                    'category' => 'Sedation & Comfort',
                    'q' => 'Is nitrous oxide sedation safe for children?',
                    'a' => 'Nitrous oxide is one of the safest and most widely used forms of sedation in pediatric dentistry. It is delivered through a small nose mask, takes effect within minutes, and wears off completely once the mask is removed. Our pediatric-trained team adjusts the dosage carefully for each child\'s age and weight.',
                ],
                [
                    'category' => 'Sedation & Comfort',
                    'q' => 'Will I be able to drive after nitrous oxide sedation?',
                    'a' => 'Yes. Unlike IV or oral sedation, nitrous oxide clears from your system within minutes after the mask is removed. Most patients feel completely normal within 5–10 minutes and can safely drive themselves home. You do not need to arrange a designated driver for nitrous oxide appointments.',
                ],
                [
                    'category' => 'Sedation & Comfort',
                    'q' => 'What can I do if I have extreme dental phobia?',
                    'a' => 'We understand dental fear is very real, and our compassionate team is trained to handle even the most anxious patients. Beyond nitrous oxide, we offer a calm, judgment-free environment, thorough explanations before each step, and a signal system so you can pause treatment anytime. Please let us know your concerns when booking so we can prepare accordingly.',
                ],

                // ── Facial Esthetics ──────────────────────────────────
                [
                    'category' => 'Facial Esthetics',
                    'q' => 'What facial esthetics services do you provide?',
                    'a' => 'We offer Botox (cosmetic and therapeutic TMJ relief), Laser Hair Removal, V30 Skin Treatments, and Préime DermaFacial — a 5-in-1 non-invasive facial therapy device. All services are available for all skin types. Visit our <a href="botox.php" class="faq-link">Facial Esthetics</a> section to learn more.',
                ],
                [
                    'category' => 'Facial Esthetics',
                    'q' => 'How long does a Botox treatment last?',
                    'a' => 'Botox results typically last between 3–6 months, depending on the treatment area, dosage, and individual metabolism. Many patients return for maintenance sessions every 4 months to preserve their results. Our trained clinician will discuss a personalized treatment plan during your free consultation.',
                ],
                [
                    'category' => 'Facial Esthetics',
                    'q' => 'Is laser hair removal safe for all skin types?',
                    'a' => 'Yes. Our FDA-approved laser hair removal system is designed to work safely and effectively on all skin types, including darker skin tones. The treatment targets hair follicles without damaging surrounding skin. A patch test is performed before a full session to ensure the best and safest results for your skin. Learn more on our <a href="laser-hair-removal.php" class="faq-link">Laser Hair Removal</a> page.',
                ],
                [
                    'category' => 'Facial Esthetics',
                    'q' => 'What is the Préime DermaFacial and how many sessions do I need?',
                    'a' => 'The Préime DermaFacial is a SMART 5-in-1 device that combines Aqua B hydration, Vibrox microdermabrasion, MicroT skin tightening, Collagen+ stimulation, and Ultra8 transdermal absorption in a single session. Most clients see visible improvement after just one session, with optimal results achieved in a series of 4–6 treatments. Learn more on our <a href="preime-dermafacial.php" class="faq-link">Préime DermaFacial</a> page.',
                ],

                // ── Costs & Offers ────────────────────────────────────
                [
                    'category' => 'Costs & Offers',
                    'q' => 'What special offers do you currently have?',
                    'a' => 'Current promotions include: Free consultation for Implants, Invisalign &amp; Dentures; $79 Emergency Exam with X-ray; $98 General Cleaning; $129 New Adult Patient (exam, X-ray &amp; cleaning); $99 New Kid Patient; 30% off for Seniors &amp; Veterans; and Zoom Whitening for $500 with lifetime refill kit. See all deals on our <a href="special-offers.php" class="faq-link">Special Offers</a> page.',
                ],
                [
                    'category' => 'Costs & Offers',
                    'q' => 'Do you offer a discount for seniors or veterans?',
                    'a' => 'Yes! We proudly offer a 30% discount on our standard fee schedule for Senior Citizens and Veterans. Simply mention your status when booking your appointment. We believe quality dental care should be accessible to those who have served our community and country.',
                ],
                [
                    'category' => 'Costs & Offers',
                    'q' => 'What are your in-house preventive insurance plans?',
                    'a' => 'We offer three in-house plans for patients without insurance: Basic ($129/yr — 1 cleaning, 1 exam, basic X-rays, 10% off procedures), Standard ($240/yr — 2 cleanings, 2 exams, full-mouth X-ray, 20% off procedures), and Premium ($340/yr — 2 cleanings, 2 exams, 3D X-ray scan, 25% off procedures). Visit our <a href="special-offers.php" class="faq-link">Special Offers</a> page for full details.',
                ],
                [
                    'category' => 'Costs & Offers',
                    'q' => 'Do you offer payment plans or financing options?',
                    'a' => 'We strive to make dental care affordable for every patient. In addition to accepting most insurance plans and our in-house preventive plans, we are happy to discuss flexible payment arrangements. Please speak with our front desk team when scheduling your appointment and we will work with you to find a solution that fits your budget.',
                ],

                // ── Post Care ─────────────────────────────────────────
                [
                    'category' => 'Post Care',
                    'q' => 'Where can I find post-treatment care instructions?',
                    'a' => 'Detailed after-care instructions and educational videos are available on our <a href="post-care.php" class="faq-link">Post Care</a> page, covering flossing, denture removal, bleaching, root canals, Invisalign maintenance, and more. Our team is also reachable by phone or email for any post-procedure questions.',
                ],
                [
                    'category' => 'Post Care',
                    'q' => 'What should I avoid after a tooth extraction?',
                    'a' => 'For the first 24–48 hours after an extraction: avoid smoking, drinking through a straw, or spitting forcefully as these can dislodge the blood clot and cause dry socket. Stick to soft foods, avoid hot liquids, and take any prescribed pain medication as directed. If you experience severe pain or swelling after 3 days, call our office immediately.',
                ],
                [
                    'category' => 'Post Care',
                    'q' => 'How do I care for my teeth after a whitening treatment?',
                    'a' => 'For the first 48 hours after whitening, avoid dark-coloured foods and beverages (coffee, tea, red wine, berries), tobacco products, and highly acidic foods. Brush gently with a soft-bristle toothbrush and use a sensitivity toothpaste if needed. With our Zoom Whitening take-home kit, you\'ll receive a lifetime refill to maintain your bright smile long-term.',
                ],
                [
                    'category' => 'Post Care',
                    'q' => 'When should I call the office after a dental procedure?',
                    'a' => 'Contact us right away if you experience any of the following: bleeding that does not stop after 30 minutes of gentle pressure, severe or worsening pain not relieved by over-the-counter medication, signs of infection (swelling, fever, bad taste/odor), a loose or dislodged crown or filling, or any unexpected reaction to medication. We are available by phone for urgent post-procedure questions.',
                ],
            ];

            $categories = array_unique(array_column($faqs, 'category'));
            ?>

            <!-- Category Filter Tabs -->
            <div class="row justify-content-center mb-4">
                <div class="col-12 col-lg-10">
                    <div class="faq-tabs reveal reveal-fade-up" data-reveal-delay="60">
                        <button class="faq-tab active" data-filter="all">All</button>
                        <?php foreach ($categories as $cat): ?>
                        <button class="faq-tab" data-filter="<?= htmlspecialchars($cat) ?>"><?= htmlspecialchars($cat) ?></button>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Accordion -->
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="accordion faq-accordion" id="faqAccordion">

                        <?php foreach ($faqs as $i => $faq): ?>
                        <div class="faq-item reveal reveal-fade-up" data-reveal-delay="<?= min($i * 50, 300) ?>" data-category="<?= htmlspecialchars($faq['category']) ?>">
                            <h3 class="faq-item__heading">
                                <button
                                    class="faq-item__btn<?= $i === 0 ? '' : ' collapsed' ?>"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq<?= $i ?>"
                                    aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>"
                                    aria-controls="faq<?= $i ?>">
                                    <span class="faq-item__num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
                                    <span class="faq-item__q"><?= htmlspecialchars($faq['q']) ?></span>
                                    <span class="faq-item__badge"><?= htmlspecialchars($faq['category']) ?></span>
                                    <span class="faq-item__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg>
                                    </span>
                                </button>
                            </h3>
                            <div id="faq<?= $i ?>" class="collapse<?= $i === 0 ? ' show' : '' ?>" data-bs-parent="#faqAccordion">
                                <div class="faq-item__body">
                                    <?= $faq['a'] ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ── CTA Strip ── -->
    <section class="py-5 py-lg-6" style="background: linear-gradient(135deg, #061c63 0%, #0c2b8c 55%, #088ac7 100%);">
        <div class="container-90 text-center">
            <h2 class="section-heading text-white reveal reveal-fade-up">
                Still Have <span style="color: #7dd3fc;">Questions?</span>
            </h2>
            <p class="reveal reveal-fade-up" data-reveal-delay="100" style="color: rgba(255,255,255,0.85); max-width: 520px; margin: 0 auto 2rem;">
                Our friendly team is here to help. Reach out by phone, email, or visit us in person.
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
    var tabs  = document.querySelectorAll('.faq-tab');
    var items = document.querySelectorAll('.faq-item');

    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            tabs.forEach(function (t) { t.classList.remove('active'); });
            tab.classList.add('active');

            var filter = tab.getAttribute('data-filter');
            items.forEach(function (item) {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                    var collapse = item.querySelector('.collapse');
                    if (collapse && collapse.classList.contains('show')) {
                        var bsCollapse = bootstrap.Collapse.getInstance(collapse);
                        if (bsCollapse) bsCollapse.hide();
                    }
                }
            });
        });
    });
})();
</script>

<?php include 'components/footer.php'; ?>
