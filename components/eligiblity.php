<?php
$eligibility = [
  "Minimum 60% in PCB (Physics, Chemistry, Biology)",
  "Must qualify NEET (Compulsory)",
  "Minimum age: 17 years",
  "Completed 10+2 from a recognized board",
  "Core subjects must include Physics, Chemistry, Biology",
  "Valid Passport is mandatory",
  "Minimum GPA equivalent to 8 (HSC) & 3.5 individually",
  "Students must be medically fit",
  "No criminal background verification issues"
];

$icons = [
  "https://cdn.lordicon.com/yeallgsa.json", // PCB score
  "https://cdn.lordicon.com/eszyyflr.json", // NEET exam
  "https://cdn.lordicon.com/mecwbjnp.json", // Age
  "https://cdn.lordicon.com/nocovwne.json", // 10+2 certificate
  "https://cdn.lordicon.com/fhtaantg.json", // PCB subjects
  "https://cdn.lordicon.com/whtfgdfm.json", // Passport
  "https://cdn.lordicon.com/oegrrprk.json", // GPA / analytics
  "https://cdn.lordicon.com/qhgmphtg.json", // Medical fitness
  "https://cdn.lordicon.com/psnhyobz.json"  // Criminal background
];
?>

<section class="eligibility-section py-4" id="eligibility">
  <div class="container">
   <h2 class="section-title mb-4 text-center"
    style="font-size:42px; font-family:'Oswald', sans-serif;">
      MBBS in Study Abroad <span class="highLighted">Eligibility Criteria</span>
    </h2>


    <div class="row g-4 justify-content-center">

      <?php foreach ($eligibility as $i => $e): ?>
        <div class="col-md-4 col-sm-6">
          <div class="eligibility-card">

            <div class="eligibility-icon">
              <lord-icon
                src="<?= $icons[$i] ?>"
                trigger="hover"
                style="width:52px;height:52px">
              </lord-icon>
            </div>

            <p><?= $e ?></p>

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
.eligibility-section {
  background: #f8fcff;
}

.section-title {
  font-family: var(--font-heading);
  color: var(--color-heading);
  font-weight: 700;
}

.highLighted {
  color: var(--color-primary);
}

.eligibility-card {
  background: #ffffff;
  border-radius: 14px;
  padding: 18px;
  text-align: center;
  border: 1px solid #e8f2ff;
  box-shadow: 0 4px 14px rgba(0,0,0,0.06);
  transition: var(--smooth);
}

.eligibility-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 20px rgba(0,0,0,0.12);
}

.eligibility-icon {
  margin-bottom: 12px;
}

.eligibility-card p {
  font-size: 0.95rem;
  font-weight: 500;
  color: var(--color-dark);
}
</style>
