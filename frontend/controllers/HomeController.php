<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Article;

class HomeController extends AppController
{

  public function actionIndex()
  {
<<<<<<< HEAD
    $articles = Article::find()->where(['langArticle' => Yii::$app->language])->orderBy(['time' => SORT_DESC])->limit(6)->all();
=======
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
>>>>>>> 81e47292a2bdadd127fd52efb56f29ff3c9e59ce

    return $this->render('index', compact('articles'));
  }
}
