<?php
$page_title       = 'Our Products – Hinga Coffee Uganda';
$page_description = 'Explore Hinga Coffee\'s premium product range: green coffee beans, roasted beans, ground coffee, and custom blends — all sourced and processed in Uganda.';
require 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background-image:none;" aria-label="Products page header">
  <div style="position:absolute;inset:0;background:url('assets/images/action-06.jpg') center/cover no-repeat;opacity:.2;"></div>
  <div class="container page-hero-content">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span aria-hidden="true">›</span>
      <span aria-current="page">Products</span>
    </nav>
    <span class="section-label">What We Produce</span>
    <h1>Our Premium Coffee Range</h1>
    <p>From raw green beans to precision-ground blends — every product carries Uganda's finest terroir and Hinga's commitment to excellence.</p>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     PRODUCT: GREEN BEANS
════════════════════════════════════════════════════════════ -->
<section class="section" id="green-beans" aria-label="Green coffee beans product">
  <div class="container">
    <div class="about-split">
      <div class="img-wrap fade-in-left">
        <img src="assets/images/action-01.jpg"
             alt="Green coffee beans at Hinga Coffee – farm fresh"
             loading="lazy"
             style="height:460px;object-fit:cover;">
      </div>
      <div class="about-text fade-in-right">
        <span class="product-tag">Export Grade</span>
        <h2>Green Coffee Beans</h2>
        <p>Our green (unroasted) coffee beans are sourced from carefully selected smallholder and estate farms across Uganda's prime coffee-growing regions — including the fertile slopes of Mount Elgon and the Rwenzori foothills.</p>
        <p>Each lot is meticulously sorted, graded, and quality-tested to ensure consistency and compliance with international specialty coffee standards. Our green beans are the choice of discerning roasters worldwide.</p>
        <ul style="display:flex;flex-direction:column;gap:.65rem;margin:1.5rem 0 2rem;">
          <?php foreach([
            'Arabica &amp; Robusta varieties available',
            'Screen size 15–18 (AA, AB, PB grades)',
            'Moisture content: 10–12% guaranteed',
            'Full traceability documentation included',
            'Export-ready with phytosanitary certification',
          ] as $f): ?>
          <li class="feature-chip">
            <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="#4A7A3C" stroke-width="2.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <?= $f ?>
          </li>
          <?php endforeach; ?>
        </ul>
        <a href="contact" class="btn btn-primary"><i class="fas fa-envelope"></i> Request a Sample</a>
      </div>
    </div>
  </div>
</section>

<!-- Divider -->
<div style="height:1px;background:var(--cream-dark);"></div>

<!-- ═══════════════════════════════════════════════════════════
     PRODUCT: ROASTED BEANS
════════════════════════════════════════════════════════════ -->
<section class="section section--cream" id="roasted" aria-label="Roasted coffee beans product">
  <div class="container">
    <div class="about-split" style="direction:rtl;">
      <div class="img-wrap fade-in-right" style="direction:ltr;">
        <img src="assets/images/action-05.jpg"
             alt="Roasted Hinga Coffee beans – rich and aromatic"
             loading="lazy"
             style="height:460px;object-fit:cover;">
      </div>
      <div class="about-text fade-in-left" style="direction:ltr;">
        <span class="product-tag">Premium Roast</span>
        <h2>Roasted Coffee Beans</h2>
        <p>Our roasting process is an art refined over time — designed to draw out the complex, layered flavours that Uganda's unique terroir produces. We offer light, medium, and dark roast profiles to suit every market preference.</p>
        <p>Roasted in small batches for maximum freshness and flavour integrity, our roasted beans are sealed in airtight, nitrogen-flushed packaging to preserve peak quality from roastery to cup.</p>
        <ul style="display:flex;flex-direction:column;gap:.65rem;margin:1.5rem 0 2rem;">
          <?php foreach([
            'Three roast profiles: Light, Medium, Dark',
            'Small-batch roasting for freshness',
            'Nitrogen-flushed packaging',
            'Suitable for espresso, filter, and pour-over',
            'Private label packaging available',
          ] as $f): ?>
          <li class="feature-chip">
            <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="#4A7A3C" stroke-width="2.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <?= $f ?>
          </li>
          <?php endforeach; ?>
        </ul>
        <a href="contact" class="btn btn-primary"><i class="fas fa-envelope"></i> Request a Sample</a>
      </div>
    </div>
  </div>
</section>

<!-- Divider -->
<div style="height:1px;background:var(--cream-dark);"></div>

<!-- ═══════════════════════════════════════════════════════════
     PRODUCT: GROUND COFFEE
════════════════════════════════════════════════════════════ -->
<section class="section" id="ground" aria-label="Ground coffee product">
  <div class="container">
    <div class="about-split">
      <div class="img-wrap fade-in-left">
        <!-- Portrait 3:4 – show top portion with natural ratio -->
        <img src="assets/images/action-04.jpg"
             alt="Ground Hinga Coffee – ready to brew"
             loading="lazy"
             style="height:520px;object-fit:cover;object-position:center top;">
      </div>
      <div class="about-text fade-in-right">
        <span class="product-tag">Ready to Brew</span>
        <h2>Ground Coffee</h2>
        <p>For buyers who want convenience without compromise, our ground coffee is precision-milled to the exact grind size for specific brewing methods — from espresso and moka pot to French press and drip filter.</p>
        <p>We package our ground coffee immediately post-grinding to lock in freshness and aroma, using degassing valve bags that let CO₂ escape without letting oxygen in.</p>
        <ul style="display:flex;flex-direction:column;gap:.65rem;margin:1.5rem 0 2rem;">
          <?php foreach([
            'Multiple grind sizes: Fine, Medium, Coarse',
            'Custom grind available on request',
            'Valve-sealed bags for maximum freshness',
            'Retail &amp; foodservice pack sizes',
            'OEM &amp; private label capability',
          ] as $f): ?>
          <li class="feature-chip">
            <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="#4A7A3C" stroke-width="2.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <?= $f ?>
          </li>
          <?php endforeach; ?>
        </ul>
        <a href="contact" class="btn btn-primary"><i class="fas fa-envelope"></i> Request a Sample</a>
      </div>
    </div>
  </div>
</section>

<!-- Divider -->
<div style="height:1px;background:var(--cream-dark);"></div>

<!-- ═══════════════════════════════════════════════════════════
     PRODUCT: CUSTOM BLENDS
════════════════════════════════════════════════════════════ -->
<section class="section section--cream" id="blends" aria-label="Custom coffee blends product">
  <div class="container">
    <div class="about-split" style="direction:rtl;">
      <div class="img-wrap fade-in-right" style="direction:ltr;">
        <img src="assets/images/action-11.jpg"
             alt="Custom coffee blending at Hinga Coffee"
             loading="lazy"
             style="height:460px;object-fit:cover;">
      </div>
      <div class="about-text fade-in-left" style="direction:ltr;">
        <span class="product-tag">Bespoke Blending</span>
        <h2>Custom Coffee Blends</h2>
        <p>We offer a bespoke blending service for private label brands, hospitality groups, specialty importers, and supermarket chains. Working closely with your product team, our coffee experts craft unique blends that match your exact flavour profile requirements.</p>
        <p>From concept to finished, packaged product — we manage the entire production and export process under your brand identity.</p>
        <ul style="display:flex;flex-direction:column;gap:.65rem;margin:1.5rem 0 2rem;">
          <?php foreach([
            'Arabica, Robusta, or blended lots',
            'Flavour profiling consultation included',
            'Private label design &amp; packaging',
            'Minimum order quantities negotiable',
            'Full documentation &amp; compliance support',
          ] as $f): ?>
          <li class="feature-chip">
            <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="#4A7A3C" stroke-width="2.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <?= $f ?>
          </li>
          <?php endforeach; ?>
        </ul>
        <a href="contact" class="btn btn-primary"><i class="fas fa-envelope"></i> Discuss Your Blend</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     EXPORT SERVICES
════════════════════════════════════════════════════════════ -->
<section class="section section--dark" id="export" aria-label="Export services">
  <div class="container">
    <div class="text-center" style="margin-bottom:3rem;">
      <span class="section-label fade-in">Beyond Products</span>
      <h2 class="fade-in" style="color:var(--cream);">Full-Service Coffee Export</h2>
      <p class="fade-in" style="margin-inline:auto;">We don't just sell coffee — we manage the complete export process, making international trade seamless for our buyers.</p>
    </div>
    <div class="grid-3">
      <?php
      $services = [
        ['icon'=>'📋','title'=>'Documentation &amp; Compliance','text'=>'We handle all phytosanitary certificates, export licences, customs documentation, and international compliance requirements.'],
        ['icon'=>'🚢','title'=>'Logistics &amp; Freight','text'=>'Coordinated freight forwarding, container loading, and last-mile delivery partnerships to ports across East Africa.'],
        ['icon'=>'📦','title'=>'Custom Packaging','text'=>'Jute bags, GrainPro liners, foil valve bags — all packaging options tailored to your market and sustainability requirements.'],
        ['icon'=>'🔬','title'=>'Quality Assurance','text'=>'Pre-shipment cupping, moisture analysis, and third-party lab certification available upon request for every lot.'],
        ['icon'=>'🌐','title'=>'Sample Programme','text'=>'Request samples of any lot before committing to a full shipment — we believe in building trust through transparency.'],
        ['icon'=>'🤝','title'=>'Long-Term Partnership','text'=>'Preferred pricing, allocation priority, and dedicated account management for committed long-term buyers.'],
      ];
      foreach ($services as $s): ?>
      <article class="sustain-card fade-in">
        <div class="sustain-icon" aria-hidden="true"><?= $s['icon'] ?></div>
        <h3><?= $s['title'] ?></h3>
        <p><?= $s['text'] ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-banner" aria-label="Call to action">
  <div class="container">
    <span class="section-label" style="color:var(--gold-light);">Ready to Order?</span>
    <h2>Find the Perfect Coffee for Your Market</h2>
    <p>Contact us to discuss your requirements, request samples, or learn more about our export process.</p>
    <div class="btn-group">
      <a href="contact" class="btn btn-white"><i class="fas fa-envelope"></i> Get a Quote</a>
      <a href="gallery" class="btn btn-outline"><i class="fas fa-images"></i> See Our Gallery</a>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
