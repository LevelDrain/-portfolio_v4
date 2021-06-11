<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>レベルデザインツール | 到龍門</title>
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
                <div class="p-article--iframe">
                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/ZqwVPJLal4A"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
        </section>

        <section class="p-article--text">
            <div class="l-container section-fadein">
                <h2 class="c-title">ソシャゲプランナー時代</h2>
                <p class="c-heading">
                    ソーシャルゲームのプランナー時代に行っていた業務内容を動画にまとめたもの。<br>
                </p>
                <p class="c-heading">
                    レベルデザインツールのサンプル。<br>
                    本Excelファイルは業務ではなく、当時遊んでいた『ファイアーエムブレム if』のキャラクターをいかに強く育てあげるかについてシミュレーションするための個人使用のツールである。
                    業務としてはデータベースに入れるためのパラメータ（HPや攻撃力などといったUXに関わる数値データ）をExcelで自動計算させ、SQLに反映させ、実機でデバッグしながら調整する「レベルデザイン」を行っていた。<br>
                    レベルデザイン業務を効率よく行うため、VLOOKUP関数などの関数を用いてよりデータベースに近い操作ができるよう工夫していた。
                </p>
                <div class="p-article--btnbox">
                    <a href="https://leveldrain.sumomo.ne.jp/PokemonButtleJS/Specification.xlsx"
                       class="c-button tapunset">ダウンロード</a>
                    <p class="c-heading">
                        ※ Excelファイルにつき、スマホでのダウンロードを無効にしております。
                    </p>
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