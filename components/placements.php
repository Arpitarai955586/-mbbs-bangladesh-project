<?php
// Generate partner logos
$partnerLogos = [];
for ($i = 1; $i <= 50; $i++) {
  $partnerLogos[] = "assets/img/partners/majorlogo-$i.png";
}
?>

<section id="iiebmPlacements" class="iiebmPlacements py-120">
  <div class="container text-center">
    
    <!-- Section Title -->
    <div class="sectionTitle mb-60">
      <span class="subTitle">Our Recruiters</span>
      <h2 class="title">Trusted by <span class="highLighted">Leading Corporates</span></h2>
      <p class="leadText">IIEBM students are placed with top organizations across finance, consulting, analytics, marketing, and technology domains.</p>
    </div>

    <!-- Swiper Top Row (Odd Logos) -->
    <div class="swiper placementSwiperTop">
      <div class="swiper-wrapper">
        <?php foreach ($partnerLogos as $index => $logo): ?>
          <?php if ($index % 2 == 0): ?>
            <div class="swiper-slide">
              <div class="partnerCard">
                <img src="<?= htmlspecialchars($logo) ?>" alt="IIEBM Recruiter Logo">
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Swiper Bottom Row (Even Logos) -->
    <div class="swiper placementSwiperBottom mt-4">
      <div class="swiper-wrapper">
        <?php foreach ($partnerLogos as $index => $logo): ?>
          <?php if ($index % 2 != 0): ?>
            <div class="swiper-slide">
              <div class="partnerCard">
                <img src="<?= htmlspecialchars($logo) ?>" alt="IIEBM Recruiter Logo">
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</section>
