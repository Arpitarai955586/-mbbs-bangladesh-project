<section class="bdStatsSection py-4">
  <div class="container">

    <div class="section-title text-center mb-5">
      <span class="sub-title">Bangladesh MBBS Facts</span>
      <h2 class="title">
        Why <span class="highLighted">Bangladesh</span> is Trusted for MBBS
      </h2>
      <p class="text-muted small mt-2 px-md-5">
        Verified statistics that make Bangladesh the most preferred and successful destination
        for Indian MBBS aspirants.
      </p>
    </div>

    <!-- Swiper Wrapper (visible on mobile) -->
    <div class="swiper bdStatsSwiper d-md-none">
      <div class="swiper-wrapper">

        <?php
        $bdStats = [
          ["icon" => "ri-user-heart-line", "count" => "12,000+", "label" => "Indian Students", "desc" => "Every year a large number of Indian students choose Bangladesh for MBBS."],
          ["icon" => "ri-award-line", "count" => "95%", "label" => "NMC Screening Success", "desc" => "Bangladesh produces one of the highest FMGE/NExT pass rates among abroad destinations."],
          ["icon" => "ri-book-mark-line", "count" => "5 + 1", "label" => "Years of Study", "desc" => "5 years of MBBS + 1 year internship (structured like Indian MBBS)."],
          ["icon" => "ri-hospital-line", "count" => "70+", "label" => "Approved Colleges", "desc" => "NMC-recognized medical universities with top-quality hospitals."],
          ["icon" => "ri-money-rupee-circle-line", "count" => "₹30–55 L", "label" => "Total Fee", "desc" => "Affordable MBBS fees compared to private colleges in India."],
          ["icon" => "ri-english-input", "count" => "100%", "label" => "English Medium", "desc" => "Complete MBBS course taught in English for Indian students."],
          ["icon" => "ri-shield-check-line", "count" => "Top Ranked", "label" => "South Asia Quality", "desc" => "Bangladesh follows a similar MBBS pattern as Indian colleges."],
          ["icon" => "ri-group-line", "count" => "Indian Food", "label" => "Hostel Facilities", "desc" => "Safe hostels with Indian mess & modern living support."],
        ];

        foreach ($bdStats as $s): ?>
          <div class="swiper-slide">
            <div class="bdStatCard text-center p-4">
              <div class="bdStatIcon">
                <i class="<?= $s['icon'] ?>"></i>
              </div>
              <h3 class="bdStatNumber"><?= $s["count"] ?></h3>
              <span class="bdStatLabel"><?= $s["label"] ?></span>
              <p class="bdStatDesc"><?= $s["desc"] ?></p>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
      <div class="d-flex justify-content-center mt-3">
        <a type="button" data-bs-toggle="modal" data-bs-target="#popupForm" class="btn-main px-4 py-2 me-2">Apply for Admission <i class="bi bi-arrow-right"></i></a>
      </div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Grid  (visible on desktop) -->
    <div class="row g-4 d-none d-md-flex justify-content-center">

      <?php foreach ($bdStats as $s): ?>
        <div class="col-md-4 col-lg-3">
          <div class="bdStatCard text-center p-4 h-100">
            <div class="bdStatIcon">
              <i class="<?= $s['icon'] ?>"></i>
            </div>
            <h3 class="bdStatNumber"><?= $s["count"] ?></h3>
            <span class="bdStatLabel"><?= $s["label"] ?></span>
            <p class="bdStatDesc"><?= $s["desc"] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
      <div class="d-flex justify-content-center mt-3">
        <a type="button" data-bs-toggle="modal" data-bs-target="#popupForm" class="btn-main px-4 py-2 me-2">Apply for Admission <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

  </div>
</section>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    new Swiper(".bdStatsSwiper", {
      slidesPerView: 1.2,
      spaceBetween: 16,
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        420: {
          slidesPerView: 1.4
        },
        576: {
          slidesPerView: 2
        },
      },
    });
  });
</script>