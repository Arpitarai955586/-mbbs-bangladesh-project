<?php
// ===================================
// MBBS IN BANGLADESH - Fee Structure
// ===================================

// Fee data for Bangladesh MBBS (approx. ranges)
$feeTabs = [
  [
    'id' => 'yearWiseFee',
    'label' => 'Year-wise Fee (Approx.)',
    'type' => 'normal',
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
    'type' => 'normal',
    'rows' => [
      ['Expense' => 'Minimum Package (5 Years)', 'Amount' => '$32,000  —  ₹26,00,000'],
      ['Expense' => 'Maximum Package (5 Years)', 'Amount' => '$54,000  —  ₹44,00,000'],
      ['Expense' => 'Includes', 'Amount' => 'Tuition, Registration, Exam Fees'],
    ]
  ],

  [
    'id' => 'otherCosts',
    'label' => 'Other Expenses',
    'type' => 'normal',
    'rows' => [
      ['Expense' => 'Hostel + Food (Annual)', 'Amount' => '3,000 – 5,000 Taka / month'],
      ['Expense' => 'Study Materials / Uniform', 'Amount' => '₹15,000 – ₹25,000'],
      ['Expense' => 'Visa & Documentation', 'Amount' => '₹8,000 – ₹12,000'],
      ['Expense' => 'Travel (India → Bangladesh)', 'Amount' => '₹5,000 – ₹12,000'],
    ]
  ],

  [
    'id' => 'livingCost',
    'label' => 'Living Cost in Bangladesh',
    'type' => 'living',
    'rows' => [
      ["name" => "Accommodation", "inr" => "₹5,000 - ₹12,000", "bdt" => "BDT 6,000 - 14,400"],
      ["name" => "Food & Groceries", "inr" => "₹8,000 - ₹12,000", "bdt" => "BDT 9,600 - 14,400"],
      ["name" => "Other Expenses", "inr" => "₹2,000 - ₹4,000", "bdt" => "BDT 2,400 - 4,800"]
    ]
  ]
];
?>

<style>
  .feeTabsRow {
    display: flex;
    gap: 10px;
    margin-bottom: 25px;
    flex-wrap: wrap;
  }
  .feeTabBtn {
    padding: 10px 20px;
    border: 1px solid #0d6efd;
    background: #fff;
    color: #0d6efd;
    border-radius: 10px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
  }
  .feeTabBtn.active {
    background: #1b3760ff;
    color: #fff;
  }
  .feePanel { display: none; }
  .panelActive { display: block; }

  .feeCard {
    background: #fff;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0px 10px 25px rgba(0,0,0,0.07);
  }

  .feeCardTitle {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 18px;
  }

  .feeTable {
    width: 100%;
  }

  .feeTable th,
  .feeTable td {
    padding: 12px 10px;
    border-bottom: 1px solid #eaeaea;
  }

  th.textRight,
  td.textRight {
    text-align: right !important;
  }
</style>


<section id="fees" class="iiebmFeeSection">
  <div class="container">

    <!-- Section Title -->
    <div class="sectionTitle text-center mb-4">
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
        >
          <?= $tab['label'] ?>
        </button>
      <?php endforeach; ?>
    </div>

    <div class="row">
      <div class="col-md-7">

        <?php foreach ($feeTabs as $i => $tab): ?>
          
          <div id="<?= $tab['id'] ?>" class="feePanel <?= $i === 0 ? 'panelActive' : '' ?>">

            <div class="feeCard">
              <h4 class="feeCardTitle"><?= $tab['label'] ?></h4>

              <div class="tableResponsive">

                <?php if ($tab['type'] === 'normal'): ?>

                <!-- Normal Fee Table -->
                <table class="feeTable">
                  <thead>
                    <tr>
                      <th>Expense</th>
                      <th class="textRight">Amount</th>
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

                <?php else: ?>

                <!-- Living Cost Table -->
                <table class="feeTable">
                  <thead>
                    <tr>
                      <th>Category</th>
                      <th class="textRight">Cost (INR)</th>
                      <th class="textRight">Cost (BDT)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($tab['rows'] as $row): ?>
                      <tr>
                        <td><?= $row['name'] ?></td>
                        <td class="textRight"><?= $row['inr'] ?></td>
                        <td class="textRight"><?= $row['bdt'] ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>

                <?php endif; ?>

              </div>
            </div>

          </div>

        <?php endforeach; ?>

      </div>

      <div class="col-md-5">
        <div class="feesPic">
            <img src="assets/img/fees-mbbs.jpg" class="feeImg rounded shadow w-100" alt="MBBS Bangladesh Fees">
        </div>
      </div>

    </div>

  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const tabButtons = document.querySelectorAll('.feeTabBtn');
  const panels = document.querySelectorAll('.feePanel');

  tabButtons.forEach(btn => {
    btn.addEventListener('click', function() {

      let target = this.getAttribute('data-target');

      tabButtons.forEach(b => b.classList.remove('active'));
      this.classList.add('active');

      panels.forEach(p => {
        p.classList.remove('panelActive');
        if (p.id === target) p.classList.add('panelActive');
      });

    });
  });
});
</script>
