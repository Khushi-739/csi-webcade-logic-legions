<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/781e847507.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Handjet:wght@100..900&family=Protest+Guerrilla&display=swap" rel="stylesheet">
</head>
<body>
    <div class="image">
        <header>
            <ul class="nav">
                <li><a href="index.php" id="home">HOME</a></li>
                <li><a href="bike.php" id="product">PRODUCT</a></li>
                <li><a href="#" id="social">SOCIAL</a></li>
                <li><a href="login.php" id="contact">login</a></li>
                <a id="be" class="gc" href="#"><i class="fa-solid fa-bicycle"></i></a>
            </ul>
        
            <section>
                <div id="ok" class="slog">
                    <button name="submit" onclick="location.href='index.html'" class="butt"><span id="learn-more">LEARN MORE</span></button>
                </div>
                <div class="okk" id="slogan">SPOKE_SAGA</div>
                <div class="okkk" id="sub-slogan">Discover the joy of cycling with us, where every ride opens up new adventures!!</div>
            </section>
        </header>
    </div>
    <section>
        <div class="explore" id="explore-bikes">EXPLORE BIKES</div>
        <div class="bikes">
            <img src="a.jpeg" class="m">
            <img src="c.jpeg" class="mm">
            <img src="e.jpeg" class="mmm">
            <img src="b.jpeg" class="mmmm">
            <div class="j" id="mountain-bike">MOUNTAIN BIKE</div>
            <div class="jj" id="gravel-bike">GRAVEL BIKE</div>
            <div class="jjj" id="electric-bike">ELECTRIC BIKE</div>
            <div class="jjjj" id="accessories">ACCESSORIES</div>
        </div>
    </section>

    <section>
        <div class="language-dropdown">
            <label for="language-select">Choose Language:</label>
            <select id="language-select" onchange="changeLanguage()">
                <option value="en">English</option>
                <option value="ja">Japanese</option>
            </select>
        </div>
    </section>
    <section>
        <video class="video" src="video.mp4" type="video/mp4" cautoplay controls="false"></video>
        <div class="vv" id="redbull">RED BULL GIVES U WINGS!!</div>
    </section>
    <div class="foot"> 
        <div class="map">
            <p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.8488094784575!2d139.62180271508458!3d35.70533798018859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018edf69106c6b7%3A0xc39e96c3fd5bc269!2sBuilding%209F!5e0!3m2!1sen!2sin!4v1639837876358!5m2!1sen!2sin" width="800" height="500" style="border:0;" allowfullscreen loading="lazy"></iframe>
            </p> 
        </div>
        <div class="last">COPYRIGHT © 2024 BY SPOKE SAGA.</div>
    </div>

    <script>
        const languageContent = {
            en: {
                home: "HOME",
                product: "PRODUCT",
                social: "SOCIAL",
                contact: "LOGIN",
                learnMore: "LEARN MORE",
                slogan: "SPOKE_SAGA",
                subSlogan: "Discover the joy of cycling with us, where every ride opens up new adventures!!",
                exploreBikes: "EXPLORE BIKES",
                mountainBike: "MOUNTAIN BIKE",
                gravelBike: "GRAVEL BIKE",
                electricBike: "ELECTRIC BIKE",
                accessories: "ACCESSORIES",
                redbull: "RED BULL GIVES U WINGS!!"
            },
            ja: {
                home: "ホーム",
                product: "製品",
                social: "ソーシャル",
                contact: "ログイン",
                learnMore: "もっと見る",
                slogan: "スポーク・サガ",
                subSlogan: "私たちと一緒にサイクリングの喜びを発見し、すべてのライドが新しい冒険を開きます!!",
                exploreBikes: "バイクを探検する",
                mountainBike: "マウンテンバイク",
                gravelBike: "グラベルバイク",
                electricBike: "電動バイク",
                accessories: "アクセサリー",
                redbull: "レッドブルは翼を与える!!"
            }
        };

        function changeLanguage() {
            const selectedLanguage = document.getElementById("language-select").value;
            document.getElementById("home").innerText = languageContent[selectedLanguage].home;
            document.getElementById("product").innerText = languageContent[selectedLanguage].product;
            document.getElementById("social").innerText = languageContent[selectedLanguage].social;
            document.getElementById("contact").innerText = languageContent[selectedLanguage].contact;
            document.getElementById("learn-more").innerText = languageContent[selectedLanguage].learnMore;
            document.getElementById("slogan").innerText = languageContent[selectedLanguage].slogan;
            document.getElementById("sub-slogan").innerText = languageContent[selectedLanguage].subSlogan;
            document.getElementById("explore-bikes").innerText = languageContent[selectedLanguage].exploreBikes;
            document.getElementById("mountain-bike").innerText = languageContent[selectedLanguage].mountainBike;
            document.getElementById("gravel-bike").innerText = languageContent[selectedLanguage].gravelBike;
            document.getElementById("electric-bike").innerText = languageContent[selectedLanguage].electricBike;
            document.getElementById("accessories").innerText = languageContent[selectedLanguage].accessories;
            document.getElementById("redbull").innerText = languageContent[selectedLanguage].redbull;
        }

        // Initialize language based on user selection on page load
        document.addEventListener("DOMContentLoaded", function() {
            changeLanguage();
        });
    </script>
</body>
</html>
