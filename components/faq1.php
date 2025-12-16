<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MBBS Study Abroad – FAQ</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fc;
        }

        .hero-section {
            padding: 60px 0;
        }

        .heading-title {
            font-size: 42px;
            font-weight: 700;
            color: #1e293b;
        }

        .faq-box {
            background: #fff;
            padding: 25px 35px;
            border-radius: 15px;
            box-shadow: 0px 10px 25px rgba(0,0,0,0.07);
        }

        .accordion-button {
            font-size: 18px;
            font-weight: 600;
            color: #1e293b;
            padding: 18px;
        }

        .accordion-button:not(.collapsed) {
            background-color: #eef5ff;
            color: #1e293b;
            box-shadow: none;
        }

        .accordion-button::after {
            transition: transform 0.3s ease;
        }

        .accordion-button:not(.collapsed)::after {
            transform: rotate(-180deg);
        }

        .side-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
            min-height: 620px;
        }

        @media (max-width: 992px) {
            .side-image img {
                min-height: 350px;
            }
        }
    </style>
</head>

<body>

<div class="container hero-section">

    <!-- Title -->
    <div class="row mb-5">
        <div class="col-lg-12 text-center">
            <h1 class="heading-title">Frequently Asked Questions</h1>
            <p class="mt-3 text-secondary fs-5">
                Everything you need to know about MBBS Study Abroad — eligibility, fees, safety, recognition & more.
            </p>
        </div>
    </div>

    <div class="row g-5">

        <!-- Left Image -->
        <div class="col-lg-5 side-image">
            <img src="assets/img/ask.jpg" alt="MBBS Study Abroad">
        </div>

        <!-- FAQ Section -->
        <div class="col-lg-7">
            <div class="faq-box">

                <div class="accordion" id="faqAccordion">

<?php
$faqs = [
  [
    "q" => "Is an MBBS degree earned through Study Abroad valid in India?",
    "a" => "Yes, MBBS degrees from NMC-approved and WHO-recognized universities are valid in India. Students must qualify the FMGE or NExT exam to practice medicine in India."
  ],
  [
    "q" => "What are the eligibility criteria for MBBS Study Abroad programs?",
    "a" => "Students must have completed 10+2 with Physics, Chemistry, and Biology, scored at least 50% (40% for reserved categories), and be 17 years old."
  ],
  [
    "q" => "Is NEET required for MBBS admission through Study Abroad?",
    "a" => "Yes, qualifying NEET is mandatory for Indian students to pursue MBBS abroad and for medical practice in India."
  ],
  [
    "q" => "What is the total cost of studying MBBS abroad?",
    "a" => "The total cost generally ranges between ₹20–40 lakhs depending on the country, university, and living expenses."
  ],
  [
    "q" => "Is it safe for international students to study MBBS abroad?",
    "a" => "Yes, Study Abroad destinations have safe campuses, international student hostels, and support services to ensure student safety."
  ],
  [
    "q" => "What is the duration of MBBS programs abroad?",
    "a" => "The MBBS program duration is usually 5–6 years including classroom study and clinical internship."
  ],
  [
    "q" => "Is Indian food available for MBBS students abroad?",
    "a" => "Yes, Indian food is widely available. Many universities provide Indian mess facilities or nearby Indian restaurants."
  ],
  [
    "q" => "Are MBBS degrees from abroad recognized worldwide?",
    "a" => "Yes, degrees from WHO and NMC-recognized universities are globally accepted. Graduates can appear for exams like USMLE, PLAB, and others."
  ],
  [
    "q" => "What documents are required for MBBS Study Abroad admission?",
    "a" => "Required documents include 10th & 12th mark sheets, NEET scorecard, passport, photographs, medical fitness certificate, and birth certificate."
  ]
];

foreach ($faqs as $index => $faq) {
    echo "
    <div class='accordion-item mb-2'>
        <h2 class='accordion-header'>
            <button class='accordion-button collapsed' type='button'
                data-bs-toggle='collapse'
                data-bs-target='#faq$index'>
                {$faq['q']}
            </button>
        </h2>
        <div id='faq$index' class='accordion-collapse collapse'
            data-bs-parent='#faqAccordion'>
            <div class='accordion-body'>
                {$faq['a']}
            </div>
        </div>
    </div>";
}
?>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
