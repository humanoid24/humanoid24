<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gakuen.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Jojo Bizzare Adventure</title>
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
        <iframe id="videoframe" src="https://www.youtube.com/embed/37jq24L8wQs?si=ltRO_Mj3tYm5o0th" frameborder="0"
        allowfullscreen="true">
        </iframe>
    </div>
    <div class="video-description">
        <p>Jojo Bizzare Adventure Episode 1</p>
    </div>
    <div class="grid">
            <button onclick="changeVideo('37jq24L8wQs?si=ltRO_Mj3tYm5o0th','Jojo Bizzare Adventure Episode 1')">Episode 1</button>
            <button onclick="changeVideo('pMLxbUzeWR0?si=Iy7lWEJbdOxm_cCD','Jojo Bizzare Adventure Episode 2')">Episode 2</button>
            <button onclick="changeVideo('5drjz5Tm61U?si=GBct--qj1UB0nvoy','Jojo Bizzare Adventure Episode 3')">Episode 3</button>
            <button onclick="changeVideo('G_awFtEBnLI?si=04FmR7g2z86iM_yq','Jojo Bizzare Adventure Episode 4')">Episode 4</button>
            <button onclick="changeVideo('CLhxyqCteko?si=SKTXTjje5yC1QT-B','Jojo Bizzare Adventure Episode 5')">Episode 5</button>
            <button onclick="changeVideo('jJJaVr-RDHU?si=sqbOroZiIiD3f5E6','Jojo Bizzare Adventure Episode 6')">Episode 6</button>
            <button onclick="changeVideo('FDU7RoGGMpM?si=B4PGVWqIlck340Un','Jojo Bizzare Adventure Episode 7')">Episode 7</button>
            <button onclick="changeVideo('xv1-t9Kol-U?si=Uzvi_kJwcpHvE8JD','Jojo Bizzare Adventure Episode 8')">Episode 8</button>
            <button onclick="changeVideo('nGRGEH1xyws?si=CZJTVm9JQguW1E5i','Jojo Bizzare Adventure Episode 9')">Episode 9</button>
            <button onclick="changeVideo('MvbJtJYTYqg?si=ZmhlvAUWHHlyC8YR','Jojo Bizzare Adventure Episode 10')">Episode 10</button>
            <button onclick="changeVideo('nB1zUkq2xog?si=MYiAtmY_KIDKu_A5','Jojo Bizzare Adventure Episode 11')">Episode 11</button>
            <button onclick="changeVideo('nB1zUkq2xog?si=rOF8M8T3HqnLUH2M','Jojo Bizzare Adventure Episode 12')">Episode 12</button>
            <button onclick="changeVideo('T04PNIaD5uA?si=23xLOdpYLgwUBpvN','Jojo Bizzare Adventure Episode 13')">Episode 13</button>
            <button onclick="changeVideo('lZHqXKTBT-I?si=fMNv8lncG59Hm5hP','Jojo Bizzare Adventure Episode 14')">Episode 14</button>
            <button onclick="changeVideo('4JP70mVNFig?si=jtecYd_FTAFVfZyB','Jojo Bizzare Adventure Episode 15')">Episode 15</button>
            <button onclick="changeVideo('e2_WPbvX8C4?si=79letot0qS4_HKI1','Jojo Bizzare Adventure Episode 16')">Episode 16</button>
            <button onclick="changeVideo('xIs6DeliFaw?si=J85qdE6OkAX9uXsI','Jojo Bizzare Adventure Episode 17')">Episode 17</button>
            <button onclick="changeVideo('LIiWB-UNT-M?si=MTxWU3p_GkzsilJS','Jojo Bizzare Adventure Episode 18')">Episode 18</button>
            <button onclick="changeVideo('qk487OEpqgY?si=2lZna5kVfMIbLTGD','Jojo Bizzare Adventure Episode 19')">Episode 19</button>
            <button onclick="changeVideo('lxyv6YzesIM?si=8Ujvq2wV2kliQ2oC','Jojo Bizzare Adventure Episode 20')">Episode 20</button>
            <button onclick="changeVideo('gDKa03jOAD8?si=pxYYly20X9Lm4uM5','Jojo Bizzare Adventure Episode 21')">Episode 21</button>
            <button onclick="changeVideo('H7U0P0EPB2Q?si=YyGqi075rNz4ZliZ','Jojo Bizzare Adventure Episode 22')">Episode 22</button>
            <button onclick="changeVideo('ejZtOLQZwu8?si=lyMA0qsrDgSKoaY_','Jojo Bizzare Adventure Episode 23')">Episode 23</button>
            <button onclick="changeVideo('XubpdZMMELs?si=Vimyg3QYmhsTlEb9','Jojo Bizzare Adventure Episode 24')">Episode 24</button>
            <button onclick="changeVideo('kRge7vB7jBM?si=c4_N-N6N2L89tF0z','Jojo Bizzare Adventure Episode 25')">Episode 25</button>
            <button onclick="changeVideo('r9EaWCmd1GM?si=8-nTRnbmFJi0Psrr','Jojo Bizzare Adventure Episode 26')">Episode 26</button>
            
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
    function changeVideo(videoId,description){  
        document.getElementById('videoframe').src='https://www.youtube.com/embed/' + videoId;
        document.querySelector('.video-description p').textContent = description;
    }
</script>
</html>