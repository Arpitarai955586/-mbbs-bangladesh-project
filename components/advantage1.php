<?php
$advantages = [
  ["Affordable tuition fees", "bi-cash-stack"],
  ["NMC & WHO approved colleges", "bi-patch-check-fill"],
  ["English medium teaching", "bi-translate"],
  ["Similar syllabus to India", "bi-journal-text"],
  ["High FMGE/MCI passing ratio", "bi-bar-chart-line-fill"],
  ["Safe & culturally comfortable", "bi-shield-check"],
  ["Internship opportunities", "bi-briefcase-fill"],
  ["No donation or capitation fee", "bi-x-circle-fill"],
  ["Indian food availability", "bi-egg-fried"],
];
?>

<section class="advantagesSection py-5">
  <div class="container">

    <h2 class="section-title mb-4 text-center">
      Advantages of Studying <span class="highLighted">MBBS in Bangladesh</span>
    </h2>

    <div class="row g-4 justify-content-center">
      <?php foreach ($advantages as $adv): ?>
        <div class="col-md-4 col-6">
          <div class="advCard">
            <div class="advIcon">
              <i class="bi <?= $adv[1] ?>"></i>
            </div>
            <p><?= $adv[0] ?></p>
          </div>
        </div>
      <?php endforeach; ?>

      <div class="d-flex justify-content-center mt-4">
        <a type="button" data-bs-toggle="modal" data-bs-target="#popupForm"
           class="btn-main px-4 py-2 me-2">
          Apply for Admission <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>

  </div>
</section>

<style>
.advantagesSection {
  background: #f0f7ff;
}

/* Card */
.advCard {
  background: #ffffff;
  padding: 20px 15px;
  border-radius: 14px;
  text-align: center;
  border: 1px solid rgba(22, 85, 180, 1);
  transition: all 0.3s ease;
}

/* Hover */
.advCard:hover {
  transform: translateY(-6px);
  box-shadow: 0 8px 20px rgba(0, 86, 179, 0.18);
  border-color: rgba(7, 54, 114, 1);
}

/* Icon Circle */
.advIcon {
  width: 55px;
  height: 55px;
  /* background: #e8f2ff; */
  background:var(--color-primary);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 12px auto;
  transition: 0.3s;
}

/* Icon */
.advIcon i {
  font-size: 28px;
  color: #e8f2ff;
  font-weight: bold;
  transition: 0.3s;
}

/* Hover Icon */
.advCard:hover .advIcon {
  background: var(--color-secondary);
}
.advCard:hover .advIcon i {
  color: #ffffff;
}

/* Text */
.advCard p {
  font-size: 15px;
  font-weight: 600;
  color: #232323;
}
</style>
