<?php
// logout.php
session_start();

// Hapus informasi login dari session
unset($_SESSION['user_id']);
unset($_SESSION['username']);

// Hancurkan sesi
session_destroy();

// Redirect atau tindakan lain setelah logout

$redirect_url = isset($_SESSION['redirect_url']) ? $_SESSION['redirect_url'] : 'index.php';

header("Location: $redirect_url");
exit();
?>