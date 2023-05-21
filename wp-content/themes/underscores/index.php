

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Document</title>
	<link href="<?php echo get_template_directory_uri(); ?>/reset.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
	<script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>


</head>
<body>
	<?php get_header(); ?>

	<section class="main-visual">
		<div class="splide" aria-label="スライダー">
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide">
          <img src="./wp-content/uploads/mv1_pc.webp" class="PC" alt="スライダー画像_PC_1">
          <img src="./wp-content/uploads/mv1_sp.webp" class="SP" alt="スライダー画像_SP_1">
        </li>
        <li class="splide__slide">
          <img src="./wp-content/uploads/mv2_pc.webp" class="PC" alt="スライダー画像_PC_2">
          <img src="./wp-content/uploads/mv2_sp.webp" class="SP" alt="スライダー画像_SP_2">
        </li>
        <li class="splide__slide">
          <img src="./wp-content/uploads/mv3_pc.webp" class="PC" alt="スライダー画像_PC_3">
          <img src="./wp-content/uploads/mv3_sp.webp" class="SP" alt="スライダー画像_SP_3">
        </li>
      </ul>
    </div>
  </div>

		<div class="main-title">
			<h2>
			<p><span>人の価値と</span></p>
			<p><span>未来を想像する</span></p>
      </h2>
			<h3>
			<p><span>CREATING VALUE FOR</span></p>
			<p><span>PEOPLE AND THE FUTURE</span></p>
      </h3>
		</div>
	</section>

	<main class="main">
		<section class="news">
			<div class="container">
				<div class="content-inner">
					<div class="news-layout">
						<div class="section-title">
							<h4>NEWS</h4>
							<p>お知らせ</p>
						</div>
							<ul class="news-list">
								<li>
									<time>0000.00.00</time>
									<p>ニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入ります</p>
								</li>
								<li>
									<time>0000.00.00</time>
									<p>ニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入ります</p>
								</li>
								<li>
									<time>0000.00.00</time>
									<p>ニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入ります</p>
								</li>
								<li>
									<time>0000.00.00</time>
									<p>ニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入ります</p>
								</li>
								<li>
									<time>0000.00.00</time>
									<p>ニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入ります</p>
								</li>
							</ul>
						</div>
						<p class="news-list-other"><a href="">お知らせ一覧はこちら</a></p>
				</div>
			</div>
		</section>
		<section class="company-profile">
			<div class="container">
				<div class="profile-list company">
					<div class="profile-images"><img alt="会社概要のイメージ画像" src="./wp-content/uploads/company.png">
					</div>
					<div class="profile-items">
						<div class="profile-text">
							<h5>会社概要</h5>
							<p>株式会社LULLの企業情報をお伝えします。<br>
							私たちは「人の価値と未来を創造する」を理念とし、人の持つ「価値」 を伸ばしていく事をミッションとしています。</p>
						</div>
						<a href="<?php echo home_url('/company'); ?>">会社概要を詳しく見る</a>
					</div>
				</div>
				<div class="profile-list services">
					<div class="profile-images"><img alt="事業内容のイメージ画像" src="./wp-content/uploads/services.png"></div>
					<div class="profile-items">
						<div class="profile-text">
							<h5>事業内容</h5>
							<p>株式会社LULLは、様々な事業モデルを通してお客様と企業様と繋がっています。LULLの「価値」を感じて頂けるよう、満足度の高いサービスを提供します。</p>
						</div><a href="">事業内容を詳しく見る</a>
					</div>
				</div>
				<div class="profile-list recruit">
					<div class="profile-images"><img alt="採用情報のイメージ画像" src="./wp-content/uploads/recruit.png"></div>
					<div class="profile-items">
						<div class="profile-text">
							<h5>採用情報</h5>
							<p>株式会社LULLは、様々な事業モデルを通してお客様と企業様と繋がっています。LULLの「価値」を感じて頂けるよう、満足度の高いサービスを提供します。</p>
						</div><a href="">採用情報を詳しく見る</a>
					</div>
				</div>
			</div>
		</section>
	</main>
	<section class="section-blog">
		<div class="container">
			<div class="section-title">
				<h4>BLOG</h4>
				<p>ブログ</p>
			</div>
			<div class="content-inner">
				<ul class="blog-list">
					<li class="blog-items">
						<img alt="ブログの挿入画像" src="./wp-content/uploads/blog1.png">
						<p class="blog-title">ブログタイトルが入りますブログタイトルが入りますブログタイトルが入りますブログタイトル</p>
						<div class="blog-type-date">
							<p>社員紹介</p><time>2021.10.01</time>
						</div>
					</li>
					<li class="blog-items">
						<img alt="ブログの挿入画像" src="./wp-content/uploads/blog2.png">
						<p class="blog-title">ブログタイトルが入りますブログタイトルが入りますブログタイトルが入りますブログタイトル</p>
						<div class="blog-type-date">
							<p>社内イベント</p><time>2021.10.01</time>
						</div>
					</li>
					<li class="blog-items">
						<img alt="ブログの挿入画像" src="./wp-content/uploads/blog3.png">
						<p class="blog-title">ブログタイトルが入りますブログタイトルが入りますブログタイトルが入りますブログタイトル</p>
						<div class="blog-type-date">
							<p>社員紹介</p><time>2021.10.01</time>
						</div>
					</li>
				</ul>
				<p class="blog-list-all"><a href="">ブログ一覧はこちら</a></p>
			</div>
		</div>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>
	<script src="./wp-content/themes/twentytwentyone/main.js"></script>
</body>
</html>

<?php
get_sidebar();
get_footer();
?>
