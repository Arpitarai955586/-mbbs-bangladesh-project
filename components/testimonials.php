<?php
// ===================================
// File: testimonials-section.php
// ===================================

$testimonials = [
  [
    'name' => 'Aarav Sharma',
    'city' => 'Delhi, India',
    'quote' => 'Choosing MBBS in Bangladesh was the best decision. Quality education, Indian-friendly culture and affordable fees made my journey smooth.',
    'achievement' => 'MBBS Student — Dhaka'
  ],
  [
    'name' => 'Priya Nair',
    'city' => 'Kochi, Kerala',
    'quote' => 'The teaching style, clinical exposure and discipline here helped me gain confidence as a future doctor.',
    'achievement' => 'Placed in Govt. Internship — Bangladesh'
  ],
  [
    'name' => 'Rahul Verma',
    'city' => 'Jaipur, Rajasthan',
    'quote' => 'Bangladesh medical colleges maintain high standards similar to India. The faculty is extremely supportive.',
    'achievement' => 'Top Performer — 3rd Year MBBS'
  ],
  [
    'name' => 'Sneha Kulkarni',
    'city' => 'Pune, Maharashtra',
    'quote' => 'Hostel, food, academics — everything is well managed. Very safe for Indian students, especially girls.',
    'achievement' => 'Clinical Rotation — Dhaka Medical Area'
  ],
  [
    'name' => 'Imran Siddiqui',
    'city' => 'Lucknow, Uttar Pradesh',
    'quote' => 'MBBS in Bangladesh gave me the right mix of theory and hands-on practice. Truly worth it!',
    'achievement' => 'Final Year — Excellent Academic Score'
  ]
];

// Avatar generator API
function getAvatar($name) {
  return "https://api.dicebear.com/7.x/initials/svg?seed=" . urlencode($name);
}
?>

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
            // alternate card colors: odd → light-primary, even → light-secondary
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
      <a type="button" data-bs-toggle="modal" data-bs-target="#popupForm" class="btn btn-outline-primary px-4 fw-semibold">
        <i class="fa-solid fa-comments me-2"></i> Enquire Now
      </a>
    </div>

  </div>
</section>
<style>
  .bg-light-primary {
  background: rgba(0, 168, 154, 0.08);
}

.bg-light-secondary {
  background: rgba(255, 124, 2, 0.08);
}

.testimonialCard {
  transition: var(--smooth);
}

.testimonialCard:hover {
  transform: translateY(-5px);
}

</style>