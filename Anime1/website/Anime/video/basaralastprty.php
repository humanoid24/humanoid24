<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sengoku Basara Last Party</title>
    <link rel="stylesheet" href="css/basaralstprty.css">
    <style>
    /*button episode*/
.grid{
    display: grid;
    position: relative;
    width: auto;
    height: auto;
    grid-template-columns: auto auto auto auto auto auto auto auto auto auto;
    gap: 10px;
    background-color: green;
    padding: 10px;
    left: 3px;
    top: 10px;

}
.grid button{
    width: 100px;
    height: 50px;
    background-color: white;
    color: black;
    border: none;
    cursor: pointer;
    border-radius: 8px;
}
button:hover{
    background-color: #8a0800;
}
button:active {
    background-color: #8a0800;
}
    </style> 
    <?php
    session_start();
    // Periksa apakah pengguna telah login
    if (!isset($_SESSION['user_username'])) {
        header("Location: login.php"); // Redirect pengguna ke halaman login jika belum login
        exit();
    }
    // Baca data pengguna dari file JSON
    $users = json_decode(file_get_contents('../../login/users.json'), true);
    // Temukan data pengguna berdasarkan username
    $loggedInUser = null;
    foreach ($users as $user) {
        if ($user['username'] === $_SESSION['user_username']) {
            $loggedInUser = $user;
            break;
        }
    }
    
?>
</head>
<body>
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
            <li><a href="../index.php">Home</a></li>
            <li><a href="../about.php">About</a></li>
            <li><a href="../list.php">List</a></li>
            <li style="float: right;"><a href="../../login/loggout.php">Log Out</a></li>
        </ul>
    </nav>
    <div class="gkuen">
        <iframe src="https://www.youtube.com/embed/HzMSP57VVZY?si=KDJJxPmXybvidsrg" frameborder="0" allowfullscreen="true"></iframe>
            
        <!--<div class="mySlides ">
            <img src="https://static.hidive.com/titles/GBS/GBS_01_KEY_1200x450.jpg" alt="">
        </div>
        <div class="mySlides">
            <img src="https://pic-bstarstatic.akamaized.net/ugc/eb83a5d5cea3e09099b93747e0316d4d.jpeg" alt="">
        </div>
        <div class="mySlides">
            <img src="https://image.tmdb.org/t/p/w1280/3nxQRGb72TJx6eSGArmaLYyCcHc.jpg" alt="">
        </div>
        <div class="mySlides">
            <img src="https://upload.wikimedia.org/wikipedia/id/4/46/Jujutsu_kaisen.jpg" alt="">
        </div>
        <div class="mySlides">
            <img src="https://m.media-amazon.com/images/M/MV5BYjY4MDU2YjMtNzY1MC00ODg1LWIwMzYtMWE5YTA3YTI4ZjMxXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_FMjpg_UX1000_.jpg" alt="">
        </div>-->
    </div>

    <div class="video-description">
        <p>Sengoku Basara last party</p>
    </div>

    <div class="Rekomendasifilm">
        <p>Rekomendasi Anime</p>
        <div class="gridvideo">
            <div class="griditem">
            <a href="jojobizzareadventure.php"><img src="https://www.greenscene.co.id/wp-content/uploads/2021/05/Jojo-Bizzare-696x385.jpg" alt="jojo">
            <a href="jojobizzareadventure.php">Jojo Bizzare Adventure</a>
            </div>
            <div class="griditem">
                <a href="bakuganbattle.php"><img src="https://m.media-amazon.com/images/M/MV5BNDY3MGI5MjctMGZhYS00ZTViLThiYzktOTkxMDhmZDk3YTcyXkEyXkFqcGdeQXVyNDgyODgxNjE@._V1_FMjpg_UX1000_.jpg" alt="Bakugan Battle Brawlers">
                <a href="bakuganbattle.php">Bakugan Battle Brawlers</a>
            </div>
            <div class="griditem">
                <a href="basaralastprty.php"><img src="https://image.tmdb.org/t/p/w1280/3nxQRGb72TJx6eSGArmaLYyCcHc.jpg" alt="Basara Last Party"></a>
                <a href="basaralastprty.php">Basara Last Party</a>
            </div>
            <div class="griditem">
                <a href="TokyoRevengers.php"><img src="https://m.media-amazon.com/images/M/MV5BODk1NWI5YjMtOGQ4Ni00MWQ0LWI5YTUtMzc1ZmU2MGQzM2RjXkEyXkFqcGdeQXVyMTQyMTMwOTk0._V1_.jpg" alt="Tokyo Revengers">
                <a href="TokyoRevengers.php">Tokyo Revengers</a>
            </div>
            <div class="griditem">
                <a href="ShinchouYuusha.php"><img src="https://cdn.myanimelist.net/s/common/store/cover/9068/463102a5e658a66cbb9f8078b29a3320e7385b5c0dd7d1973e8e82677cf6b522/l.jpg" alt="Shinchou Yuusha">
                <a href="ShinchouYuusha.php">Shinchou Yuusha</a>
            </div>
            <div class="griditem">
                <a href="spyXfamily.php"><img src="https://cdn0-production-images-kly.akamaized.net/wQd3McgbupEseI9b6XQAjiFfBF8=/800x1066/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3998604/original/077948100_1650275092-MV5BZmY2MDYxMjAtNDFmNS00YmY5LWJhMTItMDZkZGNkMjg5ODJiXkEyXkFqcGdeQXVyODMyNTM0MjM_._V1_.jpg" alt="Anya">
                <a href="spyXfamily.php">Spy X Family</a>
            </div>
            <div class="griditem">
                <a href="ShinchouYuusha.php"><img src="https://th.bing.com/th/id/OIP.uMay7sjT4_QtYPSV01dukQHaKf?rs=1&pid=ImgDetMain" alt="Kanojo mo Kanojo">
                <a href="ShinchouYuusha.php">Kanojo mo Kanojo</a>
            </div>
            <div class="griditem">
                <a href="bakuganvistoria.php"><img src="https://e1.pxfuel.com/desktop-wallpaper/770/160/desktop-wallpaper-watch-bakugan-battle-brawlers-bakugan-battle-brawlers.jpg" alt="Bakugan New Vestoria">
                <a href="bakuganvistoria.php">Bakugan New Vestoria</a>
            </div>
            <div class="griditem">
                <a href="shachibato.php"><img src="https://th.bing.com/th/id/OIP.sYwuA71BqmMdEHBkex0_BQHaKo?rs=1&pid=ImgDetMain" alt="shacou">
                <a href="shachibato.php">Shachou, Battle no Jikan Desu!</a>
            </div>
            <div class="griditem">
                <a href="gakuenbsr.php"><img src="https://static.hidive.com/titles/GBS/GBS_01_KEY_1200x450.jpg" alt="Gakuen Basara">
                <a href="gakuenbsr.php">Gakuen Basara</a>
            </div>
        </div>
    </div>
    <div class="Rekomendasifilm">
        <p>Rekomendasi Film Horror</p>
    </div>
    <div class="gridvideo">
        <div class="griditem">
            <a href="../horror/finley.php"><img src="https://m.media-amazon.com/images/M/MV5BMWQ5YzgxYTUtOGQyNi00NWQ5LWFjYTItM2M1MTRjNTkwMDcxXkEyXkFqcGdeQXVyNjg4ODgxNDc@._V1_FMjpg_UX1000_.jpg" alt="">
            <a href="../horror/finley.php">Finley</a>
        </div>
        <div class="griditem">
            <a href="../horror/titisansetan.php"><img src="https://rakcer.id/wp-content/uploads/2023/11/Poster-Titisan-Setan-2018.jpg" alt=""></a>
            <a href="../horror/titisansetan.php">Titisan Setan</a>
        </div>
        <div class="griditem">
            <a href="../horror/makmum.php"><img src="https://assets-a1.kompasiana.com/items/album/2019/08/21/h-ho00000578-5d5c8b140d82300d641edb12.jpg" alt=""></a>
            <a href="../horror/makmum.php">Makmum</a>
        </div>
        <div class="griditem">
            <a href="../horror/perjanjiangaib.php"><img src="https://upload.wikimedia.org/wikipedia/id/thumb/b/bf/Perjanjian_Gaib_%282023%29.jpg/640px-Perjanjian_Gaib_%282023%29.jpg" alt=""></a>
            <a href="../horror/perjanjiangaib.php">Perjanjian Gaib</a>
        </div>
        <div class="griditem">
            <a href="../horror/pohonkeramat.php"><img src="https://awsimages.detik.net.id/customthumb/2015/02/02/229/pohon.jpg?w=600&q=90" alt=""></a>
            <a href="../horror/pohonkeramat.php">Pohon Keramat</a>
        </div>
        <div class="griditem">
            <a href="../horror/haid2.php"><img src="https://i.ytimg.com/vi/L4g5X0FE_tI/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLDwPp74NmuVm5qGWFM-STK-WKNs5Q" alt=""></a>
            <a href="../horror/haid2.php">Haid 2</a>
        </div>
        <div class="griditem">
            <a href="../horror/magrib.php"><img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/jawapos/2023/02/Film-Waktu-Maghrib.jpg" alt=""></a>
            <a href="../horror/magrib.php">Waktu Magrib Full Movie</a>
        </div>
        <div class="griditem">
            <a href="../horror/sesat.php"><img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/06/24/Screenshot_20230624-184836_Instagram-2857002028.jpg" alt=""></a>
            <a href="../horror/sesat.php">Sesat</a>
        </div>
        <div class="griditem">
            <a href="../horror/hompimpa.php"><img src="https://pic-bstarstatic.akamaized.net/ugc/9738210b066e851dfdf113f3f7ccdf32.jpg" alt=""></a>
            <a href="../horror/hompimpa.php">Hompimpa Horror</a>
        </div>
        <div class="griditem">
            <a href="../horror/perjamuan.php"><img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/139/2023/11/19/Untitled-4044184574.jpg" alt=""></a>
            <a href="../horror/perjamuan.php">Perjamuan Iblis</a>
        </div>
    </div>
</body>

<script>
    let slideIndex = 0;
    showSlides();

    function showSlides(){
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++){
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 5000);
    }
</script>
</html>