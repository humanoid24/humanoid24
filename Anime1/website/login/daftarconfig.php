<?php
session_start(); //Memulai atau melanjutkan sesi pada PHP.

// Memastikan file users.json ada
if (!file_exists('users.json')) {
    file_put_contents('users.json', '[]'); //Memastikan bahwa file 'users.json' ada. Jika tidak, file tersebut akan dibuat dengan isi array JSON kosong.
} 

// Baca data pengguna dari file JSON
$users = json_decode(file_get_contents('users.json'), true); //Membaca data pengguna yang sudah ada dari file 'users.json' dan mengonversinya ke dalam array PHP.

// Tangkap data dari formulir
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); //Menangkap data yang diinputkan oleh pengguna melalui formulir pendaftaran, termasuk nama, username, dan password yang di-hash.

// Memastikan bahwa semua kolom formulir telah diisi dan bahwa password cocok dengan konfirmasi password.
if (!empty($nama) && !empty($username) && !empty($_POST['password']) && $_POST['password'] == $_POST['konfirmasi_password']) {
    // Periksa apakah username sudah ada
    $username_exists = false;
    foreach ($users as $user) {
        if ($user['username'] === $username) {
            $username_exists = true;
            break;
        }
    }
// Jika username belum ada, menambahkan pengguna baru ke array dan menyimpannya ke file 'users.json'
    if (!$username_exists) {
        // Tambahkan pengguna baru ke array
        $newUser = [
            'nama' => $nama,
            'username' => $username,
            'password' => $password
        ];
        $users[] = $newUser;

        // Simpan data pengguna ke file JSON
        file_put_contents('users.json', json_encode($users));
        // Hapus data yang dimasukkan sebelumnya dari sesi (jika ada)
        unset($_SESSION['nama']);
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['konfirmasi_password']);
        unset($_SESSION['no_telepon']);
        // Simpan pesan sukses dalam sesi
        $_SESSION['succes_message'] = "Pendaftaran Telah Berhasil. Silahkan Login";
        //Alihkan pengguna login
        header("location: login.php");
    } else {
        // Simpan Data yang Dimasukan Setelah Login
        $_SESSION['nama'] = $nama;
        $_SESSION['username'] = $username;
        $_SESSION['no_telepon'] = $no_telepon;
        // Simpan Pesan Kesalahan dalam sesi
        $_SESSION['error_message'] = "Username Sudah Ada";
        // Alihkan Pengguna kembali ke daftar
        header("location: daftar.php?error=username_exists");
    }
} else {
    // Simpan Data yang Dimasukan Setelah Login
    $_SESSION['nama'] = $nama;
    $_SESSION['username'] = $username;
    $_SESSION['no_telepon'] = $no_telepon;
    $_SESSION['error_message'] = 'Password Dan Konfirmasi Password tidak cocok';
    header("Location: daftar.php?error=konfirmasi_password");
    exit();
}
?>
