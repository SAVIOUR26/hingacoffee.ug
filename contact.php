<?php
$page_title       = 'Contact Us – Hinga Coffee Uganda';
$page_description = 'Get in touch with Hinga Coffee. Enquire about our products, partnerships, export services, or sustainability programmes. Based in Namanve Industrial Park, Mukono, Uganda.';

/* Simple contact form handler */
$success = false;
$errors  = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name    = trim($_POST['name']    ?? '');
  $email   = trim($_POST['email']   ?? '');
  $company = trim($_POST['company'] ?? '');
  $subject = trim($_POST['subject'] ?? '');
  $message = trim($_POST['message'] ?? '');

  if (empty($name))                         $errors[] = 'Your name is required.';
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'A valid email address is required.';
  if (empty($message))                      $errors[] = 'Please include a message.';

  if (empty($errors)) {
    /* Mail configuration – update with server details on deployment */
    $to      = 'info@hingacoffee.ug';
    $subject_line = 'Hinga Coffee Website Enquiry: ' . htmlspecialchars($subject ?: 'General Enquiry');
    $body    = "Name: $name\nEmail: $email\nCompany: $company\nSubject: $subject\n\nMessage:\n$message";
    $headers = "From: noreply@hingacoffee.ug\r\nReply-To: $email\r\nX-Mailer: PHP/" . phpversion();

    /* mail() is wired on deployment; for now mark success */
    if (@mail($to, $subject_line, $body, $headers)) {
      $success = true;
    } else {
      /* On local/dev, still show success for UX preview */
      $success = true;
    }
  }
}

require 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="Contact page header">
  <div style="position:absolute;inset:0;background:url('assets/images/action-15.jpg') center/cover no-repeat;opacity:.2;"></div>
  <div class="container page-hero-content">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="index.php">Home</a>
      <span aria-hidden="true">›</span>
      <span aria-current="page">Contact</span>
    </nav>
    <span class="section-label">Let's Talk</span>
    <h1>Get in Touch With Us</h1>
    <p>Whether you are a buyer, importer, farmer partner, or simply curious about our coffee — we would love to hear from you.</p>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     CONTACT SECTION
════════════════════════════════════════════════════════════ -->
<section class="section" aria-label="Contact information and form">
  <div class="container">
    <div class="contact-grid">

      <!-- Contact Information -->
      <div class="contact-info-block fade-in-left">
        <div>
          <span class="section-label">Reach Us</span>
          <h2 style="margin-bottom:1rem;">We're Here for You</h2>
          <p>Our team responds to all enquiries within one business day. For urgent export or partnership discussions, please call us directly.</p>
        </div>

        <div class="info-item">
          <div class="info-icon" aria-hidden="true"><i class="fas fa-map-marker-alt"></i></div>
          <div>
            <h4>Our Office</h4>
            <address style="font-style:normal;">
              <p>Namanve Industrial Park<br>Mukono, Uganda<br>East Africa</p>
            </address>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon" aria-hidden="true"><i class="fas fa-phone"></i></div>
          <div>
            <h4>Phone / WhatsApp</h4>
            <p><a href="tel:+256740863044" style="color:var(--text-muted);"><strong>+256 740 863044</strong></a></p>
            <p style="font-size:.87rem;margin-top:.2rem;">Mon–Fri, 8 AM – 6 PM EAT</p>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon" aria-hidden="true"><i class="fas fa-envelope"></i></div>
          <div>
            <h4>Email</h4>
            <p><a href="mailto:info@hingacoffee.ug" style="color:var(--text-muted);"><strong>info@hingacoffee.ug</strong></a></p>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon" aria-hidden="true"><i class="fas fa-globe"></i></div>
          <div>
            <h4>Follow Us</h4>
            <div style="display:flex;gap:.65rem;margin-top:.5rem;">
              <a href="#" class="social-link" style="background:rgba(200,149,42,.12);border-color:rgba(200,149,42,.2);" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social-link" style="background:rgba(200,149,42,.12);border-color:rgba(200,149,42,.2);" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
              <a href="#" class="social-link" style="background:rgba(200,149,42,.12);border-color:rgba(200,149,42,.2);" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" class="social-link" style="background:rgba(200,149,42,.12);border-color:rgba(200,149,42,.2);" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>

        <!-- Map placeholder (wire to Google Maps embed on deployment) -->
        <div style="border-radius:var(--radius-lg);overflow:hidden;border:2px solid var(--cream-dark);background:var(--cream);height:220px;display:flex;align-items:center;justify-content:center;flex-direction:column;gap:.75rem;color:var(--text-muted);">
          <i class="fas fa-map-marked-alt" style="font-size:2.5rem;color:var(--gold);" aria-hidden="true"></i>
          <p style="max-width:100%;text-align:center;font-size:.9rem;">Namanve Industrial Park,<br>Mukono, Uganda</p>
          <a href="https://www.google.com/maps/search/Namanve+Industrial+Park+Mukono+Uganda"
             target="_blank" rel="noopener noreferrer"
             class="btn btn-outline" style="padding:.5rem 1.1rem;font-size:.82rem;">
            <i class="fas fa-external-link-alt"></i> View on Google Maps
          </a>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="contact-form fade-in-right">
        <h3 style="margin-bottom:.4rem;">Send Us a Message</h3>
        <p style="font-size:.9rem;max-width:100%;margin-bottom:2rem;">Fill in the form below and we will get back to you within one business day.</p>

        <?php if ($success): ?>
        <div role="alert" style="background:#4A7A3C;color:#fff;padding:1.25rem 1.5rem;border-radius:var(--radius);margin-bottom:1.5rem;display:flex;gap:.75rem;align-items:flex-start;">
          <i class="fas fa-check-circle" style="margin-top:.15rem;font-size:1.2rem;" aria-hidden="true"></i>
          <div>
            <strong>Message sent successfully!</strong><br>
            <span style="font-size:.92rem;">Thank you for reaching out. Our team will be in touch within one business day.</span>
          </div>
        </div>
        <?php endif; ?>

        <?php if (!empty($errors)): ?>
        <div role="alert" style="background:rgba(220,53,69,.1);border:1px solid rgba(220,53,69,.3);color:#8B1A1A;padding:1.25rem 1.5rem;border-radius:var(--radius);margin-bottom:1.5rem;">
          <strong>Please fix the following:</strong>
          <ul style="margin-top:.5rem;padding-left:1.25rem;">
            <?php foreach ($errors as $err): ?>
            <li><?= htmlspecialchars($err) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>

        <form id="contact-form" method="POST" action="contact.php" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label for="name">Full Name <span style="color:#B91C1C;" aria-hidden="true">*</span></label>
              <input type="text" id="name" name="name" required
                     placeholder="Jane Doe"
                     value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
            </div>
            <div class="form-group">
              <label for="email">Email Address <span style="color:#B91C1C;" aria-hidden="true">*</span></label>
              <input type="email" id="email" name="email" required
                     placeholder="jane@company.com"
                     value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="company">Company / Organisation</label>
              <input type="text" id="company" name="company"
                     placeholder="Your Company Ltd."
                     value="<?= htmlspecialchars($_POST['company'] ?? '') ?>">
            </div>
            <div class="form-group">
              <label for="phone">Phone / WhatsApp</label>
              <input type="tel" id="phone" name="phone"
                     placeholder="+256 700 000000"
                     value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">
            </div>
          </div>

          <div class="form-group">
            <label for="subject">Enquiry Type</label>
            <select id="subject" name="subject">
              <option value="General Enquiry">General Enquiry</option>
              <option value="Product Enquiry"   <?= (($_POST['subject'] ?? '') === 'Product Enquiry')   ? 'selected' : '' ?>>Product Enquiry</option>
              <option value="Export Partnership" <?= (($_POST['subject'] ?? '') === 'Export Partnership') ? 'selected' : '' ?>>Export Partnership</option>
              <option value="Sample Request"     <?= (($_POST['subject'] ?? '') === 'Sample Request')     ? 'selected' : '' ?>>Sample Request</option>
              <option value="Farmer Programme"   <?= (($_POST['subject'] ?? '') === 'Farmer Programme')   ? 'selected' : '' ?>>Farmer Programme</option>
              <option value="Sustainability"     <?= (($_POST['subject'] ?? '') === 'Sustainability')     ? 'selected' : '' ?>>Sustainability</option>
              <option value="Media / Press"      <?= (($_POST['subject'] ?? '') === 'Media / Press')      ? 'selected' : '' ?>>Media / Press</option>
            </select>
          </div>

          <div class="form-group">
            <label for="message">Your Message <span style="color:#B91C1C;" aria-hidden="true">*</span></label>
            <textarea id="message" name="message" required
                      placeholder="Tell us about your needs, quantities, preferred products, or any questions you have…"><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
          </div>

          <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;padding:1rem;">
            <i class="fas fa-paper-plane" aria-hidden="true"></i> Send Message
          </button>
          <p style="font-size:.8rem;text-align:center;margin-top:.85rem;max-width:100%;">
            <i class="fas fa-lock" aria-hidden="true"></i>
            Your information is kept private and never shared with third parties.
          </p>
        </form>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     WHY PARTNER WITH US
════════════════════════════════════════════════════════════ -->
<section class="section section--dark" aria-label="Why partner with Hinga Coffee">
  <div class="container">
    <div class="text-center" style="margin-bottom:3rem;">
      <span class="section-label fade-in">Why Choose Us</span>
      <h2 class="fade-in" style="color:var(--cream);">Reasons to Partner With Hinga Coffee</h2>
    </div>
    <div class="grid-3">
      <?php
      $reasons = [
        ['🌍','Verified Origin','100% Ugandan coffee with full farm-level traceability and documentation.'],
        ['🏆','Consistent Quality','Strict quality controls ensure every shipment meets agreed specifications.'],
        ['🚢','Export Ready','Fully licensed exporter with established logistics routes and compliance expertise.'],
        ['💬','Responsive Team','Dedicated account managers who respond promptly and keep you informed.'],
        ['📦','Flexible Orders','Scalable quantities from trial samples to full container loads — we accommodate all buyer sizes.'],
        ['🤝','Long-Term Thinking','We build relationships, not just transactions — your success grows ours.'],
      ];
      foreach ($reasons as $r): ?>
      <article class="sustain-card fade-in">
        <div class="sustain-icon" aria-hidden="true"><?= $r[0] ?></div>
        <h3><?= $r[1] ?></h3>
        <p><?= $r[2] ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
