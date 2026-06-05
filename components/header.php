<?php
function navActive(string $page): string {
    return basename($_SERVER['PHP_SELF']) === $page ? ' active' : '';
}

function navDropdownActive(array $pages): string {
    return in_array(basename($_SERVER['PHP_SELF']), $pages, true) ? ' active' : '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? htmlspecialchars($pageTitle) . ' | Bensalem Smiles 4 U' : 'Bensalem Smiles 4 U' ?></title>
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="shortcut icon" href="img/favicon-32x32.png">

    <!-- Google Fonts (Poppins) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap"
        rel="stylesheet">

    <!-- styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Page Preloader -->
    <div class="preloader" id="pagePreloader">
        <div class="preloader__inner">
            <div class="preloader__icon">
                <!-- Tooth SVG -->
                <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" width="64" height="64">
                    <path d="M32 4C24.5 4 18 9.5 16 17c-1.5 5.5-1 10 0 14 1 4 1.5 8 1 14 0 2 1 4 3 5s4 .5 5-1l3-7c.5-1.5 1.5-2 4-2s3.5.5 4 2l3 7c1 1.5 3 2 5 1s3-3 3-5c-.5-6 0-10 1-14 1-4 1.5-8.5 0-14C47 9.5 40.5 4 32 4z" fill="url(#toothGrad)" stroke="url(#toothStroke)" stroke-width="1.5" stroke-linejoin="round"/>
                    <defs>
                        <linearGradient id="toothGrad" x1="16" y1="4" x2="48" y2="58" gradientUnits="userSpaceOnUse">
                            <stop offset="0%" stop-color="#e8f5ff"/>
                            <stop offset="100%" stop-color="#c8e8f8"/>
                        </linearGradient>
                        <linearGradient id="toothStroke" x1="16" y1="4" x2="48" y2="58" gradientUnits="userSpaceOnUse">
                            <stop offset="0%" stop-color="#061c63"/>
                            <stop offset="100%" stop-color="#088ac7"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="preloader__ring"></div>
            <p class="preloader__text">Bensalem Smiles 4 U</p>
        </div>
    </div>

    <!-- header-->
    <header class="sticky-top shadow-sm">
        <!-- Section 01: Top Utility Bar -->
        <div class="header-top py-2 text-white bg-secondary border-bottom border-opacity-10 border-white d-none d-md-block">
            <div class="container-90">
                <div class="row align-items-center g-2">
                    <div class="col-12 col-md-8 text-center text-md-start fs-7">
                        <span class="me-3 d-inline-block">
                            <!-- map-pin icon -->
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" class="me-1 align-text-top">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            1044 Byberry Rd, Bensalem, PA 19020
                        </span>
                        <span class="d-inline-block">
                            <!-- phone icon -->
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" class="me-1 align-text-top">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                </path>
                            </svg>
                            Free Call: <a href="tel:2156383350" class="text-white text-decoration-none fw-medium">(215)
                                638-3350</a>
                        </span>
                    </div>
                    <div class="col-12 col-md-4 text-center text-md-end fs-7">
                        <a href="#" class="text-white text-decoration-none fw-medium d-inline-flex align-items-center"
                            data-bs-toggle="modal" data-bs-target="#clinicHoursModal">
                            <!-- clock icon -->
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" class="me-1 align-text-top">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            View Clinic Hours
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 02: Main Navbar -->
        <div class="header-main py-1 bg-white">
            <div class="container-90 d-flex align-items-center justify-content-between">
                <!-- Logo -->
                <a href="index.php" class="logo d-flex align-items-center text-decoration-none">
                  <img src="img/logo.svg" alt="Bensalem Smiles 4 U Logo" height="80"  class="me-2">
                </a>

                <!-- Desktop Navigation Menu -->
                <nav class="d-none d-xl-flex align-items-center header-nav">
                    <ul class="nav align-items-center gap-1">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link-custom<?= navActive('index.php') ?>">Home</a>
                        </li>

                        <!-- Clinic Dropdown -->
                        <?php $clinicPages = ['about.php','modern-clinic.php','doctors.php','fair-prices.php','painless-dentistry.php','new-technology.php']; ?>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link-custom dropdown-toggle<?= navDropdownActive($clinicPages) ?>" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Clinic
                            </a>
                            <ul class="dropdown-menu border-0 shadow-lg mt-2 py-2">
                                <li><a class="dropdown-item py-2 px-3 fw-medium<?= navActive('about.php') ?>" href="about.php">About Us</a></li>
                                <li><a class="dropdown-item py-2 px-3 fw-medium<?= navActive('modern-clinic.php') ?>" href="modern-clinic.php">Modern Clinic</a></li>
                                <li><a class="dropdown-item py-2 px-3 fw-medium<?= navActive('doctors.php') ?>" href="doctors.php">Qualified Doctors</a></li>
                                <li><a class="dropdown-item py-2 px-3 fw-medium<?= navActive('fair-prices.php') ?>" href="fair-prices.php">Fair Prices</a></li>
                                <li><a class="dropdown-item py-2 px-3 fw-medium<?= navActive('painless-dentistry.php') ?>" href="painless-dentistry.php">Painless Dentistry</a></li>
                                <li><a class="dropdown-item py-2 px-3 fw-medium<?= navActive('new-technology.php') ?>" href="new-technology.php">New Technology</a></li>
                                <!-- <li><a class="dropdown-item py-2 px-3 fw-medium<?= navActive('downloads.php') ?>" href="downloads.php">Downloads</a></li> -->
                                <li><a class="dropdown-item py-2 px-3 fw-medium<?= navActive('faq.php') ?>" href="faq.php">FAQ's</a></li>
                            </ul>
                        </li>

                        <!-- Dental Services Dropdown (Mega Menu) -->
                        <?php $servicePages = ['preventive-dentistry.php','pediatric-dentistry.php','root-canal-treatment.php','complete-partial-dentures.php','cosmetic-dentistry.php','dental-fillings.php','full-mouth-rehabilitation.php','implant-dental.php','invisalign.php','oral-surgery.php','tooth-whitening.php','3dcbct.php','nitrus=-oxide-sedation.php','same-day-crowns.php','waterlase.php','glidewell-clear-aligners.php']; ?>
                        <li class="nav-item dropdown position-static dropdown-mega">
                            <a href="#" class="nav-link-custom dropdown-toggle<?= navDropdownActive($servicePages) ?>" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dental Services
                            </a>
                            <div class="dropdown-menu dropdown-menu-mega w-100 border-0 shadow-lg mt-2 p-4">
                                <div class="container-fluid">
                                    <h5 class="fw-bold text-secondary mb-3 pb-2 border-bottom">Comprehensive Dental
                                        Services</h5>
                                    <div class="row g-2">
                                        <div class="col-md-3">
                                            <ul class="list-unstyled mega-menu-list mb-0">
                                                <li><a class="dropdown-item rounded py-2 px-3<?= navActive('preventive-dentistry.php') ?>"
                                                        href="preventive-dentistry.php">Preventive Dentistry</a></li>
                                                <li><a class="dropdown-item rounded py-2 px-3<?= navActive('pediatric-dentistry.php') ?>"
                                                        href="pediatric-dentistry.php">Pediatric Dentistry</a></li>
                                                <li><a class="dropdown-item rounded py-2 px-3<?= navActive('root-canal-treatment.php') ?>" href="root-canal-treatment.php">Root
                                                        Canal Treatment</a></li>
                                                <li><a class="dropdown-item rounded py-2 px-3<?= navActive('complete-partial-dentures.php') ?>"
                                                        href="complete-partial-dentures.php">Complete Partial Dentures</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="list-unstyled mega-menu-list mb-0">
                                                <li><a class="dropdown-item rounded py-2 px-3<?= navActive('cosmetic-dentistry.php') ?>"
                                                        href="cosmetic-dentistry.php">Cosmetic Dentistry</a></li>
                                                <li><a class="dropdown-item rounded py-2 px-3<?= navActive('dental-fillings.php') ?>"
                                                        href="dental-fillings.php">Dental Fillings</a></li>
                                                <li><a class="dropdown-item rounded py-2 px-3<?= navActive('full-mouth-rehabilitation.php') ?>"
                                                        href="full-mouth-rehabilitation.php">Full Mouth Rehabilitation</a></li>
                                                <li><a class="dropdown-item rounded py-2 px-3<?= navActive('implant-dental.php') ?>"
                                                        href="implant-dental.php">Dental Implants</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="list-unstyled mega-menu-list mb-0">
                                                <li><a class="dropdown-item rounded py-2 px-3<?= navActive('invisalign.php') ?>"
                                                        href="invisalign.php">Invisalign</a></li>
                                                <li><a class="dropdown-item rounded py-2 px-3<?= navActive('oral-surgery.php') ?>" href="oral-surgery.php">Oral Surgery</a></li>
                                                <li><a class="dropdown-item rounded py-2 px-3<?= navActive('tooth-whitening.php') ?>" href="tooth-whitening.php">Tooth Whitening</a></li>
                                                <li><a class="dropdown-item rounded py-2 px-3<?= navActive('3dcbct.php') ?>" href="3dcbct.php">3D CBCT</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="list-unstyled mega-menu-list mb-0">
                                                <li><a class="dropdown-item rounded py-2 px-3<?= navActive('nitrus-oxide-sedation.php') ?>"
                                                        href="nitrus-oxide-sedation.php">Nitrus Oxide Sedation</a></li>
                                                <li><a class="dropdown-item rounded py-2 px-3<?= navActive('same-day-crowns.php') ?>"
                                                        href="same-day-crowns.php">Same Day Crowns</a></li>
                                                <li><a class="dropdown-item rounded py-2 px-3<?= navActive('waterlase.php') ?>"
                                                        href="waterlase.php">Waterlase</a></li>
                                                <li><a class="dropdown-item rounded py-2 px-3<?= navActive('glidewell-clear-aligners.php') ?>"
                                                        href="glidewell-clear-aligners.php">Glidewell Clear Aligners</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Facial Esthetics Dropdown -->
                        <?php $facialPages = ['botox.php','laser-hair-removal.php','skin-treatments.php','preime-dermafacial.php']; ?>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link-custom dropdown-toggle<?= navDropdownActive($facialPages) ?>" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Facial Esthetics
                            </a>
                            <ul class="dropdown-menu border-0 shadow-lg mt-2 py-2" style="min-width: 320px;">
                                <li><a class="dropdown-item py-2 px-3 fw-medium<?= navActive('botox.php') ?>" href="botox.php">Botox, Dermal Fillers,
                                        TMJ Pain Management</a></li>
                                <li><a class="dropdown-item py-2 px-3 fw-medium<?= navActive('laser-hair-removal.php') ?>" href="laser-hair-removal.php">Laser Hair Removal</a></li>
                                <li><a class="dropdown-item py-2 px-3 fw-medium<?= navActive('skin-treatments.php') ?>" href="skin-treatments.php">V30 Skin Treatment</a></li>
                                <li><a class="dropdown-item py-2 px-3 fw-medium<?= navActive('preime-dermafacial.php') ?>" href="preime-dermafacial.php">Preime Dermafacial</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="post-care.php" class="nav-link-custom<?= navActive('post-care.php') ?>">Post care</a>
                        </li>
                        <li class="nav-item">
                            <a href="special-offers.php" class="nav-link-custom<?= navActive('special-offers.php') ?>">Special Offers</a>
                        </li>
                        <li class="nav-item">
                            <a href="gallery.php" class="nav-link-custom<?= navActive('gallery.php') ?>">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link-custom<?= navActive('contact.php') ?>">Contact us</a>
                        </li>
                    </ul>
                </nav>

                <!-- Get Appointment Button & Toggler -->
                <div class="d-flex align-items-center gap-3">
                    <a href="https://app.nexhealth.com/appt/bensalem-smiles-4-u?lid=242566" target="_blank" class="btn btn-primary d-none d-lg-inline-block">Get Appointment</a>

                    <!-- Mobile Hamburger Button -->
                    <button class="navbar-toggler d-xl-none btn btn-outline-secondary p-2" type="button"
                        data-bs-toggle="offcanvas" data-bs-target="#mobileMenuOffcanvas"
                        aria-controls="mobileMenuOffcanvas" style="border-radius: 8px;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5" class="align-middle">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>
