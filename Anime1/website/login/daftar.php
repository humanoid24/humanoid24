<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="login.css">
    <?php
    session_start(); 
    ?>
</head>
<body>
    <div class="container">
        <h1>Daftar</h1>
        <form action="daftarconfig.php" method="post" id="daftarform">
            <?php
            if (isset($_SESSION['error_message'])) {
                echo '<p class="error" style="color: red;">' . $_SESSION['error_message'] . '</p>';
                unset($_SESSION['error_message']); // Hapus pesan setelah ditampilkan
                echo '<script>hideErrorMessage();</script>'; // Panggil fungsi JavaScript untuk menyembunyikan pesan
            
            }
            ?>
            <label>Nama Lengkap</label>
            <input type="text" name="nama" id="nama" value="<?php echo isset($_SESSION['nama']) ? $_SESSION['nama'] : ''; ?>" required><br>
            <label>Username</label>
            <input type="text" name="username" id="username" value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>"required><br>
            <label>Password</label>
            <input type="password" name="password" id="password" value="<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : ''; ?>"required><br>
            <label>Konfirmasi Password</label>
            <input type="password" name="konfirmasi_password" id="konfirmasi_password" value="<?php echo isset($_SESSION['konfirmasi_password']) ? $_SESSION['konfirmasi_password'] : ''; ?>"required><br>
            <label>No Telepon</label>
            <input type="text" name="no_telepon" id="no_telepon" value="<?php echo isset($_SESSION['no_telepon']) ? $_SESSION['no_telepon'] : ''; ?>"required><br>
            <button type="submit" value="daftar">Daftar</button>
            <br>
            <br>
            <p style="color :white;">Sudah Punya Akun?<a href="login.php">Login</a></p>
        </form>
    </div>

    <script>
        // Fungsi untuk menyembunyikan pesan kesalahan setelah 3 detik
        function hideErrorMessage() {
            var errorElement = document.querySelector('.error');
            if (errorElement) {
                setTimeout(function() {
                    errorElement.style.display = 'none';
                }, 3000); // 3000 milidetik (3 detik)
            }
        }
            // Panggil fungsi saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function () {
        hideErrorMessage();
    });
    </script>
    <!-- <script>
    var errorpesan =document.getElementById("usernameterdaftar");
    if(errorpesan){
        setTimeout(function(){
            errorpesan.style.display = "none";
        }, 5000);
    }
    var failed =document.getElementById("password_salah");
    if(failed){
        setTimeout(function(){
            failed.style.display = "none";
        }, 5000);
    }
</script> -->
</body>
</html>