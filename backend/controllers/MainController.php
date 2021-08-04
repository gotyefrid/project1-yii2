<?php

namespace backend\controllers;

use app\models\Article;
use app\models\Category;

/**
 * Site controller
 */
class MainController extends AppAdminController
{
  public function actionIndex()
  {

    $articlesCount = Article::find()->count();
    $categoryCount = Category::find()->count();
    return $this->render('index', compact('articlesCount', 'categoryCount'));
  }
}
