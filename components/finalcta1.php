<section class="py-5 hero-banner">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-6 text-white hero-text" data-aos="fade-right">
                <h1 class="fw-bold display-5">
                    Ready to Start Your <span class="highlight">MBBS Journey</span> in Study Abroad?
                </h1>
                
                <p class="mt-3 fs-5">
                    Get expert guidance, top college recommendations, complete fee structure,
                    and end-to-end admission assistance for MBBS in Study Abroad.
                </p>

                <!-- Buttons (thoda upar) -->
                <div class="mt-3 d-flex gap-3 hero-buttons">
                    <a href="#" class="btn btn-apply px-4 py-2">Apply for Admission</a>
                    <a href="#" class="btn btn-whatsapp px-4 py-2">Chat on WhatsApp</a>
                </div>
            </div>

            <!-- Right Image (right aligned) -->
            <div class="col-lg-5 ms-auto hero-image" data-aos="fade-left">
                <div class="cta-image-wrapper">
                    <img src="assets/img/mbbs1.png" alt="MBBS Guidance" class="cta-image">
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* ================= BACKGROUND ================= */
.hero-banner {
    background: linear-gradient(135deg, #0e3d77, #124a93);
    position: relative;
    overflow: hidden;
    height: 400px;
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

/* ================= TEXT ================= */
.highlight {
    color: #ffb047;
}

.hero-text {
    animation: fadeInUp 0.8s ease;
}

/* Buttons ko thoda upar */
.hero-buttons {
    margin-top: 15px;
}

/* ================= BUTTONS ================= */
.btn-apply {
    background: var(--color-secondary, #06b6d4);
    color: #fff;
    font-weight: 600;
    border-radius: 30px;
    transition: 0.3s;
    box-shadow: 0 10px 25px rgba(0,0,0,0.25);
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
    box-shadow: 0 10px 25px rgba(0,0,0,0.25);
}

.btn-whatsapp:hover {
    background: #1ebe59;
    transform: translateY(-3px);
}

/* ================= IMAGE ================= */
.hero-image {
    position: relative;
}

.cta-image-wrapper {
    position: relative;
    display: flex;
    justify-content: flex-end;
}

/* Glow behind image */
.cta-image-wrapper::before {
    content: "";
    position: absolute;
    width: 260px;
    height: 260px;
    background: rgba(255,255,255,0.15);
    border-radius: 50%;
    filter: blur(60px);
    right: 60px;
    top: 50%;
    transform: translateY(-50%);
}

.cta-image {
    width: 90%;
    max-width: 440px;
    position: relative;
    z-index: 1;
    filter: drop-shadow(0px 15px 30px rgba(0,0,0,0.4));
    animation: floatImg 4s ease-in-out infinite;
}

/* Floating image */
@keyframes floatImg {
    0% { transform: translateY(0); }
    50% { transform: translateY(-12px); }
    100% { transform: translateY(0); }
}

/* Fade text */
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* ================= RESPONSIVE ================= */
@media (max-width: 768px) {
    .hero-text {
        text-align: center;
    }

    .hero-buttons {
        justify-content: center;
    }

    .cta-image-wrapper {
        justify-content: center;
        margin-top: 30px;
    }

    .cta-image-wrapper::before {
        display: none;
    }
}
</style>

<!-- AOS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ once: true });
</script>
