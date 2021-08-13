<?php

namespace common\components;

use Yii;
use yii\base\Widget;
use common\models\Category;

class MenuCategoryWidget extends Widget
{
  public $tpl;
  public $ul_class;
  public $data;
  public $tree;
  public $menuhtml;
  public $model;
  public $cacheTime = 1;

  public function init()
  {
    parent::init();

    if ($this->tpl === null) {
      $this->tpl = 'category';
    }

    $this->tpl .= '.php';
  }
  public function run()
  {
    //Получение данных из кэша
    $menu = Yii::$app->cache->get('category');

    if ($menu) {
      return $menu;
    }

    (Yii::$app->language == 'ru') 
    ?  $this->data = Category::find()->select('id, language, parent_id, title')->indexBy('id')->orderBy(['title' => SORT_ASC])->asArray()->all()
    :  $this->data = Category::find()->select('id, language, parent_id, title')->where(['language' => Yii::$app->language])->indexBy('id')->asArray()->all();

    $this->tree = $this->getTree();
    $this->menuhtml = $this->getMenuHtml($this->tree);
    // Устанавливаем кэш
    Yii::$app->cache->set('category', $this->menuhtml, $this->cacheTime);

    return  $this->menuhtml;
  }
  protected function getTree()
  {

    $tree = [];

    foreach ($this->data as $id => &$node) {

      if (!$node['parent_id']) {
        $tree[$id] = &$node;
      } else {
        $this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
      }
    }
    return $tree;
  }
  protected function getMenuHtml($tree, $tab ='')
  {
    $str = '';

    foreach ($tree as $category) {
      $str .= $this->catToTemplate($category, $tab);
    }
    
    return $str;
  }
  protected function catToTemplate($category, $tab)
  {
    ob_start();
    include __DIR__ . '/menucategory_tpl/' . $this->tpl;
    return ob_get_clean();
  }
}
