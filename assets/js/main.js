/* ============================================================
   HINGA COFFEE – Main JavaScript
   ============================================================ */

'use strict';

/* ── Page Loader ──────────────────────────────────────────── */
window.addEventListener('load', () => {
  const loader = document.querySelector('.page-loader');
  if (loader) {
    loader.classList.add('hidden');
    setTimeout(() => loader.remove(), 600);
  }
});

/* ── Navbar Scroll Effect ─────────────────────────────────── */
const navbar = document.getElementById('navbar');
if (navbar) {
  const onScroll = () => {
    navbar.classList.toggle('scrolled', window.scrollY > 60);
  };
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
}

/* ── Mobile Menu ──────────────────────────────────────────── */
const hamburger   = document.querySelector('.hamburger');
const mobileMenu  = document.querySelector('.mobile-menu');
const mobileClose = document.querySelector('.mobile-close');

if (hamburger && mobileMenu) {
  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('open');
    mobileMenu.classList.toggle('open');
    document.body.style.overflow = mobileMenu.classList.contains('open') ? 'hidden' : '';
  });

  if (mobileClose) {
    mobileClose.addEventListener('click', closeMobileMenu);
  }

  mobileMenu.querySelectorAll('a').forEach(a => a.addEventListener('click', closeMobileMenu));
}

function closeMobileMenu() {
  hamburger && hamburger.classList.remove('open');
  mobileMenu && mobileMenu.classList.remove('open');
  document.body.style.overflow = '';
}

/* ── Active Nav Link ──────────────────────────────────────── */
(function setActiveLink() {
  const page = location.pathname.split('/').pop() || 'index.php';
  document.querySelectorAll('.nav-links a, .mobile-menu a').forEach(a => {
    const href = a.getAttribute('href');
    if (href === page || (page === '' && href === 'index.php')) {
      a.classList.add('active');
    }
  });
})();

/* ── Intersection Observer – Fade Animations ──────────────── */
const fadeTargets = document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right');
if (fadeTargets.length) {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
  fadeTargets.forEach(el => observer.observe(el));
}

/* ── Counter Animation ────────────────────────────────────── */
function animateCounter(el) {
  const target = parseInt(el.dataset.target, 10);
  const duration = 1800;
  const start = performance.now();
  const suffix = el.dataset.suffix || '';

  const step = (now) => {
    const progress = Math.min((now - start) / duration, 1);
    const eased = 1 - Math.pow(1 - progress, 3); // ease-out cubic
    el.textContent = Math.floor(eased * target).toLocaleString() + suffix;
    if (progress < 1) requestAnimationFrame(step);
  };
  requestAnimationFrame(step);
}

const counters = document.querySelectorAll('.stat-number[data-target]');
if (counters.length) {
  const cObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        cObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });
  counters.forEach(c => cObserver.observe(c));
}

/* ── Video Play Button ────────────────────────────────────── */
const videoWrapper = document.querySelector('.video-wrapper');
const playBtn      = document.querySelector('.play-btn');
const mainVideo    = document.querySelector('.hero-video');

if (playBtn && mainVideo && videoWrapper) {
  playBtn.addEventListener('click', () => {
    videoWrapper.classList.add('playing');
    mainVideo.play();
    mainVideo.controls = true;
  });

  mainVideo.addEventListener('pause', () => {
    if (mainVideo.ended) {
      videoWrapper.classList.remove('playing');
      mainVideo.controls = false;
    }
  });
}

/* ── Lightbox ─────────────────────────────────────────────── */
const lightbox    = document.getElementById('lightbox');
const lbImg       = document.getElementById('lb-img');
const lbClose     = document.getElementById('lb-close');
const lbPrev      = document.getElementById('lb-prev');
const lbNext      = document.getElementById('lb-next');
let   lbImages    = [];
let   lbIndex     = 0;

function openLightbox(images, index) {
  lbImages = images;
  lbIndex  = index;
  showLb();
  lightbox && lightbox.classList.add('open');
  document.body.style.overflow = 'hidden';
}

function showLb() {
  if (lbImg && lbImages[lbIndex]) lbImg.src = lbImages[lbIndex];
}

function closeLightbox() {
  lightbox && lightbox.classList.remove('open');
  document.body.style.overflow = '';
}

if (lbClose) lbClose.addEventListener('click', closeLightbox);
if (lbPrev)  lbPrev.addEventListener('click', () => { lbIndex = (lbIndex - 1 + lbImages.length) % lbImages.length; showLb(); });
if (lbNext)  lbNext.addEventListener('click', () => { lbIndex = (lbIndex + 1) % lbImages.length; showLb(); });
if (lightbox) lightbox.addEventListener('click', (e) => { if (e.target === lightbox) closeLightbox(); });

document.addEventListener('keydown', (e) => {
  if (!lightbox || !lightbox.classList.contains('open')) return;
  if (e.key === 'Escape')     closeLightbox();
  if (e.key === 'ArrowLeft')  { lbIndex = (lbIndex - 1 + lbImages.length) % lbImages.length; showLb(); }
  if (e.key === 'ArrowRight') { lbIndex = (lbIndex + 1) % lbImages.length; showLb(); }
});

/* ── Gallery Masonry Lightbox Init ────────────────────────── */
const masonryItems = document.querySelectorAll('.masonry-item[data-src]');
if (masonryItems.length) {
  const srcs = Array.from(masonryItems).map(i => i.dataset.src);
  masonryItems.forEach((item, idx) => {
    item.addEventListener('click', () => openLightbox(srcs, idx));
  });
}

/* ── Gallery Strip Lightbox ───────────────────────────────── */
const stripItems = document.querySelectorAll('.strip-item[data-src]');
if (stripItems.length) {
  const srcs = Array.from(stripItems).map(i => i.dataset.src);
  stripItems.forEach((item, idx) => {
    item.addEventListener('click', () => openLightbox(srcs, idx));
  });
}

/* ── Gallery Filter ───────────────────────────────────────── */
const filterBtns = document.querySelectorAll('.filter-btn');
const galleryItems = document.querySelectorAll('.masonry-item');

filterBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    filterBtns.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const filter = btn.dataset.filter;
    galleryItems.forEach(item => {
      if (filter === 'all' || item.dataset.type === filter) {
        item.style.display = '';
      } else {
        item.style.display = 'none';
      }
    });
  });
});

/* ── Contact Form ─────────────────────────────────────────── */
const contactForm = document.getElementById('contact-form');
if (contactForm) {
  contactForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const btn = contactForm.querySelector('.btn');
    const orig = btn.textContent;
    btn.textContent = 'Sending…';
    btn.disabled = true;

    // Simulate submission (backend to be wired on server)
    setTimeout(() => {
      btn.textContent = 'Message Sent!';
      btn.style.background = '#4A7A3C';
      setTimeout(() => {
        btn.textContent = orig;
        btn.disabled = false;
        btn.style.background = '';
        contactForm.reset();
      }, 3000);
    }, 1400);
  });
}

/* ── Back to Top ──────────────────────────────────────────── */
const backTop = document.getElementById('back-top');
if (backTop) {
  window.addEventListener('scroll', () => {
    backTop.classList.toggle('show', window.scrollY > 500);
  }, { passive: true });
  backTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
}

/* ── Smooth reveal for page hero ──────────────────────────── */
document.querySelectorAll('.page-hero-content > *').forEach((el, i) => {
  el.style.opacity = '0';
  el.style.transform = 'translateY(20px)';
  el.style.transition = `opacity .6s ease ${i * 0.12}s, transform .6s ease ${i * 0.12}s`;
  setTimeout(() => {
    el.style.opacity = '1';
    el.style.transform = 'translateY(0)';
  }, 100);
});
