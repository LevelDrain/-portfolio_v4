<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>前田デザイン室活動 | 到龍門</title>
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
                <img src="../img/img_maede.png" alt="">
            </div>
        </section>

        <section class="p-article--text">
            <div class="l-container section-fadein">
                <h2 class="c-title">前田デザイン室活動</h2>
                <p class="c-heading">
                    オンラインサロン「前田デザイン室」でアーティストとして活動した際に制作したバナーやコーディングなどの活動。<br>
                    プロジェクトに所属し、デザインスキルやIllustratorの基本的なテクニック、コピーライティングなどを学んだ。
                    また、主体性のあるコミュニケーション能力を求められたため、その辺りはとても良い経験になった。
                </p>

                <p class="c-heading">制作環境</p>
                <ul class="p-article--list">
                    <li>CLIP STUDIO PAINT</li>
                    <li>Photoshop</li>
                    <li>Illustrator</li>
                    <li>Figma</li>
                </ul>
            </div>

            <div class="l-container section-fadein">
                <h3 class="p-article--title">バナー制作</h3>
                <p class="c-heading">
                    少々複雑な図形であっても、Illustratorのパスが怖くなくなる程度まで慣れる。
                </p>
                <div class="p-article--fig">
                    <img src="../img/kekkikai1.png" alt="">
                </div>
                <div class="p-article--fig">
                    <img src="../img/nukedaso_pr-8.png" alt="">
                </div>
                <div class="p-article--fig">
                    <img src="../img/img_ducemsgcard.png" alt="">
                </div>
            </div>

            <div class="l-container section-fadein">
                <h3 class="p-article--title">イラスト制作</h3>
                <p class="c-heading">
                    イラストについてはデッサン力不足にコンプレックスがあったため、この機会を利用して基礎から練習し自信をつける。
                </p>
                <div class="p-article--fig wl">
                    <img src="../img/kyokotan_birth_send.jpg" alt="">
                </div>
            </div>

            <div class="l-container section-fadein">
                <h3 class="p-article--title">コーディング</h3>
                <p class="c-heading">
                    プロジェクト「ぬけだ荘」公式サイトの一部フロントエンドおよび、PHPによるバナーデータ管理システムの実装担当。
                    リリース日未定。スクリーンショットは開発段階のもの。
                </p>

                <div class="p-article--fig">
                    <img src="../img/nokedaso-pc1.png" alt="">
                </div>
                <div class="p-article--btnbox">
                    <a href="sample" class="c-button">担当箇所<br>スクリーンショットへ</a>
                </div>
            </div>

            <div class="l-container section-fadein">
                <h3 class="p-article--title">イベント企画</h3>
                <p class="c-heading">
                    自己ブランディングや転職活動の悩み相談に関するイベントを実施。
                </p>
                <div class="p-article--fig">
                    <img src="../img/gyakkou.png" alt="">
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