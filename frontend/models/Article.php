<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Article extends ActiveRecord
{

  public static function tableName()
  {
    return 'articles'; // FIXME: название таблиц в БД должны храниться в единственном числе
    // TODO: я не нашел миграцию на создание таблицы article. Все таблицы в БД нужно создавать через миграции (пример console/migrations/m130524_201442_init.php)
  }
  public function getCategory()
  {
    return $this->hasOne(Category::class, ['id' => 'category_id']);
  }
}
