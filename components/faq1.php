<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MBBS in Bangladesh – FAQ</title>

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

        /* Accordion styling */
        .accordion-button {
            font-size: 18px;
            font-weight: 600;
            color: #1e293b;
            padding: 18px;
            transition: 0.3s ease;
        }

        .accordion-button:not(.collapsed) {
            background-color: #eef5ff;
            color: #0d6efd;
            box-shadow: none;
        }

        /* Arrow Rotate Effect */
        .accordion-button::after {
            transition: transform 0.3s ease;
        }

        .accordion-button:not(.collapsed)::after {
            transform: rotate(-180deg);
        }

        /* Image full equal height */
        .side-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
            min-height: 620px; /* Equal height look */
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
                    Here are the most important queries asked by students planning to pursue MBBS in Bangladesh.
                    Everything you need to know — eligibility, fees, validity, safety, and more.
                </p>
            </div>
        </div>

        <div class="row g-5">

            <!-- Left Image -->
            <div class="col-lg-5 side-image">
                <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e" alt="Student Image">
            </div>

            <!-- FAQ Section -->
            <div class="col-lg-7">
                <div class="faq-box">

                    <div class="accordion" id="faqAccordion">

                        <?php 
                            $faqs = [
                                "Is MBBS from Bangladesh valid in India?",
                                "What is the eligibility for MBBS in Bangladesh?",
                                "Is NEET required for MBBS admission in Bangladesh?",
                                "What is the total cost of studying MBBS in Bangladesh?",
                                "Is Bangladesh safe for Indian students?",
                                "What is the duration of MBBS in Bangladesh?",
                                "Is Indian food available in Bangladesh medical colleges?",
                                "Are Bangladesh medical degrees recognized worldwide?",
                                "What documents are required for MBBS admission?",
                            ];

                            foreach ($faqs as $index => $q) {
                                echo "
                                <div class='accordion-item mb-2'>
                                    <h2 class='accordion-header'>
                                        <button class='accordion-button collapsed' 
                                            type='button' data-bs-toggle='collapse' 
                                            data-bs-target='#faq$index'>
                                            $q
                                        </button>
                                    </h2>
                                    <div id='faq$index' class='accordion-collapse collapse' data-bs-parent='#faqAccordion'>
                                        <div class='accordion-body'>
                                            Answer coming soon...
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
