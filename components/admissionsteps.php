<?php
$admission_steps = [
  "Calculate GPA & check eligibility",
  "Choose suitable Bangladesh medical colleges",
  "Submit application form + documents",
  "Get admission confirmation letter",
  "Pay the first-year fee",
  "Apply for Bangladesh Student Visa & Fly"
];
?>

<section class="admissionProcess py-4" id="admission-steps">
  <div class="container">
    <div class="row g-4 align-items-center">
     <div class="section-title text-center mb-5">
  <span class="sub-title">Admission Process</span>

  <h2 class="title">
    Step-by-Step <span class="highLighted">MBBS Admission</span> Process for Bangladesh
  </h2>

  <p class="text-muted small mt-2 px-md-5">
    Applying for MBBS in Bangladesh for Indian students is a simple, transparent and structured 
    procedure. From document preparation to eligibility checks and final seat confirmation, 
    each step ensures smooth admission under the Government-approved SAARC quota and private college seats.
    Here is the complete, easy-to-follow process.
  </p>
</div>

      <div class="col-lg-5">
        <img src="assets/img/admission-proccess.jpg" class="img-fluid rounded" alt="Admission Process">
         <div class="mt-3">
        <a type="button" data-bs-toggle="modal" data-bs-target="#popupForm" class="btn-main px-4 py-2 me-2">Apply for Admission <i class="bi bi-arrow-right"></i></a>
      </div>
      </div>
      <div class="col-lg-7">
        <div class="stepsWrapper">
          <?php foreach ($admission_steps as $i => $step): ?>
            <div class="stepCard">
              <div class="stepNum"><?= $i+1 ?></div>
              <p><?= $step ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
.admissionProcess { background: #eef7ff; }

.stepsWrapper { display: flex; flex-direction: column; gap: 15px; }

.stepCard {
  display: flex;
  align-items: center;
  gap: 15px;
  background: #fff;
  padding: 10px 20px;
padding-left: 10px;
  border-radius: 999px;
  border: 1px solid #e2edff;
  transition: var(--smooth);
}

.stepCard:hover {
  transform: translateX(6px);
  background: #f6fbff;
}

.stepNum {
  width: 40px; height: 40px;
  border-radius: 50%;
  background: var(--color-primary);
  color: #fff;
  display: flex; align-items: center; justify-content: center;
  font-weight: 700;
  font-size: 1.1rem;
}
</style>
