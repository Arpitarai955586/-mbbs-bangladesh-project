<?php
$recognitions = [
  ["name"=>"National Medical Commission (NMC)", "file"=>"nmc.png"],
  ["name"=>"World Health Organization (WHO)", "file"=>"who.png"],
  ["name"=>"World Federation for Medical Education (WFME)", "file"=>"wfme.png"],
  ["name"=>"Medical and Dental Council of Bangladesh (BM&DC)", "file"=>"bmdc.png"],
  ["name"=>"Ministry of Health & Family Welfare, Bangladesh", "file"=>"mohbd.png"],
  ["name"=>"Educational Commission for Foreign Medical Graduates.", "file"=>"ecfmg.png"]
];
?>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<section class="recognitionsSection py-5">
  <div class="container">
    <h2 class="section-title mb-4">Recognition of Medical Universities in Bangladesh</h2>

    <!-- Swiper Carousel -->
    <div class="swiper recognitionSwiper">
      <div class="swiper-wrapper">

        <?php foreach ($recognitions as $rec): ?>
          <div class="swiper-slide">
            <div class="recCard">
              <div class="recLogo">
                <img src="assets/img/recognizations/<?= htmlspecialchars($rec['file']) ?>"
                     alt="<?= htmlspecialchars($rec['name']) ?>" />
              </div>
              <h5 class="recName"><?= htmlspecialchars($rec['name']) ?></h5>
            </div>
          </div>
        <?php endforeach; ?>

      </div>

      <!-- Navigation Buttons -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <div class="d-flex justify-content-center mt-4">
      <a type="button" data-bs-toggle="modal" data-bs-target="#popupForm" class="btn-main px-4 py-2 me-2">
        Apply for Admission <i class="bi bi-arrow-right"></i>
      </a>
    </div>
  </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Swiper Initialization & Custom CSS -->
<style>
.recognitionsSection { background: #f8fafc; }

.swiper {
  padding-bottom: 40px;
}

.recCard {
  text-align: center;
  padding: 20px;
  background: #fff;
  border-radius: 12px;
  border:2px solid #ff7c02;;
  box-shadow: 0 4px 15px rgba(0,0,0,0.07);
  transition: 0.3s;
  margin-top:10px;
}
.recCard:hover { transform: translateY(-5px); }

.recLogo img {
  max-width: 80px;
  margin-bottom: 12px;
}

.recName {
  font-size: 1rem;
  font-weight: 600;
  color: var(--goodcolor);
}
</style>

<script>
var swiper = new Swiper(".recognitionSwiper", {
  slidesPerView: 4,
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 2000,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0:   { slidesPerView: 2 },
    576: { slidesPerView: 3 },
    768: { slidesPerView: 4 },
    1200:{ slidesPerView: 5 }
  }
});
</script>
