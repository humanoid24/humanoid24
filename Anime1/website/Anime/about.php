<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
    <?php
session_start();
// Periksa apakah pengguna telah login
if (!isset($_SESSION['user_username'])) {
    header("Location: login.php"); // Redirect pengguna ke halaman login jika belum login
    exit();
}
// Baca data pengguna dari file JSON
$users = json_decode(file_get_contents('../login/users.json'), true);
// Temukan data pengguna berdasarkan username
$loggedInUser = null;
foreach ($users as $user) {
    if ($user['username'] === $_SESSION['user_username']) {
        $loggedInUser = $user;
        break;
    }
}
?>
    <style>
        body {
            font-family: Verdana, sans-serif;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.9)), url(https://cdn1.katadata.co.id/media/images/thumb/2022/09/22/situs_nonton_film_gratis_legal-2022_09_22-16_59_54_44a50f07b4bdc57740901280f9eddaf5_960x640_thumb.jpg);
            background-size: cover;
            background-position: center;
            color: white;
            margin: 0;
        }

        
        #about-section {
            max-width: 800px;
            margin: 0 auto;
            color: white;
        }
        /* Group Navigation Bar*/
.navi{
    position: relative;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
    display: inline-block;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: white;
}
    </style>
</head>
<body>
<nav class="navi">
        <ul>
        <?php
        if($loggedInUser){
          echo'<li><a style="pointer-events: none; 
          cursor:not-allowed; 
          color: #FFDF00;
          text-shadow: 0 0 10px #FFDF00, 0 0 20px #FFDF00, 0 0 30px #FFDF00;
          transition: text-shadow 0.4s ease;">'. $loggedInUser['nama'] .'</a></li>';
        }
        ?>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="list.php">List</a></li>
        <li style="float: right;"><a href="../login/loggout.php">Log Out</a></li>
        </ul>
        </nav>
    <div id="about-section">
        <h1>Tentang Situs Film Kami</h1>
        <p>Selamat datang di sudut internet kami yang didedikasikan untuk film! Kami sangat antusias tentang dunia perfilman dan berkomitmen untuk memberikan informasi, ulasan, dan wawasan terbaru mengenai dunia perfilman.</p>
        
        <h2>Misi Kami</h2>
        <p>Di Film Dewasa misi kami adalah menyediakan platform bagi para penggemar film untuk menemukan, mendiskusikan, dan merayakan keajaiban layar perak. Baik Anda seorang penonton film casual atau seorang pencinta film, kami memiliki sesuatu untuk semua orang.</p>
        
        <h2>Apa yang Anda Temukan di Sini</h2>
        <p>Jelajahi situs kami untuk:</p>
            <p>Ulasan film terkini</p>
            <p>Wawancara eksklusif dengan pembuat film</p>
            <p>Melihat di balik layar perilisan terbaru</p>
            <p>Daftar kurasi dan rekomendasi</p>

        <p>Terima kasih telah menjadi bagian dari komunitas pecinta film kami!</p>
    </div>
</body>
</html>
