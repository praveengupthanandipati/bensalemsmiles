<?php
$pageTitle = 'Waterlase';
include 'data/data.php';
include 'components/header.php';
?>

<main class="subpage">

    <!-- Page Hero -->
    <section class="page-hero page-hero--branded">
        <div class="page-hero__overlay"></div>
        <div class="container-90 page-hero__content">
            <h1 class="page-hero__title reveal reveal-fade-up">Waterlase</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb page-hero__breadcrumb reveal reveal-fade-up" data-reveal-delay="100">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dental Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Waterlase</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ── Section 01 · Introduction ── -->
    <section class="py-5 py-lg-6 bg-white">
        <div class="container-90">
            <div class="row align-items-center g-5">

                <!-- Text -->
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <p class="section-eyebrow reveal reveal-fade-up">Laser Dentistry</p>
                    <h2 class="section-heading reveal reveal-fade-up" data-reveal-delay="80">
                        Think Painless, Convenient, Safe Dental Visits — <span class="text-primary">Think Waterlase!</span>
                    </h2>
                    <p class="about-desc reveal reveal-fade-up" data-reveal-delay="160">
                        The most common reason people avoid visiting the dentist is dental phobia. Even in the presence of experienced professionals, local anesthetics, and conscious sedation, dental phobia persists — largely because of the pain, discomfort, and the dreaded sound of the drill.
                    </p>
                    <p class="about-desc reveal reveal-fade-up" data-reveal-delay="220">
                        Waterlase completely eradicates this. It is a new technological advancement with which the dentist can perform many routine dental procedures with little to no anesthetics or drill — using laser energy, air, and water sprays.
                    </p>

                    <div class="row g-3 mt-2">
                        <div class="col-12 col-sm-4 reveal reveal-fade-up" data-reveal-delay="280">
                            <div class="wl-badge-card">
                                <div class="wl-badge-card__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/></svg>
                                </div>
                                <span class="wl-badge-card__label">Pain-Free</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 reveal reveal-fade-up" data-reveal-delay="340">
                            <div class="wl-badge-card">
                                <div class="wl-badge-card__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/></svg>
                                </div>
                                <span class="wl-badge-card__label">No Drill</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 reveal reveal-fade-up" data-reveal-delay="400">
                            <div class="wl-badge-card">
                                <div class="wl-badge-card__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/></svg>
                                </div>
                                <span class="wl-badge-card__label">FDA Approved</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image -->
                <div class="col-12 col-lg-6 order-1 order-lg-2 reveal reveal-slide-left">
                    <div class="cbct-machine-wrap">
                        <img src="img/waterlase01.jpg" alt="Biolase epicX and Waterlase dental laser systems" class="cbct-machine-img img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ── Section 02 · How It Works ── -->
    <section class="py-5 py-lg-6" style="background: var(--color-light-bg);">
        <div class="container-90">
            <div class="row align-items-center g-5">

                <!-- Image -->
                <div class="col-12 col-lg-6 order-1 order-lg-1 reveal reveal-slide-right">
                    <div class="newtec-img-wrap">
                        <img src="img/waterlase02.jpg" alt="Dentist performing laser dental treatment on patient" class="newtec-img">
                        <div class="newtec-img-caption">
                            <div class="newtec-img-caption__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/></svg>
                            </div>
                            <div>
                                <div class="newtec-img-caption__label">Advanced Laser Care</div>
                                <div class="newtec-img-caption__title">Bensalem Smiles 4 U</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Text -->
                <div class="col-12 col-lg-6 order-2 order-lg-2">
                    <p class="section-eyebrow reveal reveal-fade-up">Clinical Technology</p>
                    <h2 class="section-heading reveal reveal-fade-up" data-reveal-delay="80">
                        How <span class="text-primary">Waterlase Works</span>
                    </h2>
                    <p class="about-desc reveal reveal-fade-up" data-reveal-delay="160">
                        On application with the tooth surface, Waterlase delivers air and water, exciting the water molecules in the tooth to cut through in the most biological way. It generates no heat, is completely painless, produces less aerosols — all without contact. It is safe and precise, preserving more tooth structure and avoiding the micro-fractures caused by drills.
                    </p>
                    <p class="about-desc reveal reveal-fade-up" data-reveal-delay="220">
                        It exerts a very mild influence on oral tissues, allowing you to undergo all your procedures in a single visit. Gone are the days of visiting multiple specialists — Waterlase performs procedures previously reserved for specialists. No need for anesthesia, no numb lips or face, no post-op pain or swelling. It is the most convenient method of dentistry right now.
                    </p>

                    <div class="nos-highlight reveal reveal-fade-up" data-reveal-delay="300">
                        <div class="nos-highlight__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/></svg>
                        </div>
                        <div>
                            <p class="nos-highlight__text">With strict adherence to oral hygiene instructions, you may still need routine dental visits — our <strong>Waterlase ensures every visit is a walk in the park.</strong></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ── CTA Strip ── -->
    <section class="py-5 py-lg-6" style="background: linear-gradient(135deg, #061c63 0%, #0c2b8c 55%, #088ac7 100%);">
        <div class="container-90 text-center">
            <h2 class="section-heading text-white reveal reveal-fade-up">
                Experience Dentistry <span style="color: #7dd3fc;">Without the Fear</span>
            </h2>
            <p class="reveal reveal-fade-up" data-reveal-delay="100" style="color: rgba(255,255,255,0.85); max-width: 520px; margin: 0 auto 2rem;">
                Book with us today and discover how Waterlase makes your dental visit comfortable, fast, and completely pain-free.
            </p>
            <div class="d-flex flex-wrap gap-3 justify-content-center reveal reveal-fade-up" data-reveal-delay="200">
                <a href="tel:2156383350" class="btn btn-light btn-lg px-4 fw-semibold" style="color: var(--bs-secondary);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="me-2" viewBox="0 0 16 16"><path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>
                    (215) 638-3350
                </a>
                <a href="contact.php" class="btn btn-outline-light btn-lg px-4 fw-semibold">
                    Request Appointment
                </a>
            </div>
        </div>
    </section>

</main>

<?php include 'components/footer.php'; ?>
