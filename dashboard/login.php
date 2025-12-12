<?php
include('../backend/config.php');
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $emailOrUser = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Fetch user by email OR username
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? OR name = ? LIMIT 1");
    $stmt->execute([$emailOrUser, $emailOrUser]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {

        // 🟢 Secure password verify
        if (password_verify($password, $user['password'])) {

            // Success → save session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];

            header("Location: index.php");
            exit;

        } else {
            $error = "⚠️ Incorrect password!";
        }

    } else {
        $error = "🚫 No user found with that email or username.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('components/links.php'); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | MBA PGDM Portal</title>

  <style>
    body {
      background: #f7f9fb;
      font-family: "Poppins", sans-serif;
    }
    .login-wrapper {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .login-card {
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }
    .login-card h4 {
      font-weight: 600;
      text-align: center;
      margin-bottom: 15px;
    }
    .pw-wrapper {
      position: relative;
    }
    .pw-input {
      width: 100%;
      padding-right: 40px;
    }
    .pw-toggle-btn {
      position: absolute;
      right: 10px;
      top: 38px;
      cursor: pointer;
      user-select: none;
      font-size: 20px;
      opacity: 0.7;
      transition: opacity 0.2s ease;
    }
    .pw-toggle-btn:hover {
      opacity: 1;
    }
    .alert {
      font-size: 14px;
      padding: 10px;
    }
    .alert-danger {
      background-color: #ffe3e3;
      border: 1px solid #ffb2b2;
      color: #d32f2f;
      border-radius: 6px;
    }
    .admin-btn {
      margin-top: 10px;
      background: #212529;
      border: none;
      width: 100%;
      color: #fff;
      padding: 10px;
      border-radius: 8px;
      font-weight: 500;
      transition: 0.2s;
    }
    .admin-btn:hover {
      background: #000;
    }
  </style>
</head>

<body>
  <div class="login-wrapper">
    <form method="post" class="login-card" id="loginForm">
      <h4>Welcome Back 🙌</h4>
      <p class="text-muted small text-center mb-4">Login to your MBA PGDM Portal</p>

      <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
      <?php endif; ?>

      <div class="mb-3">
        <label class="form-label">Full Name / Username</label>
        <input type="text" name="email" id="emailField" class="form-control" placeholder="Enter email or username" required>
      </div>

      <div class="mb-3 pw-wrapper">
        <label class="form-label">Password</label>
        <input type="password" name="password" id="passwordInput" class="form-control pw-input" placeholder="Enter password" required>
        <span id="togglePw" class="pw-toggle-btn">🙈</span>
      </div>

      <button type="submit" class="btn btn-primary w-100">Sign In</button>
    </form>
  </div>

  <!-- ✅ JS for Password Toggle -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const pwInput = document.getElementById("passwordInput");
      const toggleBtn = document.getElementById("togglePw");

      toggleBtn.addEventListener("click", function () {
        const isPassword = pwInput.type === "password";
        pwInput.type = isPassword ? "text" : "password";
        toggleBtn.textContent = isPassword ? "👁️" : "🙈";
      });
    });
  </script>
</body>
</html>
