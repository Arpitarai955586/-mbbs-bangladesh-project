<section class="iiebmScholarships commonSection position-relative" id="scholarships">
  <div class="container">

    <!-- Section Heading -->
    <div class="section-title text-center mb-5">
      <span class="sub-title">Scholarships & Financial Support</span>
      <h2 class="title">Making <span class="highLighted">MBBS Abroad</span> Affordable</h2>
      <p class="text-muted small mt-2 px-md-5">
        Studying MBBS in Bangladesh is already cost-effective for Indian students, and with available 
        scholarships, discounts, and flexible loan assistance, it becomes even more accessible. 
        Here are the financial support options commonly offered to Indian students applying to 
        Bangladesh medical colleges.
      </p>
    </div>

    <!-- Cards -->
    <div class="row g-4 justify-content-center">
      
      <!-- Merit Scholarship -->
      <div class="col-md-6 col-lg-4">
        <div class="scholarCard text-center">
          <div class="scholarIcon bg-light-primary mb-3">
            <i class="fa-solid fa-medal"></i>
          </div>
          <h4 class="scholarTitle mb-2">Merit-Based Discounts</h4>
          <p class="text-muted small mb-4">
            Eligible Indian students with high PCB percentages or strong NEET scores may receive 
            merit-based fee reductions from selected Bangladesh medical colleges.
          </p>
          <a type="button" data-bs-toggle="modal" data-bs-target="#popupForm" class="btn btn-outline-primary btn-sm  fw-semibold">
            Check Eligibility <i class="fa-solid fa-arrow-right ms-2"></i>
          </a>
        </div>
      </div>

      <!-- Financial Assistance -->
      <div class="col-md-6 col-lg-4">
        <div class="scholarCard text-center">
          <div class="scholarIcon bg-light-secondary mb-3">
            <i class="fa-solid fa-hand-holding-dollar"></i>
          </div>
          <h4 class="scholarTitle mb-2">Loan & EMI Assistance</h4>
          <p class="text-muted small mb-4">
            Students can avail education loans from Indian banks/NBFCs covering tuition, hostel,
            and travel. Guidance for easy EMI-based repayment plans is also provided.
          </p>
          <a type="button" data-bs-toggle="modal" data-bs-target="#popupForm" class="btn btn-outline-secondary btn-sm  fw-semibold">
            Apply for Loan Help <i class="fa-solid fa-arrow-right ms-2"></i>
          </a>
        </div>
      </div>

      <!-- Special Awards -->
      <div class="col-md-6 col-lg-4">
        <div class="scholarCard text-center">
          <div class="scholarIcon bg-light-success mb-3">
            <i class="fa-solid fa-trophy"></i>
          </div>
          <h4 class="scholarTitle mb-2">Special Grants for Indian Students</h4>
          <p class="text-muted small mb-4">
            Some colleges provide special grants, early-bird benefits, or one-time admission discounts 
            exclusively for Indian MBBS aspirants to reduce their first-year expenses.
          </p>
          <a type="button" data-bs-toggle="modal" data-bs-target="#popupForm" class="btn btn-outline-success btn-sm  fw-semibold">
            Claim Benefits <i class="fa-solid fa-arrow-right ms-2"></i>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
/* Modern Premium Border Card */
.scholarCard {
  position: relative;
  background: #fff;
  padding: 28px;
  border-radius: 18px;
  box-shadow: 0 8px 22px rgba(0,0,0,0.07);
  border: 3px solid transparent;
  background-clip: padding-box;
  transition: .3s ease;
}

/* Gradient border wrapper */
.scholarCard::before {
  content: "";
  position: absolute;
  inset: 0;
  border-radius: 20px;
  padding: 2px;
  background: linear-gradient(135deg, #4b9fff, #7c5cff, #3ccf7f);
  -webkit-mask:
       linear-gradient(#fff 0 0) content-box, 
       linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
          mask-composite: exclude;
  z-index: -1;
}

/* Icon Styling (simple + clean) */
.scholarIcon {
  height: 65px;
  width: 65px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 28px;
  color: #fff;
  margin: 0 auto 15px;
}

/* Title */
.scholarTitle {
  font-weight: 700;
  font-size: 1.2rem;
}
.scholarIcon i {
  color: #1a1a1a !important;   /* Dark Icon */
  font-size: 30px;
}
</style>
