<?php
/* Determine current page for active nav */
$current_page = basename($_SERVER['PHP_SELF']);

/* Site-wide settings */
$site_name  = 'Hinga Coffee';
$site_tagline = 'Uganda\'s Premium Coffee';
$site_email = 'info@hingacoffee.ug';
$site_phone = '+256 740 863044';
$site_addr  = 'Namanve Industrial Park, Mukono, Uganda';

/* Allow pages to set their own title/description */
if (!isset($page_title))       $page_title       = "$site_name – $site_tagline";
if (!isset($page_description)) $page_description = 'Hinga Coffee is a proudly Ugandan-owned company producing, processing, and exporting premium quality coffee from the heart of Uganda.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
  <meta name="theme-color" content="#3D1A00">
  <title><?= htmlspecialchars($page_title) ?></title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Favicon (using logo) -->
  <link rel="icon" type="image/jpeg" href="assets/images/logo.jpg">
</head>
<body>

<!-- Page Loader -->
<div class="page-loader">
  <div class="loader-ring"></div>
</div>

<!-- Navigation -->
<nav id="navbar" role="navigation" aria-label="Main navigation">
  <div class="nav-inner">
    <a href="index.php" class="nav-logo" aria-label="Hinga Coffee Home">
      <img src="assets/images/logo.jpg" alt="Hinga Coffee Logo">
      <div class="nav-logo-text">
        <span>Hinga Coffee</span>
        <span>Uganda's Premium Coffee</span>
      </div>
    </a>

    <ul class="nav-links" role="list">
      <li><a href="index.php"          <?= $current_page === 'index.php'          ? 'class="active"' : '' ?>>Home</a></li>
      <li><a href="about.php"          <?= $current_page === 'about.php'          ? 'class="active"' : '' ?>>About</a></li>
      <li><a href="products.php"       <?= $current_page === 'products.php'       ? 'class="active"' : '' ?>>Products</a></li>
      <li><a href="sustainability.php" <?= $current_page === 'sustainability.php' ? 'class="active"' : '' ?>>Sustainability</a></li>
      <li><a href="gallery.php"        <?= $current_page === 'gallery.php'        ? 'class="active"' : '' ?>>Gallery</a></li>
      <li><a href="contact.php"        <?= $current_page === 'contact.php'        ? 'class="active"' : '' ?>>Contact</a></li>
    </ul>

    <div class="nav-cta">
      <a href="contact.php" class="btn btn-primary" style="padding:.6rem 1.35rem;font-size:.86rem;">
        <i class="fas fa-envelope" aria-hidden="true"></i> Get in Touch
      </a>
    </div>

    <button class="hamburger" aria-label="Open mobile menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<!-- Mobile Menu -->
<div class="mobile-menu" role="dialog" aria-modal="true" aria-label="Mobile navigation">
  <button class="mobile-close" aria-label="Close mobile menu">
    <i class="fas fa-times"></i>
  </button>
  <a href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="products.php">Products</a>
  <a href="sustainability.php">Sustainability</a>
  <a href="gallery.php">Gallery</a>
  <a href="contact.php">Contact</a>
  <a href="contact.php" class="btn btn-primary" style="margin-top:1rem;">Get in Touch</a>
</div>
