<?php
$pageTitle = 'Download Documents';
include 'data/data.php';
include 'components/header.php';
?>

<main class="subpage">

    <!-- Page Hero -->
    <section class="page-hero page-hero--branded">
        <div class="page-hero__overlay"></div>
        <div class="container-90 page-hero__content">
            <h1 class="page-hero__title reveal reveal-fade-up">Download Documents</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb page-hero__breadcrumb reveal reveal-fade-up" data-reveal-delay="100">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Download Documents</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ── Documents Table ── -->
    <section class="py-5 py-lg-6 bg-white">
        <div class="container-90">

            <div class="row justify-content-center mb-5">
                <div class="col-12 col-lg-8 text-center">
                    <p class="section-eyebrow reveal reveal-fade-up">Patient Resources</p>
                    <h2 class="section-heading reveal reveal-fade-up" data-reveal-delay="80">
                        Download <span class="text-primary">Documents</span>
                    </h2>
                    <div class="section-rule mx-auto reveal reveal-fade-up" data-reveal-delay="140"></div>
                    <p class="about-desc reveal reveal-fade-up" data-reveal-delay="200">
                        Download and complete the forms below before your visit to save time at the office.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center reveal reveal-fade-up" data-reveal-delay="100">
                <div class="col-12 col-lg-10">
                    <div class="downloads-table-wrap">
                        <table class="table downloads-table align-middle mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" class="downloads-table__th" style="width: 70px;">S.No</th>
                                    <th scope="col" class="downloads-table__th">Name of Document</th>
                                    <th scope="col" class="downloads-table__th text-center" style="width: 160px;">Download Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $documents = [
                                    ['New Patient Registration Form',     'downloads/new-patient-registration.pdf'],
                                    ['Medical History Form',              'downloads/medical-history-form.pdf'],
                                    ['HIPAA Privacy Policy Acknowledgment','downloads/hipaa-privacy-policy.pdf'],
                                    ['Dental Insurance Claim Form',       'downloads/dental-insurance-claim.pdf'],
                                    ['Consent for Treatment Form',        'downloads/consent-for-treatment.pdf'],
                                ];
                                foreach ($documents as $i => $doc): ?>
                                <tr class="downloads-table__row">
                                    <td class="downloads-table__sno"><?= $i + 1 ?></td>
                                    <td class="downloads-table__name">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="downloads-table__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/></svg>
                                            </div>
                                            <?= htmlspecialchars($doc[0]) ?>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?= htmlspecialchars($doc[1]) ?>" download class="btn btn-sm downloads-table__btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="me-1" viewBox="0 0 16 16"><path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/><path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/></svg>
                                            Download
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<?php include 'components/footer.php'; ?>
