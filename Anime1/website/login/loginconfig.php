<?php
session_start(); //Memulai atau melanjutkan sesi pada PHP.

// Baca data pengguna dari file JSON
$users = json_decode(file_get_contents('users.json'), true);

// Tangkap data dari formulir
$username = $_POST['username'];
$password = $_POST['password'];

$loggedIn = false;

foreach ($users as $user) {
    if ($user['username'] === $username && password_verify($password, $user['password'])) {
        // Login berhasil
        $loggedIn = true;
        $_SESSION['user_username'] = $username; // Simpan username pengguna dalam sesi
        header("Location:../Anime/index.php"); // Redirect ke halaman dashboard
        exit();
    }
}

if (!$loggedIn) {
    header('Location:login.php?error=1');
    exit();
}
?>
