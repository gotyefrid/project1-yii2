<?php

namespace frontend\components;

use Yii;
use yii\base\Widget;
use frontend\models\Article;

class SidebarPopularArticles extends Widget
{
  public $tpl;
  public $data;
  public $tree;
  public $menuhtml;

  public function init()
  {
    parent::init();

    if ($this->tpl === null) {
      $this->tpl = 'sidebar-popular-menu'; 
    }

    $this->tpl .= '.php';
  }
  public function run()
  {
    //Получение данных из кэша
    $menu = Yii::$app->cache->get('pop-articles');

    if ($menu) { 
      return $menu;
    }

    $this->data = Article::find()
    ->andWhere(['langArticle' => Yii::$app->language])
    ->indexBy('id')
    ->orderBy('RAND()')
    ->with('comments')
    ->asArray()
    ->limit(2)
    ->all();
    
    $this->tree = $this->data;
    $this->menuhtml = $this->getMenuHtml($this->tree);
    // Устанавливаем кэш
    Yii::$app->cache->set('pop-articles', $this->menuhtml, 1);

    return  $this->menuhtml;
  }

  protected function getMenuHtml($tree)
  {
    $str = '';

    foreach ($tree as $article) {
      $str .= $this->catToTemplate($article);
    }
    
    return $str;
  }
  protected function catToTemplate($article)
  {
    ob_start();
    include __DIR__ . '/sidebarpopularmenu_tpl/' . $this->tpl;
    return ob_get_clean();
  }
}
