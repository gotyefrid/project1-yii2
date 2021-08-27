<?php

namespace frontend\controllers;

use Yii;
use common\models\Article;


/**
 * HomeController - обработчик главной страницы
 */
class HomeController extends AppController
{
  
  /**
   * actionIndex - главная страница сайта
   *
   * @return void
   */
  public function actionIndex()
  {
    $articles = Article::find()
    ->where(['langArticle' => Yii::$app->language])
    ->orderBy(['time' => SORT_DESC])
    ->all();

    return $this->render('index', compact('articles'));
  }
}
