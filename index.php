<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>


<body>
  <!-- Global Menu -->
  <?php get_template_part('sub_parts/GlobalMenu'); ?>

  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid mt-3 mb-3">
    <div class="container header_image">
      <img src="<?php echo get_template_directory_uri(); ?>/img/site_image.png">
    </div>
  </div>

  <hr class="under_jumbotron">

  <!-- 記事エリアヘッダー -->
  <div class="container">
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-7 mt-3 mb-3 articles_list">記事一覧</div>
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
        <?php get_template_part('sub_parts/main'); ?>
      </div>

      <!-- 記事とサイドバーの間の余白 -->
      <div class="col-lg-1"></div>

      <!-- サイドバー -->
      <div class="col-lg-3">
        <?php get_sidebar(); ?>
      </div>

    </div>
  </div>

  <!-- 画面フッター -->
  <?php get_template_part('sub_parts/ScreenFooter'); ?>

  <?php get_footer(); ?>
</body>

</html>