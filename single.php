<?php get_header(); ?>

<h2 class="Pagetitle">積ん読の本たち<span>〜まだまだ勉強がたりんのや〜</span></h2>

<main class="main">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-9">

<?php if (have_posts() ): ?>
  <?php while (have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
      <header class="article_header">
        <h2 class="article_title"><?php the_title(); ?></h2>
        <div class="artilce_meta">
          <?php the_category(); ?>
          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
        </div>
      </header>

      <div class="article_body">
        <div class="content">
          <?php the_content(); ?>
        </div>
      </div>

      <div claaa="postLinks">
        <div class="postLink postLink-prev"><?php previous_post_link(); ?></div>
        <div class="postLink postLink-next"><?php next_post_link(); ?></div>

      </div>

    </article>
  <?php endwhile; ?>
<?php endif; ?>

      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>