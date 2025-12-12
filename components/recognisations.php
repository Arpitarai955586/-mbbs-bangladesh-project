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

<section class="recognitionsSection py-5">
  <div class="container">
    <h2 class="section-title mb-4">Recognition of Medical Universities in Bangladesh</h2>
    <div class="row g-4">
      <?php foreach ($recognitions as $rec): ?>
        <div class="col-md-4 col-sm-6 col-6">
          <div class="recCard">
            <div class="recLogo">
              <img src="assets/img/recognizations/<?= htmlspecialchars($rec['file']) ?>"
                   alt="<?= htmlspecialchars($rec['name']) ?>" />
            </div>
            <h5 class="recName"><?= htmlspecialchars($rec['name']) ?></h5>
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
.recognitionsSection { background: #f8fafc; }
.recCard {
  text-align: center;
  padding: 20px;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.07);
  transition: var(--smooth);
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
