<?php

namespace frontend\components;

use frontend\models\Category;
use yii\base\Widget;

class MenuCategoryWidget extends Widget
{
  public $tpl;
  public $ul_class;
  public $data;
  public $tree;
  public $menuhtml;

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
    $this->data = Category::find()->select('id, parent_id, title')->indexBy('id')->asArray()->all();
    $this->tree = $this->getTree();
    $this->menuhtml = $this->getMenuHtml($this->tree);
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
  protected function getMenuHtml($tree)
  {
    $str = '';
    foreach ($tree as $category) {
      $str .= $this->catToTemplate($category);
    }
    return $str;
  }
  protected function catToTemplate($category)
  {
    ob_start();
    include __DIR__ . '/menucategory_tpl/' . $this->tpl;
    return ob_get_clean();
  }
}
