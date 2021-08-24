<?php

namespace backend\controllers;

use Yii;
use yii\filters\VerbFilter;
use common\models\LoginForm;

/**
 * Site controller
 */
class AuthController extends AppAdminController
{
  public $layout = 'authtpl';
    
  /**
   * actionLogin
   *
   * @return void
   */
  public function actionLogin()
  {
    if (!Yii::$app->user->isGuest) {
      //return $this->goHome();
      return $this->redirect('/backend/web/');
    }

    $model = new LoginForm();
    if ($model->load(Yii::$app->request->post()) && $model->login()) {
      return $this->redirect('/backend/web/');
    } else {
      $model->password = '';

      return $this->render('login', [
        'model' => $model,
      ]);
    }
  }  
  /**
   * actionLogout
   *
   * @return void
   */
  public function actionLogout()
  {
    Yii::$app->user->logout();

    return $this->redirect('/backend/web/');
  }
  
}
