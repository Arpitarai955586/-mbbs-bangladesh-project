<?php
include('../backend/config.php');

$site = $_GET['site'] ?? '';
$search = trim($_GET['search'] ?? '');
$program = trim($_GET['program'] ?? '');
$from = $_GET['from'] ?? '';
$to = $_GET['to'] ?? '';

$sql = "SELECT * FROM leads WHERE site_name = :site";
$params = [':site' => $site];

if ($search) {
  $sql .= " AND (name LIKE :s OR phone LIKE :s OR email LIKE :s)";
  $params[':s'] = "%$search%";
}
if ($program) {
  $sql .= " AND program = :p";
  $params[':p'] = $program;
}
if ($from && $to) {
  $sql .= " AND DATE(created_at) BETWEEN :f AND :t";
  $params[':f'] = $from;
  $params[':t'] = $to;
}

$sql .= " ORDER BY id DESC";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>
