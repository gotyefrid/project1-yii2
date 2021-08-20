<?php

namespace backend\models;

use common\models\Category as CategoryBase;
use yii\helpers\ArrayHelper;

class Category extends CategoryBase
{
    public static function getCategoryList()
    {
        $categories = self::find()->select('id, language, parent_id, title')->indexBy('id')->orderBy(['title' => SORT_ASC])->asArray()->all();

        return ArrayHelper::map($categories, 'id', function($model){
        return $model['title'] . " " . strtoupper($model['language']);
        });
    }
}
