<?php
$pageTitle = 'Qualified Doctors';
include 'data/data.php';
include 'components/header.php';
?>

<main class="subpage">

    <!-- Page Hero -->
    <section class="page-hero page-hero--branded">
        <div class="page-hero__overlay"></div>
        <div class="container-90 page-hero__content">
            <h1 class="page-hero__title">Qualified Doctors</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb page-hero__breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="about.php">Clinic</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Qualified Doctors</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Meet our Smile Crew -->
    <div class="py-5 bg-white text-center reveal reveal-fade-up">
        <div class="container-90">
            <span class="section-eyebrow">Our Team</span>
            <h2 class="section-heading mt-1 mb-3">Meet Our Smile Crew</h2>
            <p class="crew-intro">Our highly qualified and compassionate team of dentists is committed to providing you with the finest dental care — combining decades of experience, the latest technology, and a genuine passion for patient well-being.</p>
        </div>
    </div>

    <hr class="doctor-divider m-0">

    <!-- ==========================================
         Section 01 · Dr. Satish Bandaru
         ========================================== -->
    <section class="py-5 py-lg-6 bg-white">
        <div class="container-90">
            <div class="row align-items-center g-4 g-lg-5">

                <!-- Photo -->
                <div class="col-12 col-lg-4 reveal reveal-slide-left">
                    <div class="doctor-photo-wrap">
                        <div class="doctor-img-clip">
                            <img src="img/drsatish.jpg" alt="Dr. Satish Bandaru D.D.S" class="doctor-img">
                        </div>
                        <div class="doctor-tag">
                            <div class="doctor-tag__avatar">SB</div>
                            <div>
                                <div class="doctor-tag__name">Dr. Satish Bandaru</div>
                                <div class="doctor-tag__role">General Dentist · D.D.S</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bio -->
                <div class="col-12 col-lg-8 reveal reveal-slide-right" style="padding-top: 1.5rem;">
                    <span class="section-eyebrow">General Dentist</span>
                    <h2 class="doctor-title mt-2">Dr. Satish Bandaru <span class="fs-5 fw-semibold" style="color: var(--bs-primary);">D.D.S</span></h2>
                    <p class="doctor-role">General Dentist · NYU College of Dentistry</p>

                    <p class="about-desc">Dr. Satish Bandaru is a graduate from New York University College of Dentistry, a distinguished dental college in the U.S.A. He started his dental journey in 1996 and completed his international dental degree in 2001. He also received his Master's degree in Public Health with emphasis on Community Health.</p>

                    <p class="about-desc">Dr. Bandaru is an active member of various dental associations including the American Dental Association, Pennsylvania Dental Association, Academy of General Dentistry, and Academy of Cosmetic Dentistry. He has accomplished over 500 hours of continuing education with emphasis on Implantology, Laser, Cosmetic Dentistry, and Invisalign.</p>

                    <p class="about-desc">Dr. Bandaru believes in combining the best technology with a highly trained clinical staff to provide the highest level of comprehensive dental care. He utilizes up-to-date technology like 3D cone beam imaging and laser to ensure accurate diagnosis and minimally invasive treatment.</p>

                    <div class="doctor-credentials">
                        <span class="doctor-credential">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            NYU College of Dentistry
                        </span>
                        <span class="doctor-credential">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            500+ CE Hours
                        </span>
                        <span class="doctor-credential">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            ADA Member
                        </span>
                        <span class="doctor-credential">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            Cosmetic Dentistry
                        </span>
                        <span class="doctor-credential">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            3D Cone Beam Imaging
                        </span>
                        <span class="doctor-credential">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            Invisalign Certified
                        </span>
                        <span class="doctor-credential">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            Laser Dentistry
                        </span>
                        <span class="doctor-credential">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            MPH · Public Health
                        </span>
                    </div>

                    <button class="btn btn-primary about-btn mt-4" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                        Book with Dr. Bandaru
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ms-2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <hr class="doctor-divider m-0">

    <!-- ==========================================
         Section 02 · Dr. Surbhi Bhatia
         ========================================== -->
    <section class="py-5 py-lg-8" style="background: var(--color-light-bg);">
        <div class="container-90">
            <div class="row align-items-center g-4 g-lg-5">

                <!-- Bio (left on desktop) -->
                <div class="col-12 col-lg-7 order-lg-1 order-2 reveal reveal-slide-left" style="padding-top: 1.5rem;">
                    <span class="section-eyebrow">General Dentist</span>
                    <h2 class="doctor-title mt-2">Dr. Surbhi Bhatia <span class="fs-5 fw-semibold" style="color: var(--bs-primary);">D.D.S</span></h2>
                    <p class="doctor-role">General Dentist · NYU College of Dentistry</p>

                    <p class="about-desc">Dr. Surbhi Bhatia received her dental degree from New York University College of Dentistry. Before coming to the USA in 2007, she received her international degree in 2004 and worked as a teaching associate in Endodontics for over two years. She moved to Philadelphia in 2010 after receiving her DDS degree.</p>

                    <p class="about-desc">As a General Dentist practitioner for over 8 years, Dr. Bhatia is highly trained in all aspects of Pediatric, Restorative, and Endodontic (Root Canal Treatment) Dentistry. She has served in various Philadelphia district schools to educate children about the importance of oral hygiene and its impact on overall health.</p>

                    <p class="about-desc">Dr. Bhatia endeavors to make every patient's dental visit a pleasant experience with quick, quality treatment and minimal discomfort. She has focused her continuing education in Endodontics with 3D diagnosis utilizing cone beam imaging.</p>

                    <div class="doctor-credentials">
                        <span class="doctor-credential">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            NYU College of Dentistry
                        </span>
                        <span class="doctor-credential">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            8+ Years Experience
                        </span>
                        <span class="doctor-credential">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            Endodontics Specialist
                        </span>
                        <span class="doctor-credential">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            Pediatric Dentistry
                        </span>
                        <span class="doctor-credential">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            Restorative Dentistry
                        </span>
                        <span class="doctor-credential">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            3D Cone Beam Diagnosis
                        </span>
                        <span class="doctor-credential">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            Root Canal Treatment
                        </span>
                        <span class="doctor-credential">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            Teaching Associate
                        </span>
                    </div>

                    <button class="btn btn-primary about-btn mt-4" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                        Book with Dr. Bhatia
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ms-2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                </div>

                <!-- Photo (right on desktop) -->
                <div class="col-12 col-lg-4 order-lg-2 order-1 reveal reveal-slide-right">
                    <div class="doctor-photo-wrap">
                        <div class="doctor-img-clip">
                            <img src="img/drsurabhi-bhatia.jpg" alt="Dr. Surbhi Bhatia D.D.S" class="doctor-img">
                        </div>
                        <div class="doctor-tag">
                            <div class="doctor-tag__avatar">SB</div>
                            <div>
                                <div class="doctor-tag__name">Dr. Surbhi Bhatia</div>
                                <div class="doctor-tag__role">General Dentist · D.D.S</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA strip -->
    <section class="py-5 bg-white text-center reveal reveal-fade-up">
        <div class="container-90">
            <h3 class="fw-800 mb-2" style="color: var(--bs-secondary); font-weight: 800;">Ready to Meet Our Team?</h3>
            <p class="text-muted mb-4" style="font-size: 0.975rem;">Schedule your appointment today and experience exceptional dental care firsthand.</p>
            <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                Get an Appointment
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ms-2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
        </div>
    </section>

</main>

<?php include 'components/footer.php'; ?>
