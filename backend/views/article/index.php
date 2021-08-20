<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Статьи/проклы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <?= Html::a('Создать новую', ['create'], ['class' => 'btn btn-success']) ?>
                </div>
                <div class="box-body">
                    <div class="order-index table-responsive">
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'pager' => [
                                'class' => '\yii\widgets\LinkPager',
                                'options' => [
                                    'class ' => 'pagination',
                                    'style' => 'display: flex; justify-content: center;'
                                ]
                            ],
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                'id',
                                'time',
                                [
                                    'attribute' => 'category_id',
                                    'value' => function ($data) {
                                        return isset($data->category_id) ? $data->category->title : 'Без категории';
                                    },
                                ],
                                'langArticle',
                                'title',
                                //'fullTitle:ntext',
                                'author',
                                //'content:ntext',
                                //'description',
                                //'keywords',
                                [
                                    'attribute' => 'imgPreview',
                                    'value' => function ($data) {
                                        return "/backend/web/{$data->imgPreview}";},
                                    'format' => ['image', ['style' => 'max-width:100px; max-height:40px']]
                                ],
                                'top',

                                ['class' => 'yii\grid\ActionColumn'],
                            ],
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>