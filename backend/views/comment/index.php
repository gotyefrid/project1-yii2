<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Комментарии';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <idv class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
            </div>
            <div class="box-body">
                <div class="comment-index">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            [
                                'class' => 'yii\grid\SerialColumn',
                                'options' => [
                                    'style' => 'width: 2%;'
                                ],
                            ],
                            [
                                'attribute' => 'id',
                                'options' => [
                                    'style' => 'width: 5%;'
                                ],
                                'contentOptions' => [
                                    'style' => 'text-align: center;'
                                ],
                            ],
                            [
                                'attribute' => 'date',
                                'options' => [
                                    'style' => 'width: 10%'
                                ],
                                'contentOptions' => [
                                    'style' => 'text-align: center;'
                                ],
                            ],
                            [
                                'attribute' => 'article_id',
                                'options' => [
                                    'style' => 'width: 5%'
                                ],
                                'contentOptions' => [
                                    'style' => 'text-align: center;'
                                ],
                            ],
                            [
                                'attribute' => 'name',
                                'options' => [
                                    'style' => 'width: 10%'
                                ],
                            ],
                            'text:ntext',

                            [
                                'class' => 'yii\grid\ActionColumn',
                                'options' => [
                                    'style' => 'width: 5%;'
                                ],
                                'contentOptions' => [
                                    'style' => 'text-align: center;'
                                ],
                            ],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </idv>
</div>