<?php

use yii\helpers\Html;
use kartik\file\FileInput;
use backend\models\Category;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

mihaildev\elfinder\Assets::noConflict($this);
/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin([]); ?>
<?php /*
    <div class="form-group field-article-category_id">
        <p><label class="control-label" for="article-category_id">Категория</label></p>
        <select id="article-category_id" class="form-control" name="Article[category_id]" aria-invalid="false">
            <?= MenuCategoryWidget::widget([
                'tpl' => 'selectArticle',
                'model' => $model,
                'cacheTime' => 1,
            ]) ?>
        </select>
    </div>
   */ ?>

    <?= $form->field($model, 'top')->dropDownList(Category::getCategoryList()) ?>

    <?= $form->field($model, 'langArticle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fullTitle')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>
        
    <?= $form->field($model, 'top')->dropDownList([
        'top-1' => 'Первая на главной',
        'top-2' => 'Вторая на главной',
        'top-3' => 'Третья на главной',
        'undertop' => 'Второй ряд на главной',
        '0' => 'Остальные',

    ]) ?>

    <?php
    echo $form->field($model, 'file')->widget(FileInput::class, [
        'options' => ['accept' => 'image/*'],
    ]); ?>

    <?php
    echo $form->field($model, 'content')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [
            'preset' => 'full',
            'inline' => false,
        ]),
    ]); ?>

    <!-- <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?> -->

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>