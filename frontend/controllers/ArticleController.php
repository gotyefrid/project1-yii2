<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Article;
use yii\web\NotFoundHttpException;


class ArticleController extends AppController
{
  /**
   * actionView function
   *
   * @param int $id article identification number in the database
   * @return void render content of home page
   */
  public function actionView($id)
  {
    $article = Article::findOne($id);

    if (empty($article)) {
      throw new NotFoundHttpException('There is no atricle!');
    }

    $this->setMeta("{$article->title} :: " . Yii::$app->name, $article->keywords, $article->description);
    return $this->render('view', compact('article'));
  }
}
