<?php
$pageTitle = 'Post Care';
include 'data/data.php';
include 'components/header.php';
?>

<main class="subpage">

    <!-- Page Hero -->
    <section class="page-hero page-hero--branded">
        <div class="page-hero__overlay"></div>
        <div class="container-90 page-hero__content">
            <h1 class="page-hero__title reveal reveal-fade-up">Post Care</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb page-hero__breadcrumb reveal reveal-fade-up" data-reveal-delay="100">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Post Care</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ── Section 01 · Intro ── -->
    <section class="py-5 py-lg-6 bg-white">
        <div class="container-90">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 text-center">
                    <p class="section-eyebrow reveal reveal-fade-up">Your Recovery Guide</p>
                    <h2 class="section-heading reveal reveal-fade-up" data-reveal-delay="80">
                        After Care at <span class="text-primary">Bensalem Smiles 4 U</span>
                    </h2>
                    <div class="section-rule mx-auto reveal reveal-fade-up" data-reveal-delay="140"></div>
                    <p class="about-desc reveal reveal-fade-up" data-reveal-delay="200">
                        Depending on your treatment, we will provide detailed after-care instructions to help you look after your oral health at home. If you have any questions, please contact us by email or phone and our smile crew will get back to you quickly.
                    </p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center mt-3 reveal reveal-fade-up" data-reveal-delay="260">
                        <a href="tel:2156383350" class="btn btn-primary btn-lg px-4 fw-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="me-2" viewBox="0 0 16 16"><path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>
                            (215) 638-3350
                        </a>
                        <a href="contact.php" class="btn btn-outline-secondary btn-lg px-4 fw-semibold">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Section 02 · Video Resources ── -->
    <section class="py-5 py-lg-6" style="background: var(--color-light-bg);">
        <div class="container-90">

            <div class="text-center mb-5">
                <p class="section-eyebrow reveal reveal-fade-up">Educational Resources</p>
                <h2 class="section-heading reveal reveal-fade-up" data-reveal-delay="80">
                    Helpful <span class="text-primary">Care Videos</span>
                </h2>
                <div class="section-rule mx-auto reveal reveal-fade-up" data-reveal-delay="160"></div>
            </div>

            <?php
            $videos = [
                ['id' => 'Q7PI3GUzwWQ', 'title' => 'How To Properly Floss Your Teeth'],
                ['id' => 'bcdBqDH5MBk', 'title' => 'Steps to Remove Your Dentures Easily'],
                ['id' => 'St4kv8ZyAd0', 'title' => 'What is Teeth Bleaching'],
                ['id' => 'jSG0Y6KOVTE', 'title' => 'Root Canal Treatment'],
                ['id' => 'RHEeVpSItsk', 'title' => 'The Invisalign Process'],
                ['id' => 'nznWnGLZffw', 'title' => 'Cosmetic Dentistry Procedures'],
            ];
            ?>

            <div class="row g-4">
                <?php foreach ($videos as $i => $v): ?>
                <div class="col-12 col-sm-6 col-lg-4 reveal reveal-fade-up" data-reveal-delay="<?= ($i % 3) * 100 ?>">
                    <button class="postcare-video-card w-100" data-video-id="<?= $v['id'] ?>" data-video-title="<?= htmlspecialchars($v['title']) ?>" data-bs-toggle="modal" data-bs-target="#videoModal">
                        <div class="postcare-video-card__thumb">
                            <img src="https://img.youtube.com/vi/<?= $v['id'] ?>/hqdefault.jpg" alt="<?= htmlspecialchars($v['title']) ?>" class="postcare-video-card__img img-fluid w-100">
                            <div class="postcare-video-card__play">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/></svg>
                            </div>
                        </div>
                        <div class="postcare-video-card__body">
                            <p class="postcare-video-card__title"><?= htmlspecialchars($v['title']) ?></p>
                        </div>
                    </button>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

</main>

<!-- ── Video Modal ── -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-dark border-0">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title text-white fw-semibold" id="videoModalLabel"></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-2 pt-1">
                <div class="ratio ratio-16x9">
                    <iframe id="videoModalFrame" src="" title="Care video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
(function () {
    var modal = document.getElementById('videoModal');
    var frame = document.getElementById('videoModalFrame');
    var label = document.getElementById('videoModalLabel');

    modal.addEventListener('show.bs.modal', function (e) {
        var btn = e.relatedTarget;
        var id  = btn.getAttribute('data-video-id');
        var title = btn.getAttribute('data-video-title');
        frame.src = 'https://www.youtube.com/embed/' + id + '?autoplay=1';
        label.textContent = title;
    });

    modal.addEventListener('hide.bs.modal', function () {
        frame.src = '';
    });
})();
</script>

<?php include 'components/footer.php'; ?>
