<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Article;

class HomeController extends AppController
{

  public function actionIndex()
  {
    $toparticles = Article::find()->where(['<>', 'top', '0'])->andWhere(['langArticle' => Yii::$app->language])->all();
    $recentarticles = Article::find()->where(['=', 'top', '0'])->andWhere(['langArticle' => Yii::$app->language])->orderBy(['time' => SORT_DESC])->all();
    $populararticles = Article::find()->where(['<>', 'top', '0'])->andWhere(['langArticle' => Yii::$app->language])->limit(3)->all();
    

    return $this->render('index', compact('toparticles', 'recentarticles', 'populararticles'));
  }
}
