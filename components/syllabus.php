<?php
$syllabus = [
  [
    "phase" => "First Phase",
    "duration" => "1.5 Years",
    "subjects" => ["Anatomy", "Physiology", "Biochemistry"],
    "score" => "1300"
  ],
  [
    "phase" => "Second Phase",
    "duration" => "1 Year",
    "subjects" => ["Community Medicine", "Forensic Medicine"],
    "score" => "600"
  ],
  [
    "phase" => "Third Phase",
    "duration" => "1 Year",
    "subjects" => [
      "Pharmacology & Therapeutics",
      "Pathology",
      "Microbiology"
    ],
    "score" => "900"
  ],
  [
    "phase" => "Fourth Phase",
    "duration" => "1.5 Years",
    "subjects" => [
      "Medicine & Allied",
      "Surgery & Allied",
      "Obstetrics & Gynaecology"
    ],
    "score" => "1500"
  ]
];
?>

<section class="syllabusSection py-4" id="syllabus">
  <div class="container">
    <h2 class="section-title mb-4">MBBS in Bangladesh –<span class="highLighted"> Syllabus Structure</span></h2>

    <div class="row g-4">
      <?php foreach ($syllabus as $s): ?>
        <div class="col-md-3">
          <div class="syllabusCard h-100">
            <h4><?= $s["phase"] ?></h4>
            <p class="duration">Duration: <strong><?= $s["duration"] ?></strong></p>
            <ul>
              <?php foreach ($s["subjects"] as $sub): ?>
                <li><?= $sub ?></li>
              <?php endforeach; ?>
            </ul>
            <div class="scoreBox">Total Score: <strong><?= $s["score"] ?></strong></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  .syllabusSection {
    background: #f3fbfb;
  }

  .syllabusCard {
    background: #fff;
    position: relative;
    min-height: 250px;
    border-radius: 12px;
    padding: 20px;
    border-left: 5px solid var(--color-primary);
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
  }

  .syllabusCard h4 {
    color: var(--goodcolor);
    font-weight: 700;
  }

  .syllabusCard ul {
    margin: 0;
    padding-left: 18px;
  }

  .duration {
    font-size: .9rem;
    color: #777;
  }

  .scoreBox {
    background: #e8faf7;
    padding: 8px 12px;
    border-radius: 8px;
    bottom: 20px;
    width: calc(100% - 20px);
    position: absolute;
    left: 50%;
    transform: translateX(-50%);

    margin-top: 10px;
    color: #009577;
    font-weight: 600;
  }
</style>