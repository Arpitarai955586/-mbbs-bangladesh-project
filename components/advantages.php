<?php
$advantages = [
  "Affordable tuition fees",
  "NMC & WHO approved colleges",
  "English medium teaching",
  "Similar syllabus to India",
  "High FMGE/MCI passing ratio",
  "Safe & culturally comfortable",
  "Internship opportunities",
  "No donation or capitation fee",
  "Indian food availability", 
];
?>

<section class="advantagesSection py-5">
  <div class="container">
    <h2 class="section-title mb-4">Advantages of Studying <span class="highLighted"> MBBS in Bangladesh</span></h2>

    <div class="row g-4">
      <?php foreach ($advantages as $adv): ?>
        <div class="col-md-4 col-6">
          <div class="advCard">
            <i class="bi bi-check-circle-fill icon"></i>
            <p><?= $adv ?></p>
          </div>
        </div>
      <?php endforeach; ?>
      <div class="d-flex justify-content-center mt-3">
        <a type="button" data-bs-toggle="modal" data-bs-target="#popupForm" class="btn-main px-4 py-2 me-2">Apply for Admission <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<style>
.advantagesSection { background: #f6fbff; }
.advCard {
  background: white;
  padding: 18px;
  border-radius: 10px;
  box-shadow: 0 2px 12px rgba(0,0,0,0.07);
  text-align: center;
}
.advCard .icon {
  font-size: 28px;
  color: var(--color-primary);
}
.advCard p { margin-top: 8px; font-weight: 500; }
</style>
