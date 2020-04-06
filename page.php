<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<section>
			<h2><?php the_title(); ?></h2>
			<table class="ta1">
				<caption>正社員募集</caption>
				<tr>
					<td><a href="#"><?php the_content(); ?></a></td>
				</tr>

			</table>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
	</body>


	<!--/#main-->
	<div id="side">
		<?php get_sidebar('product'); ?>
		<?php get_sidebar('access'); ?>
	</div>


	<?php get_footer(); ?>





	</html>