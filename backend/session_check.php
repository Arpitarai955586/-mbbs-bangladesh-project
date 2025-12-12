<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// if user not logged in, redirect to login
if (empty($_SESSION['user_id'])) {
    $_SESSION['redirect_after_login'] = $_SERVER['REQUEST_URI'] ?? 'index.php';
    header("Location: login.php");
    exit;
}
?>
