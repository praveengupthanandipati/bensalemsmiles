<?php if (!isset($galleryImages)) include_once __DIR__ . '/../data/data.php'; ?>

<!-- gallery -->
<section class="gallery-section py-5 py-lg-6" id="gallery">
    <div class="container-90">
        <div class="section-header text-center mb-5 reveal reveal-fade-up">
            <span class="section-eyebrow">Our Gallery</span>
            <h2 class="section-heading">A Glimpse Inside Our Clinic</h2>
            <p class="section-subheading">Take a look at our modern facilities, happy patients, and the advanced technology we use every day.</p>
        </div>
        <div class="gallery-grid">
            <?php foreach ($galleryImages as $i => $img): ?>
            <div class="gallery-item reveal reveal-fade-up" data-reveal-delay="<?= ($i % 3) * 80 ?>" data-index="<?= $i ?>">
                <img src="<?= htmlspecialchars($img['src']) ?>" alt="<?= htmlspecialchars($img['alt']) ?>" loading="lazy">
                <div class="gallery-item__overlay">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--/ gallery-->

<!-- Lightbox -->
<div class="lightbox" id="galleryLightbox" role="dialog" aria-modal="true" aria-label="Image viewer">
    <button class="lightbox__close" id="lightboxClose" aria-label="Close">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
    <button class="lightbox__nav lightbox__nav--prev" id="lightboxPrev" aria-label="Previous image">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
    </button>
    <div class="lightbox__stage">
        <img src="" alt="" class="lightbox__img" id="lightboxImg">
    </div>
    <button class="lightbox__nav lightbox__nav--next" id="lightboxNext" aria-label="Next image">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
    </button>
    <div class="lightbox__counter" id="lightboxCounter"></div>
</div>
<!--/ Lightbox-->
