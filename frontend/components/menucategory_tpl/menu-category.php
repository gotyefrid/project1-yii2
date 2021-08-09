<?php

use yii\helpers\Url;
?>
<?php
// FIXME: для генерации тега для ссылки ты можешь использовать хелпер - yii\helpers\Html::a($text, $url, $options = []) . А в $url передать ['category/view', 'id' => $category['id']]
?>

<li><a href="<?=Url::to(['category/view', 'id' => $category['id']])?>"><?= strtoupper($category['title']) ?></a></li>