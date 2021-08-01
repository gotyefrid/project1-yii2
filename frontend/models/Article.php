<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Article extends ActiveRecord
{

  public static function tableName()
  {
    return 'articles';
  }
  public function getCategory()
  {
    return $this->hasOne(Category::class, ['id' => 'category_id']);
  }
}
