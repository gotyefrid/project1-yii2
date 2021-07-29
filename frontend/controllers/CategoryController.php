<?php

namespace frontend\controllers;

use frontend\models\Article;
use frontend\models\Category;
use yii\web\NotFoundHttpException;

class CategoryController extends AppController
{

  public function actionView($id)
  {
    $category = Category::findOne($id);
    if (empty($category)){
      throw new NotFoundHttpException('There is no category!');
    }
    $articles = Article::find()->where(['category_id' => $id])->all();
    return $this->render('view', compact('articles', 'category'));
  }

}
