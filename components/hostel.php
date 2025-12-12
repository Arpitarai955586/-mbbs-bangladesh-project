<?php
$hostel = [
  ["icon" => "ri-hotel-line", "text" => "Separate boys & girls hostels"],
  ["icon" => "ri-home-4-line", "text" => "Fully furnished rooms with study table."],
  ["icon" => "ri-restaurant-line", "text" => "Indian food served daily"],
  ["icon" => "ri-money-rupee-circle-line", "text" => "Affordable & budget-friendly hostels"],
  ["icon" => "ri-shield-keyhole-line", "text" => "24/7 security with CCTV"],
  ["icon" => "ri-wifi-line", "text" => "Wi-Fi, electricity & clean water"],
  ["icon" => "ri-first-aid-kit-line", "text" => "On-campus medical assistance"],
  ["icon" => "ri-book-open-line", "text" => "Peaceful & study-friendly environment"]
];
?>

<section class="hostelSection py-5">
  <div class="container">

    <div class="section-title text-center mb-4">
      <span class="sub-title">Accommodation</span>
      <h2 class="title text-white">Hostel & <span class="highLighted">Living Facilities</span></h2>
      <p class="text-white">
        Comfortable, safe and student-friendly accommodation for Indian MBBS students in Bangladesh.
      </p>
    </div>

    <div class="row g-3 justify-content-center">
      <?php foreach ($hostel as $h): ?>
        <div class="col-md-4 col-sm-6 col-12">
          <div class="miniHostelCard">
            <i class="<?= $h['icon'] ?> hostelIcon"></i>
            <p><?= $h['text'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
      <div class="d-flex justify-content-center mt-3">
          <a type="button" data-bs-toggle="modal" data-bs-target="#popupForm" class="btn-main bg-white text-warning px-4 py-2 me-2">Apply for Admission <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>

  </div>
</section>
<style>
  .hostelSection {
  background: var(--goodcolor);
  padding: 60px 0;
}

.miniHostelCard {
  background: var(--color-white);
  border-radius: 12px;
  padding: 16px 18px;
  display: flex;
  align-items: center;
  gap: 12px;
  border: 1px solid rgba(0,0,0,0.07);
  box-shadow: 0 2px 10px rgba(0,0,0,0.06);
  transition: var(--smooth);
  cursor: default;
}

.miniHostelCard:hover {
  transform: translateY(-4px);
  border-color: var(--color-secondary);
  box-shadow: 0 4px 18px rgba(0,0,0,0.12);
}

.hostelIcon {
  font-size: 30px;
  color: var(--color-secondary);
  min-width: 32px;
}

.miniHostelCard p {
  margin: 0;
  font-size: 0.95rem;
  font-weight: 500;
  color: var(--color-dark);
}

</style>