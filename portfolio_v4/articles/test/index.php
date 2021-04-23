<!DOCTYPE html>
<html lang="ja">

<head>
    <?php
    if (isset($_GET['id']) && $_GET['id'] != null) {
        $articleid = $_GET['id']; //画像、タイトルの呼び出し用ID
    } else {
        echo('ID受け渡しに失敗しました。<br><a href="https://leveldrain.sumomo.ne.jp/portfolio_v4/">トップへ戻る</a>');
        die();
    }

    $filepath = './../../shared/csv/system.csv';
    $record = [];
    if (($handle = fopen($filepath, 'r')) !== false) {
        while (($data = fgetcsv($handle, 1000, ',')) !== false) {
            array_push($record, $data); //ID昇順
        }
    }
    // 以下、ID指定で$record内データ呼び出し
    fclose($handle);
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $record[$articleid][2] . ' ' ?>| 水準龍神宮</title>
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
                <img src="../img/<?= $record[$articleid][1] ?>" alt="">
            </div>
        </section>

        <section class="p-article--text">
            <div class="l-container section-fadein">
                <h2 class="c-title"><?= $record[$articleid][2] ?></h2>
                <p class="c-heading">
                    専門学校時代の動画制作実習で制作。ジムのスタジオに行った際に感じた気迫をリズミカルな動画コンテンツに仕上げようと決意した作品。<br>
                    MakeHumanによってヒューマノイド（太った人々）を生成し、blenderでマテリアル編集、モデリング、アニメーションまで完成させた後、Adobe
                    PremierでシーンとBGMを組み合わせる。制作期間は1ヵ月程度。
                </p>
                <ul>
                    <li>Adobe Premier</li>
                    <li>Photoshop</li>
                    <li>blender</li>
                    <li>MakeHuman</li>
                    <li>※ いずれもバージョン不明</li>
                </ul>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/PbuMpEVKbFg"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
        </section>
    </main>

    <!-- footer -->
    <?php require_once('./../../shared/footer.php'); ?>
</div>

<script src="./../../shared/js/main.js"></script>
</body>

</html>