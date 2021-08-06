<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\components\MenuCategoryWidget;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin([
        'fieldConfig' => [
            'template' => "
            <div class='col-md-6'>
            <p>{label}</p> \n {input} \n
            <div>{error}</div>
            </div>
            ",
        ]
    ]); ?>

    <div class="form-group field-article-category_id">
        <div class="col-md-6">
            <p><label class="control-label" for="article-category_id">Категория</label></p>
            <select id="article-category_id" class="form-control" name="Article[category_id]" aria-invalid="false">
                <?= MenuCategoryWidget::widget([
                    'tpl' => 'selectArticle',
                    'model' => $model,
                    'cacheTime' => 1,
                ]) ?>
            </select>
        </div>
    </div>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fullTitle')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imgPreview')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'top')->dropDownList([
        'top-1' => 'Первая на главной',
        'top-2' => 'Вторая на главной',
        'top-3' => 'Третья на главной',
        'undertop' => 'Второй ряд на главной',
        '0' => 'Остальные',

    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>