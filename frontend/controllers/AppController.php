<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class AppController extends Controller 
{
  public function actions()
  {
      return [
          'error' => [
              'class' => 'yii\web\ErrorAction',
          ],
          'page' => [
            'class' => \yii\web\ViewAction::className(),
            'viewPrefix' => 'pages/' . \Yii::$app->language
        ]
      ];
  }
  public function beforeAction($action)
  {
     $this->view->title = Yii::$app->name;
    return parent::beforeAction($action);
  } 

protected function setMeta($title = null, $keywords = null, $description = null)
{
  $this->view->title = $title;
  $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
  $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
}
}