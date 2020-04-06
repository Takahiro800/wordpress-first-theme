<?php get_header(); ?>



<!--スライドショー-->
<?php if (is_home()) : ?>
	<aside id="mainimg">
		<div class="inner">
			<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="" class="slide0">
			<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="" class="slide1">
			<img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" alt="" class="slide2">
			<img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" alt="" class="slide3">
		</div>
	</aside>
<?php endif; ?>

<section id="new">
	<h2>更新情報・お知らせ</h2>
	<?php if (have_posts()) : ?>
		<dl>
			<?php while (have_posts()) : the_post(); ?>
				<div class="col-md-4">
					<article id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
						<div class="news_meta">
							<a href="<?php the_permalink(); ?>" ?>
								<dt><?php the_time('Y/m/d'); ?></dt>
								<dd><?php the_title(); ?></dd>
							</a>
						</div>
				</div>
			<?php endwhile; ?>
			<dt>2018/11/22</dt>
			<dd>tp_cool7配布開始。<span class="newicon">NEW</span></dd>
		</dl>
		<p class="r">&raquo;&nbsp;<a href="#">過去ログ</a></p>
	<?php else : ?>
		<p><a>まだ投稿記事はありません。</a></p>

	<?php endif; ?>
</section>

<section>

	<h2>テンプレートのご利用前に必ずお読み下さい</h2>

	<h3>利用規約のご案内</h3>
	<p>このテンプレートは、<a href="http://template-party.com/">Template Party</a>にて無料配布している『ビジネスサイトサイト向け 無料ホームページテンプレート tp_cool7』です。必ずダウンロード先のサイトの<a href="http://template-party.com/read.html">利用規約</a>をご一読の上でご利用下さい。</p>
	<p><strong class="color1">■HP最下部の著作表示『Web Design:Template-Party』は無断で削除しないで下さい。</strong><br>
		わざと見えなく加工する事も禁止です。</p>
	<p><strong class="color1">■下部の著作を外したい場合は</strong><br>
		<a href="http://template-party.com/">Template-Party</a>の<a href="http://template-party.com/member.html">ライセンス契約</a>を行う事でHP下部の著作を外す事ができます。</p>

	<h3>当テンプレートにはお問い合わせフォーム（自動フォーム：試用版）がセットされています</h3>
	<p><a href="contact.html">contact.html</a>と同じ３項目のお問い合わせフォームを簡単に使えるようにセットしています。</p>
	<p><strong class="color1">■自動フォームを使う場合（※編集に入る前にご確認下さい）</strong><br>
		あなたのメールアドレス設定と、簡単な編集だけで使えます。<a href="http://template-party.com/file/formgen_manual_set2.html" target="_blank">詳しくはこちらのマニュアルをご覧下さい。</a></p>
	<p><strong class="color1">■自動フォームを使わない場合</strong><br>
		テンプレートに梱包されている「form.html」「confirm.html」「finish.html」の3枚のファイルを削除して下さい。</p>

	<h3>メニューなどの開閉ブロック（openclose.js）について</h3>
	<p>当テンプレートの開閉ブロックパーツは<a href="http://www.crytus.co.jp/">有限会社クリタス様</a>提供のプログラムを使用しています。openclose.jsファイルは改変せずにご利用下さい。<br>
		また、当サイトのテンプレート以外に使いたいなど、「プログラムのみ」を使う場合は<a href="http://template-party.com/free_program/openclose_license.html">こちらの規約</a>をお守り下さい。</p>

	<h3>当テンプレートの詳しい使い方は</h3>
	<p><a href="company.html#about">こちらをご覧下さい。</a></p>

</section>

</div>
<!--/#main-->

<div id="sub">

	<?php get_sidebar('contents'); ?>

	<?php get_sidebar('product'); ?>

	<?php get_sidebar('access'); ?>

</div>
<!--/#sub-->

</div>
<!--/#contents-in-->

<div id="side">
	<?php get_sidebar('contents'); ?>
	<?php get_sidebar('product'); ?>
	<?php get_sidebar('access'); ?>

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
		<a href="recruit.html"><img src="<?php echo get_template_directory_uri(); ?>/images/banner1.jpg" alt="採用情報" class="pc"></a>
		<a href="recruit.html"><img src="<?php echo get_template_directory_uri(); ?>/images/banner1_sh.jpg" alt="採用情報" class="sh"></a>
	</p>
	<p>上のバナー画像は、801px以上の端末と800px以下とで画像２種類が切り替わります。<br>
		<a href="company.html#banner">詳しい説明はこちら。</a></p>

</div>
<!--/#side-->

</div>
<!--/#contents-->

<?php get_footer(); ?>