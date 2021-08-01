<?php

namespace frontend\controllers;

use frontend\models\Article;
use frontend\models\Category;
use Yii;


class ArticleController extends AppController
{

  public function actionView($id)
  {
    $article = Article::findOne($id);
    $this->setMeta("{$article->title} :: ".Yii::$app->name, $article->keywords, $article->description);
    return $this->render('view', compact('article'));
  }
}
