<?php get_header(); ?>

<div id="contents" class="inner">
	<div id="contents-in">

		<div id="main">

			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

					<section>

						<h2><?php the_title(); ?></h2>
						<p>リンクのご案内。</p>

						<table class="ta1">
							<a href="#" ＞<?php the_content(); ?></a> </table> </section> <? endwhile; ?> <? else : ?> <section>

								<h2>リンク</h2>
								<p>リンクのご案内。</p>
					</section>
				<? endif; ?>

		</div>
		<!--/#main-->

		<div id="sub">

			<?php get_sidebar('contents'); ?>
			<nav>
				<ul class="submenu">
					<li><a href="#">メニューサンプル</a></li>
					<li><a href="#">メニューサンプル</a></li>
					<li><a href="#">メニューサンプル</a></li>
					<li><a href="#">メニューサンプル</a></li>
					<li><a href="#">メニューサンプル</a></li>
				</ul>
			</nav>

			<?php get_sidebar('product'); ?>

			<div class="box1">
				<h2>アクセス</h2>
				<p>東京都XX区XXXXビル３F<br>
					TEL：03-0000-0000<br>
					受付：9:00～16:00<br>
					定休日：土日祝</p>
			</div>

		</div>
		<!--/#sub-->

	</div>
	<!--/#contents-in-->

	<div id="side">

		<section>

			<h2>製品情報</h2>

			<div class="list">
				<a href="service2.html">
					<figure><img src="images/sample1.jpg" alt="写真の説明"></figure>
					<h4>製品タイトル<span class="newicon">NEW</span></h4>
					<p>サンプルテキスト。サンプルテキスト。</p>
				</a>
			</div>

			<div class="list">
				<a href="service2.html">
					<figure><img src="images/sample1.jpg" alt="写真の説明"></figure>
					<h4>製品タイトル</h4>
					<p>サンプルテキスト。サンプルテキスト。</p>
				</a>
			</div>

			<div class="list">
				<a href="service2.html">
					<figure><img src="images/sample1.jpg" alt="写真の説明"></figure>
					<h4>製品タイトル</h4>
					<p>サンプルテキスト。サンプルテキスト。</p>
				</a>
			</div>

			<div class="list">
				<a href="service2.html">
					<figure><img src="images/sample1.jpg" alt="写真の説明"></figure>
					<h4>製品タイトル</h4>
					<p>サンプルテキスト。サンプルテキスト。</p>
				</a>
			</div>

			<div class="list">
				<a href="service2.html">
					<figure><img src="images/sample1.jpg" alt="写真の説明"></figure>
					<h4>製品タイトル</h4>
					<p>サンプルテキスト。サンプルテキスト。</p>
				</a>
			</div>

		</section>

		<nav>
			<h2>Contents</h2>
			<ul class="submenu">
				<li><a href="#">メニューサンプル</a></li>
				<li><a href="#">メニューサンプル</a></li>
				<li><a href="#">メニューサンプル</a></li>
				<li><a href="#">メニューサンプル</a></li>
				<li><a href="#">メニューサンプル</a></li>
			</ul>
		</nav>

		<p>
			<a href="recruit.html"><img src="images/banner1.jpg" alt="採用情報" class="pc"></a>
			<a href="recruit.html"><img src="images/banner1_sh.jpg" alt="採用情報" class="sh"></a>
		</p>
		<p>上のバナー画像は、801px以上の端末と800px以下とで画像２種類が切り替わります。<br>
			<a href="company.html#banner">詳しい説明はこちら。</a></p>

	</div>
	<!--/#side-->

</div>
<!--/#contents-->

<footer>

	<div id="footermenu" class="inner">
		<ul>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
		</ul>
		<ul>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
		</ul>
		<ul>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
		</ul>
		<ul>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
		</ul>
		<ul>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
			<li><a href="#">メニューサンプル</a></li>
		</ul>
	</div>
	<!--/footermenu-->

	<div id="copyright">
		<small>Copyright&copy; <a href="index.html">SAMPLE COMPANY</a> All Rights Reserved.</small>
		<span class="pr"><a href="http://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>
	</div>

</footer>

<p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>

<!--小さな端末用（800px以下端末）メニュー-->
<script type="text/javascript">
	if (OCwindowWidth() <= 800) {
		open_close("newinfo_hdr", "newinfo");
	}
</script>

<!--メニュー開閉ボタン-->
<div id="menubar_hdr" class="close"></div>
<!--メニューの開閉処理条件設定　800px以下-->
<script type="text/javascript">
	if (OCwindowWidth() <= 800) {
		open_close("menubar_hdr", "menubar-s");
	}
</script>

</body>

</html>