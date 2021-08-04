<?php


$this->title = 'Админка';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?= $articlesCount ?></h3>
        <p>Прокл на сайте</p>
      </div>
      <div class="icon">
        <i class="fa fa-shopping-cart"></i>
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
        <p>Категорий</p>
      </div>
      <div class="icon">
        <i class="fa fa-cubes"></i>
      </div>
      <a href="<?= \yii\helpers\Url::to(['category/index']) ?>" class="small-box-footer">
        Подробнее <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
</div>