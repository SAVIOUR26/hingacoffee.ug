<?php
$page_title       = 'Sustainability – Hinga Coffee Uganda';
$page_description = 'Hinga Coffee\'s commitment to sustainable farming, farmer empowerment, environmental stewardship, and responsible coffee production in Uganda.';
require 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="Sustainability page header">
  <div style="position:absolute;inset:0;background:url('assets/images/action-12.jpg') center/cover no-repeat;opacity:.22;"></div>
  <div class="container page-hero-content">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="index.php">Home</a>
      <span aria-hidden="true">›</span>
      <span aria-current="page">Sustainability</span>
    </nav>
    <span class="section-label">Our Commitment</span>
    <h1>Coffee with a Conscience</h1>
    <p>At Hinga Coffee, sustainability is not a marketing word — it is the foundation of everything we do, from soil management to the final export.</p>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     SUSTAINABILITY INTRO
════════════════════════════════════════════════════════════ -->
<section class="section" aria-label="Sustainability overview">
  <div class="container">
    <div class="about-split">
      <div class="img-wrap fade-in-left">
        <!-- Portrait 3:4 – full natural height -->
        <img src="assets/images/action-13.jpg"
             alt="Hinga Coffee farmers and sustainability activities"
             loading="lazy"
             style="height:540px;object-fit:cover;object-position:center top;">
      </div>
      <div class="about-text fade-in-right">
        <span class="section-label">Why It Matters</span>
        <h2>Sustainable Coffee for a Better Uganda</h2>
        <p>Uganda's coffee industry sustains millions of smallholder farmers and their families. At Hinga Coffee, we believe that profitability and responsibility are not in opposition — they are inseparable.</p>
        <p>Our sustainability framework rests on three pillars: environmental stewardship, economic empowerment for farmers, and community development. Each pillar reinforces the others, creating a virtuous cycle that benefits everyone in our value chain.</p>
        <p>We operate with the conviction that the choices we make today determine the quality of coffee — and quality of life — that future generations inherit.</p>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1rem;margin:2rem 0;">
          <?php
          $pillars = [
            ['🌍','Environment'],
            ['👨‍🌾','Farmers'],
            ['🏘️','Community'],
          ];
          foreach ($pillars as $p): ?>
          <div style="text-align:center;padding:1.25rem;background:var(--cream);border-radius:var(--radius);border:2px solid var(--cream-dark);">
            <div style="font-size:2rem;margin-bottom:.5rem;" aria-hidden="true"><?= $p[0] ?></div>
            <div style="font-weight:600;font-size:.9rem;color:var(--espresso);"><?= $p[1] ?></div>
          </div>
          <?php endforeach; ?>
        </div>
        <a href="contact.php" class="btn btn-primary">
          <i class="fas fa-handshake"></i> Partner Responsibly
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     ENVIRONMENTAL STEWARDSHIP
════════════════════════════════════════════════════════════ -->
<section class="section section--dark" aria-label="Environmental stewardship">
  <div class="container">
    <div class="text-center" style="margin-bottom:3rem;">
      <span class="section-label fade-in">Pillar One</span>
      <h2 class="fade-in" style="color:var(--cream);">Environmental Stewardship</h2>
      <p class="fade-in" style="margin-inline:auto;">We take our responsibility to Uganda's natural environment seriously — protecting soils, water systems, and biodiversity.</p>
    </div>
    <div class="grid-3">
      <?php
      $env = [
        ['🌱','Shade-Grown Practices','We encourage and support shade-grown coffee cultivation, which protects soil moisture, reduces erosion, and provides habitat for birds and pollinators.'],
        ['💧','Water Management','Our wet processing facilities use water-recycling systems to dramatically reduce water consumption and prevent runoff contamination of local waterways.'],
        ['♻️','Waste Reduction','Coffee pulp and wastewater are processed into organic compost and biogas — turning waste into resources that return to the farm.'],
        ['🌳','Agroforestry','We promote intercropping coffee with shade trees and food crops, improving biodiversity, soil health, and farmer food security simultaneously.'],
        ['🔋','Clean Energy','We are transitioning our processing facilities to solar and biomass energy sources, reducing our carbon footprint and energy costs.'],
        ['📊','Carbon Tracking','We actively monitor and report our carbon emissions with a long-term goal of achieving carbon-neutral operations across the full value chain.'],
      ];
      foreach ($env as $e): ?>
      <article class="sustain-card fade-in">
        <div class="sustain-icon" aria-hidden="true"><?= $e[0] ?></div>
        <h3><?= $e[1] ?></h3>
        <p><?= $e[2] ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     FARMER EMPOWERMENT
════════════════════════════════════════════════════════════ -->
<section class="section" aria-label="Farmer empowerment">
  <div class="container">
    <div class="text-center" style="margin-bottom:3rem;">
      <span class="section-label fade-in">Pillar Two</span>
      <h2 class="fade-in">Farmer Empowerment</h2>
      <p class="fade-in" style="margin-inline:auto;">Our farmers are our most important partners. Their prosperity is directly tied to ours — and we take that responsibility seriously.</p>
    </div>
    <div class="grid-2">
      <article class="value-card fade-in" style="text-align:left;">
        <div style="display:flex;align-items:center;gap:1rem;margin-bottom:1.25rem;">
          <div class="value-icon" style="margin:0;" aria-hidden="true">💰</div>
          <h3 style="font-size:1.3rem;">Fair &amp; Premium Pricing</h3>
        </div>
        <p>We pay above-market prices for quality cherries and parchment, ensuring farmers earn a meaningful income that covers production costs and provides a surplus for household needs.</p>
        <p style="margin-top:1rem;">We operate a transparent pricing model — farmers always know what they will be paid before they deliver.</p>
      </article>
      <article class="value-card fade-in" style="text-align:left;">
        <div style="display:flex;align-items:center;gap:1rem;margin-bottom:1.25rem;">
          <div class="value-icon" style="margin:0;" aria-hidden="true">🎓</div>
          <h3 style="font-size:1.3rem;">Training &amp; Technical Support</h3>
        </div>
        <p>Our agronomists conduct regular farm visits and training sessions on Good Agricultural Practices (GAP), integrated pest management, post-harvest handling, and certification readiness.</p>
        <p style="margin-top:1rem;">Farmers who improve quality unlock higher premium payments — creating a positive cycle of learning and income growth.</p>
      </article>
      <article class="value-card fade-in" style="text-align:left;">
        <div style="display:flex;align-items:center;gap:1rem;margin-bottom:1.25rem;">
          <div class="value-icon" style="margin:0;" aria-hidden="true">🌾</div>
          <h3 style="font-size:1.3rem;">Input Support</h3>
        </div>
        <p>We provide quality coffee seedlings, organic fertilisers, and processing equipment to farmers — either as outright support or via affordable credit arrangements repaid from harvest proceeds.</p>
      </article>
      <article class="value-card fade-in" style="text-align:left;">
        <div style="display:flex;align-items:center;gap:1rem;margin-bottom:1.25rem;">
          <div class="value-icon" style="margin:0;" aria-hidden="true">📈</div>
          <h3 style="font-size:1.3rem;">Market Access &amp; Linkages</h3>
        </div>
        <p>By connecting our farmers directly to international specialty buyers through Hinga's export platform, we eliminate exploitative middlemen and maximise value for producers.</p>
      </article>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     COMMUNITY DEVELOPMENT
════════════════════════════════════════════════════════════ -->
<section class="section section--cream" aria-label="Community development">
  <div class="container">
    <div class="about-split">
      <div class="about-text fade-in-left">
        <span class="section-label">Pillar Three</span>
        <h2>Community Development</h2>
        <p>The communities that grow our coffee are the communities we serve. We invest a portion of our revenues into programmes that improve livelihoods beyond the farm gate.</p>
        <ul style="display:flex;flex-direction:column;gap:1rem;margin:1.5rem 0;">
          <?php foreach([
            ['🏫','Education','Scholarship programmes and school infrastructure improvements in coffee-farming communities.'],
            ['🏥','Healthcare','Support for community health centres and mobile health outreach in remote farming areas.'],
            ['👩','Women in Coffee','Dedicated programmes to increase female participation, land ownership, and income in the coffee value chain.'],
            ['🤝','Cooperative Development','Supporting the formation and strengthening of farmer cooperatives for collective bargaining power.'],
          ] as $c): ?>
          <li style="display:flex;gap:1rem;align-items:flex-start;">
            <span style="font-size:1.5rem;" aria-hidden="true"><?= $c[0] ?></span>
            <div>
              <strong style="color:var(--espresso);display:block;margin-bottom:.25rem;"><?= $c[1] ?></strong>
              <span style="font-size:.92rem;color:var(--text-muted);"><?= $c[2] ?></span>
            </div>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="img-wrap fade-in-right">
        <!-- Portrait 3:4 -->
        <img src="assets/images/action-08.jpg"
             alt="Hinga Coffee community and farmer empowerment activities"
             loading="lazy"
             style="height:520px;object-fit:cover;object-position:center top;">
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     IMPACT NUMBERS
════════════════════════════════════════════════════════════ -->
<section class="stats-bar" aria-label="Sustainability impact numbers">
  <div class="container">
    <div style="text-align:center;margin-bottom:2rem;">
      <h3 style="font-family:var(--font-head);color:var(--espresso);font-size:1.6rem;">Our Impact So Far</h3>
    </div>
    <div class="stats-grid">
      <div class="stat-item fade-in">
        <div class="stat-number" data-target="500" data-suffix="+">0+</div>
        <div class="stat-label">Farmer Partners</div>
      </div>
      <div class="stat-item fade-in">
        <div class="stat-number" data-target="60" data-suffix="%">0%</div>
        <div class="stat-label">Women Farmers</div>
      </div>
      <div class="stat-item fade-in">
        <div class="stat-number" data-target="100" data-suffix="%">0%</div>
        <div class="stat-label">Traceable Lots</div>
      </div>
      <div class="stat-item fade-in">
        <div class="stat-number" data-target="0" data-suffix=" Chemical Waste">0</div>
        <div class="stat-label">Untreated Effluent Released</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-banner" aria-label="Sustainability call to action">
  <div class="container">
    <span class="section-label" style="color:var(--gold-light);">Join the Movement</span>
    <h2>Choose Coffee That Cares</h2>
    <p>When you buy Hinga Coffee, you are investing in Ugandan farmers, communities, and the environment. Let's build a better coffee future together.</p>
    <div class="btn-group">
      <a href="contact.php" class="btn btn-white"><i class="fas fa-envelope"></i> Partner With Us</a>
      <a href="about.php" class="btn btn-outline"><i class="fas fa-users"></i> Meet Our Team</a>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
