<?php get_header(); ?>

<?php if (have_posts() ): ?>
<?php while( have_posts() ) : the_post(); ?>
<section>
<h2><?php the_title(); ?></h2>
<table class="ta1">
	<caption>正社員募集</caption>
	<?php for ($count = 0; $count < 6; $count++){ ?>
	<tr>
	<th>見出し</th>
	<td><a href="#"><?php the_content(); ?></a></td>
	</tr>
<?php } ?>
</table>
	<?php endwhile; ?>
	<?php endif; ?>



<!--/#main-->


<?php get_footer(); ?>



</body>
</html>
