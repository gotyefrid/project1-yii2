<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use frontend\components\MenuCategoryWidget;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE HTML>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet">




</head>

<body>
    <?php $this->beginBody() ?>
    <header>
        <div class="bg-191">
            <div class="container">
                <div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">

                    <ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10">
                        <li><a class="pl-0 pl-sm-10" href="#">About</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Submit Press Release</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <ul class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
                        <li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-google"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                        <li><a href="#"><i class="ion-social-bitcoin"></i></a></li>
                    </ul>

                </div><!-- top-menu -->
            </div><!-- container -->
        </div><!-- bg-191 -->

        <div class="container">
            <a class="logo" href="<?= Url::home() ?>"><img src="/images/logo-black.png" alt="Logo"></a>

            <!-- <a class="right-area src-btn" href="#">
                <i class="active src-icn ion-search"></i>
                <i class="close-icn ion-close"></i>
            </a> -->
            <div class="src-form">
                <form>
                    <input type="text" placeholder="Search here">
                    <button type="submit"><i class="ion-search"></i></a></button>
                </form>
            </div><!-- src-form -->

            <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

            <ul class="main-menu" id="main-menu">
                <li><a href="02_archive-page.html">NEWS</a></li>
                <li class="drop-down"><a href="#">CATEGORIES<i class="ion-arrow-down-b"></i></a>
                    <ul class="drop-down-menu drop-down-inner">
                        <?= MenuCategoryWidget::widget([
                            'tpl' => 'menucategory'
                        ]) ?>
                    </ul>
                </li>

                
                <!-- <li><a href="05_FAQS-single.html">EXPLAINED</a></li>
                <li><a href="06_contact-us.html">ICON CLAENDER</a></li> -->
            </ul>
            <div class="clearfix"></div>
        </div><!-- container -->
    </header>

                      
    <?= $content ?>


    <footer class="bg-191 color-ccc">

        <div class="container">
            <div class="pt-50 pb-20 pos-relative">
                <div class="abs-tblr pt-50 z--1 text-center">
                    <div class="h-80 pos-relative"><img class="opacty-1 h-100 w-auto" src="/images/map.png" alt=""></div>
                </div>
                <div class="row">

                    <div class="col-sm-4">
                        <div class="mb-30">
                            <a href="#"><img src="/images/logo-white.png"></a>
                            <p class="mtb-20 color-ccc">Bit coin is an open-source, peer-to-peer, digital decentralized cryptocurrency.
                                Powered by blockchain technology, its defining characteristic is</p>
                            <p class="color-ash">Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by MeL</p>
                        </div><!-- mb-30 -->
                    </div><!-- col-md-4 -->

                    <div class="col-sm-4">
                        <div class="mb-30">
                            <h5 class="color-primary mb-20"><b>MOST POPULAR</b></h5>
                            <div class="mb-20">
                                <a class="color-white" href="#"><b>Its Make or Break Time for Bitcoin</b></a>
                                <h6 class="mt-10">Jan 25, 2018</h6>
                            </div>
                            <div class="brdr-ash-1 opacty-2 mr-30"></div>
                            <div class="mt-20">
                                <a class="color-white" href="#"><b>Bitcoin's roller coster ride is not over</b></a>
                                <h6 class="mt-10">Jan 25, 2018</h6>
                            </div>
                        </div><!-- mb-30 -->
                    </div><!-- col-md-4 -->

                    <div class="col-sm-4">
                        <div class="mb-30">
                            <h5 class="color-primary mb-20"><b>MOST POPULAR</b></h5>
                            <div class="mb-20">
                                <a class="color-white" href="#"><b>Its Make or Break Time for Bitcoin</b></a>
                                <h6 class="mt-10">Jan 25, 2018</h6>
                            </div>
                            <div class="brdr-ash-1 opacty-2 mr-30"></div>
                            <div class="mt-20">
                                <a class="color-white" href="#"><b>Bitcoin's roller coster ride is not over</b></a>
                                <h6 class="mt-10">Jan 25, 2018</h6>
                            </div>
                        </div><!-- mb-30 -->
                    </div><!-- col-md-4 -->

                </div><!-- row -->
            </div><!-- ptb-50 -->

            <div class="brdr-ash-1 opacty-2"></div>

            <div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">

                <ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10">
                    <li><a class="pl-0 pl-sm-10" href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy policy</a></li>
                    <li><a href="#">Jobs advertising</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
                <ul class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
                    <li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-google"></i></a></li>
                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                    <li><a href="#"><i class="ion-social-bitcoin"></i></a></li>
                </ul>

            </div><!-- oflow-hidden -->
        </div><!-- container -->
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>