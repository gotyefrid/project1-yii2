<?php

use frontend\components\SidebarPopularArticles;
?>
<div class="mtb-50">
						<h4 class="p-title"><b><?=Yii::t('common', 'POPULAR POSTS')?></b></h4>
<?= SidebarPopularArticles::widget([
  'tpl' => 'sidebarpopularmenu'
]) ?>


            </div><!-- mtb-50 -->