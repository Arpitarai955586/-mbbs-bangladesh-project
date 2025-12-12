<section class="hostelSection">
  <div class="container text-center">

    <h3 class="hostelSubTitle">Accommodation</h3>
    <h2 class="hostelTitle">Hostel & <span>Living Facilities</span></h2>

    <p class="hostelDesc">
      Comfortable, safe and student-friendly accommodation for Indian MBBS students in Bangladesh.
    </p>

    <div class="row g-3 justify-content-center">

      <div class="col-md-4">
        <div class="hostelCard">
          <div class="iconCircle"><i class="bi bi-building"></i></div>
          Separate boys & girls hostels
        </div>
      </div>

      <div class="col-md-4">
        <div class="hostelCard">
          <div class="iconCircle"><i class="bi bi-house-door"></i></div>
          Fully furnished rooms with study table
        </div>
      </div>

      <div class="col-md-4">
        <div class="hostelCard">
          <div class="iconCircle"><i class="bi bi-egg-fried"></i></div>
          Indian food served daily
        </div>
      </div>

      <div class="col-md-4">
        <div class="hostelCard">
          <div class="iconCircle"><i class="bi bi-cash"></i></div>
          Affordable & budget-friendly hostels
        </div>
      </div>

      <div class="col-md-4">
        <div class="hostelCard">
          <div class="iconCircle"><i class="bi bi-shield-lock"></i></div>
          24/7 security with CCTV
        </div>
      </div>

      <div class="col-md-4">
        <div class="hostelCard">
          <div class="iconCircle"><i class="bi bi-wifi"></i></div>
          Wi-Fi, electricity & clean water
        </div>
      </div>

      <div class="col-md-6">
        <div class="hostelCard fullCard">
          <div class="iconCircle"><i class="bi bi-hospital"></i></div>
          On-campus medical assistance
        </div>
      </div>

      <div class="col-md-6">
        <div class="hostelCard fullCard">
          <div class="iconCircle"><i class="bi bi-journal-text"></i></div>
          Peaceful & study-friendly environment
        </div>
      </div>

    </div>

    <a href="#" class="applyHostelBtn mt-3">Apply for Admission →</a>

  </div>
</section>

<style>
/* Compact Section */
.hostelSection {
  background: linear-gradient(180deg, #0d2d59, #0a2347);
  padding: 45px 0;
  color: #fff;
}

/* Headings */
.hostelSubTitle {
  color: #ffb347;
  font-size: 1.1rem;
  font-weight: 600;
  margin-bottom: 6px;
}

.hostelTitle {
  font-size: 2.2rem;
  font-weight: 800;
}
.hostelTitle span {
  color: #ffa037;
}

/* Description */
.hostelDesc {
  font-size: 1rem;
  opacity: 0.85;
  max-width: 720px;
  margin: 0 auto 25px;
}

/* Cards (Compact) */
.hostelCard {
  background: rgba(255, 255, 255, 0.14);
  border-radius: 14px;
  padding: 16px 20px 16px 55px;
  position: relative;
  font-weight: 600;
  font-size: 0.95rem;
  min-height: 68px;
  border: 1px solid rgba(255, 255, 255, 0.22);
  backdrop-filter: blur(5px);
  transition: 0.3s ease;
  color: #fff;
  text-align: left;
}

/* Hover */
.hostelCard:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 22px rgba(0,0,0,0.3);
  border-color: #ffcf85;
}

/* Icon Circle Compact */
.iconCircle {
  position: absolute;
  left: 14px;
  top: 50%;
  transform: translateY(-50%);
  width: 34px;
  height: 34px;
  border-radius: 50%;
  background: linear-gradient(135deg, #ffb347, #ff7f27);
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 6px 15px rgba(255, 145, 0, 0.35);
  transition: .25s;
}

.iconCircle i {
  font-size: 17px;
  color: #fff;
}

/* Icon Hover */
.hostelCard:hover .iconCircle {
  transform: translateY(-50%) scale(1.13);
}

/* Full row card spacing */
.fullCard {
  padding-left: 62px;
}

/* Button Compact */
.applyHostelBtn {
  display: inline-block;
  /* background: linear-gradient(135deg, #ffb347, #ff7a00); */
  background:var(--color-primary);
  /* color: #0d2d59; */
  color:#fff;
  padding: 10px 22px;
  border-radius: 10px;
  text-decoration: none;
  font-weight: 700;
  font-size: 1rem;
  transition: .3s;
}
.applyHostelBtn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 25px rgba(255,150,0,0.4);
}
</style>
