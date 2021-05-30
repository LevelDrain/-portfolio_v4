<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>工房コロンボ様ホームページ | 到龍門</title>
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
                <img src="../img/img_colombo.png" alt="">
            </div>
        </section>

        <section class="p-article--text">
            <div class="l-container section-fadein">
                <h2 class="c-title">工房コロンボ様ホームページ</h2>
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
                    <img src="../img/colombo_pu1.png" alt="">
                </div>
            </div>

            <div class="l-container section-fadein">
                <h3 class="p-article--title">書き起こし</h3>
                <p class="c-heading">
                    鉛筆で書かれたメモからデジタルに書き起こした。
                </p>
                <div class="p-article--fig">
                    <img src="../img/colombo_pu2.png" alt="">
                </div>
            </div>

            <div class="l-container section-fadein">
                <h3 class="p-article--title">レタッチ</h3>
                <p class="c-heading">
                    スマホで撮影された画像を修正。<br>
                    室内での撮影のため照明が暗い、画像が逆さ、ファイルサイズが大きいなどの課題を解決した。<br>
                    明るさに関してはモデルルームの写真のような仕上がりになるよう、白ベースの色をさらに協調している。
                </p>
                <div class="p-article--fig">
                    <img src="../img/colombo_pu3.png" alt="">
                </div>

                <div class="p-article--btnbox">
                    <a href="sample" class="c-button">全画面<br>スクリーンショットへ</a>
                </div>
            </div>

            <div class="p-article--btnbox c-border-top">
                <a href="javascript:history.back();" class="c-button">戻る</a>
            </div>
</div>
</section>
</main>

<!-- footer -->
<?php require_once('./../../shared/footer.php'); ?>
</div>

<script src="./../../shared/js/main.js"></script>
</body>

</html>