<div>
  <h2>新着記事</h2>
  <ul class="submenu">

    <ul>
      <?php
      $count_posts = wp_count_posts();
      $args = array(
        'posts_per_page' => 5 // 表示件数の指定
      );
      $posts = get_posts($args);
      foreach ($posts as $post) : // ループの開始
        setup_postdata($post); // 記事データの取得
        ?>
        <li>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
      <?php
      endforeach; // ループの終了
      wp_reset_postdata(); // 直前のクエリを復元する
      ?>
    </ul>
</div>
<!--/#side-->
<!--/#contents-->