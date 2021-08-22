<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php
        global $page, $paged;
        if (is_front_page()) : //トップページ
          echo 'KentaroGram';
          // bloginfo('name');
        elseif (is_home()) : //ブログページ（ブログサイトの場合はトップページ）
          wp_title('｜', true, 'right');
          bloginfo('name');
        elseif (is_page()) : //固定ページ
          wp_title('｜', true, 'right');
          bloginfo('name');
        elseif (is_single()) : //投稿ページ
          wp_title('｜', true, 'right');
          bloginfo('name');
        elseif (is_category()) : //カテゴリーページ
          single_term_title();
          echo '｜カテゴリーページ';
        elseif (is_tag()) : //タグページ
          single_term_title();
          echo '｜タグページ';
        elseif (is_archive()) : //アーカイブページ
          wp_title('');
          echo '｜省略タイトル';
        elseif (is_404()) : //404ページ
          echo '404｜';
          bloginfo('name');
        endif;
        ?></title>

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/Site_favicon.png">

<!-- Bootstrap CSS Link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

<!-- WordPress管理バー表示 -->
<?php wp_head(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WKDXLXHL04"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-WKDXLXHL04');
</script>