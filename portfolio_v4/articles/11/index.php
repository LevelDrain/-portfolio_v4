<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M塾様ホームページ | 到龍門</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./../../shared/css/vendor/lity.min.css">
    <link rel="stylesheet" href="./../../shared/css/vendor/animsition.min.css">
    <link rel="stylesheet" href="./../../shared/css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="./../../shared/css/common.css">
    <link rel="stylesheet" href="./../css/articles.css">
</head>

<body>
<div class="animsition">
    <!-- 背景消したときの要素取得エラーは無視 -->
    <!-- <div class="l-bgThreejs"></div> -->

    <!-- header -->
    <?php require_once('./../../shared/header.php'); ?>

    <main class="l-main">
        <section class="p-article--img">
            <div class="l-container">
                <img src="../img/img_juku.png" alt="">
            </div>
        </section>

        <section class="p-article--text">
            <div class="l-container section-fadein">
                <h2 class="c-title">M塾様ホームページ</h2>
                <p class="c-heading">
                    WordPressのテンプレートが設定された状態から仲介者を経由して請ける。<br>
                    「いい感じにしておいて」との指示であったため、デザインを優先して進捗報告をしながら進めた。<br>
                    仕様書を制作する余裕がないとの要望を受け、内容は主に旧サイトの内容と手書き文書から書き起こす。<br>
                    最終的に休業になったためリリースはされなかった。
                </p>
                <p class="c-heading">制作環境</p>
                <ul class="p-article--list">
                    <li>WordPress（テンプレートはColibri）</li>
                    <li>CLIP STUDIO PAINT（レタッチのみ）</li>
                </ul>

                <h3 class="p-article--title">コピーライティング</h3>
                <p class="c-heading">
                    企業理念や事業内容が完結に伝わるよう、可能な限り短い文章になるまで推敲した。
                </p>
                <div class="p-article--fig">
                    <img src="../img/img_matsugaku.png" alt="">
                </div>

                <div class="p-article--btnbox">
                    <a href="https://matsugakujyuku.com/" class="c-button" target="_blank" rel="noopener noreferrer">実際のWebサイトへ</a>
                </div>
            </div>

            <div class="p-article--btnbox c-border-top">
                <a href="javascript:history.back();" class="c-button">戻る</a>
            </div>
        </section>
    </main>

    <!-- footer -->
    <?php require_once('./../../shared/footer.php'); ?>
</div>

<script src="./../../shared/js/main.js"></script>
</body>

</html>