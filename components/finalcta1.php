<section class="py-5 hero-banner">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-6 text-white hero-text" data-aos="fade-right">
                <h1 class="fw-bold display-5">
                    Ready to Start Your <span class="highlight">MBBS Journey</span> in Study Abroad?
                </h1>
                
                <p class="mt-3 fs-5">
                    Get expert guidance, top college recommendations, complete fee structure, and end-to-end admission assistance for MBBS in Study Abroad?.
                </p>

                <div class="mt-4 d-flex gap-3">
                    <a href="#" class="btn btn-apply px-4 py-2">Apply for Admission</a>
                    <a href="#" class="btn btn-whatsapp px-4 py-2">Chat on WhatsApp</a>
                </div>
            </div>

            <!-- Right Doctor Image -->
           <div class="col-lg-5">
        <div class="cta-image-wrapper">
          <img src="assets/img/mbbs1.png" alt="MBBS Guidance" class="cta-image">
        </div>
      </div>
        </div>
    </div>
</section>

<style>
/* Background */
.hero-banner {
    background: linear-gradient(135deg, #0e3d77, #124a93);
    position: relative;
    overflow: hidden;
}

/* Decorative blobs */
.hero-banner::before, 
.hero-banner::after {
    content: "";
    position: absolute;
    width: 350px;
    height: 350px;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 50%;
    filter: blur(50px);
}

.hero-banner::before {
    top: -80px;
    right: -100px;
}

.hero-banner::after {
    bottom: -80px;
    left: -100px;
}

/* Text highlight */
.highlight {
    color: #ffb047;
}

/* Hero Text */
.hero-text {
    color: #fff;
    animation: fadeInUp 0.8s ease;
}

/* Buttons */
.btn-apply {
    background: var(--color-secondary);
    color: #fff;
    font-weight: 600;
    border-radius: 30px;
    transition: 0.3s;
}
.btn-apply:hover {
    background: #05b2e5;
    transform: translateY(-3px);
}

.btn-whatsapp {
    background: #25d366;
    color: #fff;
    font-weight: 600;
    border-radius: 30px;
    transition: 0.3s;
}
.btn-whatsapp:hover {
    background: #1ebe59;
    transform: translateY(-3px);
}

/* Doctor Image */
.hero-doctor {
    width: 85%;
    max-width: 420px;
    filter: drop-shadow(0px 10px 25px rgba(0,0,0,0.35));
    animation: floatImg 3s ease-in-out infinite;
}

/* Floating Image Animation */
@keyframes floatImg {
    0% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0); }
}

/* Fade In Animation */
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Responsive */
@media (max-width: 768px) {
    .hero-text {
        text-align: center;
    }
    .hero-banner::before, .hero-banner::after {
        display: none;
    }
}
</style>

<!-- AOS Animation Library (Optional but recommended) -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>
