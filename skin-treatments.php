<?php
$pageTitle = 'V30 Skin Treatments';
include 'data/data.php';
include 'components/header.php';
?>

<main class="subpage">

    <!-- Page Hero -->
    <section class="page-hero page-hero--branded">
        <div class="page-hero__overlay"></div>
        <div class="container-90 page-hero__content">
            <h1 class="page-hero__title reveal reveal-fade-up">V30 Skin Treatments</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb page-hero__breadcrumb reveal reveal-fade-up" data-reveal-delay="100">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Facial Esthetics</a></li>
                    <li class="breadcrumb-item active" aria-current="page">V30 Skin Treatments</li>
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
                    <p class="section-eyebrow reveal reveal-fade-up">Advanced Skin Care</p>
                    <h2 class="section-heading reveal reveal-fade-up" data-reveal-delay="80">
                        Transform Your Skin Today with Our <span class="text-primary">Expertise &amp; Technology</span>
                    </h2>
                    <p class="about-desc reveal reveal-fade-up" data-reveal-delay="160">
                        However we cover up, when comfortable, the skin remains exposed to so much damage from the environment, the sun, pollutants, free radicals, and more. We must love the skin — and we do this by protecting it, and with the aid of skin treatments, we get it to its best, brightest, and most healthy.
                    </p>
                    <p class="about-desc reveal reveal-fade-up" data-reveal-delay="210">
                        Everybody deserves glowing and healthy skin, and each skin type is unique in its specific requirements to achieve this goal. We are passionate about addressing your exact concerns, providing expertise in areas where you may be unaware of your needs. Our treatments are non-invasive or the most minimally invasive available.
                    </p>

                    <div class="nos-highlight reveal reveal-fade-up" data-reveal-delay="280">
                        <div class="nos-highlight__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/></svg>
                        </div>
                        <div>
                            <p class="nos-highlight__text">Our cutting-edge <strong>V30 skin series</strong> provides a combined therapy approach to improve comfort, results, and safety — with minimal downtime on <strong>ALL skin types.</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Images side by side -->
                <div class="col-12 col-lg-6 order-1 order-lg-2">
                    <div class="row g-3">
                        <div class="col-6 reveal reveal-fade-up" data-reveal-delay="0">
                            <div class="lhr-before-after">
                                <img src="img/skintreatment01.jpg" alt="Skin treatment before and after results" class="lhr-before-after__img img-fluid w-100">
                                <div class="lhr-before-after__label">Before &amp; After</div>
                            </div>
                        </div>
                        <div class="col-6 reveal reveal-fade-up" data-reveal-delay="120">
                            <div class="lhr-before-after">
                                <img src="img/skintreatment02.jpg" alt="Skin rejuvenation before and after results" class="lhr-before-after__img img-fluid w-100">
                                <div class="lhr-before-after__label">Before &amp; After</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ── Section 02 · Services ── -->
    <section class="py-5 py-lg-6" style="background: var(--color-light-bg);">
        <div class="container-90">

            <div class="text-center mb-5">
                <p class="section-eyebrow reveal reveal-fade-up">Our V30 Services</p>
                <h2 class="section-heading reveal reveal-fade-up" data-reveal-delay="80">
                    What We <span class="text-primary">Treat &amp; Transform</span>
                </h2>
                <div class="section-rule mx-auto reveal reveal-fade-up" data-reveal-delay="160"></div>
                <p class="about-desc mx-auto reveal reveal-fade-up" data-reveal-delay="220" style="max-width: 620px;">
                    Some of the services we offer with our V30 and its various handpieces:
                </p>
            </div>

            <div class="row g-3">

                <?php
                $services = [
                    ['icon' => '<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>', 'label' => 'Skin Rejuvenation &amp; Resurfacing'],
                    ['icon' => '<path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm0 1a7 7 0 1 1 0 14A7 7 0 0 1 8 1z"/>', 'label' => 'Skin Tightening &amp; Lifting'],
                    ['icon' => '<path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>', 'label' => 'Scar Revision'],
                    ['icon' => '<path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>', 'label' => 'Skin Texture &amp; Tone'],
                    ['icon' => '<path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864z"/>', 'label' => 'Body Contouring &amp; Cellulite'],
                    ['icon' => '<path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>', 'label' => 'Acne Clearance'],
                    ['icon' => '<path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/><path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>', 'label' => 'Hair Removal'],
                    ['icon' => '<path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/><path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>', 'label' => 'Hyperpigmentation'],
                    ['icon' => '<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>', 'label' => 'Vascular &amp; Pigmented Lesions'],
                    ['icon' => '<path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zm-4-3a1 1 0 0 0-1 1v7a1 1 0 0 0 2 0V5a1 1 0 0 0-1-1zm6-2a1 1 0 1 1 2 0v12a1 1 0 1 1-2 0V2z"/>', 'label' => 'Nail Fungi Treatment'],
                    ['icon' => '<path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8z"/>', 'label' => 'Photofacial &amp; IPL Treatment'],
                    ['icon' => '<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>', 'label' => 'Nd:YAG &amp; RF Treatments'],
                    ['icon' => '<path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/><path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-7 7 7 7 0 0 0 7 7A7 7 0 0 0 15 8a7 7 0 0 0-7-7z"/>', 'label' => 'Chemical Peels'],
                ];
                ?>

                <?php foreach ($services as $i => $s): ?>
                <div class="col-12 col-sm-6 col-lg-4 reveal reveal-fade-up" data-reveal-delay="<?= ($i % 3) * 80 ?>">
                    <div class="v30-service-card">
                        <div class="v30-service-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><?= $s['icon'] ?></svg>
                        </div>
                        <span class="v30-service-card__label"><?= $s['label'] ?></span>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <!-- ── CTA Strip ── -->
    <section class="py-5 py-lg-6" style="background: linear-gradient(135deg, #061c63 0%, #0c2b8c 55%, #088ac7 100%);">
        <div class="container-90 text-center">
            <h2 class="section-heading text-white reveal reveal-fade-up">
                Ready to Uncover <span style="color: #7dd3fc;">Your Best Skin?</span>
            </h2>
            <p class="reveal reveal-fade-up" data-reveal-delay="100" style="color: rgba(255,255,255,0.85); max-width: 520px; margin: 0 auto 2rem;">
                Book your V30 skin treatment consultation with Bensalem Smiles 4 U today and let our specialists create a personalised plan for your unique skin.
            </p>
            <div class="d-flex flex-wrap gap-3 justify-content-center reveal reveal-fade-up" data-reveal-delay="200">
                <a href="tel:2156383350" class="btn btn-light btn-lg px-4 fw-semibold" style="color: var(--bs-secondary);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="me-2" viewBox="0 0 16 16"><path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>
                    (215) 638-3350
                </a>
                <a href="appointment.php" class="btn btn-outline-light btn-lg px-4 fw-semibold">
                    Request Appointment
                </a>
            </div>
        </div>
    </section>

</main>

<?php include 'components/footer.php'; ?>
