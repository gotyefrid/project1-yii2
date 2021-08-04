<?php

namespace backend\controllers;

use Yii;
use common\models\LoginForm;

/**
 * Site controller
 */
class AuthController extends AppAdminController
{
  public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            //return $this->goHome();
            return $this->redirect('/backend/web');
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }
}
