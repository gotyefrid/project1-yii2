<?php

use yii\helpers\Url;
?>
<a class="oflow-hidden pos-relative mb-20 dplay-block" href="<?= Url::to(['article/view', 'id' => $article['id']]) ?>">
	<div class="wh-100x abs-tlr"><img class="rounded" src="<?= ($article['imgPreview'] == '') ? Url::to("/images/no-image.jpg") : Url::to("/images/{$article['imgPreview']}") ?>" alt=""></div>
	<div class="ml-120 min-h-100x">
		<h5><b><?= $article['title'] ?></b></h5>
		<h6 class="color-lite-black pt-10">by <span class="color-black"><b><?= $article['author'] ?></b></span> <?=dateArticle($article['time'])?></h6>
	</div>
</a><!-- oflow-hidden -->