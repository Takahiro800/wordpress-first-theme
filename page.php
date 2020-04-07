<?php get_header(); ?>

<div class="fix-main">
	<div class="fixpage-main">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<section>
					<h2><?php the_title(); ?></h2>
					<table class="ta1">
						<caption></caption>
						<tr>
							<td><a href="#"><?php the_content(); ?></a></td>
						</tr>

					</table>
				<?php endwhile; ?>
			<?php endif; ?>
	</div>

	<div class="right">
		<?php get_sidebar('contents'); ?>

		<section>
			<h2>製品情報</h2>
			<?php for ($i = 0; $i < 5; $i++) { ?>
				<div class="list">
					<a href="service2.html">
						<figure><img src="<?php echo get_template_directory_uri(); ?>/images/sample1.jpg" alt="写真の説明"></figure>
						<h4>製品タイトル<span class="newicon">NEW</span></h4>
						<p>サンプルテキスト。サンプルテキスト。</p>
					</a>
				</div>
			<?php } ?>
		</section>
	</div>
</div>
<!--/#main-->
<div class="left">
	<?php get_sidebar('product'); ?>
	<?php get_sidebar('access'); ?>
</div>





<?php get_footer(); ?>



</body>

</html>