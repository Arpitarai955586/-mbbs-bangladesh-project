<?php
include('site_identity.php');

$name     = htmlspecialchars($_GET['name'] ?? 'Student');
$program  = htmlspecialchars($_GET['program'] ?? 'MBA/PGDM');
$site     = htmlspecialchars($_GET['site'] ?? $site_identity['site_name']);
$phone    = preg_replace('/\D/', '', $site_identity['phone']); // cleaned
$waLink   = $site_identity['whatsapp'] ?? "https://wa.me/$phone";

$waMessage = rawurlencode("Hello, I have enquired on {$site} and wanted counselling for my admission in {$program}. Kindly assist me further.");
$waFinal   = "{$waLink}?text={$waMessage}";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You | <?= $site ?></title>
<?php
include('components/links.php');?>
  <style>
    .thankyouSection {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: var(--color-body);
      padding: 20px;
    }

    .thankyouBox {
      background: var(--color-white);
      border-radius: 18px;
      padding: 50px 40px;
      box-shadow: 0 8px 30px rgba(0,0,0,0.08);
      max-width: 600px;
      width: 100%;
      text-align: center;
      position: relative;
    }

    .thankyouLogo {
      width: 100px;
      margin-bottom: 20px;
      background: var(--color-primary);
      width: 200px;
      padding: 5px;border-radius: 10px;
    }

    .thankyouTitle {
      font-family: var(--font-heading);
      font-weight: 700;
      color: var(--color-primary);
      font-size: 2rem;
      margin-bottom: 12px;
    }

    .thankyouMessage {
      color: var(--color-default-two);
      font-size: 1rem;
      margin-bottom: 35px;
      line-height: 1.6;
    }

    .thankyouActions {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 15px;
      flex-wrap: wrap;
    }

    .btnWhatsApp {
      background: var(--whatsapp);
      color: #fff;
      border-radius: 50px;
      padding: 12px 26px;
      font-weight: 600;
      text-decoration: none;
      box-shadow: 0 4px 10px rgba(43,184,38,0.3);
      transition: var(--smooth);
    }

    .btnWhatsApp:hover {
      background: var(--whatsapphover);
      transform: translateY(-3px);
    }

    .btnCall {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: inline-flex;
      justify-content: center;
      align-items: center;
      background: var(--color-secondary);
      color: #fff;
      font-size: 1.2rem;
      text-decoration: none;
      box-shadow: 0 4px 10px rgba(0,23,82,0.25);
      transition: var(--smooth);
    }

    .btnCall:hover {
      background: var(--color-primary);
      transform: scale(1.1);
    }

    .thankyouFooter {
      margin-top: 30px;
      font-size: 0.9rem;
      color: var(--color-gray);
    }

    .thankyouFooter strong {
      color: var(--color-heading);
    }
  </style>
</head>

<body>
  <section class="thankyouSection">
    <div class="thankyouBox">
      <img src="<?= $site_identity['logo']; ?>" alt="<?= $site ?>" class="thankyouLogo">

      <h1 class="thankyouTitle">Thank You, <?= $name ?>!</h1>
      <p class="thankyouMessage">
        Your application for <strong><?= $program ?></strong> at <strong><?= $site ?></strong> has been received.<br>
        Our team will reach out to you shortly for further guidance.
      </p>

      <div class="thankyouActions">
        <a href="<?= $waFinal ?>" target="_blank" class="btnWhatsApp">
          💬 WhatsApp
        </a>
        <a href="tel:<?= $phone ?>" class="btnCall" title="Call Now">
          📞
        </a>
      </div>

      <div class="thankyouFooter">
        © <?= date('Y'); ?> <strong><?= $site ?></strong> — All Rights Reserved
      </div>
    </div>
  </section>
</body>
</html>
