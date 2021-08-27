<?php

namespace frontend\controllers;

use Yii;
use common\models\Article;
use yii\web\NotFoundHttpException;


/**
 * ArticleController - обработчик отвечающий за статьи
 */
class ArticleController extends AppController
{
    /**
     * actionView - страница просмотра статьи
     *
     * @param int $id article identification number in the database
     * @return void render content of home page
     */
    public function actionView($id)
    {
        $article = Article::findOne($id);

        if ($_POST) {
            $name = htmlspecialchars(trim($_POST['name']));
            $text = htmlspecialchars(trim($_POST['text']));
            $article_id = (int)$_POST['id'];

            Yii::$app->db->createCommand()->insert('comment', [
                'name' => $name,
                'text' => $text,
                'article_id' => $article_id,
            ])->execute();
        };

        if (empty($article)) {
            throw new NotFoundHttpException('There is no atricle!');
        }

        $this->setMeta("{$article->title} :: " . Yii::$app->name, $article->keywords, $article->description);

        return $this->render('view', compact('article'));
    }
}
