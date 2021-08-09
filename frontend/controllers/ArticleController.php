<?php

namespace frontend\controllers;

use frontend\models\Article;
use frontend\models\Category; // FIXME: не используемые классы нужно подчищать
use Yii;


class ArticleController extends AppController
{
  // TODO: здесь нужно добавить docstring (https://manual.phpdoc.org/HTMLSmartyConverter/HandS/phpDocumentor/tutorial_tags.param.pkg.html). Для входящих аргументов @param, для тех что вернет функция использовать @return
  // TODO: это пример docstring:
  /**
   * Undocumented function
   *
   * @param [type] $id
   * @return void
   */
  public function actionView($id)
  {
    $article = Article::findOne($id); // BUG: что будет если придет ID, которого нет в БД? Необходимо обрабаотать это исключение.
    $this->setMeta("{$article->title} :: ".Yii::$app->name, $article->keywords, $article->description);
    return $this->render('view', compact('article'));
  }
}
