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

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <p>
        <?= Html::a('Создать новую', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

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
            'imgPreview',
            //'top',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>