<?php
session_start();

// Clear all session data
session_unset();
session_destroy();

// Optional: delete remember cookies if used
if (isset($_COOKIE['remember_token'])) {
    setcookie('remember_token', '', time() - 3600, '/');
}

// Redirect to login
header("Location: login.php?msg=" . urlencode("Logged out successfully"));
exit();
