<?php
$page_title       = 'About Us – Hinga Coffee Uganda';
$page_description = 'Learn about Hinga Coffee – Uganda\'s proudly homegrown premium coffee company, our vision, mission, values, and the people behind every exceptional cup.';
require 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="About page header">
  <div class="container page-hero-content">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span aria-hidden="true">›</span>
      <span aria-current="page">About</span>
    </nav>
    <span class="section-label">Our Story</span>
    <h1>Rooted in Uganda,<br>Reaching the World</h1>
    <p>A proudly Ugandan-owned company on a mission to make Ugandan coffee a globally recognised premium product.</p>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     OVERVIEW
════════════════════════════════════════════════════════════ -->
<section class="section" aria-label="Company overview">
  <div class="container">
    <div class="about-split">
      <div class="img-wrap fade-in-left">
        <!-- Portrait image – 810×1080 – natural ratio preserved -->
        <img src="assets/images/action-02.jpg"
             alt="Hinga Coffee team in the field"
             loading="lazy"
             style="height:580px;object-fit:cover;object-position:center top;">
      </div>
      <div class="about-text fade-in-right">
        <span class="section-label">Company Overview</span>
        <h2>Who Is Hinga Coffee?</h2>
        <p>Hinga Coffee is a proudly Ugandan-owned coffee company with a clear focus on producing, processing, and exporting premium quality coffee. We are dedicated to building a fully vertically integrated value chain — from cultivation through processing to delivery — ensuring that quality and traceability are maintained at every stage.</p>
        <p>Our headquarters sit at Namanve Industrial Park, Mukono, Uganda, positioning us at the heart of East Africa's commercial hub with direct links to Kampala and major export routes.</p>
        <p>We work alongside hundreds of farmers across Uganda's premier coffee-growing regions, providing technical support, fair pricing, and shared prosperity. Our modern processing facilities transform raw cherries into world-class green beans, roasted coffee, and precision-ground blends.</p>
        <div style="display:flex;gap:1rem;margin-top:2rem;flex-wrap:wrap;">
          <a href="products" class="btn btn-primary">
            <i class="fas fa-mug-hot"></i> Our Products
          </a>
          <a href="contact" class="btn btn-outline">
            <i class="fas fa-handshake"></i> Partner With Us
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     VISION & MISSION
════════════════════════════════════════════════════════════ -->
<section class="section section--dark" aria-label="Vision and Mission">
  <div class="container">
    <div class="text-center" style="margin-bottom:3.5rem;">
      <span class="section-label fade-in">Our Direction</span>
      <h2 class="fade-in" style="color:var(--cream);">Vision &amp; Mission</h2>
    </div>
    <div class="grid-2">
      <article class="sustain-card fade-in">
        <div class="sustain-icon" aria-hidden="true">🔭</div>
        <h3>Our Vision</h3>
        <p>To position Ugandan coffee as a globally recognised premium product while improving the livelihoods of farmers and promoting sustainable agriculture throughout Uganda and the wider region.</p>
        <p style="margin-top:1rem;">We see a future where "Ugandan Coffee" is synonymous with exceptional quality — celebrated in the world's finest cafés and homes.</p>
      </article>
      <article class="sustain-card fade-in">
        <div class="sustain-icon" aria-hidden="true">🎯</div>
        <h3>Our Mission</h3>
        <p>To produce and deliver the highest quality Ugandan coffee through sustainable farming practices, modern processing methods, and strong partnerships with farmers, buyers, and communities.</p>
        <p style="margin-top:1rem;">We achieve this by being present at every step — from the farm to the final cup — ensuring nothing is left to chance.</p>
      </article>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     CORE VALUES
════════════════════════════════════════════════════════════ -->
<section class="section section--cream" aria-label="Core values">
  <div class="container text-center">
    <span class="section-label fade-in">What We Stand For</span>
    <h2 class="fade-in" style="margin-bottom:.75rem;">Our Core Values</h2>
    <p class="fade-in" style="margin:0 auto 3.5rem;">Six principles that are woven into every decision, relationship, and coffee bean we touch.</p>

    <div class="grid-3">
      <?php
      $values = [
        ['icon'=>'🏆','title'=>'Quality Excellence',   'text'=>'We never compromise on quality — from soil health and cherry selection to processing and packaging. Every batch meets international premium standards before it leaves our facility.'],
        ['icon'=>'🌿','title'=>'Sustainability',       'text'=>'Our farming and processing practices are designed to protect Uganda\'s biodiversity, reduce waste, and ensure the land remains productive for generations of farmers to come.'],
        ['icon'=>'🤝','title'=>'Integrity',            'text'=>'We operate with full transparency in every partnership, every contract, and every transaction. What we promise, we deliver — without exception.'],
        ['icon'=>'👨‍🌾','title'=>'Farmer Empowerment', 'text'=>'Farmers are the backbone of Hinga Coffee. We pay fair prices, provide agronomic training, and work to improve the economic wellbeing of every community we operate in.'],
        ['icon'=>'💡','title'=>'Innovation',           'text'=>'We continuously invest in modern processing technology and agri-tech solutions to improve yield quality, reduce post-harvest losses, and create better products for our customers.'],
        ['icon'=>'🔍','title'=>'Traceability',        'text'=>'Full transparency from farm to final destination. Our traceability systems allow buyers and consumers to know exactly where their coffee comes from and how it was produced.'],
      ];
      foreach ($values as $v): ?>
      <article class="value-card fade-in">
        <div class="value-icon" aria-hidden="true"><?= $v['icon'] ?></div>
        <h4><?= $v['title'] ?></h4>
        <p><?= $v['text'] ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     THE JOURNEY / TIMELINE
════════════════════════════════════════════════════════════ -->
<section class="section" aria-label="Our journey">
  <div class="container">
    <div style="max-width:700px;margin-inline:auto;">
      <span class="section-label fade-in">Our Journey</span>
      <h2 class="fade-in" style="margin-bottom:2.5rem;">Building Uganda's Coffee Legacy</h2>
      <div class="timeline fade-in">
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <h4>Foundation</h4>
          <p>Hinga Coffee was founded with a clear vision: to create a premium, vertically integrated Ugandan coffee company that benefits both farmers and global consumers.</p>
        </div>
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <h4>Farmer Network Expansion</h4>
          <p>We established strong partnerships with hundreds of smallholder farmers across Uganda's key coffee regions, providing training, inputs, and guaranteed fair market access.</p>
        </div>
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <h4>Namanve Processing Facility</h4>
          <p>Opened our state-of-the-art processing facility at Namanve Industrial Park, Mukono — enabling consistent, high-quality wet and dry processing at scale.</p>
        </div>
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <h4>International Export Launch</h4>
          <p>Began exporting green coffee beans and roasted products to international markets, connecting Uganda's coffee culture with specialty buyers worldwide.</p>
        </div>
        <div class="timeline-item">
          <div class="timeline-dot" style="background:var(--green);box-shadow:0 0 0 2px var(--green);"></div>
          <h4>Growing Forward</h4>
          <p>Continuously expanding our product range, farmer network, and international partnerships — building Uganda's most trusted coffee export brand.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     CEO IN ACTION – PHOTO GRID
════════════════════════════════════════════════════════════ -->
<section class="section section--cream" aria-label="CEO and team in action">
  <div class="container">
    <div class="text-center" style="margin-bottom:2.5rem;">
      <span class="section-label fade-in">People &amp; Passion</span>
      <h2 class="fade-in">The Faces Behind the Coffee</h2>
      <p class="fade-in" style="margin-inline:auto;">Our team, our CEO, and our farmers — all united by the same passion for exceptional Ugandan coffee.</p>
    </div>

    <!-- Mix of portrait and landscape images showcasing people -->
    <div style="display:grid;grid-template-columns:repeat(3,1fr);grid-template-rows:auto;gap:1.25rem;">
      <!-- Row 1 -->
      <div class="masonry-item fade-in" data-src="assets/images/action-02.jpg">
        <!-- Portrait 3:4 → natural height -->
        <img src="assets/images/action-02.jpg" alt="CEO and team discussion" loading="lazy"
             style="height:380px;object-fit:cover;object-position:center top;">
        <div class="masonry-overlay" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="36" style="color:#fff"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg>
        </div>
      </div>
      <div class="masonry-item fade-in" data-src="assets/images/action-09.jpg" style="grid-row:span 1;">
        <!-- Landscape 4:3 -->
        <img src="assets/images/action-09.jpg" alt="Coffee field operations" loading="lazy"
             style="height:280px;object-fit:cover;">
        <div class="masonry-overlay" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="36" style="color:#fff"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg>
        </div>
      </div>
      <div class="masonry-item fade-in" data-src="assets/images/action-07.jpg">
        <!-- Portrait 3:4 -->
        <img src="assets/images/action-07.jpg" alt="CEO in the coffee farm" loading="lazy"
             style="height:380px;object-fit:cover;object-position:center top;">
        <div class="masonry-overlay" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="36" style="color:#fff"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg>
        </div>
      </div>
      <!-- Row 2 -->
      <div class="masonry-item fade-in" data-src="assets/images/action-10.jpg">
        <img src="assets/images/action-10.jpg" alt="Coffee export packaging" loading="lazy"
             style="height:260px;object-fit:cover;">
        <div class="masonry-overlay" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="36" style="color:#fff"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg>
        </div>
      </div>
      <div class="masonry-item fade-in" data-src="assets/images/action-08.jpg">
        <!-- Portrait 3:4 -->
        <img src="assets/images/action-08.jpg" alt="Farmer and team" loading="lazy"
             style="height:380px;object-fit:cover;object-position:center top;">
        <div class="masonry-overlay" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="36" style="color:#fff"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg>
        </div>
      </div>
      <div class="masonry-item fade-in" data-src="assets/images/action-11.jpg">
        <img src="assets/images/action-11.jpg" alt="Processing facility" loading="lazy"
             style="height:260px;object-fit:cover;">
        <div class="masonry-overlay" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="36" style="color:#fff"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-banner" aria-label="Call to action">
  <div class="container">
    <span class="section-label" style="color:var(--gold-light);">Join Our Story</span>
    <h2>Be Part of the Hinga Coffee Family</h2>
    <p>Whether as a buyer, partner, or supporter — every relationship we build strengthens Uganda's coffee future.</p>
    <div class="btn-group">
      <a href="contact" class="btn btn-white"><i class="fas fa-envelope"></i> Get in Touch</a>
      <a href="sustainability" class="btn btn-outline"><i class="fas fa-leaf"></i> Our Sustainability Pledge</a>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
