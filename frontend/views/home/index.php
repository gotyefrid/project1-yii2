<?php

use common\components\SidebarPopularArticles;

?>

<div class="container">
	<div class="h-600x h-sm-auto">
		<div class="h-2-3 h-sm-auto oflow-hidden">
			<?php foreach ($articles as $article) : ?>
				<?php if ($article->top == 'top-1') : ?>
					<div class="pb-5 pr-5 pr-sm-0 float-left float-sm-none w-2-3 w-sm-100 h-100 h-sm-300x">
						<a class="pos-relative h-100 dplay-block" href="<?= \yii\helpers\Url::to(['article/view', 'id' => $article->id]) ?>">

							<div class="img-bg bg-grad-layer-6" style="background: url(<?= \yii\helpers\Url::to("/backend/web/{$article->imgPreview}") ?>) no-repeat center; background-size: cover;"></div>

							<div class="abs-blr color-white p-20 bg-sm-color-7 melrounded">
								<h3 class="mb-15 mb-sm-5 font-sm-13"><b><?= $article->title ?></b></h3>
								<ul class="list-li-mr-20">
									<li>by <span class="color-primary"><b><?= $article->author ?></b></span> <?= dateArticle($article->time) ?></li>
								</ul>
							</div>
							<!--abs-blr -->
						</a><!-- pos-relative -->
					<?php endif; ?>
				<?php endforeach; ?>
					</div><!-- w-1-3 -->

					<div class="float-left float-sm-none w-1-3 w-sm-100 h-100 h-sm-600x">
						<?php foreach ($articles as $article) : ?>
							<?php if ($article->top == 'top-2' or $article->top == 'top-3') : ?>
								<div class="pl-5 pb-5 pl-sm-0 ptb-sm-5 pos-relative h-50">
									<a class="pos-relative h-100 dplay-block" href="<?= \yii\helpers\Url::to(['article/view', 'id' => $article->id]) ?>">

										<div class="img-bg bg-grad-layer-6" style="background: url(<?= \yii\helpers\Url::to("/backend/web/{$article->imgPreview}") ?>) no-repeat center; background-size: cover;"></div>

										<div class="abs-blr color-white p-20 bg-sm-color-7 melrounded">
											<h4 class="mb-10 mb-sm-5"><b><?= $article->title ?></b></h4>
											<ul class="list-li-mr-20">
												<li> <?= dateArticle($article->time) ?></li>
											</ul>
										</div>
										<!--abs-blr -->
									</a><!-- pos-relative -->
								</div><!-- w-1-3 -->
							<?php endif; ?>
						<?php endforeach; ?>
					</div><!-- float-left -->

		</div><!-- h-2-3 -->
		<div class="h-1-3 oflow-hidden">
			<?php
			foreach ($articles as $article) : ?>
				<?php if ($article->top == 'undertop') : ?>
					<div class="pr-5 pr-sm-0 pt-5 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
						<a class="pos-relative h-100 dplay-block" href="<?= \yii\helpers\Url::to(['article/view', 'id' => $article->id]) ?>">

							<div class="img-bg bg-grad-layer-6" style="background: url(<?= \yii\helpers\Url::to("/backend/web/{$article->imgPreview}") ?>) no-repeat center;
    background-size: cover;"></div>

							<div class="abs-blr color-white p-20 bg-sm-color-7 melrounded">
								<h4 class="mb-10 mb-sm-5"><b><?= $article->title ?></b></h4>
								<ul class="list-li-mr-20">
									<li> <?= dateArticle($article->time) ?></li>
								</ul>
							</div>
							<!--abs-blr -->
						</a><!-- pos-relative -->
					</div><!-- w-1-3 -->
				<?php endif; ?>
			<?php endforeach; ?>


		</div><!-- h-2-3 -->
	</div><!-- h-100vh -->
</div><!-- container -->


<section>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-lg-8">


				<h4 class="p-title mt-30"><b><?= Yii::t('common', 'RECENT NEWS') ?></b></h4>
				<div class="row">
					<?php for ($i = 0; $i <= 3; $i++) : ?>
						<?php if (isset($articles[$i])) : ?>
							<div class="col-sm-6">
								<a href="<?= \yii\helpers\Url::to(['article/view', 'id' => $articles[$i]->id]) ?>">
									<img class="melrounded" src="<?= ($articles[$i]->imgPreview == '') ? \yii\helpers\Url::to("/backend/web/no-image.jpg") : \yii\helpers\Url::to("/backend/web/{$articles[$i]->imgPreview}") ?>" alt="">
									<h4 class="pt-20"><b><?= $articles[$i]->title ?></b>
								</a></h4>
								<ul class="list-li-mr-20 pt-10 mb-30">
									<li class="color-lite-black">by <a href="#" class="color-black"><b><?= $articles[$i]->author ?></b></a>
										<?= dateArticle($articles[$i]->time) ?></li>
								</ul>
							</div><!-- col-sm-6 -->
						<?php endif; ?>
					<?php endfor; ?>
				</div><!-- row -->

				<a class="dplay-block btn-brdr-primary mt-20 mb-md-50" href="#"><b>VIEW MORE CRYPTO MINING EVENTS</b></a>
			</div><!-- col-md-9 -->

			<div class="d-none d-md-block d-lg-none col-md-3"></div>
			<div class="col-md-6 col-lg-4">
				<div class="pl-20 pl-md-0">
					<div class="mtb-30">
						<h4 class="p-title"><b><?= Yii::t('common', 'POPULAR POSTS') ?></b></h4>
						<?= SidebarPopularArticles::widget([
							'tpl' => 'sidebar-popular-menu'
						]) ?>
					</div>
					<div class="mtb-50 pos-relative">
						<img src="/images/banner-1-600x450.jpg" alt="">
						<div class="abs-tblr bg-layer-7 text-center color-white">
							<div class="dplay-tbl">
								<div class="dplay-tbl-cell">
									<h4><b>Available for mobile & desktop</b></h4>
									<a class="mt-15 color-primary link-brdr-btm-primary" href="#"><b>Download for free</b></a>
								</div><!-- dplay-tbl-cell -->
							</div><!-- dplay-tbl -->
						</div><!-- abs-tblr -->
					</div><!-- mtb-50 -->

					<div class="mtb-50 mb-md-0">
						<h4 class="p-title"><b>NEWSLETTER</b></h4>
						<p class="mb-20">Subscribe to our newsletter to get notification about new updates,
							information, discount, etc..</p>
						<form class="nwsltr-primary-1">
							<input type="text" placeholder="Your email" />
							<button type="submit"><i class="ion-ios-paperplane"></i></button>
						</form>
					</div><!-- mtb-50 -->

				</div><!--  pl-20 -->
			</div><!-- col-md-3 -->

		</div><!-- row -->
	</div><!-- container -->
</section>