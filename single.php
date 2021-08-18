<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>


<body>
  <!-- Global Menu -->
  <?php get_template_part('sub_parts/GlobalMenu'); ?>

  <?php if (have_posts()) : ?>

    <!-- ジャンボトロンエリア -->

    <div class="container header_image">
      <img src="<?php echo get_template_directory_uri(); ?>/img/article_screen_header.png">
    </div>

    <hr class="under_jumbotron">

    <?php while (have_posts()) : the_post(); ?>

      <!-- 記事エリアヘッダー -->
      <div class="container">
        <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-7 mt-3 mb-3 articles_list">
            <?php the_title(); ?>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bulb.png" class="bulb" id="bulb">
          </div>
        </div>
      </div>

      <!-- 記事エリア　-->
      <div class="container">
        <div class="row">

          <!-- 左の余白 -->
          <div class="col-lg-1"></div>

          <!-- Main(記事リスト) -->
          <div class="col-lg-7 mt-3 mb-5 article_area">
            <!-- アイキャッチ画像 -->
            <?php $img = get_eyecatch_default(); ?>
            <?php if ($img == null) : ?>
              <!-- 画像が設定されていなければ表示なし -->
            <?php else : ?>
              <img src=<?php echo $img[0]; ?> id="eyecatch_image">
            <?php endif; ?>

            <!-- 投稿日 -->
            投稿日: <?php the_date(); ?>
			  
			  <br>
                     <!-- 最終更新日 -->
            最終更新日: <?php the_modified_date(); ?>

            <br>
            <br>
            <!-- 関連カテゴリー -->
            カテゴリー:
            <?php
            $attached_categories = get_the_category();
            if ($attached_categories) :
              $category_number = count($attached_categories);
              $count = 0;
            ?>

              <?php foreach ($attached_categories as $category) : ?>
                <a href="<?php echo esc_url(home_url('/tag' . '/' . $category->slug)); ?>" class="attached_category">
                  <?php echo esc_attr($category->name); ?>
                </a>
                <?php if ($count < $category_number - 1) : ?>
                  <span>/</span>
                  <?php $count += 1; ?>
                <?php endif; ?>
              <?php endforeach; ?>
            <?php endif; ?>
            <br>
            <br>

            <!-- 関連タグ -->
            タグ:
            <?php
            $attached_tags = get_the_tags();
            if ($attached_tags) :
              $tag_number = count($attached_tags);
              $count = 0;
            ?>

              <?php foreach ($attached_tags as $tag) : ?>
                <a href="<?php echo esc_url(home_url('/tag' . '/' . $tag->slug)); ?>" class="attached_tag">
                  <?php echo esc_attr($tag->name); ?>
                </a>
                <?php if ($count < $tag_number - 1) : ?>
                  <span>/</span>
                  <?php $count += 1; ?>
                <?php endif; ?>
              <?php endforeach; ?>

            <?php endif; ?>
            <!-- 本文 -->
            <?php the_content(); ?>
			  
			  <!-- コメント欄 -->
           <?php comments_template(); ?>
			  
          </div>

          <!-- 記事とサイドバーの間の余白 -->
          <div class="col-lg-1"></div>

          <!-- サイドバー -->
          <div class="col-lg-3">
            <?php get_sidebar(); ?>
          </div>

        </div>
      </div>

    <?php endwhile; ?>
  <?php endif; ?>

  <!-- 画面フッター -->
  <?php get_template_part('sub_parts/ScreenFooter'); ?>

  <?php get_footer(); ?>
</body>

</html>