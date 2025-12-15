<section class="hero-mbbs">
  <div class="container">
    <div class="row align-items-center g-4">

      <!-- LEFT CONTENT -->
      <div class="col-md-4 col-sm-6">
        <div class="hero-text-block">

          <h5 class="hero-subtitle"> MBBS in Study Abroad</h5>

          <h1 class="hero-title">
            Begin Your <span class="typing"></span>
          </h1>

          <p class="hero-desc">
          Start your Study Abroad journey with top medical universities worldwide.
Affordable fees, world-class infrastructure, globally recognized degrees
and a safe, student-friendly environment.
          </p>

          <!-- COUNTRY BUTTONS -->
          <div id="countryContainer" class="d-flex flex-wrap gap-2 mt-3"></div>

          <!-- WHATSAPP & CALL BUTTON -->
          <div class="d-flex flex-wrap gap-3 mt-4">
            <a href="#" class="btn-whatsapp " target="_blank">
              <i class="bi bi-whatsapp me-2"></i> Chat
            </a>

            <a href="#" class="btn-main rRood">
              <i class="bi bi-telephone-fill me-2"></i> Call
            </a>
          </div>

        </div>
      </div>

      <!-- CENTER IMAGE -->
      <div class="col-md-4 d-flex justify-content-center align-items-end">
        <!-- <img src="assets/img/doctor.png" alt="Doctor" class="doctor-img"> -->
      </div>

      <!-- RIGHT FORM -->
      <div class="col-lg-4 col-md-6">
        <div class="hero-form-box bg-white shadow-lg rounded-4 p-4">
          <h4 class="form-title text-center mb-3">Get Admission Details</h4>

          <form action="submit-form.php" method="POST" id="leadForm">
            <div class="row g-3">

              <div class="col-md-6">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required placeholder="Full name">
              </div>

              <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required placeholder="Email">
              </div>

              <div class="col-md-8">
                <label class="form-label">Phone / WhatsApp</label>
                <input type="tel" name="phone" class="form-control" required placeholder="Your number">
              </div>

              <div class="col-md-4">
                <label class="form-label">NEET Rank</label>
                <input type="text" name="neet_rank" class="form-control" placeholder="Optional">
              </div>

              <div class="col-12">
                <label class="form-label">City</label>
                <input type="text" name="city" class="form-control" placeholder="Your City">
              </div>

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

<!-- JAVASCRIPT -->
<script>
document.addEventListener("DOMContentLoaded", () => {

  /* ---------------------
     TYPING EFFECT
  ---------------------- */
  const words = ["Medical Journey", "Career in Medicine", "Future as a Doctor"];
  let i = 0, j = 0, isDeleting = false;
  const el = document.querySelector(".typing");

  function type() {
    const word = words[i];
    el.textContent = word.substring(0, j);

    if (!isDeleting && j < word.length) {
      j++;
      setTimeout(type, 90);
    } else if (isDeleting && j > 0) {
      j--;
      setTimeout(type, 50);
    } else {
      isDeleting = !isDeleting;
      if (!isDeleting) i = (i + 1) % words.length;
      setTimeout(type, isDeleting ? 1500 : 300);
    }
  }
  type();

  /* ---------------------
     COUNTRY BUTTONS
  ---------------------- */
  const countries = [
    { name: "India", flag: "https://flagcdn.com/w40/in.png" },
    { name: "Bangladesh", flag: "https://flagcdn.com/w40/bd.png" },
    { name: "Nepal", flag: "https://flagcdn.com/w40/np.png" },
    { name: "Russia", flag: "https://flagcdn.com/w40/ru.png" },
    { name: "Kazakhstan", flag: "https://flagcdn.com/w40/kz.png" },
    
  ];

  const box = document.getElementById("countryContainer");

  countries.forEach(c => {
    const btn = document.createElement("button");
    btn.className = "country-btn";
    btn.innerHTML = `
      <img src="${c.flag}" class="flag-icon" alt=""> 
      ${c.name}
    `;
    box.appendChild(btn);
  });

});
</script>

<!-- CSS -->
<style>
  /* Flag Icon */

  .rRood{
     border-radius: 30px;

  }
  .flag-icon {
    width: 22px;
    height: 14px;
    border-radius: 3px;
    margin-right: 6px;
    box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
  }

  /* Country Button Style */
  .country-btn {
    display: flex;
    align-items: center;
    gap: 6px;
    border: 1px solid var(--color-secondary);
    background: white;
    padding: 8px 16px;
    font-size: 14px;
    border-radius: 10px;
    cursor: pointer;
    transition: 0.25s ease;
    font-weight: 500;
  }

  .country-btn:hover {
    background:#052c65;
    color: #fff;
    transform: translateY(-2px) scale(1.05);
    box-shadow: 0 6px 12px rgba(13, 110, 253, 0.25);
  }

  .typing {
    color: #ff5722;
    font-weight: bold;
  }
</style>
