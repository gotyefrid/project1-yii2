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
      $this->tpl = 'articles';
    }
    $this->tpl .= '.php';
  }
  public function run()
  {
    //Получение данных из кэша
    $menu = Yii::$app->cache->get('poparticles');
    if ($menu) {
      return $menu;
    }
    $this->data = Article::find()->where(['<>', 'top', '0'])->indexBy('id')->asArray()->limit(3)->all();
    $this->tree = $this->data;
    $this->menuhtml = $this->getMenuHtml($this->tree);
    // Устанавливаем кэш
    Yii::$app->cache->set('poparticles', $this->menuhtml, 10);

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
