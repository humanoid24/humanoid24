<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <?php
        session_start();
        if(isset($_SESSION['succes_message'])){
            echo'<div class="succes_message" id="sukses" style="color: blue;">'. $_SESSION['succes_message'] .'</div>';
            unset($_SESSION['succes_message']);
        } 
        ?>
        <h1>Login</h1>
        <form action="loginconfig.php" method="post">
            <label>Username</label>
            <input type="text" name="username" id="username" required><br>
            <label>Password</label>
            <input type="password" name="password" id="password" required><br>
            <button type="submit" value="Masuk">Log in</button></a>
            <br>
            <br>
            <p style="color: white;">Belum Punya Akun?<a href="daftar.php">Daftar</a></p>
            <a href="../../sampul.html">Kembali ke Halaman</a>
            <?php
if (isset($_GET['error'])) {
    echo '<p id="pesan" style="color: red;">Login Gagal. ID atau password salah.</p>';
}
?>
        </form>
    </div>



    

<script>
    var errorpesan =document.getElementById("pesan");
    if(errorpesan){
        setTimeout(function(){
            errorpesan.style.display = "none";
        }, 5000);
    }
    var succes =document.getElementById("sukses");
    if(succes){
        setTimeout(function(){
            succes.style.display = "none";
        }, 5000);
    }
</script>
</body>
</html>