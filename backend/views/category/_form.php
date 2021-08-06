<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \frontend\components\MenuCategoryWidget;

/* @var $this yii\web\View */
/* @var $model app\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'language')->textInput(['maxlength' => true]) ?>

    <div class="form-group field-category-parent_id">

        <p><label class="control-label" for="category-parent_id">Вложен в </label></p>
        <select id="category-parent_id" class="form-control" name="Category[parent_id]" aria-invalid="false">
            <option value="0">-</option>
            <?= MenuCategoryWidget::widget([
                'tpl' => 'selectCategory',
                'model' => $model,
                'cacheTime' => 1,
            ])?>
        </select>



    </div>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>