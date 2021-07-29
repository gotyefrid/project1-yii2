<?php

use yii\helpers\Url;
?>

							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="<?= Url::to(['article/view', 'id' => $article['id']]) ?>">
								<div class="wh-100x abs-tlr"><img src="<?= ($article['img'] == '') ? \yii\helpers\Url::to("/images/no-image.jpg") : \yii\helpers\Url::to("/images/{$article['img']}") ?>" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b><?= $article['title'] ?></b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->