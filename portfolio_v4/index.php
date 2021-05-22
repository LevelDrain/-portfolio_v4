<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="仕様だからと言わないアート系Webエンジニア「佐村木」のポートフォリオです">
    <meta name="keywords" content="到龍門,とうりゅうもん,ポートフォリオ,フロントエンド,インタラクションデザイン,佐村木,上島水準">
    <meta name="google-site-verification" content="tZqs0OHBtbjxrSPSumM4AMEh1bJaXhAhjaKFlA2_iIs" />
    <title>到龍門 - The road of Front End</title>
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

    <!-- header -->
    <?php require_once('./shared/header.php'); ?>

    <main class="l-main">
        <section class="p-mainVisual">
            <img class="p-mainVisual--pc" src="./shared/img/img_top_pc.png" alt="">
            <img class="p-mainVisual--sp " src="./shared/img/img_top_sp.png" alt="">
        </section>

        <section class="p-pr">
            <div class="l-container section-fadein">
                <h2 class="c-title">『仕様だから』と言わない<br>アート系Webエンジニア</h2>
                <p class="c-heading">
                    制作者の事情でユーザビリティを制限しないことを心がけています。<br class="pc-br">
                    お客様に感動をお届けするため、美術品のような緻密さを意識してコーディングやデザインに励んでおります。
                </p>
            </div>
        </section>

        <?php
        //CSV読み込み
        $filepath = './shared/csv/system.csv';
        $record = [];
        if (($handle = fopen($filepath, 'r')) !== false) {
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                array_unshift($record, $data); //下にある方が先になるよう配列追加
            }
        }
        fclose($handle);
        ?>

        <section class="p-pickup">
            <div class="p-pickup--container section-fadein">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- ここからswiper -->
                        <?php
                        foreach ($record as $id => $contents):
                            ?>
                            <?php if ($contents[6] == 'TRUE'): // pickup ?>
                            <div class="swiper-slide slide-item">
                                <a class="animsition-link" href="./articles/<?= $contents[4] ?>">
                                    <img src="articles/img/<?= $contents[1] ?>" alt="">
                                </a>
                            </div>
                        <?php endif; ?>

                        <?php endforeach; ?>
                        <!-- swiper終了 -->
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </section>

        <section class="p-portfolio">
            <div class="l-container">
                <div class="c-accordion">
                    <div class="c-accordion--parent">
                        <h2 class="c-title">受託案件</h2>
                    </div>

                    <div class="c-accordion--child">
                        <div class="l-flex--pc">
                            <!-- ここからカード展開 -->
                            <?php
                            foreach ($record as $id => $contents):
                                ?>
                                <?php if ($contents[5] == 'work'): // カテゴリ ?>
                                <a class="c-card animsition-link" href="./articles/<?= $contents[4] ?>">
                                    <img class="c-card--img" src="articles/img/<?= $contents[1] ?>" alt="">
                                    <div class="c-card--body">
                                        <h5 class="c-card--title"><?= $contents[2] ?></h5>
                                        <p class="text">
                                            <?= $contents[3] ?>
                                        </p>
                                    </div>
                                </a>
                            <?php endif; ?>

                            <?php endforeach; ?>
                            <!-- カード終了 -->
                        </div>
                    </div>

                    <div class="c-accordion--parent">
                        <h2 class="c-title">Web制作</h2>
                    </div>

                    <div class="c-accordion--child">
                        <div class="l-flex--pc">
                            <!-- ここからカード展開 -->
                            <?php
                            foreach ($record as $id => $contents):
                                ?>
                                <?php if ($contents[5] == 'web'): // カテゴリ ?>
                                <a class="c-card animsition-link" href="./articles/<?= $contents[4] ?>">
                                    <img class="c-card--img" src="articles/img/<?= $contents[1] ?>" alt="">
                                    <div class="c-card--body">
                                        <h5 class="c-card--title"><?= $contents[2] ?></h5>
                                        <p class="text">
                                            <?= $contents[3] ?>
                                        </p>
                                    </div>
                                </a>
                            <?php endif; ?>

                            <?php endforeach; ?>
                            <!-- カード終了 -->
                        </div>
                    </div>

                    <div class="c-accordion--parent">
                        <h2 class="c-title">システム開発系</h2>
                    </div>

                    <div class="c-accordion--child">
                        <div class="l-flex--pc">
                            <!-- ここからカード展開 -->
                            <?php
                            foreach ($record as $id => $contents):
                                ?>
                                <?php if ($contents[5] == 'system'): // カテゴリ ?>
                                <a class="c-card animsition-link" href="./articles/<?= $contents[4] ?>">
                                    <img class="c-card--img" src="articles/img/<?= $contents[1] ?>" alt="">
                                    <div class="c-card--body">
                                        <h5 class="c-card--title"><?= $contents[2] ?></h5>
                                        <p class="text">
                                            <?= $contents[3] ?>
                                        </p>
                                    </div>
                                </a>
                            <?php endif; ?>

                            <?php endforeach; ?>
                            <!-- カード終了 -->
                        </div>
                    </div>

                    <div class="c-accordion--parent">
                        <h2 class="c-title">前田デザイン室活動・<br class="sp-br">その他アート作品</h2>
                    </div>

                    <div class="c-accordion--child">
                        <div class="l-flex--pc">
                            <!-- ここからカード展開 -->
                            <?php
                            foreach ($record as $id => $contents):
                                ?>
                                <?php if ($contents[5] == 'art'): // カテゴリ ?>
                                <a class="c-card animsition-link" href="./articles/<?= $contents[4] ?>">
                                    <img class="c-card--img" src="articles/img/<?= $contents[1] ?>" alt="">
                                    <div class="c-card--body">
                                        <h5 class="c-card--title"><?= $contents[2] ?></h5>
                                        <p class="text">
                                            <?= $contents[3] ?>
                                        </p>
                                    </div>
                                </a>
                            <?php endif; ?>

                            <?php endforeach; ?>
                            <!-- カード終了 -->
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="p-profile" id="Profile">
            <div class="l-container section-fadein">
                <div class="l-flex">
                    <div class="p-profile--item">
                        <img class="p-profile--img" src="./shared/img/my_icon.png" alt="">
                        <p class="c-title">佐村木 友紀</p>
                        <p class="p-profile--name">Yuki Samuraki</p>
                    </div>
                    <div class="text">
                        <p class="c-heading heading--pc">
                            デザインができるフロントエンドエンジニアを苦悩にめげず目指す。また、前田デザイン室にて『上島水準（Level Ueshima）』として、漫画が描けるデザイナーとしての活動を行う。
                        </p>
                        <p class="c-heading">
                            京都コンピュータ学院にてJavaScript講師に根性を叩きなおされ、不平不満だらけの人生を変えるべく師事した経緯がある。
                        </p>
                        <p class="c-heading">
                            かつて奈良先端科学技術大学院大学バイオサイエンス研究科修了後、統計学のバックグラウンドを活かしソーシャルゲームのプランナーとして勤務していた。
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- footer -->
    <?php require_once('./shared/footer.php'); ?>
</div>

<script src="./shared/js/main.js"></script>
</body>

</html>