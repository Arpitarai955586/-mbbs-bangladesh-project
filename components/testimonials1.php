<?php
// ===================================
// File: testimonials-section.php
// ===================================

$testimonials = [
  
  [
    'name' => 'Alex Johnson',
    'city' => 'International Student',
    'quote' => 'Choosing to study abroad for MBBS was a life-changing decision. The global learning environment, modern facilities, and practical exposure exceeded my expectations.',
    'achievement' => 'MBBS Student — International Medical University'
  ],
  [
    'name' => 'Maria Fernandez',
    'city' => 'Overseas Student',
    'quote' => 'The academic structure, clinical training, and multicultural campus helped me grow both professionally and personally as a future doctor.',
    'achievement' => 'Clinical Internship — Overseas University'
  ],
  [
    'name' => 'Daniel Kim',
    'city' => 'International Applicant',
    'quote' => 'Studying MBBS abroad gave me access to experienced faculty, advanced infrastructure, and a globally aligned curriculum.',
    'achievement' => 'Top Performer — 3rd Year MBBS'
  ],
  [
    'name' => 'Sophia Müller',
    'city' => 'Global Student',
    'quote' => 'Student accommodation, academics, and campus life are well organized. The environment is safe, supportive, and student-focused.',
    'achievement' => 'Clinical Training — International Campus'
  ],
  [
    'name' => 'Ahmed Al-Farsi',
    'city' => 'Overseas Medical Student',
    'quote' => 'MBBS through study abroad offered the perfect balance of theory, hands-on practice, and international exposure. Highly recommended.',
    'achievement' => 'Final Year MBBS — Excellent Academic Record'
  ]

];

// Avatar generator API
function getAvatar($name) {
  return "https://api.dicebear.com/7.x/initials/svg?seed=" . urlencode($name);
}
?>

<!-- =============================== -->
<!-- SWIPER CSS -->
<!-- =============================== -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


<section class="iiebmTestimonials commonSection position-relative" id="testimonials">
  <div class="container">

    <div class="section-title text-center mb-5">
      <span class="sub-title">Student Voices</span>
      <h2 class="title">Why Indian Students <span class="highLighted">Love Bangladesh</span></h2>
      <p class="text-muted small mt-2">
        Real experiences from Indian students pursuing MBBS across top Bangladesh medical colleges.
      </p>
    </div>

    <div class="swiper testimonialsSwiper">
      <div class="swiper-wrapper">

        <?php foreach ($testimonials as $index => $t): ?>

          <?php 
            $bgClass = ($index % 2 == 0) ? "bg-light-primary" : "bg-light-secondary";
          ?>

          <div class="swiper-slide">
            <div class="testimonialCard shadow-sm <?= $bgClass ?> p-4 rounded-4">

              <div class="testimonialHeader d-flex align-items-center mb-3">
                <div class="testimonialImage">
                  <img 
                    src="<?= getAvatar($t['name']) ?>" 
                    alt="<?= $t['name'] ?>" 
                    class="img-fluid rounded-circle"
                    style="width:65px;height:65px;"
                  >
                </div>

                <div class="ms-3">
                  <h5 class="mb-0 fw-bold"><?= $t['name'] ?></h5>
                  <small class="text-muted"><?= $t['city'] ?></small>
                </div>
              </div>

              <p class="testimonialText mb-3">“<?= $t['quote'] ?>”</p>

              <div class="testimonialFooter pt-3 border-top">
                <span class="badge bg-primary-subtle text-primary">
                  <?= $t['achievement'] ?>
                </span>
              </div>

            </div>
          </div>

        <?php endforeach; ?>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

    <div class="text-center mt-5">
      <a type="button" data-bs-toggle="modal" data-bs-target="#popupForm" class="btn btn-warning me-3 px-4 fw-semibold text-dark">
        <i class="fa-solid fa-user-plus me-2"></i> Apply Now
      </a>
     <a type="button"
   data-bs-toggle="modal"
   data-bs-target="#popupForm"
   class="btn px-4 fw-semibold"
   style="color:#0B2c52; border-color:#0B2c52; "
   onmouseover="this.style.backgroundColor='#0B2c52'; this.style.borderColor='#0B2c52';"
   onmouseout="this.style.backgroundColor='#00894'; this.style.borderColor='#00894';">
  <i class="fa-solid fa-comments me-2"></i> Enquire Now
</a>

    </div>

  </div>
</section>

<!-- =============================== -->
<!-- CUSTOM CSS -->
<!-- =============================== -->
<style>
.bg-light-primary {
  background: rgba(0, 168, 154, 0.08);
}
.bg-light-secondary {
  background: rgba(255, 124, 2, 0.08);
}
.testimonialCard {
  transition: 0.3s ease;
}
.testimonialCard:hover {
  transform: translateY(-5px);
}
</style>

<!-- =============================== -->
<!-- SWIPER JS + INITIALIZATION -->
<!-- =============================== -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper(".testimonialsSwiper", {
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  slidesPerView: 1,
  spaceBetween: 30,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  breakpoints: {
    768: { slidesPerView: 2 },
    1024: { slidesPerView: 3 }
  }
});
</script>
