<?php
$living_costs = [
  ["name" => "Accommodation", "inr" => "₹5,000 - ₹12,000", "bdt" => "BDT 6,000 - 14,400"],
  ["name" => "Food & Groceries", "inr" => "₹8,000 - ₹12,000", "bdt" => "BDT 9,600 - 14,400"],
  ["name" => "Other Expenses", "inr" => "₹2,000 - ₹4,000", "bdt" => "BDT 2,400 - 4,800"]
];
?>

<section class="livingCost py-5">
  <div class="container">
    <h2 class="section-title mb-4">Living Cost in Bangladesh</h2>

    <table class="table livingTable">
      <thead>
        <tr>
          <th>Expense</th>
          <th>Cost (INR)</th>
          <th>Cost (BDT)</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($living_costs as $lc): ?>
          <tr>
            <td><?= $lc["name"] ?></td>
            <td><?= $lc["inr"] ?></td>
            <td><?= $lc["bdt"] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>

<style>
.livingCost { background: #f8fcff; }
.livingTable th {
  background: var(--goodcolor);
  color: #fff;
}
.livingTable td { padding: 12px; border-bottom: 1px solid #eee; }
</style>
