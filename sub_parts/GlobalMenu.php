<!-- Global Menu -->

<div class="container-fluid global_menu pt-3 pb-3">
  <!-- PC表示のメニュー(ページの幅が広い時(992以上)のみ表示) -->
  <div class="row globa-menu" id="pc-nav">
    <div class="col-md-5">
      <h1 class="SiteLogo"><b><a href="<?php echo esc_url(home_url('/')); ?>">KentaroGram</a></b></h1>
    </div>
    <div class="col-md-7">

      <ul class="nav">
        <!-- ホーム -->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
        </li>

        <!-- サイトについて -->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo esc_url(home_url('/about_site')); ?>">サイトについて</a>
        </li>

 			<!-- カテゴリー -->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo esc_url(home_url('/category-list')); ?>">カテゴリー</a>
        </li>
		  
		  <!-- タグ -->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo esc_url(home_url('/tag-list')); ?>">タグ</a>
        </li>
		  
		   <!-- お問い合わせ -->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo esc_url(home_url('/message')); ?>">お問い合わせ</a>
        </li>

      </ul>

    </div>
  </div>

  <!-- スマホ表示のメニュー (ページの幅が狭い時(992以下)のみ表示)-->
    <div class="container" id="phone-nav">
      <div class="row">
        <h2 class="SiteLogo SiteLogo_phone"><b><a href="<?php echo esc_url(home_url('/')); ?>">KentaroGram</a></b></h2>
      </div>

      <div class="row">
        <img src="<?php echo get_template_directory_uri(); ?>/img/acordion_icon.png" class="acordion_icon" id="acordion_icon" onclick="AcordionControl();">
      </div>
    </div>

    <ul class="phone-nav" id="phone-nav-lists">
      <!-- ホーム -->
      <hr>
      <li>
        <b>
          <a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
        </b>
      </li>
      <hr>

		 <!-- サイトについて -->
      <hr>
      <li>
        <b>
          <a class="nav-link" href="<?php echo esc_url(home_url('/about_site')); ?>">サイトについて</a>
        </b>
      </li>
      <hr>
		
		<!-- カテゴリー　一覧 -->
		<hr>
		<li>
		  <b>
			<a class="nav-link" href="<?php echo esc_url(home_url('/category-list')); ?>">カテゴリー 一覧</a>
		  </b>
		</li>
		<hr>
		
	 <!-- タグ一覧 -->
    <hr>
    <li>
      <b>
        <a class="nav-link" href="<?php echo esc_url(home_url('/tag-list')); ?>">タグ 一覧</a>
      </b>
    </li>
    <hr>
		
      <!-- ケンタロウについて -->
      <hr>
    <li>
      <b>
        <a class="nav-link" href="<?php echo esc_url(home_url('/about_me')); ?>">ケンタロウについて</a>
      </b>
    </li>
    <hr>

      <!-- お問い合わせ -->
      <hr>
      <li>
        <b>
          <a class="nav-link" href="<?php echo esc_url(home_url('/message')); ?>">お問い合わせ</a>
        </b>
      </li>
      <hr>
    </ul>

</div>