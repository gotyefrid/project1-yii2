<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Article;

class HomeController extends AppController
{

  public function actionIndex()
  {
    // FIXME: по стандартам программирования (в частности и в PHP) нужно чтобы длина строки была до 120 символов. Все что больше нужно переносить на следующую строчку.
    $articles = Article::find()->where(['langArticle' => Yii::$app->language])->orderBy(['time' => SORT_DESC])->limit(6)->all();
    /**
     * Example:
     *
     * $articles = Article::find()
     *   ->where(['langArticle' => Yii::$app->language])
     *   ->orderBy(['time' => SORT_DESC])
     *   ->limit(6)
     *   ->all();
     */

    return $this->render('index', compact('articles'));
  }
}
