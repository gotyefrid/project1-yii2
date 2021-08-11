<?php

use yii\helpers\Url;
use frontend\components\SidebarPopularArticles;

// FIXME: чтобы обозначить окончания действия тега в HTML-разметки используют "слэш", далее идет . (если это селектор) или # (если это идентификатор), а потом название. Например, <!-- /.container -->

?>

<section class="ptb-0">
	<div class="mb-30 brdr-ash-1 opacty-5"></div>
	<div class="container">
		<a class="mt-10" href="<?= Url::home() ?>"><i class="mr-5 ion-ios-home"></i><?= Yii::t('common', 'Home') ?><i class="mlr-10 ion-chevron-right"></i></a>
		<a class="mt-10" href="<?= Url::to(['category/view', 'id' => $article->category->id]) ?>"><?= $article->category->title ?><i class="mlr-10 ion-chevron-right"></i></a>
		<a class="mt-10 color-ash" href="<?= Url::to(['article/view', 'id' => $article->id]) ?>"><?= $article->title ?></a>
	</div><!-- container -->
</section>

<section>
	<div class="container">
		<div class="row">
			<!-- Content, Also Like, Comments -->
			<div class="col-md-12 col-lg-8">
				<h3 class="mt-0"><b><?= $article->fullTitle ?></b></h3>
				<ul class="list-li-mr-20 mtb-15">
					<li>by <a href="#"><b><?= $article->author ?> </b></a> <?= dateArticle($article->time) ?></li>
					<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><?=count($article->comments)?></li>
				</ul>
				<!-- Content of article -->
				<?= $article->content ?>
				<div class="float-left-right text-center mt-40 mt-sm-20">

					<ul class="mb-30 list-li-mt-10 list-li-mr-5 list-a-plr-15 list-a-ptb-7 list-a-bg-grey list-a-br-2 list-a-hvr-primary ">
						<li><a href="#">MULTIPURPOSE</a></li>
						<li><a href="#">FASHION</a></li>
						<li class="mr-0"><a href="#">BLOGS</a></li>
					</ul>
					<ul class="mb-30 list-a-bg-grey list-a-hw-radial-35 list-a-hvr-primary list-li-ml-5">
						<li class="mr-10 ml-0">Share</li>
						<li><a href="#"><i class="ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="ion-social-google"></i></a></li>
						<li><a href="#"><i class="ion-social-instagram"></i></a></li>
					</ul>

				</div><!-- float-left-right -->

				<div class="brdr-ash-1 opacty-5"></div>

				<h4 class="p-title mt-50"><b>YOU MAY ALSO LIKE</b></h4>
				<div class="row">
					<?= SidebarPopularArticles::widget([
						'tpl' => 'also-like'
					]) ?>
				</div><!-- row -->

				<h4 class="p-title mt-20"><b><?=count($article->comments)?> COMMENTS</b></h4>
				<?php foreach ($article->comments as $comment) : ?>
				<div class="sided-70 mb-40">

					<div class="s-left rounded">
						<img src="<?=url::to("/backend/web/$comment->img")?>" alt="">
					</div><!-- s-left -->

					<div class="s-right ml-100 ml-xs-85">
					
						<h5><b><?=$comment->name?> </b> <span class="font-8 color-ash"><?=dateComment($comment->date)?></span></h5>
						<p class="mtb-15"><?=$comment->text?></p>
						<!-- <a class="btn-brdr-grey btn-b-sm plr-15 mr-10 mt-5" href="#"><b>LIKE</b></a>
						<a class="btn-brdr-grey btn-b-sm plr-15 mt-5" href="#"><b>REPLY</b></a> -->

					</div><!-- s-right -->

				</div><!-- sided-70 -->
				<?php endforeach; ?>

				<h4 class="p-title mt-20"><b>LEAVE A COMMENT</b></h4>

				<form class="form-block form-plr-15 form-h-45 form-mb-20 form-brdr-lite-white mb-md-50">
					<input type="text" placeholder="Your Name*:">
					<textarea class="ptb-10" placeholder="Your Comment"></textarea>
					<button class="btn-fill-primary plr-30" rows="4" cols="50" type="submit"><b>LEAVE A COMMENT</b></button>
				</form>
			</div><!-- Content, Also Like, Comments -->

			<div class="col-md-6 col-lg-4">
				<div class="pl-20 pl-md-0">

					<div class="mtb-0">
						<h4 class="p-title"><b><?= Yii::t('common', 'POPULAR POSTS') ?></b></h4>
						<?= SidebarPopularArticles::widget([
							'tpl' => 'sidebar-popular-menu'
						]) ?>
					</div><!-- mtb-50 -->

					<div class="mtb-50 pos-relative">
						<img src="/images/banner-1-600x450.jpg" alt="">
						<div class="abs-tblr bg-layer-7 text-center color-white">
							<div class="dplay-tbl">
								<div class="dplay-tbl-cell">
									<h4><b>Available for mobile &amp; desktop</b></h4>
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
							<input type="text" placeholder="Your email">
							<button type="submit"><i class="ion-ios-paperplane"></i></button>
						</form>
					</div><!-- mtb-50 -->

				</div><!--  pl-20 -->
			</div><!-- col-md-3 -->

		</div><!-- row -->

	</div><!-- container -->
</section>