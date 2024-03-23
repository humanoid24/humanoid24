<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/list.css">
<title>list film</title>
<?php
session_start();
// Periksa apakah pengguna telah login
if (!isset($_SESSION['user_username'])) {
    header("Location: .../login/login.php"); // Redirect pengguna ke halaman login jika belum login
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
<body>
    <!--Navigasi-->
    <nav class="navi">
        <ul>
            <li>
        <?php
        if($loggedInUser){
          echo'<li><a style="pointer-events: none; 
          cursor:not-allowed; 
          color: #FFDF00;
          text-shadow: 0 0 10px #FFDF00, 0 0 20px #FFDF00, 0 0 30px #FFDF00;
          transition: text-shadow 0.4s ease;">'. $loggedInUser['nama'] .'</a></li>';
        }
        ?>
            </li>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="list.php">List</a></li>
            <li style="float: right;"><a href="../login/loggout.php">Log Out</a></li>
        </ul>
    </nav>

<div class="container">
  <table style="width: 50%;">
  <tr>
    <th colspan="2">List Anime</th>
  </tr>
  <tr>
    <td>1</td>
    <td><a href="video/jojobizzareadventure.php">Jojo Bizzare Adventure</a></td>
  </tr>
  <tr>
    <td>2</td>
    <td><a href="video/gakuenbsr.php">Gakuen Basara</a></td>
  </tr>
  <tr>
    <td>3</td>
    <td><a href="video/TokyoRevengers.php">Tokyo Revengers</a></td>
  </tr>
  <tr>
    <td>4</td>
    <td><a href="video/basaralastprty.php">Sengoku Basara Last Party</a></td>
  </tr>
  <tr>
    <td>5</td>
    <td><a href="video/ShinchouYuusha.php">Shinchou Yuusha</a></td>
  </tr>
  <tr>
    <td>6</td>
    <td><a href="video/bakuganbattle.php">Bakugan Battle Brawlers</a></td>
  </tr>
  <tr>
    <td>7</td>
    <td><a href="video/spyXfamily.php">Spy x Family</a></td>
  </tr>
  <tr>
    <td>8</td>
    <td><a href="video/kanojoMokanojo.php">Kanojo mo Kanojo</a></td>
  </tr>
  <tr>
    <td>9</td>
    <td><a href="video/bakuganvistoria.php">Bakugan New Vestoria</a></td>
  </tr>
  <tr>
    <td>10</td>
    <td><a href="video/shachibato.php">Shachou, Battle no Jikan Desu!</a></td>
  </tr>
</table>
</div>

<div class="bakgrond">
  <table style="width: 50%;">
  <tr>
    <th colspan="3">List Film horror</th>
  </tr>
  <tr>
    <td>1</td>
    <td><a href="horror/finley.php">Finley Short Movie</a></td>
  </tr>
  <tr>
    <td>2</td>
    <td><a href="horror/makmum.php">Makmum</a></td>
  </tr>
  <tr>
    <td>3</td>
    <td><a href="horror/titisansetan.php">Titisan Setan</a></td>
  </tr>
  <tr>
    <td>4</td>
    <td><a href="horror/bisikan_iblis.php">Bisikan Iblis</a></td>
  </tr>
  <tr>
    <td>5</td>
    <td><a href="horror/perjanjiangaib.php">Perjanjian Gaib</a></td>
  </tr>
  <tr>
    <td>6</td>
    <td><a href="horror/pohonkeramat.php">Pohon Keramat</a></td>
  </tr>
  <tr>
    <td>7</td>
    <td><a href="horror/haid2.php">Haid 2 Movie</a></td>
  </tr>
  <tr>
    <td>8</td>
    <td><a href="horror/magrib.php">Waktu Magrib Full Movie</a></td>
  </tr>
  <tr>
    <td>9</td>
    <td><a href="horror/hompimpa.php">Hompimpa</a></td>
  </tr>
  <tr>
    <td>10</td>
    <td><a href="horror/perjamuan.php">Perjamuan Iblis</a></td>
  </tr>
</table>
    </div>
    <script>
    let slideIndex = 0;
    showSlides();
    
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
    </script>
</body>
</html>