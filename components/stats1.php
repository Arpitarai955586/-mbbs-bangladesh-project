<!-- ===========================
     BANGLADESH STATS - MODERN UI
============================ -->
<section class="bdStatsSection py-5">
  <div class="container">

    <div class="section-title text-center mb-5">
      <span class="sub-title">Study Abroad MBBS Facts</span>
      <h2 class="title">
        Why <span class="highLighted">Study Abroad</span> is Trusted for MBBS
      </h2>
      <p class="text-muted small mt-2 px-md-5">
       Verified statistics and global trends that highlight Study Abroad as one of the most trusted and successful pathways for Indian students.
      </p>
    </div>

    <?php
    $bdStats = [
      ["icon" => "ri-user-heart-line", "count" => "12,000+", "label" => "Indian Students", "desc" => "Every year a large number of Indian students choose Study Abroad for MBBS."],
      ["icon" => "ri-award-line", "count" => "95%", "label" => "NMC Screening Success", "desc" => "Study Abroad produces one of the highest FMGE/NExT pass rates."],
      ["icon" => "ri-graduation-cap-line", "count" => "5 + 1", "label" => "Years of Study", "desc" => "5 years MBBS + 1 year internship."],
      ["icon" => "ri-hospital-line", "count" => "70+", "label" => "Approved Colleges", "desc" => "NMC-recognized top-quality medical universities."],
      ["icon" => "ri-money-rupee-circle-line", "count" => "₹30–55 L", "label" => "Total Fee", "desc" => "Affordable MBBS fees vs private Indian colleges."],
      ["icon" => "ri-english-input", "count" => "100%", "label" => "English Medium", "desc" => "Complete MBBS course taught in English."],
      ["icon" => "ri-shield-check-line", "count" => "Top Ranked", "label" => "South Asia Quality", "desc" => "Similar pattern as Indian MBBS."],
      ["icon" => "ri-group-line", "count" => "Indian Food", "label" => "Hostel Facilities", "desc" => "Safe hostels with Indian mess."],
    ];
    ?>

    <!-- Swiper (Mobile) -->
    <div class="swiper bdStatsSwiper d-md-none">
      <div class="swiper-wrapper">
        <?php foreach ($bdStats as $s): ?>
        <div class="swiper-slide">
          <div class="bdStatCard-modern">
            <div class="bdStatIcon-modern"><i class="<?= $s['icon'] ?>"></i></div>
            <h3 class="bdStatNumber-modern"><?= $s["count"] ?></h3>
            <span class="bdStatLabel-modern"><?= $s["label"] ?></span>
            <p class="bdStatDesc-modern"><?= $s["desc"] ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <div class="swiper-pagination"></div>

      <div class="text-center mt-4">
        <a class="btn-main px-4 py-2" data-bs-toggle="modal" data-bs-target="#popupForm">
          Apply for Admission <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>

    <!-- Grid (Desktop) -->
    <div class="row g-4 d-none d-md-flex justify-content-center">
      <?php foreach ($bdStats as $s): ?>
      <div class="col-md-4 col-lg-3">
        <div class="bdStatCard-modern h-100">
          <div class="bdStatIcon-modern"><i class="<?= $s['icon'] ?>"></i></div>
          <h3 class="bdStatNumber-modern"><?= $s["count"] ?></h3>
          <span class="bdStatLabel-modern"><?= $s["label"] ?></span>
          <p class="bdStatDesc-modern"><?= $s["desc"] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- SWIPER + ANIMATIONS -->
<script>
document.addEventListener("DOMContentLoaded", function () {

  new Swiper(".bdStatsSwiper", {
    slidesPerView: 1.15,
    spaceBetween: 18,
    loop: true,
    autoplay: { delay: 2500, disableOnInteraction: false },
    pagination: { el: ".swiper-pagination", clickable: true },
    breakpoints: { 480: { slidesPerView: 1.5 }, 576: { slidesPerView: 2 } }
  });

  // Fade-Up Reveal Animation
  const cards = document.querySelectorAll(".bdStatCard-modern");
  const observer = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) e.target.classList.add("showCard");
    });
  }, { threshold: 0.2 });

  cards.forEach(card => observer.observe(card));
});
</script>

<!-- ===========================
       CSS FOR MODERN UI
=========================== -->
<style>
.bdStatsSection {
  background: #f7faff;
}

/* ===============================
   MODERN GLASSMORPHIC CARD UI
================================ */
.bdStatCard-modern {
  backdrop-filter: blur(18px);
  background: rgba(255, 255, 255, 0.6);
  border-radius: 18px;
  padding: 28px;
  text-align: center;
  border: 1px solid rgba(255, 255, 255, 0.4);
  box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
  transition: 0.35s ease;
  opacity: 0;
  transform: translateY(30px);
}

.bdStatCard-modern.showCard {
  opacity: 1;
  transform: translateY(0);
}

/* Hover Effect */
.bdStatCard-modern:hover {
  transform: translateY(-10px) scale(1.03);
  box-shadow: 0 15px 35px rgba(0, 120, 255, 0.2);
}

/* ICON */
.bdStatIcon-modern {
  width: 70px;
  height: 70px;
  margin: 0 auto 15px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;

  /* background: linear-gradient(135deg, #007bff, #00c6ff); */
  background:var(--color-primary);
  box-shadow: 0 4px 15px rgba(0, 123, 255, 0.4);
  animation: pulseIcon 2s infinite;
}

.bdStatIcon-modern i {
  font-size: 32px;
  color: #fff;
}

/* TEXT */
.bdStatNumber-modern {
  font-size: 32px;
  font-weight: 700;
  color: #0B2c52;
}

.bdStatLabel-modern {
  display: block;
  font-size: 16px;
  margin-top: 4px;
  font-weight: 600;
}

.bdStatDesc-modern {
  font-size: 13px;
  margin-top: 10px;
  color: #444;
}

/* Pulse Animation */
@keyframes pulseIcon {
  0% { transform: scale(1); }
  50% { transform: scale(1.08); }
  100% { transform: scale(1); }
}

@media (max-width: 576px) {
  .bdStatCard-modern {
    padding: 24px;
  }
  .bdStatNumber-modern {
    font-size: 28px;
  }
}
</style>
