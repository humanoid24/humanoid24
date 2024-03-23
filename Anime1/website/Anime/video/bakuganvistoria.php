<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gakuen.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Bakugan New Vestroia</title>
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
        <iframe id="videoframe" src="https://www.youtube.com/embed/KRz87f7JYd4?si=nRGbjKCmVnI4u0Ab" frameborder="0"
        allowfullscreen="true">
        </iframe>
    </div>
    <div class="video-description">
        <p>Bakugan New Vestroia Episode 1</p>
    </div>
    <div class="grid">
            <button onclick="changeVideo('KRz87f7JYd4?si=d68EEUxhoes-sFje','Bakugan New Vestroia Episode 1')">Episode 1</button>
            <button onclick="changeVideo('-hrkPmQVqno?si=AP9FGD1p_ZvUFdee','Bakugan New Vestroia Episode 2')">Episode 2</button>
            <button onclick="changeVideo('8OFfPx4gakk?si=DBGweFFs55n7N2L-','Bakugan New Vestroia Episode 3')">Episode 3</button>
            <button onclick="changeVideo('e9lu_xmZw5A?si=DW-U6gRHbMFFzY0F','Bakugan New Vestroia Episode 4')">Episode 4</button>
            <button onclick="changeVideo('4Zq1TW-fIFU?si=F3gmw9VhkXE8AkTZ','Bakugan New Vestroia Episode 5')">Episode 5</button>
            <button onclick="changeVideo('LtlfwWERx58?si=jtMTzgr0pMaS7v0z','Bakugan New Vestroia Episode 6')">Episode 6</button>
            <button onclick="changeVideo('IGvHc8j3t_k?si=gJUk8W1QbIfaxz3o','Bakugan New Vestroia Episode 7')">Episode 7</button>
            <button onclick="changeVideo('yXvvXZPCgzY?si=8Kc2IiAQD54EvZQz','Bakugan New Vestroia Episode 8')">Episode 8</button>
            <button onclick="changeVideo('6lydKLWZqKA?si=VuDe3j8gE8udw6l3','Bakugan New Vestroia Episode 9')">Episode 9</button>
            <button onclick="changeVideo('9RdDCGri_aM?si=y7mHR9pe1n8w3A-R','Bakugan New Vestroia Episode 10')">Episode 10</button>
            <button onclick="changeVideo('nlhodzHqBAI?si=hqQlk_J5__b8NGW9','Bakugan New Vestroia Episode 11')">Episode 11</button>
            <button onclick="changeVideo('gk-2mLmXtSE?si=h6dkXkDgYeem49R6','Bakugan New Vestroia Episode 12')">Episode 12</button>
            <button onclick="changeVideo('Lfn2u26JxPU?si=e85s8JIw-R7NZgnN','Bakugan New Vestroia Episode 13')">Episode 13</button>
            <button onclick="changeVideo('VU2sfhhq5kQ?si=VxGDAY2C49ZxrIjd','Bakugan New Vestroia Episode 14')">Episode 14</button>
            <button onclick="changeVideo('0t2BOkEBbW0?si=pnBOhsL_nndBscI4','Bakugan New Vestroia Episode 15')">Episode 15</button>
            <button onclick="changeVideo('ZPjv9ZbhOQo?si=4jshRAYi1iE4ZIN1','Bakugan New Vestroia Episode 16')">Episode 16</button>
            <button onclick="changeVideo('q3kVH-BCbvU?si=Z-CvtTVZtI2TH7ze','Bakugan New Vestroia Episode 17')">Episode 17</button>
            <button onclick="changeVideo('1vZ5THu5TH8?si=YHU6lwu1nOk21MtN','Bakugan New Vestroia Episode 18')">Episode 18</button>
            <button onclick="changeVideo('vcQyypT_8VM?si=_1eRDHEGYoTOuAtQ','Bakugan New Vestroia Episode 19')">Episode 19</button>
            <button onclick="changeVideo('5JKDz1aEGo8?si=uiG4LPhCneZWsrPQ','Bakugan New Vestroia Episode 20')">Episode 20</button>
            <button onclick="changeVideo('P4VHgJ0qruc?si=jP1MM15U9kOPZkWA','Bakugan New Vestroia Episode 21')">Episode 21</button>
            <button onclick="changeVideo('n26pRF8GPkc?si=eIU9b73Brm-lSqn-','Bakugan New Vestroia Episode 22')">Episode 22</button>
            <button onclick="changeVideo('A5WN9TEGS3c?si=BGY5_6O24onEgXGA','Bakugan New Vestroia Episode 23')">Episode 23</button>
            <button onclick="changeVideo('Ji87pqxOZXE?si=heROiYO8dhHXIj6x','Bakugan New Vestroia Episode 24')">Episode 24</button>
            <button onclick="changeVideo('nMG_h7roh3Q?si=b0w-kMe7NPDXkMSI','Bakugan New Vestroia Episode 25')">Episode 25</button>
            <button onclick="changeVideo('ICcGAMfBMQQ?si=UzMo1WiTsZLdD9sh','Bakugan New Vestroia Episode 26')">Episode 26</button>
            <button onclick="changeVideo('MtAaPRmH2wI?si=X2mmc6ycJK6s9oJ7','Bakugan New Vestroia Episode 27')">Episode 27</button>
            <button onclick="changeVideo('k0rITqkHpJk?si=DIu3hEsqDDuClWwj','Bakugan New Vestroia Episode 28')">Episode 28</button>
            <button onclick="changeVideo('0PqqgpF_JEc?si=D1BkolcPSiq4ua6g','Bakugan New Vestroia Episode 29')">Episode 29</button>
            <button onclick="changeVideo('mtO7Ta0XZSk?si=qsY7Q-XmDpCdBExW','Bakugan New Vestroia Episode 30')">Episode 30</button>
            <button onclick="changeVideo('pi-sUP1IhDc?si=xWT81mg7NmGOD1vM','Bakugan New Vestroia Episode 31')">Episode 31</button>
            <button onclick="changeVideo('MXStYQSLd_M?si=5zcPdZEptcVkfOuT','Bakugan New Vestroia Episode 32')">Episode 32</button>
            <button onclick="changeVideo('xJSBH5rB9Oc?si=rV_oAqoycCT84fFr','Bakugan New Vestroia Episode 33')">Episode 33</button>
            <button onclick="changeVideo('puAWndxkSfM?si=vZBMgkWDbzbzGLr8','Bakugan New Vestroia Episode 34')">Episode 34</button>
            <button onclick="changeVideo('PdKSVLU5wOo?si=VPP2d2udFQOMKvw1','Bakugan New Vestroia Episode 35')">Episode 35</button>
            <button onclick="changeVideo('Z9g0VsLD6v8?si=5Ej95PtXs5kV-tX1','Bakugan New Vestroia Episode 36')">Episode 36</button>
            <button onclick="changeVideo('thLmJJoy_BM?si=vO_szxFJmOziAiyl','Bakugan New Vestroia Episode 37')">Episode 37</button>
            <button onclick="changeVideo('XhM0qgFGuHg?si=xoZ1_KOXYbtkptGh','Bakugan New Vestroia Episode 38')">Episode 38</button>
            <button onclick="changeVideo('2NH8xwRJLdE?si=hXS2eQF8FoKVfgei','Bakugan New Vestroia Episode 39')">Episode 39</button>
            <button onclick="changeVideo('K_6zchAMpoQ?si=G0J0wRR_K9yAHchJ','Bakugan New Vestroia Episode 40')">Episode 40</button>
            <button onclick="changeVideo('6G7vAJreBM4?si=iEF3-5GUdCVFAZY7','Bakugan New Vestroia Episode 41')">Episode 41</button>
            <button onclick="changeVideo('bDNXPjFTuZs?si=vFkplgmgfuB8Nxkf','Bakugan New Vestroia Episode 42')">Episode 42</button>
            <button onclick="changeVideo('FDBbGiu3yAQ?si=4c5CFvqyuENomX_Q','Bakugan New Vestroia Episode 43')">Episode 43</button>
            <button onclick="changeVideo('Y1GFV431Ars?si=DbkDy7iX9EGMShtX','Bakugan New Vestroia Episode 44')">Episode 44</button>
            <button onclick="changeVideo('Yujbu3AKRhI?si=ZqU5pGaBtRWWz26n','Bakugan New Vestroia Episode 45')">Episode 45</button>
            <button onclick="changeVideo('gy7A_ILz7jE?si=YrWSWhAaXFLZ1U_K','Bakugan New Vestroia Episode 46')">Episode 46</button>
            <button onclick="changeVideo('H7g59YD8b6k?si=OR7O8l55MaNaEGNr','Bakugan New Vestroia Episode 47')">Episode 47</button>
            <button onclick="changeVideo('AzNreYSwxu8?si=2ZO0isH6bcsYJrzB','Bakugan New Vestroia Episode 48')">Episode 48</button>
            <button onclick="changeVideo('GiHWJP_2rRw?si=HS0L1TXQpCwB5L1f','Bakugan New Vestroia Episode 49')">Episode 49</button>
            <button onclick="changeVideo('mzmxjFU8gKw?si=dLnPYS6WGxcjzic6','Bakugan New Vestroia Episode 50')">Episode 50</button>
            <button onclick="changeVideo('yQJFtrGnM_w?si=1akyD5L9mSWvpc4M','Bakugan New Vestroia Episode 51')">Episode 51</button>
            <button onclick="changeVideo('SDws9aUjGnE?si=8i5uth_IzHovlXif','Bakugan New Vestroia Episode 52')">Episode 52</button>
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