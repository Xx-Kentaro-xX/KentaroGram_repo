<!-- 記事サーチPHP開始 -->
<?php if (have_posts()) : ?>
 <!-- 投稿ごとのループ開始 -->
  <?php while (have_posts()) : the_post(); ?>
    <div class="post-preview">
      <h2 class="post-title">
        <!-- アイキャッチ画像 -->
        <?php if (has_post_thumbnail()) : ?>
          <a href="<?php the_permalink() ?>">
            <?php the_post_thumbnail(); ?>
          </a>
        <?php else : ?>
          <a href="<?php the_permalink() ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/default_article_thumbnail.png">
          </a>
        <?php endif; ?>
		　　　<br>
        <br>
        <!-- 投稿タイトル表示 -->
		  <a href="<?php the_permalink() ?>">
        	<?php the_title() ?>
		  </a>
		</h2>
      <!-- 一部本文表示 -->
      <h3 class="post-subtitle">
        <?php the_excerpt() ?>
      </h3>

      <!-- 投稿日 -->
      <div>
        投稿日: <?php the_time('Y年m月d日'); ?>
      </div>
    </div>
    <hr>
  <?php endwhile; ?>
  <!-- 投稿ごとのループ終了 -->


  <!-- Pager -->
  <?php
  // 現在のページよりも前のページが存在するかどうかを確認(&larr -> 左矢印を表示するためのHTMLの特殊文字) 
  $link_previous_page = get_previous_posts_link('&larr; NEW');
  // 現在のページよりも前のページが存在するかどうかを確認(&larr -> 左矢印を表示するためのHTMLの特殊文字) 
  $link_next_page = get_next_posts_link('OLD &rarr;');
  ?>

  <div class="container">
    <div class="row">

      <!-- 新しい記事ボタン(新しい記事がないときは表示なし)-->
      <div class="col-3">
        <?php
        // 前のページがある = linkに値が入り、必ず<a> タグで開始するのでCSSがきちんと適応されるようにstr_replaceでクラスを反映
        if ($link_previous_page) {
          $link = str_replace('<a', '<a class="btn btn-warning"', $link_previous_page);
          echo $link;
        }
        ?>
      </div>

      <div class="col-6"></div>

      <!-- 古い記事ボタン(古い記事がないときは表示なし) -->
      <div class="col-3">

        <?php
        // 前のページがある = linkに値が入り、必ず<a> タグで開始するのでCSSがきちんと適応されるようにstr_replaceでクラスを反映
        if ($link_next_page) {
          $link = str_replace('<a', '<a class="btn btn-warning"', $link_next_page);
          echo $link;
        }

        ?>
      </div>

    </div>
  </div>

  <!-- 記事サーチPHP終了 -->
<?php else : ?>
  <p>記事が見つかりませんでした</p>
<?php endif ?>
<!-- 記事サーチPHP終了 -->