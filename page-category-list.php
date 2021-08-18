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
      <img src="<?php echo get_template_directory_uri(); ?>/img/site_name_logo.png">
    </div>

    <hr class="under_jumbotron">

    <?php while (have_posts()) : the_post(); ?>

      <!-- 記事エリアヘッダー -->
      <div class="container">
        <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-7 mt-3 mb-3 articles_list"><?php the_title(); ?></div>
          <div class="col-lg-1"></div>
        </div>
      </div>

      <!-- 記事エリア　-->
      <div class="container">
        <div class="row">

          <!-- 左の余白 -->
          <div class="col-lg-1"></div>

          <!-- Main(記事リスト) -->
          <div class="col-lg-7 mt-3 mb-5 article_area">
            <?php the_content(); ?>

            <!-- カテゴリを追加する場合は、カテゴリのSlugとカテゴリカードイメージのファイル名を一致させること！ -->
            <?php
            $category_order_args = array(
              'orderby' => 'id',
              'order' => 'desc',
              'hide_empty' => 1,
            );

            $categories = get_categories($category_order_args);
            foreach ($categories as $category) :
            ?>
              <a href="<?php echo esc_url(home_url('/category' . '/' . $category->slug)); ?>" class="category_card_link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/category_cards/<?php echo $category->slug; ?>.png" class="category_card_image">
              </a>
            <? endforeach; ?>
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