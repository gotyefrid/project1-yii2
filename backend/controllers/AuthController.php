<?php

namespace backend\controllers;

use Yii;
use common\models\LoginForm;

/**
 * AuthController - контроллер управления страницей авторизации админки
 */
class AuthController extends AppAdminController
{
    public $layout = 'authtpl';

    /**
     * actionLogin - обработка пользователей
     *
     * @return void
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
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
     * actionLogout - выход из учетки
     *
     * @return void
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect('/backend/web/');
    }
}
