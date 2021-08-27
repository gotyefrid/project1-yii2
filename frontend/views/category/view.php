<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;
use common\components\SidebarPopularArticles;


?>
<section class="ptb-0">
	<div class="mb-30 brdr-ash-1 opacty-5"></div>
	<div class="container">
		<a class="mt-10" href="<?= url::home() ?>"><i class="mr-5 ion-ios-home"></i>Home<i class="mlr-10 ion-chevron-right"></i></a>
		<a class="mt-10 color-ash" href="<?= Url::to(['category/view', 'id' => $category->id]) ?>"><?= $category->title ?></a>
	</div><!-- container -->
</section>

<section>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-lg-8">

				<h4 class="p-title"><b><?= $category->title ?></b></h4>
				<div class="row">
					<?php foreach ($articles as $article) : ?>
						<div class="col-sm-6">
							<a href="<?= Url::to(['article/view', 'id' => $article->id]) ?>"><img src="<?= Url::to("/backend/web/{$article->imgPreview}") ?>" alt="" class="melrounded">
								<h4 class="pt-20"><b><?= $article->title ?></b></h4>
							</a>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b><?= $article->author ?></b></a>
									<?= dateArticle($article->time) ?></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
							</ul>
						</div><!-- col-sm-6 -->
					<?php endforeach; ?>
					<div class="col-md-12">
						<?= LinkPager::widget([
							'pagination' => $pages,
							'maxButtonCount' => 10,
							'pageCssClass' => 'page-item',
							'linkOptions' => [
								'class' => 'page-link page-link-mel'
							],
							'prevPageCssClass' => 'page-item',
							'nextPageCssClass' => 'page-item',
							'disabledListItemSubTagOptions' => [
								'tag' => 'a',
								'class' => 'page-link page-link-mel',
								'tabindex' => '-1',
							],
							'options' => [
								'class ' => 'pagination pagination-melsize justify-content-center'
							]
						]) ?>

					</div>
				</div><!-- row -->

				<a class="dplay-block btn-brdr-primary mt-20 mb-md-50" href="#"><b>LOAD MORE</b></a>
			</div><!-- col-md-9 -->

			<div class="d-none d-md-block d-lg-none col-md-3"></div>
			<div class="col-md-6 col-lg-4">
				<div class="pl-20 pl-md-0">
					<div class="mtb-0">
						<h4 class="p-title"><b><?= Yii::t('common', 'POPULAR POSTS') ?></b></h4>
						<?= SidebarPopularArticles::widget([
							'tpl' => 'sidebar-popular-menu'
						]) ?>
					</div>

				</div><!--  pl-20 -->
			</div><!-- col-md-3 -->

		</div><!-- row -->
	</div><!-- container -->
</section>