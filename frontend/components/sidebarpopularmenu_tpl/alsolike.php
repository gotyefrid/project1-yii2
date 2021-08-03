<?php

use yii\helpers\Url;
?>
<div class="col-sm-6">
  <img class="rounded" src="<?= ($article['imgPreview'] == '') ? Url::to("/images/no-image.jpg") : Url::to("/images/{$article['imgPreview']}") ?>" alt="">
  <h4 class="pt-20"><a href="<?= Url::to(['article/view', 'id' => $article['id']]) ?>"><b><?= $article['title'] ?></b></a></h4>
  <ul class="list-li-mr-20 pt-10 mb-30">
    <li class="color-lite-black">by <a href="#" class="color-black"><b><?= $article['author'] ?> </b></a>
		<?=dateArticle($article['time'])?></li>
    <li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
    <li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
  </ul>
</div>