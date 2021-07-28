<?php

use yii\helpers\Url;
?>
<li><a href="<?=Url::to(['category/view', 'id' => $category['id']])?>"><?= $category['title'] ?></a></li>