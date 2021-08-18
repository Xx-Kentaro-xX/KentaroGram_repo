 <!-- 自己紹介カード -->
 <div class="sidebar" id="sidebar">
   <div class="card">
     <div class="card_picture">
       <?php if (date('d') == 28) : ?>
         <img src="<?php echo get_template_directory_uri(); ?>/img/face_icon_crazy.png" class="profile_image">
       <?php else : ?>
         <img src="<?php echo get_template_directory_uri(); ?>/img/face_icon_normal.png" class="profile_image">
       <?php endif; ?>
     </div>

     <div class="card-body">
       <h5 class="card-title"><b>ケンタロウ</b></h5>
       <p class="card-text">
         <?php echo date('Y') - 1996; ?>歳の文系出身のシステムエンジニア(社会人<?php echo date('Y') - 2018 + 1; ?>年目)
         <br><br>
         開発業務がやりたいけれど、なかなかできなくて時間を見つけては自己学習に励んでます笑
         <br><br>
         好きなものは筋トレ、入浴、ディズニーです！
       </p>
       <a href="<?php echo esc_url(home_url('/about_me')); ?>" class="btn btn-warning"><b>もっと詳しく</b></a>
     </div>
   </div>

   <p></p>

   <!-- カテゴリー -->
   <div class="category_block mt-5 mb-3">
     <div class="category_list_title pt-3 pb-3">
       <b>
         カテゴリー
       </b>
     </div>

     <div class="category_list">
       <ul class="list-group">
         <li class="list-group-item category_link"><a href="<?php echo esc_url(home_url('/category/programing')); ?>">プログラミング</a></li>
         <li class="list-group-item category_link"><a href="<?php echo esc_url(home_url('/category/database')); ?>">データベース</a></li>
         <li class="list-group-item category_link"><a href="<?php echo esc_url(home_url('/category/cloud')); ?>">クラウド</a></li>
		   <li class="list-group-item category_link"><a href="<?php echo esc_url(home_url('/category/certification')); ?>">資格取得</a></li>
         <li class="list-group-item category_link"><a href="<?php echo esc_url(home_url('/category/others')); ?>">その他</a></li>
       </ul>
     </div>
   </div>
   <!-- カテゴリーのしたの歯車 -->
   <div class="container">
     <div class="row">
       <div class="col-3"></div>
       <div class="col-6">
         <img src="<?php echo get_template_directory_uri(); ?>/img/turning_gear.png" class="gear gear1">
       </div>
       <div class="col-3"></div>
     </div>
   </div>

   <!-- タグリスト -->
   <div class="tag_block mt-5 mb-3">
     <div class="tag_list_title pt-3 pb-3">
       <b>
         タグ
       </b>
     </div>

     <div class="tag_list pt-3 px-3 pb-3">
       <?php
        $tag_args = array(
          'orderby' => 'name',
          'order' => 'ASC'
        );

        $tags = get_tags($tag_args); ?>
       <?php foreach ($tags as $tag) : ?>
         <span class="each_tag"><a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="pt-2 px-1 pb-2"><?php echo esc_html($tag->name); ?>: <?php echo esc_html($tag->count); ?></a></span>
         /
       <?php endforeach; ?>
     </div>
     <div class="mt-5 mb-5">
       <?php if (date('d') == 26) : ?>
         <img src="<?php echo get_template_directory_uri(); ?>/img/captain_america_shield_broken.png" class="shield shield1">
       <?php else : ?>
         <img src="<?php echo get_template_directory_uri(); ?>/img/captain_america_shield.png" class="shield shield1">
       <?php endif; ?>
     </div>
   </div>


 </div>