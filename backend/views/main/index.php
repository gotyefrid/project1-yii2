<?php


$this->title = 'Админка';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= $articlesCount ?></h3>
                <p>Кол-во статей на сайте</p>
            </div>
            <div class="icon">
                <i class="fa fa-newspaper-o"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to(['article/index']) ?>" class="small-box-footer">
                Подробнее <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?= $categoryCount ?></h3>
                <p>Кол-во категорий</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to(['category/index']) ?>" class="small-box-footer">
                Подробнее <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
            <div class="inner">
                <h3><?= ceil($weather['main']['temp']) . '°C' . " " ?><img src="http://openweathermap.org/img/wn/<?= $weather['weather']['0']['icon'] ?>.png"><?=ucfirst(strval($weather['weather']['0']['description']))?></h3>
                <p>Погода в городе <?= $weather['name'] ?>  </p>
            </div>
            <div class="icon">
                <i class="ion ion-cloud"></i>
            </div>
        </div>
    </div>
</div>