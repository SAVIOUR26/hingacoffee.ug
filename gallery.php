<?php
$page_title       = 'Gallery – Hinga Coffee Uganda';
$page_description = 'Explore the Hinga Coffee photo gallery: farming, processing, exporting, and the people behind Uganda\'s premium coffee brand.';

/* Image data: file, alt, type (for filter), orientation */
$gallery_images = [
  ['file'=>'action-01.jpg', 'alt'=>'Coffee farming activity at sunrise',           'type'=>'farming',    'orient'=>'landscape'],
  ['file'=>'action-02.jpg', 'alt'=>'CEO and team field discussion',                'type'=>'team',       'orient'=>'portrait'],
  ['file'=>'action-03.jpg', 'alt'=>'Coffee cherry sorting at the mill',            'type'=>'processing', 'orient'=>'landscape'],
  ['file'=>'action-04.jpg', 'alt'=>'Ground coffee preparation and packaging',      'type'=>'processing', 'orient'=>'portrait'],
  ['file'=>'action-05.jpg', 'alt'=>'Lush coffee plants in the field',              'type'=>'farming',    'orient'=>'landscape'],
  ['file'=>'action-06.jpg', 'alt'=>'Coffee quality check and inspection',          'type'=>'processing', 'orient'=>'landscape'],
  ['file'=>'action-07.jpg', 'alt'=>'CEO in the coffee plantation',                 'type'=>'team',       'orient'=>'portrait'],
  ['file'=>'action-08.jpg', 'alt'=>'Farmer and staff interaction',                 'type'=>'team',       'orient'=>'portrait'],
  ['file'=>'action-09.jpg', 'alt'=>'Drying beds and coffee processing',            'type'=>'processing', 'orient'=>'landscape'],
  ['file'=>'action-10.jpg', 'alt'=>'Export-ready coffee packaging',                'type'=>'export',     'orient'=>'landscape'],
  ['file'=>'action-11.jpg', 'alt'=>'Coffee roasting and blending process',         'type'=>'processing', 'orient'=>'landscape'],
  ['file'=>'action-12.jpg', 'alt'=>'Coffee harvest collection by farmers',         'type'=>'farming',    'orient'=>'portrait'],
  ['file'=>'action-13.jpg', 'alt'=>'Farmer cooperative meeting',                   'type'=>'team',       'orient'=>'portrait'],
  ['file'=>'action-14.jpg', 'alt'=>'Coffee bean close-up – premium quality',      'type'=>'processing', 'orient'=>'portrait'],
  ['file'=>'action-15.jpg', 'alt'=>'Final product ready for international export', 'type'=>'export',     'orient'=>'landscape'],
];

require 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="Gallery page header">
  <div style="position:absolute;inset:0;background:url('assets/images/action-03.jpg') center/cover no-repeat;opacity:.22;"></div>
  <div class="container page-hero-content">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="index.php">Home</a>
      <span aria-hidden="true">›</span>
      <span aria-current="page">Gallery</span>
    </nav>
    <span class="section-label">Life at Hinga Coffee</span>
    <h1>Our Photo Gallery</h1>
    <p>Behind every cup is a story of hard work, passion, and precision. Explore the images that capture our journey — from farm to export.</p>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     GALLERY
════════════════════════════════════════════════════════════ -->
<section class="section" aria-label="Photo gallery">
  <div class="container">

    <!-- Filter Buttons -->
    <div class="gallery-filter fade-in" role="group" aria-label="Filter gallery by category">
      <button class="filter-btn active" data-filter="all">All Photos (<?= count($gallery_images) ?>)</button>
      <button class="filter-btn" data-filter="farming">Farming</button>
      <button class="filter-btn" data-filter="processing">Processing</button>
      <button class="filter-btn" data-filter="team">Team &amp; CEO</button>
      <button class="filter-btn" data-filter="export">Export</button>
    </div>

    <!-- Masonry Grid -->
    <div class="gallery-masonry" role="list" aria-label="Gallery images">
      <?php foreach ($gallery_images as $i => $img):
        $src = 'assets/images/' . $img['file'];
        /* Portrait images render taller naturally in masonry */
        $style = $img['orient'] === 'portrait'
          ? 'style="object-position:center top;"'
          : 'style="object-position:center center;"';
      ?>
      <div class="masonry-item fade-in"
           role="listitem"
           data-src="<?= htmlspecialchars($src) ?>"
           data-type="<?= htmlspecialchars($img['type']) ?>"
           aria-label="<?= htmlspecialchars($img['alt']) ?>">
        <img src="<?= htmlspecialchars($src) ?>"
             alt="<?= htmlspecialchars($img['alt']) ?>"
             loading="lazy"
             <?= $style ?>>
        <div class="masonry-overlay" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="36" style="color:#fff">
            <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/>
          </svg>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     VIDEO TEASER
════════════════════════════════════════════════════════════ -->
<section class="section section--dark" aria-label="Company video">
  <div class="container text-center">
    <span class="section-label fade-in">See Us in Action</span>
    <h2 class="fade-in" style="color:var(--cream);margin-bottom:.75rem;">Watch Our Full Company Story</h2>
    <p class="fade-in" style="margin:0 auto 2.5rem;color:rgba(248,244,237,.75);">Photos tell part of the story. The video tells all of it — including an exclusive CEO interview and the full coffee production journey.</p>
    <div class="fade-in" style="max-width:860px;margin-inline:auto;">
      <div class="video-wrapper" style="border-radius:var(--radius-lg);overflow:hidden;">
        <video class="hero-video" preload="none" poster="assets/images/action-09.jpg" aria-label="Hinga Coffee company story video">
          <source src="assets/video/company-story.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <div class="video-overlay">
          <h2 style="font-size:1.8rem;">Hinga Coffee – The Full Story</h2>
          <p>CEO Interview · Farm to Export · The People Behind the Coffee</p>
          <button class="play-btn" aria-label="Play Hinga Coffee story video">
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-banner" aria-label="Call to action">
  <div class="container">
    <span class="section-label" style="color:var(--gold-light);">Seen Enough?</span>
    <h2>Let's Build Something Together</h2>
    <p>Contact our team to discuss your coffee import needs, partnership opportunities, or a custom product enquiry.</p>
    <div class="btn-group">
      <a href="contact.php" class="btn btn-white"><i class="fas fa-envelope"></i> Contact Us</a>
      <a href="products.php" class="btn btn-outline"><i class="fas fa-mug-hot"></i> View Products</a>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
