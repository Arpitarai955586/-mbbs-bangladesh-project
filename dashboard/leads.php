<?php
include('../backend/config.php');
include('../backend/session_check.php');

// Fetch all leads
$leads = $pdo->query("SELECT * FROM leads ORDER BY submitted_at DESC")->fetchAll(PDO::FETCH_ASSOC);

// Unique Cities & Streams
$cityList = [];
$streamList = [];

foreach ($leads as $l) {
    if (!empty($l['city'])) $cityList[] = $l['city'];
    if (!empty($l['stream'])) $streamList[] = $l['stream'];
}
$cityList = array_unique($cityList);
$streamList = array_unique($streamList);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('components/links.php'); ?>

  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css"/>

  <style>
    .filterBox {
      background: #fff;
      padding: 18px;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
      margin-bottom: 22px;
    }
    .filterBox label { font-weight: 600; }
    .export-btn { background:#fe661e;color:#fff;font-weight:600; }
  </style>
</head>

<body>

<?php include('components/header.php'); ?>
<?php include('components/sidebar.php'); ?>

<div class="page-wrapper">
<div class="content">

  <div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="fw-bold">📋 Leads Management</h4>

    <button class="btn export-btn" id="exportAllCSV">
      <i class="fa-solid fa-file-csv me-1"></i> Export All Leads
    </button>
  </div>

  <!-- FILTER BAR -->
  <div class="filterBox row g-3">

    <!-- SEARCH -->
    <div class="col-md-4">
      <label>Search</label>
      <input type="text" id="searchInput" class="form-control" placeholder="Name / Phone / Email">
    </div>

    <!-- CITY -->
    <div class="col-md-3">
      <label>City</label>
      <select id="cityFilter" class="form-select">
        <option value="">All Cities</option>
        <?php foreach($cityList as $city): ?>
          <option value="<?= htmlspecialchars($city) ?>"><?= htmlspecialchars($city) ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <!-- STREAM -->
    <div class="col-md-3">
      <label>Stream</label>
      <select id="streamFilter" class="form-select">
        <option value="">All Streams</option>
        <?php foreach($streamList as $s): ?>
          <option value="<?= htmlspecialchars($s) ?>"><?= htmlspecialchars($s) ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <!-- DATE RANGE -->
    <div class="col-md-6">
      <label>Date From</label>
      <input type="date" id="fromDate" class="form-control">
    </div>

    <div class="col-md-6">
      <label>Date To</label>
      <input type="date" id="toDate" class="form-control">
    </div>

    <!-- EXPORT FILTERED -->
    <div class="col-12 text-end mt-2">
      <button class="btn btn-dark" id="exportFilteredCSV">
        <i class="fa-solid fa-filter me-1"></i> Export Filtered Results
      </button>
    </div>

  </div>


  <!-- TABLE -->
  <div class="table-responsive">
    <table id="leadsTable" class="table table-bordered table-striped align-middle">
      <thead class="table-light">
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>NEET Rank</th>
          <th>City</th>
          <th>Stream</th>
          <th>Date</th>
          <th>WhatsApp</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($leads as $i => $l): ?>
          <tr>
            <td><?= $i+1 ?></td>
            <td><?= htmlspecialchars($l['name']) ?></td>
            <td><?= htmlspecialchars($l['phone']) ?></td>
            <td><?= htmlspecialchars($l['email'] ?: '-') ?></td>
            <td><?= htmlspecialchars($l['neet_rank'] ?: '-') ?></td>
            <td><?= htmlspecialchars($l['city'] ?: '-') ?></td>
            <td><?= htmlspecialchars($l['stream'] ?: '-') ?></td>
            <td><?= date("Y-m-d", strtotime($l['submitted_at'])) ?></td>
            <td>
              <a href="https://wa.me/<?= preg_replace('/\D/','',$l['phone']) ?>" target="_blank" class="btn btn-sm btn-success">
                WhatsApp
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>

    </table>
  </div>

</div>
</div>

<?php include('components/footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

<script>
$(document).ready(function () {

  let table = new DataTable("#leadsTable", {
    order: [[7, "desc"]],
    pageLength: 20
  });

  // Search
  $("#searchInput").on("keyup", function () {
    table.search(this.value).draw();
  });

  // City
  $("#cityFilter").on("change", function () {
    table.column(5).search(this.value).draw();
  });

  // Stream
  $("#streamFilter").on("change", function () {
    table.column(6).search(this.value).draw();
  });

  // Date Range Filter
  $.fn.dataTable.ext.search.push(function (settings, data) {
    let min = $("#fromDate").val();
    let max = $("#toDate").val();
    let date = data[7]; // Column index for submitted_at

    if (!min && !max) return true;

    let rowDate = new Date(date);

    if (min && rowDate < new Date(min)) return false;
    if (max && rowDate > new Date(max)) return false;

    return true;
  });

  $("#fromDate, #toDate").on("change", function () {
    table.draw();
  });


  /* EXPORT ALL CSV */
  $("#exportAllCSV").on("click", function () {
    exportCSV($("#leadsTable").DataTable().rows().data(), "all_leads.csv");
  });

  /* EXPORT FILTERED CSV */
  $("#exportFilteredCSV").on("click", function () {
    exportCSV($("#leadsTable").DataTable().rows({search:'applied'}).data(), "filtered_leads.csv");
  });

  function exportCSV(data, filename) {
    let csv = "Name,Phone,Email,NEET Rank,City,Stream,Date\n";

    data.each(function (row) {
      csv += [
        row[1], row[2], row[3], row[4], row[5], row[6], row[7]
      ].join(",") + "\n";
    });

    let blob = new Blob([csv], { type: "text/csv" });
    let link = document.createElement("a");
    link.href = URL.createObjectURL(blob);
    link.download = filename;
    link.click();
  }

});
</script>

</body>
</html>
