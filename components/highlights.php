<?php
$mbbs_highlights = [
  ["title" => "Recognition", "value" => "NMC & WHO Approved"],
  ["title" => "Eligibility", "value" => "60% in PCB Aggregate"],
  ["title" => "Course Duration", "value" => "5 Years + 1 Year Internship"],
  ["title" => "Total Fee with Hostel", "value" => "$32,000 - $54,000"],
  ["title" => "NEET Exam", "value" => "Yes, Mandatory"],
  ["title" => "IELTS / TOEFL", "value" => "Not Required"],
  ["title" => "Medium of Teaching", "value" => "ENGLISH"],
];
?>

<section class="mbbsSection highlights-section py-5">
  <div class="container">
    <h2 class="section-title mb-4">MBBS in Bangladesh Highlights</h2>

    <div class="row g-4">
      <?php foreach ($mbbs_highlights as $h): ?>
        <div class="col-lg-4 col-md-6">
          <div class="highlightCard">
            <h5><?= $h['title'] ?></h5>
            <p><?= $h['value'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
.highlights-section {
  background: #0F172A;  /* dark medical blue */
}

.section-title {
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: 2rem;
}

.highlightCard {
  background: rgba(255,255,255,0.12);
  backdrop-filter: blur(6px);
  border-radius: 12px;
  padding: 22px;
  border: 1px solid rgba(255,255,255,0.15);
  color: var(--color-white);
  transition: var(--smooth);
}

.highlightCard:hover {
  transform: translateY(-5px);
  background: rgba(255,255,255,0.18);
}

.highlightCard h5 {
  font-size: 1rem;
  margin-bottom: 8px;
  color: var(--color-secondary);
}

.highlightCard p {
  font-size: 0.95rem;
  opacity: 0.9;
}
</style>
