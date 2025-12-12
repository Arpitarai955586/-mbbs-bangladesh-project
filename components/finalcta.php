<section class="finalCTA position-relative py-5 overflow-hidden">
  <div class="container position-relative">

    <div class="row align-items-center">

      <!-- LEFT CONTENT -->
      <div class="col-lg-7">
        <h2 class="cta-title mb-3 text-white">
          Ready to Start Your <span class="highLighted">MBBS Journey</span> in Bangladesh?
        </h2>

        <p class="cta-desc mb-4">
          Get expert guidance, top college recommendations, complete fee structure,
          and end-to-end admission assistance for MBBS in Bangladesh.
        </p>
        <div class="d-flex flex-wrap gap-3">

          <a type="button" data-bs-toggle="modal" data-bs-target="#popupForm" class="btn-main px-4 py-2 me-2">Apply for Admission</a>
          <a href="https://wa.me/<?= preg_replace('/\D/', '', $site_identity['phone']); ?>?text=Hello%2C%20I%20want%20guidance%20for%20MBBS%20in%20Bangladesh."
            target="_blank"
            class="btn-whatsapp px-4 py-2">
            Chat on WhatsApp
          </a>
        </div>

      </div>

      <!-- RIGHT IMAGE -->
      <div class="col-lg-5">
        <div class="cta-image-wrapper">
          <img src="assets/img/cta-pic.png" alt="MBBS Guidance" class="cta-image">
        </div>
      </div>

    </div>

  </div>
</section>



<style>
  /* CTA MAIN SECTION */
  .finalCTA {
    background: var(--goodcolor);
    color: var(--color-white);
    border-radius: 0;
    padding-top: 80px;
    padding-bottom: 80px;
  }

  /* HEADING & TEXT */
  .finalCTA .cta-title {
    font-family: var(--font-heading);
    font-weight: 700;
    font-size: 2.3rem;
    line-height: 1.3;
  }

  .finalCTA .cta-desc {
    font-size: 1.15rem;
    opacity: 0.95;
    max-width: 600px;
  }

  /* RIGHT IMAGE STYLING */
  .cta-image-wrapper {
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 38%;
    pointer-events: none;
  }

  .cta-image {
    width: 100%;
    height: auto;
    opacity: 0.95;
    filter: drop-shadow(0px 8px 18px rgba(0, 0, 0, 0.35));
  }

  /* RESPONSIVE */
  @media (max-width: 991px) {
    .cta-image-wrapper {
      position: relative;
      width: 70%;
      margin: 40px auto 0;
      transform: none;
      top: auto;
      right: auto;
    }
  }

  @media (max-width: 576px) {
    .finalCTA .cta-title {
      font-size: 1.8rem;
    }

    .cta-desc {
      font-size: 1rem;
    }

    .cta-image-wrapper {
      width: 90%;
    }
  }
</style>