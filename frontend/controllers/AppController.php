<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * AppController - общий контроллер фронтенд части
 */
class AppController extends Controller
{  
  /**
   * This method is meant to be overwritten to declare external actions for the controller. 
   * It should return an array, with array keys being action IDs, 
   * and array values the corresponding action class names or action configuration arrays.
   *
   * @return void
   */
  public function actions()
  {
    return [
      'error' => [
        'class' => 'yii\web\ErrorAction',
      ],
      'page' => [
        'class' => \yii\web\ViewAction::class,
        'viewPrefix' => 'pages/' . \Yii::$app->language
      ]
    ];
  }
  
  /**
   * beforeAction
   *
   * @param  mixed $action
   * @return void
   */
  public function beforeAction($action)
  {
    $this->view->title = Yii::$app->name;
    
    return parent::beforeAction($action);
  }

  /**
   * setMeta function
   *
   * @param string $title title of page
   * @param string $keywords some keywords of page
   * @param string $description some description of page
   */
  protected function setMeta($title = null, $keywords = null, $description = null)
  {
    $this->view->title = $title;
    $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
    $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
  }
}
