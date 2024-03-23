<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<title>Home</title>
<?php
session_start();
// Periksa apakah pengguna telah login
// if (!isset($_SESSION['user_username'])) {
//     header("Location: .../login/login.php"); // Redirect pengguna ke halaman login jika belum login
//     exit();
// }
// Baca data pengguna dari file JSON
$users = json_decode(file_get_contents('../login/users.json'), true);
// Temukan data pengguna berdasarkan username
$loggedInUser = null; // Variabel ini akan digunakan untuk menyimpan data pengguna yang saat ini sedang masuk, jika ada.
foreach ($users as $user) {
    if ($user['username'] === $_SESSION['user_username']) {
        $loggedInUser = $user; // Jika ditemukan, data pengguna tersebut disimpan dalam $loggedInUser
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
        <!--Slide Show Gambar-->
    <div class="slideshow-container">
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="https://static.hidive.com/titles/GBS/GBS_01_KEY_1200x450.jpg" width="100%">
      <div class="text">Gakuen Basara</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="https://jojo-news.com/wp-content/uploads/2023/09/JoJoNakedFamousDenim-1024x410.jpg" width="100%">
      <div class="text">Jojo Bizzare Adventure</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="https://www.rakuten.ne.jp/gold/bourgeonner/img/main/bn-tr.jpg" width="100%">
      <div class="text">Tokyo Revengers</div>
    </div>
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentslide(1)"></span> 
      <span class="dot" onclick="currentslide(2)"></span> 
      <span class="dot" onclick="currentslide(3)"></span> 
    </div>
    <!--Rekomendasi Anime-->
    <div class="title">
      <h3>Rekomendasi Anime</h3>
    </div>
    <div class="thumbnail">
      <div>
        <a href="video/jojobizzareadventure.php"><img src="https://www.greenscene.co.id/wp-content/uploads/2021/05/Jojo-Bizzare-696x385.jpg" alt="Jojo Bizzare Adventure">
        <a href="horror/video/jojobizzareadventure.php">Jojo Bizzare Adventure</a>
      </div>
      <div>
        <a href="video/gakuenbsr.php"><img src="https://static.hidive.com/titles/GBS/GBS_01_KEY_1200x450.jpg" alt="Gakuen Basara"></a>
        <a href="video/gakuenbsr.php">Gakuen Basara</a>
      </div>
      <div>
        <a href="video/TokyoRevengers.php"><img src="https://m.media-amazon.com/images/M/MV5BODk1NWI5YjMtOGQ4Ni00MWQ0LWI5YTUtMzc1ZmU2MGQzM2RjXkEyXkFqcGdeQXVyMTQyMTMwOTk0._V1_.jpg" alt="Tokyo Revengers">
        <a href="video/TokyoRevengers.php">Tokyo Revengers</a>
      </div>
      <div>
        <a href="video/basaralastprty.php"><img src="https://image.tmdb.org/t/p/w1280/3nxQRGb72TJx6eSGArmaLYyCcHc.jpg" alt="Sengoku Basara Last Party"></a>
        <a href="video/basaralastprty.php">Sengoku Basara Last Party</a>
      </div>
      <div>
        <a href="video/ShinchouYuusha.php"><img src="https://cdn.myanimelist.net/s/common/store/cover/9068/463102a5e658a66cbb9f8078b29a3320e7385b5c0dd7d1973e8e82677cf6b522/l.jpg" alt="Shinchou Yuusha">
        <a href="video/ShinchouYuusha.php">Shinchou Yuusha</a>
      </div>
      <div>
        <a href="video/bakuganbattle.php"><img src="https://m.media-amazon.com/images/M/MV5BNDY3MGI5MjctMGZhYS00ZTViLThiYzktOTkxMDhmZDk3YTcyXkEyXkFqcGdeQXVyNDgyODgxNjE@._V1_FMjpg_UX1000_.jpg" alt="Swort Art Online"></a>
        <a href="video/bakuganbattle.php">Bakugan Battle Brawlers</a>
      </div>
      <div>
        <a href="video/spyXfamily.php"><img src="https://cdn0-production-images-kly.akamaized.net/wQd3McgbupEseI9b6XQAjiFfBF8=/800x1066/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3998604/original/077948100_1650275092-MV5BZmY2MDYxMjAtNDFmNS00YmY5LWJhMTItMDZkZGNkMjg5ODJiXkEyXkFqcGdeQXVyODMyNTM0MjM_._V1_.jpg" alt="Anya">
        <a href="video/spyXfamily.php">Spy x Family</a>
      </div>
      <div>
        <a href="video/kanojoMokanojo.php"><img src="https://th.bing.com/th/id/OIP.uMay7sjT4_QtYPSV01dukQHaKf?rs=1&pid=ImgDetMain" alt="Kanojo mo Kanojo">
        <a href="video/kanojoMokanojo.php">Kanojo mo Kanojo</a>
      </div>
      <div>
        <a href="video/bakuganvistoria.php"><img src="https://e1.pxfuel.com/desktop-wallpaper/770/160/desktop-wallpaper-watch-bakugan-battle-brawlers-bakugan-battle-brawlers.jpg" alt=""></a>
        <a href="video/bakuganvistoria.php">Bakugan New Vestoria</a>
      </div>
      <div>
        <a href="video/shachibato.php"><img src="https://th.bing.com/th/id/OIP.sYwuA71BqmMdEHBkex0_BQHaKo?rs=1&pid=ImgDetMain" alt="Shachou">
        <a href="video/shachibato.php">Shachou, Battle no Jikan Desu!</a>
      </div>
    </div>
    <div class="title1">
      <h3>Film Horor</h3>
    </div>
    <div class="thumbnail">
      <div>
        <a href="horror/finley.php"><img src="https://m.media-amazon.com/images/M/MV5BMWQ5YzgxYTUtOGQyNi00NWQ5LWFjYTItM2M1MTRjNTkwMDcxXkEyXkFqcGdeQXVyNjg4ODgxNDc@._V1_FMjpg_UX1000_.jpg" alt="">
        <a href="horror/finley.php">Finley Short Movie</a>
      </div>
      <div>
        <a href="horror/makmum.php"><img src="https://assets-a1.kompasiana.com/items/album/2019/08/21/h-ho00000578-5d5c8b140d82300d641edb12.jpg" alt=""></a>
        <a href="horror/makmum.php">Makmum</a>
      </div>
      <div>
        <a href="horror/titisansetan.php"><img src="https://rakcer.id/wp-content/uploads/2023/11/Poster-Titisan-Setan-2018.jpg" alt=""></a>
        <a href="horror/titisansetan.php">Titisan Setan</a>
      </div>
      <div>
        <a href="horror/bisikan_iblis.php"><img src="https://montasefilm.com/wp-content/uploads/2018/09/Bisikan-Iblis-2018.jpg" alt=""></a>
        <a href="horror/bisikan_iblis.php">Bisikan Iblis</a>
      </div>
      <div>
        <a href="horror/perjanjiangaib.php"><img src="https://upload.wikimedia.org/wikipedia/id/thumb/b/bf/Perjanjian_Gaib_%282023%29.jpg/640px-Perjanjian_Gaib_%282023%29.jpg" alt=""></a>
        <a href="horror/perjanjiangaib.php">Perjanjian Gaib</a>
      </div>
      <div>
        <a href="horror/pohonkeramat.php"><img src="https://awsimages.detik.net.id/customthumb/2015/02/02/229/pohon.jpg?w=600&q=90" alt=""></a>
        <a href="horror/pohonkeramat.php">Pohon Keramat</a>
      </div>
      <div>
        <a href="horror/haid2.php"><img src="https://i.ytimg.com/vi/L4g5X0FE_tI/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLDwPp74NmuVm5qGWFM-STK-WKNs5Q" alt=""></a>
        <a href="horror/haid2.php">Haid 2 Movie</a>
      </div>
      <div>
        <a href="horror/magrib.php"><img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/jawapos/2023/02/Film-Waktu-Maghrib.jpg" alt=""></a>
        <a href="horror/magrib.php">Waktu Magrib Full Movie</a>
      </div>
      <div>
        <a href="horror/hompimpa.php"><img src="https://pic-bstarstatic.akamaized.net/ugc/9738210b066e851dfdf113f3f7ccdf32.jpg" alt=""></a>
        <a href="horror/hompimpa.php">Hompimpa</a>
      </div>
      <div>
        <a href="horror/perjamuan.php"><img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/139/2023/11/19/Untitled-4044184574.jpg" alt=""></a>
        <a href="horror/perjamuan.php">Perjamuan Iblis</a>
      </div>
    </div>

    <!--Waktu pergantian slide-->
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
      setTimeout(showSlides, 5000); // Change image every 5 seconds
    }
    </script>
    
    </body>
    </html> 