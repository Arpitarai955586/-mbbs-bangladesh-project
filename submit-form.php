<?php
// Strict mode for debugging (optional)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load DB + Email configuration
require_once __DIR__ . '/backend/config.php';
require_once __DIR__ . '/backend/mail-config.php';

// Ensure POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die(json_encode(["status" => "error", "message" => "Invalid request"]));
}

try {
    // Collect & sanitize inputs
    $name      = trim($_POST['name'] ?? '');
    $email     = trim($_POST['email'] ?? '');
    $phoneRaw  = trim($_POST['phone'] ?? '');
    $neet_rank = trim($_POST['neet_rank'] ?? '');
    $city      = trim($_POST['city'] ?? '');
    $stream    = trim($_POST['stream'] ?? '');
    $submitted_at = date('Y-m-d H:i:s');

    // Basic validations
    if ($name === '')   throw new Exception("Name is required.");
    if ($phoneRaw === '') throw new Exception("Phone number is required.");

    // Clean phone
    $phone = preg_replace('/\D+/', '', $phoneRaw);
    if (strlen($phone) < 7) throw new Exception("Invalid phone number.");

    // Validate email (optional)
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Invalid email format.");
    }

    // If empty stream → default
    if (empty($stream)) {
        $stream = "General Medicine";
    }

    // Insert into DB
    $stmt = $pdo->prepare("
        INSERT INTO leads (name, email, phone, neet_rank, city, stream, submitted_at)
        VALUES (:name, :email, :phone, :neet_rank, :city, :stream, :submitted_at)
    ");

    $stmt->execute([
        ':name' => $name,
        ':email' => $email ?: null,
        ':phone' => $phone,
        ':neet_rank' => $neet_rank ?: null,
        ':city' => $city ?: null,
        ':stream' => $stream,
        ':submitted_at' => $submitted_at
    ]);

    // WhatsApp Auto-Message Link
    $waMsg = rawurlencode("Hello $name, thanks for enquiring about MBBS Admission. We will contact you shortly!");
    $waLink = "https://wa.me/$phone?text=$waMsg";

    // Email Body
    $emailBody = "
    <div style='font-family:Poppins,sans-serif;background:#f7f7f7;padding:20px;'>
      <div style='max-width:650px;margin:auto;background:#fff;padding:20px;border-radius:10px;'>
        <h2 style='color:#015ea3;'>New MBBS Lead</h2>
        <p><strong>Name:</strong> {$name}</p>
        ".(!empty($email) ? "<p><strong>Email:</strong> {$email}</p>" : "")."
        <p><strong>Phone:</strong> {$phoneRaw}</p>
        ".(!empty($neet_rank) ? "<p><strong>NEET Rank:</strong> {$neet_rank}</p>" : "")."
        ".(!empty($city) ? "<p><strong>City:</strong> {$city}</p>" : "")."
        <p><strong>Preferred Stream:</strong> {$stream}</p>
        <hr>
        <p>
          <a href='{$waLink}' style='background:#25D366;color:#fff;padding:10px 18px;border-radius:5px;text-decoration:none;'>WhatsApp Now</a>
        </p>
      </div>
    </div>";

    // Send Email
    sendMail("New MBBS Lead - $name", $emailBody);

    // Redirect to thank-you
    header("Location: thankyou.php?" . http_build_query([
        'name' => $name,
        'phone' => $phone,
        'stream' => $stream,
    ]));
    exit;

} catch (Exception $e) {
    http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => $e->getMessage()
    ]);
    exit;
}
?>
