<?php
$galleryPath = "assets/img/gallery";
$images = glob($galleryPath . "/*.{jpg,png,jpeg,gif}", GLOB_BRACE);
?>
<section class="simple-gallery-section py-5">
  <div class="container">

    <div class="section-title text-center mb-5">
      <span class="sub-title">Campus & Student Life</span>
      <h2 class="title">MBBS in Study Abroad <span class="highLighted">Photo Gallery</span></h2>
      <p class="text-muted small mt-2 px-md-5">
       Explore real glimpses of international classrooms, student accommodations, campus life, cultural diversity, and everyday experiences across top study abroad destinations.
      These visuals offer an authentic insight into academic environments, modern facilities, student communities, and the overall international student lifestyle.
      </p>
    </div>

    <div class="swiper simpleGallerySwiper">
      <div class="swiper-wrapper">

        <?php foreach ($images as $img): ?>
          <div class="swiper-slide">
            <div class="gallery-card">
              <img src="<?= $img ?>" class="img-fluid w-100 rounded-3" alt="Gallery Image">
            </div>
          </div>
        <?php endforeach; ?>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

  </div>
</section>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    new Swiper(".simpleGallerySwiper", {
      loop: true,
      spaceBetween: 20,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      breakpoints: {
        320: {
          slidesPerView: 1.2
        },
        576: {
          slidesPerView: 2
        },
        768: {
          slidesPerView: 2.5
        },
        992: {
          slidesPerView: 3
        },
        1200: {
          slidesPerView: 4
        }
      }
    });
  });
</script>