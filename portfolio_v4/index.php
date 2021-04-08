<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>上島水準 Level Ueshima | ポートフォリオ</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./shared/css/vendor/lity.min.css">
    <link rel="stylesheet" href="./shared/css/vendor/animsition.min.css">
    <link rel="stylesheet" href="./shared/css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="./shared/css/common.css">
</head>

<body>
<div class="animsition">
    <div class="l-bgThreejs"></div>

    <header class="l-header">
        <div class="l-flex l-container">
            <h1 class="p-header--logo">
                <a href="#" title="Level Ueshima">
                    <img src="./shared/img/img_logo.svg" alt="Level Ueshima">
                </a>
            </h1>
            <a class="p-header--spmenu">
                <span></span>
                <span></span>
                <span></span>
            </a>
            <nav class="p-header--nav">
                <ul class="l-flex">
                    <li class="p-header--menu"><a href="/" itemprop="url">Top</a></li>
                    <li class="p-header--menu"><a href="/profile/" itemprop="url">Profile</a></li>
                    <!-- <li><a href="/artworks/" itemprop="url">ArtWorks</a></li> -->
                </ul>
                <!--                <ul class="nav-sns">-->
                <!--                    <li><a href="" target="_blank" class="gc"><span class="icon-facebook"></span></a></li>-->
                <!--                    <li><a href="" target="_blank" class="gc"><span class="icon-twitter"></span></a></li>-->
                <!--                    <li><a href="" target="_blank" class="gc"><span class="icon-vimeo"></span></a></li>-->
                <!--                </ul>-->
            </nav>
        </div>
    </header>

    <main class="l-main">
        <section class="p-mainVisual">
            <img class="p-mainVisual--pc" src="./img/img_top_pc.png" alt="">
            <img class="p-mainVisual--sp " src="./img/img_top_sp.png" alt="">
        </section>

        <section class="p-pr">
            <div class="l-container">
                <h2 class="c-title">受け継がれた想いと技術<br>人情派メディアアーティスト</h2>
                <p class="c-heading">
                    真面目で実直な在り方に惹かれ、KCGの元フロントエンドエンジニアに師事。<br>
                    JavaScriptやThree.js、SVGといったWeb上の演出方法を習得し、インタラクティブなサイト制作を目指して
                    日々コーディングや、デザインサークルの活動に励んでおります。<br>
                    日本古来の美意識だけでなく、ゲームや映画といったメディアアートの感性も大切にしています。<br>
                    また、見た人に高級感と感動が体験できるようなデザインを心がけ、制作を行っております。
                </p>
            </div>
        </section>

        <section class="p-pickup section-fadein">
            <div class="l-container">
                <div class="p-pickup--container">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- ここからswiperテンプレ -->
                            <div class="swiper-slide slide-item">
                                <a class="animsition-link" href="./articles/000/">
                                    <img src="img/portfolio4_bunner.png" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide slide-item">
                                <img src="img/portfolio4_bunner.png" alt="">
                            </div>
                            <div class="swiper-slide slide-item">
                                <img src="img/portfolio4_bunner.png" alt="">
                            </div>
                            <div class="swiper-slide slide-item">
                                <img src="img/portfolio4_bunner.png" alt="">
                            </div>
                            <div class="swiper-slide slide-item">
                                <img src="img/portfolio4_bunner.png" alt="">
                            </div>
                            <div class="swiper-slide slide-item">
                                <img src="img/portfolio4_bunner.png" alt="">
                            </div>
                            <!-- テンプレ終了 -->
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-portfolio section-fadein">
            <div class="l-container">
                <div class="l-flex--pc l-flex--tab">
                    <div class="c-card">
                        <img class="c-card--img" src="./img/portfolio4_bunner.png" alt="">
                        <h5 class="c-card--title">タイトル1</h5>
                        <div class="c-card--body">
                            <p class="c -card--text">
                                HTML5 / CSS3 / JavaScript
                            </p>
                        </div>
                    </div>
                    <div class="c-card">
                        <img class="c-card--img" src="./img/portfolio4_bunner.png" alt="">
                        <h5 class="c-card--title">タイトル2</h5>
                        <div class="c-card--body">
                            <p class="c-card--text">
                                Vue.js
                            </p>
                        </div>
                    </div>
                    <div class="c-card">
                        <img class="c-card--img" src="./img/portfolio4_bunner.png" alt="">
                        <h5 class="c-card--title">タイトル3</h5>
                        <div class="c-card--body">
                            <p class="c-card--text">
                                WordPress + デザイン
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="l-footer">
        <p class="p-footer--writer">
            <small>© 2021 Level Ueshima</small>
        </p>
    </footer>
</div>

<script src="./shared/js/main.js"></script>
</body>

</html>