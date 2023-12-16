<?php
$password = "12345678";

// Hash kata sandi menggunakan algoritma default (bcrypt)
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Tampilkan hasil hash
echo "Password: " . $password . "<br>";
echo "Hashed Password: " . $hashedPassword;
?>
