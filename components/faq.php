<?php
$faqs = [
  [
    'question' => 'Is MBBS from Bangladesh valid in India?',
    'answer'   => 'Yes. MBBS from Bangladesh is fully valid in India if the university is NMC-approved. After completing the degree, students must clear the FMGE (or NEXT) exam to practice in India.'
  ],
  [
    'question' => 'What is the eligibility for MBBS in Bangladesh?',
    'answer'   => 'Minimum 60% in PCB (Physics, Chemistry, Biology), NEET qualification is mandatory, and the candidate must be at least 17 years old. Gap years may be accepted depending on documentation.'
  ],
  [
    'question' => 'Is NEET required for MBBS admission in Bangladesh?',
    'answer'   => 'Yes, NEET qualification is compulsory as per NMC guidelines for all Indian students who wish to study MBBS abroad and practice in India.'
  ],
  [
    'question' => 'What is the total cost of studying MBBS in Bangladesh?',
    'answer'   => 'The total cost ranges from ₹24–35 Lakhs depending on the medical college. This includes tuition fees, hostel, and other charges.'
  ],
  [
    'question' => 'Is Bangladesh safe for Indian students?',
    'answer'   => 'Yes. Bangladesh is considered one of the safest options for Indian students, especially female students. Hostels are secured with CCTV, wardens, guards and strict campus rules.'
  ],
  [
    'question' => 'What is the duration of MBBS in Bangladesh?',
    'answer'   => 'The MBBS program is 5 years, followed by a 1-year mandatory internship. Many colleges also allow students to complete internships in India.'
  ],
  [
    'question' => 'Is Indian food available in Bangladesh medical colleges?',
    'answer'   => 'Yes. Almost all medical colleges provide Indian mess facilities offering vegetarian, non-vegetarian, and Jain food options.'
  ],
  [
    'question' => 'Are Bangladesh medical degrees recognized worldwide?',
    'answer'   => 'Most MBBS colleges in Bangladesh are recognized by NMC (India), WHO, WFME, BMDC, MOHFW and many global bodies, enabling students to attempt USMLE, PLAB, AMC and more.'
  ],
  [
    'question' => 'What documents are required for MBBS admission?',
    'answer'   => '10th & 12th marksheets, passport, NEET scorecard, photos, medical fitness certificate, police clearance, bank statement, birth certificate, and NMC eligibility certificate.'
  ],
  [
    'question' => 'When does MBBS admission start in Bangladesh?',
    'answer'   => 'Admissions start in September–November every year. Session begins in January–February depending on the college academic calendar.'
  ],
];
?>

<section class="mbbs-faq commonSection pt-120 pb-120" id="faq">
  <div class="container">
    <div class="row align-items-center gy-5">

      <!-- Left Content -->
      <div class="col-lg-5">
        <span class="sub-title">MBBS in Bangladesh – FAQ</span>
        <h2 class="title mb-20">Frequently Asked Questions</h2>
        <p class="text-muted mb-4">
          Here are the most important queries asked by students planning to pursue MBBS in Bangladesh.  
          Everything you need to know — eligibility, fees, validity, safety, and more.
        </p>
        <div class="faqImage">
          <img src="assets/img/faq-mbbs.jpg" alt="MBBS FAQ">
        </div>
      </div>

      <!-- Right: FAQs -->
      <div class="col-lg-7">
        <div class="accordion" id="mbbsFAQ">
          <?php foreach ($faqs as $index => $faq): ?>
            <div class="accordion-item mb-3 rounded-3 shadow-sm">
              <h2 class="accordion-header" id="heading<?= $index ?>">
                <button class="accordion-button <?= $index === 0 ? '' : 'collapsed' ?>" 
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapse<?= $index ?>"
                  aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>"
                  aria-controls="collapse<?= $index ?>">
                  <?= $faq['question'] ?>
                </button>
              </h2>

              <div id="collapse<?= $index ?>" 
                class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>"
                aria-labelledby="heading<?= $index ?>" 
                data-bs-parent="#mbbsFAQ">
                <div class="accordion-body">
                  <?= $faq['answer'] ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
</section>
