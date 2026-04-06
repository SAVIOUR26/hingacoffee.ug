<!-- Lightbox (global) -->
<div id="lightbox" class="lightbox" role="dialog" aria-modal="true" aria-label="Image viewer">
  <button id="lb-close" class="lb-close" aria-label="Close image viewer"><i class="fas fa-times"></i></button>
  <button id="lb-prev"  class="lb-prev"  aria-label="Previous image"><i class="fas fa-chevron-left"></i></button>
  <img id="lb-img" src="" alt="Gallery image">
  <button id="lb-next"  class="lb-next"  aria-label="Next image"><i class="fas fa-chevron-right"></i></button>
</div>

<!-- Footer -->
<footer class="footer" role="contentinfo">
  <div class="container">
    <div class="footer-grid">

      <!-- Brand -->
      <div class="footer-brand">
        <img src="assets/images/logo.jpg" alt="Hinga Coffee Logo">
        <p>Proudly Ugandan. Crafting premium coffee from farm to cup, sustaining farmers and delighting markets worldwide.</p>
        <div class="social-links" aria-label="Social media links">
          <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-link" aria-label="X / Twitter"><i class="fab fa-x-twitter"></i></a>
          <a href="#" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="social-link" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="footer-col">
        <h5>Quick Links</h5>
        <nav class="footer-links" aria-label="Footer navigation">
          <a href="/">Home</a>
          <a href="about">About Us</a>
          <a href="products">Our Products</a>
          <a href="gallery">Gallery</a>
          <a href="sustainability">Sustainability</a>
          <a href="contact">Contact</a>
        </nav>
      </div>

      <!-- Products -->
      <div class="footer-col">
        <h5>Our Products</h5>
        <nav class="footer-links" aria-label="Products navigation">
          <a href="products#green-beans">Green Coffee Beans</a>
          <a href="products#roasted">Roasted Coffee Beans</a>
          <a href="products#ground">Ground Coffee</a>
          <a href="products#blends">Custom Blends</a>
          <a href="products#export">Export Services</a>
        </nav>
      </div>

      <!-- Contact -->
      <div class="footer-col">
        <h5>Contact Us</h5>
        <address style="font-style:normal;">
          <div class="footer-contact-item">
            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
            <span>Namanve Industrial Park,<br>Mukono, Uganda</span>
          </div>
          <div class="footer-contact-item">
            <i class="fas fa-phone" aria-hidden="true"></i>
            <a href="tel:+256740863044" style="color:inherit;">+256 740 863044</a>
          </div>
          <div class="footer-contact-item">
            <i class="fas fa-envelope" aria-hidden="true"></i>
            <a href="mailto:info@hingacoffee.ug" style="color:inherit;">info@hingacoffee.ug</a>
          </div>
          <div class="footer-contact-item">
            <i class="fas fa-clock" aria-hidden="true"></i>
            <span>Mon–Fri: 8 AM – 6 PM EAT</span>
          </div>
        </address>
      </div>

    </div><!-- /footer-grid -->

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> Hinga Coffee. All rights reserved.</p>
      <p>Designed with <i class="fas fa-heart" style="color:#C8952A;" aria-hidden="true"></i> for Uganda's finest coffee</p>
    </div>
  </div>
</footer>

<!-- Back to Top -->
<button id="back-top" aria-label="Back to top">
  <i class="fas fa-chevron-up"></i>
</button>

<!-- Main Script -->
<script src="assets/js/main.js"></script>
</body>
</html>
