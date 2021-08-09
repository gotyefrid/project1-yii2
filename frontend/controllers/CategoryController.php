<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Article;
use frontend\models\Category;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;

class CategoryController extends AppController
{

  public function actionView($id)
  {
    $category = Category::findOne($id);

    if (empty($category)){
      throw new NotFoundHttpException('There is no category!');
    }
    
    $this->setMeta("{$category->title} :: ".Yii::$app->name, $category->keywords, $category->description);
    $queryart = Article::find()->where(['category_id' => $id]);
    $pages = new Pagination(['totalCount' => $queryart->count(), 'pageSize' => 2, 'pageSizeParam' => false, 'forcePageParam' => false]);
    $articles = $queryart->offset($pages->offset)->limit($pages->limit)->all();
    return $this->render('view', compact('articles', 'category', 'pages'));
  }

}
