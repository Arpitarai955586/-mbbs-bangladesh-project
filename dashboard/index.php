<?php
// admin/index.php (Simple Dashboard)

require_once __DIR__ . '/../backend/config.php';
require_once __DIR__ . '/../backend/session_check.php';

// Fetch stats
try {
    $stmt = $pdo->query("SELECT COUNT(*) AS total, MAX(submitted_at) AS latest FROM leads");
    $stats = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $stats = ['total' => 0, 'latest' => null];
    error_log("Dashboard Error: " . $e->getMessage());
}

// Convert date to IST properly
$latestLead = $stats['latest'] 
    ? (new DateTime($stats['latest'], new DateTimeZone("UTC")))
        ->setTimezone(new DateTimeZone("Asia/Kolkata"))
        ->format("d M Y, h:i A")
    : "No leads yet";

// Theme colors
$primary = "#fe661d";
$bg = "#FFF8F0"; 
$text = "#4b2a00";
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Dashboard — Leads Summary</title>
  <?php include('components/links.php'); ?>

  <style>
    :root {
      --card-bg: <?= $bg ?>;
      --accent: <?= $primary ?>;
      --text-dark: <?= $text ?>;
    }
    
    .simple-card {
      background: var(--card-bg);
      padding: 28px;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.06);
      max-width: 420px;
      margin: 40px auto;
      text-align: center;
      transition: 0.2s ease;
    }
    .simple-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 14px 40px rgba(0,0,0,0.08);
    }

    .card-icon {
      width: 70px;
      height: 70px;
      border-radius: 16px;
      margin: auto;
      display: flex;
      justify-content: center;
      align-items: center;
      background: rgba(255,255,255,0.55);
      font-size: 28px;
      font-weight: 700;
      color: var(--accent);
      box-shadow: inset 0 0 10px rgba(255,255,255,0.4);
    }

    .big-number {
      font-size: 3rem;
      font-weight: 800;
      margin: 14px 0 6px;
      color: var(--accent);
    }

    .subtitle {
      font-size: 0.95rem;
      font-weight: 600;
      color: var(--text-dark);
      opacity: 0.8;
    }

    .last-update {
      font-size: 0.85rem;
      color: #777;
      margin-top: 10px;
    }

    .view-btn {
      margin-top: 18px;
      padding: 10px 20px;
      font-weight: 700;
      border-radius: 10px;
      background: var(--accent);
      color: #fff;
      text-decoration: none;
      display: inline-block;
    }

    .view-btn:hover { background: #e25b17; }
  </style>
</head>

<body>

<div class="main-wrapper">

  <?php include('components/header.php'); ?>
  <?php include('components/sidebar.php'); ?>

  <div class="page-wrapper">
    <div class="content">

      <h3 class="fw-bold mb-3">📊 Dashboard Overview</h3>

      <div class="simple-card">
        
        <div class="card-icon">
          <i class="fa-solid fa-database"></i>
        </div>

        <div class="big-number">
          <?= number_format($stats['total']) ?>
        </div>

        <div class="subtitle">Total Leads Collected</div>

        <div class="last-update">
          Latest Lead: <?= $latestLead ?>
        </div>

        <a href="leads.php" class="view-btn">View All Leads</a>

      </div>

    </div>
  </div>

  <?php include('components/footer.php'); ?>

</div>

</body>
</html>
