<?php include 'site_identity.php'; ?>

<footer class="footer py-100 text-light position-relative">
  <div class="container">
    <div class="row gy-5">

      <!-- About -->
      <div class="col-lg-4 col-md-6">
        <div class="footer-widget">
          <div class="footer-logo mb-3">
            <a href="index.php">
              <img src="<?= $site_identity['logo']; ?>" 
                   alt="<?= $site_identity['site_name']; ?>" 
                   class="bg-white p-2 rounded" width="160">
            </a>
          </div>

          <p class="small text-light opacity-75 mb-4">
            <?= $site_identity['site_name']; ?> helps Indian students secure safe, affordable, 
            and reliable MBBS admissions in top NMC-approved medical colleges across Bangladesh.
            From documentation to visa and college selection — we guide you end-to-end.
          </p>

          <a type="button" data-bs-toggle="modal" data-bs-target="#popupForm" 
            class="btn btn-primary rounded-pill px-4 py-2">
            <i class="fa-solid fa-user-graduate me-2"></i>
            Free MBBS Admission Counselling
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-lg-3 col-md-6">
        <div class="footer-widget">
          <h5 class="text-uppercase text-warning mb-3">Quick Links</h5>
          <ul class="list-unstyled small">
            <li class="mb-2"><a href="#eligibility" class="text-light text-decoration-none">Eligibility</a></li>
            <li class="mb-2"><a href="#colleges" class="text-light text-decoration-none">Top Colleges</a></li>
            <li class="mb-2"><a href="#fees" class="text-light text-decoration-none">Fee Structure</a></li>
            <li class="mb-2"><a href="#hostel" class="text-light text-decoration-none">Hostel & Food</a></li>
            <li><a href="#contact" class="text-light text-decoration-none">Contact Us</a></li>
          </ul>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="col-lg-5 col-md-6">
        <div class="footer-widget">
          <h5 class="text-uppercase text-warning mb-3">Contact Us</h5>

          <ul class="list-unstyled small mb-3">
            <li class="mb-2">
              <i class="fa-solid fa-location-dot me-2 text-warning"></i>
              <?= $site_identity['address']; ?>
            </li>

            <li class="mb-2">
              <i class="fa-solid fa-phone me-2 text-warning"></i>
              <a href="tel:<?= preg_replace('/\D/', '', $site_identity['phone']); ?>" class="text-light">
                <?= $site_identity['phone']; ?>
              </a>
            </li>

            <li class="mb-2">
              <i class="fa-solid fa-envelope me-2 text-warning"></i>
              <a href="mailto:<?= $site_identity['email']; ?>" class="text-light">
                <?= $site_identity['email']; ?>
              </a>
            </li>
          </ul>

          <ul class="social-links list-inline mt-3 mb-0">
            <li class="list-inline-item me-2">
              <a href="<?= $site_identity['whatsapp']; ?>" target="_blank" class="text-success">
                <i class="fab fa-whatsapp fa-lg"></i>
              </a>
            </li>
            <li class="list-inline-item me-2"><a href="#" class="text-light"><i class="fab fa-facebook-f fa-lg"></i></a></li>
            <li class="list-inline-item me-2"><a href="#" class="text-light"><i class="fab fa-linkedin-in fa-lg"></i></a></li>
            <li class="list-inline-item"><a href="#" class="text-light"><i class="fab fa-instagram fa-lg"></i></a></li>
          </ul>

        </div>
      </div>
    </div>

    <hr class="mt-5 mb-3 text-light opacity-25">
    <div class="text-center small opacity-75">
      <p class="mb-0">© <?= date('Y'); ?> <?= $site_identity['site_name']; ?>. All Rights Reserved.</p>
    </div>
  </div>
</footer>


<!-- Floating WhatsApp Button -->
<a 
  href="https://wa.me/<?= preg_replace('/\D/', '', $site_identity['phone']); ?>?text=Hello%2C%20I%20want%20guidance%20for%20MBBS%20in%20Bangladesh." 
  target="_blank" 
  class="whatsappBtn"
  aria-label="Chat on WhatsApp"
>
  <i class="bi bi-whatsapp"></i>
</a>
