<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
            </div>
            <div class="box-body">
                <div class="category-index">
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
                                'attribute' => 'language',
                                'options' => [
                                    'style' => 'width: 5%'
                                ],
                                'contentOptions' => [
                                    'style' => 'text-align: center;'
                                ],
                            ],
                            [
                                'attribute' => 'parent_id',
                                'value' => function ($data) {
                                    return $data->category->title ?? '-';
                                },
                                'options' => [
                                    'style' => 'width: 10%'
                                ],
                                'contentOptions' => [
                                    'style' => 'text-align: center;'
                                ],
                            ],
                            'title',
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
    </div>
</div>