<?php
$admission_steps = [
  "Calculate GPA & check eligibility",
  "Choose suitable Study Abroad medical colleges",
  "Submit application form + documents",
  "Get admission confirmation letter",
  "Pay the first-year fee",
  "Apply for Study Abroad Student Visa & Fly"
];
?>

<section class="admissionProcess py-4" id="admission-steps">
  <div class="container">
    
    <!-- Section Title -->
    <div class="section-title text-center mb-5">
      <span class="sub-title">Admission Process</span>

      <h2 class="title">
        Step-by-Step <span class="highLighted">MBBS Admission</span> Process for Study Abroad
      </h2>

      <p class="text-muted small mt-2 px-md-5  ">
        Applying for Study Abroad is a simple, transparent, and well-structured process for Indian students.
       From profile evaluation and document preparation to university selection, application submission, visa guidance, and final enrollment, every step is designed to ensure a smooth and stress-free admission journey.
       With expert counseling, globally recognized universities, and clear eligibility criteria, students can confidently begin their international education journey.
      </p>
    </div>

    <div class="row g-4 align-items-center">
      
      <!-- LEFT IMAGE -->
      <div class="col-lg-5">
        <img src="assets/img/Admission.png" class="img-fluid rounded" alt="Admission Process">

        <div class="mt-3">
          <a type="button" data-bs-toggle="modal" data-bs-target="#popupForm" class="btn-main px-4 py-2 me-2">
            Apply for Admission <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- RIGHT STEPS (2 columns × 3 rows) -->
      <div class="col-lg-7 ">
        <div class="stepsGrid">
          <?php foreach ($admission_steps as $i => $step): ?>
            <div class="stepCard">
              <div class="stepNum"><?= $i + 1 ?></div>
              <p><?= $step ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
.admissionProcess { 
  background: #eef7ff;
 
}

/* 6 steps → 2 columns × 3 rows grid */
.stepsGrid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 38px 22px;
  /* border:2px solid black; */
  margin-top:-35px;
 
}

.stepCard {
  display: flex;
  align-items: center;
  gap: 15px;
  background: #fff;
  padding: 12px 20px;
  border-radius: 12px;
  
  border: 1px solid #ff7c02;
  transition: 0.3s ease;
  box-shadow: 0 4px 12px rgba(0,0,0,0.04);
}

.stepCard:hover {
  transform: translateY(-4px);
  background: #f6fbff;
}

.stepNum {
  min-width: 40px;
  height: 40px;
  border-radius: 50%;
  background: var(--color-primary);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  font-size: 1.1rem;
}

/* Mobile view: Convert to 1 column */
@media(max-width: 576px) {
  .stepsGrid {
    grid-template-columns: 1fr;
  }
}
</style>
