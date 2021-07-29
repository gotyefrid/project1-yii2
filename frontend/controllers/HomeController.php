<?php

namespace frontend\controllers;

use frontend\models\Article;

class HomeController extends AppController
{

  public function actionIndex()
  {
    $toparticles = Article::find()->where(['<>', 'top', '0'])->all();
    $recentarticles = Article::find()->where(['=', 'top', '0'])->orderBy(['time' => SORT_DESC])->all();
    $populararticles = Article::find()->where(['<>', 'top', '0'])->limit(3)->all();
    return $this->render('index', compact('toparticles', 'recentarticles', 'populararticles'));
  }

}
