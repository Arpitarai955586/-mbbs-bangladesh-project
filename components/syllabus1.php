<section class="syllabusSection py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="title">
        MBBS in Bangladesh – <span class="highlight">Syllabus Structure</span>
      </h2>
      <p class="subtitle">
        A well-structured academic curriculum designed to provide strong medical foundations,
        clinical exposure, and advanced learning across five years of MBBS in Bangladesh.
      </p>
    </div>

    <div class="row g-4">

      <!-- Phase 1 -->
      <div class="col-md-6 col-lg-3">
        <div class="phaseCard">
          <div class="phaseHeader first"></div>
          <h4 class="phaseTitle">First Phase</h4>
          <p class="duration">Duration: <strong>1.5 Years</strong></p>

          <ul class="phaseList">
            <li>Anatomy</li>
            <li>Physiology</li>
            <li>Biochemistry</li>
          </ul>

          <div class="score">Total Score: <strong>1300</strong></div>
        </div>
      </div>

      <!-- Phase 2 -->
      <div class="col-md-6 col-lg-3">
        <div class="phaseCard">
          <div class="phaseHeader second"></div>
          <h4 class="phaseTitle">Second Phase</h4>
          <p class="duration">Duration: <strong>1 Year</strong></p>

          <ul class="phaseList">
            <li>Community Medicine</li>
            <li>Forensic Medicine</li>
             <li>Forensic Medicine</li>
          </ul>

          <div class="score">Total Score: <strong>600</strong></div>
        </div>
      </div>

      <!-- Phase 3 -->
      <div class="col-md-6 col-lg-3">
        <div class="phaseCard">
          <div class="phaseHeader third"></div>
          <h4 class="phaseTitle">Third Phase</h4>
          <p class="duration">Duration: <strong>1 Year</strong></p>

          <ul class="phaseList">
            <li>Pharmacology & Therapeutics</li>
            <li>Pathology</li>
            <li>Microbiology</li>
          </ul>

          <div class="score">Total Score: <strong>900</strong></div>
        </div>
      </div>

      <!-- Phase 4 -->
      <div class="col-md-6 col-lg-3">
        <div class="phaseCard">
          <div class="phaseHeader fourth"></div>
          <h4 class="phaseTitle">Fourth Phase</h4>
          <p class="duration">Duration: <strong>1.5 Years</strong></p>

          <ul class="phaseList">
            <li>Medicine & Allied</li>
            <li>Surgery & Allied</li>
            <li>Obstetrics & Gynaecology</li>
          </ul>

          <div class="score">Total Score: <strong>1500</strong></div>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
/* Section background */
.syllabusSection {
  background: linear-gradient(to bottom right, #e9f7ff, #f5fbff);
}

/* Heading */
.title {
  font-size: 2rem;
  font-weight: 700;
  color: #0b2c52;
}
.highlight {
  color: #ff7b00;
}
.subtitle {
  max-width: 700px;
  margin: 0 auto;
  font-size: 0.95rem;
  color: #6c7a99;
}

/* Cards */
.phaseCard {
  background: #ffffffcc;
  backdrop-filter: blur(8px);
  padding: 25px;
  border-radius: 18px;
  position: relative;
  box-shadow: 0 10px 25px rgba(0,0,0,0.08);
  transition: 0.35s ease;
}

/* Gradient Top Border */
.phaseHeader {
  height: 6px;
  border-radius: 8px 8px 0 0;
  margin: -25px -25px 15px -25px;
}
.first { background: linear-gradient(90deg, #00c6ff, #0072ff); }
.second { background: linear-gradient(90deg, #f7971e, #ffd200); }
.third { background: linear-gradient(90deg, #00b09b, #96c93d); }
.fourth { background: linear-gradient(90deg, #ff5f6d, #ffc371); }

/* Hover */
.phaseCard:hover {
  transform: translateY(-10px);
  box-shadow: 0 18px 35px rgba(0,0,0,0.12);
}

/* Titles */
.phaseTitle {
  font-weight: 700;
  color: #0b2c52;
}
.duration {
  font-size: 0.9rem;
  color: #6c7a99;
}

/* List */
.phaseList li {
  margin-bottom: 6px;
  color: #223b55;
}

/* Score box */
.score {
  background: #e6fff2;
  padding: 10px 15px;
  border-radius: 10px;
  margin-top: 15px;
  font-weight: 600;
  color: #009f56;
  text-align: center;
}
</style>
