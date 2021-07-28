<?php

namespace frontend\controllers;

class HomeController extends AppController
{

  public function actionIndex()
  {
    return $this->render('view');
  }

}
