<?php 
  add_action('init',function(){

    // テーマの機能を拡張する際に"add_theme_suport を使う
    add_theme_support('post-thumbnails');

    // メニュー使用の拡張
    register_nav_menus([
      'global-nav' => 'グローバルナビゲーション',
    ]);
  });

	// comment_formの余分な注釈を削除
	add_filter("comment_form_defaults", "my_comment_notes_before");
	function my_comment_notes_before($defaults)
	{
		$defaults['comment_notes_before'] = '';
		return $defaults;
	}


  // アイキャッチ画像がない場合の標準画像の取得(投稿ページ用)
  function get_eyecatch_default(){
      // アイキャッチがあった場合
      if(has_post_thumbnail()):

        //記事のアイキャッチ画像のID番号を取得
        $id = get_post_thumbnail_id();
        //上記のID番号を元に、記事のアイキャッチ画像のリンクを取得
        $img = wp_get_attachment_image_src($id, 'full');
      
      //記事にアイキャッチがなかった場合 
      else:
        $img = null;

      endif;

      return $img;
  }