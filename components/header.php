<?php
include(__DIR__ . '/../site_identity.php');

// Dynamic WhatsApp message
$program = $_GET['program'] ?? 'MBA/PGDM';
$site = $site_identity['site_name'];
$waMsg = rawurlencode("Hello, I have enquired on {$site} and wanted counselling for my admission in {$program}. Kindly assist me further.");
$waLink = $site_identity['whatsapp'] . "?text={$waMsg}";
?>

<header class="custom-header">
  <div class="container d-flex align-items-center justify-content-between py-2">

    <!-- LOGO -->
    <div class="header-logo">
      <a href="index.php">
        <img src="<?= $site_identity['logo']; ?>" alt="<?= $site_identity['site_name']; ?>" class="logo">
      </a>
    </div>

    <!-- NAVIGATION -->
    <nav class="custom-nav d-none d-lg-block">
      <ul class="custom-menu list-unstyled d-flex align-items-center mb-0">

        <li><a href="#universities">Universities</a></li>
        <li><a href="#eligibility">Eligibility</a></li>
        <li><a href="#admission-steps">Admission</a></li>
        <li><a href="#syllabus">Syllabus</a></li>
        <li><a href="#fees">Fees</a></li>
        <li><a href="#scholarships">Scholarships</a></li>
        <li><a href="#testimonials">Testimonials</a></li>

      </ul>
    </nav>

    <!-- RIGHT BUTTONS -->
    <div class="header-buttons d-none d-lg-flex align-items-center gap-2">
      <a href="<?= $waLink; ?>" target="_blank" class="btn-mini whatsapp-btn">
        WhatsApp <i class="fab fa-whatsapp"></i>
      </a>
      <a href="tel:<?= preg_replace('/\s+/', '', $site_identity['phone']); ?>" class="btn-mini call-btn">
        Call Now <i class="fa fa-phone"></i>
      </a>
    </div>

    <!-- HAMBURGER -->
    <button class="hamburger d-lg-none" id="menuToggle" aria-label="Toggle menu">
      <span></span><span></span><span></span>
    </button>

  </div>

  <!-- MOBILE MENU -->
  <div class="mobile-menu" id="mobileMenu">
    <div class="mobile-header d-flex justify-content-between align-items-center">
      <a href="index.php"><img src="<?= $site_identity['logo']; ?>" alt="Mobile Logo" width="130"></a>
      <button class="close-btn" id="menuClose" aria-label="Close menu">&times;</button>
    </div>
    <ul class="mobile-nav list-unstyled mt-3">
      <li><a href="#universities">Universities</a></li>
      <li><a href="#eligibility">Eligibility</a></li>
      <li><a href="#admission-steps">Admission</a></li>
      <li><a href="#syllabus">Syllabus</a></li>
      <li><a href="#fees">Fees</a></li>
      <li><a href="#scholarships">Scholarships</a></li>
      <li><a href="#testimonials">Testimonials</a></li>

    </ul>

    <div class="mobile-buttons mt-3">
      <a href="<?= $waLink; ?>" target="_blank" class="btn-mini whatsapp-btn w-100 mb-2">
        WhatsApp <i class="fab fa-whatsapp"></i>
      </a>
      <a href="tel:<?= preg_replace('/\s+/', '', $site_identity['phone']); ?>" class="btn-mini call-btn w-100">
        Call Now <i class="fa fa-phone"></i>
      </a>
    </div>
  </div>

  <!-- BACKDROP -->
  <div class="menu-backdrop" id="menuBackdrop"></div>
</header>

<!-- POPUP FORM MODAL -->
<div class="modal fade" id="popupForm" tabindex="-1" aria-labelledby="popupFormLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg">

      <div class="modal-header">
        <h5 class="modal-title">
          📋 Apply for <span id="collegeName" class="text-white fw-bold"></span>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body p-4">
        <form action="submit-form.php" method="POST" id="leadFormModal">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Full Name</label>
              <input type="text" name="name" class="form-control" required placeholder="Your name">
            </div>

            <div class="col-md-6">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" required placeholder="Your email">
            </div>

            <!-- Phone + NEET Rank -->
            <div class="col-md-8">
              <label class="form-label">Phone / WhatsApp</label>
              <input type="tel" name="phone" class="form-control" required placeholder="Your number">
            </div>

            <div class="col-md-4">
              <label class="form-label">NEET Rank</label>
              <input type="text" name="neet_rank" class="form-control" placeholder="Optional">
            </div>

            <!-- City -->
            <div class="col-12">
              <label class="form-label">City</label>
              <input type="text" name="city" class="form-control" placeholder="Your City">
            </div>

            <!-- Stream -->
            <div class="col-12">
              <label class="form-label">Preferred Stream</label>
              <input list="mbbsStreams" name="stream" class="form-control" required placeholder="Select Stream">
              <datalist id="mbbsStreams">
                <option value="General Medicine">
                <option value="Dentistry">
                <option value="Pharmacy">
                <option value="Nursing">
                <option value="Public Health">
              </datalist>
            </div>

            <!-- Submit -->
            <div class="col-12">
              <button type="submit" class="btn-main w-100">
                Apply Now <i class="bi bi-send-fill ms-1"></i>
              </button>
            </div>

          </div>
        </form>
      </div>

    </div>
  </div>
</div>