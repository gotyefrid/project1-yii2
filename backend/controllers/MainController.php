<?php

namespace backend\controllers;

use common\models\Article;
use common\models\Category;

class MainController extends AppAdminController
{
  public function actionIndex()
  {
    $articlesCount = Article::find()->count();
    $categoryCount = Category::find()->count();
    
    return $this->render('index', compact('articlesCount', 'categoryCount'));
  }
}
