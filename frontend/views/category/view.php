<?php

use yii\helpers\Url;

?>
<section class="ptb-0">
	<div class="mb-30 brdr-ash-1 opacty-5"></div>
	<div class="container">
		<a class="mt-10" href="index.html"><i class="mr-5 ion-ios-home"></i>Home<i class="mlr-10 ion-chevron-right"></i></a>
		<a class="mt-10 color-ash" href="archive-page.html">Blog Archive</a>
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
							<a href="<?= Url::to(['article/view', 'id' => $article->id]) ?>"><img src="<?= Url::to("/images/{$article->img}") ?>" alt="">
								<h4 class="pt-20"><b><?= $article->title ?></b></h4>
							</a>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Olivia Capzallo,</b></a>
									Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
							</ul>
						</div><!-- col-sm-6 -->
					<?php endforeach; ?>
				</div><!-- row -->

				<a class="dplay-block btn-brdr-primary mt-20 mb-md-50" href="#"><b>LOAD MORE</b></a>
			</div><!-- col-md-9 -->

			<div class="d-none d-md-block d-lg-none col-md-3"></div>
			<div class="col-md-6 col-lg-4">
				<div class="pl-20 pl-md-0">
					<ul class="list-block list-li-ptb-15 list-btm-border-white bg-primary text-center">
						<li><b>1 BTC = $13,2323</b></li>
						<li><b>1 BCH = $13,2323</b></li>
						<li><b>1 ETH = $13,2323</b></li>
						<li><b>1 LTC = $13,2323</b></li>
						<li><b>1 DAS = $13,2323</b></li>
						<li><b>1 BCC = $13,2323</b></li>
					</ul>

					<?= $this->render('//layouts/popularpart/sidebar')   ?>

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