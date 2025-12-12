<?php
// ===================================
// MBBS IN BANGLADESH - Fee Structure
// ===================================

// Fee data for Bangladesh MBBS (approx. ranges)
$feeTabs = [
   [
    'id' => 'yearWiseFee',
    'label' => 'Year-wise Fee (Approx.)',
    'rows' => [
      ['Expense' => '1st Year (Highest)', 'Amount' => '$15,000 – $25,000'],
      ['Expense' => '2nd Year', 'Amount' => '$6,000 – $8,000'],
      ['Expense' => '3rd Year', 'Amount' => '$6,000 – $8,000'],
      ['Expense' => '4th Year', 'Amount' => '$6,000 – $8,000'],
      ['Expense' => '5th Year', 'Amount' => '$4,000 – $6,000'],
    ]
  ],
  [
    'id' => 'totalPackage',
    'label' => 'Total Package (5 Years)',
    'rows' => [
      ['Expense' => 'Minimum Package (5 Years)', 'Amount' => '$32,000  —  ₹26,00,000'],
      ['Expense' => 'Maximum Package (5 Years)', 'Amount' => '$54,000  —  ₹44,00,000'],
      ['Expense' => 'Includes', 'Amount' => 'Tuition, Registration, Exam Fees'],
    ]
  ],

  

  [
    'id' => 'otherCosts',
    'label' => 'Other Expenses',
    'rows' => [
      ['Expense' => 'Hostel + Food (Annual)', 'Amount' => '3,000 – 5,000 Taka / month'],
      ['Expense' => 'Study Materials / Uniform', 'Amount' => '₹15,000 – ₹25,000'],
      ['Expense' => 'Visa & Documentation', 'Amount' => '₹8,000 – ₹12,000'],
      ['Expense' => 'Travel (India → Bangladesh)', 'Amount' => '₹5,000 – ₹12,000'],
    ]
  ]
  , [
    'id' => 'living cost in Bangladesh',
    'label' => 'living cost in Bangladesh',
    'rows' => [
       ["name" => "Accommodation", "inr" => "₹5,000 - ₹12,000", "bdt" => "BDT 6,000 - 14,400"],
  ["name" => "Food & Groceries", "inr" => "₹8,000 - ₹12,000", "bdt" => "BDT 9,600 - 14,400"],
  ["name" => "Other Expenses", "inr" => "₹2,000 - ₹4,000", "bdt" => "BDT 2,400 - 4,800"]
    ]
  ]
];
?>

<section id="fees" class="iiebmFeeSection">
  <div class="container">

    <!-- Section Title -->
    <div class="sectionTitle">
      <span class="subTitle">MBBS Budget Planning</span>
      <h2 class="title">Bangladesh <span class="highLighted">Fee Structure</span></h2>
      <p class="leadText">Transparent and affordable MBBS fee packages for Indian students.</p>
    </div>

    <!-- Tabs -->
    <div class="feeTabsRow" role="tablist">
      <?php foreach ($feeTabs as $i => $tab): ?>
        <button
          class="feeTabBtn <?= $i === 0 ? 'active' : '' ?>"
          data-target="<?= $tab['id'] ?>"
          role="tab"
          aria-selected="<?= $i === 0 ? 'true' : 'false' ?>">
          <?= $tab['label'] ?>
        </button>
      <?php endforeach; ?>
    </div>

    <div class="row">
    <div class="col-md-7">
        <div class="feeTableColumn">

        <?php foreach ($feeTabs as $i => $tab): ?>
          <div id="<?= $tab['id'] ?>" class="feePanel <?= $i === 0 ? 'panelActive' : '' ?>" aria-hidden="<?= $i === 0 ? 'false' : 'true' ?>">
            <div class="feeCard">
              <h4 class="feeCardTitle"><?= $tab['label'] ?></h4>
              <div class="tableResponsive">
                <table class="feeTable">
                  <thead>
                    <tr>
                      <th>Expense</th>
                      <!-- <th class="textRight ">Amount</th> -->
                       <th style="display:flex; justify-content:flex-end;">Amount</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($tab['rows'] as $row): ?>
                      <tr>
                        <td><?= $row['Expense'] ?></td>
                        <td class="textRight"><?= $row['Amount'] ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <div class="mt-3">
          <a type="button" data-bs-toggle="modal" data-bs-target="#popupForm" class="btn-main px-4 py-2 me-2">Apply for Admission <i class="bi bi-arrow-right"></i></a>

        </div>
      </div>
    </div>

    <div class="col-md-5">
      <div class="feesPic">
          <img src="assets/img/fees-mbbs.jpg" class="feeImg rounded shadow" alt="MBBS Bangladesh Fees">

      </div>
    </div>
    </div>

  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('#fees .feeTabBtn');
    const panels = document.querySelectorAll('#fees .feePanel');

    tabButtons.forEach(btn => {
      btn.addEventListener('click', function() {

        let target = this.getAttribute('data-target');

        tabButtons.forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        panels.forEach(p => {
          p.id === target ? p.classList.add('panelActive') : p.classList.remove('panelActive');
        });
      });
    });
  });
</script>