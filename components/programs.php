<?php
$programs = [
  [
    'type' => 'PGDM in Marketing Management',
    'icon' => 'fa-solid fa-bullhorn',
    'desc' => 'Master consumer behavior, branding, sales management, and digital marketing through live projects and market research immersion.',
    'career' => ['Brand Manager', 'Digital Marketing Strategist', 'Sales Head', 'Marketing Analyst']
  ],
  [
    'type' => 'PGDM in Finance Management',
    'icon' => 'fa-solid fa-coins',
    'desc' => 'Develop advanced financial acumen across investment analysis, banking, corporate finance, and fintech innovation.',
    'career' => ['Investment Banker', 'Financial Analyst', 'Risk Consultant', 'Wealth Advisor']
  ],
  [
    'type' => 'PGDM in Human Resource Management',
    'icon' => 'fa-solid fa-people-group',
    'desc' => 'Cultivate leadership in people management, learning & development, and organizational transformation for the modern workforce.',
    'career' => ['HR Business Partner', 'Talent Acquisition Lead', 'Training Manager', 'Employee Engagement Specialist']
  ],
  [
    'type' => 'PGDM in Business Analytics',
    'icon' => 'fa-solid fa-chart-line',
    'desc' => 'Blend data science, visualization, and business strategy to make data-driven decisions that drive performance.',
    'career' => ['Data Analyst', 'Business Intelligence Consultant', 'Analytics Manager', 'Forecasting Specialist']
  ],
  [
    'type' => 'PGDM in Supply Chain Management',
    'icon' => 'fa-solid fa-truck-fast',
    'desc' => 'Gain expertise in logistics, procurement, operations strategy, and supply optimization across global markets.',
    'career' => ['Supply Chain Analyst', 'Operations Planner', 'Logistics Manager', 'Procurement Officer']
  ],
  [
    'type' => 'PGDM in SAP-ERP & Operations',
    'icon' => 'fa-solid fa-network-wired',
    'desc' => 'Empower your management skills with SAP, ERP modules, and enterprise operations integration — highly valued by corporates.',
    'career' => ['ERP Consultant', 'Operations Executive', 'System Analyst', 'Project Coordinator']
  ],
];
?>

<section class="iiebm-programs py-5" id="programs">
  <div class="container">

    <!-- Section Header -->
    <div class="section-title text-center mb-5">
      <span class="sub-title fw-semibold text-warning text-uppercase">Our Flagship PGDM Programs</span>
      <h2 class="fw-bold text-dark mb-3" style="font-family: var(--font-heading);">
        Explore IIEBM’s Specialisations
      </h2>
      <p class="text-muted mx-auto" style="max-width:700px;">
        Our AICTE-approved PGDM programs combine academic depth, industry certifications, and real-world immersion — preparing leaders for tomorrow’s challenges.
      </p>
    </div>

    <!-- Program Grid -->
    <div class="row g-4">
      <?php foreach ($programs as $p): ?>
        <div class="col-lg-4 col-md-6">
          <div class="program-card h-100 position-relative">
            <div class="program-front p-4 text-center">
              <div class="program-icon mb-3">
                <i class="<?php echo $p['icon']; ?>"></i>
              </div>
              <h4 class="program-title mb-2"><?php echo $p['type']; ?></h4>
              <p class="program-desc mb-0"><?php echo $p['desc']; ?></p>
            </div>

            <div class="program-hover d-flex flex-column justify-content-center align-items-center text-center p-4">
              <h5 class="fw-semibold text-white mb-3">Career Opportunities</h5>
              <ul class="list-unstyled text-white small mb-4">
                <?php foreach ($p['career'] as $c): ?>
                  <li><i class="bi bi-check-circle-fill me-2 text-warning"></i><?php echo $c; ?></li>
                <?php endforeach; ?>
              </ul>
              <a href="#form" class="btn btn-warning text-dark fw-semibold px-4 rounded-pill">
                Apply Now <i class="fa-solid fa-arrow-right-long ms-2"></i>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- ======== STYLES ======== -->
<style>
.iiebm-programs {
  background: var(--color-bg-light);
  font-family: var(--font-body);
}
 
.program-card {
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 5px 25px rgba(0,0,0,0.07);
  overflow: hidden;
  transition: all 0.4s ease;
  position: relative;
}
.program-card:hover {
  transform: translateY(-8px);
}

/* FRONT */
.program-front {
  transition: all 0.4s ease;
}
.program-icon i {
    color: var(--color-secondary);
    font-size: 2rem;
    padding: 18px;
    border-radius: 50%;
    height: 50px;
    width: 50px;
    display: flex
;
    align-items: center;
    margin: 0 auto;
    justify-content: center;
}
.program-title {
  font-weight: 600;
  color: var(--color-primary);
  font-size: 1.1rem;
}
.program-desc {
  font-size: 0.95rem;
  color: #555;
}

/* HOVER LAYER */
.program-hover {
  position: absolute;
  top: 0; left: 0;
  width: 100%;
  height: 100%;
  background: var(--color-primary);
  opacity: 0;
  visibility: hidden;
  border-radius: 16px;
  transition: all 0.4s ease;
}
.program-card:hover .program-hover {
  opacity: 1;
  visibility: visible;
}
.program-hover ul {
  margin: 0;
  padding: 0;
}
.program-hover li {
  margin-bottom: 3px;
}

/* RESPONSIVE */
@media (max-width: 767.98px) {
  .program-card {
    border-radius: 12px;
  }
}
</style>
