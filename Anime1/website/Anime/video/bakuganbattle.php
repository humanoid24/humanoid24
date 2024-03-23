<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gakuen.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Bakugan Battle Brawlers</title>
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
        <iframe id="videoframe" src="https://www.youtube.com/embed/iLlyPxChcHo?si=XD7QomLgTUBNlj2K" frameborder="0"
        allowfullscreen="true">
        </iframe>
    </div>
    <div class="video-description">
        <p>Bakugan Battle Brawlers Episode 1</p>
    </div>
    <div class="grid">
            <button onclick="changeVideo('iLlyPxChcHo?si=XD7QomLgTUBNlj2K','Bakugan Battle Brawlers Episode 1')">Episode 1</button>
            <button onclick="changeVideo('_dPVwq5f3dw?si=6jchGq-2km_s3cIE','Bakugan Battle Brawlers Episode 2')">Episode 2</button>
            <button onclick="changeVideo('LzuAjEgZLHE?si=xif9wPfCLFnTscjw','Bakugan Battle Brawlers Episode 3')">Episode 3</button>
            <button onclick="changeVideo('A1e3nrfaORk?si=UXVNP9INKCTMrn2o','Bakugan Battle Brawlers Episode 4')">Episode 4</button>
            <button onclick="changeVideo('yVRVtufyZc8?si=ROMAJHEKWvJfkEDz','Bakugan Battle Brawlers Episode 5')">Episode 5</button>
            <button onclick="changeVideo('mUVThntdoCQ?si=KhCI1_CC_XM890_e','Bakugan Battle Brawlers Episode 6')">Episode 6</button>
            <button onclick="changeVideo('kTpz_2fHg1M?si=idX423Yi9vv1QoqY','Bakugan Battle Brawlers Episode 7')">Episode 7</button>
            <button onclick="changeVideo('n9B_gZYl8m8?si=gbHuZxEQ0FzlqF8N','Bakugan Battle Brawlers Episode 8')">Episode 8</button>
            <button onclick="changeVideo('bmGURYY_dHI?si=vHi6bYWs1eFpX6IT','Bakugan Battle Brawlers Episode 9')">Episode 9</button>
            <button onclick="changeVideo('CzrM-qNKfGo?si=5BkEHE4w5PC-YLmc','Bakugan Battle Brawlers Episode 10')">Episode 10</button>
            <button onclick="changeVideo('mpRM0vL1bFA?si=eZhB_wE2JXEhSZXc','Bakugan Battle Brawlers Episode 11')">Episode 11</button>
            <button onclick="changeVideo('5GsA48E_m8I?si=bUsYv8u8zuzK4RRH','Bakugan Battle Brawlers Episode 12')">Episode 12</button>
            <button onclick="changeVideo('Ji8SttjLExk?si=PqqGUDdD2t47kZ_r','Bakugan Battle Brawlers Episode 13')">Episode 13</button>
            <button onclick="changeVideo('2lkqmEbSGCU?si=-D1YsBQDsVEkQQ3K','Bakugan Battle Brawlers Episode 14')">Episode 14</button>
            <button onclick="changeVideo('9s1WWNX-y-Y?si=_3hG_X_3lyQZUK-E','Bakugan Battle Brawlers Episode 15')">Episode 15</button>
            <button onclick="changeVideo('UQerEDl6r9k?si=LWrMUOFukRiuLG9m','Bakugan Battle Brawlers Episode 16')">Episode 16</button>
            <button onclick="changeVideo('XD51pP6XIow?si=WCCCncdpUZ5RYDVR','Bakugan Battle Brawlers Episode 17')">Episode 17</button>
            <button onclick="changeVideo('3_1Z0_EI4gE?si=xr1tn5qt1k6csi4I','Bakugan Battle Brawlers Episode 18')">Episode 18</button>
            <button onclick="changeVideo('fCRKh7zKnFE?si=GA27dFiGFTKRPvj1','Bakugan Battle Brawlers Episode 19')">Episode 19</button>
            <button onclick="changeVideo('BLDL9_kPhno?si=zP5e9j89l0CLq_6k','Bakugan Battle Brawlers Episode 20')">Episode 20</button>
            <button onclick="changeVideo('hcJyHlpTVdY?si=xwKpWs1Tv88JcbQr','Bakugan Battle Brawlers Episode 21')">Episode 21</button>
            <button onclick="changeVideo('8qULCKf0EnY?si=tuxvLBXn3Uz8U3vG','Bakugan Battle Brawlers Episode 22')">Episode 22</button>
            <button onclick="changeVideo('-cKqjyizNPM?si=HH9QAtGWN-TlZSqv','Bakugan Battle Brawlers Episode 23')">Episode 23</button>
            <button onclick="changeVideo('xF0eNfQmfmo?si=rkP9DZaxl7ivqYrv','Bakugan Battle Brawlers Episode 24')">Episode 24</button>
            <button onclick="changeVideo('O1URmvAcTsA?si=0cDuTX-GAIUJpShi','Bakugan Battle Brawlers Episode 25')">Episode 25</button>
            <button onclick="changeVideo('pTyRsB8KCdg?si=zNIh5ZHMT1vsWTo4','Bakugan Battle Brawlers Episode 26')">Episode 26</button>
            <button onclick="changeVideo('j4uhooNcdQo?si=5HrG-4E_2aEHQ-xW','Bakugan Battle Brawlers Episode 27')">Episode 27</button>
            <button onclick="changeVideo('q4YFowCqi4g?si=9Ew-U26EhXc40_dV','Bakugan Battle Brawlers Episode 28')">Episode 28</button>
            <button onclick="changeVideo('InUO68c3Mto?si=dFM9B1eeslqjrIMI','Bakugan Battle Brawlers Episode 29')">Episode 29</button>
            <button onclick="changeVideo('Pe5ftt724gw?si=y6IO8bjgTYCCDClq','Bakugan Battle Brawlers Episode 30')">Episode 30</button>
            <button onclick="changeVideo('BRYnuAN1grc?si=x_7xlYEiMhc3LaD-','Bakugan Battle Brawlers Episode 31')">Episode 31</button>
            <button onclick="changeVideo('EAG_DRVJG5M?si=ZxoCsziiLD84tLlA','Bakugan Battle Brawlers Episode 32')">Episode 32</button>
            <button onclick="changeVideo('Gwp0tRkeERM?si=l4U4-q0A-rKwEjyF','Bakugan Battle Brawlers Episode 33')">Episode 33</button>
            <button onclick="changeVideo('m8yQSuWRJzY?si=CM3hKclHZIXcuxpQ','Bakugan Battle Brawlers Episode 34')">Episode 34</button>
            <button onclick="changeVideo('9926t-uFTN4?si=pJu_g__C5wKisTzA','Bakugan Battle Brawlers Episode 35')">Episode 35</button>
            <button onclick="changeVideo('Zs4FdhT-M6k?si=HHmVu5_Obvk1DVST','Bakugan Battle Brawlers Episode 36')">Episode 36</button>
            <button onclick="changeVideo('Wjf7k5CQMgU?si=WFeDFjAMapY-UEY2','Bakugan Battle Brawlers Episode 37')">Episode 37</button>
            <button onclick="changeVideo('jqLFZvKGsgM?si=OHta2w0adpfZbX2V','Bakugan Battle Brawlers Episode 38')">Episode 38</button>
            <button onclick="changeVideo('aDZYrlSbAfo?si=f0Dj_Jx3KnIeehez','Bakugan Battle Brawlers Episode 39')">Episode 39</button>
            <button onclick="changeVideo('bMRW_8jvZqY?si=CDWe7-h9WhEQUj2B','Bakugan Battle Brawlers Episode 40')">Episode 40</button>
            <button onclick="changeVideo('y97IImiM0Ak?si=cDRbMOOAmtBjEhJE','Bakugan Battle Brawlers Episode 41')">Episode 41</button>
            <button onclick="changeVideo('toEfJ7MyXyQ?si=ESYwrukC6mQb-ix3','Bakugan Battle Brawlers Episode 42')">Episode 42</button>
            <button onclick="changeVideo('G5cru0gd-U8?si=KJ0mVp4NLDpV0nE-','Bakugan Battle Brawlers Episode 43')">Episode 43</button>
            <button onclick="changeVideo('WMMTes_eIR8?si=sv3k5I4IU2847-c1','Bakugan Battle Brawlers Episode 44')">Episode 44</button>
            <button onclick="changeVideo('gurP_QhF-DI?si=meH9bt6MJWXmmPHJ','Bakugan Battle Brawlers Episode 45')">Episode 45</button>
            <button onclick="changeVideo('VjBj8DZR_mg?si=Qy6Ec8jnw1XnEVBo','Bakugan Battle Brawlers Episode 46')">Episode 46</button>
            <button onclick="changeVideo('YTFAYIFXBfk?si=pxS4ES6CqSJ4Dsb_','Bakugan Battle Brawlers Episode 47')">Episode 47</button>
            <button onclick="changeVideo('M8Vat7_h8ic?si=tzBc7V90Fo-PzO2K','Bakugan Battle Brawlers Episode 48')">Episode 48</button>
            <button onclick="changeVideo('i8FyTH3MdeE?si=o_Knh7ErYiWMNz2v','Bakugan Battle Brawlers Episode 49')">Episode 49</button>
            <button onclick="changeVideo('EwM3AoJNGrk?si=6K-D6ucGet70-elK','Bakugan Battle Brawlers Episode 50')">Episode 50</button>
            <button onclick="changeVideo('aQmFm6E4zSU?si=rfSD4sVnva_hDZk3','Bakugan Battle Brawlers Episode 51')">Episode 51</button>
            <button onclick="changeVideo('YLYAlwQAfi4?si=kcM-OeYEVBlrjRtv','Bakugan Battle Brawlers Episode 52')">Episode 52</button>
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