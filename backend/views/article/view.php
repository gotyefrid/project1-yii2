<?php

use yii\helpers\Html;
use yii\validators\Validator;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Статьи/проклы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Вы уверены что хотите удалить эту статью?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </div>

                <div class="box-body">
                    <div class="order-view">

                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'id',
                                'time',
                                [
                                    'attribute' => 'category_id',
                                    'value' => $model->category_id ? $model->category->title : 'Без категории',
                                ],
                                'langArticle',
                                'title',
                                'fullTitle:ntext',
                                'author',
                                'description',
                                'keywords',
                                [
                                    'attribute' => 'imgPreview',
                                    'value' => "/backend/web/{$model->imgPreview}",
                                    'format' => 'image'
                                ],
                                'top',
                                'content:html',
                            ],
                            'template' => "<tr><th class='thmel'>{label}</th><td>{value}</td></tr>"
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>