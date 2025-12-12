<?php
$universities = [
    [
        "name" => "Siberian State Medical University",
        "location" => "Tomsk, Russia",
        "fee" => "₹23.13 L",
        "logo" => "https://www.rmcedu.com/images/bangladesh/study_bangladesh_2.webp"
    ],
    [
        "name" => "Tbilisi State Medical University",
        "location" => "Tbilisi, Georgia",
        "fee" => "₹40.80 L",
        "logo" => "https://www.rmcedu.com/images/bangladesh/study_bangladesh_2.webp"
    ],
    [
        "name" => "Georgian National University SEU",
        "location" => "Tbilisi, Georgia",
        "fee" => "₹32.13 L",
        "logo" => "https://www.rmcedu.com/images/bangladesh/study_bangladesh_2.webp"
    ],
    [
        "name" => "Avicenna Batumi Medical University",
        "location" => "Batumi, Georgia",
        "fee" => "₹50.0 L",
        "logo" => "https://www.rmcedu.com/images/bangladesh/study_bangladesh_2.webp"
    ],
    [
        "name" => "Volgograd State Medical University",
        "location" => "Volgograd, Russia",
        "fee" => "₹27.90 L",
        "logo" => "https://www.rmcedu.com/images/bangladesh/study_bangladesh_2.webp"
    ],
    [
        "name" => "Crimean Federal University",
        "location" => "Crimea, Russia",
        "fee" => "₹21.00 L",
        "logo" => "https://www.rmcedu.com/images/bangladesh/study_bangladesh_2.webp"
    ],
     [
        "name" => "Crimean Federal University",
        "location" => "Crimea, Russia",
        "fee" => "₹21.00 L",
        "logo" => "https://www.rmcedu.com/images/bangladesh/study_bangladesh_2.webp"
    ],
     [
        "name" => "Crimean Federal University",
        "location" => "Crimea, Russia",
        "fee" => "₹21.00 L",
        "logo" => "https://www.rmcedu.com/images/bangladesh/study_bangladesh_2.webp"
    ],
     [
        "name" => "Crimean Federal University",
        "location" => "Crimea, Russia",
        "fee" => "₹21.00 L",
        "logo" => "https://www.rmcedu.com/images/bangladesh/study_bangladesh_2.webp"
    ],
     [
        "name" => "Crimean Federal University",
        "location" => "Crimea, Russia",
        "fee" => "₹21.00 L",
        "logo" => "https://www.rmcedu.com/images/bangladesh/study_bangladesh_2.webp"
    ],
     [
        "name" => "Crimean Federal University",
        "location" => "Crimea, Russia",
        "fee" => "₹21.00 L",
        "logo" => "https://www.rmcedu.com/images/bangladesh/study_bangladesh_2.webp"
    ],
     [
        "name" => "Crimean Federal University",
        "location" => "Crimea, Russia",
        "fee" => "₹21.00 L",
        "logo" => "https://www.rmcedu.com/images/bangladesh/study_bangladesh_2.webp"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>MBBS Abroad Slider</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.section-title {
    font-size: 28px;
    font-weight: 700;
}

.uni-card {
    background: white;
    border-radius: 12px;
    padding: 20px;
    border: 1px solid #ddd;
    height: 100%;
    transition: 0.3s;
}
.uni-card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 5px 20px rgba(0,0,0,0.12);
}

.uni-logo {
    width: 60px;
    height: 60px;
    object-fit: contain;
}

.arrow-btn {
    background: #f1f1f1;
    border: none;
    font-size: 22px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    cursor: pointer;
    transition: 0.3s;
}
.arrow-btn:hover {
    background: #0d6efd;
    color: #fff;
}
</style>
</head>

<body>

<div class="container my-5">

    <!-- TITLE + ARROWS -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="section-title">Our Exclusive Study MBBS Abroad Partners</h2>

        <div class="d-flex gap-2">

            <button class="arrow-btn" type="button"
                    data-bs-target="#uniCarousel" data-bs-slide="prev">‹</button>

            <button class="arrow-btn" type="button"
                    data-bs-target="#uniCarousel" data-bs-slide="next">›</button>

        </div>
    </div>

    <!-- SLIDER -->
    <div id="uniCarousel" class="carousel slide">
        <div class="carousel-inner">

            <?php
            $chunks = array_chunk($universities, 6);
            $i = 0;

            foreach ($chunks as $slide): ?>
                <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">

                    <div class="row g-4">
                        <?php foreach ($slide as $u): ?>
                            <div class="col-md-4">
                                <div class="uni-card">

                                    <div class="d-flex align-items-center gap-3">
                                        <img src="<?= $u['logo'] ?>" class="uni-logo">
                                        <div>
                                            <div class="fw-bold"><?= $u['name'] ?></div>
                                            <div class="text-muted">📍 <?= $u['location'] ?></div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="fw-bold">Total Fee: <?= $u['fee'] ?></div>
                                            <small class="text-muted">Free Counseling</small>
                                        </div>
                                        <a href="#" class="btn btn-primary btn-sm" style="background: var(--color-primary)">Details</a>
                                    </div>

                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            <?php $i++; endforeach; ?>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- ⭐ IMPORTANT FIX ⭐ -->
<script>
var myCarousel = document.querySelector('#uniCarousel');
var carousel = new bootstrap.Carousel(myCarousel, {
    interval: false,
    wrap: true
});
</script>

</body>
</html>
