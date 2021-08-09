<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Article;

class HomeController extends AppController
{

  public function actionIndex()
  {
    $articles = Article::find()
    ->where(['langArticle' => Yii::$app->language])
    ->orderBy(['time' => SORT_DESC])
    ->limit(6)
    ->all();

    return $this->render('index', compact('articles'));
  }
}
