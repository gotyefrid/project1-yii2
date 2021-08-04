<?php

namespace backend\controllers;



/**
 * Site controller
 */
class MainController extends AppAdminController
{
  public function actionIndex()
  {
    return $this->render('index');
  }
}
