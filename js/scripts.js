/**
 * BENSALEM NEW - INTERACTIVE SCROLL ANIMATIONS SYSTEM
 * Lightweight, high-performance scroll reveal using IntersectionObserver.
 * Features:
 *   - IntersectionObserver triggers
 *   - Staggered animations using 'data-reveal-delay'
 *   - Repeat animations up/down using 'data-reveal-repeat="true"'
 */

/* -----------------------------------------------
   PAGE PRELOADER
----------------------------------------------- */
window.addEventListener("load", function () {
    var preloader = document.getElementById("pagePreloader");
    if (preloader) {
        preloader.classList.add("is-hidden");
        preloader.addEventListener("transitionend", function () {
            preloader.remove();
        }, { once: true });
    }
});

/* -----------------------------------------------
   HEADER TOP BAR — HIDE ON SCROLL
----------------------------------------------- */
(function () {
    var header    = document.querySelector('header');
    var headerTop = document.querySelector('.header-top');
    if (!header || !headerTop) return;

    var topHeight = 0;

    function measureTop() {
        topHeight = headerTop.offsetHeight;
    }

    function onScroll() {
        if (window.scrollY > 60) {
            header.style.transform = 'translateY(-' + topHeight + 'px)';
        } else {
            header.style.transform = '';
        }
    }

    measureTop();
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', measureTop, { passive: true });
}());

document.addEventListener("DOMContentLoaded", () => {
    // Select all elements designed to reveal on scroll
    const revealElements = document.querySelectorAll(".reveal");

    if (revealElements.length === 0) {
        return;
    }

    // Observer Callback Function
    const revealCallback = (entries, observer) => {
        entries.forEach(entry => {
            const el = entry.target;
            const delay = parseInt(el.getAttribute("data-reveal-delay"), 10) || 0;
            const repeat = el.getAttribute("data-reveal-repeat") === "true";

            if (entry.isIntersecting) {
                // Element entered viewport: add active state (trigger transition)
                if (delay > 0) {
                    setTimeout(() => {
                        el.classList.add("active");
                    }, delay);
                } else {
                    el.classList.add("active");
                }

                // If repeat is false (default), stop observing once shown to save resources
                if (!repeat) {
                    observer.unobserve(el);
                }
            } else {
                // Element exited viewport: if repeat is enabled, reset to initial state
                if (repeat) {
                    el.classList.remove("active");
                }
            }
        });
    };

    // Observer Configuration Options
    const observerOptions = {
        root: null, // Default is viewport
        // bottom margin offset: triggers animation when element is slightly inside the viewport
        rootMargin: "0px 0px -8% 0px", 
        threshold: 0.10 // 10% visibility threshold
    };

    // Initialize IntersectionObserver
    const observer = new IntersectionObserver(revealCallback, observerOptions);

    // Register all elements to observer
    revealElements.forEach(el => {
        observer.observe(el);
    });

    // --- Mobile Offcanvas Menu Polish ---
    const offcanvasEl = document.getElementById("mobileMenuOffcanvas");
    if (offcanvasEl) {
        // Auto-close offcanvas when clicking any anchor link inside it
        const offcanvasLinks = offcanvasEl.querySelectorAll('a[href^="#"]');
        offcanvasLinks.forEach(link => {
            link.addEventListener("click", () => {
                const offcanvasInstance = bootstrap.Offcanvas.getInstance(offcanvasEl);
                if (offcanvasInstance) {
                    offcanvasInstance.hide();
                }
            });
        });

        // Open Appointment Modal smoothly from Offcanvas trigger
        const mobileApptBtn = document.getElementById("mobileAppointmentTrigger");
        if (mobileApptBtn) {
            mobileApptBtn.addEventListener("click", () => {
                const offcanvasInstance = bootstrap.Offcanvas.getInstance(offcanvasEl) || new bootstrap.Offcanvas(offcanvasEl);
                
                // Set up event listener to trigger modal AFTER offcanvas is fully hidden
                const triggerModalAfterHide = () => {
                    const appointmentModalEl = document.getElementById("appointmentModal");
                    if (appointmentModalEl) {
                        const modalInstance = new bootstrap.Modal(appointmentModalEl);
                        modalInstance.show();
                    }
                    offcanvasEl.removeEventListener("hidden.bs.offcanvas", triggerModalAfterHide);
                };
                
                offcanvasEl.addEventListener("hidden.bs.offcanvas", triggerModalAfterHide);
                offcanvasInstance.hide();
            });
        }
    }
});


/* -----------------------------------------------
   GALLERY LIGHTBOX
----------------------------------------------- */
(function () {
    var items    = Array.from(document.querySelectorAll('.gallery-item'));
    var lightbox = document.getElementById('galleryLightbox');
    var lbImg    = document.getElementById('lightboxImg');
    var lbClose  = document.getElementById('lightboxClose');
    var lbPrev   = document.getElementById('lightboxPrev');
    var lbNext   = document.getElementById('lightboxNext');
    var lbCount  = document.getElementById('lightboxCounter');

    if (!lightbox || items.length === 0) return;

    var current = 0;

    function open(index) {
        current = index;
        show(current);
        lightbox.classList.add('is-open');
        document.body.style.overflow = 'hidden';
    }

    function close() {
        lightbox.classList.remove('is-open');
        document.body.style.overflow = '';
    }

    function show(index) {
        var src = items[index].querySelector('img').src;
        var alt = items[index].querySelector('img').alt;
        lbImg.classList.add('is-loading');
        lbImg.onload = function () { lbImg.classList.remove('is-loading'); };
        lbImg.src = src;
        lbImg.alt = alt;
        lbCount.textContent = (index + 1) + ' / ' + items.length;
    }

    function prev() { current = (current - 1 + items.length) % items.length; show(current); }
    function next() { current = (current + 1) % items.length;                show(current); }

    items.forEach(function (item, i) {
        item.addEventListener('click', function () { open(i); });
    });

    lbClose.addEventListener('click', close);
    lbPrev.addEventListener('click', prev);
    lbNext.addEventListener('click', next);

    lightbox.addEventListener('click', function (e) {
        if (e.target === lightbox) close();
    });

    document.addEventListener('keydown', function (e) {
        if (!lightbox.classList.contains('is-open')) return;
        if (e.key === 'Escape')     close();
        if (e.key === 'ArrowLeft')  prev();
        if (e.key === 'ArrowRight') next();
    });
}());

var swiper = new Swiper('.homeslider', {
    loop: true,
    speed: 900,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    autoplay: {
        delay: 6000,
        disableOnInteraction: false,
    },
    on: {
        init: function () {
            var content = this.slides[this.activeIndex].querySelector('.slide-content');
            if (content) content.classList.add('slide-animate');
        },
        slideChangeTransitionStart: function () {
            var content = this.slides[this.activeIndex].querySelector('.slide-content');
            if (content) {
                content.classList.remove('slide-animate');
                void content.offsetWidth;
                content.classList.add('slide-animate');
            }
        }
    }
});

/* -----------------------------------------------
   TESTIMONIAL SWIPER
----------------------------------------------- */
var testiSwiper = new Swiper('.testimonial-swiper', {
    loop: true,
    speed: 700,
    slidesPerView: 1,
    spaceBetween: 24,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.testi-pagination',
        clickable: true,
    },
    navigation: {
        prevEl: '#testiPrev',
        nextEl: '#testiNext',
    },
    breakpoints: {
        768:  { slidesPerView: 2 },
        1200: { slidesPerView: 3 },
    },
    on: {
        init: function () { initTestiReadMore(); },
        resize: function () { initTestiReadMore(); },
    },
});

/* -----------------------------------------------
   TESTIMONIAL READ MORE / READ LESS
----------------------------------------------- */
function initTestiReadMore() {
    document.querySelectorAll('.testi-text').forEach(function (el) {
        /* skip if button already injected */
        if (el.nextElementSibling && el.nextElementSibling.classList.contains('testi-read-more')) return;

        var btn = document.createElement('button');
        btn.className = 'testi-read-more';
        btn.innerHTML =
            'Read more' +
            '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>';

        el.parentNode.insertBefore(btn, el.nextSibling);

        /* show button only when text actually overflows */
        if (el.scrollHeight > el.clientHeight + 2) {
            btn.classList.add('is-visible');
        }

        btn.addEventListener('click', function () {
            var expanded = el.classList.toggle('is-expanded');
            btn.classList.toggle('is-expanded', expanded);
            btn.innerHTML = expanded
                ? 'Read less <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>'
                : 'Read more <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>';
        });
    });
}

/* -----------------------------------------------
   BACK TO TOP
----------------------------------------------- */
(function () {
    var btn = document.getElementById('backToTop');
    if (!btn) return;

    window.addEventListener('scroll', function () {
        if (window.scrollY > 320) {
            btn.classList.add('is-visible');
        } else {
            btn.classList.remove('is-visible');
        }
    }, { passive: true });

    btn.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}());
