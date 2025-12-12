<section class="hero-mbbs">
  <div class="container">
    <div class="row align-items-center g-4">



      <!-- LEFT CONTENT -->
      <div class="col-md-4 col-sm-6">
        <div class="hero-text-block">
          <h5 class="hero-subtitle">Study MBBS in Bangladesh</h5>

          <h1 class="hero-title">
            Begin Your <span class="typing"></span>
          </h1>

          <p class="hero-desc">
            Join the top medical universities in Bangladesh. Affordable fees, world-class infrastructure,
            globally recognized degree & a safe environment for Indian students.
          </p>
           

          <div class="d-flex flex-wrap gap-3 mt-4">
            <a
              href="<?= $site_identity['whatsapp']; ?>?text=Hi,%20I%20am%20interested%20in%20MBBS%20Admission%20in%20Bangladesh"
              class="btn-whatsapp"
              target="_blank">
              <i class="bi bi-whatsapp me-2"></i> Chat
            </a>

            <a
              href="tel:<?= preg_replace('/\D/', '', $site_identity['phone']); ?>"
              class="btn-main">
              <i class="bi bi-telephone-fill me-2"></i> Call
            </a>

          </div>

        </div>
      </div>
      <script>
    document.addEventListener("DOMContentLoaded", function () {

     const countries = [
    { name: "India", icon: "🇮🇳" },
    { name: "United States", icon: "🇺🇸" },
    { name: "United Kingdom", icon: "🇬🇧" },
    { name: "Canada", icon: "🇨🇦" }
     ];

  const box = document.getElementById("countryContainer");

  countries.forEach(country => {
    const btn = document.createElement("button");
    btn.className = "btn btn-primary btn-sm";
    btn.innerHTML = `${country.icon} ${country.name}`;
    box.appendChild(btn);
  });

});
</script>

      <!-- CENTER IMAGE -->
      <div class="col-md-4 col-2x d-flex justify-content-center align-items-end">
        <img src="assets/img/doctor.png" alt="Doctor" class="doctor-img">
      </div>

      <!-- RIGHT FORM -->
      <div class="col-lg-4 col-md-6">
        <div class="hero-form-box bg-white shadow-lg rounded-4 p-4">
          <h4 class="form-title text-center mb-3">Get Admission Details</h4>

          <form action="submit-form.php" method="POST" id="leadForm">
            <div class="row g-3">
              <!-- NAME + EMAIL -->
              <div class="col-md-6">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required placeholder="Full name">
              </div>
              <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required placeholder="Email">
              </div>

              <!-- PHONE + RANK -->
              <div class="col-md-8">
                <label class="form-label">Phone / WhatsApp</label>
                <input type="tel" name="phone" class="form-control" required placeholder="Your number">
              </div>
              <div class="col-md-4">
                <label class="form-label">NEET Rank</label>
                <input type="text" name="neet_rank" class="form-control" placeholder="Optional">
              </div>

              <!-- CITY -->
              <div class="col-12">
                <label class="form-label">City</label>
                <input type="text" name="city" class="form-control" placeholder="Your City">
              </div>

              <!-- STREAM -->
              <div class="col-12">
                <label class="form-label">Preferred Stream</label>
                <input list="mbbsStreams" name="stream" class="form-control" required placeholder="Select Stream">
                <datalist id="mbbsStreams">
                  <option value="General Medicine">
                  <option value="Dentistry">
                  <option value="Pharmacy">
                  <option value="Nursing">
                  <option value="Public Health">
                </datalist>
              </div>

              <div class="col-12">
                <button type="submit" class="btn-main w-100">
                  Apply Now <i class="bi bi-send-fill ms-1"></i>
                </button>
              </div>

            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const words = ["Medical Journey", "Career in Medicine", "Future as a Doctor"];
    let i = 0,
      j = 0,
      isDeleting = false;
    const el = document.querySelector(".typing");

    function type() {
      const word = words[i];
      el.textContent = word.substring(0, j);

      if (!isDeleting && j < word.length) {
        j++;
        setTimeout(type, 90);
      } else if (isDeleting && j > 0) {
        j--;
        setTimeout(type, 45);
      } else {
        isDeleting = !isDeleting;
        if (!isDeleting) i = (i + 1) % words.length;
        setTimeout(type, isDeleting ? 1500 : 300);
      }
    }
    type();
  });

</script>
