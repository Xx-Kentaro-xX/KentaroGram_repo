<div class="comment_area">
  <h2 class="comment_title">コメントエリア</h2>


  <?php
  $get_comments_args = [
    "type" => "comment",
    "status" => "approve",
  ];

  $comment_id = 0;

  foreach (get_comments($get_comments_args) as $comment) :
  ?>
    <!-- コメントが現在の投稿に紐づいているかチェック -->
    <?php if($comment->comment_post_ID == get_the_ID()):?>
    <?php $comment_id += 1; ?>


    <div class="each_comment">
      <?php echo $comment_id; ?>.
      <?php echo $comment->comment_author; ?>
      <br>
      <?php echo $comment->comment_date; ?>
      <br>
      <?php echo $comment->comment_content; ?>
    </div>
    <?php else:?>

    <?php endif;?>
    
  <?php endforeach; ?>

</div>

<div class="comment_form">
  <?php
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
  $args = array(
    'fields'               => apply_filters('comment_form_default_fields', array(
      'author' => '<p class="comment-form-author">' . '<label for="author">' . __('名前') . ($req ? ' <span class="required">*</span>' : '') . '</label> ' . '<br><input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /></p>',
    )),
    'comment_field'        =>  '<p class="comment-form-comment"><label for="comment">' . 'メッセージ' . '</label><br><textarea id="comment" name="comment" cols="40" rows="8" aria-required="true">' . '</textarea></p>',
    'title_reply' => 'コメントする',
    'class_submit' => 'btn btn-warning',
  );

  comment_form($args);

  ?>
</div>