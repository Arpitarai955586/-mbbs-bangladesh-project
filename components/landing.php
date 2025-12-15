<?php
$uk_colleges = [
    ["name"=>"University of Oxford","city"=>"Oxford, UK","fee"=>"£35,000 / Year"],
    ["name"=>"University of Cambridge","city"=>"Cambridge, UK","fee"=>"£34,500 / Year"],
    ["name"=>"Imperial College London","city"=>"London, UK","fee"=>"£36,000 / Year"],
    ["name"=>"University College London","city"=>"London, UK","fee"=>"£33,000 / Year"],
    ["name"=>"University of Manchester","city"=>"Manchester, UK","fee"=>"£30,000 / Year"],
    ["name"=>"King’s College London","city"=>"London, UK","fee"=>"£32,000 / Year"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Study in UK | Top Universities</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.hero{
    background:linear-gradient(90deg,#0d6efd,#6610f2);
    padding:100px 0;
}
.icon-box{
    background:#f8f9fa;
    border-radius:12px;
    padding:25px;
}
.cta{
    background:#0d6efd;
    padding:70px 0;
}
</style>
</head>

<body>

<!-- HERO -->
<section class="hero text-white text-center">
<div class="container">
    <h1 class="fw-bold display-5">Study in United Kingdom</h1>
    <p class="lead">Top Ranked Universities • Global Career • High ROI</p>
    <a href="#colleges" class="btn btn-warning btn-lg mt-3">View UK Colleges</a>
</div>
</section>

<!-- WHY UK -->
<section class="py-5">
<div class="container">
<div class="row text-center g-4">
    <div class="col-md-3"><div class="icon-box">🎓<h6>World Ranking</h6></div></div>
    <div class="col-md-3"><div class="icon-box">💼<h6>Work Opportunities</h6></div></div>
    <div class="col-md-3"><div class="icon-box">🌍<h6>Global Exposure</h6></div></div>
    <div class="col-md-3"><div class="icon-box">💷<h6>High ROI</h6></div></div>
</div>
</div>
</section>

<!-- COLLEGES -->
<section class="bg-light py-5" id="colleges">
<div class="container">
<h2 class="text-center fw-bold mb-4">Top UK Universities</h2>
<div class="row g-4">

<?php foreach($uk_colleges as $college){ ?>
<div class="col-lg-4 col-md-6">
    <div class="card shadow-sm h-100">
        <div class="card-body text-center">
            <h5 class="fw-bold"><?= $college['name']; ?></h5>
            <p class="text-muted"><?= $college['city']; ?></p>
            <p class="fw-semibold text-primary"><?= $college['fee']; ?></p>
            <a href="#" class="btn btn-outline-primary btn-sm">Details</a>
        </div>
    </div>
</div>
<?php } ?>

</div>
</div>
</section>

<!-- PROCESS -->
<section class="py-5">
<div class="container text-center">
<h2 class="fw-bold mb-4">Admission Process</h2>
<div class="row g-4">
    <div class="col-md-3">📝 Apply</div>
    <div class="col-md-3">📄 Documents</div>
    <div class="col-md-3">🎓 Offer Letter</div>
    <div class="col-md-3">✈️ Visa & Fly</div>
</div>
</div>
</section>

<!-- CTA -->
<section class="cta text-white text-center">
<div class="container">
<h2 class="fw-bold">Apply Now for UK Universities</h2>
<p>Limited Seats Available</p>
<a href="#" class="btn btn-light btn-lg">Apply Now</a>
</div>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3">
© <?= date("Y"); ?> Study in UK | All Rights Reserved
</footer>

</body>
</html>
